<?php

use Illuminate\Database\Seeder;

class GeocodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

        \DB::table('geocodes')->delete();
        
        \DB::table('geocodes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'breweryId' => 1,
                'latitude' => 30.223400115966797,
                'longitude' => -97.76969909667969,
                'accuracy' => 'ROOFTOP',
            ),
            1 => 
            array (
                'id' => 2,
                'breweryId' => 2,
                'latitude' => 37.782501220703125,
                'longitude' => -122.39299774169922,
                'accuracy' => 'ROOFTOP',
            ),
            2 => 
            array (
                'id' => 3,
                'breweryId' => 3,
                'latitude' => 50.76679992675781,
                'longitude' => 4.30810022354126,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            3 => 
            array (
                'id' => 4,
                'breweryId' => 4,
                'latitude' => 59.74509811401367,
                'longitude' => 10.213500022888184,
                'accuracy' => 'APPROXIMATE',
            ),
            4 => 
            array (
                'id' => 5,
                'breweryId' => 5,
                'latitude' => 50.26060104370117,
                'longitude' => 4.912199974060059,
                'accuracy' => 'APPROXIMATE',
            ),
            5 => 
            array (
                'id' => 6,
                'breweryId' => 6,
                'latitude' => 50.30929946899414,
                'longitude' => 4.764599800109863,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            6 => 
            array (
                'id' => 7,
                'breweryId' => 7,
                'latitude' => 50.19990158081055,
                'longitude' => 5.227700233459473,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            7 => 
            array (
                'id' => 8,
                'breweryId' => 8,
                'latitude' => 41.22249984741211,
                'longitude' => -77.03690338134766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            8 => 
            array (
                'id' => 9,
                'breweryId' => 9,
                'latitude' => 41.43920135498047,
                'longitude' => -87.10780334472656,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            9 => 
            array (
                'id' => 10,
                'breweryId' => 10,
                'latitude' => 30.504899978637695,
                'longitude' => -89.94400024414062,
                'accuracy' => 'APPROXIMATE',
            ),
            10 => 
            array (
                'id' => 11,
                'breweryId' => 11,
                'latitude' => 52.327701568603516,
                'longitude' => 1.6801999807357788,
                'accuracy' => 'APPROXIMATE',
            ),
            11 => 
            array (
                'id' => 12,
                'breweryId' => 12,
                'latitude' => 50.96989822387695,
                'longitude' => 4.189199924468994,
                'accuracy' => 'APPROXIMATE',
            ),
            12 => 
            array (
                'id' => 13,
                'breweryId' => 13,
                'latitude' => 49.765201568603516,
                'longitude' => -97.15390014648438,
                'accuracy' => 'APPROXIMATE',
            ),
            13 => 
            array (
                'id' => 14,
                'breweryId' => 14,
                'latitude' => 41.26029968261719,
                'longitude' => -96.09030151367188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            14 => 
            array (
                'id' => 15,
                'breweryId' => 15,
                'latitude' => 47.87810134887695,
                'longitude' => 10.616100311279297,
                'accuracy' => 'ROOFTOP',
            ),
            15 => 
            array (
                'id' => 16,
                'breweryId' => 16,
                'latitude' => 45.54840087890625,
                'longitude' => -122.61900329589844,
                'accuracy' => 'ROOFTOP',
            ),
            16 => 
            array (
                'id' => 17,
                'breweryId' => 17,
                'latitude' => 58.3572998046875,
                'longitude' => -134.49000549316406,
                'accuracy' => 'ROOFTOP',
            ),
            17 => 
            array (
                'id' => 18,
                'breweryId' => 20,
                'latitude' => 43.125701904296875,
                'longitude' => -89.32530212402344,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            18 => 
            array (
                'id' => 19,
                'breweryId' => 21,
                'latitude' => 32.891998291015625,
                'longitude' => -117.14399719238281,
                'accuracy' => 'ROOFTOP',
            ),
            19 => 
            array (
                'id' => 20,
                'breweryId' => 22,
                'latitude' => 21.306900024414062,
                'longitude' => -157.85800170898438,
                'accuracy' => 'APPROXIMATE',
            ),
            20 => 
            array (
                'id' => 21,
                'breweryId' => 23,
                'latitude' => 43.70280075073242,
                'longitude' => -70.31659698486328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            21 => 
            array (
                'id' => 22,
                'breweryId' => 24,
                'latitude' => 43.70280075073242,
                'longitude' => -70.31659698486328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            22 => 
            array (
                'id' => 23,
                'breweryId' => 25,
                'latitude' => 40.601600646972656,
                'longitude' => -75.4739990234375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            23 => 
            array (
                'id' => 24,
                'breweryId' => 26,
                'latitude' => 47.74869918823242,
                'longitude' => 10.5693998336792,
                'accuracy' => 'ROOFTOP',
            ),
            24 => 
            array (
                'id' => 25,
                'breweryId' => 26,
                'latitude' => 47.72370147705078,
                'longitude' => 10.31410026550293,
                'accuracy' => 'ROOFTOP',
            ),
            25 => 
            array (
                'id' => 26,
                'breweryId' => 28,
                'latitude' => 38.05009841918945,
                'longitude' => -84.50879669189453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            26 => 
            array (
                'id' => 27,
                'breweryId' => 29,
                'latitude' => 32.83549880981445,
                'longitude' => -116.76499938964844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            27 => 
            array (
                'id' => 28,
                'breweryId' => 30,
                'latitude' => 48.345699310302734,
                'longitude' => 8.40310001373291,
                'accuracy' => 'ROOFTOP',
            ),
            28 => 
            array (
                'id' => 29,
                'breweryId' => 31,
                'latitude' => 50.91899871826172,
                'longitude' => 3.263200044631958,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            29 => 
            array (
                'id' => 30,
                'breweryId' => 32,
                'latitude' => 41.760501861572266,
                'longitude' => -88.30899810791016,
                'accuracy' => 'ROOFTOP',
            ),
            30 => 
            array (
                'id' => 31,
                'breweryId' => 33,
                'latitude' => 38.89659881591797,
                'longitude' => -121.0770034790039,
                'accuracy' => 'APPROXIMATE',
            ),
            31 => 
            array (
                'id' => 32,
                'breweryId' => 34,
                'latitude' => 39.15510177612305,
                'longitude' => -94.48200225830078,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            32 => 
            array (
                'id' => 33,
                'breweryId' => 35,
                'latitude' => 42.37630081176758,
                'longitude' => -72.5198974609375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            33 => 
            array (
                'id' => 34,
                'breweryId' => 36,
                'latitude' => 38.53499984741211,
                'longitude' => -105.99199676513672,
                'accuracy' => 'ROOFTOP',
            ),
            34 => 
            array (
                'id' => 35,
                'breweryId' => 37,
                'latitude' => 52.37379837036133,
                'longitude' => 4.890900135040283,
                'accuracy' => 'APPROXIMATE',
            ),
            35 => 
            array (
                'id' => 36,
                'breweryId' => 38,
                'latitude' => 48.5192985534668,
                'longitude' => -122.61299896240234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            36 => 
            array (
                'id' => 37,
                'breweryId' => 39,
                'latitude' => 37.76350021362305,
                'longitude' => -122.4010009765625,
                'accuracy' => 'ROOFTOP',
            ),
            37 => 
            array (
                'id' => 38,
                'breweryId' => 40,
                'latitude' => 47.977500915527344,
                'longitude' => 11.1850004196167,
                'accuracy' => 'ROOFTOP',
            ),
            38 => 
            array (
                'id' => 39,
                'breweryId' => 41,
                'latitude' => 39.001399993896484,
                'longitude' => -123.35600280761719,
                'accuracy' => 'ROOFTOP',
            ),
            39 => 
            array (
                'id' => 40,
                'breweryId' => 42,
                'latitude' => 44.351600646972656,
                'longitude' => -69.14009857177734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            40 => 
            array (
                'id' => 41,
                'breweryId' => 43,
                'latitude' => 43.07849884033203,
                'longitude' => -89.38200378417969,
                'accuracy' => 'APPROXIMATE',
            ),
            41 => 
            array (
                'id' => 42,
                'breweryId' => 44,
                'latitude' => 38.59830093383789,
                'longitude' => -90.20899963378906,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            42 => 
            array (
                'id' => 43,
                'breweryId' => 45,
                'latitude' => 40.265899658203125,
                'longitude' => -76.87529754638672,
                'accuracy' => 'ROOFTOP',
            ),
            43 => 
            array (
                'id' => 44,
                'breweryId' => 46,
                'latitude' => 44.26190185546875,
                'longitude' => -88.41539764404297,
                'accuracy' => 'APPROXIMATE',
            ),
            44 => 
            array (
                'id' => 45,
                'breweryId' => 47,
                'latitude' => 42.321998596191406,
                'longitude' => -85.18509674072266,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            45 => 
            array (
                'id' => 46,
                'breweryId' => 49,
                'latitude' => 53.343299865722656,
                'longitude' => -6.284599781036377,
                'accuracy' => 'APPROXIMATE',
            ),
            46 => 
            array (
                'id' => 47,
                'breweryId' => 51,
                'latitude' => 35.622100830078125,
                'longitude' => -82.55359649658203,
                'accuracy' => 'ROOFTOP',
            ),
            47 => 
            array (
                'id' => 48,
                'breweryId' => 54,
                'latitude' => 33.81800079345703,
                'longitude' => -84.435302734375,
                'accuracy' => 'ROOFTOP',
            ),
            48 => 
            array (
                'id' => 49,
                'breweryId' => 55,
                'latitude' => 44.399600982666016,
                'longitude' => -68.33399963378906,
                'accuracy' => 'ROOFTOP',
            ),
            49 => 
            array (
                'id' => 50,
                'breweryId' => 56,
                'latitude' => 42.33720016479492,
                'longitude' => -83.01860046386719,
                'accuracy' => 'ROOFTOP',
            ),
            50 => 
            array (
                'id' => 51,
                'breweryId' => 57,
                'latitude' => 44.28960037231445,
                'longitude' => -94.4489974975586,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            51 => 
            array (
                'id' => 52,
                'breweryId' => 58,
                'latitude' => 44.28960037231445,
                'longitude' => -94.4489974975586,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            52 => 
            array (
                'id' => 53,
                'breweryId' => 59,
                'latitude' => 38.5702018737793,
                'longitude' => -90.88020324707031,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            53 => 
            array (
                'id' => 54,
                'breweryId' => 61,
                'latitude' => -37.96799850463867,
                'longitude' => 144.52499389648438,
                'accuracy' => 'ROOFTOP',
            ),
            54 => 
            array (
                'id' => 55,
                'breweryId' => 62,
                'latitude' => 40.0166015625,
                'longitude' => -105.21900177001953,
                'accuracy' => 'ROOFTOP',
            ),
            55 => 
            array (
                'id' => 56,
                'breweryId' => 1394,
                'latitude' => 35.61970138549805,
                'longitude' => -78.80850219726562,
                'accuracy' => 'ROOFTOP',
            ),
            56 => 
            array (
                'id' => 58,
                'breweryId' => 63,
                'latitude' => 41.61240005493164,
                'longitude' => -86.72679901123047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            57 => 
            array (
                'id' => 59,
                'breweryId' => 64,
                'latitude' => 39.576499938964844,
                'longitude' => -106.09400177001953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            58 => 
            array (
                'id' => 60,
                'breweryId' => 65,
                'latitude' => 44.04859924316406,
                'longitude' => -91.67739868164062,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            59 => 
            array (
                'id' => 61,
                'breweryId' => 66,
                'latitude' => 44.4213981628418,
                'longitude' => -84.11669921875,
                'accuracy' => 'APPROXIMATE',
            ),
            60 => 
            array (
                'id' => 62,
                'breweryId' => 68,
                'latitude' => 32.76679992675781,
                'longitude' => -117.19499969482422,
                'accuracy' => 'ROOFTOP',
            ),
            61 => 
            array (
                'id' => 63,
                'breweryId' => 69,
                'latitude' => 39.41999816894531,
                'longitude' => -76.54000091552734,
                'accuracy' => 'APPROXIMATE',
            ),
            62 => 
            array (
                'id' => 64,
                'breweryId' => 70,
                'latitude' => 49.890098571777344,
                'longitude' => 10.906700134277344,
                'accuracy' => 'ROOFTOP',
            ),
            63 => 
            array (
                'id' => 65,
                'breweryId' => 71,
                'latitude' => 44.16360092163086,
                'longitude' => -93.99939727783203,
                'accuracy' => 'APPROXIMATE',
            ),
            64 => 
            array (
                'id' => 66,
                'breweryId' => 72,
                'latitude' => 44.38750076293945,
                'longitude' => -68.20459747314453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            65 => 
            array (
                'id' => 67,
                'breweryId' => 73,
                'latitude' => 38.916900634765625,
                'longitude' => -94.39430236816406,
                'accuracy' => 'ROOFTOP',
            ),
            66 => 
            array (
                'id' => 68,
                'breweryId' => 74,
                'latitude' => 48.39789962768555,
                'longitude' => 9.989899635314941,
                'accuracy' => 'ROOFTOP',
            ),
            67 => 
            array (
                'id' => 69,
                'breweryId' => 75,
                'latitude' => 34.47019958496094,
                'longitude' => -114.3499984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            68 => 
            array (
                'id' => 70,
                'breweryId' => 76,
                'latitude' => 41.05229949951172,
                'longitude' => -75.33540344238281,
                'accuracy' => 'APPROXIMATE',
            ),
            69 => 
            array (
                'id' => 71,
                'breweryId' => 77,
                'latitude' => 40.0452995300293,
                'longitude' => -86.0155029296875,
                'accuracy' => 'ROOFTOP',
            ),
            70 => 
            array (
                'id' => 72,
                'breweryId' => 78,
                'latitude' => 45.0359992980957,
                'longitude' => -93.19840240478516,
                'accuracy' => 'ROOFTOP',
            ),
            71 => 
            array (
                'id' => 73,
                'breweryId' => 79,
                'latitude' => 39.9744987487793,
                'longitude' => -83.04900360107422,
                'accuracy' => 'ROOFTOP',
            ),
            72 => 
            array (
                'id' => 74,
                'breweryId' => 80,
                'latitude' => 39.971900939941406,
                'longitude' => -83.00270080566406,
                'accuracy' => 'ROOFTOP',
            ),
            73 => 
            array (
                'id' => 75,
                'breweryId' => 81,
                'latitude' => 36.07210159301758,
                'longitude' => -115.07499694824219,
                'accuracy' => 'ROOFTOP',
            ),
            74 => 
            array (
                'id' => 76,
                'breweryId' => 82,
                'latitude' => 47.520301818847656,
                'longitude' => -122.31199645996094,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            75 => 
            array (
                'id' => 77,
                'breweryId' => 83,
                'latitude' => 39.11360168457031,
                'longitude' => -84.5260009765625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            76 => 
            array (
                'id' => 78,
                'breweryId' => 84,
                'latitude' => 39.97669982910156,
                'longitude' => -74.18289947509766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            77 => 
            array (
                'id' => 79,
                'breweryId' => 85,
                'latitude' => 52.80459976196289,
                'longitude' => -1.628100037574768,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            78 => 
            array (
                'id' => 80,
                'breweryId' => 86,
                'latitude' => 10.963899612426758,
                'longitude' => -74.79640197753906,
                'accuracy' => 'APPROXIMATE',
            ),
            79 => 
            array (
                'id' => 81,
                'breweryId' => 87,
                'latitude' => 41.237998962402344,
                'longitude' => -77.01029968261719,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            80 => 
            array (
                'id' => 82,
                'breweryId' => 1393,
                'latitude' => 44.100399017333984,
                'longitude' => -70.21479797363281,
                'accuracy' => 'APPROXIMATE',
            ),
            81 => 
            array (
                'id' => 83,
                'breweryId' => 88,
                'latitude' => 48.395198822021484,
                'longitude' => 11.728799819946289,
                'accuracy' => 'ROOFTOP',
            ),
            82 => 
            array (
                'id' => 84,
                'breweryId' => 89,
                'latitude' => 46.87260055541992,
                'longitude' => -114.0199966430664,
                'accuracy' => 'ROOFTOP',
            ),
            83 => 
            array (
                'id' => 85,
                'breweryId' => 90,
                'latitude' => 38.254600524902344,
                'longitude' => -85.74009704589844,
                'accuracy' => 'ROOFTOP',
            ),
            84 => 
            array (
                'id' => 86,
                'breweryId' => 91,
                'latitude' => 28.538299560546875,
                'longitude' => -81.37920379638672,
                'accuracy' => 'APPROXIMATE',
            ),
            85 => 
            array (
                'id' => 87,
                'breweryId' => 92,
                'latitude' => 37.76940155029297,
                'longitude' => -122.51000213623047,
                'accuracy' => 'ROOFTOP',
            ),
            86 => 
            array (
                'id' => 88,
                'breweryId' => 93,
                'latitude' => 51.89699935913086,
                'longitude' => -8.476900100708008,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            87 => 
            array (
                'id' => 89,
                'breweryId' => 94,
                'latitude' => 38.61119842529297,
                'longitude' => -122.87100219726562,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            88 => 
            array (
                'id' => 90,
                'breweryId' => 96,
                'latitude' => 38.8916015625,
                'longitude' => -121.29299926757812,
                'accuracy' => 'APPROXIMATE',
            ),
            89 => 
            array (
                'id' => 91,
                'breweryId' => 97,
                'latitude' => 44.429500579833984,
                'longitude' => -68.9749984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            90 => 
            array (
                'id' => 92,
                'breweryId' => 98,
                'latitude' => 55.99700164794922,
                'longitude' => -2.5097999572753906,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            91 => 
            array (
                'id' => 93,
                'breweryId' => 99,
                'latitude' => 17.497699737548828,
                'longitude' => -88.18669891357422,
                'accuracy' => 'APPROXIMATE',
            ),
            92 => 
            array (
                'id' => 94,
                'breweryId' => 100,
                'latitude' => 42.2843017578125,
                'longitude' => -85.45379638671875,
                'accuracy' => 'ROOFTOP',
            ),
            93 => 
            array (
                'id' => 95,
                'breweryId' => 101,
                'latitude' => 43.194698333740234,
                'longitude' => -88.72899627685547,
                'accuracy' => 'APPROXIMATE',
            ),
            94 => 
            array (
                'id' => 96,
                'breweryId' => 102,
                'latitude' => 41.50590133666992,
                'longitude' => -90.51709747314453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            95 => 
            array (
                'id' => 97,
                'breweryId' => 103,
                'latitude' => 52.47930145263672,
                'longitude' => 13.429300308227539,
                'accuracy' => 'ROOFTOP',
            ),
            96 => 
            array (
                'id' => 98,
                'breweryId' => 104,
                'latitude' => 52.523399353027344,
                'longitude' => 13.411399841308594,
                'accuracy' => 'APPROXIMATE',
            ),
            97 => 
            array (
                'id' => 99,
                'breweryId' => 106,
                'latitude' => 40.62200164794922,
                'longitude' => -75.38200378417969,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            98 => 
            array (
                'id' => 100,
                'breweryId' => 107,
                'latitude' => 40.110599517822266,
                'longitude' => -88.2072982788086,
                'accuracy' => 'APPROXIMATE',
            ),
            99 => 
            array (
                'id' => 101,
                'breweryId' => 108,
                'latitude' => 32.32929992675781,
                'longitude' => -96.62529754638672,
                'accuracy' => 'APPROXIMATE',
            ),
            100 => 
            array (
                'id' => 102,
                'breweryId' => 109,
                'latitude' => 51.516300201416016,
                'longitude' => 5.597700119018555,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            101 => 
            array (
                'id' => 103,
                'breweryId' => 110,
                'latitude' => 51.54399871826172,
                'longitude' => 5.128499984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            102 => 
            array (
                'id' => 104,
                'breweryId' => 111,
                'latitude' => 51.168399810791016,
                'longitude' => 6.051499843597412,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            103 => 
            array (
                'id' => 105,
                'breweryId' => 112,
                'latitude' => 37.77560043334961,
                'longitude' => -122.39800262451172,
                'accuracy' => 'ROOFTOP',
            ),
            104 => 
            array (
                'id' => 106,
                'breweryId' => 113,
                'latitude' => 35.81039810180664,
                'longitude' => -78.6178970336914,
                'accuracy' => 'ROOFTOP',
            ),
            105 => 
            array (
                'id' => 107,
                'breweryId' => 114,
                'latitude' => 45.022300720214844,
                'longitude' => -84.68260192871094,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            106 => 
            array (
                'id' => 108,
                'breweryId' => 115,
                'latitude' => 42.963401794433594,
                'longitude' => -85.66809844970703,
                'accuracy' => 'APPROXIMATE',
            ),
            107 => 
            array (
                'id' => 109,
                'breweryId' => 116,
                'latitude' => 36.24259948730469,
                'longitude' => -115.23600006103516,
                'accuracy' => 'ROOFTOP',
            ),
            108 => 
            array (
                'id' => 110,
                'breweryId' => 117,
                'latitude' => 45.77360153198242,
                'longitude' => -111.1719970703125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            109 => 
            array (
                'id' => 111,
                'breweryId' => 118,
                'latitude' => 42.151100158691406,
                'longitude' => -87.91439819335938,
                'accuracy' => 'ROOFTOP',
            ),
            110 => 
            array (
                'id' => 112,
                'breweryId' => 119,
                'latitude' => 49.10490036010742,
                'longitude' => -122.69000244140625,
                'accuracy' => 'APPROXIMATE',
            ),
            111 => 
            array (
                'id' => 113,
                'breweryId' => 120,
                'latitude' => 49.1343994140625,
                'longitude' => -123.06500244140625,
                'accuracy' => 'ROOFTOP',
            ),
            112 => 
            array (
                'id' => 114,
                'breweryId' => 121,
                'latitude' => 50.98469924926758,
                'longitude' => -113.95600128173828,
                'accuracy' => 'ROOFTOP',
            ),
            113 => 
            array (
                'id' => 115,
                'breweryId' => 122,
                'latitude' => 46.922298431396484,
                'longitude' => -114.072998046875,
                'accuracy' => 'ROOFTOP',
            ),
            114 => 
            array (
                'id' => 116,
                'breweryId' => 123,
                'latitude' => 47.65760040283203,
                'longitude' => -122.31300354003906,
                'accuracy' => 'ROOFTOP',
            ),
            115 => 
            array (
                'id' => 117,
                'breweryId' => 124,
                'latitude' => 45.898101806640625,
                'longitude' => -123.96099853515625,
                'accuracy' => 'ROOFTOP',
            ),
            116 => 
            array (
                'id' => 118,
                'breweryId' => 125,
                'latitude' => 50.09429931640625,
                'longitude' => 8.691300392150879,
                'accuracy' => 'ROOFTOP',
            ),
            117 => 
            array (
                'id' => 119,
                'breweryId' => 127,
                'latitude' => 46.05970001220703,
                'longitude' => 13.226900100708008,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            118 => 
            array (
                'id' => 120,
                'breweryId' => 128,
                'latitude' => 44.51530075073242,
                'longitude' => 7.892199993133545,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            119 => 
            array (
                'id' => 121,
                'breweryId' => 129,
                'latitude' => 44.660099029541016,
                'longitude' => 10.281399726867676,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            120 => 
            array (
                'id' => 122,
                'breweryId' => 130,
                'latitude' => 37.863399505615234,
                'longitude' => -122.25900268554688,
                'accuracy' => 'ROOFTOP',
            ),
            121 => 
            array (
                'id' => 123,
                'breweryId' => 131,
                'latitude' => 49.9739990234375,
                'longitude' => 6.52269983291626,
                'accuracy' => 'APPROXIMATE',
            ),
            122 => 
            array (
                'id' => 124,
                'breweryId' => 132,
                'latitude' => 45.52349853515625,
                'longitude' => -122.6760025024414,
                'accuracy' => 'APPROXIMATE',
            ),
            123 => 
            array (
                'id' => 125,
                'breweryId' => 133,
                'latitude' => 33.91320037841797,
                'longitude' => -117.88899993896484,
                'accuracy' => 'ROOFTOP',
            ),
            124 => 
            array (
                'id' => 126,
                'breweryId' => 135,
                'latitude' => 41.88169860839844,
                'longitude' => -87.69259643554688,
                'accuracy' => 'APPROXIMATE',
            ),
            125 => 
            array (
                'id' => 127,
                'breweryId' => 136,
                'latitude' => 37.22999954223633,
                'longitude' => -80.41000366210938,
                'accuracy' => 'APPROXIMATE',
            ),
            126 => 
            array (
                'id' => 128,
                'breweryId' => 137,
                'latitude' => 36.152000427246094,
                'longitude' => -86.79889678955078,
                'accuracy' => 'ROOFTOP',
            ),
            127 => 
            array (
                'id' => 129,
                'breweryId' => 138,
                'latitude' => 38.833900451660156,
                'longitude' => -104.82099914550781,
                'accuracy' => 'APPROXIMATE',
            ),
            128 => 
            array (
                'id' => 130,
                'breweryId' => 139,
                'latitude' => 45.532501220703125,
                'longitude' => -122.68599700927734,
                'accuracy' => 'APPROXIMATE',
            ),
            129 => 
            array (
                'id' => 131,
                'breweryId' => 140,
                'latitude' => 39.171600341796875,
                'longitude' => -86.5103988647461,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            130 => 
            array (
                'id' => 132,
                'breweryId' => 141,
                'latitude' => 43.05979919433594,
                'longitude' => -89.30850219726562,
                'accuracy' => 'ROOFTOP',
            ),
            131 => 
            array (
                'id' => 133,
                'breweryId' => 142,
                'latitude' => 41.51179885864258,
                'longitude' => -90.57460021972656,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            132 => 
            array (
                'id' => 134,
                'breweryId' => 143,
                'latitude' => 35.08449935913086,
                'longitude' => -106.6510009765625,
                'accuracy' => 'APPROXIMATE',
            ),
            133 => 
            array (
                'id' => 135,
                'breweryId' => 144,
                'latitude' => 40.75910186767578,
                'longitude' => -73.02149963378906,
                'accuracy' => 'ROOFTOP',
            ),
            134 => 
            array (
                'id' => 136,
                'breweryId' => 145,
                'latitude' => 34.85309982299805,
                'longitude' => -82.39830017089844,
                'accuracy' => 'ROOFTOP',
            ),
            135 => 
            array (
                'id' => 137,
                'breweryId' => 146,
                'latitude' => 38.25299835205078,
                'longitude' => -85.65399932861328,
                'accuracy' => 'ROOFTOP',
            ),
            136 => 
            array (
                'id' => 138,
                'breweryId' => 147,
                'latitude' => 44.133201599121094,
                'longitude' => -73.07839965820312,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            137 => 
            array (
                'id' => 139,
                'breweryId' => 148,
                'latitude' => 53.4807014465332,
                'longitude' => -2.2344000339508057,
                'accuracy' => 'APPROXIMATE',
            ),
            138 => 
            array (
                'id' => 140,
                'breweryId' => 149,
                'latitude' => 35.15840148925781,
                'longitude' => -114.572998046875,
                'accuracy' => 'ROOFTOP',
            ),
            139 => 
            array (
                'id' => 141,
                'breweryId' => 150,
                'latitude' => 34.053199768066406,
                'longitude' => -118.25599670410156,
                'accuracy' => 'ROOFTOP',
            ),
            140 => 
            array (
                'id' => 142,
                'breweryId' => 151,
                'latitude' => 42.43109893798828,
                'longitude' => -83.4832992553711,
                'accuracy' => 'APPROXIMATE',
            ),
            141 => 
            array (
                'id' => 143,
                'breweryId' => 152,
                'latitude' => 13.778300285339355,
                'longitude' => 100.50900268554688,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            142 => 
            array (
                'id' => 144,
                'breweryId' => 153,
                'latitude' => 35.37329864501953,
                'longitude' => -119.01899719238281,
                'accuracy' => 'APPROXIMATE',
            ),
            143 => 
            array (
                'id' => 145,
                'breweryId' => 155,
                'latitude' => 35.08679962158203,
                'longitude' => -89.81009674072266,
                'accuracy' => 'APPROXIMATE',
            ),
            144 => 
            array (
                'id' => 146,
                'breweryId' => 156,
                'latitude' => 52.67390060424805,
                'longitude' => 14.900400161743164,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            145 => 
            array (
                'id' => 147,
                'breweryId' => 157,
                'latitude' => 42.31439971923828,
                'longitude' => -71.10340118408203,
                'accuracy' => 'ROOFTOP',
            ),
            146 => 
            array (
                'id' => 148,
                'breweryId' => 158,
                'latitude' => 42.34700012207031,
                'longitude' => -71.0988998413086,
                'accuracy' => 'ROOFTOP',
            ),
            147 => 
            array (
                'id' => 149,
                'breweryId' => 159,
                'latitude' => 42.866600036621094,
                'longitude' => -109.86599731445312,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            148 => 
            array (
                'id' => 150,
                'breweryId' => 160,
                'latitude' => 40.02669906616211,
                'longitude' => -105.24800109863281,
                'accuracy' => 'ROOFTOP',
            ),
            149 => 
            array (
                'id' => 151,
                'breweryId' => 161,
                'latitude' => 39.08209991455078,
                'longitude' => -94.59649658203125,
                'accuracy' => 'ROOFTOP',
            ),
            150 => 
            array (
                'id' => 152,
                'breweryId' => 162,
                'latitude' => 48.747501373291016,
                'longitude' => -122.48100280761719,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            151 => 
            array (
                'id' => 153,
                'breweryId' => 163,
                'latitude' => 45.42890167236328,
                'longitude' => -73.63130187988281,
                'accuracy' => 'APPROXIMATE',
            ),
            152 => 
            array (
                'id' => 154,
                'breweryId' => 164,
                'latitude' => 49.71849822998047,
                'longitude' => 5.55709981918335,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            153 => 
            array (
                'id' => 155,
                'breweryId' => 165,
                'latitude' => 50.485198974609375,
                'longitude' => 2.8306000232696533,
                'accuracy' => 'APPROXIMATE',
            ),
            154 => 
            array (
                'id' => 156,
                'breweryId' => 166,
                'latitude' => 50.843101501464844,
                'longitude' => 3.6077001094818115,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            155 => 
            array (
                'id' => 157,
                'breweryId' => 167,
                'latitude' => 50.150699615478516,
                'longitude' => 5.744200229644775,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            156 => 
            array (
                'id' => 158,
                'breweryId' => 168,
                'latitude' => 50.55929946899414,
                'longitude' => 4.136499881744385,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            157 => 
            array (
                'id' => 159,
                'breweryId' => 170,
                'latitude' => 50.369300842285156,
                'longitude' => 3.8269999027252197,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            158 => 
            array (
                'id' => 160,
                'breweryId' => 171,
                'latitude' => 50.51089859008789,
                'longitude' => 3.3882999420166016,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            159 => 
            array (
                'id' => 161,
                'breweryId' => 173,
                'latitude' => 49.98419952392578,
                'longitude' => 4.311100006103516,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            160 => 
            array (
                'id' => 162,
                'breweryId' => 174,
                'latitude' => 50.37049865722656,
                'longitude' => 3.726300001144409,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            161 => 
            array (
                'id' => 163,
                'breweryId' => 175,
                'latitude' => 50.7046012878418,
                'longitude' => 5.822000026702881,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            162 => 
            array (
                'id' => 164,
                'breweryId' => 176,
                'latitude' => 50.785301208496094,
                'longitude' => 4.24370002746582,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            163 => 
            array (
                'id' => 165,
                'breweryId' => 177,
                'latitude' => 50.79750061035156,
                'longitude' => 2.5411999225616455,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            164 => 
            array (
                'id' => 166,
                'breweryId' => 178,
                'latitude' => 50.22480010986328,
                'longitude' => 4.410200119018555,
                'accuracy' => 'APPROXIMATE',
            ),
            165 => 
            array (
                'id' => 167,
                'breweryId' => 179,
                'latitude' => 50.64929962158203,
                'longitude' => 3.9242000579833984,
                'accuracy' => 'ROOFTOP',
            ),
            166 => 
            array (
                'id' => 168,
                'breweryId' => 180,
                'latitude' => -17.67970085144043,
                'longitude' => -149.40699768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            167 => 
            array (
                'id' => 169,
                'breweryId' => 182,
                'latitude' => 45.70750045776367,
                'longitude' => 5.915299892425537,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            168 => 
            array (
                'id' => 170,
                'breweryId' => 183,
                'latitude' => 47.25429916381836,
                'longitude' => 7.002600193023682,
                'accuracy' => 'ROOFTOP',
            ),
            169 => 
            array (
                'id' => 171,
                'breweryId' => 184,
                'latitude' => 50.620399475097656,
                'longitude' => 3.759200096130371,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            170 => 
            array (
                'id' => 172,
                'breweryId' => 185,
                'latitude' => 48.00279998779297,
                'longitude' => 6.658299922943115,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            171 => 
            array (
                'id' => 173,
                'breweryId' => 186,
                'latitude' => 32.39059829711914,
                'longitude' => -93.3739013671875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            172 => 
            array (
                'id' => 174,
                'breweryId' => 187,
                'latitude' => 50.3114013671875,
                'longitude' => 4.94350004196167,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            173 => 
            array (
                'id' => 175,
                'breweryId' => 188,
                'latitude' => 50.57789993286133,
                'longitude' => 3.5553998947143555,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            174 => 
            array (
                'id' => 176,
                'breweryId' => 189,
                'latitude' => 50.571800231933594,
                'longitude' => 3.6507999897003174,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            175 => 
            array (
                'id' => 177,
                'breweryId' => 190,
                'latitude' => 50.30889892578125,
                'longitude' => 3.628499984741211,
                'accuracy' => 'APPROXIMATE',
            ),
            176 => 
            array (
                'id' => 178,
                'breweryId' => 191,
                'latitude' => 50.742801666259766,
                'longitude' => 3.6875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            177 => 
            array (
                'id' => 179,
                'breweryId' => 192,
                'latitude' => 50.2859992980957,
                'longitude' => 5.512700080871582,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            178 => 
            array (
                'id' => 180,
                'breweryId' => 193,
                'latitude' => 50.60540008544922,
                'longitude' => 3.077500104904175,
                'accuracy' => 'APPROXIMATE',
            ),
            179 => 
            array (
                'id' => 181,
                'breweryId' => 194,
                'latitude' => 50.40800094604492,
                'longitude' => 4.165900230407715,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            180 => 
            array (
                'id' => 182,
                'breweryId' => 195,
                'latitude' => 50.20240020751953,
                'longitude' => 4.89139986038208,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            181 => 
            array (
                'id' => 183,
                'breweryId' => 196,
                'latitude' => 50.260101318359375,
                'longitude' => 3.3125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            182 => 
            array (
                'id' => 184,
                'breweryId' => 197,
                'latitude' => 50.674598693847656,
                'longitude' => 4.150899887084961,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            183 => 
            array (
                'id' => 185,
                'breweryId' => 198,
                'latitude' => 45.46820068359375,
                'longitude' => -73.59130096435547,
                'accuracy' => 'ROOFTOP',
            ),
            184 => 
            array (
                'id' => 186,
                'breweryId' => 199,
                'latitude' => 42.64830017089844,
                'longitude' => 9.452899932861328,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            185 => 
            array (
                'id' => 187,
                'breweryId' => 200,
                'latitude' => 50.885101318359375,
                'longitude' => 2.4328999519348145,
                'accuracy' => 'ROOFTOP',
            ),
            186 => 
            array (
                'id' => 188,
                'breweryId' => 201,
                'latitude' => 50.36819839477539,
                'longitude' => 4.326600074768066,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            187 => 
            array (
                'id' => 189,
                'breweryId' => 202,
                'latitude' => 50.84159851074219,
                'longitude' => 4.3354997634887695,
                'accuracy' => 'ROOFTOP',
            ),
            188 => 
            array (
                'id' => 190,
                'breweryId' => 203,
                'latitude' => 48.59299850463867,
                'longitude' => 7.714900016784668,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            189 => 
            array (
                'id' => 191,
                'breweryId' => 204,
                'latitude' => 47.67150115966797,
                'longitude' => 9.588800430297852,
                'accuracy' => 'ROOFTOP',
            ),
            190 => 
            array (
                'id' => 192,
                'breweryId' => 205,
                'latitude' => 47.97060012817383,
                'longitude' => 11.780799865722656,
                'accuracy' => 'ROOFTOP',
            ),
            191 => 
            array (
                'id' => 193,
                'breweryId' => 206,
                'latitude' => 53.07870101928711,
                'longitude' => 8.79010009765625,
                'accuracy' => 'ROOFTOP',
            ),
            192 => 
            array (
                'id' => 194,
                'breweryId' => 207,
                'latitude' => 51.30550003051758,
                'longitude' => 8.125900268554688,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            193 => 
            array (
                'id' => 195,
                'breweryId' => 208,
                'latitude' => 49.89419937133789,
                'longitude' => 10.885499954223633,
                'accuracy' => 'APPROXIMATE',
            ),
            194 => 
            array (
                'id' => 196,
                'breweryId' => 209,
                'latitude' => 49.94770050048828,
                'longitude' => 11.565899848937988,
                'accuracy' => 'ROOFTOP',
            ),
            195 => 
            array (
                'id' => 197,
                'breweryId' => 210,
                'latitude' => 48.23509979248047,
                'longitude' => 13.82919979095459,
                'accuracy' => 'ROOFTOP',
            ),
            196 => 
            array (
                'id' => 198,
                'breweryId' => 211,
                'latitude' => 47.36249923706055,
                'longitude' => 15.09469985961914,
                'accuracy' => 'ROOFTOP',
            ),
            197 => 
            array (
                'id' => 199,
                'breweryId' => 212,
                'latitude' => 52.39350128173828,
                'longitude' => 9.681400299072266,
                'accuracy' => 'ROOFTOP',
            ),
            198 => 
            array (
                'id' => 200,
                'breweryId' => 213,
                'latitude' => 47.82429885864258,
                'longitude' => 10.023900032043457,
                'accuracy' => 'ROOFTOP',
            ),
            199 => 
            array (
                'id' => 201,
                'breweryId' => 214,
                'latitude' => 47.364200592041016,
                'longitude' => 8.524499893188477,
                'accuracy' => 'ROOFTOP',
            ),
            200 => 
            array (
                'id' => 202,
                'breweryId' => 216,
                'latitude' => 47.78179931640625,
                'longitude' => 9.621500015258789,
                'accuracy' => 'ROOFTOP',
            ),
            201 => 
            array (
                'id' => 203,
                'breweryId' => 217,
                'latitude' => 47.330101013183594,
                'longitude' => 9.41349983215332,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            202 => 
            array (
                'id' => 204,
                'breweryId' => 218,
                'latitude' => 50.875301361083984,
                'longitude' => 6.9944000244140625,
                'accuracy' => 'ROOFTOP',
            ),
            203 => 
            array (
                'id' => 205,
                'breweryId' => 219,
                'latitude' => 47.43009948730469,
                'longitude' => 9.379400253295898,
                'accuracy' => 'ROOFTOP',
            ),
            204 => 
            array (
                'id' => 206,
                'breweryId' => 220,
                'latitude' => 51.22159957885742,
                'longitude' => 6.785299777984619,
                'accuracy' => 'ROOFTOP',
            ),
            205 => 
            array (
                'id' => 207,
                'breweryId' => 221,
                'latitude' => 51.284698486328125,
                'longitude' => 7.293600082397461,
                'accuracy' => 'ROOFTOP',
            ),
            206 => 
            array (
                'id' => 208,
                'breweryId' => 222,
                'latitude' => 49.89419937133789,
                'longitude' => 10.885499954223633,
                'accuracy' => 'APPROXIMATE',
            ),
            207 => 
            array (
                'id' => 209,
                'breweryId' => 223,
                'latitude' => 51.9656982421875,
                'longitude' => 7.621399879455566,
                'accuracy' => 'ROOFTOP',
            ),
            208 => 
            array (
                'id' => 210,
                'breweryId' => 224,
                'latitude' => 48.13059997558594,
                'longitude' => 15.13860034942627,
                'accuracy' => 'APPROXIMATE',
            ),
            209 => 
            array (
                'id' => 211,
                'breweryId' => 225,
                'latitude' => 48.07780075073242,
                'longitude' => 9.3996000289917,
                'accuracy' => 'ROOFTOP',
            ),
            210 => 
            array (
                'id' => 213,
                'breweryId' => 227,
                'latitude' => 44.410499572753906,
                'longitude' => -95.41069793701172,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            211 => 
            array (
                'id' => 214,
                'breweryId' => 228,
                'latitude' => 49.69929885864258,
                'longitude' => 9.249199867248535,
                'accuracy' => 'ROOFTOP',
            ),
            212 => 
            array (
                'id' => 215,
                'breweryId' => 229,
                'latitude' => 51.24039840698242,
                'longitude' => 6.7515997886657715,
                'accuracy' => 'ROOFTOP',
            ),
            213 => 
            array (
                'id' => 216,
                'breweryId' => 230,
                'latitude' => 47.66510009765625,
                'longitude' => 9.175000190734863,
                'accuracy' => 'ROOFTOP',
            ),
            214 => 
            array (
                'id' => 217,
                'breweryId' => 231,
                'latitude' => 43.06460189819336,
                'longitude' => 141.3470001220703,
                'accuracy' => 'APPROXIMATE',
            ),
            215 => 
            array (
                'id' => 218,
                'breweryId' => 232,
                'latitude' => 50.93939971923828,
                'longitude' => 6.959400177001953,
                'accuracy' => 'ROOFTOP',
            ),
            216 => 
            array (
                'id' => 219,
                'breweryId' => 233,
                'latitude' => 47.55849838256836,
                'longitude' => 8.90060043334961,
                'accuracy' => 'ROOFTOP',
            ),
            217 => 
            array (
                'id' => 220,
                'breweryId' => 234,
                'latitude' => 47.067901611328125,
                'longitude' => 15.441699981689453,
                'accuracy' => 'APPROXIMATE',
            ),
            218 => 
            array (
                'id' => 221,
                'breweryId' => 235,
                'latitude' => 41.25400161743164,
                'longitude' => -95.99929809570312,
                'accuracy' => 'APPROXIMATE',
            ),
            219 => 
            array (
                'id' => 222,
                'breweryId' => 236,
                'latitude' => 39.72359848022461,
                'longitude' => -105.0009994506836,
                'accuracy' => 'ROOFTOP',
            ),
            220 => 
            array (
                'id' => 223,
                'breweryId' => 237,
                'latitude' => 39.72359848022461,
                'longitude' => -105.0009994506836,
                'accuracy' => 'ROOFTOP',
            ),
            221 => 
            array (
                'id' => 224,
                'breweryId' => 238,
                'latitude' => 50.67179870605469,
                'longitude' => 6.122000217437744,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            222 => 
            array (
                'id' => 225,
                'breweryId' => 239,
                'latitude' => 41.34700012207031,
                'longitude' => -81.82260131835938,
                'accuracy' => 'ROOFTOP',
            ),
            223 => 
            array (
                'id' => 226,
                'breweryId' => 240,
                'latitude' => 37.38610076904297,
                'longitude' => -122.08399963378906,
                'accuracy' => 'APPROXIMATE',
            ),
            224 => 
            array (
                'id' => 227,
                'breweryId' => 241,
                'latitude' => 57.68299865722656,
                'longitude' => -2.003000020980835,
                'accuracy' => 'APPROXIMATE',
            ),
            225 => 
            array (
                'id' => 228,
                'breweryId' => 242,
                'latitude' => 39.302799224853516,
                'longitude' => -76.61640167236328,
                'accuracy' => 'ROOFTOP',
            ),
            226 => 
            array (
                'id' => 229,
                'breweryId' => 243,
                'latitude' => 41.45479965209961,
                'longitude' => -70.56500244140625,
                'accuracy' => 'APPROXIMATE',
            ),
            227 => 
            array (
                'id' => 230,
                'breweryId' => 244,
                'latitude' => 50.852699279785156,
                'longitude' => 4.331099987030029,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            228 => 
            array (
                'id' => 231,
                'breweryId' => 245,
                'latitude' => 48.973899841308594,
                'longitude' => 14.475000381469727,
                'accuracy' => 'APPROXIMATE',
            ),
            229 => 
            array (
                'id' => 232,
                'breweryId' => 246,
                'latitude' => 51.31439971923828,
                'longitude' => 4.988999843597412,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            230 => 
            array (
                'id' => 233,
                'breweryId' => 247,
                'latitude' => 42.860599517822266,
                'longitude' => -90.17720031738281,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            231 => 
            array (
                'id' => 234,
                'breweryId' => 248,
                'latitude' => 50.85300064086914,
                'longitude' => 4.164899826049805,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            232 => 
            array (
                'id' => 235,
                'breweryId' => 249,
                'latitude' => 42.681800842285156,
                'longitude' => -74.92549896240234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            233 => 
            array (
                'id' => 236,
                'breweryId' => 250,
                'latitude' => 42.58470153808594,
                'longitude' => -87.82119750976562,
                'accuracy' => 'APPROXIMATE',
            ),
            234 => 
            array (
                'id' => 237,
                'breweryId' => 251,
                'latitude' => 37.548301696777344,
                'longitude' => -121.98899841308594,
                'accuracy' => 'APPROXIMATE',
            ),
            235 => 
            array (
                'id' => 238,
                'breweryId' => 254,
                'latitude' => 42.496498107910156,
                'longitude' => -90.66519927978516,
                'accuracy' => 'ROOFTOP',
            ),
            236 => 
            array (
                'id' => 239,
                'breweryId' => 255,
                'latitude' => 45.53110122680664,
                'longitude' => -122.68499755859375,
                'accuracy' => 'ROOFTOP',
            ),
            237 => 
            array (
                'id' => 240,
                'breweryId' => 256,
                'latitude' => 39.36280059814453,
                'longitude' => -77.42649841308594,
                'accuracy' => 'ROOFTOP',
            ),
            238 => 
            array (
                'id' => 241,
                'breweryId' => 257,
                'latitude' => 38.80970001220703,
                'longitude' => -104.82599639892578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            239 => 
            array (
                'id' => 242,
                'breweryId' => 258,
                'latitude' => 39.87350082397461,
                'longitude' => -86.1427001953125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            240 => 
            array (
                'id' => 243,
                'breweryId' => 259,
                'latitude' => 40.721500396728516,
                'longitude' => -73.9574966430664,
                'accuracy' => 'ROOFTOP',
            ),
            241 => 
            array (
                'id' => 244,
                'breweryId' => 260,
                'latitude' => 55.614498138427734,
                'longitude' => -3.4107000827789307,
                'accuracy' => 'APPROXIMATE',
            ),
            242 => 
            array (
                'id' => 245,
                'breweryId' => 261,
                'latitude' => 52.366600036621094,
                'longitude' => 4.926300048828125,
                'accuracy' => 'ROOFTOP',
            ),
            243 => 
            array (
                'id' => 246,
                'breweryId' => 262,
                'latitude' => 51.297401428222656,
                'longitude' => 4.6880998611450195,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            244 => 
            array (
                'id' => 247,
                'breweryId' => 263,
                'latitude' => 50.89609909057617,
                'longitude' => 2.7221999168395996,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            245 => 
            array (
                'id' => 248,
                'breweryId' => 264,
                'latitude' => 50.44309997558594,
                'longitude' => 4.414700031280518,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            246 => 
            array (
                'id' => 249,
                'breweryId' => 265,
                'latitude' => 50.88529968261719,
                'longitude' => 4.700799942016602,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            247 => 
            array (
                'id' => 250,
                'breweryId' => 266,
                'latitude' => 50.86280059814453,
                'longitude' => 3.2992000579833984,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            248 => 
            array (
                'id' => 251,
                'breweryId' => 267,
                'latitude' => 50.77669906616211,
                'longitude' => 3.2785000801086426,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            249 => 
            array (
                'id' => 252,
                'breweryId' => 268,
                'latitude' => 50.71229934692383,
                'longitude' => 4.219699859619141,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            250 => 
            array (
                'id' => 253,
                'breweryId' => 269,
                'latitude' => 51.01380157470703,
                'longitude' => 4.2017998695373535,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            251 => 
            array (
                'id' => 254,
                'breweryId' => 270,
                'latitude' => 51.29859924316406,
                'longitude' => 5.48960018157959,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            252 => 
            array (
                'id' => 255,
                'breweryId' => 271,
                'latitude' => 50.98500061035156,
                'longitude' => 4.222599983215332,
                'accuracy' => 'ROOFTOP',
            ),
            253 => 
            array (
                'id' => 256,
                'breweryId' => 272,
                'latitude' => 51.028099060058594,
                'longitude' => 2.9038000106811523,
                'accuracy' => 'ROOFTOP',
            ),
            254 => 
            array (
                'id' => 257,
                'breweryId' => 273,
                'latitude' => 51.20940017700195,
                'longitude' => 3.2251999378204346,
                'accuracy' => 'APPROXIMATE',
            ),
            255 => 
            array (
                'id' => 258,
                'breweryId' => 274,
                'latitude' => 50.9098014831543,
                'longitude' => 4.250500202178955,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            256 => 
            array (
                'id' => 259,
                'breweryId' => 110,
                'latitude' => 51.54399871826172,
                'longitude' => 5.128499984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            257 => 
            array (
                'id' => 260,
                'breweryId' => 276,
                'latitude' => 51.02280044555664,
                'longitude' => 4.157199859619141,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            258 => 
            array (
                'id' => 261,
                'breweryId' => 277,
                'latitude' => 50.81050109863281,
                'longitude' => 3.185699939727783,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            259 => 
            array (
                'id' => 262,
                'breweryId' => 278,
                'latitude' => 51.196800231933594,
                'longitude' => 3.252700090408325,
                'accuracy' => 'ROOFTOP',
            ),
            260 => 
            array (
                'id' => 263,
                'breweryId' => 279,
                'latitude' => 50.97100067138672,
                'longitude' => 4.190999984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            261 => 
            array (
                'id' => 264,
                'breweryId' => 280,
                'latitude' => 51.25149917602539,
                'longitude' => 5.546000003814697,
                'accuracy' => 'APPROXIMATE',
            ),
            262 => 
            array (
                'id' => 265,
                'breweryId' => 281,
                'latitude' => 51.0442008972168,
                'longitude' => 4.325699806213379,
                'accuracy' => 'APPROXIMATE',
            ),
            263 => 
            array (
                'id' => 266,
                'breweryId' => 282,
                'latitude' => 50.98820114135742,
                'longitude' => 5.0553998947143555,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            264 => 
            array (
                'id' => 267,
                'breweryId' => 284,
                'latitude' => 51.032501220703125,
                'longitude' => 4.4730000495910645,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            265 => 
            array (
                'id' => 268,
                'breweryId' => 286,
                'latitude' => 50.77629852294922,
                'longitude' => 5.165999889373779,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            266 => 
            array (
                'id' => 269,
                'breweryId' => 287,
                'latitude' => 50.84389877319336,
                'longitude' => 3.617000102996826,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            267 => 
            array (
                'id' => 270,
                'breweryId' => 288,
                'latitude' => 50.81800079345703,
                'longitude' => 4.2307000160217285,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            268 => 
            array (
                'id' => 271,
                'breweryId' => 290,
                'latitude' => 50.75859832763672,
                'longitude' => 4.301199913024902,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            269 => 
            array (
                'id' => 272,
                'breweryId' => 291,
                'latitude' => 50.94620132446289,
                'longitude' => 3.136199951171875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            270 => 
            array (
                'id' => 273,
                'breweryId' => 292,
                'latitude' => 50.83100128173828,
                'longitude' => 3.6758999824523926,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            271 => 
            array (
                'id' => 274,
                'breweryId' => 293,
                'latitude' => 51.116798400878906,
                'longitude' => 5.646399974822998,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            272 => 
            array (
                'id' => 275,
                'breweryId' => 294,
                'latitude' => 50.84170150756836,
                'longitude' => 4.021299839019775,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            273 => 
            array (
                'id' => 276,
                'breweryId' => 295,
                'latitude' => 50.501800537109375,
                'longitude' => 4.10860013961792,
                'accuracy' => 'APPROXIMATE',
            ),
            274 => 
            array (
                'id' => 277,
                'breweryId' => 296,
                'latitude' => 50.842498779296875,
                'longitude' => 2.636199951171875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            275 => 
            array (
                'id' => 278,
                'breweryId' => 297,
                'latitude' => 51.44390106201172,
                'longitude' => 4.73859977722168,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            276 => 
            array (
                'id' => 279,
                'breweryId' => 298,
                'latitude' => 51.09230041503906,
                'longitude' => 3.009999990463257,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            277 => 
            array (
                'id' => 280,
                'breweryId' => 299,
                'latitude' => 51.128700256347656,
                'longitude' => 3.4784998893737793,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            278 => 
            array (
                'id' => 281,
                'breweryId' => 300,
                'latitude' => 50.85639953613281,
                'longitude' => 3.884500026702881,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            279 => 
            array (
                'id' => 282,
                'breweryId' => 301,
                'latitude' => 50.86119842529297,
                'longitude' => 2.6614999771118164,
                'accuracy' => 'ROOFTOP',
            ),
            280 => 
            array (
                'id' => 283,
                'breweryId' => 302,
                'latitude' => 50.777801513671875,
                'longitude' => 4.887700080871582,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            281 => 
            array (
                'id' => 284,
                'breweryId' => 303,
                'latitude' => 50.920101165771484,
                'longitude' => 3.2578999996185303,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            282 => 
            array (
                'id' => 285,
                'breweryId' => 304,
                'latitude' => 51.17660140991211,
                'longitude' => 3.7462000846862793,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            283 => 
            array (
                'id' => 286,
                'breweryId' => 305,
                'latitude' => 50.83219909667969,
                'longitude' => 3.388400077819824,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            284 => 
            array (
                'id' => 287,
                'breweryId' => 307,
                'latitude' => 49.96220016479492,
                'longitude' => 20.600299835205078,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            285 => 
            array (
                'id' => 288,
                'breweryId' => 309,
                'latitude' => 49.662200927734375,
                'longitude' => 19.1742000579834,
                'accuracy' => 'ROOFTOP',
            ),
            286 => 
            array (
                'id' => 289,
                'breweryId' => 310,
                'latitude' => 45.63800048828125,
                'longitude' => -89.4126968383789,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            287 => 
            array (
                'id' => 290,
                'breweryId' => 311,
                'latitude' => 38.255401611328125,
                'longitude' => -85.74410247802734,
                'accuracy' => 'ROOFTOP',
            ),
            288 => 
            array (
                'id' => 291,
                'breweryId' => 312,
                'latitude' => 56.07460021972656,
                'longitude' => 12.116100311279297,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            289 => 
            array (
                'id' => 292,
                'breweryId' => 313,
                'latitude' => 42.50830078125,
                'longitude' => -89.03179931640625,
                'accuracy' => 'APPROXIMATE',
            ),
            290 => 
            array (
                'id' => 293,
                'breweryId' => 314,
                'latitude' => 40.111900329589844,
                'longitude' => -76.50309753417969,
                'accuracy' => 'ROOFTOP',
            ),
            291 => 
            array (
                'id' => 294,
                'breweryId' => 317,
                'latitude' => 39.70500183105469,
                'longitude' => -104.93599700927734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            292 => 
            array (
                'id' => 295,
                'breweryId' => 318,
                'latitude' => 36.74769973754883,
                'longitude' => -119.77200317382812,
                'accuracy' => 'APPROXIMATE',
            ),
            293 => 
            array (
                'id' => 296,
                'breweryId' => 319,
                'latitude' => 41.24039840698242,
                'longitude' => -77.00569915771484,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            294 => 
            array (
                'id' => 297,
                'breweryId' => 320,
                'latitude' => 52.055999755859375,
                'longitude' => -2.7174999713897705,
                'accuracy' => 'APPROXIMATE',
            ),
            295 => 
            array (
                'id' => 298,
                'breweryId' => 322,
                'latitude' => 52.80649948120117,
                'longitude' => -1.622499942779541,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            296 => 
            array (
                'id' => 299,
                'breweryId' => 323,
                'latitude' => 39.7244987487793,
                'longitude' => -121.8479995727539,
                'accuracy' => 'ROOFTOP',
            ),
            297 => 
            array (
                'id' => 300,
                'breweryId' => 324,
                'latitude' => 36.74769973754883,
                'longitude' => -119.77200317382812,
                'accuracy' => 'APPROXIMATE',
            ),
            298 => 
            array (
                'id' => 301,
                'breweryId' => 325,
                'latitude' => 41.5713005065918,
                'longitude' => -71.05709838867188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            299 => 
            array (
                'id' => 302,
                'breweryId' => 326,
                'latitude' => 41.160701751708984,
                'longitude' => -104.802001953125,
                'accuracy' => 'ROOFTOP',
            ),
            300 => 
            array (
                'id' => 303,
                'breweryId' => 327,
                'latitude' => 42.65420150756836,
                'longitude' => -73.74810028076172,
                'accuracy' => 'ROOFTOP',
            ),
            301 => 
            array (
                'id' => 304,
                'breweryId' => 328,
                'latitude' => 42.18439865112305,
                'longitude' => -122.66300201416016,
                'accuracy' => 'ROOFTOP',
            ),
            302 => 
            array (
                'id' => 305,
                'breweryId' => 329,
                'latitude' => 55.93579864501953,
                'longitude' => -3.2297000885009766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            303 => 
            array (
                'id' => 306,
                'breweryId' => 330,
                'latitude' => 35.93199920654297,
                'longitude' => -84.01200103759766,
                'accuracy' => 'ROOFTOP',
            ),
            304 => 
            array (
                'id' => 307,
                'breweryId' => 331,
                'latitude' => 37.9734992980957,
                'longitude' => -122.53099822998047,
                'accuracy' => 'APPROXIMATE',
            ),
            305 => 
            array (
                'id' => 308,
                'breweryId' => 332,
                'latitude' => 32.91469955444336,
                'longitude' => -117.14600372314453,
                'accuracy' => 'ROOFTOP',
            ),
            306 => 
            array (
                'id' => 309,
                'breweryId' => 333,
                'latitude' => 42.36640167236328,
                'longitude' => -71.09110260009766,
                'accuracy' => 'ROOFTOP',
            ),
            307 => 
            array (
                'id' => 310,
                'breweryId' => 334,
                'latitude' => 43.4744987487793,
                'longitude' => -79.67749786376953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            308 => 
            array (
                'id' => 311,
                'breweryId' => 335,
                'latitude' => 41.4995002746582,
                'longitude' => -81.69539642333984,
                'accuracy' => 'APPROXIMATE',
            ),
            309 => 
            array (
                'id' => 312,
                'breweryId' => 336,
                'latitude' => 52.1343994140625,
                'longitude' => -106.64800262451172,
                'accuracy' => 'APPROXIMATE',
            ),
            310 => 
            array (
                'id' => 313,
                'breweryId' => 337,
                'latitude' => 42.610198974609375,
                'longitude' => -70.66639709472656,
                'accuracy' => 'ROOFTOP',
            ),
            311 => 
            array (
                'id' => 314,
                'breweryId' => 338,
                'latitude' => 43.09489822387695,
                'longitude' => -89.51629638671875,
                'accuracy' => 'ROOFTOP',
            ),
            312 => 
            array (
                'id' => 315,
                'breweryId' => 339,
                'latitude' => 38.899898529052734,
                'longitude' => -77.0271987915039,
                'accuracy' => 'ROOFTOP',
            ),
            313 => 
            array (
                'id' => 316,
                'breweryId' => 340,
                'latitude' => 38.84109878540039,
                'longitude' => -77.08689880371094,
                'accuracy' => 'ROOFTOP',
            ),
            314 => 
            array (
                'id' => 317,
                'breweryId' => 341,
                'latitude' => 41.125999450683594,
                'longitude' => -73.78959655761719,
                'accuracy' => 'ROOFTOP',
            ),
            315 => 
            array (
                'id' => 318,
                'breweryId' => 342,
                'latitude' => 52.80419921875,
                'longitude' => -6.729499816894531,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            316 => 
            array (
                'id' => 319,
                'breweryId' => 343,
                'latitude' => 52.719600677490234,
                'longitude' => -6.8460001945495605,
                'accuracy' => 'APPROXIMATE',
            ),
            317 => 
            array (
                'id' => 320,
                'breweryId' => 344,
                'latitude' => 55.66669845581055,
                'longitude' => 12.539299964904785,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            318 => 
            array (
                'id' => 321,
                'breweryId' => 345,
                'latitude' => 56.90019989013672,
                'longitude' => 12.540499687194824,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            319 => 
            array (
                'id' => 322,
                'breweryId' => 346,
                'latitude' => -37.82310104370117,
                'longitude' => 144.9669952392578,
                'accuracy' => 'ROOFTOP',
            ),
            320 => 
            array (
                'id' => 323,
                'breweryId' => 347,
                'latitude' => 42.26890182495117,
                'longitude' => -89.0906982421875,
                'accuracy' => 'ROOFTOP',
            ),
            321 => 
            array (
                'id' => 324,
                'breweryId' => 348,
                'latitude' => 36.67770004272461,
                'longitude' => -121.65599822998047,
                'accuracy' => 'APPROXIMATE',
            ),
            322 => 
            array (
                'id' => 325,
                'breweryId' => 349,
                'latitude' => 35.62310028076172,
                'longitude' => -80.80110168457031,
                'accuracy' => 'ROOFTOP',
            ),
            323 => 
            array (
                'id' => 326,
                'breweryId' => 350,
                'latitude' => 35.910301208496094,
                'longitude' => -79.06320190429688,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            324 => 
            array (
                'id' => 327,
                'breweryId' => 351,
                'latitude' => 37.27479934692383,
                'longitude' => -107.87999725341797,
                'accuracy' => 'ROOFTOP',
            ),
            325 => 
            array (
                'id' => 328,
                'breweryId' => 352,
                'latitude' => 43.754798889160156,
                'longitude' => -71.39669799804688,
                'accuracy' => 'APPROXIMATE',
            ),
            326 => 
            array (
                'id' => 329,
                'breweryId' => 354,
                'latitude' => 43.64899826049805,
                'longitude' => -72.31929779052734,
                'accuracy' => 'APPROXIMATE',
            ),
            327 => 
            array (
                'id' => 330,
                'breweryId' => 355,
                'latitude' => 41.962501525878906,
                'longitude' => -91.69180297851562,
                'accuracy' => 'APPROXIMATE',
            ),
            328 => 
            array (
                'id' => 331,
                'breweryId' => 356,
                'latitude' => 30.267200469970703,
                'longitude' => -97.74310302734375,
                'accuracy' => 'APPROXIMATE',
            ),
            329 => 
            array (
                'id' => 332,
                'breweryId' => 357,
                'latitude' => 49.18730163574219,
                'longitude' => -122.8499984741211,
                'accuracy' => 'ROOFTOP',
            ),
            330 => 
            array (
                'id' => 333,
                'breweryId' => 358,
                'latitude' => 44.441898345947266,
                'longitude' => -89.27970123291016,
                'accuracy' => 'ROOFTOP',
            ),
            331 => 
            array (
                'id' => 334,
                'breweryId' => 359,
                'latitude' => 14.613300323486328,
                'longitude' => -90.5353012084961,
                'accuracy' => 'APPROXIMATE',
            ),
            332 => 
            array (
                'id' => 335,
                'breweryId' => 360,
                'latitude' => 25.7091007232666,
                'longitude' => -100.31400299072266,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            333 => 
            array (
                'id' => 336,
                'breweryId' => 363,
                'latitude' => -32.890201568603516,
                'longitude' => -68.84400177001953,
                'accuracy' => 'APPROXIMATE',
            ),
            334 => 
            array (
                'id' => 337,
                'breweryId' => 364,
                'latitude' => 37.43159866333008,
                'longitude' => -78.65689849853516,
                'accuracy' => 'APPROXIMATE',
            ),
            335 => 
            array (
                'id' => 339,
                'breweryId' => 367,
                'latitude' => 19.721900939941406,
                'longitude' => -101.2249984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            336 => 
            array (
                'id' => 340,
                'breweryId' => 368,
                'latitude' => -25.168800354003906,
                'longitude' => -50.129798889160156,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            337 => 
            array (
                'id' => 341,
                'breweryId' => 369,
                'latitude' => -26.891399383544922,
                'longitude' => -49.12229919433594,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            338 => 
            array (
                'id' => 342,
                'breweryId' => 370,
                'latitude' => 37.1875,
                'longitude' => -3.601799964904785,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            339 => 
            array (
                'id' => 343,
                'breweryId' => 371,
                'latitude' => 35.13999938964844,
                'longitude' => -106.5999984741211,
                'accuracy' => 'ROOFTOP',
            ),
            340 => 
            array (
                'id' => 344,
                'breweryId' => 372,
                'latitude' => 52.13209915161133,
                'longitude' => -0.4814999997615814,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            341 => 
            array (
                'id' => 345,
                'breweryId' => 373,
                'latitude' => 28.212600708007812,
                'longitude' => -80.67340087890625,
                'accuracy' => 'ROOFTOP',
            ),
            342 => 
            array (
                'id' => 346,
                'breweryId' => 374,
                'latitude' => 40.74570083618164,
                'longitude' => -74.00859832763672,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            343 => 
            array (
                'id' => 347,
                'breweryId' => 375,
                'latitude' => 44.83420181274414,
                'longitude' => -87.37699890136719,
                'accuracy' => 'APPROXIMATE',
            ),
            344 => 
            array (
                'id' => 348,
                'breweryId' => 376,
                'latitude' => 39.80229949951172,
                'longitude' => -105.08399963378906,
                'accuracy' => 'ROOFTOP',
            ),
            345 => 
            array (
                'id' => 349,
                'breweryId' => 377,
                'latitude' => 36.14759826660156,
                'longitude' => -115.2979965209961,
                'accuracy' => 'ROOFTOP',
            ),
            346 => 
            array (
                'id' => 350,
                'breweryId' => 378,
                'latitude' => 50.035499572753906,
                'longitude' => 4.377699851989746,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            347 => 
            array (
                'id' => 351,
                'breweryId' => 379,
                'latitude' => 27.95870018005371,
                'longitude' => -82.5093002319336,
                'accuracy' => 'ROOFTOP',
            ),
            348 => 
            array (
                'id' => 352,
                'breweryId' => 380,
                'latitude' => 39.76839828491211,
                'longitude' => -86.15799713134766,
                'accuracy' => 'APPROXIMATE',
            ),
            349 => 
            array (
                'id' => 353,
                'breweryId' => 339,
                'latitude' => 43.80419921875,
                'longitude' => -91.25260162353516,
                'accuracy' => 'ROOFTOP',
            ),
            350 => 
            array (
                'id' => 354,
                'breweryId' => 382,
                'latitude' => 33.85749816894531,
                'longitude' => -117.8759994506836,
                'accuracy' => 'APPROXIMATE',
            ),
            351 => 
            array (
                'id' => 355,
                'breweryId' => 383,
                'latitude' => 41.4995002746582,
                'longitude' => -81.69940185546875,
                'accuracy' => 'ROOFTOP',
            ),
            352 => 
            array (
                'id' => 356,
                'breweryId' => 384,
                'latitude' => 40.6598014831543,
                'longitude' => -74.28299713134766,
                'accuracy' => 'ROOFTOP',
            ),
            353 => 
            array (
                'id' => 357,
                'breweryId' => 385,
                'latitude' => 39.23080062866211,
                'longitude' => -76.67510223388672,
                'accuracy' => 'ROOFTOP',
            ),
            354 => 
            array (
                'id' => 358,
                'breweryId' => 386,
                'latitude' => 50.940101623535156,
                'longitude' => 6.956999778747559,
                'accuracy' => 'ROOFTOP',
            ),
            355 => 
            array (
                'id' => 359,
                'breweryId' => 387,
                'latitude' => 35.22050094604492,
                'longitude' => -97.44390106201172,
                'accuracy' => 'ROOFTOP',
            ),
            356 => 
            array (
                'id' => 360,
                'breweryId' => 388,
                'latitude' => 30.395999908447266,
                'longitude' => -88.88529968261719,
                'accuracy' => 'APPROXIMATE',
            ),
            357 => 
            array (
                'id' => 361,
                'breweryId' => 389,
                'latitude' => 37.00130081176758,
                'longitude' => -121.56600189208984,
                'accuracy' => 'ROOFTOP',
            ),
            358 => 
            array (
                'id' => 362,
                'breweryId' => 390,
                'latitude' => 37.97800064086914,
                'longitude' => -122.03099822998047,
                'accuracy' => 'APPROXIMATE',
            ),
            359 => 
            array (
                'id' => 363,
                'breweryId' => 391,
                'latitude' => 47.67449951171875,
                'longitude' => -116.78399658203125,
                'accuracy' => 'ROOFTOP',
            ),
            360 => 
            array (
                'id' => 364,
                'breweryId' => 392,
                'latitude' => 45.45819854736328,
                'longitude' => -94.4291000366211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            361 => 
            array (
                'id' => 365,
                'breweryId' => 393,
                'latitude' => 42.41699981689453,
                'longitude' => -88.0739974975586,
                'accuracy' => 'APPROXIMATE',
            ),
            362 => 
            array (
                'id' => 366,
                'breweryId' => 394,
                'latitude' => 42.3583984375,
                'longitude' => -71.05979919433594,
                'accuracy' => 'APPROXIMATE',
            ),
            363 => 
            array (
                'id' => 367,
                'breweryId' => 396,
                'latitude' => 43.31769943237305,
                'longitude' => -73.63999938964844,
                'accuracy' => 'ROOFTOP',
            ),
            364 => 
            array (
                'id' => 368,
                'breweryId' => 397,
                'latitude' => -34.87269973754883,
                'longitude' => 138.572998046875,
                'accuracy' => 'ROOFTOP',
            ),
            365 => 
            array (
                'id' => 369,
                'breweryId' => 398,
                'latitude' => 42.589298248291016,
                'longitude' => -74.94029998779297,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            366 => 
            array (
                'id' => 370,
                'breweryId' => 399,
                'latitude' => 39.7598991394043,
                'longitude' => -105.21900177001953,
                'accuracy' => 'ROOFTOP',
            ),
            367 => 
            array (
                'id' => 371,
                'breweryId' => 400,
                'latitude' => 37.727298736572266,
                'longitude' => -89.216796875,
                'accuracy' => 'APPROXIMATE',
            ),
            368 => 
            array (
                'id' => 372,
                'breweryId' => 401,
                'latitude' => 40.92219924926758,
                'longitude' => -98.35810089111328,
                'accuracy' => 'APPROXIMATE',
            ),
            369 => 
            array (
                'id' => 373,
                'breweryId' => 402,
                'latitude' => 40.89419937133789,
                'longitude' => -77.19709777832031,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            370 => 
            array (
                'id' => 374,
                'breweryId' => 403,
                'latitude' => 43.53229904174805,
                'longitude' => -90.00990295410156,
                'accuracy' => 'ROOFTOP',
            ),
            371 => 
            array (
                'id' => 375,
                'breweryId' => 404,
                'latitude' => 32.697601318359375,
                'longitude' => -117.1729965209961,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            372 => 
            array (
                'id' => 376,
                'breweryId' => 405,
                'latitude' => 41.5369987487793,
                'longitude' => -71.27960205078125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            373 => 
            array (
                'id' => 377,
                'breweryId' => 406,
                'latitude' => 53.88460159301758,
                'longitude' => -1.2652000188827515,
                'accuracy' => 'APPROXIMATE',
            ),
            374 => 
            array (
                'id' => 378,
                'breweryId' => 407,
                'latitude' => 41.58549880981445,
                'longitude' => -93.62100219726562,
                'accuracy' => 'ROOFTOP',
            ),
            375 => 
            array (
                'id' => 379,
                'breweryId' => 408,
                'latitude' => 44.088600158691406,
                'longitude' => -87.65760040283203,
                'accuracy' => 'ROOFTOP',
            ),
            376 => 
            array (
                'id' => 380,
                'breweryId' => 409,
                'latitude' => 40.27949905395508,
                'longitude' => -75.21430206298828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            377 => 
            array (
                'id' => 381,
                'breweryId' => 410,
                'latitude' => 40.43130111694336,
                'longitude' => -104.68800354003906,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            378 => 
            array (
                'id' => 382,
                'breweryId' => 411,
                'latitude' => 34.16960144042969,
                'longitude' => -118.15899658203125,
                'accuracy' => 'ROOFTOP',
            ),
            379 => 
            array (
                'id' => 383,
                'breweryId' => 412,
                'latitude' => 40.80690002441406,
                'longitude' => -96.68170166015625,
                'accuracy' => 'APPROXIMATE',
            ),
            380 => 
            array (
                'id' => 384,
                'breweryId' => 413,
                'latitude' => 29.955799102783203,
                'longitude' => -90.06410217285156,
                'accuracy' => 'ROOFTOP',
            ),
            381 => 
            array (
                'id' => 385,
                'breweryId' => 414,
                'latitude' => 38.86980056762695,
                'longitude' => -106.98699951171875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            382 => 
            array (
                'id' => 386,
                'breweryId' => 415,
                'latitude' => 40.87260055541992,
                'longitude' => -74.29640197753906,
                'accuracy' => 'ROOFTOP',
            ),
            383 => 
            array (
                'id' => 387,
                'breweryId' => 416,
                'latitude' => 41.4995002746582,
                'longitude' => -81.69539642333984,
                'accuracy' => 'APPROXIMATE',
            ),
            384 => 
            array (
                'id' => 388,
                'breweryId' => 417,
                'latitude' => 40.693599700927734,
                'longitude' => -89.58899688720703,
                'accuracy' => 'APPROXIMATE',
            ),
            385 => 
            array (
                'id' => 389,
                'breweryId' => 418,
                'latitude' => 54.29119873046875,
                'longitude' => -0.8406000137329102,
                'accuracy' => 'APPROXIMATE',
            ),
            386 => 
            array (
                'id' => 390,
                'breweryId' => 419,
                'latitude' => 43.11470031738281,
                'longitude' => -89.6530990600586,
                'accuracy' => 'ROOFTOP',
            ),
            387 => 
            array (
                'id' => 391,
                'breweryId' => 420,
                'latitude' => 31.72909927368164,
                'longitude' => -116.5780029296875,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            388 => 
            array (
                'id' => 392,
                'breweryId' => 421,
                'latitude' => 41.85390090942383,
                'longitude' => -88.27760314941406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            389 => 
            array (
                'id' => 393,
                'breweryId' => 422,
                'latitude' => 38.230899810791016,
                'longitude' => -85.70549774169922,
                'accuracy' => 'ROOFTOP',
            ),
            390 => 
            array (
                'id' => 394,
                'breweryId' => 423,
                'latitude' => 43.70759963989258,
                'longitude' => -70.31490325927734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            391 => 
            array (
                'id' => 395,
                'breweryId' => 424,
                'latitude' => 50.605899810791016,
                'longitude' => 3.388400077819824,
                'accuracy' => 'APPROXIMATE',
            ),
            392 => 
            array (
                'id' => 396,
                'breweryId' => 425,
                'latitude' => 53.999900817871094,
                'longitude' => -1.5010000467300415,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            393 => 
            array (
                'id' => 397,
                'breweryId' => 426,
                'latitude' => 42.266700744628906,
                'longitude' => -84.96410369873047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            394 => 
            array (
                'id' => 398,
                'breweryId' => 427,
                'latitude' => 29.89940071105957,
                'longitude' => -90.10040283203125,
                'accuracy' => 'APPROXIMATE',
            ),
            395 => 
            array (
                'id' => 399,
                'breweryId' => 428,
                'latitude' => 51.442100524902344,
                'longitude' => 4.9232001304626465,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            396 => 
            array (
                'id' => 400,
                'breweryId' => 429,
                'latitude' => 53.06060028076172,
                'longitude' => 5.534200191497803,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            397 => 
            array (
                'id' => 401,
                'breweryId' => 430,
                'latitude' => 51.202598571777344,
                'longitude' => 3.2242000102996826,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            398 => 
            array (
                'id' => 402,
                'breweryId' => 431,
                'latitude' => 51.08110046386719,
                'longitude' => 3.3698999881744385,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            399 => 
            array (
                'id' => 403,
                'breweryId' => 432,
                'latitude' => 51.11589813232422,
                'longitude' => 3.8157999515533447,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            400 => 
            array (
                'id' => 404,
                'breweryId' => 433,
                'latitude' => 50.92290115356445,
                'longitude' => 2.751800060272217,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            401 => 
            array (
                'id' => 405,
                'breweryId' => 434,
                'latitude' => 39.55839920043945,
                'longitude' => -79.35279846191406,
                'accuracy' => 'APPROXIMATE',
            ),
            402 => 
            array (
                'id' => 406,
                'breweryId' => 435,
                'latitude' => 39.290401458740234,
                'longitude' => -76.61219787597656,
                'accuracy' => 'APPROXIMATE',
            ),
            403 => 
            array (
                'id' => 407,
                'breweryId' => 436,
                'latitude' => 32.715301513671875,
                'longitude' => -117.15699768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            404 => 
            array (
                'id' => 408,
                'breweryId' => 437,
                'latitude' => 43.048099517822266,
                'longitude' => -88.35530090332031,
                'accuracy' => 'ROOFTOP',
            ),
            405 => 
            array (
                'id' => 409,
                'breweryId' => 438,
                'latitude' => 38.23619842529297,
                'longitude' => -122.63999938964844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            406 => 
            array (
                'id' => 410,
                'breweryId' => 439,
                'latitude' => 44.347801208496094,
                'longitude' => -87.82730102539062,
                'accuracy' => 'APPROXIMATE',
            ),
            407 => 
            array (
                'id' => 411,
                'breweryId' => 440,
                'latitude' => 39.75529861450195,
                'longitude' => -104.99700164794922,
                'accuracy' => 'ROOFTOP',
            ),
            408 => 
            array (
                'id' => 412,
                'breweryId' => 441,
                'latitude' => 44.047401428222656,
                'longitude' => -121.322998046875,
                'accuracy' => 'ROOFTOP',
            ),
            409 => 
            array (
                'id' => 413,
                'breweryId' => 442,
                'latitude' => 33.985801696777344,
                'longitude' => -96.65149688720703,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            410 => 
            array (
                'id' => 414,
                'breweryId' => 443,
                'latitude' => 39.13610076904297,
                'longitude' => -84.50309753417969,
                'accuracy' => 'APPROXIMATE',
            ),
            411 => 
            array (
                'id' => 415,
                'breweryId' => 444,
                'latitude' => 34.74729919433594,
                'longitude' => -92.28389739990234,
                'accuracy' => 'ROOFTOP',
            ),
            412 => 
            array (
                'id' => 416,
                'breweryId' => 445,
                'latitude' => 47.94850158691406,
                'longitude' => -122.30500030517578,
                'accuracy' => 'ROOFTOP',
            ),
            413 => 
            array (
                'id' => 417,
                'breweryId' => 446,
                'latitude' => 41.4995002746582,
                'longitude' => -81.69539642333984,
                'accuracy' => 'APPROXIMATE',
            ),
            414 => 
            array (
                'id' => 418,
                'breweryId' => 447,
                'latitude' => 46.77130126953125,
                'longitude' => -123.00700378417969,
                'accuracy' => 'ROOFTOP',
            ),
            415 => 
            array (
                'id' => 419,
                'breweryId' => 448,
                'latitude' => 51.53310012817383,
                'longitude' => 6.421299934387207,
                'accuracy' => 'ROOFTOP',
            ),
            416 => 
            array (
                'id' => 420,
                'breweryId' => 449,
                'latitude' => 45.52280044555664,
                'longitude' => -73.5927963256836,
                'accuracy' => 'ROOFTOP',
            ),
            417 => 
            array (
                'id' => 421,
                'breweryId' => 450,
                'latitude' => 39.62820053100586,
                'longitude' => -106.05899810791016,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            418 => 
            array (
                'id' => 422,
                'breweryId' => 452,
                'latitude' => 38.54050064086914,
                'longitude' => -90.46070098876953,
                'accuracy' => 'ROOFTOP',
            ),
            419 => 
            array (
                'id' => 423,
                'breweryId' => 453,
                'latitude' => 49.2765998840332,
                'longitude' => -123.11499786376953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            420 => 
            array (
                'id' => 424,
                'breweryId' => 454,
                'latitude' => 29.960599899291992,
                'longitude' => -90.08709716796875,
                'accuracy' => 'ROOFTOP',
            ),
            421 => 
            array (
                'id' => 425,
                'breweryId' => 455,
                'latitude' => 39.75410079956055,
                'longitude' => -105.0,
                'accuracy' => 'APPROXIMATE',
            ),
            422 => 
            array (
                'id' => 426,
                'breweryId' => 456,
                'latitude' => 39.94779968261719,
                'longitude' => -75.222900390625,
                'accuracy' => 'ROOFTOP',
            ),
            423 => 
            array (
                'id' => 427,
                'breweryId' => 457,
                'latitude' => 49.269798278808594,
                'longitude' => -123.13200378417969,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            424 => 
            array (
                'id' => 428,
                'breweryId' => 459,
                'latitude' => 38.7682991027832,
                'longitude' => -75.31069946289062,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            425 => 
            array (
                'id' => 429,
                'breweryId' => 460,
                'latitude' => 51.52980041503906,
                'longitude' => 7.469200134277344,
                'accuracy' => 'ROOFTOP',
            ),
            426 => 
            array (
                'id' => 430,
                'breweryId' => 461,
                'latitude' => 39.80189895629883,
                'longitude' => -105.51399993896484,
                'accuracy' => 'APPROXIMATE',
            ),
            427 => 
            array (
                'id' => 431,
                'breweryId' => 462,
                'latitude' => 45.709999084472656,
                'longitude' => -121.51499938964844,
                'accuracy' => 'ROOFTOP',
            ),
            428 => 
            array (
                'id' => 432,
                'breweryId' => 463,
                'latitude' => 42.49300003051758,
                'longitude' => -82.97530364990234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            429 => 
            array (
                'id' => 433,
                'breweryId' => 464,
                'latitude' => 37.71760177612305,
                'longitude' => -122.18199920654297,
                'accuracy' => 'ROOFTOP',
            ),
            430 => 
            array (
                'id' => 434,
                'breweryId' => 465,
                'latitude' => 47.49209976196289,
                'longitude' => 19.142200469970703,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            431 => 
            array (
                'id' => 435,
                'breweryId' => 466,
                'latitude' => 35.08449935913086,
                'longitude' => -106.6510009765625,
                'accuracy' => 'APPROXIMATE',
            ),
            432 => 
            array (
                'id' => 436,
                'breweryId' => 467,
                'latitude' => 53.34410095214844,
                'longitude' => -6.267499923706055,
                'accuracy' => 'APPROXIMATE',
            ),
            433 => 
            array (
                'id' => 437,
                'breweryId' => 468,
                'latitude' => 42.5005989074707,
                'longitude' => -90.66459655761719,
                'accuracy' => 'APPROXIMATE',
            ),
            434 => 
            array (
                'id' => 438,
                'breweryId' => 469,
                'latitude' => 35.60029983520508,
                'longitude' => -77.59709930419922,
                'accuracy' => 'ROOFTOP',
            ),
            435 => 
            array (
                'id' => 439,
                'breweryId' => 470,
                'latitude' => 39.28070068359375,
                'longitude' => -76.59439849853516,
                'accuracy' => 'ROOFTOP',
            ),
            436 => 
            array (
                'id' => 440,
                'breweryId' => 471,
                'latitude' => 28.013999938964844,
                'longitude' => -82.78759765625,
                'accuracy' => 'ROOFTOP',
            ),
            437 => 
            array (
                'id' => 441,
                'breweryId' => 472,
                'latitude' => 41.70750045776367,
                'longitude' => -86.8949966430664,
                'accuracy' => 'APPROXIMATE',
            ),
            438 => 
            array (
                'id' => 442,
                'breweryId' => 281,
                'latitude' => 51.22060012817383,
                'longitude' => 4.399700164794922,
                'accuracy' => 'APPROXIMATE',
            ),
            439 => 
            array (
                'id' => 443,
                'breweryId' => 474,
                'latitude' => -45.03310012817383,
                'longitude' => 168.66099548339844,
                'accuracy' => 'ROOFTOP',
            ),
            440 => 
            array (
                'id' => 444,
                'breweryId' => 401,
                'latitude' => 47.94540023803711,
                'longitude' => -122.30400085449219,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            441 => 
            array (
                'id' => 445,
                'breweryId' => 476,
                'latitude' => 40.455299377441406,
                'longitude' => -79.904296875,
                'accuracy' => 'ROOFTOP',
            ),
            442 => 
            array (
                'id' => 446,
                'breweryId' => 477,
                'latitude' => 38.78139877319336,
                'longitude' => -76.22219848632812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            443 => 
            array (
                'id' => 447,
                'breweryId' => 478,
                'latitude' => 38.5724983215332,
                'longitude' => -109.5510025024414,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            444 => 
            array (
                'id' => 448,
                'breweryId' => 480,
                'latitude' => 49.92110061645508,
                'longitude' => 9.071499824523926,
                'accuracy' => 'APPROXIMATE',
            ),
            445 => 
            array (
                'id' => 449,
                'breweryId' => 481,
                'latitude' => 40.57929992675781,
                'longitude' => -124.15299987792969,
                'accuracy' => 'ROOFTOP',
            ),
            446 => 
            array (
                'id' => 450,
                'breweryId' => 482,
                'latitude' => 55.75579833984375,
                'longitude' => 37.61759948730469,
                'accuracy' => 'APPROXIMATE',
            ),
            447 => 
            array (
                'id' => 451,
                'breweryId' => 483,
                'latitude' => 44.44889831542969,
                'longitude' => -88.0604019165039,
                'accuracy' => 'APPROXIMATE',
            ),
            448 => 
            array (
                'id' => 452,
                'breweryId' => 484,
                'latitude' => 51.816200256347656,
                'longitude' => 9.864299774169922,
                'accuracy' => 'ROOFTOP',
            ),
            449 => 
            array (
                'id' => 453,
                'breweryId' => 485,
                'latitude' => 37.97800064086914,
                'longitude' => -122.03399658203125,
                'accuracy' => 'ROOFTOP',
            ),
            450 => 
            array (
                'id' => 454,
                'breweryId' => 487,
                'latitude' => 37.15530014038086,
                'longitude' => -121.6760025024414,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            451 => 
            array (
                'id' => 455,
                'breweryId' => 489,
                'latitude' => 52.66429901123047,
                'longitude' => 0.15950000286102295,
                'accuracy' => 'APPROXIMATE',
            ),
            452 => 
            array (
                'id' => 456,
                'breweryId' => 490,
                'latitude' => 40.8911018371582,
                'longitude' => -77.47699737548828,
                'accuracy' => 'ROOFTOP',
            ),
            453 => 
            array (
                'id' => 457,
                'breweryId' => 491,
                'latitude' => 38.4093017578125,
                'longitude' => -121.36299896240234,
                'accuracy' => 'ROOFTOP',
            ),
            454 => 
            array (
                'id' => 458,
                'breweryId' => 492,
                'latitude' => 47.809898376464844,
                'longitude' => -122.302001953125,
                'accuracy' => 'ROOFTOP',
            ),
            455 => 
            array (
                'id' => 459,
                'breweryId' => 493,
                'latitude' => 39.26839828491211,
                'longitude' => -76.79940032958984,
                'accuracy' => 'ROOFTOP',
            ),
            456 => 
            array (
                'id' => 460,
                'breweryId' => 494,
                'latitude' => 47.56039810180664,
                'longitude' => -122.38700103759766,
                'accuracy' => 'ROOFTOP',
            ),
            457 => 
            array (
                'id' => 461,
                'breweryId' => 495,
                'latitude' => 42.93239974975586,
                'longitude' => -72.28669738769531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            458 => 
            array (
                'id' => 462,
                'breweryId' => 496,
                'latitude' => 47.61399841308594,
                'longitude' => -122.31600189208984,
                'accuracy' => 'ROOFTOP',
            ),
            459 => 
            array (
                'id' => 463,
                'breweryId' => 497,
                'latitude' => 47.668800354003906,
                'longitude' => -122.33399963378906,
                'accuracy' => 'ROOFTOP',
            ),
            460 => 
            array (
                'id' => 464,
                'breweryId' => 498,
                'latitude' => -45.87200164794922,
                'longitude' => 170.51800537109375,
                'accuracy' => 'ROOFTOP',
            ),
            461 => 
            array (
                'id' => 465,
                'breweryId' => 499,
                'latitude' => 37.831298828125,
                'longitude' => -122.28500366210938,
                'accuracy' => 'APPROXIMATE',
            ),
            462 => 
            array (
                'id' => 466,
                'breweryId' => 500,
                'latitude' => 42.09809875488281,
                'longitude' => -88.2782974243164,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            463 => 
            array (
                'id' => 467,
                'breweryId' => 501,
                'latitude' => 40.81549835205078,
                'longitude' => -96.71050262451172,
                'accuracy' => 'ROOFTOP',
            ),
            464 => 
            array (
                'id' => 468,
                'breweryId' => 502,
                'latitude' => 43.532501220703125,
                'longitude' => -90.00260162353516,
                'accuracy' => 'APPROXIMATE',
            ),
            465 => 
            array (
                'id' => 469,
                'breweryId' => 504,
                'latitude' => 47.25600051879883,
                'longitude' => -122.4729995727539,
                'accuracy' => 'ROOFTOP',
            ),
            466 => 
            array (
                'id' => 470,
                'breweryId' => 505,
                'latitude' => 36.680198669433594,
                'longitude' => -121.80400085449219,
                'accuracy' => 'ROOFTOP',
            ),
            467 => 
            array (
                'id' => 471,
                'breweryId' => 506,
                'latitude' => -36.94889831542969,
                'longitude' => 174.8209991455078,
                'accuracy' => 'APPROXIMATE',
            ),
            468 => 
            array (
                'id' => 472,
                'breweryId' => 507,
                'latitude' => 42.11119842529297,
                'longitude' => -80.11299896240234,
                'accuracy' => 'ROOFTOP',
            ),
            469 => 
            array (
                'id' => 473,
                'breweryId' => 508,
                'latitude' => 43.11470031738281,
                'longitude' => -89.6530990600586,
                'accuracy' => 'ROOFTOP',
            ),
            470 => 
            array (
                'id' => 474,
                'breweryId' => 509,
                'latitude' => 40.37070083618164,
                'longitude' => -105.5260009765625,
                'accuracy' => 'ROOFTOP',
            ),
            471 => 
            array (
                'id' => 475,
                'breweryId' => 510,
                'latitude' => 41.45589828491211,
                'longitude' => -122.84600067138672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            472 => 
            array (
                'id' => 476,
                'breweryId' => 511,
                'latitude' => 47.569000244140625,
                'longitude' => 11.094200134277344,
                'accuracy' => 'ROOFTOP',
            ),
            473 => 
            array (
                'id' => 477,
                'breweryId' => 512,
                'latitude' => 43.10449981689453,
                'longitude' => -75.24520111083984,
                'accuracy' => 'ROOFTOP',
            ),
            474 => 
            array (
                'id' => 479,
                'breweryId' => 513,
                'latitude' => 47.670101165771484,
                'longitude' => -122.11799621582031,
                'accuracy' => 'APPROXIMATE',
            ),
            475 => 
            array (
                'id' => 480,
                'breweryId' => 514,
                'latitude' => 43.08440017700195,
                'longitude' => -89.4760971069336,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            476 => 
            array (
                'id' => 481,
                'breweryId' => 515,
                'latitude' => 37.387001037597656,
                'longitude' => -121.99299621582031,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            477 => 
            array (
                'id' => 482,
                'breweryId' => 516,
                'latitude' => 37.885501861572266,
                'longitude' => -122.03299713134766,
                'accuracy' => 'APPROXIMATE',
            ),
            478 => 
            array (
                'id' => 483,
                'breweryId' => 517,
                'latitude' => 54.95479965209961,
                'longitude' => -1.6576000452041626,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            479 => 
            array (
                'id' => 485,
                'breweryId' => 519,
                'latitude' => 51.698699951171875,
                'longitude' => -4.145599842071533,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            480 => 
            array (
                'id' => 486,
                'breweryId' => 520,
                'latitude' => 39.321998596191406,
                'longitude' => -120.16300201416016,
                'accuracy' => 'ROOFTOP',
            ),
            481 => 
            array (
                'id' => 487,
                'breweryId' => 521,
                'latitude' => 41.01169967651367,
                'longitude' => -95.22720336914062,
                'accuracy' => 'APPROXIMATE',
            ),
            482 => 
            array (
                'id' => 488,
                'breweryId' => 522,
                'latitude' => 44.081199645996094,
                'longitude' => -103.22699737548828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            483 => 
            array (
                'id' => 489,
                'breweryId' => 523,
                'latitude' => 37.377498626708984,
                'longitude' => -122.02999877929688,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            484 => 
            array (
                'id' => 490,
                'breweryId' => 524,
                'latitude' => 35.595298767089844,
                'longitude' => -120.69400024414062,
                'accuracy' => 'ROOFTOP',
            ),
            485 => 
            array (
                'id' => 491,
                'breweryId' => 525,
                'latitude' => 34.22570037841797,
                'longitude' => -77.9447021484375,
                'accuracy' => 'APPROXIMATE',
            ),
            486 => 
            array (
                'id' => 492,
                'breweryId' => 526,
                'latitude' => 47.043701171875,
                'longitude' => -122.89700317382812,
                'accuracy' => 'ROOFTOP',
            ),
            487 => 
            array (
                'id' => 493,
                'breweryId' => 527,
                'latitude' => 46.792598724365234,
                'longitude' => -92.09089660644531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            488 => 
            array (
                'id' => 494,
                'breweryId' => 528,
                'latitude' => 41.66109848022461,
                'longitude' => -91.53019714355469,
                'accuracy' => 'APPROXIMATE',
            ),
            489 => 
            array (
                'id' => 495,
                'breweryId' => 529,
                'latitude' => 35.19729995727539,
                'longitude' => -111.64800262451172,
                'accuracy' => 'ROOFTOP',
            ),
            490 => 
            array (
                'id' => 496,
                'breweryId' => 530,
                'latitude' => 38.95000076293945,
                'longitude' => -92.3322982788086,
                'accuracy' => 'ROOFTOP',
            ),
            491 => 
            array (
                'id' => 497,
                'breweryId' => 531,
                'latitude' => 44.90840148925781,
                'longitude' => -93.15380096435547,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            492 => 
            array (
                'id' => 498,
                'breweryId' => 532,
                'latitude' => 42.20309829711914,
                'longitude' => -87.9301986694336,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            493 => 
            array (
                'id' => 499,
                'breweryId' => 534,
                'latitude' => 54.77899932861328,
                'longitude' => 9.435500144958496,
                'accuracy' => 'ROOFTOP',
            ),
            494 => 
            array (
                'id' => 500,
                'breweryId' => 535,
                'latitude' => 28.07069969177246,
                'longitude' => -80.6011962890625,
                'accuracy' => 'ROOFTOP',
            ),
            495 => 
            array (
                'id' => 501,
                'breweryId' => 536,
                'latitude' => 41.54330062866211,
                'longitude' => -87.67890167236328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            496 => 
            array (
                'id' => 502,
                'breweryId' => 537,
                'latitude' => 43.1609992980957,
                'longitude' => -77.61090087890625,
                'accuracy' => 'APPROXIMATE',
            ),
            497 => 
            array (
                'id' => 503,
                'breweryId' => 538,
                'latitude' => 48.299198150634766,
                'longitude' => -122.6520004272461,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            498 => 
            array (
                'id' => 504,
                'breweryId' => 539,
                'latitude' => 42.95610046386719,
                'longitude' => -78.89659881591797,
                'accuracy' => 'ROOFTOP',
            ),
            499 => 
            array (
                'id' => 505,
                'breweryId' => 540,
                'latitude' => 39.758201599121094,
                'longitude' => -104.98999786376953,
                'accuracy' => 'ROOFTOP',
            ),
        ));
        \DB::table('geocodes')->insert(array (
            0 => 
            array (
                'id' => 506,
                'breweryId' => 541,
                'latitude' => 39.91210174560547,
                'longitude' => -74.97010040283203,
                'accuracy' => 'ROOFTOP',
            ),
            1 => 
            array (
                'id' => 507,
                'breweryId' => 542,
                'latitude' => 50.681800842285156,
                'longitude' => 4.954699993133545,
                'accuracy' => 'APPROXIMATE',
            ),
            2 => 
            array (
                'id' => 508,
                'breweryId' => 543,
                'latitude' => 36.0973014831543,
                'longitude' => -80.25090026855469,
                'accuracy' => 'ROOFTOP',
            ),
            3 => 
            array (
                'id' => 509,
                'breweryId' => 544,
                'latitude' => 38.977298736572266,
                'longitude' => -76.49479675292969,
                'accuracy' => 'ROOFTOP',
            ),
            4 => 
            array (
                'id' => 510,
                'breweryId' => 545,
                'latitude' => 40.58319854736328,
                'longitude' => -105.04199981689453,
                'accuracy' => 'ROOFTOP',
            ),
            5 => 
            array (
                'id' => 511,
                'breweryId' => 548,
                'latitude' => 38.8047981262207,
                'longitude' => -77.0468978881836,
                'accuracy' => 'APPROXIMATE',
            ),
            6 => 
            array (
                'id' => 512,
                'breweryId' => 549,
                'latitude' => 42.958499908447266,
                'longitude' => -85.67350006103516,
                'accuracy' => 'ROOFTOP',
            ),
            7 => 
            array (
                'id' => 513,
                'breweryId' => 550,
                'latitude' => 41.80889892578125,
                'longitude' => -88.01119995117188,
                'accuracy' => 'APPROXIMATE',
            ),
            8 => 
            array (
                'id' => 514,
                'breweryId' => 551,
                'latitude' => 33.41939926147461,
                'longitude' => -111.91600036621094,
                'accuracy' => 'ROOFTOP',
            ),
            9 => 
            array (
                'id' => 515,
                'breweryId' => 552,
                'latitude' => 44.03419876098633,
                'longitude' => -88.56079864501953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            10 => 
            array (
                'id' => 516,
                'breweryId' => 553,
                'latitude' => 44.267799377441406,
                'longitude' => -88.47309875488281,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            11 => 
            array (
                'id' => 517,
                'breweryId' => 554,
                'latitude' => 41.499000549316406,
                'longitude' => -72.90070343017578,
                'accuracy' => 'APPROXIMATE',
            ),
            12 => 
            array (
                'id' => 518,
                'breweryId' => 555,
                'latitude' => 39.36280059814453,
                'longitude' => -77.42649841308594,
                'accuracy' => 'ROOFTOP',
            ),
            13 => 
            array (
                'id' => 519,
                'breweryId' => 556,
                'latitude' => 38.9718017578125,
                'longitude' => -95.23570251464844,
                'accuracy' => 'ROOFTOP',
            ),
            14 => 
            array (
                'id' => 520,
                'breweryId' => 557,
                'latitude' => 51.83250045776367,
                'longitude' => -2.5116000175476074,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            15 => 
            array (
                'id' => 521,
                'breweryId' => 558,
                'latitude' => 53.57550048828125,
                'longitude' => 7.901599884033203,
                'accuracy' => 'ROOFTOP',
            ),
            16 => 
            array (
                'id' => 522,
                'breweryId' => 559,
                'latitude' => 41.520198822021484,
                'longitude' => -90.57250213623047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            17 => 
            array (
                'id' => 523,
                'breweryId' => 560,
                'latitude' => 41.54029846191406,
                'longitude' => -82.7354965209961,
                'accuracy' => 'APPROXIMATE',
            ),
            18 => 
            array (
                'id' => 524,
                'breweryId' => 561,
                'latitude' => 49.01559829711914,
                'longitude' => 12.091300010681152,
                'accuracy' => 'ROOFTOP',
            ),
            19 => 
            array (
                'id' => 525,
                'breweryId' => 562,
                'latitude' => 45.71030044555664,
                'longitude' => -121.51499938964844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            20 => 
            array (
                'id' => 526,
                'breweryId' => 563,
                'latitude' => 51.487701416015625,
                'longitude' => -0.24979999661445618,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            21 => 
            array (
                'id' => 527,
                'breweryId' => 565,
                'latitude' => 43.80139923095703,
                'longitude' => -91.2396011352539,
                'accuracy' => 'APPROXIMATE',
            ),
            22 => 
            array (
                'id' => 528,
                'breweryId' => 566,
                'latitude' => 40.746498107910156,
                'longitude' => -74.2593994140625,
                'accuracy' => 'ROOFTOP',
            ),
            23 => 
            array (
                'id' => 529,
                'breweryId' => 567,
                'latitude' => 51.339698791503906,
                'longitude' => 12.371399879455566,
                'accuracy' => 'APPROXIMATE',
            ),
            24 => 
            array (
                'id' => 530,
                'breweryId' => 568,
                'latitude' => 47.60639953613281,
                'longitude' => 9.606100082397461,
                'accuracy' => 'ROOFTOP',
            ),
            25 => 
            array (
                'id' => 531,
                'breweryId' => 569,
                'latitude' => 47.5171012878418,
                'longitude' => 9.430000305175781,
                'accuracy' => 'ROOFTOP',
            ),
            26 => 
            array (
                'id' => 532,
                'breweryId' => 570,
                'latitude' => 51.22489929199219,
                'longitude' => 6.775700092315674,
                'accuracy' => 'APPROXIMATE',
            ),
            27 => 
            array (
                'id' => 533,
                'breweryId' => 571,
                'latitude' => 53.16910171508789,
                'longitude' => 0.31690001487731934,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            28 => 
            array (
                'id' => 534,
                'breweryId' => 572,
                'latitude' => 50.79890060424805,
                'longitude' => -1.0911999940872192,
                'accuracy' => 'APPROXIMATE',
            ),
            29 => 
            array (
                'id' => 535,
                'breweryId' => 573,
                'latitude' => 52.354400634765625,
                'longitude' => 9.753199577331543,
                'accuracy' => 'ROOFTOP',
            ),
            30 => 
            array (
                'id' => 536,
                'breweryId' => 574,
                'latitude' => 46.518001556396484,
                'longitude' => -95.3760986328125,
                'accuracy' => 'APPROXIMATE',
            ),
            31 => 
            array (
                'id' => 537,
                'breweryId' => 575,
                'latitude' => 61.217899322509766,
                'longitude' => -149.89599609375,
                'accuracy' => 'ROOFTOP',
            ),
            32 => 
            array (
                'id' => 538,
                'breweryId' => 576,
                'latitude' => 41.877498626708984,
                'longitude' => -88.06700134277344,
                'accuracy' => 'APPROXIMATE',
            ),
            33 => 
            array (
                'id' => 539,
                'breweryId' => 577,
                'latitude' => 39.54759979248047,
                'longitude' => -107.322998046875,
                'accuracy' => 'ROOFTOP',
            ),
            34 => 
            array (
                'id' => 540,
                'breweryId' => 578,
                'latitude' => -27.853900909423828,
                'longitude' => 153.35899353027344,
                'accuracy' => 'APPROXIMATE',
            ),
            35 => 
            array (
                'id' => 541,
                'breweryId' => 579,
                'latitude' => 43.46760177612305,
                'longitude' => -80.52310180664062,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            36 => 
            array (
                'id' => 542,
                'breweryId' => 580,
                'latitude' => 39.754600524902344,
                'longitude' => -105.2239990234375,
                'accuracy' => 'ROOFTOP',
            ),
            37 => 
            array (
                'id' => 543,
                'breweryId' => 581,
                'latitude' => 37.774898529052734,
                'longitude' => -122.41899871826172,
                'accuracy' => 'APPROXIMATE',
            ),
            38 => 
            array (
                'id' => 544,
                'breweryId' => 582,
                'latitude' => 37.87160110473633,
                'longitude' => -122.27300262451172,
                'accuracy' => 'APPROXIMATE',
            ),
            39 => 
            array (
                'id' => 545,
                'breweryId' => 583,
                'latitude' => 41.92729949951172,
                'longitude' => -87.68070220947266,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            40 => 
            array (
                'id' => 546,
                'breweryId' => 584,
                'latitude' => 45.21039962768555,
                'longitude' => -123.18900299072266,
                'accuracy' => 'ROOFTOP',
            ),
            41 => 
            array (
                'id' => 547,
                'breweryId' => 585,
                'latitude' => 41.913700103759766,
                'longitude' => -87.654296875,
                'accuracy' => 'ROOFTOP',
            ),
            42 => 
            array (
                'id' => 548,
                'breweryId' => 586,
                'latitude' => 41.88710021972656,
                'longitude' => -87.6720962524414,
                'accuracy' => 'ROOFTOP',
            ),
            43 => 
            array (
                'id' => 549,
                'breweryId' => 587,
                'latitude' => 26.074499130249023,
                'longitude' => -80.18060302734375,
                'accuracy' => 'ROOFTOP',
            ),
            44 => 
            array (
                'id' => 550,
                'breweryId' => 588,
                'latitude' => 37.35260009765625,
                'longitude' => -121.89299774169922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            45 => 
            array (
                'id' => 551,
                'breweryId' => 589,
                'latitude' => 39.644100189208984,
                'longitude' => -106.59600067138672,
                'accuracy' => 'ROOFTOP',
            ),
            46 => 
            array (
                'id' => 552,
                'breweryId' => 590,
                'latitude' => 41.429500579833984,
                'longitude' => -97.36229705810547,
                'accuracy' => 'ROOFTOP',
            ),
            47 => 
            array (
                'id' => 553,
                'breweryId' => 591,
                'latitude' => 42.17789840698242,
                'longitude' => -88.33769989013672,
                'accuracy' => 'ROOFTOP',
            ),
            48 => 
            array (
                'id' => 554,
                'breweryId' => 592,
                'latitude' => 40.251800537109375,
                'longitude' => -105.81999969482422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            49 => 
            array (
                'id' => 555,
                'breweryId' => 593,
                'latitude' => 43.49879837036133,
                'longitude' => -110.87699890136719,
                'accuracy' => 'ROOFTOP',
            ),
            50 => 
            array (
                'id' => 556,
                'breweryId' => 594,
                'latitude' => 43.5984001159668,
                'longitude' => -111.10800170898438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            51 => 
            array (
                'id' => 557,
                'breweryId' => 595,
                'latitude' => 41.2672004699707,
                'longitude' => -96.07140350341797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            52 => 
            array (
                'id' => 558,
                'breweryId' => 596,
                'latitude' => 45.549800872802734,
                'longitude' => -94.20670318603516,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            53 => 
            array (
                'id' => 559,
                'breweryId' => 597,
                'latitude' => 49.894500732421875,
                'longitude' => -119.48799896240234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            54 => 
            array (
                'id' => 560,
                'breweryId' => 598,
                'latitude' => 49.27050018310547,
                'longitude' => -123.13600158691406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            55 => 
            array (
                'id' => 561,
                'breweryId' => 599,
                'latitude' => 42.679298400878906,
                'longitude' => -89.04979705810547,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            56 => 
            array (
                'id' => 562,
                'breweryId' => 600,
                'latitude' => 39.5349006652832,
                'longitude' => -119.75399780273438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            57 => 
            array (
                'id' => 563,
                'breweryId' => 601,
                'latitude' => 61.581600189208984,
                'longitude' => -149.43899536132812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            58 => 
            array (
                'id' => 564,
                'breweryId' => 602,
                'latitude' => 43.074501037597656,
                'longitude' => -89.38020324707031,
                'accuracy' => 'ROOFTOP',
            ),
            59 => 
            array (
                'id' => 565,
                'breweryId' => 603,
                'latitude' => 43.0177001953125,
                'longitude' => -89.42320251464844,
                'accuracy' => 'ROOFTOP',
            ),
            60 => 
            array (
                'id' => 566,
                'breweryId' => 604,
                'latitude' => 39.75389862060547,
                'longitude' => -104.98899841308594,
                'accuracy' => 'ROOFTOP',
            ),
            61 => 
            array (
                'id' => 567,
                'breweryId' => 605,
                'latitude' => 41.48440170288086,
                'longitude' => -81.7042007446289,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            62 => 
            array (
                'id' => 568,
                'breweryId' => 606,
                'latitude' => 39.60419845581055,
                'longitude' => -105.947998046875,
                'accuracy' => 'APPROXIMATE',
            ),
            63 => 
            array (
                'id' => 569,
                'breweryId' => 607,
                'latitude' => 44.94670104980469,
                'longitude' => -93.09700012207031,
                'accuracy' => 'ROOFTOP',
            ),
            64 => 
            array (
                'id' => 570,
                'breweryId' => 608,
                'latitude' => 44.51890182495117,
                'longitude' => -88.01959991455078,
                'accuracy' => 'ROOFTOP',
            ),
            65 => 
            array (
                'id' => 571,
                'breweryId' => 609,
                'latitude' => 33.13600158691406,
                'longitude' => -117.2249984741211,
                'accuracy' => 'ROOFTOP',
            ),
            66 => 
            array (
                'id' => 572,
                'breweryId' => 610,
                'latitude' => 44.93980026245117,
                'longitude' => -93.15679931640625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            67 => 
            array (
                'id' => 573,
                'breweryId' => 611,
                'latitude' => 44.034400939941406,
                'longitude' => -73.17350006103516,
                'accuracy' => 'ROOFTOP',
            ),
            68 => 
            array (
                'id' => 574,
                'breweryId' => 612,
                'latitude' => 52.24100112915039,
                'longitude' => 0.7156999707221985,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            69 => 
            array (
                'id' => 575,
                'breweryId' => 613,
                'latitude' => 35.772098541259766,
                'longitude' => -78.63860321044922,
                'accuracy' => 'APPROXIMATE',
            ),
            70 => 
            array (
                'id' => 576,
                'breweryId' => 614,
                'latitude' => 38.23820114135742,
                'longitude' => -122.04000091552734,
                'accuracy' => 'APPROXIMATE',
            ),
            71 => 
            array (
                'id' => 577,
                'breweryId' => 615,
                'latitude' => 42.28049850463867,
                'longitude' => -83.7490005493164,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            72 => 
            array (
                'id' => 578,
                'breweryId' => 616,
                'latitude' => 52.208099365234375,
                'longitude' => 6.816299915313721,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            73 => 
            array (
                'id' => 579,
                'breweryId' => 617,
                'latitude' => 43.00809860229492,
                'longitude' => -89.73829650878906,
                'accuracy' => 'ROOFTOP',
            ),
            74 => 
            array (
                'id' => 580,
                'breweryId' => 618,
                'latitude' => 19.427000045776367,
                'longitude' => -99.12760162353516,
                'accuracy' => 'APPROXIMATE',
            ),
            75 => 
            array (
                'id' => 581,
                'breweryId' => 619,
                'latitude' => 50.8109016418457,
                'longitude' => 5.921299934387207,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            76 => 
            array (
                'id' => 582,
                'breweryId' => 620,
                'latitude' => 52.37950134277344,
                'longitude' => 4.637700080871582,
                'accuracy' => 'APPROXIMATE',
            ),
            77 => 
            array (
                'id' => 583,
                'breweryId' => 621,
                'latitude' => 48.13909912109375,
                'longitude' => 11.5802001953125,
                'accuracy' => 'APPROXIMATE',
            ),
            78 => 
            array (
                'id' => 584,
                'breweryId' => 622,
                'latitude' => 45.4901008605957,
                'longitude' => -122.64299774169922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            79 => 
            array (
                'id' => 585,
                'breweryId' => 623,
                'latitude' => 47.65919876098633,
                'longitude' => -122.36599731445312,
                'accuracy' => 'ROOFTOP',
            ),
            80 => 
            array (
                'id' => 586,
                'breweryId' => 624,
                'latitude' => 37.490299224853516,
                'longitude' => -122.43499755859375,
                'accuracy' => 'APPROXIMATE',
            ),
            81 => 
            array (
                'id' => 587,
                'breweryId' => 625,
                'latitude' => 35.608299255371094,
                'longitude' => -77.37319946289062,
                'accuracy' => 'ROOFTOP',
            ),
            82 => 
            array (
                'id' => 588,
                'breweryId' => 626,
                'latitude' => 54.174400329589844,
                'longitude' => -1.4844000339508057,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            83 => 
            array (
                'id' => 589,
                'breweryId' => 627,
                'latitude' => 50.98889923095703,
                'longitude' => -1.498900055885315,
                'accuracy' => 'APPROXIMATE',
            ),
            84 => 
            array (
                'id' => 590,
                'breweryId' => 628,
                'latitude' => 51.19129943847656,
                'longitude' => 6.4421000480651855,
                'accuracy' => 'APPROXIMATE',
            ),
            85 => 
            array (
                'id' => 591,
                'breweryId' => 629,
                'latitude' => 60.294498443603516,
                'longitude' => 5.259200096130371,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            86 => 
            array (
                'id' => 592,
                'breweryId' => 630,
                'latitude' => 50.729000091552734,
                'longitude' => 4.297100067138672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            87 => 
            array (
                'id' => 593,
                'breweryId' => 631,
                'latitude' => 20.759199142456055,
                'longitude' => -156.45700073242188,
                'accuracy' => 'APPROXIMATE',
            ),
            88 => 
            array (
                'id' => 594,
                'breweryId' => 632,
                'latitude' => 43.38710021972656,
                'longitude' => -87.87950134277344,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            89 => 
            array (
                'id' => 595,
                'breweryId' => 633,
                'latitude' => 47.24359893798828,
                'longitude' => -122.43699645996094,
                'accuracy' => 'ROOFTOP',
            ),
            90 => 
            array (
                'id' => 596,
                'breweryId' => 634,
                'latitude' => 42.346500396728516,
                'longitude' => -71.03379821777344,
                'accuracy' => 'ROOFTOP',
            ),
            91 => 
            array (
                'id' => 597,
                'breweryId' => 635,
                'latitude' => 43.51300048828125,
                'longitude' => -72.40149688720703,
                'accuracy' => 'ROOFTOP',
            ),
            92 => 
            array (
                'id' => 598,
                'breweryId' => 636,
                'latitude' => 40.49620056152344,
                'longitude' => -74.44409942626953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            93 => 
            array (
                'id' => 599,
                'breweryId' => 637,
                'latitude' => 50.87419891357422,
                'longitude' => 0.016699999570846558,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            94 => 
            array (
                'id' => 600,
                'breweryId' => 638,
                'latitude' => 56.153099060058594,
                'longitude' => -3.800600051879883,
                'accuracy' => 'APPROXIMATE',
            ),
            95 => 
            array (
                'id' => 601,
                'breweryId' => 639,
                'latitude' => 51.84389877319336,
                'longitude' => 10.753299713134766,
                'accuracy' => 'ROOFTOP',
            ),
            96 => 
            array (
                'id' => 602,
                'breweryId' => 640,
                'latitude' => 51.22610092163086,
                'longitude' => 6.774499893188477,
                'accuracy' => 'ROOFTOP',
            ),
            97 => 
            array (
                'id' => 603,
                'breweryId' => 641,
                'latitude' => 43.21649932861328,
                'longitude' => -123.34200286865234,
                'accuracy' => 'APPROXIMATE',
            ),
            98 => 
            array (
                'id' => 604,
                'breweryId' => 642,
                'latitude' => 40.58530044555664,
                'longitude' => -105.08399963378906,
                'accuracy' => 'APPROXIMATE',
            ),
            99 => 
            array (
                'id' => 605,
                'breweryId' => 643,
                'latitude' => 40.7322998046875,
                'longitude' => -73.98739624023438,
                'accuracy' => 'APPROXIMATE',
            ),
            100 => 
            array (
                'id' => 606,
                'breweryId' => 644,
                'latitude' => 39.739200592041016,
                'longitude' => -104.98500061035156,
                'accuracy' => 'APPROXIMATE',
            ),
            101 => 
            array (
                'id' => 607,
                'breweryId' => 645,
                'latitude' => 39.965301513671875,
                'longitude' => -74.31179809570312,
                'accuracy' => 'APPROXIMATE',
            ),
            102 => 
            array (
                'id' => 609,
                'breweryId' => 649,
                'latitude' => 47.5077018737793,
                'longitude' => 8.730199813842773,
                'accuracy' => 'ROOFTOP',
            ),
            103 => 
            array (
                'id' => 610,
                'breweryId' => 650,
                'latitude' => 49.891998291015625,
                'longitude' => 10.885299682617188,
                'accuracy' => 'ROOFTOP',
            ),
            104 => 
            array (
                'id' => 611,
                'breweryId' => 651,
                'latitude' => 45.74580001831055,
                'longitude' => -87.05599975585938,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            105 => 
            array (
                'id' => 612,
                'breweryId' => 652,
                'latitude' => 44.95180130004883,
                'longitude' => -89.66570281982422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            106 => 
            array (
                'id' => 613,
                'breweryId' => 653,
                'latitude' => 44.949100494384766,
                'longitude' => -93.28849792480469,
                'accuracy' => 'ROOFTOP',
            ),
            107 => 
            array (
                'id' => 614,
                'breweryId' => 655,
                'latitude' => 32.309600830078125,
                'longitude' => -106.79299926757812,
                'accuracy' => 'ROOFTOP',
            ),
            108 => 
            array (
                'id' => 615,
                'breweryId' => 656,
                'latitude' => 43.16460037231445,
                'longitude' => -77.6155014038086,
                'accuracy' => 'ROOFTOP',
            ),
            109 => 
            array (
                'id' => 616,
                'breweryId' => 657,
                'latitude' => 41.0015983581543,
                'longitude' => -74.34030151367188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            110 => 
            array (
                'id' => 617,
                'breweryId' => 658,
                'latitude' => 35.57160186767578,
                'longitude' => -82.49909973144531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            111 => 
            array (
                'id' => 618,
                'breweryId' => 659,
                'latitude' => 47.51319885253906,
                'longitude' => 10.279000282287598,
                'accuracy' => 'ROOFTOP',
            ),
            112 => 
            array (
                'id' => 619,
                'breweryId' => 660,
                'latitude' => 37.56650161743164,
                'longitude' => 126.97799682617188,
                'accuracy' => 'APPROXIMATE',
            ),
            113 => 
            array (
                'id' => 620,
                'breweryId' => 661,
                'latitude' => 50.394901275634766,
                'longitude' => 9.77239990234375,
                'accuracy' => 'ROOFTOP',
            ),
            114 => 
            array (
                'id' => 621,
                'breweryId' => 662,
                'latitude' => 49.01250076293945,
                'longitude' => 8.426400184631348,
                'accuracy' => 'ROOFTOP',
            ),
            115 => 
            array (
                'id' => 622,
                'breweryId' => 663,
                'latitude' => 47.69419860839844,
                'longitude' => 13.078399658203125,
                'accuracy' => 'ROOFTOP',
            ),
            116 => 
            array (
                'id' => 623,
                'breweryId' => 664,
                'latitude' => 47.86909866333008,
                'longitude' => 12.650500297546387,
                'accuracy' => 'ROOFTOP',
            ),
            117 => 
            array (
                'id' => 624,
                'breweryId' => 665,
                'latitude' => 32.96179962158203,
                'longitude' => -96.8292007446289,
                'accuracy' => 'APPROXIMATE',
            ),
            118 => 
            array (
                'id' => 625,
                'breweryId' => 666,
                'latitude' => 32.803001403808594,
                'longitude' => -96.7698974609375,
                'accuracy' => 'APPROXIMATE',
            ),
            119 => 
            array (
                'id' => 626,
                'breweryId' => 667,
                'latitude' => 49.167198181152344,
                'longitude' => 12.639900207519531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            120 => 
            array (
                'id' => 627,
                'breweryId' => 668,
                'latitude' => 53.56209945678711,
                'longitude' => 9.945099830627441,
                'accuracy' => 'ROOFTOP',
            ),
            121 => 
            array (
                'id' => 628,
                'breweryId' => 669,
                'latitude' => 38.9911003112793,
                'longitude' => -77.02369689941406,
                'accuracy' => 'ROOFTOP',
            ),
            122 => 
            array (
                'id' => 629,
                'breweryId' => 670,
                'latitude' => 51.99660110473633,
                'longitude' => -1.4922000169754028,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            123 => 
            array (
                'id' => 630,
                'breweryId' => 672,
                'latitude' => 40.621498107910156,
                'longitude' => -111.86599731445312,
                'accuracy' => 'ROOFTOP',
            ),
            124 => 
            array (
                'id' => 631,
                'breweryId' => 673,
                'latitude' => 41.02470016479492,
                'longitude' => -81.46759796142578,
                'accuracy' => 'ROOFTOP',
            ),
            125 => 
            array (
                'id' => 632,
                'breweryId' => 674,
                'latitude' => 38.55509948730469,
                'longitude' => -121.43000030517578,
                'accuracy' => 'ROOFTOP',
            ),
            126 => 
            array (
                'id' => 633,
                'breweryId' => 675,
                'latitude' => 39.71870040893555,
                'longitude' => -104.94999694824219,
                'accuracy' => 'ROOFTOP',
            ),
            127 => 
            array (
                'id' => 634,
                'breweryId' => 676,
                'latitude' => 43.7593994140625,
                'longitude' => -87.7228012084961,
                'accuracy' => 'ROOFTOP',
            ),
            128 => 
            array (
                'id' => 635,
                'breweryId' => 677,
                'latitude' => 37.676998138427734,
                'longitude' => -121.89800262451172,
                'accuracy' => 'ROOFTOP',
            ),
            129 => 
            array (
                'id' => 636,
                'breweryId' => 678,
                'latitude' => 45.49689865112305,
                'longitude' => -122.63500213623047,
                'accuracy' => 'ROOFTOP',
            ),
            130 => 
            array (
                'id' => 637,
                'breweryId' => 679,
                'latitude' => 37.634498596191406,
                'longitude' => -120.98200225830078,
                'accuracy' => 'ROOFTOP',
            ),
            131 => 
            array (
                'id' => 638,
                'breweryId' => 680,
                'latitude' => 42.26259994506836,
                'longitude' => -71.80229949951172,
                'accuracy' => 'APPROXIMATE',
            ),
            132 => 
            array (
                'id' => 639,
                'breweryId' => 681,
                'latitude' => 51.26150131225586,
                'longitude' => 9.449399948120117,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            133 => 
            array (
                'id' => 640,
                'breweryId' => 682,
                'latitude' => 39.64030075073242,
                'longitude' => -106.3740005493164,
                'accuracy' => 'APPROXIMATE',
            ),
            134 => 
            array (
                'id' => 641,
                'breweryId' => 683,
                'latitude' => 39.265098571777344,
                'longitude' => -84.37989807128906,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            135 => 
            array (
                'id' => 642,
                'breweryId' => 684,
                'latitude' => -33.217498779296875,
                'longitude' => 151.42599487304688,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            136 => 
            array (
                'id' => 643,
                'breweryId' => 685,
                'latitude' => 51.202598571777344,
                'longitude' => 3.2242000102996826,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            137 => 
            array (
                'id' => 644,
                'breweryId' => 686,
                'latitude' => 40.869998931884766,
                'longitude' => -124.08699798583984,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            138 => 
            array (
                'id' => 645,
                'breweryId' => 687,
                'latitude' => 51.10070037841797,
                'longitude' => 3.6933999061584473,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            139 => 
            array (
                'id' => 646,
                'breweryId' => 688,
                'latitude' => 43.46659851074219,
                'longitude' => -112.03399658203125,
                'accuracy' => 'APPROXIMATE',
            ),
            140 => 
            array (
                'id' => 647,
                'breweryId' => 689,
                'latitude' => 40.47869873046875,
                'longitude' => -88.99459838867188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            141 => 
            array (
                'id' => 648,
                'breweryId' => 690,
                'latitude' => 50.88650131225586,
                'longitude' => 4.706900119781494,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            142 => 
            array (
                'id' => 649,
                'breweryId' => 691,
                'latitude' => 39.952598571777344,
                'longitude' => -75.1594009399414,
                'accuracy' => 'ROOFTOP',
            ),
            143 => 
            array (
                'id' => 650,
                'breweryId' => 692,
                'latitude' => 30.21310043334961,
                'longitude' => -97.73580169677734,
                'accuracy' => 'ROOFTOP',
            ),
            144 => 
            array (
                'id' => 651,
                'breweryId' => 693,
                'latitude' => 35.66749954223633,
                'longitude' => -117.8740005493164,
                'accuracy' => 'ROOFTOP',
            ),
            145 => 
            array (
                'id' => 652,
                'breweryId' => 694,
                'latitude' => 13.699799537658691,
                'longitude' => -89.18319702148438,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            146 => 
            array (
                'id' => 653,
                'breweryId' => 696,
                'latitude' => 56.41740036010742,
                'longitude' => -3.4779000282287598,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            147 => 
            array (
                'id' => 654,
                'breweryId' => 697,
                'latitude' => 53.48630142211914,
                'longitude' => -6.168000221252441,
                'accuracy' => 'APPROXIMATE',
            ),
            148 => 
            array (
                'id' => 655,
                'breweryId' => 698,
                'latitude' => 40.46099853515625,
                'longitude' => -79.96530151367188,
                'accuracy' => 'ROOFTOP',
            ),
            149 => 
            array (
                'id' => 656,
                'breweryId' => 699,
                'latitude' => 39.68339920043945,
                'longitude' => -75.74669647216797,
                'accuracy' => 'ROOFTOP',
            ),
            150 => 
            array (
                'id' => 657,
                'breweryId' => 700,
                'latitude' => 39.744998931884766,
                'longitude' => -75.55609893798828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            151 => 
            array (
                'id' => 658,
                'breweryId' => 701,
                'latitude' => 37.986000061035156,
                'longitude' => -122.58399963378906,
                'accuracy' => 'ROOFTOP',
            ),
            152 => 
            array (
                'id' => 659,
                'breweryId' => 598,
                'latitude' => 34.395999908447266,
                'longitude' => -119.52100372314453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            153 => 
            array (
                'id' => 660,
                'breweryId' => 703,
                'latitude' => 56.490699768066406,
                'longitude' => -4.202600002288818,
                'accuracy' => 'APPROXIMATE',
            ),
            154 => 
            array (
                'id' => 661,
                'breweryId' => 704,
                'latitude' => 47.529998779296875,
                'longitude' => -122.03700256347656,
                'accuracy' => 'ROOFTOP',
            ),
            155 => 
            array (
                'id' => 662,
                'breweryId' => 705,
                'latitude' => 42.41450119018555,
                'longitude' => -76.53150177001953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            156 => 
            array (
                'id' => 663,
                'breweryId' => 706,
                'latitude' => 38.75630187988281,
                'longitude' => -120.67900085449219,
                'accuracy' => 'ROOFTOP',
            ),
            157 => 
            array (
                'id' => 664,
                'breweryId' => 707,
                'latitude' => 37.54410171508789,
                'longitude' => -121.98799896240234,
                'accuracy' => 'ROOFTOP',
            ),
            158 => 
            array (
                'id' => 665,
                'breweryId' => 708,
                'latitude' => 44.94490051269531,
                'longitude' => -91.39679718017578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            159 => 
            array (
                'id' => 666,
                'breweryId' => 709,
                'latitude' => 41.2327995300293,
                'longitude' => -96.0824966430664,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            160 => 
            array (
                'id' => 667,
                'breweryId' => 710,
                'latitude' => 45.00389862060547,
                'longitude' => -93.25019836425781,
                'accuracy' => 'ROOFTOP',
            ),
            161 => 
            array (
                'id' => 668,
                'breweryId' => 711,
                'latitude' => 39.37220001220703,
                'longitude' => -104.85600280761719,
                'accuracy' => 'APPROXIMATE',
            ),
            162 => 
            array (
                'id' => 669,
                'breweryId' => 712,
                'latitude' => 46.50149917602539,
                'longitude' => -87.67900085449219,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            163 => 
            array (
                'id' => 670,
                'breweryId' => 713,
                'latitude' => 54.66490173339844,
                'longitude' => -3.3633999824523926,
                'accuracy' => 'APPROXIMATE',
            ),
            164 => 
            array (
                'id' => 671,
                'breweryId' => 714,
                'latitude' => 53.57569885253906,
                'longitude' => 7.900300025939941,
                'accuracy' => 'APPROXIMATE',
            ),
            165 => 
            array (
                'id' => 672,
                'breweryId' => 715,
                'latitude' => 37.56650161743164,
                'longitude' => 126.97799682617188,
                'accuracy' => 'APPROXIMATE',
            ),
            166 => 
            array (
                'id' => 673,
                'breweryId' => 716,
                'latitude' => 40.554901123046875,
                'longitude' => -74.277099609375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            167 => 
            array (
                'id' => 674,
                'breweryId' => 717,
                'latitude' => 41.25400161743164,
                'longitude' => -95.99929809570312,
                'accuracy' => 'APPROXIMATE',
            ),
            168 => 
            array (
                'id' => 675,
                'breweryId' => 718,
                'latitude' => 40.17070007324219,
                'longitude' => -76.38379669189453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            169 => 
            array (
                'id' => 676,
                'breweryId' => 719,
                'latitude' => 42.3036994934082,
                'longitude' => -71.39659881591797,
                'accuracy' => 'ROOFTOP',
            ),
            170 => 
            array (
                'id' => 677,
                'breweryId' => 720,
                'latitude' => 42.372398376464844,
                'longitude' => -71.11930084228516,
                'accuracy' => 'ROOFTOP',
            ),
            171 => 
            array (
                'id' => 678,
                'breweryId' => 721,
                'latitude' => 39.74580001831055,
                'longitude' => -75.54669952392578,
                'accuracy' => 'APPROXIMATE',
            ),
            172 => 
            array (
                'id' => 679,
                'breweryId' => 722,
                'latitude' => 50.729801177978516,
                'longitude' => 4.507999897003174,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            173 => 
            array (
                'id' => 680,
                'breweryId' => 723,
                'latitude' => 42.337501525878906,
                'longitude' => -83.8895034790039,
                'accuracy' => 'ROOFTOP',
            ),
            174 => 
            array (
                'id' => 681,
                'breweryId' => 724,
                'latitude' => 39.95289993286133,
                'longitude' => -74.20099639892578,
                'accuracy' => 'APPROXIMATE',
            ),
            175 => 
            array (
                'id' => 682,
                'breweryId' => 725,
                'latitude' => 43.05189895629883,
                'longitude' => -89.47370147705078,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            176 => 
            array (
                'id' => 683,
                'breweryId' => 726,
                'latitude' => 33.95330047607422,
                'longitude' => -117.39600372314453,
                'accuracy' => 'APPROXIMATE',
            ),
            177 => 
            array (
                'id' => 684,
                'breweryId' => 727,
                'latitude' => 53.54119873046875,
                'longitude' => -2.1733999252319336,
                'accuracy' => 'APPROXIMATE',
            ),
            178 => 
            array (
                'id' => 685,
                'breweryId' => 728,
                'latitude' => 49.628299713134766,
                'longitude' => 11.549799919128418,
                'accuracy' => 'ROOFTOP',
            ),
            179 => 
            array (
                'id' => 686,
                'breweryId' => 729,
                'latitude' => 49.904300689697266,
                'longitude' => 10.852399826049805,
                'accuracy' => 'ROOFTOP',
            ),
            180 => 
            array (
                'id' => 687,
                'breweryId' => 730,
                'latitude' => 42.294898986816406,
                'longitude' => -85.57879638671875,
                'accuracy' => 'ROOFTOP',
            ),
            181 => 
            array (
                'id' => 688,
                'breweryId' => 731,
                'latitude' => 32.89690017700195,
                'longitude' => -117.20099639892578,
                'accuracy' => 'ROOFTOP',
            ),
            182 => 
            array (
                'id' => 689,
                'breweryId' => 732,
                'latitude' => 45.495601654052734,
                'longitude' => 15.533100128173828,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            183 => 
            array (
                'id' => 690,
                'breweryId' => 733,
                'latitude' => 49.89039993286133,
                'longitude' => 10.905599594116211,
                'accuracy' => 'ROOFTOP',
            ),
            184 => 
            array (
                'id' => 691,
                'breweryId' => 734,
                'latitude' => 44.52360153198242,
                'longitude' => -89.57460021972656,
                'accuracy' => 'APPROXIMATE',
            ),
            185 => 
            array (
                'id' => 692,
                'breweryId' => 736,
                'latitude' => 38.44049835205078,
                'longitude' => -122.71399688720703,
                'accuracy' => 'APPROXIMATE',
            ),
            186 => 
            array (
                'id' => 693,
                'breweryId' => 737,
                'latitude' => 38.031700134277344,
                'longitude' => -84.49510192871094,
                'accuracy' => 'APPROXIMATE',
            ),
            187 => 
            array (
                'id' => 694,
                'breweryId' => 738,
                'latitude' => -1.2833000421524048,
                'longitude' => 36.81669998168945,
                'accuracy' => 'APPROXIMATE',
            ),
            188 => 
            array (
                'id' => 695,
                'breweryId' => 739,
                'latitude' => 46.59579849243164,
                'longitude' => -112.0270004272461,
                'accuracy' => 'APPROXIMATE',
            ),
            189 => 
            array (
                'id' => 696,
                'breweryId' => 740,
                'latitude' => 51.06380081176758,
                'longitude' => -0.3269999921321869,
                'accuracy' => 'APPROXIMATE',
            ),
            190 => 
            array (
                'id' => 697,
                'breweryId' => 743,
                'latitude' => 50.9193000793457,
                'longitude' => 3.966599941253662,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            191 => 
            array (
                'id' => 698,
                'breweryId' => 744,
                'latitude' => 52.090999603271484,
                'longitude' => 14.650899887084961,
                'accuracy' => 'ROOFTOP',
            ),
            192 => 
            array (
                'id' => 699,
                'breweryId' => 745,
                'latitude' => 49.014400482177734,
                'longitude' => 12.074999809265137,
                'accuracy' => 'ROOFTOP',
            ),
            193 => 
            array (
                'id' => 700,
                'breweryId' => 746,
                'latitude' => 49.88909912109375,
                'longitude' => 10.88700008392334,
                'accuracy' => 'ROOFTOP',
            ),
            194 => 
            array (
                'id' => 701,
                'breweryId' => 747,
                'latitude' => 51.53139877319336,
                'longitude' => 6.741799831390381,
                'accuracy' => 'ROOFTOP',
            ),
            195 => 
            array (
                'id' => 702,
                'breweryId' => 748,
                'latitude' => 48.18259811401367,
                'longitude' => 11.25220012664795,
                'accuracy' => 'ROOFTOP',
            ),
            196 => 
            array (
                'id' => 703,
                'breweryId' => 749,
                'latitude' => 50.32160186767578,
                'longitude' => 7.58620023727417,
                'accuracy' => 'ROOFTOP',
            ),
            197 => 
            array (
                'id' => 704,
                'breweryId' => 750,
                'latitude' => 47.92620086669922,
                'longitude' => 9.42039966583252,
                'accuracy' => 'ROOFTOP',
            ),
            198 => 
            array (
                'id' => 705,
                'breweryId' => 751,
                'latitude' => 19.642000198364258,
                'longitude' => -155.99600219726562,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            199 => 
            array (
                'id' => 707,
                'breweryId' => 754,
                'latitude' => 41.03229904174805,
                'longitude' => -74.64070129394531,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            200 => 
            array (
                'id' => 708,
                'breweryId' => 755,
                'latitude' => 44.56169891357422,
                'longitude' => -72.59839630126953,
                'accuracy' => 'APPROXIMATE',
            ),
            201 => 
            array (
                'id' => 709,
                'breweryId' => 756,
                'latitude' => 42.527801513671875,
                'longitude' => -83.04720306396484,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            202 => 
            array (
                'id' => 710,
                'breweryId' => 757,
                'latitude' => 50.10599899291992,
                'longitude' => 11.444199562072754,
                'accuracy' => 'ROOFTOP',
            ),
            203 => 
            array (
                'id' => 711,
                'breweryId' => 758,
                'latitude' => 50.10770034790039,
                'longitude' => 11.45300006866455,
                'accuracy' => 'APPROXIMATE',
            ),
            204 => 
            array (
                'id' => 712,
                'breweryId' => 759,
                'latitude' => 32.84090042114258,
                'longitude' => -117.27400207519531,
                'accuracy' => 'ROOFTOP',
            ),
            205 => 
            array (
                'id' => 713,
                'breweryId' => 760,
                'latitude' => 33.85749816894531,
                'longitude' => -117.8759994506836,
                'accuracy' => 'APPROXIMATE',
            ),
            206 => 
            array (
                'id' => 714,
                'breweryId' => 761,
                'latitude' => 44.6598014831543,
                'longitude' => -63.599700927734375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            207 => 
            array (
                'id' => 715,
                'breweryId' => 762,
                'latitude' => 42.97779846191406,
                'longitude' => -81.24669647216797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            208 => 
            array (
                'id' => 716,
                'breweryId' => 763,
                'latitude' => 48.391700744628906,
                'longitude' => -122.49500274658203,
                'accuracy' => 'ROOFTOP',
            ),
            209 => 
            array (
                'id' => 717,
                'breweryId' => 764,
                'latitude' => 40.41939926147461,
                'longitude' => -86.88999938964844,
                'accuracy' => 'ROOFTOP',
            ),
            210 => 
            array (
                'id' => 718,
                'breweryId' => 765,
                'latitude' => 38.27239990234375,
                'longitude' => -122.66200256347656,
                'accuracy' => 'ROOFTOP',
            ),
            211 => 
            array (
                'id' => 719,
                'breweryId' => 766,
                'latitude' => 43.17060089111328,
                'longitude' => -89.93240356445312,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            212 => 
            array (
                'id' => 720,
                'breweryId' => 767,
                'latitude' => 44.282901763916016,
                'longitude' => -73.9813003540039,
                'accuracy' => 'ROOFTOP',
            ),
            213 => 
            array (
                'id' => 721,
                'breweryId' => 768,
                'latitude' => 46.76110076904297,
                'longitude' => -92.13189697265625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            214 => 
            array (
                'id' => 722,
                'breweryId' => 769,
                'latitude' => 43.0546989440918,
                'longitude' => -87.9052963256836,
                'accuracy' => 'ROOFTOP',
            ),
            215 => 
            array (
                'id' => 723,
                'breweryId' => 771,
                'latitude' => 40.043800354003906,
                'longitude' => -76.29840087890625,
                'accuracy' => 'ROOFTOP',
            ),
            216 => 
            array (
                'id' => 724,
                'breweryId' => 772,
                'latitude' => 54.822898864746094,
                'longitude' => -1.7457000017166138,
                'accuracy' => 'APPROXIMATE',
            ),
            217 => 
            array (
                'id' => 725,
                'breweryId' => 773,
                'latitude' => 48.013999938964844,
                'longitude' => -115.01100158691406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            218 => 
            array (
                'id' => 726,
                'breweryId' => 774,
                'latitude' => 40.32120132446289,
                'longitude' => -79.37950134277344,
                'accuracy' => 'APPROXIMATE',
            ),
            219 => 
            array (
                'id' => 727,
                'breweryId' => 775,
                'latitude' => 48.30030059814453,
                'longitude' => -116.53800201416016,
                'accuracy' => 'ROOFTOP',
            ),
            220 => 
            array (
                'id' => 728,
                'breweryId' => 776,
                'latitude' => 30.376399993896484,
                'longitude' => -89.44969940185547,
                'accuracy' => 'ROOFTOP',
            ),
            221 => 
            array (
                'id' => 729,
                'breweryId' => 777,
                'latitude' => 45.51810073852539,
                'longitude' => -73.56420135498047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            222 => 
            array (
                'id' => 730,
                'breweryId' => 778,
                'latitude' => 33.457698822021484,
                'longitude' => -117.58899688720703,
                'accuracy' => 'ROOFTOP',
            ),
            223 => 
            array (
                'id' => 731,
                'breweryId' => 779,
                'latitude' => 40.15869903564453,
                'longitude' => -105.11299896240234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            224 => 
            array (
                'id' => 732,
                'breweryId' => 780,
                'latitude' => 40.325599670410156,
                'longitude' => -75.92829895019531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            225 => 
            array (
                'id' => 733,
                'breweryId' => 781,
                'latitude' => 44.55339813232422,
                'longitude' => -88.09770202636719,
                'accuracy' => 'ROOFTOP',
            ),
            226 => 
            array (
                'id' => 734,
                'breweryId' => 782,
                'latitude' => 33.44839859008789,
                'longitude' => -112.0739974975586,
                'accuracy' => 'APPROXIMATE',
            ),
            227 => 
            array (
                'id' => 735,
                'breweryId' => 783,
                'latitude' => 46.59769821166992,
                'longitude' => -112.03700256347656,
                'accuracy' => 'ROOFTOP',
            ),
            228 => 
            array (
                'id' => 736,
                'breweryId' => 784,
                'latitude' => 33.71870040893555,
                'longitude' => -78.88310241699219,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            229 => 
            array (
                'id' => 737,
                'breweryId' => 785,
                'latitude' => 50.52080154418945,
                'longitude' => 8.81659984588623,
                'accuracy' => 'APPROXIMATE',
            ),
            230 => 
            array (
                'id' => 738,
                'breweryId' => 786,
                'latitude' => 50.964900970458984,
                'longitude' => 3.421999931335449,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            231 => 
            array (
                'id' => 739,
                'breweryId' => 787,
                'latitude' => 45.05649948120117,
                'longitude' => -92.82219696044922,
                'accuracy' => 'APPROXIMATE',
            ),
            232 => 
            array (
                'id' => 740,
                'breweryId' => 788,
                'latitude' => 48.43579864501953,
                'longitude' => -123.39600372314453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            233 => 
            array (
                'id' => 741,
                'breweryId' => 789,
                'latitude' => 45.77859878540039,
                'longitude' => -111.17900085449219,
                'accuracy' => 'APPROXIMATE',
            ),
            234 => 
            array (
                'id' => 742,
                'breweryId' => 790,
                'latitude' => -39.627498626708984,
                'longitude' => 176.85400390625,
                'accuracy' => 'ROOFTOP',
            ),
            235 => 
            array (
                'id' => 743,
                'breweryId' => 791,
                'latitude' => 38.754798889160156,
                'longitude' => -9.188300132751465,
                'accuracy' => 'APPROXIMATE',
            ),
            236 => 
            array (
                'id' => 744,
                'breweryId' => 792,
                'latitude' => 41.255699157714844,
                'longitude' => -75.8582992553711,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            237 => 
            array (
                'id' => 745,
                'breweryId' => 793,
                'latitude' => -33.86869812011719,
                'longitude' => 151.2169952392578,
                'accuracy' => 'APPROXIMATE',
            ),
            238 => 
            array (
                'id' => 746,
                'breweryId' => 794,
                'latitude' => 39.145599365234375,
                'longitude' => -84.4740982055664,
                'accuracy' => 'ROOFTOP',
            ),
            239 => 
            array (
                'id' => 747,
                'breweryId' => 795,
                'latitude' => 39.18360137939453,
                'longitude' => -96.57170104980469,
                'accuracy' => 'APPROXIMATE',
            ),
            240 => 
            array (
                'id' => 748,
                'breweryId' => 796,
                'latitude' => -32.05970001220703,
                'longitude' => 115.74500274658203,
                'accuracy' => 'ROOFTOP',
            ),
            241 => 
            array (
                'id' => 749,
                'breweryId' => 797,
                'latitude' => 30.254100799560547,
                'longitude' => -97.70549774169922,
                'accuracy' => 'ROOFTOP',
            ),
            242 => 
            array (
                'id' => 750,
                'breweryId' => 798,
                'latitude' => 45.917198181152344,
                'longitude' => -89.24430084228516,
                'accuracy' => 'APPROXIMATE',
            ),
            243 => 
            array (
                'id' => 751,
                'breweryId' => 799,
                'latitude' => 49.620601654052734,
                'longitude' => 14.383700370788574,
                'accuracy' => 'APPROXIMATE',
            ),
            244 => 
            array (
                'id' => 752,
                'breweryId' => 800,
                'latitude' => 44.851600646972656,
                'longitude' => -90.31649780273438,
                'accuracy' => 'APPROXIMATE',
            ),
            245 => 
            array (
                'id' => 753,
                'breweryId' => 801,
                'latitude' => 43.588199615478516,
                'longitude' => -72.65630340576172,
                'accuracy' => 'APPROXIMATE',
            ),
            246 => 
            array (
                'id' => 754,
                'breweryId' => 802,
                'latitude' => 40.7843017578125,
                'longitude' => -74.77999877929688,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            247 => 
            array (
                'id' => 755,
                'breweryId' => 803,
                'latitude' => 40.803199768066406,
                'longitude' => -124.16500091552734,
                'accuracy' => 'ROOFTOP',
            ),
            248 => 
            array (
                'id' => 756,
                'breweryId' => 805,
                'latitude' => 43.73789978027344,
                'longitude' => -79.57140350341797,
                'accuracy' => 'APPROXIMATE',
            ),
            249 => 
            array (
                'id' => 757,
                'breweryId' => 806,
                'latitude' => 47.364200592041016,
                'longitude' => 8.524499893188477,
                'accuracy' => 'ROOFTOP',
            ),
            250 => 
            array (
                'id' => 758,
                'breweryId' => 807,
                'latitude' => 56.1072998046875,
                'longitude' => -3.7527999877929688,
                'accuracy' => 'APPROXIMATE',
            ),
            251 => 
            array (
                'id' => 759,
                'breweryId' => 808,
                'latitude' => 41.06769943237305,
                'longitude' => -85.15239715576172,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            252 => 
            array (
                'id' => 760,
                'breweryId' => 809,
                'latitude' => 41.31449890136719,
                'longitude' => -81.83570098876953,
                'accuracy' => 'APPROXIMATE',
            ),
            253 => 
            array (
                'id' => 761,
                'breweryId' => 810,
                'latitude' => 40.87900161743164,
                'longitude' => -123.99299621582031,
                'accuracy' => 'ROOFTOP',
            ),
            254 => 
            array (
                'id' => 762,
                'breweryId' => 811,
                'latitude' => 40.87860107421875,
                'longitude' => -123.99199676513672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            255 => 
            array (
                'id' => 763,
                'breweryId' => 812,
                'latitude' => 44.42839813232422,
                'longitude' => -73.21309661865234,
                'accuracy' => 'ROOFTOP',
            ),
            256 => 
            array (
                'id' => 764,
                'breweryId' => 813,
                'latitude' => 37.770198822021484,
                'longitude' => -122.44499969482422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            257 => 
            array (
                'id' => 765,
                'breweryId' => 814,
                'latitude' => 45.500099182128906,
                'longitude' => -122.43099975585938,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            258 => 
            array (
                'id' => 766,
                'breweryId' => 815,
                'latitude' => 37.542999267578125,
                'longitude' => -77.46910095214844,
                'accuracy' => 'APPROXIMATE',
            ),
            259 => 
            array (
                'id' => 767,
                'breweryId' => 816,
                'latitude' => 33.88349914550781,
                'longitude' => -117.56500244140625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            260 => 
            array (
                'id' => 768,
                'breweryId' => 817,
                'latitude' => 32.803001403808594,
                'longitude' => -96.7698974609375,
                'accuracy' => 'APPROXIMATE',
            ),
            261 => 
            array (
                'id' => 769,
                'breweryId' => 818,
                'latitude' => 36.175498962402344,
                'longitude' => -115.1449966430664,
                'accuracy' => 'ROOFTOP',
            ),
            262 => 
            array (
                'id' => 770,
                'breweryId' => 819,
                'latitude' => 49.892799377441406,
                'longitude' => 10.913100242614746,
                'accuracy' => 'ROOFTOP',
            ),
            263 => 
            array (
                'id' => 771,
                'breweryId' => 820,
                'latitude' => -33.88669967651367,
                'longitude' => 151.1739959716797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            264 => 
            array (
                'id' => 772,
                'breweryId' => 821,
                'latitude' => 43.21670150756836,
                'longitude' => -87.92400360107422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            265 => 
            array (
                'id' => 773,
                'breweryId' => 822,
                'latitude' => 37.648399353027344,
                'longitude' => -118.98300170898438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            266 => 
            array (
                'id' => 774,
                'breweryId' => 823,
                'latitude' => 40.02360153198242,
                'longitude' => -75.22019958496094,
                'accuracy' => 'ROOFTOP',
            ),
            267 => 
            array (
                'id' => 775,
                'breweryId' => 824,
                'latitude' => 33.8843994140625,
                'longitude' => -118.41100311279297,
                'accuracy' => 'ROOFTOP',
            ),
            268 => 
            array (
                'id' => 776,
                'breweryId' => 825,
                'latitude' => 35.09280014038086,
                'longitude' => -106.64700317382812,
                'accuracy' => 'ROOFTOP',
            ),
            269 => 
            array (
                'id' => 777,
                'breweryId' => 826,
                'latitude' => 30.3617000579834,
                'longitude' => -81.69660186767578,
                'accuracy' => 'APPROXIMATE',
            ),
            270 => 
            array (
                'id' => 778,
                'breweryId' => 827,
                'latitude' => 37.947898864746094,
                'longitude' => -122.51100158691406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            271 => 
            array (
                'id' => 779,
                'breweryId' => 828,
                'latitude' => 49.205501556396484,
                'longitude' => -122.97799682617188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            272 => 
            array (
                'id' => 780,
                'breweryId' => 829,
                'latitude' => 47.663700103759766,
                'longitude' => -122.37699890136719,
                'accuracy' => 'ROOFTOP',
            ),
            273 => 
            array (
                'id' => 781,
                'breweryId' => 830,
                'latitude' => 46.54309844970703,
                'longitude' => -87.39289855957031,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            274 => 
            array (
                'id' => 782,
                'breweryId' => 831,
                'latitude' => 36.152000427246094,
                'longitude' => -95.9646987915039,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            275 => 
            array (
                'id' => 783,
                'breweryId' => 832,
                'latitude' => 51.317501068115234,
                'longitude' => 9.479299545288086,
                'accuracy' => 'ROOFTOP',
            ),
            276 => 
            array (
                'id' => 784,
                'breweryId' => 833,
                'latitude' => 40.42340087890625,
                'longitude' => -78.43389892578125,
                'accuracy' => 'APPROXIMATE',
            ),
            277 => 
            array (
                'id' => 785,
                'breweryId' => 834,
                'latitude' => 35.070701599121094,
                'longitude' => -78.95449829101562,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            278 => 
            array (
                'id' => 786,
                'breweryId' => 835,
                'latitude' => -32.02320098876953,
                'longitude' => 115.75399780273438,
                'accuracy' => 'ROOFTOP',
            ),
            279 => 
            array (
                'id' => 787,
                'breweryId' => 836,
                'latitude' => 20.97209930419922,
                'longitude' => -156.677001953125,
                'accuracy' => 'ROOFTOP',
            ),
            280 => 
            array (
                'id' => 788,
                'breweryId' => 837,
                'latitude' => 41.6431999206543,
                'longitude' => -83.53839874267578,
                'accuracy' => 'ROOFTOP',
            ),
            281 => 
            array (
                'id' => 789,
                'breweryId' => 838,
                'latitude' => 40.19889831542969,
                'longitude' => -98.06729888916016,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            282 => 
            array (
                'id' => 790,
                'breweryId' => 839,
                'latitude' => 39.05339813232422,
                'longitude' => -94.59190368652344,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            283 => 
            array (
                'id' => 791,
                'breweryId' => 840,
                'latitude' => 30.418100357055664,
                'longitude' => -87.20240020751953,
                'accuracy' => 'ROOFTOP',
            ),
            284 => 
            array (
                'id' => 792,
                'breweryId' => 841,
                'latitude' => 39.86579895019531,
                'longitude' => -75.54419708251953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            285 => 
            array (
                'id' => 793,
                'breweryId' => 842,
                'latitude' => 47.87739944458008,
                'longitude' => -122.21099853515625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            286 => 
            array (
                'id' => 794,
                'breweryId' => 843,
                'latitude' => 51.79750061035156,
                'longitude' => -0.08060000091791153,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            287 => 
            array (
                'id' => 795,
                'breweryId' => 844,
                'latitude' => 51.489898681640625,
                'longitude' => 0.03799999877810478,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            288 => 
            array (
                'id' => 796,
                'breweryId' => 845,
                'latitude' => 47.63079833984375,
                'longitude' => 9.888899803161621,
                'accuracy' => 'ROOFTOP',
            ),
            289 => 
            array (
                'id' => 797,
                'breweryId' => 846,
                'latitude' => 19.70599937438965,
                'longitude' => -155.06900024414062,
                'accuracy' => 'ROOFTOP',
            ),
            290 => 
            array (
                'id' => 798,
                'breweryId' => 847,
                'latitude' => 38.9734001159668,
                'longitude' => -123.11599731445312,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            291 => 
            array (
                'id' => 799,
                'breweryId' => 848,
                'latitude' => 43.083099365234375,
                'longitude' => -73.78459930419922,
                'accuracy' => 'APPROXIMATE',
            ),
            292 => 
            array (
                'id' => 800,
                'breweryId' => 849,
                'latitude' => 39.132598876953125,
                'longitude' => -123.20099639892578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            293 => 
            array (
                'id' => 801,
                'breweryId' => 850,
                'latitude' => 42.67279815673828,
                'longitude' => -70.84400177001953,
                'accuracy' => 'ROOFTOP',
            ),
            294 => 
            array (
                'id' => 802,
                'breweryId' => 851,
                'latitude' => 41.974998474121094,
                'longitude' => -87.67400360107422,
                'accuracy' => 'ROOFTOP',
            ),
            295 => 
            array (
                'id' => 803,
                'breweryId' => 852,
                'latitude' => 42.22489929199219,
                'longitude' => -121.78199768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            296 => 
            array (
                'id' => 804,
                'breweryId' => 853,
                'latitude' => 42.661598205566406,
                'longitude' => -84.1946029663086,
                'accuracy' => 'ROOFTOP',
            ),
            297 => 
            array (
                'id' => 805,
                'breweryId' => 854,
                'latitude' => 42.287200927734375,
                'longitude' => -87.95379638671875,
                'accuracy' => 'ROOFTOP',
            ),
            298 => 
            array (
                'id' => 806,
                'breweryId' => 855,
                'latitude' => 43.03889846801758,
                'longitude' => -87.90650177001953,
                'accuracy' => 'APPROXIMATE',
            ),
            299 => 
            array (
                'id' => 807,
                'breweryId' => 856,
                'latitude' => 51.10279846191406,
                'longitude' => 4.726900100708008,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            300 => 
            array (
                'id' => 808,
                'breweryId' => 857,
                'latitude' => 43.05080032348633,
                'longitude' => -76.16169738769531,
                'accuracy' => 'ROOFTOP',
            ),
            301 => 
            array (
                'id' => 809,
                'breweryId' => 858,
                'latitude' => 61.147300720214844,
                'longitude' => -149.843994140625,
                'accuracy' => 'ROOFTOP',
            ),
            302 => 
            array (
                'id' => 810,
                'breweryId' => 860,
                'latitude' => 35.29999923706055,
                'longitude' => -106.5510025024414,
                'accuracy' => 'APPROXIMATE',
            ),
            303 => 
            array (
                'id' => 811,
                'breweryId' => 861,
                'latitude' => 46.069698333740234,
                'longitude' => -118.33599853515625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            304 => 
            array (
                'id' => 812,
                'breweryId' => 862,
                'latitude' => 39.61199951171875,
                'longitude' => -105.01899719238281,
                'accuracy' => 'ROOFTOP',
            ),
            305 => 
            array (
                'id' => 813,
                'breweryId' => 863,
                'latitude' => 43.044498443603516,
                'longitude' => -87.96260070800781,
                'accuracy' => 'ROOFTOP',
            ),
            306 => 
            array (
                'id' => 814,
                'breweryId' => 864,
                'latitude' => 42.08549880981445,
                'longitude' => -88.14109802246094,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            307 => 
            array (
                'id' => 815,
                'breweryId' => 865,
                'latitude' => 41.79719924926758,
                'longitude' => -91.86519622802734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            308 => 
            array (
                'id' => 816,
                'breweryId' => 866,
                'latitude' => 42.99449920654297,
                'longitude' => -71.46739959716797,
                'accuracy' => 'ROOFTOP',
            ),
            309 => 
            array (
                'id' => 817,
                'breweryId' => 867,
                'latitude' => 43.03340148925781,
                'longitude' => -87.9093017578125,
                'accuracy' => 'ROOFTOP',
            ),
            310 => 
            array (
                'id' => 818,
                'breweryId' => 868,
                'latitude' => 42.600101470947266,
                'longitude' => -89.64219665527344,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            311 => 
            array (
                'id' => 819,
                'breweryId' => 869,
                'latitude' => 44.973201751708984,
                'longitude' => -93.2479019165039,
                'accuracy' => 'ROOFTOP',
            ),
            312 => 
            array (
                'id' => 820,
                'breweryId' => 870,
                'latitude' => 44.94419860839844,
                'longitude' => -93.08609771728516,
                'accuracy' => 'APPROXIMATE',
            ),
            313 => 
            array (
                'id' => 821,
                'breweryId' => 871,
                'latitude' => 45.87220001220703,
                'longitude' => -89.70970153808594,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            314 => 
            array (
                'id' => 822,
                'breweryId' => 872,
                'latitude' => 41.69309997558594,
                'longitude' => -86.18180084228516,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            315 => 
            array (
                'id' => 823,
                'breweryId' => 873,
                'latitude' => 49.132301330566406,
                'longitude' => -122.34300231933594,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            316 => 
            array (
                'id' => 824,
                'breweryId' => 874,
                'latitude' => 40.6870002746582,
                'longitude' => -73.70800018310547,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            317 => 
            array (
                'id' => 825,
                'breweryId' => 875,
                'latitude' => 38.56570053100586,
                'longitude' => -109.55000305175781,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            318 => 
            array (
                'id' => 826,
                'breweryId' => 876,
                'latitude' => 35.215599060058594,
                'longitude' => -111.58999633789062,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            319 => 
            array (
                'id' => 827,
                'breweryId' => 877,
                'latitude' => 47.41230010986328,
                'longitude' => 9.74429988861084,
                'accuracy' => 'ROOFTOP',
            ),
            320 => 
            array (
                'id' => 828,
                'breweryId' => 878,
                'latitude' => 43.67060089111328,
                'longitude' => -79.38240051269531,
                'accuracy' => 'ROOFTOP',
            ),
            321 => 
            array (
                'id' => 829,
                'breweryId' => 879,
                'latitude' => 45.78219985961914,
                'longitude' => -108.50599670410156,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            322 => 
            array (
                'id' => 830,
                'breweryId' => 880,
                'latitude' => 36.12860107421875,
                'longitude' => -115.1709976196289,
                'accuracy' => 'APPROXIMATE',
            ),
            323 => 
            array (
                'id' => 831,
                'breweryId' => 881,
                'latitude' => -42.45050048828125,
                'longitude' => 171.20700073242188,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            324 => 
            array (
                'id' => 832,
                'breweryId' => 882,
                'latitude' => 32.08100128173828,
                'longitude' => -81.09149932861328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            325 => 
            array (
                'id' => 833,
                'breweryId' => 883,
                'latitude' => 38.49800109863281,
                'longitude' => -122.77999877929688,
                'accuracy' => 'APPROXIMATE',
            ),
            326 => 
            array (
                'id' => 834,
                'breweryId' => 884,
                'latitude' => 53.786399841308594,
                'longitude' => -2.269399881362915,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            327 => 
            array (
                'id' => 835,
                'breweryId' => 885,
                'latitude' => 61.19020080566406,
                'longitude' => -149.86900329589844,
                'accuracy' => 'ROOFTOP',
            ),
            328 => 
            array (
                'id' => 836,
                'breweryId' => 886,
                'latitude' => 45.25669860839844,
                'longitude' => -66.09600067138672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            329 => 
            array (
                'id' => 837,
                'breweryId' => 887,
                'latitude' => 45.2578010559082,
                'longitude' => -66.09839630126953,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            330 => 
            array (
                'id' => 838,
                'breweryId' => 888,
                'latitude' => 43.5906982421875,
                'longitude' => -89.79389953613281,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            331 => 
            array (
                'id' => 839,
                'breweryId' => 889,
                'latitude' => 55.016700744628906,
                'longitude' => -1.4924999475479126,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            332 => 
            array (
                'id' => 840,
                'breweryId' => 890,
                'latitude' => 51.670101165771484,
                'longitude' => -1.284999966621399,
                'accuracy' => 'APPROXIMATE',
            ),
            333 => 
            array (
                'id' => 841,
                'breweryId' => 891,
                'latitude' => 40.01900100708008,
                'longitude' => -105.2750015258789,
                'accuracy' => 'ROOFTOP',
            ),
            334 => 
            array (
                'id' => 842,
                'breweryId' => 892,
                'latitude' => 38.09410095214844,
                'longitude' => -122.55699920654297,
                'accuracy' => 'ROOFTOP',
            ),
            335 => 
            array (
                'id' => 843,
                'breweryId' => 893,
                'latitude' => 38.107398986816406,
                'longitude' => -122.56999969482422,
                'accuracy' => 'APPROXIMATE',
            ),
            336 => 
            array (
                'id' => 844,
                'breweryId' => 894,
                'latitude' => 34.46860122680664,
                'longitude' => -114.34100341796875,
                'accuracy' => 'ROOFTOP',
            ),
            337 => 
            array (
                'id' => 845,
                'breweryId' => 895,
                'latitude' => 40.58430099487305,
                'longitude' => -98.39119720458984,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            338 => 
            array (
                'id' => 846,
                'breweryId' => 896,
                'latitude' => -40.76580047607422,
                'longitude' => 172.7050018310547,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            339 => 
            array (
                'id' => 847,
                'breweryId' => 897,
                'latitude' => 16.77790069580078,
                'longitude' => 96.16790008544922,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            340 => 
            array (
                'id' => 848,
                'breweryId' => 899,
                'latitude' => 40.39780044555664,
                'longitude' => -105.07499694824219,
                'accuracy' => 'APPROXIMATE',
            ),
            341 => 
            array (
                'id' => 849,
                'breweryId' => 900,
                'latitude' => -22.558900833129883,
                'longitude' => 17.082500457763672,
                'accuracy' => 'APPROXIMATE',
            ),
            342 => 
            array (
                'id' => 850,
                'breweryId' => 901,
                'latitude' => 41.1338996887207,
                'longitude' => -96.03070068359375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            343 => 
            array (
                'id' => 851,
                'breweryId' => 902,
                'latitude' => 49.488399505615234,
                'longitude' => -117.29000091552734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            344 => 
            array (
                'id' => 852,
                'breweryId' => 903,
                'latitude' => 52.08100128173828,
                'longitude' => 0.6559000015258789,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            345 => 
            array (
                'id' => 853,
                'breweryId' => 904,
                'latitude' => 38.32809829711914,
                'longitude' => -85.81710052490234,
                'accuracy' => 'ROOFTOP',
            ),
            346 => 
            array (
                'id' => 854,
                'breweryId' => 905,
                'latitude' => 40.592899322509766,
                'longitude' => -105.06999969482422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            347 => 
            array (
                'id' => 855,
                'breweryId' => 906,
                'latitude' => 42.358699798583984,
                'longitude' => -71.05740356445312,
                'accuracy' => 'APPROXIMATE',
            ),
            348 => 
            array (
                'id' => 856,
                'breweryId' => 907,
                'latitude' => 42.817100524902344,
                'longitude' => -89.63059997558594,
                'accuracy' => 'ROOFTOP',
            ),
            349 => 
            array (
                'id' => 857,
                'breweryId' => 908,
                'latitude' => 42.790000915527344,
                'longitude' => -86.1041030883789,
                'accuracy' => 'ROOFTOP',
            ),
            350 => 
            array (
                'id' => 858,
                'breweryId' => 909,
                'latitude' => 33.90890121459961,
                'longitude' => -84.30560302734375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            351 => 
            array (
                'id' => 859,
                'breweryId' => 910,
                'latitude' => 40.185699462890625,
                'longitude' => -75.45159912109375,
                'accuracy' => 'APPROXIMATE',
            ),
            352 => 
            array (
                'id' => 860,
                'breweryId' => 912,
                'latitude' => 43.089298248291016,
                'longitude' => -79.11000061035156,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            353 => 
            array (
                'id' => 861,
                'breweryId' => 913,
                'latitude' => 45.92219924926758,
                'longitude' => -88.25180053710938,
                'accuracy' => 'APPROXIMATE',
            ),
            354 => 
            array (
                'id' => 862,
                'breweryId' => 915,
                'latitude' => 44.05690002441406,
                'longitude' => -123.11000061035156,
                'accuracy' => 'ROOFTOP',
            ),
            355 => 
            array (
                'id' => 863,
                'breweryId' => 916,
                'latitude' => 39.950199127197266,
                'longitude' => -75.1666030883789,
                'accuracy' => 'ROOFTOP',
            ),
            356 => 
            array (
                'id' => 864,
                'breweryId' => 917,
                'latitude' => 45.52349853515625,
                'longitude' => -122.6760025024414,
                'accuracy' => 'APPROXIMATE',
            ),
            357 => 
            array (
                'id' => 865,
                'breweryId' => 918,
                'latitude' => 58.536598205566406,
                'longitude' => 15.037300109863281,
                'accuracy' => 'APPROXIMATE',
            ),
            358 => 
            array (
                'id' => 866,
                'breweryId' => 919,
                'latitude' => 39.44660186767578,
                'longitude' => -123.80599975585938,
                'accuracy' => 'ROOFTOP',
            ),
            359 => 
            array (
                'id' => 867,
                'breweryId' => 920,
                'latitude' => 41.06380081176758,
                'longitude' => -80.05560302734375,
                'accuracy' => 'ROOFTOP',
            ),
            360 => 
            array (
                'id' => 868,
                'breweryId' => 921,
                'latitude' => 47.68149948120117,
                'longitude' => -122.20899963378906,
                'accuracy' => 'APPROXIMATE',
            ),
            361 => 
            array (
                'id' => 869,
                'breweryId' => 922,
                'latitude' => 44.7775993347168,
                'longitude' => -91.44329833984375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            362 => 
            array (
                'id' => 870,
                'breweryId' => 924,
                'latitude' => 38.80580139160156,
                'longitude' => -90.7531967163086,
                'accuracy' => 'ROOFTOP',
            ),
            363 => 
            array (
                'id' => 871,
                'breweryId' => 925,
                'latitude' => 44.94580078125,
                'longitude' => -93.16699981689453,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            364 => 
            array (
                'id' => 872,
                'breweryId' => 926,
                'latitude' => 42.088401794433594,
                'longitude' => -87.98059844970703,
                'accuracy' => 'APPROXIMATE',
            ),
            365 => 
            array (
                'id' => 873,
                'breweryId' => 928,
                'latitude' => 45.55390167236328,
                'longitude' => -94.17030334472656,
                'accuracy' => 'APPROXIMATE',
            ),
            366 => 
            array (
                'id' => 874,
                'breweryId' => 929,
                'latitude' => 34.8661003112793,
                'longitude' => -111.7959976196289,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            367 => 
            array (
                'id' => 875,
                'breweryId' => 930,
                'latitude' => 39.6150016784668,
                'longitude' => -86.09010314941406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            368 => 
            array (
                'id' => 876,
                'breweryId' => 931,
                'latitude' => 52.575801849365234,
                'longitude' => -0.24799999594688416,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            369 => 
            array (
                'id' => 877,
                'breweryId' => 932,
                'latitude' => 40.01499938964844,
                'longitude' => -105.27100372314453,
                'accuracy' => 'APPROXIMATE',
            ),
            370 => 
            array (
                'id' => 878,
                'breweryId' => 933,
                'latitude' => 40.01499938964844,
                'longitude' => -105.27100372314453,
                'accuracy' => 'APPROXIMATE',
            ),
            371 => 
            array (
                'id' => 879,
                'breweryId' => 934,
                'latitude' => 43.111698150634766,
                'longitude' => -88.49929809570312,
                'accuracy' => 'APPROXIMATE',
            ),
            372 => 
            array (
                'id' => 880,
                'breweryId' => 935,
                'latitude' => 40.58940124511719,
                'longitude' => -105.06300354003906,
                'accuracy' => 'ROOFTOP',
            ),
            373 => 
            array (
                'id' => 881,
                'breweryId' => 936,
                'latitude' => 33.20289993286133,
                'longitude' => -117.25499725341797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            374 => 
            array (
                'id' => 882,
                'breweryId' => 937,
                'latitude' => 41.18280029296875,
                'longitude' => -80.7654037475586,
                'accuracy' => 'APPROXIMATE',
            ),
            375 => 
            array (
                'id' => 883,
                'breweryId' => 938,
                'latitude' => 50.26129913330078,
                'longitude' => -119.2770004272461,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            376 => 
            array (
                'id' => 884,
                'breweryId' => 939,
                'latitude' => 30.27669906616211,
                'longitude' => -97.74629974365234,
                'accuracy' => 'ROOFTOP',
            ),
            377 => 
            array (
                'id' => 885,
                'breweryId' => 940,
                'latitude' => 39.15399932861328,
                'longitude' => -75.4884033203125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            378 => 
            array (
                'id' => 886,
                'breweryId' => 941,
                'latitude' => 42.1682014465332,
                'longitude' => -85.84970092773438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            379 => 
            array (
                'id' => 887,
                'breweryId' => 942,
                'latitude' => 42.02479934692383,
                'longitude' => -93.61470031738281,
                'accuracy' => 'ROOFTOP',
            ),
            380 => 
            array (
                'id' => 888,
                'breweryId' => 943,
                'latitude' => 42.29359817504883,
                'longitude' => -85.57779693603516,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            381 => 
            array (
                'id' => 889,
                'breweryId' => 944,
                'latitude' => 39.04719924926758,
                'longitude' => -84.55989837646484,
                'accuracy' => 'APPROXIMATE',
            ),
            382 => 
            array (
                'id' => 890,
                'breweryId' => 945,
                'latitude' => 32.715301513671875,
                'longitude' => -117.15699768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            383 => 
            array (
                'id' => 891,
                'breweryId' => 946,
                'latitude' => 42.186500549316406,
                'longitude' => -88.18350219726562,
                'accuracy' => 'ROOFTOP',
            ),
            384 => 
            array (
                'id' => 892,
                'breweryId' => 947,
                'latitude' => 43.03889846801758,
                'longitude' => -87.90650177001953,
                'accuracy' => 'APPROXIMATE',
            ),
            385 => 
            array (
                'id' => 893,
                'breweryId' => 948,
                'latitude' => 48.75960159301758,
                'longitude' => -122.48799896240234,
                'accuracy' => 'APPROXIMATE',
            ),
            386 => 
            array (
                'id' => 894,
                'breweryId' => 949,
                'latitude' => 44.63650131225586,
                'longitude' => -123.10600280761719,
                'accuracy' => 'APPROXIMATE',
            ),
            387 => 
            array (
                'id' => 895,
                'breweryId' => 950,
                'latitude' => 44.56129837036133,
                'longitude' => -123.26100158691406,
                'accuracy' => 'ROOFTOP',
            ),
            388 => 
            array (
                'id' => 896,
                'breweryId' => 952,
                'latitude' => 40.35319900512695,
                'longitude' => -74.07469940185547,
                'accuracy' => 'ROOFTOP',
            ),
            389 => 
            array (
                'id' => 897,
                'breweryId' => 953,
                'latitude' => 59.069698333740234,
                'longitude' => -3.313499927520752,
                'accuracy' => 'APPROXIMATE',
            ),
            390 => 
            array (
                'id' => 898,
                'breweryId' => 954,
                'latitude' => 28.526500701904297,
                'longitude' => -81.38269805908203,
                'accuracy' => 'ROOFTOP',
            ),
            391 => 
            array (
                'id' => 899,
                'breweryId' => 955,
                'latitude' => 44.42839813232422,
                'longitude' => -73.21309661865234,
                'accuracy' => 'ROOFTOP',
            ),
            392 => 
            array (
                'id' => 900,
                'breweryId' => 956,
                'latitude' => 40.22460174560547,
                'longitude' => -105.26799774169922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            393 => 
            array (
                'id' => 901,
                'breweryId' => 957,
                'latitude' => 55.75579833984375,
                'longitude' => 37.61759948730469,
                'accuracy' => 'APPROXIMATE',
            ),
            394 => 
            array (
                'id' => 902,
                'breweryId' => 958,
                'latitude' => 48.21329879760742,
                'longitude' => 16.322900772094727,
                'accuracy' => 'ROOFTOP',
            ),
            395 => 
            array (
                'id' => 903,
                'breweryId' => 959,
                'latitude' => 44.01969909667969,
                'longitude' => -73.16929626464844,
                'accuracy' => 'ROOFTOP',
            ),
            396 => 
            array (
                'id' => 904,
                'breweryId' => 960,
                'latitude' => 40.80979919433594,
                'longitude' => -77.91010284423828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            397 => 
            array (
                'id' => 905,
                'breweryId' => 961,
                'latitude' => 60.38100051879883,
                'longitude' => 25.110200881958008,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            398 => 
            array (
                'id' => 906,
                'breweryId' => 962,
                'latitude' => 41.147499084472656,
                'longitude' => -85.1167984008789,
                'accuracy' => 'APPROXIMATE',
            ),
            399 => 
            array (
                'id' => 907,
                'breweryId' => 963,
                'latitude' => 29.43000030517578,
                'longitude' => -98.48999786376953,
                'accuracy' => 'APPROXIMATE',
            ),
            400 => 
            array (
                'id' => 908,
                'breweryId' => 964,
                'latitude' => 32.79779815673828,
                'longitude' => -117.23999786376953,
                'accuracy' => 'APPROXIMATE',
            ),
            401 => 
            array (
                'id' => 909,
                'breweryId' => 965,
                'latitude' => 37.80160140991211,
                'longitude' => -122.27400207519531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            402 => 
            array (
                'id' => 910,
                'breweryId' => 966,
                'latitude' => 47.51430130004883,
                'longitude' => -122.35299682617188,
                'accuracy' => 'ROOFTOP',
            ),
            403 => 
            array (
                'id' => 911,
                'breweryId' => 967,
                'latitude' => 50.99530029296875,
                'longitude' => 4.2835001945495605,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            404 => 
            array (
                'id' => 912,
                'breweryId' => 968,
                'latitude' => 32.801700592041016,
                'longitude' => -79.94550323486328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            405 => 
            array (
                'id' => 913,
                'breweryId' => 969,
                'latitude' => 43.14670181274414,
                'longitude' => -75.17790222167969,
                'accuracy' => 'APPROXIMATE',
            ),
            406 => 
            array (
                'id' => 914,
                'breweryId' => 970,
                'latitude' => 42.20119857788086,
                'longitude' => -72.61039733886719,
                'accuracy' => 'ROOFTOP',
            ),
            407 => 
            array (
                'id' => 915,
                'breweryId' => 971,
                'latitude' => 40.49599838256836,
                'longitude' => -111.41999816894531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            408 => 
            array (
                'id' => 916,
                'breweryId' => 972,
                'latitude' => 48.13909912109375,
                'longitude' => 11.5802001953125,
                'accuracy' => 'APPROXIMATE',
            ),
            409 => 
            array (
                'id' => 917,
                'breweryId' => 973,
                'latitude' => 43.83440017700195,
                'longitude' => -91.23619842529297,
                'accuracy' => 'ROOFTOP',
            ),
            410 => 
            array (
                'id' => 918,
                'breweryId' => 974,
                'latitude' => 45.2151985168457,
                'longitude' => -123.97000122070312,
                'accuracy' => 'ROOFTOP',
            ),
            411 => 
            array (
                'id' => 919,
                'breweryId' => 975,
                'latitude' => 40.45690155029297,
                'longitude' => -79.99150085449219,
                'accuracy' => 'ROOFTOP',
            ),
            412 => 
            array (
                'id' => 920,
                'breweryId' => 976,
                'latitude' => 42.83679962158203,
                'longitude' => -71.66259765625,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            413 => 
            array (
                'id' => 921,
                'breweryId' => 977,
                'latitude' => 40.45690155029297,
                'longitude' => -79.99150085449219,
                'accuracy' => 'ROOFTOP',
            ),
            414 => 
            array (
                'id' => 922,
                'breweryId' => 978,
                'latitude' => 29.576099395751953,
                'longitude' => -98.47720336914062,
                'accuracy' => 'ROOFTOP',
            ),
            415 => 
            array (
                'id' => 923,
                'breweryId' => 979,
                'latitude' => 34.92509841918945,
                'longitude' => -95.72530364990234,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            416 => 
            array (
                'id' => 924,
                'breweryId' => 980,
                'latitude' => 33.917598724365234,
                'longitude' => -117.26000213623047,
                'accuracy' => 'ROOFTOP',
            ),
            417 => 
            array (
                'id' => 925,
                'breweryId' => 981,
                'latitude' => 39.98270034790039,
                'longitude' => -75.12750244140625,
                'accuracy' => 'ROOFTOP',
            ),
            418 => 
            array (
                'id' => 926,
                'breweryId' => 982,
                'latitude' => -20.273799896240234,
                'longitude' => 57.497100830078125,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            419 => 
            array (
                'id' => 927,
                'breweryId' => 983,
                'latitude' => 41.910400390625,
                'longitude' => -87.67610168457031,
                'accuracy' => 'ROOFTOP',
            ),
            420 => 
            array (
                'id' => 928,
                'breweryId' => 984,
                'latitude' => 47.60810089111328,
                'longitude' => -122.33999633789062,
                'accuracy' => 'ROOFTOP',
            ),
            421 => 
            array (
                'id' => 929,
                'breweryId' => 985,
                'latitude' => 35.131500244140625,
                'longitude' => -79.42949676513672,
                'accuracy' => 'APPROXIMATE',
            ),
            422 => 
            array (
                'id' => 930,
                'breweryId' => 986,
                'latitude' => 33.72679901123047,
                'longitude' => -111.85299682617188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            423 => 
            array (
                'id' => 931,
                'breweryId' => 987,
                'latitude' => 39.736900329589844,
                'longitude' => -104.99099731445312,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            424 => 
            array (
                'id' => 932,
                'breweryId' => 988,
                'latitude' => 42.00379943847656,
                'longitude' => 21.452199935913086,
                'accuracy' => 'APPROXIMATE',
            ),
            425 => 
            array (
                'id' => 933,
                'breweryId' => 990,
                'latitude' => 50.20940017700195,
                'longitude' => 15.832599639892578,
                'accuracy' => 'APPROXIMATE',
            ),
            426 => 
            array (
                'id' => 934,
                'breweryId' => 993,
                'latitude' => 50.035499572753906,
                'longitude' => 15.76200008392334,
                'accuracy' => 'ROOFTOP',
            ),
            427 => 
            array (
                'id' => 935,
                'breweryId' => 994,
                'latitude' => 50.087799072265625,
                'longitude' => 14.420499801635742,
                'accuracy' => 'APPROXIMATE',
            ),
            428 => 
            array (
                'id' => 936,
                'breweryId' => 995,
                'latitude' => 49.19110107421875,
                'longitude' => 16.591800689697266,
                'accuracy' => 'ROOFTOP',
            ),
            429 => 
            array (
                'id' => 937,
                'breweryId' => 996,
                'latitude' => 47.88090133666992,
                'longitude' => 18.197200775146484,
                'accuracy' => 'ROOFTOP',
            ),
            430 => 
            array (
                'id' => 938,
                'breweryId' => 997,
                'latitude' => 49.92250061035156,
                'longitude' => 14.636099815368652,
                'accuracy' => 'ROOFTOP',
            ),
            431 => 
            array (
                'id' => 939,
                'breweryId' => 998,
                'latitude' => 50.06850051879883,
                'longitude' => 14.406700134277344,
                'accuracy' => 'ROOFTOP',
            ),
            432 => 
            array (
                'id' => 940,
                'breweryId' => 999,
                'latitude' => 59.93899917602539,
                'longitude' => 30.315799713134766,
                'accuracy' => 'APPROXIMATE',
            ),
            433 => 
            array (
                'id' => 941,
                'breweryId' => 1000,
                'latitude' => 41.945499420166016,
                'longitude' => -88.45069885253906,
                'accuracy' => 'ROOFTOP',
            ),
            434 => 
            array (
                'id' => 942,
                'breweryId' => 1001,
                'latitude' => 32.99079895019531,
                'longitude' => -117.27200317382812,
                'accuracy' => 'ROOFTOP',
            ),
            435 => 
            array (
                'id' => 943,
                'breweryId' => 1002,
                'latitude' => 37.22829818725586,
                'longitude' => -77.39029693603516,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            436 => 
            array (
                'id' => 944,
                'breweryId' => 1003,
                'latitude' => 40.69540023803711,
                'longitude' => -99.0811996459961,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            437 => 
            array (
                'id' => 945,
                'breweryId' => 1004,
                'latitude' => 37.66450119018555,
                'longitude' => -121.87300109863281,
                'accuracy' => 'ROOFTOP',
            ),
            438 => 
            array (
                'id' => 946,
                'breweryId' => 1005,
                'latitude' => 49.74660110473633,
                'longitude' => 13.386099815368652,
                'accuracy' => 'ROOFTOP',
            ),
            439 => 
            array (
                'id' => 947,
                'breweryId' => 1007,
                'latitude' => 35.181400299072266,
                'longitude' => 136.906005859375,
                'accuracy' => 'APPROXIMATE',
            ),
            440 => 
            array (
                'id' => 948,
                'breweryId' => 1008,
                'latitude' => 38.88140106201172,
                'longitude' => -94.81909942626953,
                'accuracy' => 'APPROXIMATE',
            ),
            441 => 
            array (
                'id' => 949,
                'breweryId' => 1009,
                'latitude' => 33.14059829711914,
                'longitude' => -117.1500015258789,
                'accuracy' => 'APPROXIMATE',
            ),
            442 => 
            array (
                'id' => 950,
                'breweryId' => 1010,
                'latitude' => 43.38719940185547,
                'longitude' => -87.87560272216797,
                'accuracy' => 'APPROXIMATE',
            ),
            443 => 
            array (
                'id' => 951,
                'breweryId' => 1011,
                'latitude' => 40.33409881591797,
                'longitude' => -75.01200103759766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            444 => 
            array (
                'id' => 952,
                'breweryId' => 1012,
                'latitude' => 45.541500091552734,
                'longitude' => -122.71299743652344,
                'accuracy' => 'ROOFTOP',
            ),
            445 => 
            array (
                'id' => 953,
                'breweryId' => 1013,
                'latitude' => 43.07809829711914,
                'longitude' => -70.75749969482422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            446 => 
            array (
                'id' => 954,
                'breweryId' => 1014,
                'latitude' => 42.034698486328125,
                'longitude' => -88.28189849853516,
                'accuracy' => 'ROOFTOP',
            ),
            447 => 
            array (
                'id' => 955,
                'breweryId' => 1015,
                'latitude' => 34.54199981689453,
                'longitude' => -112.47000122070312,
                'accuracy' => 'ROOFTOP',
            ),
            448 => 
            array (
                'id' => 956,
                'breweryId' => 1016,
                'latitude' => 60.487701416015625,
                'longitude' => 9.18850040435791,
                'accuracy' => 'APPROXIMATE',
            ),
            449 => 
            array (
                'id' => 957,
                'breweryId' => 1017,
                'latitude' => 49.67470169067383,
                'longitude' => 8.925000190734863,
                'accuracy' => 'APPROXIMATE',
            ),
            450 => 
            array (
                'id' => 958,
                'breweryId' => 1018,
                'latitude' => 51.18330001831055,
                'longitude' => 6.499300003051758,
                'accuracy' => 'ROOFTOP',
            ),
            451 => 
            array (
                'id' => 959,
                'breweryId' => 1019,
                'latitude' => 48.31529998779297,
                'longitude' => 11.89109992980957,
                'accuracy' => 'ROOFTOP',
            ),
            452 => 
            array (
                'id' => 960,
                'breweryId' => 1020,
                'latitude' => 51.22919845581055,
                'longitude' => 6.792500019073486,
                'accuracy' => 'ROOFTOP',
            ),
            453 => 
            array (
                'id' => 961,
                'breweryId' => 1021,
                'latitude' => 50.94649887084961,
                'longitude' => 6.956299781799316,
                'accuracy' => 'ROOFTOP',
            ),
            454 => 
            array (
                'id' => 962,
                'breweryId' => 1023,
                'latitude' => 48.91749954223633,
                'longitude' => 11.873499870300293,
                'accuracy' => 'ROOFTOP',
            ),
            455 => 
            array (
                'id' => 963,
                'breweryId' => 1024,
                'latitude' => 49.885101318359375,
                'longitude' => 10.88230037689209,
                'accuracy' => 'ROOFTOP',
            ),
            456 => 
            array (
                'id' => 964,
                'breweryId' => 1025,
                'latitude' => 39.62820053100586,
                'longitude' => -106.0469970703125,
                'accuracy' => 'ROOFTOP',
            ),
            457 => 
            array (
                'id' => 965,
                'breweryId' => 1026,
                'latitude' => 43.6614990234375,
                'longitude' => -70.25530242919922,
                'accuracy' => 'APPROXIMATE',
            ),
            458 => 
            array (
                'id' => 966,
                'breweryId' => 1027,
                'latitude' => 40.168800354003906,
                'longitude' => -105.10199737548828,
                'accuracy' => 'ROOFTOP',
            ),
            459 => 
            array (
                'id' => 967,
                'breweryId' => 1028,
                'latitude' => 43.60110092163086,
                'longitude' => -89.793701171875,
                'accuracy' => 'APPROXIMATE',
            ),
            460 => 
            array (
                'id' => 968,
                'breweryId' => 1029,
                'latitude' => 47.59170150756836,
                'longitude' => -122.33499908447266,
                'accuracy' => 'ROOFTOP',
            ),
            461 => 
            array (
                'id' => 969,
                'breweryId' => 1029,
                'latitude' => 37.88059997558594,
                'longitude' => -122.30000305175781,
                'accuracy' => 'ROOFTOP',
            ),
            462 => 
            array (
                'id' => 970,
                'breweryId' => 1031,
                'latitude' => 47.59239959716797,
                'longitude' => -122.33399963378906,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            463 => 
            array (
                'id' => 971,
                'breweryId' => 1032,
                'latitude' => 36.06629943847656,
                'longitude' => 120.38300323486328,
                'accuracy' => 'APPROXIMATE',
            ),
            464 => 
            array (
                'id' => 972,
                'breweryId' => 1033,
                'latitude' => 33.490501403808594,
                'longitude' => -79.11599731445312,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            465 => 
            array (
                'id' => 973,
                'breweryId' => 1034,
                'latitude' => 49.26729965209961,
                'longitude' => -123.10299682617188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            466 => 
            array (
                'id' => 974,
                'breweryId' => 1035,
                'latitude' => 45.485599517822266,
                'longitude' => -122.75399780273438,
                'accuracy' => 'ROOFTOP',
            ),
            467 => 
            array (
                'id' => 975,
                'breweryId' => 1036,
                'latitude' => 41.58409881591797,
                'longitude' => -93.62960052490234,
                'accuracy' => 'ROOFTOP',
            ),
            468 => 
            array (
                'id' => 976,
                'breweryId' => 1037,
                'latitude' => 51.11479949951172,
                'longitude' => 13.914999961853027,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            469 => 
            array (
                'id' => 977,
                'breweryId' => 1038,
                'latitude' => 32.73659896850586,
                'longitude' => -97.32740020751953,
                'accuracy' => 'ROOFTOP',
            ),
            470 => 
            array (
                'id' => 978,
                'breweryId' => 1039,
                'latitude' => 45.08509826660156,
                'longitude' => -87.65440368652344,
                'accuracy' => 'ROOFTOP',
            ),
            471 => 
            array (
                'id' => 979,
                'breweryId' => 1040,
                'latitude' => 61.218101501464844,
                'longitude' => -149.89999389648438,
                'accuracy' => 'APPROXIMATE',
            ),
            472 => 
            array (
                'id' => 980,
                'breweryId' => 1041,
                'latitude' => 41.1151008605957,
                'longitude' => -74.14700317382812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            473 => 
            array (
                'id' => 981,
                'breweryId' => 1042,
                'latitude' => 42.832000732421875,
                'longitude' => -88.71399688720703,
                'accuracy' => 'ROOFTOP',
            ),
            474 => 
            array (
                'id' => 982,
                'breweryId' => 1043,
                'latitude' => 51.37229919433594,
                'longitude' => -2.8773000240325928,
                'accuracy' => 'APPROXIMATE',
            ),
            475 => 
            array (
                'id' => 983,
                'breweryId' => 1044,
                'latitude' => 30.113000869750977,
                'longitude' => -98.41560363769531,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            476 => 
            array (
                'id' => 984,
                'breweryId' => 1045,
                'latitude' => 33.6864013671875,
                'longitude' => -117.66000366210938,
                'accuracy' => 'APPROXIMATE',
            ),
            477 => 
            array (
                'id' => 985,
                'breweryId' => 1046,
                'latitude' => 33.0369987487793,
                'longitude' => -117.29199981689453,
                'accuracy' => 'APPROXIMATE',
            ),
            478 => 
            array (
                'id' => 986,
                'breweryId' => 1047,
                'latitude' => 45.19129943847656,
                'longitude' => -109.24700164794922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            479 => 
            array (
                'id' => 987,
                'breweryId' => 1048,
                'latitude' => 36.06129837036133,
                'longitude' => -79.56950378417969,
                'accuracy' => 'ROOFTOP',
            ),
            480 => 
            array (
                'id' => 988,
                'breweryId' => 1049,
                'latitude' => 40.30440139770508,
                'longitude' => -79.5470962524414,
                'accuracy' => 'ROOFTOP',
            ),
            481 => 
            array (
                'id' => 989,
                'breweryId' => 1050,
                'latitude' => 40.018699645996094,
                'longitude' => -105.27899932861328,
                'accuracy' => 'ROOFTOP',
            ),
            482 => 
            array (
                'id' => 990,
                'breweryId' => 1051,
                'latitude' => 47.606201171875,
                'longitude' => -122.33200073242188,
                'accuracy' => 'APPROXIMATE',
            ),
            483 => 
            array (
                'id' => 991,
                'breweryId' => 1052,
                'latitude' => 43.01169967651367,
                'longitude' => -88.23149871826172,
                'accuracy' => 'APPROXIMATE',
            ),
            484 => 
            array (
                'id' => 992,
                'breweryId' => 1053,
                'latitude' => 48.07080078125,
                'longitude' => 11.531100273132324,
                'accuracy' => 'ROOFTOP',
            ),
            485 => 
            array (
                'id' => 993,
                'breweryId' => 1054,
                'latitude' => 41.92340087890625,
                'longitude' => -87.69819641113281,
                'accuracy' => 'ROOFTOP',
            ),
            486 => 
            array (
                'id' => 994,
                'breweryId' => 1055,
                'latitude' => 37.53559875488281,
                'longitude' => -77.43379974365234,
                'accuracy' => 'ROOFTOP',
            ),
            487 => 
            array (
                'id' => 995,
                'breweryId' => 1056,
                'latitude' => 51.546199798583984,
                'longitude' => -1.1354999542236328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            488 => 
            array (
                'id' => 996,
                'breweryId' => 1057,
                'latitude' => 33.414798736572266,
                'longitude' => -111.90899658203125,
                'accuracy' => 'APPROXIMATE',
            ),
            489 => 
            array (
                'id' => 997,
                'breweryId' => 1058,
                'latitude' => 40.36880111694336,
                'longitude' => -74.94770050048828,
                'accuracy' => 'ROOFTOP',
            ),
            490 => 
            array (
                'id' => 998,
                'breweryId' => 1059,
                'latitude' => 41.849998474121094,
                'longitude' => -87.65010070800781,
                'accuracy' => 'APPROXIMATE',
            ),
            491 => 
            array (
                'id' => 999,
                'breweryId' => 1060,
                'latitude' => 40.63800048828125,
                'longitude' => -111.69000244140625,
                'accuracy' => 'APPROXIMATE',
            ),
            492 => 
            array (
                'id' => 1000,
                'breweryId' => 1061,
                'latitude' => 40.44649887084961,
                'longitude' => -79.76419830322266,
                'accuracy' => 'ROOFTOP',
            ),
            493 => 
            array (
                'id' => 1001,
                'breweryId' => 1062,
                'latitude' => 44.56930160522461,
                'longitude' => -72.60340118408203,
                'accuracy' => 'ROOFTOP',
            ),
            494 => 
            array (
                'id' => 1002,
                'breweryId' => 1063,
                'latitude' => 41.89149856567383,
                'longitude' => -87.62840270996094,
                'accuracy' => 'ROOFTOP',
            ),
            495 => 
            array (
                'id' => 1003,
                'breweryId' => 1064,
                'latitude' => 39.74720001220703,
                'longitude' => -104.99500274658203,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            496 => 
            array (
                'id' => 1004,
                'breweryId' => 1065,
                'latitude' => 43.03990173339844,
                'longitude' => -87.91169738769531,
                'accuracy' => 'ROOFTOP',
            ),
            497 => 
            array (
                'id' => 1005,
                'breweryId' => 1066,
                'latitude' => 44.97650146484375,
                'longitude' => -93.27469635009766,
                'accuracy' => 'ROOFTOP',
            ),
            498 => 
            array (
                'id' => 1006,
                'breweryId' => 1067,
                'latitude' => 37.28860092163086,
                'longitude' => -121.93299865722656,
                'accuracy' => 'ROOFTOP',
            ),
            499 => 
            array (
                'id' => 1007,
                'breweryId' => 1068,
                'latitude' => 39.56779861450195,
                'longitude' => -104.8740005493164,
                'accuracy' => 'ROOFTOP',
            ),
        ));
        \DB::table('geocodes')->insert(array (
            0 => 
            array (
                'id' => 1008,
                'breweryId' => 1069,
                'latitude' => 41.46229934692383,
                'longitude' => -81.85600280761719,
                'accuracy' => 'ROOFTOP',
            ),
            1 => 
            array (
                'id' => 1009,
                'breweryId' => 1070,
                'latitude' => 39.40909957885742,
                'longitude' => -104.87000274658203,
                'accuracy' => 'ROOFTOP',
            ),
            2 => 
            array (
                'id' => 1010,
                'breweryId' => 1071,
                'latitude' => 42.787498474121094,
                'longitude' => -86.10890197753906,
                'accuracy' => 'APPROXIMATE',
            ),
            3 => 
            array (
                'id' => 1011,
                'breweryId' => 1072,
                'latitude' => 44.620201110839844,
                'longitude' => -124.052001953125,
                'accuracy' => 'ROOFTOP',
            ),
            4 => 
            array (
                'id' => 1012,
                'breweryId' => 1073,
                'latitude' => 51.442100524902344,
                'longitude' => 4.9232001304626465,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            5 => 
            array (
                'id' => 1013,
                'breweryId' => 1074,
                'latitude' => 37.28689956665039,
                'longitude' => -121.94599914550781,
                'accuracy' => 'ROOFTOP',
            ),
            6 => 
            array (
                'id' => 1014,
                'breweryId' => 1075,
                'latitude' => 45.51179885864258,
                'longitude' => -122.65899658203125,
                'accuracy' => 'ROOFTOP',
            ),
            7 => 
            array (
                'id' => 1015,
                'breweryId' => 1076,
                'latitude' => 37.987098693847656,
                'longitude' => -122.58899688720703,
                'accuracy' => 'APPROXIMATE',
            ),
            8 => 
            array (
                'id' => 1016,
                'breweryId' => 1077,
                'latitude' => 43.31779861450195,
                'longitude' => -88.37899780273438,
                'accuracy' => 'APPROXIMATE',
            ),
            9 => 
            array (
                'id' => 1017,
                'breweryId' => 1078,
                'latitude' => 38.64699935913086,
                'longitude' => -90.2249984741211,
                'accuracy' => 'APPROXIMATE',
            ),
            10 => 
            array (
                'id' => 1018,
                'breweryId' => 1079,
                'latitude' => 32.78900146484375,
                'longitude' => -96.79889678955078,
                'accuracy' => 'APPROXIMATE',
            ),
            11 => 
            array (
                'id' => 1019,
                'breweryId' => 1080,
                'latitude' => 44.02909851074219,
                'longitude' => -88.16290283203125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            12 => 
            array (
                'id' => 1020,
                'breweryId' => 1081,
                'latitude' => 39.93899917602539,
                'longitude' => -77.65660095214844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            13 => 
            array (
                'id' => 1021,
                'breweryId' => 1082,
                'latitude' => 38.57310104370117,
                'longitude' => -121.48100280761719,
                'accuracy' => 'ROOFTOP',
            ),
            14 => 
            array (
                'id' => 1022,
                'breweryId' => 1083,
                'latitude' => 47.68550109863281,
                'longitude' => 9.208000183105469,
                'accuracy' => 'ROOFTOP',
            ),
            15 => 
            array (
                'id' => 1023,
                'breweryId' => 1084,
                'latitude' => 44.890201568603516,
                'longitude' => -92.63780212402344,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            16 => 
            array (
                'id' => 1024,
                'breweryId' => 706,
                'latitude' => 49.14820098876953,
                'longitude' => -122.86199951171875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            17 => 
            array (
                'id' => 1025,
                'breweryId' => 1086,
                'latitude' => 38.44179916381836,
                'longitude' => -122.71199798583984,
                'accuracy' => 'ROOFTOP',
            ),
            18 => 
            array (
                'id' => 1026,
                'breweryId' => 1087,
                'latitude' => 41.387901306152344,
                'longitude' => 2.1698999404907227,
                'accuracy' => 'APPROXIMATE',
            ),
            19 => 
            array (
                'id' => 1027,
                'breweryId' => 1088,
                'latitude' => 51.47359848022461,
                'longitude' => -3.178999900817871,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            20 => 
            array (
                'id' => 1028,
                'breweryId' => 1089,
                'latitude' => 12.968299865722656,
                'longitude' => 77.65699768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            21 => 
            array (
                'id' => 1029,
                'breweryId' => 1090,
                'latitude' => 38.61909866333008,
                'longitude' => -121.4000015258789,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            22 => 
            array (
                'id' => 1030,
                'breweryId' => 1091,
                'latitude' => 29.812299728393555,
                'longitude' => -95.46749877929688,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            23 => 
            array (
                'id' => 1031,
                'breweryId' => 1092,
                'latitude' => 38.632999420166016,
                'longitude' => -90.20999908447266,
                'accuracy' => 'ROOFTOP',
            ),
            24 => 
            array (
                'id' => 1032,
                'breweryId' => 1093,
                'latitude' => 28.164600372314453,
                'longitude' => -82.77169799804688,
                'accuracy' => 'ROOFTOP',
            ),
            25 => 
            array (
                'id' => 1033,
                'breweryId' => 1094,
                'latitude' => 59.30139923095703,
                'longitude' => 24.66790008544922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            26 => 
            array (
                'id' => 1034,
                'breweryId' => 1095,
                'latitude' => 29.424100875854492,
                'longitude' => -98.49359893798828,
                'accuracy' => 'APPROXIMATE',
            ),
            27 => 
            array (
                'id' => 1035,
                'breweryId' => 1096,
                'latitude' => 52.70690155029297,
                'longitude' => -2.7869999408721924,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            28 => 
            array (
                'id' => 1036,
                'breweryId' => 1097,
                'latitude' => 40.76259994506836,
                'longitude' => -111.8949966430664,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            29 => 
            array (
                'id' => 1037,
                'breweryId' => 1098,
                'latitude' => 21.306900024414062,
                'longitude' => -157.85800170898438,
                'accuracy' => 'APPROXIMATE',
            ),
            30 => 
            array (
                'id' => 1038,
                'breweryId' => 1099,
                'latitude' => 53.883399963378906,
                'longitude' => -1.2625000476837158,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            31 => 
            array (
                'id' => 1039,
                'breweryId' => 1100,
                'latitude' => 32.792198181152344,
                'longitude' => -117.0989990234375,
                'accuracy' => 'ROOFTOP',
            ),
            32 => 
            array (
                'id' => 1040,
                'breweryId' => 1101,
                'latitude' => 33.134498596191406,
                'longitude' => -117.19100189208984,
                'accuracy' => 'ROOFTOP',
            ),
            33 => 
            array (
                'id' => 1041,
                'breweryId' => 1102,
                'latitude' => 14.58329963684082,
                'longitude' => 120.96700286865234,
                'accuracy' => 'APPROXIMATE',
            ),
            34 => 
            array (
                'id' => 1042,
                'breweryId' => 1103,
                'latitude' => 44.29290008544922,
                'longitude' => -90.8510971069336,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            35 => 
            array (
                'id' => 1043,
                'breweryId' => 1104,
                'latitude' => 39.755699157714844,
                'longitude' => -104.99299621582031,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            36 => 
            array (
                'id' => 1044,
                'breweryId' => 1105,
                'latitude' => 44.80070114135742,
                'longitude' => -106.95600128173828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            37 => 
            array (
                'id' => 1045,
                'breweryId' => 1106,
                'latitude' => 34.41659927368164,
                'longitude' => -119.69599914550781,
                'accuracy' => 'ROOFTOP',
            ),
            38 => 
            array (
                'id' => 1046,
                'breweryId' => 1107,
                'latitude' => 36.974098205566406,
                'longitude' => -122.03099822998047,
                'accuracy' => 'APPROXIMATE',
            ),
            39 => 
            array (
                'id' => 1047,
                'breweryId' => 1108,
                'latitude' => 35.59659957885742,
                'longitude' => -106.052001953125,
                'accuracy' => 'ROOFTOP',
            ),
            40 => 
            array (
                'id' => 1048,
                'breweryId' => 1109,
                'latitude' => 38.44049835205078,
                'longitude' => -122.71399688720703,
                'accuracy' => 'APPROXIMATE',
            ),
            41 => 
            array (
                'id' => 1049,
                'breweryId' => 1111,
                'latitude' => 52.54349899291992,
                'longitude' => -2.115600109100342,
                'accuracy' => 'APPROXIMATE',
            ),
            42 => 
            array (
                'id' => 1050,
                'breweryId' => 1112,
                'latitude' => 45.42070007324219,
                'longitude' => -122.6709976196289,
                'accuracy' => 'APPROXIMATE',
            ),
            43 => 
            array (
                'id' => 1052,
                'breweryId' => 1113,
                'latitude' => -34.18550109863281,
                'longitude' => 150.60699462890625,
                'accuracy' => 'APPROXIMATE',
            ),
            44 => 
            array (
                'id' => 1053,
                'breweryId' => 1114,
                'latitude' => 50.02239990234375,
                'longitude' => 10.829999923706055,
                'accuracy' => 'ROOFTOP',
            ),
            45 => 
            array (
                'id' => 1054,
                'breweryId' => 1115,
                'latitude' => 47.99039840698242,
                'longitude' => 13.923800468444824,
                'accuracy' => 'ROOFTOP',
            ),
            46 => 
            array (
                'id' => 1055,
                'breweryId' => 1116,
                'latitude' => 47.409698486328125,
                'longitude' => 9.751399993896484,
                'accuracy' => 'ROOFTOP',
            ),
            47 => 
            array (
                'id' => 1056,
                'breweryId' => 1118,
                'latitude' => 32.803001403808594,
                'longitude' => -96.7698974609375,
                'accuracy' => 'APPROXIMATE',
            ),
            48 => 
            array (
                'id' => 1057,
                'breweryId' => 1119,
                'latitude' => 37.96689987182617,
                'longitude' => -121.78299713134766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            49 => 
            array (
                'id' => 1058,
                'breweryId' => 1120,
                'latitude' => 48.00400161743164,
                'longitude' => 9.65839958190918,
                'accuracy' => 'ROOFTOP',
            ),
            50 => 
            array (
                'id' => 1059,
                'breweryId' => 1121,
                'latitude' => 45.127899169921875,
                'longitude' => -76.12999725341797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            51 => 
            array (
                'id' => 1060,
                'breweryId' => 1122,
                'latitude' => 40.89179992675781,
                'longitude' => -76.79750061035156,
                'accuracy' => 'APPROXIMATE',
            ),
            52 => 
            array (
                'id' => 1061,
                'breweryId' => 1123,
                'latitude' => 55.94649887084961,
                'longitude' => -3.248500108718872,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            53 => 
            array (
                'id' => 1062,
                'breweryId' => 1124,
                'latitude' => 47.997501373291016,
                'longitude' => -122.21399688720703,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            54 => 
            array (
                'id' => 1063,
                'breweryId' => 1125,
                'latitude' => 44.797401428222656,
                'longitude' => -68.7699966430664,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            55 => 
            array (
                'id' => 1064,
                'breweryId' => 1126,
                'latitude' => 36.96760177612305,
                'longitude' => -122.00800323486328,
                'accuracy' => 'ROOFTOP',
            ),
            56 => 
            array (
                'id' => 1065,
                'breweryId' => 1127,
                'latitude' => 35.66310119628906,
                'longitude' => -105.96600341796875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            57 => 
            array (
                'id' => 1066,
                'breweryId' => 1128,
                'latitude' => 40.80099868774414,
                'longitude' => -76.86139678955078,
                'accuracy' => 'ROOFTOP',
            ),
            58 => 
            array (
                'id' => 1067,
                'breweryId' => 1129,
                'latitude' => 36.758201599121094,
                'longitude' => -119.802001953125,
                'accuracy' => 'ROOFTOP',
            ),
            59 => 
            array (
                'id' => 1068,
                'breweryId' => 1130,
                'latitude' => 49.14870071411133,
                'longitude' => -122.91200256347656,
                'accuracy' => 'APPROXIMATE',
            ),
            60 => 
            array (
                'id' => 1069,
                'breweryId' => 1131,
                'latitude' => 20.894699096679688,
                'longitude' => -156.47000122070312,
                'accuracy' => 'APPROXIMATE',
            ),
            61 => 
            array (
                'id' => 1070,
                'breweryId' => 1132,
                'latitude' => 51.316898345947266,
                'longitude' => 0.8920999765396118,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            62 => 
            array (
                'id' => 1071,
                'breweryId' => 1133,
                'latitude' => 44.913299560546875,
                'longitude' => -93.50330352783203,
                'accuracy' => 'APPROXIMATE',
            ),
            63 => 
            array (
                'id' => 1072,
                'breweryId' => 1134,
                'latitude' => 40.56840133666992,
                'longitude' => -75.09539794921875,
                'accuracy' => 'ROOFTOP',
            ),
            64 => 
            array (
                'id' => 1073,
                'breweryId' => 1135,
                'latitude' => 45.04949951171875,
                'longitude' => -87.28019714355469,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            65 => 
            array (
                'id' => 1074,
                'breweryId' => 1136,
                'latitude' => 43.66189956665039,
                'longitude' => -70.2489013671875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            66 => 
            array (
                'id' => 1075,
                'breweryId' => 1137,
                'latitude' => 37.774898529052734,
                'longitude' => -122.41899871826172,
                'accuracy' => 'APPROXIMATE',
            ),
            67 => 
            array (
                'id' => 1076,
                'breweryId' => 1138,
                'latitude' => 37.74810028076172,
                'longitude' => -122.41899871826172,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            68 => 
            array (
                'id' => 1077,
                'breweryId' => 1139,
                'latitude' => 44.97629928588867,
                'longitude' => -85.21040344238281,
                'accuracy' => 'ROOFTOP',
            ),
            69 => 
            array (
                'id' => 1078,
                'breweryId' => 1140,
                'latitude' => 8.484100341796875,
                'longitude' => -13.228699684143066,
                'accuracy' => 'APPROXIMATE',
            ),
            70 => 
            array (
                'id' => 1079,
                'breweryId' => 1141,
                'latitude' => 25.681100845336914,
                'longitude' => -100.36299896240234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            71 => 
            array (
                'id' => 1080,
                'breweryId' => 1142,
                'latitude' => 39.72460174560547,
                'longitude' => -121.81600189208984,
                'accuracy' => 'ROOFTOP',
            ),
            72 => 
            array (
                'id' => 1081,
                'breweryId' => 1143,
                'latitude' => 44.72200012207031,
                'longitude' => -123.91799926757812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            73 => 
            array (
                'id' => 1082,
                'breweryId' => 1144,
                'latitude' => 64.95829772949219,
                'longitude' => -147.6219940185547,
                'accuracy' => 'ROOFTOP',
            ),
            74 => 
            array (
                'id' => 1083,
                'breweryId' => 1145,
                'latitude' => 38.52429962158203,
                'longitude' => -122.49700164794922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            75 => 
            array (
                'id' => 1084,
                'breweryId' => 1146,
                'latitude' => 47.58140182495117,
                'longitude' => 9.919099807739258,
                'accuracy' => 'APPROXIMATE',
            ),
            76 => 
            array (
                'id' => 1085,
                'breweryId' => 1147,
                'latitude' => 43.54999923706055,
                'longitude' => -96.70030212402344,
                'accuracy' => 'APPROXIMATE',
            ),
            77 => 
            array (
                'id' => 1086,
                'breweryId' => 1148,
                'latitude' => 40.949100494384766,
                'longitude' => -124.10199737548828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            78 => 
            array (
                'id' => 1087,
                'breweryId' => 1149,
                'latitude' => 40.67399978637695,
                'longitude' => -74.01180267333984,
                'accuracy' => 'ROOFTOP',
            ),
            79 => 
            array (
                'id' => 1088,
                'breweryId' => 901,
                'latitude' => 37.24399948120117,
                'longitude' => -107.87899780273438,
                'accuracy' => 'ROOFTOP',
            ),
            80 => 
            array (
                'id' => 1089,
                'breweryId' => 1151,
                'latitude' => 48.4192008972168,
                'longitude' => -122.33499908447266,
                'accuracy' => 'ROOFTOP',
            ),
            81 => 
            array (
                'id' => 1090,
                'breweryId' => 1152,
                'latitude' => 18.8799991607666,
                'longitude' => 72.94000244140625,
                'accuracy' => 'APPROXIMATE',
            ),
            82 => 
            array (
                'id' => 1091,
                'breweryId' => 1153,
                'latitude' => 44.740299224853516,
                'longitude' => -88.4448013305664,
                'accuracy' => 'APPROXIMATE',
            ),
            83 => 
            array (
                'id' => 1092,
                'breweryId' => 1154,
                'latitude' => 43.48699951171875,
                'longitude' => -80.20680236816406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            84 => 
            array (
                'id' => 1093,
                'breweryId' => 1155,
                'latitude' => 61.219600677490234,
                'longitude' => -149.89599609375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            85 => 
            array (
                'id' => 1094,
                'breweryId' => 1156,
                'latitude' => 59.854400634765625,
                'longitude' => 17.662700653076172,
                'accuracy' => 'ROOFTOP',
            ),
            86 => 
            array (
                'id' => 1095,
                'breweryId' => 1157,
                'latitude' => 40.129798889160156,
                'longitude' => -75.54989624023438,
                'accuracy' => 'ROOFTOP',
            ),
            87 => 
            array (
                'id' => 1096,
                'breweryId' => 1158,
                'latitude' => 40.19430160522461,
                'longitude' => -75.53399658203125,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            88 => 
            array (
                'id' => 1097,
                'breweryId' => 1159,
                'latitude' => 35.9656982421875,
                'longitude' => -83.91809844970703,
                'accuracy' => 'ROOFTOP',
            ),
            89 => 
            array (
                'id' => 1098,
                'breweryId' => 1160,
                'latitude' => 43.032501220703125,
                'longitude' => -70.7947998046875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            90 => 
            array (
                'id' => 1099,
                'breweryId' => 1161,
                'latitude' => 43.47679901123047,
                'longitude' => -110.76499938964844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            91 => 
            array (
                'id' => 1100,
                'breweryId' => 1162,
                'latitude' => 46.328399658203125,
                'longitude' => -120.00800323486328,
                'accuracy' => 'ROOFTOP',
            ),
            92 => 
            array (
                'id' => 1101,
                'breweryId' => 1163,
                'latitude' => 37.984100341796875,
                'longitude' => -120.38200378417969,
                'accuracy' => 'APPROXIMATE',
            ),
            93 => 
            array (
                'id' => 1102,
                'breweryId' => 1164,
                'latitude' => 43.632598876953125,
                'longitude' => -116.2750015258789,
                'accuracy' => 'ROOFTOP',
            ),
            94 => 
            array (
                'id' => 1103,
                'breweryId' => 1165,
                'latitude' => 34.070098876953125,
                'longitude' => -106.89299774169922,
                'accuracy' => 'ROOFTOP',
            ),
            95 => 
            array (
                'id' => 1104,
                'breweryId' => 1166,
                'latitude' => 33.72679901123047,
                'longitude' => -111.85299682617188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            96 => 
            array (
                'id' => 1105,
                'breweryId' => 1167,
                'latitude' => -34.91109848022461,
                'longitude' => 138.5749969482422,
                'accuracy' => 'ROOFTOP',
            ),
            97 => 
            array (
                'id' => 1106,
                'breweryId' => 1168,
                'latitude' => 39.7322998046875,
                'longitude' => -76.44960021972656,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            98 => 
            array (
                'id' => 1107,
                'breweryId' => 1169,
                'latitude' => 46.58720016479492,
                'longitude' => -90.89209747314453,
                'accuracy' => 'ROOFTOP',
            ),
            99 => 
            array (
                'id' => 1108,
                'breweryId' => 1170,
                'latitude' => 40.89030075073242,
                'longitude' => -72.3927001953125,
                'accuracy' => 'ROOFTOP',
            ),
            100 => 
            array (
                'id' => 1109,
                'breweryId' => 1171,
                'latitude' => 32.778499603271484,
                'longitude' => -79.92729949951172,
                'accuracy' => 'ROOFTOP',
            ),
            101 => 
            array (
                'id' => 1110,
                'breweryId' => 1172,
                'latitude' => 30.348899841308594,
                'longitude' => -95.44270324707031,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            102 => 
            array (
                'id' => 1111,
                'breweryId' => 1173,
                'latitude' => 42.100799560546875,
                'longitude' => -79.33570098876953,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            103 => 
            array (
                'id' => 1112,
                'breweryId' => 1175,
                'latitude' => 47.695899963378906,
                'longitude' => -114.1760025024414,
                'accuracy' => 'APPROXIMATE',
            ),
            104 => 
            array (
                'id' => 1113,
                'breweryId' => 1177,
                'latitude' => 37.73870086669922,
                'longitude' => -122.38099670410156,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            105 => 
            array (
                'id' => 1114,
                'breweryId' => 1178,
                'latitude' => 40.50579833984375,
                'longitude' => -96.70700073242188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            106 => 
            array (
                'id' => 1115,
                'breweryId' => 1179,
                'latitude' => 29.426000595092773,
                'longitude' => -97.16069793701172,
                'accuracy' => 'APPROXIMATE',
            ),
            107 => 
            array (
                'id' => 1116,
                'breweryId' => 1180,
                'latitude' => 33.85749816894531,
                'longitude' => -117.8759994506836,
                'accuracy' => 'APPROXIMATE',
            ),
            108 => 
            array (
                'id' => 1117,
                'breweryId' => 1181,
                'latitude' => 43.099998474121094,
                'longitude' => -87.9197998046875,
                'accuracy' => 'ROOFTOP',
            ),
            109 => 
            array (
                'id' => 1118,
                'breweryId' => 1182,
                'latitude' => 39.95249938964844,
                'longitude' => -76.32949829101562,
                'accuracy' => 'ROOFTOP',
            ),
            110 => 
            array (
                'id' => 1119,
                'breweryId' => 1183,
                'latitude' => 37.20790100097656,
                'longitude' => -93.29550170898438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            111 => 
            array (
                'id' => 1120,
                'breweryId' => 1184,
                'latitude' => 18.33679962158203,
                'longitude' => -64.72810363769531,
                'accuracy' => 'APPROXIMATE',
            ),
            112 => 
            array (
                'id' => 1121,
                'breweryId' => 1185,
                'latitude' => 36.72819900512695,
                'longitude' => -76.58360290527344,
                'accuracy' => 'APPROXIMATE',
            ),
            113 => 
            array (
                'id' => 1122,
                'breweryId' => 1186,
                'latitude' => 50.34159851074219,
                'longitude' => -4.788300037384033,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            114 => 
            array (
                'id' => 1123,
                'breweryId' => 1187,
                'latitude' => 52.65380096435547,
                'longitude' => -7.248000144958496,
                'accuracy' => 'APPROXIMATE',
            ),
            115 => 
            array (
                'id' => 1124,
                'breweryId' => 1188,
                'latitude' => 49.801998138427734,
                'longitude' => 11.032400131225586,
                'accuracy' => 'ROOFTOP',
            ),
            116 => 
            array (
                'id' => 1125,
                'breweryId' => 1189,
                'latitude' => 53.34410095214844,
                'longitude' => -6.267499923706055,
                'accuracy' => 'APPROXIMATE',
            ),
            117 => 
            array (
                'id' => 1126,
                'breweryId' => 1190,
                'latitude' => 37.641700744628906,
                'longitude' => -121.00399780273438,
                'accuracy' => 'ROOFTOP',
            ),
            118 => 
            array (
                'id' => 1127,
                'breweryId' => 1192,
                'latitude' => 51.84859848022461,
                'longitude' => 5.863900184631348,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            119 => 
            array (
                'id' => 1128,
                'breweryId' => 1193,
                'latitude' => 42.197601318359375,
                'longitude' => -122.71499633789062,
                'accuracy' => 'ROOFTOP',
            ),
            120 => 
            array (
                'id' => 1129,
                'breweryId' => 1194,
                'latitude' => 43.64139938354492,
                'longitude' => -79.38690185546875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            121 => 
            array (
                'id' => 1130,
                'breweryId' => 1195,
                'latitude' => 49.2849006652832,
                'longitude' => -123.11000061035156,
                'accuracy' => 'ROOFTOP',
            ),
            122 => 
            array (
                'id' => 1131,
                'breweryId' => 1196,
                'latitude' => 37.27239990234375,
                'longitude' => -107.87999725341797,
                'accuracy' => 'ROOFTOP',
            ),
            123 => 
            array (
                'id' => 1132,
                'breweryId' => 1197,
                'latitude' => 32.500701904296875,
                'longitude' => -94.7405014038086,
                'accuracy' => 'APPROXIMATE',
            ),
            124 => 
            array (
                'id' => 1133,
                'breweryId' => 1198,
                'latitude' => 47.36899948120117,
                'longitude' => 8.538000106811523,
                'accuracy' => 'APPROXIMATE',
            ),
            125 => 
            array (
                'id' => 1134,
                'breweryId' => 1199,
                'latitude' => 35.99399948120117,
                'longitude' => -78.89859771728516,
                'accuracy' => 'APPROXIMATE',
            ),
            126 => 
            array (
                'id' => 1135,
                'breweryId' => 1200,
                'latitude' => 44.510398864746094,
                'longitude' => -89.57340240478516,
                'accuracy' => 'ROOFTOP',
            ),
            127 => 
            array (
                'id' => 1136,
                'breweryId' => 1201,
                'latitude' => 39.63180160522461,
                'longitude' => -75.66280364990234,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            128 => 
            array (
                'id' => 1137,
                'breweryId' => 1202,
                'latitude' => 47.800498962402344,
                'longitude' => 13.044400215148926,
                'accuracy' => 'APPROXIMATE',
            ),
            129 => 
            array (
                'id' => 1138,
                'breweryId' => 1203,
                'latitude' => 39.290401458740234,
                'longitude' => -76.61219787597656,
                'accuracy' => 'APPROXIMATE',
            ),
            130 => 
            array (
                'id' => 1139,
                'breweryId' => 1204,
                'latitude' => 33.115699768066406,
                'longitude' => -117.12000274658203,
                'accuracy' => 'ROOFTOP',
            ),
            131 => 
            array (
                'id' => 1140,
                'breweryId' => 1205,
                'latitude' => 44.25360107421875,
                'longitude' => -88.40370178222656,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            132 => 
            array (
                'id' => 1141,
                'breweryId' => 1206,
                'latitude' => 41.80720138549805,
                'longitude' => -91.49410247802734,
                'accuracy' => 'APPROXIMATE',
            ),
            133 => 
            array (
                'id' => 1142,
                'breweryId' => 1207,
                'latitude' => 43.709999084472656,
                'longitude' => -70.30500030517578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            134 => 
            array (
                'id' => 1143,
                'breweryId' => 1208,
                'latitude' => 44.197200775146484,
                'longitude' => -72.50189971923828,
                'accuracy' => 'ROOFTOP',
            ),
            135 => 
            array (
                'id' => 1144,
                'breweryId' => 1209,
                'latitude' => 42.33720016479492,
                'longitude' => -83.01860046386719,
                'accuracy' => 'ROOFTOP',
            ),
            136 => 
            array (
                'id' => 1145,
                'breweryId' => 1210,
                'latitude' => 49.282100677490234,
                'longitude' => -123.06999969482422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            137 => 
            array (
                'id' => 1146,
                'breweryId' => 1211,
                'latitude' => 40.236900329589844,
                'longitude' => -76.0719985961914,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            138 => 
            array (
                'id' => 1147,
                'breweryId' => 1212,
                'latitude' => 43.03889846801758,
                'longitude' => -87.90650177001953,
                'accuracy' => 'APPROXIMATE',
            ),
            139 => 
            array (
                'id' => 1148,
                'breweryId' => 1213,
                'latitude' => 54.39059829711914,
                'longitude' => -5.654799938201904,
                'accuracy' => 'APPROXIMATE',
            ),
            140 => 
            array (
                'id' => 1149,
                'breweryId' => 1214,
                'latitude' => 41.42770004272461,
                'longitude' => -78.55390167236328,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            141 => 
            array (
                'id' => 1150,
                'breweryId' => 1215,
                'latitude' => 27.949399948120117,
                'longitude' => -82.46510314941406,
                'accuracy' => 'APPROXIMATE',
            ),
            142 => 
            array (
                'id' => 1151,
                'breweryId' => 1216,
                'latitude' => 44.83420181274414,
                'longitude' => -87.37699890136719,
                'accuracy' => 'APPROXIMATE',
            ),
            143 => 
            array (
                'id' => 1152,
                'breweryId' => 1218,
                'latitude' => 38.54719924926758,
                'longitude' => -121.72599792480469,
                'accuracy' => 'ROOFTOP',
            ),
            144 => 
            array (
                'id' => 1153,
                'breweryId' => 1219,
                'latitude' => 43.31520080566406,
                'longitude' => -83.73139953613281,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            145 => 
            array (
                'id' => 1154,
                'breweryId' => 1220,
                'latitude' => 44.91389846801758,
                'longitude' => -93.13960266113281,
                'accuracy' => 'ROOFTOP',
            ),
            146 => 
            array (
                'id' => 1155,
                'breweryId' => 1221,
                'latitude' => 45.04290008544922,
                'longitude' => -93.32460021972656,
                'accuracy' => 'ROOFTOP',
            ),
            147 => 
            array (
                'id' => 1156,
                'breweryId' => 1222,
                'latitude' => -32.06380081176758,
                'longitude' => 115.91200256347656,
                'accuracy' => 'ROOFTOP',
            ),
            148 => 
            array (
                'id' => 1157,
                'breweryId' => 1223,
                'latitude' => 39.03239822387695,
                'longitude' => -77.40969848632812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            149 => 
            array (
                'id' => 1158,
                'breweryId' => 1224,
                'latitude' => 33.80870056152344,
                'longitude' => -84.38130187988281,
                'accuracy' => 'ROOFTOP',
            ),
            150 => 
            array (
                'id' => 1159,
                'breweryId' => 1225,
                'latitude' => 42.866600036621094,
                'longitude' => -106.31300354003906,
                'accuracy' => 'APPROXIMATE',
            ),
            151 => 
            array (
                'id' => 1160,
                'breweryId' => 1226,
                'latitude' => 38.82889938354492,
                'longitude' => -77.43930053710938,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            152 => 
            array (
                'id' => 1161,
                'breweryId' => 1227,
                'latitude' => 43.39059829711914,
                'longitude' => -79.80490112304688,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            153 => 
            array (
                'id' => 1162,
                'breweryId' => 1229,
                'latitude' => 32.80910110473633,
                'longitude' => -79.875,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            154 => 
            array (
                'id' => 1163,
                'breweryId' => 1230,
                'latitude' => 40.167198181152344,
                'longitude' => -105.10199737548828,
                'accuracy' => 'APPROXIMATE',
            ),
            155 => 
            array (
                'id' => 1164,
                'breweryId' => 1231,
                'latitude' => 43.61130142211914,
                'longitude' => -116.20600128173828,
                'accuracy' => 'ROOFTOP',
            ),
            156 => 
            array (
                'id' => 1165,
                'breweryId' => 1232,
                'latitude' => 32.77320098876953,
                'longitude' => -117.05500030517578,
                'accuracy' => 'ROOFTOP',
            ),
            157 => 
            array (
                'id' => 1166,
                'breweryId' => 1233,
                'latitude' => 25.025999069213867,
                'longitude' => 121.47200012207031,
                'accuracy' => 'APPROXIMATE',
            ),
            158 => 
            array (
                'id' => 1167,
                'breweryId' => 1234,
                'latitude' => 27.9606990814209,
                'longitude' => -82.44329833984375,
                'accuracy' => 'ROOFTOP',
            ),
            159 => 
            array (
                'id' => 1168,
                'breweryId' => 1235,
                'latitude' => 43.80139923095703,
                'longitude' => -91.2396011352539,
                'accuracy' => 'APPROXIMATE',
            ),
            160 => 
            array (
                'id' => 1169,
                'breweryId' => 1236,
                'latitude' => 41.83580017089844,
                'longitude' => -88.00910186767578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            161 => 
            array (
                'id' => 1170,
                'breweryId' => 1237,
                'latitude' => 49.32379913330078,
                'longitude' => -123.10199737548828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            162 => 
            array (
                'id' => 1171,
                'breweryId' => 1238,
                'latitude' => 32.715301513671875,
                'longitude' => -117.15699768066406,
                'accuracy' => 'APPROXIMATE',
            ),
            163 => 
            array (
                'id' => 1172,
                'breweryId' => 1240,
                'latitude' => 36.21540069580078,
                'longitude' => -115.2509994506836,
                'accuracy' => 'ROOFTOP',
            ),
            164 => 
            array (
                'id' => 1173,
                'breweryId' => 1241,
                'latitude' => 55.85929870605469,
                'longitude' => -4.232399940490723,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            165 => 
            array (
                'id' => 1174,
                'breweryId' => 1242,
                'latitude' => 45.4192008972168,
                'longitude' => -117.27200317382812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            166 => 
            array (
                'id' => 1175,
                'breweryId' => 1243,
                'latitude' => 33.945899963378906,
                'longitude' => -83.4104995727539,
                'accuracy' => 'ROOFTOP',
            ),
            167 => 
            array (
                'id' => 1176,
                'breweryId' => 1244,
                'latitude' => 44.33720016479492,
                'longitude' => -72.75599670410156,
                'accuracy' => 'ROOFTOP',
            ),
            168 => 
            array (
                'id' => 1177,
                'breweryId' => 1245,
                'latitude' => 40.89590072631836,
                'longitude' => -73.381103515625,
                'accuracy' => 'ROOFTOP',
            ),
            169 => 
            array (
                'id' => 1178,
                'breweryId' => 1246,
                'latitude' => 33.86140060424805,
                'longitude' => -117.87999725341797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            170 => 
            array (
                'id' => 1179,
                'breweryId' => 1247,
                'latitude' => 41.96580123901367,
                'longitude' => -72.79299926757812,
                'accuracy' => 'ROOFTOP',
            ),
            171 => 
            array (
                'id' => 1180,
                'breweryId' => 1248,
                'latitude' => 40.462398529052734,
                'longitude' => -79.9645004272461,
                'accuracy' => 'ROOFTOP',
            ),
            172 => 
            array (
                'id' => 1181,
                'breweryId' => 1249,
                'latitude' => 37.78390121459961,
                'longitude' => -122.0009994506836,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            173 => 
            array (
                'id' => 1182,
                'breweryId' => 1250,
                'latitude' => 42.118499755859375,
                'longitude' => -86.45369720458984,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            174 => 
            array (
                'id' => 1183,
                'breweryId' => 1251,
                'latitude' => 33.14059829711914,
                'longitude' => -117.1500015258789,
                'accuracy' => 'APPROXIMATE',
            ),
            175 => 
            array (
                'id' => 1184,
                'breweryId' => 1252,
                'latitude' => 41.819000244140625,
                'longitude' => -71.40969848632812,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            176 => 
            array (
                'id' => 1185,
                'breweryId' => 1253,
                'latitude' => 41.92110061645508,
                'longitude' => -86.45829772949219,
                'accuracy' => 'ROOFTOP',
            ),
            177 => 
            array (
                'id' => 1186,
                'breweryId' => 1254,
                'latitude' => 38.43980026245117,
                'longitude' => -122.71299743652344,
                'accuracy' => 'ROOFTOP',
            ),
            178 => 
            array (
                'id' => 1187,
                'breweryId' => 1255,
                'latitude' => 41.06890106201172,
                'longitude' => -81.51719665527344,
                'accuracy' => 'ROOFTOP',
            ),
            179 => 
            array (
                'id' => 1188,
                'breweryId' => 1256,
                'latitude' => 37.785499572753906,
                'longitude' => -122.4000015258789,
                'accuracy' => 'ROOFTOP',
            ),
            180 => 
            array (
                'id' => 1189,
                'breweryId' => 1257,
                'latitude' => 34.79679870605469,
                'longitude' => -82.42449951171875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            181 => 
            array (
                'id' => 1190,
                'breweryId' => 1258,
                'latitude' => 41.80870056152344,
                'longitude' => -72.71080017089844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            182 => 
            array (
                'id' => 1191,
                'breweryId' => 1259,
                'latitude' => 47.59239959716797,
                'longitude' => -122.33399963378906,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            183 => 
            array (
                'id' => 1192,
                'breweryId' => 1260,
                'latitude' => 41.535400390625,
                'longitude' => -87.51580047607422,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            184 => 
            array (
                'id' => 1193,
                'breweryId' => 1261,
                'latitude' => 44.47710037231445,
                'longitude' => -73.21150207519531,
                'accuracy' => 'ROOFTOP',
            ),
            185 => 
            array (
                'id' => 1194,
                'breweryId' => 1262,
                'latitude' => 32.3406982421875,
                'longitude' => -111.01499938964844,
                'accuracy' => 'ROOFTOP',
            ),
            186 => 
            array (
                'id' => 1195,
                'breweryId' => 1263,
                'latitude' => 40.69660186767578,
                'longitude' => -99.08149719238281,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            187 => 
            array (
                'id' => 1196,
                'breweryId' => 1264,
                'latitude' => 40.925899505615234,
                'longitude' => -98.3396987915039,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            188 => 
            array (
                'id' => 1197,
                'breweryId' => 1265,
                'latitude' => 37.33620071411133,
                'longitude' => -121.89399719238281,
                'accuracy' => 'ROOFTOP',
            ),
            189 => 
            array (
                'id' => 1198,
                'breweryId' => 1266,
                'latitude' => 50.839900970458984,
                'longitude' => 4.247499942779541,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            190 => 
            array (
                'id' => 1199,
                'breweryId' => 1267,
                'latitude' => 49.49440002441406,
                'longitude' => -119.61000061035156,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            191 => 
            array (
                'id' => 1200,
                'breweryId' => 1268,
                'latitude' => 44.52000045776367,
                'longitude' => -88.01730346679688,
                'accuracy' => 'ROOFTOP',
            ),
            192 => 
            array (
                'id' => 1201,
                'breweryId' => 1269,
                'latitude' => 39.739200592041016,
                'longitude' => -104.98500061035156,
                'accuracy' => 'APPROXIMATE',
            ),
            193 => 
            array (
                'id' => 1202,
                'breweryId' => 1270,
                'latitude' => 52.05929946899414,
                'longitude' => 1.1556999683380127,
                'accuracy' => 'APPROXIMATE',
            ),
            194 => 
            array (
                'id' => 1203,
                'breweryId' => 1271,
                'latitude' => 39.741798400878906,
                'longitude' => -105.51799774169922,
                'accuracy' => 'ROOFTOP',
            ),
            195 => 
            array (
                'id' => 1204,
                'breweryId' => 1272,
                'latitude' => 51.66659927368164,
                'longitude' => -3.9442999362945557,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            196 => 
            array (
                'id' => 1205,
                'breweryId' => 1273,
                'latitude' => 51.08729934692383,
                'longitude' => 4.917799949645996,
                'accuracy' => 'APPROXIMATE',
            ),
            197 => 
            array (
                'id' => 1206,
                'breweryId' => 1274,
                'latitude' => -33.850101470947266,
                'longitude' => 151.0449981689453,
                'accuracy' => 'ROOFTOP',
            ),
            198 => 
            array (
                'id' => 1207,
                'breweryId' => 1275,
                'latitude' => -33.86709976196289,
                'longitude' => 151.20700073242188,
                'accuracy' => 'APPROXIMATE',
            ),
            199 => 
            array (
                'id' => 1208,
                'breweryId' => 1276,
                'latitude' => 35.91320037841797,
                'longitude' => -79.05580139160156,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            200 => 
            array (
                'id' => 1209,
                'breweryId' => 1277,
                'latitude' => 20.89109992980957,
                'longitude' => -156.5050048828125,
                'accuracy' => 'APPROXIMATE',
            ),
            201 => 
            array (
                'id' => 1210,
                'breweryId' => 1278,
                'latitude' => 42.35100173950195,
                'longitude' => -83.06649780273438,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            202 => 
            array (
                'id' => 1211,
                'breweryId' => 1279,
                'latitude' => 38.77450180053711,
                'longitude' => -90.48400115966797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            203 => 
            array (
                'id' => 1212,
                'breweryId' => 1280,
                'latitude' => 40.68920135498047,
                'longitude' => -74.43489837646484,
                'accuracy' => 'ROOFTOP',
            ),
            204 => 
            array (
                'id' => 1213,
                'breweryId' => 1281,
                'latitude' => 55.61899948120117,
                'longitude' => -3.0636000633239746,
                'accuracy' => 'APPROXIMATE',
            ),
            205 => 
            array (
                'id' => 1214,
                'breweryId' => 1282,
                'latitude' => 38.89670181274414,
                'longitude' => -104.8550033569336,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            206 => 
            array (
                'id' => 1215,
                'breweryId' => 1283,
                'latitude' => 37.8734016418457,
                'longitude' => -122.26899719238281,
                'accuracy' => 'ROOFTOP',
            ),
            207 => 
            array (
                'id' => 1216,
                'breweryId' => 1284,
                'latitude' => 40.36589813232422,
                'longitude' => -74.95439910888672,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            208 => 
            array (
                'id' => 1217,
                'breweryId' => 1285,
                'latitude' => 40.35070037841797,
                'longitude' => -74.6583023071289,
                'accuracy' => 'ROOFTOP',
            ),
            209 => 
            array (
                'id' => 1218,
                'breweryId' => 1286,
                'latitude' => 40.25590133666992,
                'longitude' => -76.87149810791016,
                'accuracy' => 'ROOFTOP',
            ),
            210 => 
            array (
                'id' => 1219,
                'breweryId' => 1287,
                'latitude' => 13.723400115966797,
                'longitude' => 100.47599792480469,
                'accuracy' => 'APPROXIMATE',
            ),
            211 => 
            array (
                'id' => 1220,
                'breweryId' => 1288,
                'latitude' => 44.520301818847656,
                'longitude' => -72.00140380859375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            212 => 
            array (
                'id' => 1221,
                'breweryId' => 1289,
                'latitude' => 36.06629943847656,
                'longitude' => 120.38300323486328,
                'accuracy' => 'APPROXIMATE',
            ),
            213 => 
            array (
                'id' => 1222,
                'breweryId' => 1290,
                'latitude' => 49.464298248291016,
                'longitude' => 11.084699630737305,
                'accuracy' => 'ROOFTOP',
            ),
            214 => 
            array (
                'id' => 1223,
                'breweryId' => 1292,
                'latitude' => 44.94419860839844,
                'longitude' => -93.08609771728516,
                'accuracy' => 'APPROXIMATE',
            ),
            215 => 
            array (
                'id' => 1224,
                'breweryId' => 1293,
                'latitude' => 38.9734992980957,
                'longitude' => -77.127197265625,
                'accuracy' => 'ROOFTOP',
            ),
            216 => 
            array (
                'id' => 1225,
                'breweryId' => 1294,
                'latitude' => 33.74959945678711,
                'longitude' => -117.81199645996094,
                'accuracy' => 'ROOFTOP',
            ),
            217 => 
            array (
                'id' => 1226,
                'breweryId' => 1295,
                'latitude' => 46.72079849243164,
                'longitude' => -92.1041030883789,
                'accuracy' => 'APPROXIMATE',
            ),
            218 => 
            array (
                'id' => 1227,
                'breweryId' => 1296,
                'latitude' => 47.855899810791016,
                'longitude' => -121.97100067138672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            219 => 
            array (
                'id' => 1228,
                'breweryId' => 1297,
                'latitude' => 40.02009963989258,
                'longitude' => -105.2509994506836,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            220 => 
            array (
                'id' => 1229,
                'breweryId' => 1298,
                'latitude' => 41.82059860229492,
                'longitude' => -88.20680236816406,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            221 => 
            array (
                'id' => 1230,
                'breweryId' => 1299,
                'latitude' => 40.7963981628418,
                'longitude' => -73.6989974975586,
                'accuracy' => 'ROOFTOP',
            ),
            222 => 
            array (
                'id' => 1231,
                'breweryId' => 1300,
                'latitude' => 32.85449981689453,
                'longitude' => -96.7686996459961,
                'accuracy' => 'ROOFTOP',
            ),
            223 => 
            array (
                'id' => 1232,
                'breweryId' => 1301,
                'latitude' => 43.08620071411133,
                'longitude' => -88.89669799804688,
                'accuracy' => 'ROOFTOP',
            ),
            224 => 
            array (
                'id' => 1234,
                'breweryId' => 1303,
                'latitude' => 51.224998474121094,
                'longitude' => 6.772200107574463,
                'accuracy' => 'ROOFTOP',
            ),
            225 => 
            array (
                'id' => 1235,
                'breweryId' => 1304,
                'latitude' => 40.732601165771484,
                'longitude' => -111.9540023803711,
                'accuracy' => 'ROOFTOP',
            ),
            226 => 
            array (
                'id' => 1236,
                'breweryId' => 1305,
                'latitude' => 39.14979934692383,
                'longitude' => -123.20800018310547,
                'accuracy' => 'ROOFTOP',
            ),
            227 => 
            array (
                'id' => 1237,
                'breweryId' => 1306,
                'latitude' => 43.21649932861328,
                'longitude' => -123.34200286865234,
                'accuracy' => 'APPROXIMATE',
            ),
            228 => 
            array (
                'id' => 1238,
                'breweryId' => 1307,
                'latitude' => 45.44160079956055,
                'longitude' => -73.2594985961914,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            229 => 
            array (
                'id' => 1239,
                'breweryId' => 1309,
                'latitude' => 40.21179962158203,
                'longitude' => -76.12319946289062,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            230 => 
            array (
                'id' => 1240,
                'breweryId' => 1310,
                'latitude' => 40.423301696777344,
                'longitude' => -104.70899963378906,
                'accuracy' => 'APPROXIMATE',
            ),
            231 => 
            array (
                'id' => 1241,
                'breweryId' => 1311,
                'latitude' => 48.135501861572266,
                'longitude' => 11.600899696350098,
                'accuracy' => 'ROOFTOP',
            ),
            232 => 
            array (
                'id' => 1242,
                'breweryId' => 1312,
                'latitude' => 12.968899726867676,
                'longitude' => 77.59459686279297,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            233 => 
            array (
                'id' => 1243,
                'breweryId' => 1313,
                'latitude' => 39.173301696777344,
                'longitude' => -86.53690338134766,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            234 => 
            array (
                'id' => 1244,
                'breweryId' => 1314,
                'latitude' => 41.84450149536133,
                'longitude' => -90.1886978149414,
                'accuracy' => 'APPROXIMATE',
            ),
            235 => 
            array (
                'id' => 1245,
                'breweryId' => 1315,
                'latitude' => 41.23310089111328,
                'longitude' => -96.18109893798828,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            236 => 
            array (
                'id' => 1246,
                'breweryId' => 1316,
                'latitude' => 41.25529861450195,
                'longitude' => -95.93060302734375,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            237 => 
            array (
                'id' => 1247,
                'breweryId' => 1317,
                'latitude' => 51.320098876953125,
                'longitude' => -2.2079999446868896,
                'accuracy' => 'APPROXIMATE',
            ),
            238 => 
            array (
                'id' => 1248,
                'breweryId' => 1318,
                'latitude' => 40.732200622558594,
                'longitude' => -111.9000015258789,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            239 => 
            array (
                'id' => 1249,
                'breweryId' => 1320,
                'latitude' => 37.955101013183594,
                'longitude' => -121.3219985961914,
                'accuracy' => 'ROOFTOP',
            ),
            240 => 
            array (
                'id' => 1250,
                'breweryId' => 1321,
                'latitude' => 40.04389953613281,
                'longitude' => -75.38809967041016,
                'accuracy' => 'APPROXIMATE',
            ),
            241 => 
            array (
                'id' => 1251,
                'breweryId' => 1322,
                'latitude' => 50.920501708984375,
                'longitude' => 3.2541000843048096,
                'accuracy' => 'APPROXIMATE',
            ),
            242 => 
            array (
                'id' => 1252,
                'breweryId' => 1323,
                'latitude' => 48.43439865112305,
                'longitude' => -123.36699676513672,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            243 => 
            array (
                'id' => 1253,
                'breweryId' => 1324,
                'latitude' => 44.477298736572266,
                'longitude' => -73.21440124511719,
                'accuracy' => 'ROOFTOP',
            ),
            244 => 
            array (
                'id' => 1255,
                'breweryId' => 1326,
                'latitude' => 40.006099700927734,
                'longitude' => -75.69419860839844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            245 => 
            array (
                'id' => 1256,
                'breweryId' => 1327,
                'latitude' => 45.25849914550781,
                'longitude' => -91.81809997558594,
                'accuracy' => 'ROOFTOP',
            ),
            246 => 
            array (
                'id' => 1257,
                'breweryId' => 1328,
                'latitude' => 39.11259841918945,
                'longitude' => -77.55370330810547,
                'accuracy' => 'ROOFTOP',
            ),
            247 => 
            array (
                'id' => 1258,
                'breweryId' => 1329,
                'latitude' => 57.49850082397461,
                'longitude' => 18.458999633789062,
                'accuracy' => 'APPROXIMATE',
            ),
            248 => 
            array (
                'id' => 1259,
                'breweryId' => 1330,
                'latitude' => 41.63719940185547,
                'longitude' => -80.15489959716797,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            249 => 
            array (
                'id' => 1260,
                'breweryId' => 1332,
                'latitude' => 42.55860137939453,
                'longitude' => -71.87149810791016,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            250 => 
            array (
                'id' => 1261,
                'breweryId' => 1333,
                'latitude' => 42.57389831542969,
                'longitude' => -76.85820007324219,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            251 => 
            array (
                'id' => 1262,
                'breweryId' => 1334,
                'latitude' => 40.46160125732422,
                'longitude' => -79.96530151367188,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            252 => 
            array (
                'id' => 1263,
                'breweryId' => 1335,
                'latitude' => 45.69219970703125,
                'longitude' => -121.88500213623047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            253 => 
            array (
                'id' => 1264,
                'breweryId' => 1336,
                'latitude' => 42.648799896240234,
                'longitude' => -85.2874984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            254 => 
            array (
                'id' => 1265,
                'breweryId' => 1337,
                'latitude' => 51.44160079956055,
                'longitude' => 8.351900100708008,
                'accuracy' => 'ROOFTOP',
            ),
            255 => 
            array (
                'id' => 1266,
                'breweryId' => 1338,
                'latitude' => 42.37179946899414,
                'longitude' => -71.23670196533203,
                'accuracy' => 'ROOFTOP',
            ),
            256 => 
            array (
                'id' => 1267,
                'breweryId' => 1339,
                'latitude' => 43.0447998046875,
                'longitude' => -87.9113998413086,
                'accuracy' => 'ROOFTOP',
            ),
            257 => 
            array (
                'id' => 1268,
                'breweryId' => 1340,
                'latitude' => 43.0525016784668,
                'longitude' => -88.36630249023438,
                'accuracy' => 'ROOFTOP',
            ),
            258 => 
            array (
                'id' => 1269,
                'breweryId' => 1341,
                'latitude' => 44.86520004272461,
                'longitude' => -93.40950012207031,
                'accuracy' => 'APPROXIMATE',
            ),
            259 => 
            array (
                'id' => 1270,
                'breweryId' => 1342,
                'latitude' => 51.50019836425781,
                'longitude' => -0.12620000541210175,
                'accuracy' => 'APPROXIMATE',
            ),
            260 => 
            array (
                'id' => 1271,
                'breweryId' => 1343,
                'latitude' => 39.231998443603516,
                'longitude' => -84.37830352783203,
                'accuracy' => 'APPROXIMATE',
            ),
            261 => 
            array (
                'id' => 1272,
                'breweryId' => 1344,
                'latitude' => 47.23109817504883,
                'longitude' => 8.669099807739258,
                'accuracy' => 'ROOFTOP',
            ),
            262 => 
            array (
                'id' => 1273,
                'breweryId' => 1345,
                'latitude' => 35.88589859008789,
                'longitude' => -75.6697006225586,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            263 => 
            array (
                'id' => 1274,
                'breweryId' => 1346,
                'latitude' => 41.85060119628906,
                'longitude' => -87.793701171875,
                'accuracy' => 'APPROXIMATE',
            ),
            264 => 
            array (
                'id' => 1275,
                'breweryId' => 1347,
                'latitude' => 47.79399871826172,
                'longitude' => 11.831100463867188,
                'accuracy' => 'ROOFTOP',
            ),
            265 => 
            array (
                'id' => 1277,
                'breweryId' => 1351,
                'latitude' => 41.4995002746582,
                'longitude' => -81.69539642333984,
                'accuracy' => 'APPROXIMATE',
            ),
            266 => 
            array (
                'id' => 1278,
                'breweryId' => 1352,
                'latitude' => 40.67319869995117,
                'longitude' => -75.22489929199219,
                'accuracy' => 'ROOFTOP',
            ),
            267 => 
            array (
                'id' => 1279,
                'breweryId' => 1353,
                'latitude' => 51.537498474121094,
                'longitude' => -0.9046000242233276,
                'accuracy' => 'APPROXIMATE',
            ),
            268 => 
            array (
                'id' => 1280,
                'breweryId' => 1354,
                'latitude' => 39.286598205566406,
                'longitude' => -76.61820220947266,
                'accuracy' => 'ROOFTOP',
            ),
            269 => 
            array (
                'id' => 1281,
                'breweryId' => 1355,
                'latitude' => 53.14070129394531,
                'longitude' => -1.80840003490448,
                'accuracy' => 'APPROXIMATE',
            ),
            270 => 
            array (
                'id' => 1282,
                'breweryId' => 1356,
                'latitude' => 52.13570022583008,
                'longitude' => -0.46799999475479126,
                'accuracy' => 'APPROXIMATE',
            ),
            271 => 
            array (
                'id' => 1283,
                'breweryId' => 1357,
                'latitude' => 39.37220001220703,
                'longitude' => -76.46379852294922,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            272 => 
            array (
                'id' => 1284,
                'breweryId' => 1358,
                'latitude' => 45.34980010986328,
                'longitude' => -123.072998046875,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            273 => 
            array (
                'id' => 1285,
                'breweryId' => 1359,
                'latitude' => 47.38119888305664,
                'longitude' => -94.66690063476562,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            274 => 
            array (
                'id' => 1286,
                'breweryId' => 1360,
                'latitude' => 51.2047004699707,
                'longitude' => 0.6812999844551086,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            275 => 
            array (
                'id' => 1287,
                'breweryId' => 1361,
                'latitude' => 45.54079818725586,
                'longitude' => -122.6760025024414,
                'accuracy' => 'ROOFTOP',
            ),
            276 => 
            array (
                'id' => 1288,
                'breweryId' => 1362,
                'latitude' => 44.052101135253906,
                'longitude' => -123.08699798583984,
                'accuracy' => 'APPROXIMATE',
            ),
            277 => 
            array (
                'id' => 1289,
                'breweryId' => 1363,
                'latitude' => 39.36280059814453,
                'longitude' => -77.42649841308594,
                'accuracy' => 'ROOFTOP',
            ),
            278 => 
            array (
                'id' => 1290,
                'breweryId' => 1364,
                'latitude' => 42.21080017089844,
                'longitude' => -88.16519927978516,
                'accuracy' => 'APPROXIMATE',
            ),
            279 => 
            array (
                'id' => 1291,
                'breweryId' => 1365,
                'latitude' => 42.17070007324219,
                'longitude' => -123.6449966430664,
                'accuracy' => 'ROOFTOP',
            ),
            280 => 
            array (
                'id' => 1292,
                'breweryId' => 1366,
                'latitude' => 45.25189971923828,
                'longitude' => -92.27130126953125,
                'accuracy' => 'APPROXIMATE',
            ),
            281 => 
            array (
                'id' => 1293,
                'breweryId' => 1367,
                'latitude' => 56.11629867553711,
                'longitude' => -3.7953999042510986,
                'accuracy' => 'APPROXIMATE',
            ),
            282 => 
            array (
                'id' => 1294,
                'breweryId' => 1368,
                'latitude' => 41.6416015625,
                'longitude' => -81.40660095214844,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            283 => 
            array (
                'id' => 1295,
                'breweryId' => 1369,
                'latitude' => 34.22570037841797,
                'longitude' => -77.9447021484375,
                'accuracy' => 'APPROXIMATE',
            ),
            284 => 
            array (
                'id' => 1296,
                'breweryId' => 1370,
                'latitude' => 43.04949951171875,
                'longitude' => -88.00759887695312,
                'accuracy' => 'APPROXIMATE',
            ),
            285 => 
            array (
                'id' => 1297,
                'breweryId' => 1371,
                'latitude' => 44.65840148925781,
                'longitude' => -111.0999984741211,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            286 => 
            array (
                'id' => 1298,
                'breweryId' => 1372,
                'latitude' => 39.96189880371094,
                'longitude' => -105.51000213623047,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            287 => 
            array (
                'id' => 1299,
                'breweryId' => 1373,
                'latitude' => 52.684200286865234,
                'longitude' => 1.4490000009536743,
                'accuracy' => 'APPROXIMATE',
            ),
            288 => 
            array (
                'id' => 1300,
                'breweryId' => 1374,
                'latitude' => 49.79199981689453,
                'longitude' => 9.914999961853027,
                'accuracy' => 'ROOFTOP',
            ),
            289 => 
            array (
                'id' => 1301,
                'breweryId' => 1375,
                'latitude' => 51.75230026245117,
                'longitude' => -1.2558000087738037,
                'accuracy' => 'APPROXIMATE',
            ),
            290 => 
            array (
                'id' => 1302,
                'breweryId' => 1377,
                'latitude' => 51.034000396728516,
                'longitude' => -114.08300018310547,
                'accuracy' => 'GEOMETRIC_CENTER',
            ),
            291 => 
            array (
                'id' => 1303,
                'breweryId' => 1378,
                'latitude' => 52.149600982666016,
                'longitude' => -2.5506999492645264,
                'accuracy' => 'APPROXIMATE',
            ),
            292 => 
            array (
                'id' => 1304,
                'breweryId' => 1379,
                'latitude' => 39.753501892089844,
                'longitude' => -104.99800109863281,
                'accuracy' => 'ROOFTOP',
            ),
            293 => 
            array (
                'id' => 1305,
                'breweryId' => 1380,
                'latitude' => 46.60210037231445,
                'longitude' => -120.50599670410156,
                'accuracy' => 'APPROXIMATE',
            ),
            294 => 
            array (
                'id' => 1306,
                'breweryId' => 1381,
                'latitude' => 49.2755012512207,
                'longitude' => -123.12100219726562,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            295 => 
            array (
                'id' => 1307,
                'breweryId' => 1382,
                'latitude' => 45.52349853515625,
                'longitude' => -122.6760025024414,
                'accuracy' => 'APPROXIMATE',
            ),
            296 => 
            array (
                'id' => 1308,
                'breweryId' => 1383,
                'latitude' => 39.98310089111328,
                'longitude' => -75.12740325927734,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            297 => 
            array (
                'id' => 1309,
                'breweryId' => 1391,
                'latitude' => 36.1510009765625,
                'longitude' => -86.78209686279297,
                'accuracy' => 'ROOFTOP',
            ),
            298 => 
            array (
                'id' => 1310,
                'breweryId' => 1387,
                'latitude' => 32.82099914550781,
                'longitude' => -96.78479766845703,
                'accuracy' => 'ROOFTOP',
            ),
            299 => 
            array (
                'id' => 1311,
                'breweryId' => 1390,
                'latitude' => 45.78609848022461,
                'longitude' => -108.49800109863281,
                'accuracy' => 'ROOFTOP',
            ),
            300 => 
            array (
                'id' => 1312,
                'breweryId' => 1389,
                'latitude' => 53.95709991455078,
                'longitude' => -1.090499997138977,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            301 => 
            array (
                'id' => 1313,
                'breweryId' => 1385,
                'latitude' => 51.46110153198242,
                'longitude' => -0.19660000503063202,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
            302 => 
            array (
                'id' => 1314,
                'breweryId' => 1388,
                'latitude' => 40.70000076293945,
                'longitude' => -76.17469787597656,
                'accuracy' => 'ROOFTOP',
            ),
            303 => 
            array (
                'id' => 1315,
                'breweryId' => 1386,
                'latitude' => 29.938600540161133,
                'longitude' => -90.07599639892578,
                'accuracy' => 'RANGE_INTERPOLATED',
            ),
        ));
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
    }
}