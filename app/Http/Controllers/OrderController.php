<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\TableSession;
use App\Models\RestaurantTable;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function create()
    {
        $menuItems = MenuItem::with('dish.dish_type')->get();

        $groupedMenuItems = $menuItems->groupBy(function ($item) {
            return $item->dish->dish_type->DishTypeName;
        });

        $groupedMenuItemsArray = $groupedMenuItems->map(function ($items, $type) {
            return [
                'type' => $type,
                'items' => $items->map(function ($item) {
                    return [
                        'id' => $item->MenuItemID,
                        'number' => $item->ItemNumber,
                        'extraIdentifier' => $item->ExtraIdentifier,
                        'name' => $item->dish->DishName,
                        'price' => $item->dish->Price,
                    ];
                })->toArray(),
            ];
        })->values()->toArray();

        $tables = RestaurantTable::with([
            'table_sessions' => function ($query) {
                $query->latest('SessionID')->first();
            }
        ])->get();

        return view('orders.create', [
            'menuItems' => $groupedMenuItemsArray,
            'tables' => $tables,
        ]);
    }

    public function processOrder(Request $request)
    {
        $messages = [
            'tableID.required' => 'Tafel-ID is verplicht.',
            'tableID.integer' => 'Tafel-ID moet een geheel getal zijn.',
            'tableID.exists' => 'De geselecteerde tafel bestaat niet.',
            'order.required' => 'Bestellingsgegevens zijn verplicht.',
            'order.array' => 'Bestelling moet een array zijn.',
            'TotalPrice.required' => 'Totale prijs is verplicht.',
            'TotalPrice.numeric' => 'Totale prijs moet een numerieke waarde zijn.',
        ];

        $request->validate([
            'tableID' => 'required|integer|exists:restaurant_tables,TableID',
            'order' => 'required|array',
            'TotalPrice' => 'required|numeric',
        ], $messages);

        $tableID = $request->input('tableID');
        $orderData = $request->only(['TotalPrice']);
        $orderData['OrderTime'] = Carbon::now();

        // Find the latest session for the selected table
        $tableSession = TableSession::where('TableID', $tableID)->latest('SessionID')->first();

        if (!$tableSession) {
            return response()->json(['message' => 'Geen actieve sessie gevonden voor de geselecteerde tafel'], 400);
        }

        $orderData['SessionID'] = $tableSession->SessionID;

        $order = Order::create($orderData);

        foreach ($request->order as $item) {
            OrderItem::create([
                'OrderID' => $order->OrderID,
                'MenuItemID' => $item['MenuItemID'],
                'Quantity' => $item['Quantity'],
                'ItemPrice' => $item['ItemPrice'],
                'Note' => $item['Note'] ?? null,
            ]);
        }

        return response()->json(['message' => 'Order successfully created']);
    }


}
