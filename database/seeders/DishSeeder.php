<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\DishType;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            ['DishName' => 'Soep Ling Fa', 'Price' => 3.8, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Kippensoep', 'Price' => 2.9, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Tomatensoep', 'Price' => 2.9, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Haaienvinnensoep', 'Price' => 3.1, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Champignonsoep', 'Price' => 3.3, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Pekingsoep', 'Price' => 3.8, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Wan Tan Soep', 'Price' => 4.3, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Chinese Champignonsoep', 'Price' => 4.1, 'Description' => null, 'DishTypeName' => 'SOEP'],
            ['DishName' => 'Loempia Ling Fa', 'Price' => 6.2, 'Description' => 'met atjar, ananas en pindasaus', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Loempia Compleet', 'Price' => 6.2, 'Description' => 'met gesmoord rundvlees en pikante saus', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Loempia met Kip', 'Price' => 3.9, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Loempia', 'Price' => 3.8, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Chinese mini loempia', 'Price' => 4.9, 'Description' => '4 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Vegetarische mini loempia', 'Price' => 4.9, 'Description' => '12 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Kroepoek', 'Price' => 2.5, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Casave Kroepoek', 'Price' => 2.7, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Pangsit Goreng', 'Price' => 3.9, 'Description' => '7 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Pisang Goreng', 'Price' => 3.4, 'Description' => '5 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Chinese Dim Sum', 'Price' => 5.4, 'Description' => 'mini loempia, kerry ko, pangsit goreng, garnalenpasteitje', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Sat&eacute; Babi', 'Price' => 5.4, 'Description' => '4 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Sat&eacute; Ajam', 'Price' => 5.4, 'Description' => '4 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Sat&eacute; Garnalen', 'Price' => 9.9, 'Description' => '3 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Fong Mei Ha', 'Price' => 8.1, 'Description' => 'krokant gepaneerd garnalen. 4 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Patat', 'Price' => 2.3, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Tsa Siu Mai', 'Price' => 3.5, 'Description' => 'gebakken vleespasteitje. 4 st.', 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Atjar', 'Price' => 3.0, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Witte Rijst', 'Price' => 3.0, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Grote pindasaus', 'Price' => 3.9, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Kleine pindasaus', 'Price' => 2.3, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Kippenpootje', 'Price' => 2.3, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Halve kip', 'Price' => 6.0, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Kroket', 'Price' => 1.4, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Frikandel', 'Price' => 1.4, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Kleine Sambal', 'Price' => 2.5, 'Description' => null, 'DishTypeName' => 'VOORGERECHT'],
            ['DishName' => 'Bami of Nasi Goreng Ling Fa', 'Price' => 14.3, 'Description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje', 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi Goreng met ei', 'Price' => 5.0, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi Goreng speciaal', 'Price' => 8.5, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi Goreng met sat&eacute;', 'Price' => 8.5, 'Description' => '3 st.', 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Nasi Yeung Chow', 'Price' => 10.9, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Nasi Yeung Chow', 'Price' => 13.0, 'Description' => 'met garnaaltjes en Cha Sieuw-vlees', 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi Malay', 'Price' => 9.3, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi met kipfilet', 'Price' => 9.3, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi met varkensvlees', 'Price' => 9.3, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi met garnalen', 'Price' => 14.3, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Bami of Nasi met ossenhaas', 'Price' => 15.3, 'Description' => null, 'DishTypeName' => 'BAMI EN NASI GERECHTEN'],
            ['DishName' => 'Babi Pangang, Foe Yong Hani en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Babi Pangang, Tjap Tjoy en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Babi Pangang, Koe Loe Yuk en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Babi Pangang, Tau Sie Kai en sat&eacute;', 'Price' => 16.5, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Koe Loe Yuk, Foe Yong Hai en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Koe Loe Yuk, Tjap Tjoy en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Foe Yong Hai, Tjap Tjoy en sat&eacute;', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Foe Yong Hai, Kip Kerrie en Sat&eacute;', 'Price' => 16.5, 'Description' => null, 'DishTypeName' => 'COMBINATIE GERECHTEN'],
            ['DishName' => 'Mihoen Ling Fa', 'Price' => 16.4, 'Description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje', 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen met varkensvlees', 'Price' => 9.3, 'Description' => null, 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen met kipfilet', 'Price' => 10.4, 'Description' => null, 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen met ossenhaas', 'Price' => 16.4, 'Description' => null, 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen met garnalen', 'Price' => 15.3, 'Description' => null, 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen Singapore-style', 'Price' => 11.9, 'Description' => 'met kleine garnaaltjes en Cha Sieuw-vlees en kerrie poeder', 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Mihoen met Cha Sieuw vlees', 'Price' => 11.2, 'Description' => null, 'DishTypeName' => 'MIHOEN GERECHTEN'],
            ['DishName' => 'Chinese Bami Ling Fa', 'Price' => 16.9, 'Description' => 'Foe Yong Hai, Babi Pangang, sat&eacute; en kippenpootje', 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Chinese Bami met varkensvlees', 'Price' => 10.1, 'Description' => null, 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Chinese Bami met kipfilet', 'Price' => 11.2, 'Description' => null, 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Chinese Bami met Cha Sieuw-vlees', 'Price' => 12.2, 'Description' => null, 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Chinese Bami met garnalen', 'Price' => 15.8, 'Description' => null, 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Chinese Bami met ossenhaas', 'Price' => 17.4, 'Description' => null, 'DishTypeName' => 'CHINESE BAMI GERECHTEN'],
            ['DishName' => 'Bami of Nasi Rames Ling Fa', 'Price' => 15.3, 'Description' => 'Babi Pangan, Foe Yong Hai, Daging Roedjak, Atjar en kippootje', 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Bami of Nasi Rames', 'Price' => 8.8, 'Description' => null, 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Bami of Nasi Rames speciaal', 'Price' => 10.8, 'Description' => null, 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Gado Gado', 'Price' => 7.6, 'Description' => 'met witte rijst', 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Daging Smoor', 'Price' => 13.3, 'Description' => 'met witte rijst', 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Daging Roedjak', 'Price' => 13.3, 'Description' => 'met witte rijst', 'DishTypeName' => 'INDISCHE GERECHTEN'],
            ['DishName' => 'Foe Yong Hai Ling Fa', 'Price' => 16.4, 'Description' => 'ossenhaas, garnalen en kipfilet', 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met varkensvlees', 'Price' => 8.8, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met kipfilet', 'Price' => 9.2, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met garnalen', 'Price' => 15.3, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met krab', 'Price' => 15.3, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met Cha Sieuw Vlees', 'Price' => 11.2, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Foe Yong Hai met ossenhaas', 'Price' => 16.4, 'Description' => null, 'DishTypeName' => 'EIERGERECHTEN'],
            ['DishName' => 'Tjap Tjoy Ling Fa', 'Price' => 16.4, 'Description' => 'ossenhaas, garnalen en kipfilet', 'DishTypeName' => 'GROENTEN GERECHTEN'],
            ['DishName' => 'Tjap Tjoy met varkensvlees', 'Price' => 8.8, 'Description' => null, 'DishTypeName' => 'GROENTEN GERECHTEN'],
            ['DishName' => 'Tjap Tjoy met kipfilet', 'Price' => 9.2, 'Description' => null, 'DishTypeName' => 'GROENTEN GERECHTEN'],
            ['DishName' => 'Tjap Tjoy met ossenhaas', 'Price' => 16.4, 'Description' => null, 'DishTypeName' => 'GROENTEN GERECHTEN'],
            ['DishName' => 'Tjap Tjoy met garnalen', 'Price' => 15.3, 'Description' => null, 'DishTypeName' => 'GROENTEN GERECHTEN'],
            ['DishName' => 'Babi Pangang', 'Price' => 12.2, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Babi Pangang in ketjapsaus', 'Price' => 12.3, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Cha Sieuw', 'Price' => 13.3, 'Description' => 'rood geroosterd varkensvlees', 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Cha Sieuw in pikante saus', 'Price' => 13.8, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Geroosterde speenvarken', 'Price' => 13.8, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Koe Loe Yuk', 'Price' => 11.9, 'Description' => 'bolletjes vlees met zoetzure saus', 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met kerriesaus', 'Price' => 11.9, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met ketjapsaus', 'Price' => 11.9, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met tomatensaus', 'Price' => 11.9, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met champignons in knoflooksaus', 'Price' => 11.9, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met Chinese champignons', 'Price' => 12.2, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met zwarte bonensaus', 'Price' => 12.2, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Varkenshaas met verse ananas in zoetzure saus', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Yu Sian Yuk', 'Price' => 13.3, 'Description' => 'varkenshaas met licht zoet pikante kruiden saus', 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'SzeChuan Yuk', 'Price' => 13.3, 'Description' => 'varkenshaas met pittige kruiden saus', 'DishTypeName' => 'VLEES GERECHTEN'],
            ['DishName' => 'Ajam Pangang', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Ajam Pangang in ketjapsaus', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Koe Loe Kai', 'Price' => 13.0, 'Description' => 'bolletjes kip met zoetzure saus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met kerriesaus', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met champignons in knoflooksaus', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met tomatensaus', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met ketjapsaus', 'Price' => 13.0, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met broccoli in knoflooksaus', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met Chinese champignons', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met zwarte pepersaus', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met verse ananas in zoetzure saus', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kipfilet met zwarte pepersaus', 'Price' => 13.3, 'Description' => null, 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Tjieuw Yem Kai', 'Price' => 13.3, 'Description' => 'licht gebraden kipfilet met zout en peper', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Yao Koe Kai', 'Price' => 13.3, 'Description' => 'kipfilet met cashewnoten in licht pikante saus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Lychee Kai', 'Price' => 13.8, 'Description' => 'licht gebraden kipfilet met lychee in zoetzure saus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Yu Sian Kai', 'Price' => 13.3, 'Description' => 'kipfilet met licht zoet pikante kruidensaus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Sze Chuan Kai', 'Price' => 13.8, 'Description' => 'kipfilet met pittige kruidensaus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Kung Bao Kai', 'Price' => 13.8, 'Description' => 'kipfilet met cashewnoten in pittige saus', 'DishTypeName' => 'KIP GERECHTEN'],
            ['DishName' => 'Garnalen met champignons in knoflooksaus', 'Price' => 15.9, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met tomatensaus', 'Price' => 15.9, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met ketjapsaus', 'Price' => 15.9, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met broccoli', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met Chinese champignons', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met kerriesaus', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met zwarte bonensaus', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met zwarte pepersaus', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Garnalen met chilisaus', 'Price' => 16.1, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Yu Sian Haa', 'Price' => 16.1, 'Description' => 'garnalen met licht zoet pikante kruidensaus', 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Tjieuw Yem Haa', 'Price' => 16.1, 'Description' => 'licht gebraden garnalen met zout en peper', 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Tja Tai Haa', 'Price' => 16.1, 'Description' => 'krokant gebakken garnalen', 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Sze Chuan Haa', 'Price' => 16.4, 'Description' => null, 'DishTypeName' => 'GARNALEN GERECHTEN'],
            ['DishName' => 'Ossenhaas met chanpignons in knoflooksaus', 'Price' => 16.9, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met tomatensaus', 'Price' => 16.9, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met ketjapsaus', 'Price' => 16.9, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met broccoli', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met Chinese champignons', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met kerriesaus', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met zwarte bonensaus', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Ossenhaas met zwarte pepersaus', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Yu Sian Ngau Yuk', 'Price' => 17.1, 'Description' => 'ossenhaas met licht zoet pikante kruidensaus', 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Sze Chuan Ngau Yuk', 'Price' => 17.4, 'Description' => 'ossenhaas met pittige kruidensaus', 'DishTypeName' => 'OSSENHAAS GERECHTEN'],
            ['DishName' => 'Visfilet met kerriesaus', 'Price' => 14.5, 'Description' => null, 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'Visfilet met oestersaus', 'Price' => 14.5, 'Description' => null, 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'Visfilet met zoetzure saus', 'Price' => 14.5, 'Description' => 'licht gebraden visfilet in zoete pikante saus', 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'Hong Shau Yu', 'Price' => 14.5, 'Description' => 'licht gebraden visfilet in zoete pikante saus', 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'Tjeuw Yem Yu', 'Price' => 15.0, 'Description' => 'licht gebraden visfilet met zout en peper', 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'San Sching Po', 'Price' => 16.1, 'Description' => 'visfilet, garnalen, krab en groenten in knoflooksaus', 'DishTypeName' => 'VISSEN GERECHTEN'],
            ['DishName' => 'Geroosterde Peking Eend', 'Price' => 16.6, 'Description' => null, 'DishTypeName' => 'PEKING EEND GERECHTEN'],
            ['DishName' => 'Peking Eend met verse ananas in zoetzure saus', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'PEKING EEND GERECHTEN'],
            ['DishName' => 'Peking Eend met Chinese champignons in oestersaus', 'Price' => 17.1, 'Description' => null, 'DishTypeName' => 'PEKING EEND GERECHTEN'],
            ['DishName' => 'Yu Sian Ya', 'Price' => 17.1, 'Description' => 'peking eend met licht zoet pikante kruidensaus', 'DishTypeName' => 'PEKING EEND GERECHTEN'],
            ['DishName' => 'Tiepan Ling Fa', 'Price' => 17.9, 'Description' => 'garnalen, kipfilet, ossenhaas en groenten in zwarte pepersaus', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Tiepan Kai', 'Price' => 15.3, 'Description' => 'licht gebraden kipfilet en groenten met zoet pikante saus', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Tiepan San Yuk', 'Price' => 17.1, 'Description' => 'lichtgrbaden varkenshaas, kipfilet, ossenhaas en groenten met zoet pikante saus', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Tiepan Haa', 'Price' => 17.4, 'Description' => 'garnalen en groenten met zoet pikante saus', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Tiepan Ngau Yuk', 'Price' => 19.5, 'Description' => '5st. ossenhaas en groenten met zoet pikante saus', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Tau Fu Po', 'Price' => 15.3, 'Description' => 'sojakaas, cha sieuw garnalen en chinese paddenstoelen', 'DishTypeName' => 'TIEPAN SPECIALITEITEN'],
            ['DishName' => 'Vegetarische Tjap Tjoy', 'Price' => 8.3, 'Description' => null, 'DishTypeName' => 'VEGETARISCHE GERECHTEN'],
            ['DishName' => 'Lo Han Zhai', 'Price' => 11.2, 'Description' => 'sojakaas, Chinese paddenstoelen en groenten in knoflooksaus', 'DishTypeName' => 'VEGETARISCHE GERECHTEN'],
            ['DishName' => 'Vegetarische Foe Yong Hai', 'Price' => 8.3, 'Description' => null, 'DishTypeName' => 'VEGETARISCHE GERECHTEN'],
            ['DishName' => 'Frites, sat&eacute; (2st.) en ei', 'Price' => 6.5, 'Description' => null, 'DishTypeName' => 'KINDERMENUS'],
            ['DishName' => 'Frites, kippootje en ei', 'Price' => 6.5, 'Description' => null, 'DishTypeName' => 'KINDERMENUS'],
            ['DishName' => 'Frites, mini loempia (2st.) en ei', 'Price' => 6.5, 'Description' => null, 'DishTypeName' => 'KINDERMENUS'],
            ['DishName' => 'Kinder Bami of Nasi met sat&eacute; (2st.) en ei', 'Price' => 6.5, 'Description' => null, 'DishTypeName' => 'KINDERMENUS'],
            ['DishName' => 'Indische rijsttafel (voor 1 persoon)', 'Price' => 16.4, 'Description' => 'Gado gado, Foe Yong Hai, sat&eacute;, Daging Roedjak, Daging Smoor, Ajam Ketjap, Atjar, Pisang Goreng, Pindas en Cocos', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Indische rijsttafel<br>Vanaf 2 personen... Per persoon', 'Price' => 15.0, 'Description' => 'Ajam Ketjap, Gado Gado, Daging Smoor, Kroepoek, Daging Roedjak, Foe Yong Hai, Sat&eacute;, Sambal Goreng Boontjes, Sambal Goreng Kering, Atjar, Pisang Goreng, Pinda en Cocos', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Chinese Indische Rijsttafel<br>Vanaf 4 personen... per persoon', 'Price' => 16.5, 'Description' => 'Foe Yong Hai, Babi Pangang, Tjap Tjoy, Koe Loe Yuk, Ajam Ketjap, Daging Smoor, Daging Roedjak, Sat&eacute;, Ei, Kroepoek, Sambal Goeren boontjes, Atjar, Pisang Goreng, Pinda en Cocos', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Chinese Rijsttafel<br>Vanaf 2 personen... per persoon', 'Price' => 17.0, 'Description' => 'Kippen- of Tomatensoep, Tjap Tjoy met kipfilet, Koe Loe Yuk, Gebakken garnalen, Babi Pangang, Foe Yong Hai, sat&eacute;, kroepoek', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Kantones Rijsttafel<br>Vanaf 2 personen... per persoon', 'Price' => 23.0, 'Description' => 'Wan Tan soep, Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pasteitje), Geroosterde Peking Eend, Lychee Kai (licht gebraden kipfilet met lychee in zoetzure saus), Tau Sie Haa (garnalen met zwarte bonensaus)', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Sze Chuan Rijsttafel<br>Vanaf 2 personen... per persoon', 'Price' => 23.0, 'Description' => 'Peking Soep (pittige lichtzure soep), Chinese Dim Sum (mini loempia, kerrie ko, pangsit goreng, garnalen, pastei(tje), Tjieuw Yem Kai (licht gebakken kipfilet met zout en peper), Lychee Yuk (licht gebraden varkensvlees met lychee in zoetzure saus), Yu Sian Ngau Yuk (ossenhaas met licht zoet pikante kruiden saus)', 'DishTypeName' => 'RIJSTTAFELS'],
            ['DishName' => 'Buffet Menu A, per persoon', 'Price' => 12.8, 'Description' => "Mini Loempia's, Pisang Goreng, Babi Pangang, Koe Loe Yuk, Foe Yong Hai, Kipfilet met zwarte bonensaus, Tjap Tjoy met kipfilet, sat&eacute; Ajam", 'DishTypeName' => 'BUFFET'],
            ['DishName' => 'Buffet Menu B, per persoon', 'Price' => 15.0, 'Description' => "Mini Loempia's, Pisang Goreng, Babi Pangang, Foe Yong Hai, Kung Bao Kai, Hong Shau Yu, sat&eacute; Ajam, Ossenhaas met zwarte bonensaus, Kipfilet met kerriesaus", 'DishTypeName' => 'BUFFET'],
            ['DishName' => 'Bami of Nasi Goreng ipv rijst', 'Price' => 0.9, 'Description' => null, 'DishTypeName' => 'DIVERSEN'],
            ['DishName' => 'Mihoen Goreng ipv rijst', 'Price' => 2.5, 'Description' => null, 'DishTypeName' => 'DIVERSEN'],
            ['DishName' => 'Chinese Bami ipv rijst', 'Price' => 2.5, 'Description' => null, 'DishTypeName' => 'DIVERSEN'],
        ];

        foreach ($dishes as $dish) {
            $dishType = DishType::firstOrCreate(['DishTypeName' => $dish['DishTypeName']]);

            Dish::create([
                'DishName' => $dish['DishName'],
                'Price' => $dish['Price'],
                'Description' => $dish['Description'],
                'DishTypeID' => $dishType->DishTypeID
            ]);
        }
    }
}
