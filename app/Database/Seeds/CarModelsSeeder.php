<?php

namespace App\Database\Seeds;

use App\Models\CarsModel;
use CodeIgniter\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            0 =>
                [
                    0 => 'Acura',
                    1 => ' - 2.2CL',
                    2 => '2.2CL',
                ],
            1 =>
                [
                    0 => 'Acura',
                    1 => '2.3CL',
                    2 => '2.3CL',
                ],
            2 =>
                [
                    0 => 'Acura',
                    1 => '3.0CL',
                    2 => '3.0CL',
                ],
            3 =>
                [
                    0 => 'Acura',
                    1 => '3.2CL',
                    2 => '3.2CL',
                ],
            4 =>
                [
                    0 => 'Acura',
                    1 => 'ILX',
                    2 => 'ILX',
                ],
            5 =>
                [
                    0 => 'Acura',
                    1 => 'Integra',
                    2 => 'INTEG',
                ],
            6 =>
                [
                    0 => 'Acura',
                    1 => 'Legend',
                    2 => 'LEGEND',
                ],
            7 =>
                [
                    0 => 'Acura',
                    1 => 'MDX',
                    2 => 'MDX',
                ],
            8 =>
                [
                    0 => 'Acura',
                    1 => 'NSX',
                    2 => 'NSX',
                ],
            9 =>
                [
                    0 => 'Acura',
                    1 => 'RDX',
                    2 => 'RDX',
                ],
            10 =>
                [
                    0 => 'Acura',
                    1 => '3.5 RL',
                    2 => '3.5RL',
                ],
            11 =>
                [
                    0 => 'Acura',
                    1 => 'RL',
                    2 => 'RL',
                ],
            12 =>
                [
                    0 => 'Acura',
                    1 => 'RSX',
                    2 => 'RSX',
                ],
            13 =>
                [
                    0 => 'Acura',
                    1 => 'SLX',
                    2 => 'SLX',
                ],
            14 =>
                [
                    0 => 'Acura',
                    1 => '2.5TL',
                    2 => '2.5TL',
                ],
            15 =>
                [
                    0 => 'Acura',
                    1 => '3.2TL',
                    2 => '3.2TL',
                ],
            16 =>
                [
                    0 => 'Acura',
                    1 => 'TL',
                    2 => 'TL',
                ],
            17 =>
                [
                    0 => 'Acura',
                    1 => 'TSX',
                    2 => 'TSX',
                ],
            18 =>
                [
                    0 => 'Acura',
                    1 => 'Vigor',
                    2 => 'VIGOR',
                ],
            19 =>
                [
                    0 => 'Acura',
                    1 => 'ZDX',
                    2 => 'ZDX',
                ],
            20 =>
                [
                    0 => 'Acura',
                    1 => 'Other Acura Models',
                    2 => 'ACUOTH',
                ],
            21 =>
                [
                    0 => 'Alfa Romeo',
                    1 => '164',
                    2 => 'ALFA164',
                ],
            22 =>
                [
                    0 => 'Alfa Romeo',
                    1 => '8C Competizione',
                    2 => 'ALFA8C',
                ],
            23 =>
                [
                    0 => 'Alfa Romeo',
                    1 => 'GTV-6',
                    2 => 'ALFAGT',
                ],
            24 =>
                [
                    0 => 'Alfa Romeo',
                    1 => 'Milano',
                    2 => 'MIL',
                ],
            25 =>
                [
                    0 => 'Alfa Romeo',
                    1 => 'Spider',
                    2 => 'SPID',
                ],
            26 =>
                [
                    0 => 'Alfa Romeo',
                    1 => 'Other Alfa Romeo Models',
                    2 => 'ALFAOTH',
                ],
            27 =>
                [
                    0 => 'AMC',
                    1 => 'Alliance',
                    2 => 'AMCALLIAN',
                ],
            28 =>
                [
                    0 => 'AMC',
                    1 => 'Concord',
                    2 => 'CON',
                ],
            29 =>
                [
                    0 => 'AMC',
                    1 => 'Eagle',
                    2 => 'EAGLE',
                ],
            30 =>
                [
                    0 => 'AMC',
                    1 => 'Encore',
                    2 => 'AMCENC',
                ],
            31 =>
                [
                    0 => 'AMC',
                    1 => 'Spirit',
                    2 => 'AMCSPIRIT',
                ],
            32 =>
                [
                    0 => 'AMC',
                    1 => 'Other AMC Models',
                    2 => 'AMCOTH',
                ],
            33 =>
                [
                    0 => 'Aston Martin',
                    1 => 'DB7',
                    2 => 'DB7',
                ],
            34 =>
                [
                    0 => 'Aston Martin',
                    1 => 'DB9',
                    2 => 'DB9',
                ],
            35 =>
                [
                    0 => 'Aston Martin',
                    1 => 'DBS',
                    2 => 'DBS',
                ],
            36 =>
                [
                    0 => 'Aston Martin',
                    1 => 'Lagonda',
                    2 => 'LAGONDA',
                ],
            37 =>
                [
                    0 => 'Aston Martin',
                    1 => 'Rapide',
                    2 => 'RAPIDE',
                ],
            38 =>
                [
                    0 => 'Aston Martin',
                    1 => 'V12 Vantage',
                    2 => 'V12VANT',
                ],
            39 =>
                [
                    0 => 'Aston Martin',
                    1 => 'V8 Vantage',
                    2 => 'VANTAGE',
                ],
            40 =>
                [
                    0 => 'Aston Martin',
                    1 => 'Vanquish',
                    2 => 'VANQUISH',
                ],
            41 =>
                [
                    0 => 'Aston Martin',
                    1 => 'Virage',
                    2 => 'VIRAGE',
                ],
            42 =>
                [
                    0 => 'Aston Martin',
                    1 => 'Other Aston Martin Models',
                    2 => 'UNAVAILAST',
                ],
            43 =>
                [
                    0 => 'Audi',
                    1 => '100',
                    2 => 'AUDI100',
                ],
            44 =>
                [
                    0 => 'Audi',
                    1 => '200',
                    2 => 'AUDI200',
                ],
            45 =>
                [
                    0 => 'Audi',
                    1 => '4000',
                    2 => '4000',
                ],
            46 =>
                [
                    0 => 'Audi',
                    1 => '5000',
                    2 => '5000',
                ],
            47 =>
                [
                    0 => 'Audi',
                    1 => '80',
                    2 => '80',
                ],
            48 =>
                [
                    0 => 'Audi',
                    1 => '90',
                    2 => '90',
                ],
            49 =>
                [
                    0 => 'Audi',
                    1 => 'A3',
                    2 => 'A3',
                ],
            50 =>
                [
                    0 => 'Audi',
                    1 => 'A4',
                    2 => 'A4',
                ],
            51 =>
                [
                    0 => 'Audi',
                    1 => 'A5',
                    2 => 'A5',
                ],
            52 =>
                [
                    0 => 'Audi',
                    1 => 'A6',
                    2 => 'A6',
                ],
            53 =>
                [
                    0 => 'Audi',
                    1 => 'A7',
                    2 => 'A7',
                ],
            54 =>
                [
                    0 => 'Audi',
                    1 => 'A8',
                    2 => 'A8',
                ],
            55 =>
                [
                    0 => 'Audi',
                    1 => 'allroad',
                    2 => 'ALLRDQUA',
                ],
            56 =>
                [
                    0 => 'Audi',
                    1 => 'Cabriolet',
                    2 => 'AUDICABRI',
                ],
            57 =>
                [
                    0 => 'Audi',
                    1 => 'Coupe',
                    2 => 'AUDICOUPE',
                ],
            58 =>
                [
                    0 => 'Audi',
                    1 => 'Q3',
                    2 => 'Q3',
                ],
            59 =>
                [
                    0 => 'Audi',
                    1 => 'Q5',
                    2 => 'Q5',
                ],
            60 =>
                [
                    0 => 'Audi',
                    1 => 'Q7',
                    2 => 'Q7',
                ],
            61 =>
                [
                    0 => 'Audi',
                    1 => 'Quattro',
                    2 => 'QUATTR',
                ],
            62 =>
                [
                    0 => 'Audi',
                    1 => 'R8',
                    2 => 'R8',
                ],
            63 =>
                [
                    0 => 'Audi',
                    1 => 'RS 4',
                    2 => 'RS4',
                ],
            64 =>
                [
                    0 => 'Audi',
                    1 => 'RS 5',
                    2 => 'RS5',
                ],
            65 =>
                [
                    0 => 'Audi',
                    1 => 'RS 6',
                    2 => 'RS6',
                ],
            66 =>
                [
                    0 => 'Audi',
                    1 => 'S4',
                    2 => 'S4',
                ],
            67 =>
                [
                    0 => 'Audi',
                    1 => 'S5',
                    2 => 'S5',
                ],
            68 =>
                [
                    0 => 'Audi',
                    1 => 'S6',
                    2 => 'S6',
                ],
            69 =>
                [
                    0 => 'Audi',
                    1 => 'S7',
                    2 => 'S7',
                ],
            70 =>
                [
                    0 => 'Audi',
                    1 => 'S8',
                    2 => 'S8',
                ],
            71 =>
                [
                    0 => 'Audi',
                    1 => 'TT',
                    2 => 'TT',
                ],
            72 =>
                [
                    0 => 'Audi',
                    1 => 'TT RS',
                    2 => 'TTRS',
                ],
            73 =>
                [
                    0 => 'Audi',
                    1 => 'TTS',
                    2 => 'TTS',
                ],
            74 =>
                [
                    0 => 'Audi',
                    1 => 'V8 Quattro',
                    2 => 'V8',
                ],
            75 =>
                [
                    0 => 'Audi',
                    1 => 'Other Audi Models',
                    2 => 'AUDOTH',
                ],
            76 =>
                [
                    0 => 'Avanti',
                    1 => 'Convertible',
                    2 => 'CONVERT',
                ],
            77 =>
                [
                    0 => 'Avanti',
                    1 => 'Coupe',
                    2 => 'COUPEAVANT',
                ],
            78 =>
                [
                    0 => 'Avanti',
                    1 => 'Sedan',
                    2 => 'SEDAN',
                ],
            79 =>
                [
                    0 => 'Avanti',
                    1 => 'Other Avanti Models',
                    2 => 'UNAVAILAVA',
                ],
            80 =>
                [
                    0 => 'Bentley',
                    1 => 'Arnage',
                    2 => 'ARNAGE',
                ],
            81 =>
                [
                    0 => 'Bentley',
                    1 => 'Azure',
                    2 => 'AZURE',
                ],
            82 =>
                [
                    0 => 'Bentley',
                    1 => 'Brooklands',
                    2 => 'BROOKLANDS',
                ],
            83 =>
                [
                    0 => 'Bentley',
                    1 => 'Continental',
                    2 => 'BENCONT',
                ],
            84 =>
                [
                    0 => 'Bentley',
                    1 => 'Corniche',
                    2 => 'CORNICHE',
                ],
            85 =>
                [
                    0 => 'Bentley',
                    1 => 'Eight',
                    2 => 'BENEIGHT',
                ],
            86 =>
                [
                    0 => 'Bentley',
                    1 => 'Mulsanne',
                    2 => 'BENMUL',
                ],
            87 =>
                [
                    0 => 'Bentley',
                    1 => 'Turbo R',
                    2 => 'BENTURBO',
                ],
            88 =>
                [
                    0 => 'Bentley',
                    1 => 'Other Bentley Models',
                    2 => 'UNAVAILBEN',
                ],
            89 =>
                [
                    0 => 'BMW',
                    1 => '1 Series (3)',
                    2 => '1_SERIES',
                ],
            90 =>
                [
                    0 => 'BMW',
                    1 => ' - 128i',
                    2 => '128I',
                ],
            91 =>
                [
                    0 => 'BMW',
                    1 => ' - 135i',
                    2 => '135I',
                ],
            92 =>
                [
                    0 => 'BMW',
                    1 => ' - 135is',
                    2 => '135IS',
                ],
            93 =>
                [
                    0 => 'BMW',
                    1 => '3 Series (29)',
                    2 => '3_SERIES',
                ],
            94 =>
                [
                    0 => 'BMW',
                    1 => ' - 318i',
                    2 => '318I',
                ],
            95 =>
                [
                    0 => 'BMW',
                    1 => ' - 318iC',
                    2 => '318IC',
                ],
            96 =>
                [
                    0 => 'BMW',
                    1 => ' - 318iS',
                    2 => '318IS',
                ],
            97 =>
                [
                    0 => 'BMW',
                    1 => ' - 318ti',
                    2 => '318TI',
                ],
            98 =>
                [
                    0 => 'BMW',
                    1 => ' - 320i',
                    2 => '320I',
                ],
            99 =>
                [
                    0 => 'BMW',
                    1 => ' - 323ci',
                    2 => '323CI',
                ],
            100 =>
                [
                    0 => 'BMW',
                    1 => ' - 323i',
                    2 => '323I',
                ],
            101 =>
                [
                    0 => 'BMW',
                    1 => ' - 323is',
                    2 => '323IS',
                ],
            102 =>
                [
                    0 => 'BMW',
                    1 => ' - 323iT',
                    2 => '323IT',
                ],
            103 =>
                [
                    0 => 'BMW',
                    1 => ' - 325Ci',
                    2 => '325CI',
                ],
            104 =>
                [
                    0 => 'BMW',
                    1 => ' - 325e',
                    2 => '325E',
                ],
            105 =>
                [
                    0 => 'BMW',
                    1 => ' - 325es',
                    2 => '325ES',
                ],
            106 =>
                [
                    0 => 'BMW',
                    1 => ' - 325i',
                    2 => '325I',
                ],
            107 =>
                [
                    0 => 'BMW',
                    1 => ' - 325is',
                    2 => '325IS',
                ],
            108 =>
                [
                    0 => 'BMW',
                    1 => ' - 325iX',
                    2 => '325IX',
                ],
            109 =>
                [
                    0 => 'BMW',
                    1 => ' - 325xi',
                    2 => '325XI',
                ],
            110 =>
                [
                    0 => 'BMW',
                    1 => ' - 328Ci',
                    2 => '328CI',
                ],
            111 =>
                [
                    0 => 'BMW',
                    1 => ' - 328i',
                    2 => '328I',
                ],
            112 =>
                [
                    0 => 'BMW',
                    1 => ' - 328iS',
                    2 => '328IS',
                ],
            113 =>
                [
                    0 => 'BMW',
                    1 => ' - 328xi',
                    2 => '328XI',
                ],
            114 =>
                [
                    0 => 'BMW',
                    1 => ' - 330Ci',
                    2 => '330CI',
                ],
            115 =>
                [
                    0 => 'BMW',
                    1 => ' - 330i',
                    2 => '330I',
                ],
            116 =>
                [
                    0 => 'BMW',
                    1 => ' - 330xi',
                    2 => '330XI',
                ],
            117 =>
                [
                    0 => 'BMW',
                    1 => ' - 335d',
                    2 => '335D',
                ],
            118 =>
                [
                    0 => 'BMW',
                    1 => ' - 335i',
                    2 => '335I',
                ],
            119 =>
                [
                    0 => 'BMW',
                    1 => ' - 335is',
                    2 => '335IS',
                ],
            120 =>
                [
                    0 => 'BMW',
                    1 => ' - 335xi',
                    2 => '335XI',
                ],
            121 =>
                [
                    0 => 'BMW',
                    1 => ' - ActiveHybrid 3',
                    2 => 'ACTIVE3',
                ],
            122 =>
                [
                    0 => 'BMW',
                    1 => ' - 325',
                    2 => 'BMW325',
                ],
            123 =>
                [
                    0 => 'BMW',
                    1 => '5 Series (19)',
                    2 => '5_SERIES',
                ],
            124 =>
                [
                    0 => 'BMW',
                    1 => ' - 524td',
                    2 => '524TD',
                ],
            125 =>
                [
                    0 => 'BMW',
                    1 => ' - 525i',
                    2 => '525I',
                ],
            126 =>
                [
                    0 => 'BMW',
                    1 => ' - 525xi',
                    2 => '525XI',
                ],
            127 =>
                [
                    0 => 'BMW',
                    1 => ' - 528e',
                    2 => '528E',
                ],
            128 =>
                [
                    0 => 'BMW',
                    1 => ' - 528i',
                    2 => '528I',
                ],
            129 =>
                [
                    0 => 'BMW',
                    1 => ' - 528iT',
                    2 => '528IT',
                ],
            130 =>
                [
                    0 => 'BMW',
                    1 => ' - 528xi',
                    2 => '528XI',
                ],
            131 =>
                [
                    0 => 'BMW',
                    1 => ' - 530i',
                    2 => '530I',
                ],
            132 =>
                [
                    0 => 'BMW',
                    1 => ' - 530iT',
                    2 => '530IT',
                ],
            133 =>
                [
                    0 => 'BMW',
                    1 => ' - 530xi',
                    2 => '530XI',
                ],
            134 =>
                [
                    0 => 'BMW',
                    1 => ' - 533i',
                    2 => '533I',
                ],
            135 =>
                [
                    0 => 'BMW',
                    1 => ' - 535i',
                    2 => '535I',
                ],
            136 =>
                [
                    0 => 'BMW',
                    1 => ' - 535i Gran Turismo',
                    2 => '535IGT',
                ],
            137 =>
                [
                    0 => 'BMW',
                    1 => ' - 535xi',
                    2 => '535XI',
                ],
            138 =>
                [
                    0 => 'BMW',
                    1 => ' - 540i',
                    2 => '540I',
                ],
            139 =>
                [
                    0 => 'BMW',
                    1 => ' - 545i',
                    2 => '545I',
                ],
            140 =>
                [
                    0 => 'BMW',
                    1 => ' - 550i',
                    2 => '550I',
                ],
            141 =>
                [
                    0 => 'BMW',
                    1 => ' - 550i Gran Turismo',
                    2 => '550IGT',
                ],
            142 =>
                [
                    0 => 'BMW',
                    1 => ' - ActiveHybrid 5',
                    2 => 'ACTIVE5',
                ],
            143 =>
                [
                    0 => 'BMW',
                    1 => '6 Series (8)',
                    2 => '6_SERIES',
                ],
            144 =>
                [
                    0 => 'BMW',
                    1 => ' - 633CSi',
                    2 => '633CSI',
                ],
            145 =>
                [
                    0 => 'BMW',
                    1 => ' - 635CSi',
                    2 => '635CSI',
                ],
            146 =>
                [
                    0 => 'BMW',
                    1 => ' - 640i',
                    2 => '640I',
                ],
            147 =>
                [
                    0 => 'BMW',
                    1 => ' - 640i Gran Coupe',
                    2 => '640IGC',
                ],
            148 =>
                [
                    0 => 'BMW',
                    1 => ' - 645Ci',
                    2 => '645CI',
                ],
            149 =>
                [
                    0 => 'BMW',
                    1 => ' - 650i',
                    2 => '650I',
                ],
            150 =>
                [
                    0 => 'BMW',
                    1 => ' - 650i Gran Coupe',
                    2 => '650IGC',
                ],
            151 =>
                [
                    0 => 'BMW',
                    1 => ' - L6',
                    2 => 'L6',
                ],
            152 =>
                [
                    0 => 'BMW',
                    1 => '7 Series (15)',
                    2 => '7_SERIES',
                ],
            153 =>
                [
                    0 => 'BMW',
                    1 => ' - 733i',
                    2 => '733I',
                ],
            154 =>
                [
                    0 => 'BMW',
                    1 => ' - 735i',
                    2 => '735I',
                ],
            155 =>
                [
                    0 => 'BMW',
                    1 => ' - 735iL',
                    2 => '735IL',
                ],
            156 =>
                [
                    0 => 'BMW',
                    1 => ' - 740i',
                    2 => '740I',
                ],
            157 =>
                [
                    0 => 'BMW',
                    1 => ' - 740iL',
                    2 => '740IL',
                ],
            158 =>
                [
                    0 => 'BMW',
                    1 => ' - 740Li',
                    2 => '740LI',
                ],
            159 =>
                [
                    0 => 'BMW',
                    1 => ' - 745i',
                    2 => '745I',
                ],
            160 =>
                [
                    0 => 'BMW',
                    1 => ' - 745Li',
                    2 => '745LI',
                ],
            161 =>
                [
                    0 => 'BMW',
                    1 => ' - 750i',
                    2 => '750I',
                ],
            162 =>
                [
                    0 => 'BMW',
                    1 => ' - 750iL',
                    2 => '750IL',
                ],
            163 =>
                [
                    0 => 'BMW',
                    1 => ' - 750Li',
                    2 => '750LI',
                ],
            164 =>
                [
                    0 => 'BMW',
                    1 => ' - 760i',
                    2 => '760I',
                ],
            165 =>
                [
                    0 => 'BMW',
                    1 => ' - 760Li',
                    2 => '760LI',
                ],
            166 =>
                [
                    0 => 'BMW',
                    1 => ' - ActiveHybrid 7',
                    2 => 'ACTIVE7',
                ],
            167 =>
                [
                    0 => 'BMW',
                    1 => ' - Alpina B7',
                    2 => 'ALPINAB7',
                ],
            168 =>
                [
                    0 => 'BMW',
                    1 => '8 Series (4)',
                    2 => '8_SERIES',
                ],
            169 =>
                [
                    0 => 'BMW',
                    1 => ' - 840Ci',
                    2 => '840CI',
                ],
            170 =>
                [
                    0 => 'BMW',
                    1 => ' - 850Ci',
                    2 => '850CI',
                ],
            171 =>
                [
                    0 => 'BMW',
                    1 => ' - 850CSi',
                    2 => '850CSI',
                ],
            172 =>
                [
                    0 => 'BMW',
                    1 => ' - 850i',
                    2 => '850I',
                ],
            173 =>
                [
                    0 => 'BMW',
                    1 => 'L Series (1)',
                    2 => 'L_SERIES',
                ],
            174 =>
                [
                    0 => 'BMW',
                    1 => ' - L7',
                    2 => 'L7',
                ],
            175 =>
                [
                    0 => 'BMW',
                    1 => 'M Series (8)',
                    2 => 'M_SERIES',
                ],
            176 =>
                [
                    0 => 'BMW',
                    1 => ' - 1 Series M',
                    2 => '1SERIESM',
                ],
            177 =>
                [
                    0 => 'BMW',
                    1 => ' - M Coupe',
                    2 => 'BMWMCOUPE',
                ],
            178 =>
                [
                    0 => 'BMW',
                    1 => ' - M Roadster',
                    2 => 'BMWROAD',
                ],
            179 =>
                [
                    0 => 'BMW',
                    1 => ' - M3',
                    2 => 'M3',
                ],
            180 =>
                [
                    0 => 'BMW',
                    1 => ' - M5',
                    2 => 'M5',
                ],
            181 =>
                [
                    0 => 'BMW',
                    1 => ' - M6',
                    2 => 'M6',
                ],
            182 =>
                [
                    0 => 'BMW',
                    1 => ' - X5 M',
                    2 => 'X5M',
                ],
            183 =>
                [
                    0 => 'BMW',
                    1 => ' - X6 M',
                    2 => 'X6M',
                ],
            184 =>
                [
                    0 => 'BMW',
                    1 => 'X Series (5)',
                    2 => 'X_SERIES',
                ],
            185 =>
                [
                    0 => 'BMW',
                    1 => ' - ActiveHybrid X6',
                    2 => 'ACTIVEX6',
                ],
            186 =>
                [
                    0 => 'BMW',
                    1 => ' - X1',
                    2 => 'X1',
                ],
            187 =>
                [
                    0 => 'BMW',
                    1 => ' - X3',
                    2 => 'X3',
                ],
            188 =>
                [
                    0 => 'BMW',
                    1 => ' - X5',
                    2 => 'X5',
                ],
            189 =>
                [
                    0 => 'BMW',
                    1 => ' - X6',
                    2 => 'X6',
                ],
            190 =>
                [
                    0 => 'BMW',
                    1 => 'Z Series (3)',
                    2 => 'Z_SERIES',
                ],
            191 =>
                [
                    0 => 'BMW',
                    1 => ' - Z3',
                    2 => 'Z3',
                ],
            192 =>
                [
                    0 => 'BMW',
                    1 => ' - Z4',
                    2 => 'Z4',
                ],
            193 =>
                [
                    0 => 'BMW',
                    1 => ' - Z8',
                    2 => 'Z8',
                ],
            194 =>
                [
                    0 => 'BMW',
                    1 => 'Other BMW Models',
                    2 => 'BMWOTH',
                ],
            195 =>
                [
                    0 => 'Buick',
                    1 => 'Century',
                    2 => 'CENT',
                ],
            196 =>
                [
                    0 => 'Buick',
                    1 => 'Electra',
                    2 => 'ELEC',
                ],
            197 =>
                [
                    0 => 'Buick',
                    1 => 'Enclave',
                    2 => 'ENCLAVE',
                ],
            198 =>
                [
                    0 => 'Buick',
                    1 => 'Encore',
                    2 => 'BUIENC',
                ],
            199 =>
                [
                    0 => 'Buick',
                    1 => 'LaCrosse',
                    2 => 'LACROSSE',
                ],
            200 =>
                [
                    0 => 'Buick',
                    1 => 'Le Sabre',
                    2 => 'LESA',
                ],
            201 =>
                [
                    0 => 'Buick',
                    1 => 'Lucerne',
                    2 => 'LUCERNE',
                ],
            202 =>
                [
                    0 => 'Buick',
                    1 => 'Park Avenue',
                    2 => 'PARK',
                ],
            203 =>
                [
                    0 => 'Buick',
                    1 => 'Rainier',
                    2 => 'RAINIER',
                ],
            204 =>
                [
                    0 => 'Buick',
                    1 => 'Reatta',
                    2 => 'REATTA',
                ],
            205 =>
                [
                    0 => 'Buick',
                    1 => 'Regal',
                    2 => 'REG',
                ],
            206 =>
                [
                    0 => 'Buick',
                    1 => 'Rendezvous',
                    2 => 'RENDEZVOUS',
                ],
            207 =>
                [
                    0 => 'Buick',
                    1 => 'Riviera',
                    2 => 'RIV',
                ],
            208 =>
                [
                    0 => 'Buick',
                    1 => 'Roadmaster',
                    2 => 'BUICKROAD',
                ],
            209 =>
                [
                    0 => 'Buick',
                    1 => 'Skyhawk',
                    2 => 'SKYH',
                ],
            210 =>
                [
                    0 => 'Buick',
                    1 => 'Skylark',
                    2 => 'SKYL',
                ],
            211 =>
                [
                    0 => 'Buick',
                    1 => 'Somerset',
                    2 => 'SOMER',
                ],
            212 =>
                [
                    0 => 'Buick',
                    1 => 'Terraza',
                    2 => 'TERRAZA',
                ],
            213 =>
                [
                    0 => 'Buick',
                    1 => 'Verano',
                    2 => 'BUVERANO',
                ],
            214 =>
                [
                    0 => 'Buick',
                    1 => 'Other Buick Models',
                    2 => 'BUOTH',
                ],
            215 =>
                [
                    0 => 'Cadillac',
                    1 => 'Allante',
                    2 => 'ALLANT',
                ],
            216 =>
                [
                    0 => 'Cadillac',
                    1 => 'ATS',
                    2 => 'ATS',
                ],
            217 =>
                [
                    0 => 'Cadillac',
                    1 => 'Brougham',
                    2 => 'BROUGH',
                ],
            218 =>
                [
                    0 => 'Cadillac',
                    1 => 'Catera',
                    2 => 'CATERA',
                ],
            219 =>
                [
                    0 => 'Cadillac',
                    1 => 'Cimarron',
                    2 => 'CIMA',
                ],
            220 =>
                [
                    0 => 'Cadillac',
                    1 => 'CTS',
                    2 => 'CTS',
                ],
            221 =>
                [
                    0 => 'Cadillac',
                    1 => 'De Ville',
                    2 => 'DEV',
                ],
            222 =>
                [
                    0 => 'Cadillac',
                    1 => 'DTS',
                    2 => 'DTS',
                ],
            223 =>
                [
                    0 => 'Cadillac',
                    1 => 'Eldorado',
                    2 => 'ELDO',
                ],
            224 =>
                [
                    0 => 'Cadillac',
                    1 => 'Escalade',
                    2 => 'ESCALA',
                ],
            225 =>
                [
                    0 => 'Cadillac',
                    1 => 'Escalade ESV',
                    2 => 'ESCALAESV',
                ],
            226 =>
                [
                    0 => 'Cadillac',
                    1 => 'Escalade EXT',
                    2 => 'EXT',
                ],
            227 =>
                [
                    0 => 'Cadillac',
                    1 => 'Fleetwood',
                    2 => 'FLEE',
                ],
            228 =>
                [
                    0 => 'Cadillac',
                    1 => 'Seville',
                    2 => 'SEV',
                ],
            229 =>
                [
                    0 => 'Cadillac',
                    1 => 'SRX',
                    2 => 'SRX',
                ],
            230 =>
                [
                    0 => 'Cadillac',
                    1 => 'STS',
                    2 => 'STS',
                ],
            231 =>
                [
                    0 => 'Cadillac',
                    1 => 'XLR',
                    2 => 'XLR',
                ],
            232 =>
                [
                    0 => 'Cadillac',
                    1 => 'XTS',
                    2 => 'XTS',
                ],
            233 =>
                [
                    0 => 'Cadillac',
                    1 => 'Other Cadillac Models',
                    2 => 'CADOTH',
                ],
            234 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Astro',
                    2 => 'ASTRO',
                ],
            235 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Avalanche',
                    2 => 'AVALNCH',
                ],
            236 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Aveo',
                    2 => 'AVEO',
                ],
            237 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Aveo5',
                    2 => 'AVEO5',
                ],
            238 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Beretta',
                    2 => 'BERETT',
                ],
            239 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Blazer',
                    2 => 'BLAZER',
                ],
            240 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Camaro',
                    2 => 'CAM',
                ],
            241 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Caprice',
                    2 => 'CAP',
                ],
            242 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Captiva Sport',
                    2 => 'CHECAPS',
                ],
            243 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Cavalier',
                    2 => 'CAV',
                ],
            244 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Celebrity',
                    2 => 'CELE',
                ],
            245 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Chevette',
                    2 => 'CHEVETTE',
                ],
            246 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Citation',
                    2 => 'CITATION',
                ],
            247 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Cobalt',
                    2 => 'COBALT',
                ],
            248 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Colorado',
                    2 => 'COLORADO',
                ],
            249 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Corsica',
                    2 => 'CORSI',
                ],
            250 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Corvette',
                    2 => 'CORV',
                ],
            251 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Cruze',
                    2 => 'CRUZE',
                ],
            252 =>
                [
                    0 => 'Chevrolet',
                    1 => 'El Camino',
                    2 => 'ELCAM',
                ],
            253 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Equinox',
                    2 => 'EQUINOX',
                ],
            254 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Express Van',
                    2 => 'G15EXP',
                ],
            255 =>
                [
                    0 => 'Chevrolet',
                    1 => 'G Van',
                    2 => 'G10',
                ],
            256 =>
                [
                    0 => 'Chevrolet',
                    1 => 'HHR',
                    2 => 'HHR',
                ],
            257 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Impala',
                    2 => 'CHEVIMP',
                ],
            258 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Kodiak C4500',
                    2 => 'KODC4500',
                ],
            259 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Lumina',
                    2 => 'LUMINA',
                ],
            260 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Lumina APV',
                    2 => 'LAPV',
                ],
            261 =>
                [
                    0 => 'Chevrolet',
                    1 => 'LUV',
                    2 => 'LUV',
                ],
            262 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Malibu',
                    2 => 'MALI',
                ],
            263 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Metro',
                    2 => 'CHVMETR',
                ],
            264 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Monte Carlo',
                    2 => 'CHEVMONT',
                ],
            265 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Nova',
                    2 => 'NOVA',
                ],
            266 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Prizm',
                    2 => 'CHEVPRIZM',
                ],
            267 =>
                [
                    0 => 'Chevrolet',
                    1 => 'S10 Blazer',
                    2 => 'CHVST',
                ],
            268 =>
                [
                    0 => 'Chevrolet',
                    1 => 'S10 Pickup',
                    2 => 'S10PICKUP',
                ],
            269 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Silverado and other C/K1500',
                    2 => 'CHEV150',
                ],
            270 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Silverado and other C/K2500',
                    2 => 'CHEVC25',
                ],
            271 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Silverado and other C/K3500',
                    2 => 'CH3500PU',
                ],
            272 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Sonic',
                    2 => 'SONIC',
                ],
            273 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Spark',
                    2 => 'SPARK',
                ],
            274 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Spectrum',
                    2 => 'CHEVSPEC',
                ],
            275 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Sprint',
                    2 => 'CHSPRINT',
                ],
            276 =>
                [
                    0 => 'Chevrolet',
                    1 => 'SSR',
                    2 => 'SSR',
                ],
            277 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Suburban',
                    2 => 'CHEVSUB',
                ],
            278 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Tahoe',
                    2 => 'TAHOE',
                ],
            279 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Tracker',
                    2 => 'TRACKE',
                ],
            280 =>
                [
                    0 => 'Chevrolet',
                    1 => 'TrailBlazer',
                    2 => 'TRAILBLZ',
                ],
            281 =>
                [
                    0 => 'Chevrolet',
                    1 => 'TrailBlazer EXT',
                    2 => 'TRAILBZEXT',
                ],
            282 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Traverse',
                    2 => 'TRAVERSE',
                ],
            283 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Uplander',
                    2 => 'UPLANDER',
                ],
            284 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Venture',
                    2 => 'VENTUR',
                ],
            285 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Volt',
                    2 => 'VOLT',
                ],
            286 =>
                [
                    0 => 'Chevrolet',
                    1 => 'Other Chevrolet Models',
                    2 => 'CHEOTH',
                ],
            287 =>
                [
                    0 => 'Chrysler',
                    1 => '200',
                    2 => 'CHRYS200',
                ],
            288 =>
                [
                    0 => 'Chrysler',
                    1 => '300',
                    2 => '300',
                ],
            289 =>
                [
                    0 => 'Chrysler',
                    1 => '300M',
                    2 => 'CHRY300',
                ],
            290 =>
                [
                    0 => 'Chrysler',
                    1 => 'Aspen',
                    2 => 'ASPEN',
                ],
            291 =>
                [
                    0 => 'Chrysler',
                    1 => 'Caravan',
                    2 => 'CARAVAN',
                ],
            292 =>
                [
                    0 => 'Chrysler',
                    1 => 'Cirrus',
                    2 => 'CIRRUS',
                ],
            293 =>
                [
                    0 => 'Chrysler',
                    1 => 'Concorde',
                    2 => 'CONC',
                ],
            294 =>
                [
                    0 => 'Chrysler',
                    1 => 'Conquest',
                    2 => 'CHRYCONQ',
                ],
            295 =>
                [
                    0 => 'Chrysler',
                    1 => 'Cordoba',
                    2 => 'CORDOBA',
                ],
            296 =>
                [
                    0 => 'Chrysler',
                    1 => 'Crossfire',
                    2 => 'CROSSFIRE',
                ],
            297 =>
                [
                    0 => 'Chrysler',
                    1 => 'E Class',
                    2 => 'ECLASS',
                ],
            298 =>
                [
                    0 => 'Chrysler',
                    1 => 'Fifth Avenue',
                    2 => 'FIFTH',
                ],
            299 =>
                [
                    0 => 'Chrysler',
                    1 => 'Grand Voyager',
                    2 => 'CHRYGRANDV',
                ],
            300 =>
                [
                    0 => 'Chrysler',
                    1 => 'Imperial',
                    2 => 'IMPE',
                ],
            301 =>
                [
                    0 => 'Chrysler',
                    1 => 'Intrepid',
                    2 => 'INTREPID',
                ],
            302 =>
                [
                    0 => 'Chrysler',
                    1 => 'Laser',
                    2 => 'CHRYLAS',
                ],
            303 =>
                [
                    0 => 'Chrysler',
                    1 => 'LeBaron',
                    2 => 'LEBA',
                ],
            304 =>
                [
                    0 => 'Chrysler',
                    1 => 'LHS',
                    2 => 'LHS',
                ],
            305 =>
                [
                    0 => 'Chrysler',
                    1 => 'Neon',
                    2 => 'CHRYNEON',
                ],
            306 =>
                [
                    0 => 'Chrysler',
                    1 => 'New Yorker',
                    2 => 'NY',
                ],
            307 =>
                [
                    0 => 'Chrysler',
                    1 => 'Newport',
                    2 => 'NEWPORT',
                ],
            308 =>
                [
                    0 => 'Chrysler',
                    1 => 'Pacifica',
                    2 => 'PACIFICA',
                ],
            309 =>
                [
                    0 => 'Chrysler',
                    1 => 'Prowler',
                    2 => 'CHPROWLE',
                ],
            310 =>
                [
                    0 => 'Chrysler',
                    1 => 'PT Cruiser',
                    2 => 'PTCRUIS',
                ],
            311 =>
                [
                    0 => 'Chrysler',
                    1 => 'Sebring',
                    2 => 'CHRYSEB',
                ],
            312 =>
                [
                    0 => 'Chrysler',
                    1 => 'TC by Maserati',
                    2 => 'CHRYTC',
                ],
            313 =>
                [
                    0 => 'Chrysler',
                    1 => 'Town & Country',
                    2 => 'TANDC',
                ],
            314 =>
                [
                    0 => 'Chrysler',
                    1 => 'Voyager',
                    2 => 'VOYAGER',
                ],
            315 =>
                [
                    0 => 'Chrysler',
                    1 => 'Other Chrysler Models',
                    2 => 'CHOTH',
                ],
            316 =>
                [
                    0 => 'Daewoo',
                    1 => 'Lanos',
                    2 => 'LANOS',
                ],
            317 =>
                [
                    0 => 'Daewoo',
                    1 => 'Leganza',
                    2 => 'LEGANZA',
                ],
            318 =>
                [
                    0 => 'Daewoo',
                    1 => 'Nubira',
                    2 => 'NUBIRA',
                ],
            319 =>
                [
                    0 => 'Daewoo',
                    1 => 'Other Daewoo Models',
                    2 => 'DAEOTH',
                ],
            320 =>
                [
                    0 => 'Daihatsu',
                    1 => 'Charade',
                    2 => 'CHAR',
                ],
            321 =>
                [
                    0 => 'Daihatsu',
                    1 => 'Rocky',
                    2 => 'ROCKY',
                ],
            322 =>
                [
                    0 => 'Daihatsu',
                    1 => 'Other Daihatsu Models',
                    2 => 'DAIHOTH',
                ],
            323 =>
                [
                    0 => 'Datsun',
                    1 => '200SX',
                    2 => 'DAT200SX',
                ],
            324 =>
                [
                    0 => 'Datsun',
                    1 => '210',
                    2 => 'DAT210',
                ],
            325 =>
                [
                    0 => 'Datsun',
                    1 => '280ZX',
                    2 => '280Z',
                ],
            326 =>
                [
                    0 => 'Datsun',
                    1 => '300ZX',
                    2 => '300ZX',
                ],
            327 =>
                [
                    0 => 'Datsun',
                    1 => '310',
                    2 => '310',
                ],
            328 =>
                [
                    0 => 'Datsun',
                    1 => '510',
                    2 => '510',
                ],
            329 =>
                [
                    0 => 'Datsun',
                    1 => '720',
                    2 => '720',
                ],
            330 =>
                [
                    0 => 'Datsun',
                    1 => '810',
                    2 => '810',
                ],
            331 =>
                [
                    0 => 'Datsun',
                    1 => 'Maxima',
                    2 => 'DATMAX',
                ],
            332 =>
                [
                    0 => 'Datsun',
                    1 => 'Pickup',
                    2 => 'DATPU',
                ],
            333 =>
                [
                    0 => 'Datsun',
                    1 => 'Pulsar',
                    2 => 'PUL',
                ],
            334 =>
                [
                    0 => 'Datsun',
                    1 => 'Sentra',
                    2 => 'DATSENT',
                ],
            335 =>
                [
                    0 => 'Datsun',
                    1 => 'Stanza',
                    2 => 'STAN',
                ],
            336 =>
                [
                    0 => 'Datsun',
                    1 => 'Other Datsun Models',
                    2 => 'DATOTH',
                ],
            337 =>
                [
                    0 => 'DeLorean',
                    1 => 'DMC-12',
                    2 => 'DMC12',
                ],
            338 =>
                [
                    0 => 'Dodge',
                    1 => '400',
                    2 => '400',
                ],
            339 =>
                [
                    0 => 'Dodge',
                    1 => '600',
                    2 => 'DOD600',
                ],
            340 =>
                [
                    0 => 'Dodge',
                    1 => 'Aries',
                    2 => 'ARI',
                ],
            341 =>
                [
                    0 => 'Dodge',
                    1 => 'Avenger',
                    2 => 'AVENGR',
                ],
            342 =>
                [
                    0 => 'Dodge',
                    1 => 'Caliber',
                    2 => 'CALIBER',
                ],
            343 =>
                [
                    0 => 'Dodge',
                    1 => 'Caravan',
                    2 => 'DODCARA',
                ],
            344 =>
                [
                    0 => 'Dodge',
                    1 => 'Challenger',
                    2 => 'CHALLENGER',
                ],
            345 =>
                [
                    0 => 'Dodge',
                    1 => 'Charger',
                    2 => 'DODCHAR',
                ],
            346 =>
                [
                    0 => 'Dodge',
                    1 => 'Colt',
                    2 => 'DODCOLT',
                ],
            347 =>
                [
                    0 => 'Dodge',
                    1 => 'Conquest',
                    2 => 'DODCONQ',
                ],
            348 =>
                [
                    0 => 'Dodge',
                    1 => 'D/W Truck',
                    2 => 'DODDW',
                ],
            349 =>
                [
                    0 => 'Dodge',
                    1 => 'Dakota',
                    2 => 'DAKOTA',
                ],
            350 =>
                [
                    0 => 'Dodge',
                    1 => 'Dart',
                    2 => 'DODDART',
                ],
            351 =>
                [
                    0 => 'Dodge',
                    1 => 'Daytona',
                    2 => 'DAY',
                ],
            352 =>
                [
                    0 => 'Dodge',
                    1 => 'Diplomat',
                    2 => 'DIPLOMA',
                ],
            353 =>
                [
                    0 => 'Dodge',
                    1 => 'Durango',
                    2 => 'DURANG',
                ],
            354 =>
                [
                    0 => 'Dodge',
                    1 => 'Dynasty',
                    2 => 'DODDYNA',
                ],
            355 =>
                [
                    0 => 'Dodge',
                    1 => 'Grand Caravan',
                    2 => 'GRANDCARAV',
                ],
            356 =>
                [
                    0 => 'Dodge',
                    1 => 'Intrepid',
                    2 => 'INTRE',
                ],
            357 =>
                [
                    0 => 'Dodge',
                    1 => 'Journey',
                    2 => 'JOURNEY',
                ],
            358 =>
                [
                    0 => 'Dodge',
                    1 => 'Lancer',
                    2 => 'LANCERDODG',
                ],
            359 =>
                [
                    0 => 'Dodge',
                    1 => 'Magnum',
                    2 => 'MAGNUM',
                ],
            360 =>
                [
                    0 => 'Dodge',
                    1 => 'Mirada',
                    2 => 'MIRADA',
                ],
            361 =>
                [
                    0 => 'Dodge',
                    1 => 'Monaco',
                    2 => 'MONACO',
                ],
            362 =>
                [
                    0 => 'Dodge',
                    1 => 'Neon',
                    2 => 'DODNEON',
                ],
            363 =>
                [
                    0 => 'Dodge',
                    1 => 'Nitro',
                    2 => 'NITRO',
                ],
            364 =>
                [
                    0 => 'Dodge',
                    1 => 'Omni',
                    2 => 'OMNI',
                ],
            365 =>
                [
                    0 => 'Dodge',
                    1 => 'Raider',
                    2 => 'RAIDER',
                ],
            366 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram 1500 Truck',
                    2 => 'RAM1504WD',
                ],
            367 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram 2500 Truck',
                    2 => 'RAM25002WD',
                ],
            368 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram 3500 Truck',
                    2 => 'RAM3502WD',
                ],
            369 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram 4500 Truck',
                    2 => 'RAM4500',
                ],
            370 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram 50 Truck',
                    2 => 'DODD50',
                ],
            371 =>
                [
                    0 => 'Dodge',
                    1 => 'RAM C/V',
                    2 => 'CV',
                ],
            372 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram SRT-10',
                    2 => 'RAMSRT10',
                ],
            373 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram Van',
                    2 => 'RAMVANV8',
                ],
            374 =>
                [
                    0 => 'Dodge',
                    1 => 'Ram Wagon',
                    2 => 'RAMWAGON',
                ],
            375 =>
                [
                    0 => 'Dodge',
                    1 => 'Ramcharger',
                    2 => 'RAMCGR',
                ],
            376 =>
                [
                    0 => 'Dodge',
                    1 => 'Rampage',
                    2 => 'RAMPAGE',
                ],
            377 =>
                [
                    0 => 'Dodge',
                    1 => 'Shadow',
                    2 => 'DODSHAD',
                ],
            378 =>
                [
                    0 => 'Dodge',
                    1 => 'Spirit',
                    2 => 'DODSPIR',
                ],
            379 =>
                [
                    0 => 'Dodge',
                    1 => 'Sprinter',
                    2 => 'SPRINTER',
                ],
            380 =>
                [
                    0 => 'Dodge',
                    1 => 'SRT-4',
                    2 => 'SRT4',
                ],
            381 =>
                [
                    0 => 'Dodge',
                    1 => 'St. Regis',
                    2 => 'STREGIS',
                ],
            382 =>
                [
                    0 => 'Dodge',
                    1 => 'Stealth',
                    2 => 'STEAL',
                ],
            383 =>
                [
                    0 => 'Dodge',
                    1 => 'Stratus',
                    2 => 'STRATU',
                ],
            384 =>
                [
                    0 => 'Dodge',
                    1 => 'Viper',
                    2 => 'VIPER',
                ],
            385 =>
                [
                    0 => 'Dodge',
                    1 => 'Other Dodge Models',
                    2 => 'DOOTH',
                ],
            386 =>
                [
                    0 => 'Eagle',
                    1 => 'Medallion',
                    2 => 'EAGLEMED',
                ],
            387 =>
                [
                    0 => 'Eagle',
                    1 => 'Premier',
                    2 => 'EAGLEPREM',
                ],
            388 =>
                [
                    0 => 'Eagle',
                    1 => 'Summit',
                    2 => 'SUMMIT',
                ],
            389 =>
                [
                    0 => 'Eagle',
                    1 => 'Talon',
                    2 => 'TALON',
                ],
            390 =>
                [
                    0 => 'Eagle',
                    1 => 'Vision',
                    2 => 'VISION',
                ],
            391 =>
                [
                    0 => 'Eagle',
                    1 => 'Other Eagle Models',
                    2 => 'EAGOTH',
                ],
            392 =>
                [
                    0 => 'Ferrari',
                    1 => '308 GTB Quattrovalvole',
                    2 => '308GTB',
                ],
            393 =>
                [
                    0 => 'Ferrari',
                    1 => '308 GTBI',
                    2 => '308TBI',
                ],
            394 =>
                [
                    0 => 'Ferrari',
                    1 => '308 GTS Quattrovalvole',
                    2 => '308GTS',
                ],
            395 =>
                [
                    0 => 'Ferrari',
                    1 => '308 GTSI',
                    2 => '308TSI',
                ],
            396 =>
                [
                    0 => 'Ferrari',
                    1 => '328 GTB',
                    2 => '328GTB',
                ],
            397 =>
                [
                    0 => 'Ferrari',
                    1 => '328 GTS',
                    2 => '328GTS',
                ],
            398 =>
                [
                    0 => 'Ferrari',
                    1 => '348 GTB',
                    2 => '348GTB',
                ],
            399 =>
                [
                    0 => 'Ferrari',
                    1 => '348 GTS',
                    2 => '348GTS',
                ],
            400 =>
                [
                    0 => 'Ferrari',
                    1 => '348 Spider',
                    2 => '348SPI',
                ],
            401 =>
                [
                    0 => 'Ferrari',
                    1 => '348 TB',
                    2 => '348TB',
                ],
            402 =>
                [
                    0 => 'Ferrari',
                    1 => '348 TS',
                    2 => '348TS',
                ],
            403 =>
                [
                    0 => 'Ferrari',
                    1 => '360',
                    2 => '360',
                ],
            404 =>
                [
                    0 => 'Ferrari',
                    1 => '456 GT',
                    2 => '456GT',
                ],
            405 =>
                [
                    0 => 'Ferrari',
                    1 => '456M GT',
                    2 => '456MGT',
                ],
            406 =>
                [
                    0 => 'Ferrari',
                    1 => '458 Italia',
                    2 => '458ITALIA',
                ],
            407 =>
                [
                    0 => 'Ferrari',
                    1 => '512 BBi',
                    2 => '512BBI',
                ],
            408 =>
                [
                    0 => 'Ferrari',
                    1 => '512M',
                    2 => '512M',
                ],
            409 =>
                [
                    0 => 'Ferrari',
                    1 => '512TR',
                    2 => '512TR',
                ],
            410 =>
                [
                    0 => 'Ferrari',
                    1 => '550 Maranello',
                    2 => '550M',
                ],
            411 =>
                [
                    0 => 'Ferrari',
                    1 => '575M Maranello',
                    2 => '575M',
                ],
            412 =>
                [
                    0 => 'Ferrari',
                    1 => '599 GTB Fiorano',
                    2 => '599GTB',
                ],
            413 =>
                [
                    0 => 'Ferrari',
                    1 => '599 GTO',
                    2 => '599GTO',
                ],
            414 =>
                [
                    0 => 'Ferrari',
                    1 => '612 Scaglietti',
                    2 => '612SCAGLIE',
                ],
            415 =>
                [
                    0 => 'Ferrari',
                    1 => 'California',
                    2 => 'FERCALIF',
                ],
            416 =>
                [
                    0 => 'Ferrari',
                    1 => 'Enzo',
                    2 => 'ENZO',
                ],
            417 =>
                [
                    0 => 'Ferrari',
                    1 => 'F355',
                    2 => 'F355',
                ],
            418 =>
                [
                    0 => 'Ferrari',
                    1 => 'F40',
                    2 => 'F40',
                ],
            419 =>
                [
                    0 => 'Ferrari',
                    1 => 'F430',
                    2 => 'F430',
                ],
            420 =>
                [
                    0 => 'Ferrari',
                    1 => 'F50',
                    2 => 'F50',
                ],
            421 =>
                [
                    0 => 'Ferrari',
                    1 => 'FF',
                    2 => 'FERFF',
                ],
            422 =>
                [
                    0 => 'Ferrari',
                    1 => 'Mondial',
                    2 => 'MOND',
                ],
            423 =>
                [
                    0 => 'Ferrari',
                    1 => 'Testarossa',
                    2 => 'TEST',
                ],
            424 =>
                [
                    0 => 'Ferrari',
                    1 => 'Other Ferrari Models',
                    2 => 'UNAVAILFER',
                ],
            425 =>
                [
                    0 => 'FIAT',
                    1 => '2000 Spider',
                    2 => '2000',
                ],
            426 =>
                [
                    0 => 'FIAT',
                    1 => '500',
                    2 => 'FIAT500',
                ],
            427 =>
                [
                    0 => 'FIAT',
                    1 => 'Bertone X1/9',
                    2 => 'BERTON',
                ],
            428 =>
                [
                    0 => 'FIAT',
                    1 => 'Brava',
                    2 => 'BRAVA',
                ],
            429 =>
                [
                    0 => 'FIAT',
                    1 => 'Pininfarina Spider',
                    2 => 'PININ',
                ],
            430 =>
                [
                    0 => 'FIAT',
                    1 => 'Strada',
                    2 => 'STRADA',
                ],
            431 =>
                [
                    0 => 'FIAT',
                    1 => 'X1/9',
                    2 => 'FIATX19',
                ],
            432 =>
                [
                    0 => 'FIAT',
                    1 => 'Other Fiat Models',
                    2 => 'UNAVAILFIA',
                ],
            433 =>
                [
                    0 => 'Fisker',
                    1 => 'Karma',
                    2 => 'KARMA',
                ],
            434 =>
                [
                    0 => 'Ford',
                    1 => 'Aerostar',
                    2 => 'AERO',
                ],
            435 =>
                [
                    0 => 'Ford',
                    1 => 'Aspire',
                    2 => 'ASPIRE',
                ],
            436 =>
                [
                    0 => 'Ford',
                    1 => 'Bronco',
                    2 => 'BRON',
                ],
            437 =>
                [
                    0 => 'Ford',
                    1 => 'Bronco II',
                    2 => 'B2',
                ],
            438 =>
                [
                    0 => 'Ford',
                    1 => 'C-MAX',
                    2 => 'FOCMAX',
                ],
            439 =>
                [
                    0 => 'Ford',
                    1 => 'Club Wagon',
                    2 => 'FORDCLUB',
                ],
            440 =>
                [
                    0 => 'Ford',
                    1 => 'Contour',
                    2 => 'CONTOUR',
                ],
            441 =>
                [
                    0 => 'Ford',
                    1 => 'Courier',
                    2 => 'COURIER',
                ],
            442 =>
                [
                    0 => 'Ford',
                    1 => 'Crown Victoria',
                    2 => 'CROWNVIC',
                ],
            443 =>
                [
                    0 => 'Ford',
                    1 => 'E-150 and Econoline 150',
                    2 => 'E150ECON',
                ],
            444 =>
                [
                    0 => 'Ford',
                    1 => 'E-250 and Econoline 250',
                    2 => 'E250ECON',
                ],
            445 =>
                [
                    0 => 'Ford',
                    1 => 'E-350 and Econoline 350',
                    2 => 'E350ECON',
                ],
            446 =>
                [
                    0 => 'Ford',
                    1 => 'Edge',
                    2 => 'EDGE',
                ],
            447 =>
                [
                    0 => 'Ford',
                    1 => 'Escape',
                    2 => 'ESCAPE',
                ],
            448 =>
                [
                    0 => 'Ford',
                    1 => 'Escort',
                    2 => 'ESCO',
                ],
            449 =>
                [
                    0 => 'Ford',
                    1 => 'Excursion',
                    2 => 'EXCURSION',
                ],
            450 =>
                [
                    0 => 'Ford',
                    1 => 'EXP',
                    2 => 'EXP',
                ],
            451 =>
                [
                    0 => 'Ford',
                    1 => 'Expedition',
                    2 => 'EXPEDI',
                ],
            452 =>
                [
                    0 => 'Ford',
                    1 => 'Expedition EL',
                    2 => 'EXPEDIEL',
                ],
            453 =>
                [
                    0 => 'Ford',
                    1 => 'Explorer',
                    2 => 'EXPLOR',
                ],
            454 =>
                [
                    0 => 'Ford',
                    1 => 'Explorer Sport Trac',
                    2 => 'SPORTTRAC',
                ],
            455 =>
                [
                    0 => 'Ford',
                    1 => 'F100',
                    2 => 'F100',
                ],
            456 =>
                [
                    0 => 'Ford',
                    1 => 'F150',
                    2 => 'F150PICKUP',
                ],
            457 =>
                [
                    0 => 'Ford',
                    1 => 'F250',
                    2 => 'F250',
                ],
            458 =>
                [
                    0 => 'Ford',
                    1 => 'F350',
                    2 => 'F350',
                ],
            459 =>
                [
                    0 => 'Ford',
                    1 => 'F450',
                    2 => 'F450',
                ],
            460 =>
                [
                    0 => 'Ford',
                    1 => 'Fairmont',
                    2 => 'FAIRM',
                ],
            461 =>
                [
                    0 => 'Ford',
                    1 => 'Festiva',
                    2 => 'FESTIV',
                ],
            462 =>
                [
                    0 => 'Ford',
                    1 => 'Fiesta',
                    2 => 'FIESTA',
                ],
            463 =>
                [
                    0 => 'Ford',
                    1 => 'Five Hundred',
                    2 => 'FIVEHUNDRE',
                ],
            464 =>
                [
                    0 => 'Ford',
                    1 => 'Flex',
                    2 => 'FLEX',
                ],
            465 =>
                [
                    0 => 'Ford',
                    1 => 'Focus',
                    2 => 'FOCUS',
                ],
            466 =>
                [
                    0 => 'Ford',
                    1 => 'Freestar',
                    2 => 'FREESTAR',
                ],
            467 =>
                [
                    0 => 'Ford',
                    1 => 'Freestyle',
                    2 => 'FREESTYLE',
                ],
            468 =>
                [
                    0 => 'Ford',
                    1 => 'Fusion',
                    2 => 'FUSION',
                ],
            469 =>
                [
                    0 => 'Ford',
                    1 => 'Granada',
                    2 => 'GRANADA',
                ],
            470 =>
                [
                    0 => 'Ford',
                    1 => 'GT',
                    2 => 'GT',
                ],
            471 =>
                [
                    0 => 'Ford',
                    1 => 'LTD',
                    2 => 'LTD',
                ],
            472 =>
                [
                    0 => 'Ford',
                    1 => 'Mustang',
                    2 => 'MUST',
                ],
            473 =>
                [
                    0 => 'Ford',
                    1 => 'Probe',
                    2 => 'PROBE',
                ],
            474 =>
                [
                    0 => 'Ford',
                    1 => 'Ranger',
                    2 => 'RANGER',
                ],
            475 =>
                [
                    0 => 'Ford',
                    1 => 'Taurus',
                    2 => 'TAURUS',
                ],
            476 =>
                [
                    0 => 'Ford',
                    1 => 'Taurus X',
                    2 => 'TAURUSX',
                ],
            477 =>
                [
                    0 => 'Ford',
                    1 => 'Tempo',
                    2 => 'TEMPO',
                ],
            478 =>
                [
                    0 => 'Ford',
                    1 => 'Thunderbird',
                    2 => 'TBIRD',
                ],
            479 =>
                [
                    0 => 'Ford',
                    1 => 'Transit Connect',
                    2 => 'TRANSCONN',
                ],
            480 =>
                [
                    0 => 'Ford',
                    1 => 'Windstar',
                    2 => 'WINDST',
                ],
            481 =>
                [
                    0 => 'Ford',
                    1 => 'ZX2 Escort',
                    2 => 'FORDZX2',
                ],
            482 =>
                [
                    0 => 'Ford',
                    1 => 'Other Ford Models',
                    2 => 'FOOTH',
                ],
            483 =>
                [
                    0 => 'Freightliner',
                    1 => 'Sprinter',
                    2 => 'FRESPRINT',
                ],
            484 =>
                [
                    0 => 'Geo',
                    1 => 'Metro',
                    2 => 'GEOMETRO',
                ],
            485 =>
                [
                    0 => 'Geo',
                    1 => 'Prizm',
                    2 => 'GEOPRIZM',
                ],
            486 =>
                [
                    0 => 'Geo',
                    1 => 'Spectrum',
                    2 => 'SPECT',
                ],
            487 =>
                [
                    0 => 'Geo',
                    1 => 'Storm',
                    2 => 'STORM',
                ],
            488 =>
                [
                    0 => 'Geo',
                    1 => 'Tracker',
                    2 => 'GEOTRACK',
                ],
            489 =>
                [
                    0 => 'Geo',
                    1 => 'Other Geo Models',
                    2 => 'GEOOTH',
                ],
            490 =>
                [
                    0 => 'GMC',
                    1 => 'Acadia',
                    2 => 'ACADIA',
                ],
            491 =>
                [
                    0 => 'GMC',
                    1 => 'Caballero',
                    2 => 'CABALLERO',
                ],
            492 =>
                [
                    0 => 'GMC',
                    1 => 'Canyon',
                    2 => 'CANYON',
                ],
            493 =>
                [
                    0 => 'GMC',
                    1 => 'Envoy',
                    2 => 'ENVOY',
                ],
            494 =>
                [
                    0 => 'GMC',
                    1 => 'Envoy XL',
                    2 => 'ENVOYXL',
                ],
            495 =>
                [
                    0 => 'GMC',
                    1 => 'Envoy XUV',
                    2 => 'ENVOYXUV',
                ],
            496 =>
                [
                    0 => 'GMC',
                    1 => 'Jimmy',
                    2 => 'JIM',
                ],
            497 =>
                [
                    0 => 'GMC',
                    1 => 'Rally Wagon',
                    2 => 'RALLYWAG',
                ],
            498 =>
                [
                    0 => 'GMC',
                    1 => 'S15 Jimmy',
                    2 => 'GMCS15',
                ],
            499 =>
                [
                    0 => 'GMC',
                    1 => 'S15 Pickup',
                    2 => 'S15',
                ],
            500 =>
                [
                    0 => 'GMC',
                    1 => 'Safari',
                    2 => 'SAFARIGMC',
                ],
            501 =>
                [
                    0 => 'GMC',
                    1 => 'Savana',
                    2 => 'GMCSAVANA',
                ],
            502 =>
                [
                    0 => 'GMC',
                    1 => 'Sierra C/K1500',
                    2 => '15SIPU4WD',
                ],
            503 =>
                [
                    0 => 'GMC',
                    1 => 'Sierra C/K2500',
                    2 => 'GMCC25PU',
                ],
            504 =>
                [
                    0 => 'GMC',
                    1 => 'Sierra C/K3500',
                    2 => 'GMC3500PU',
                ],
            505 =>
                [
                    0 => 'GMC',
                    1 => 'Sonoma',
                    2 => 'SONOMA',
                ],
            506 =>
                [
                    0 => 'GMC',
                    1 => 'Suburban',
                    2 => 'SUB',
                ],
            507 =>
                [
                    0 => 'GMC',
                    1 => 'Syclone',
                    2 => 'GMCSYCLON',
                ],
            508 =>
                [
                    0 => 'GMC',
                    1 => 'Terrain',
                    2 => 'TERRAIN',
                ],
            509 =>
                [
                    0 => 'GMC',
                    1 => 'TopKick C4500',
                    2 => 'TOPC4500',
                ],
            510 =>
                [
                    0 => 'GMC',
                    1 => 'Typhoon',
                    2 => 'TYPH',
                ],
            511 =>
                [
                    0 => 'GMC',
                    1 => 'Vandura',
                    2 => 'GMCVANDUR',
                ],
            512 =>
                [
                    0 => 'GMC',
                    1 => 'Yukon',
                    2 => 'YUKON',
                ],
            513 =>
                [
                    0 => 'GMC',
                    1 => 'Yukon XL',
                    2 => 'YUKONXL',
                ],
            514 =>
                [
                    0 => 'GMC',
                    1 => 'Other GMC Models',
                    2 => 'GMCOTH',
                ],
            515 =>
                [
                    0 => 'Honda',
                    1 => 'Accord',
                    2 => 'ACCORD',
                ],
            516 =>
                [
                    0 => 'Honda',
                    1 => 'Civic',
                    2 => 'CIVIC',
                ],
            517 =>
                [
                    0 => 'Honda',
                    1 => 'CR-V',
                    2 => 'CRV',
                ],
            518 =>
                [
                    0 => 'Honda',
                    1 => 'CR-Z',
                    2 => 'CRZ',
                ],
            519 =>
                [
                    0 => 'Honda',
                    1 => 'CRX',
                    2 => 'CRX',
                ],
            520 =>
                [
                    0 => 'Honda',
                    1 => 'Crosstour and Accord Crosstour Models (2)',
                    2 => 'CROSSTOUR_MODELS',
                ],
            521 =>
                [
                    0 => 'Honda',
                    1 => ' - Accord Crosstour',
                    2 => 'CROSSTOUR',
                ],
            522 =>
                [
                    0 => 'Honda',
                    1 => ' - Crosstour',
                    2 => 'HONCROSS',
                ],
            523 =>
                [
                    0 => 'Honda',
                    1 => 'Del Sol',
                    2 => 'HONDELSOL',
                ],
            524 =>
                [
                    0 => 'Honda',
                    1 => 'Element',
                    2 => 'ELEMENT',
                ],
            525 =>
                [
                    0 => 'Honda',
                    1 => 'Fit',
                    2 => 'FIT',
                ],
            526 =>
                [
                    0 => 'Honda',
                    1 => 'Insight',
                    2 => 'INSIGHT',
                ],
            527 =>
                [
                    0 => 'Honda',
                    1 => 'Odyssey',
                    2 => 'ODYSSEY',
                ],
            528 =>
                [
                    0 => 'Honda',
                    1 => 'Passport',
                    2 => 'PASSPO',
                ],
            529 =>
                [
                    0 => 'Honda',
                    1 => 'Pilot',
                    2 => 'PILOT',
                ],
            530 =>
                [
                    0 => 'Honda',
                    1 => 'Prelude',
                    2 => 'PRE',
                ],
            531 =>
                [
                    0 => 'Honda',
                    1 => 'Ridgeline',
                    2 => 'RIDGELINE',
                ],
            532 =>
                [
                    0 => 'Honda',
                    1 => 'S2000',
                    2 => 'S2000',
                ],
            533 =>
                [
                    0 => 'Honda',
                    1 => 'Other Honda Models',
                    2 => 'HONOTH',
                ],
            534 =>
                [
                    0 => 'HUMMER',
                    1 => 'H1',
                    2 => 'HUMMER',
                ],
            535 =>
                [
                    0 => 'HUMMER',
                    1 => 'H2',
                    2 => 'H2',
                ],
            536 =>
                [
                    0 => 'HUMMER',
                    1 => 'H3',
                    2 => 'H3',
                ],
            537 =>
                [
                    0 => 'HUMMER',
                    1 => 'H3T',
                    2 => 'H3T',
                ],
            538 =>
                [
                    0 => 'HUMMER',
                    1 => 'Other Hummer Models',
                    2 => 'AMGOTH',
                ],
            539 =>
                [
                    0 => 'Hyundai',
                    1 => 'Accent',
                    2 => 'ACCENT',
                ],
            540 =>
                [
                    0 => 'Hyundai',
                    1 => 'Azera',
                    2 => 'AZERA',
                ],
            541 =>
                [
                    0 => 'Hyundai',
                    1 => 'Elantra',
                    2 => 'ELANTR',
                ],
            542 =>
                [
                    0 => 'Hyundai',
                    1 => 'Elantra Coupe',
                    2 => 'HYUELANCPE',
                ],
            543 =>
                [
                    0 => 'Hyundai',
                    1 => 'Elantra Touring',
                    2 => 'ELANTOUR',
                ],
            544 =>
                [
                    0 => 'Hyundai',
                    1 => 'Entourage',
                    2 => 'ENTOURAGE',
                ],
            545 =>
                [
                    0 => 'Hyundai',
                    1 => 'Equus',
                    2 => 'EQUUS',
                ],
            546 =>
                [
                    0 => 'Hyundai',
                    1 => 'Excel',
                    2 => 'HYUEXCEL',
                ],
            547 =>
                [
                    0 => 'Hyundai',
                    1 => 'Genesis',
                    2 => 'GENESIS',
                ],
            548 =>
                [
                    0 => 'Hyundai',
                    1 => 'Genesis Coupe',
                    2 => 'GENESISCPE',
                ],
            549 =>
                [
                    0 => 'Hyundai',
                    1 => 'Santa Fe',
                    2 => 'SANTAFE',
                ],
            550 =>
                [
                    0 => 'Hyundai',
                    1 => 'Scoupe',
                    2 => 'SCOUPE',
                ],
            551 =>
                [
                    0 => 'Hyundai',
                    1 => 'Sonata',
                    2 => 'SONATA',
                ],
            552 =>
                [
                    0 => 'Hyundai',
                    1 => 'Tiburon',
                    2 => 'TIBURO',
                ],
            553 =>
                [
                    0 => 'Hyundai',
                    1 => 'Tucson',
                    2 => 'TUCSON',
                ],
            554 =>
                [
                    0 => 'Hyundai',
                    1 => 'Veloster',
                    2 => 'VELOSTER',
                ],
            555 =>
                [
                    0 => 'Hyundai',
                    1 => 'Veracruz',
                    2 => 'VERACRUZ',
                ],
            556 =>
                [
                    0 => 'Hyundai',
                    1 => 'XG300',
                    2 => 'XG300',
                ],
            557 =>
                [
                    0 => 'Hyundai',
                    1 => 'XG350',
                    2 => 'XG350',
                ],
            558 =>
                [
                    0 => 'Hyundai',
                    1 => 'Other Hyundai Models',
                    2 => 'HYUOTH',
                ],
            559 =>
                [
                    0 => 'Infiniti',
                    1 => 'EX Models (2)',
                    2 => 'EX_MODELS',
                ],
            560 =>
                [
                    0 => 'Infiniti',
                    1 => ' - EX35',
                    2 => 'EX35',
                ],
            561 =>
                [
                    0 => 'Infiniti',
                    1 => ' - EX37',
                    2 => 'EX37',
                ],
            562 =>
                [
                    0 => 'Infiniti',
                    1 => 'FX Models (4)',
                    2 => 'FX_MODELS',
                ],
            563 =>
                [
                    0 => 'Infiniti',
                    1 => ' - FX35',
                    2 => 'FX35',
                ],
            564 =>
                [
                    0 => 'Infiniti',
                    1 => ' - FX37',
                    2 => 'FX37',
                ],
            565 =>
                [
                    0 => 'Infiniti',
                    1 => ' - FX45',
                    2 => 'FX45',
                ],
            566 =>
                [
                    0 => 'Infiniti',
                    1 => ' - FX50',
                    2 => 'FX50',
                ],
            567 =>
                [
                    0 => 'Infiniti',
                    1 => 'G Models (4)',
                    2 => 'G_MODELS',
                ],
            568 =>
                [
                    0 => 'Infiniti',
                    1 => ' - G20',
                    2 => 'G20',
                ],
            569 =>
                [
                    0 => 'Infiniti',
                    1 => ' - G25',
                    2 => 'G25',
                ],
            570 =>
                [
                    0 => 'Infiniti',
                    1 => ' - G35',
                    2 => 'G35',
                ],
            571 =>
                [
                    0 => 'Infiniti',
                    1 => ' - G37',
                    2 => 'G37',
                ],
            572 =>
                [
                    0 => 'Infiniti',
                    1 => 'I Models (2)',
                    2 => 'I_MODELS',
                ],
            573 =>
                [
                    0 => 'Infiniti',
                    1 => ' - I30',
                    2 => 'I30',
                ],
            574 =>
                [
                    0 => 'Infiniti',
                    1 => ' - I35',
                    2 => 'I35',
                ],
            575 =>
                [
                    0 => 'Infiniti',
                    1 => 'J Models (1)',
                    2 => 'J_MODELS',
                ],
            576 =>
                [
                    0 => 'Infiniti',
                    1 => ' - J30',
                    2 => 'J30',
                ],
            577 =>
                [
                    0 => 'Infiniti',
                    1 => 'JX Models (1)',
                    2 => 'JX_MODELS',
                ],
            578 =>
                [
                    0 => 'Infiniti',
                    1 => ' - JX35',
                    2 => 'JX35',
                ],
            579 =>
                [
                    0 => 'Infiniti',
                    1 => 'M Models (6)',
                    2 => 'M_MODELS',
                ],
            580 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M30',
                    2 => 'M30',
                ],
            581 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M35',
                    2 => 'M35',
                ],
            582 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M35h',
                    2 => 'M35HYBRID',
                ],
            583 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M37',
                    2 => 'M37',
                ],
            584 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M45',
                    2 => 'M45',
                ],
            585 =>
                [
                    0 => 'Infiniti',
                    1 => ' - M56',
                    2 => 'M56',
                ],
            586 =>
                [
                    0 => 'Infiniti',
                    1 => 'Q Models (1)',
                    2 => 'Q_MODELS',
                ],
            587 =>
                [
                    0 => 'Infiniti',
                    1 => ' - Q45',
                    2 => 'Q45',
                ],
            588 =>
                [
                    0 => 'Infiniti',
                    1 => 'QX Models (2)',
                    2 => 'QX_MODELS',
                ],
            589 =>
                [
                    0 => 'Infiniti',
                    1 => ' - QX4',
                    2 => 'QX4',
                ],
            590 =>
                [
                    0 => 'Infiniti',
                    1 => ' - QX56',
                    2 => 'QX56',
                ],
            591 =>
                [
                    0 => 'Infiniti',
                    1 => 'Other Infiniti Models',
                    2 => 'INFOTH',
                ],
            592 =>
                [
                    0 => 'Isuzu',
                    1 => 'Amigo',
                    2 => 'AMIGO',
                ],
            593 =>
                [
                    0 => 'Isuzu',
                    1 => 'Ascender',
                    2 => 'ASCENDER',
                ],
            594 =>
                [
                    0 => 'Isuzu',
                    1 => 'Axiom',
                    2 => 'AXIOM',
                ],
            595 =>
                [
                    0 => 'Isuzu',
                    1 => 'Hombre',
                    2 => 'HOMBRE',
                ],
            596 =>
                [
                    0 => 'Isuzu',
                    1 => 'i-280',
                    2 => 'I280',
                ],
            597 =>
                [
                    0 => 'Isuzu',
                    1 => 'i-290',
                    2 => 'I290',
                ],
            598 =>
                [
                    0 => 'Isuzu',
                    1 => 'i-350',
                    2 => 'I350',
                ],
            599 =>
                [
                    0 => 'Isuzu',
                    1 => 'i-370',
                    2 => 'I370',
                ],
            600 =>
                [
                    0 => 'Isuzu',
                    1 => 'I-Mark',
                    2 => 'ISUMARK',
                ],
            601 =>
                [
                    0 => 'Isuzu',
                    1 => 'Impulse',
                    2 => 'ISUIMP',
                ],
            602 =>
                [
                    0 => 'Isuzu',
                    1 => 'Oasis',
                    2 => 'OASIS',
                ],
            603 =>
                [
                    0 => 'Isuzu',
                    1 => 'Pickup',
                    2 => 'ISUPU',
                ],
            604 =>
                [
                    0 => 'Isuzu',
                    1 => 'Rodeo',
                    2 => 'RODEO',
                ],
            605 =>
                [
                    0 => 'Isuzu',
                    1 => 'Stylus',
                    2 => 'STYLUS',
                ],
            606 =>
                [
                    0 => 'Isuzu',
                    1 => 'Trooper',
                    2 => 'TROOP',
                ],
            607 =>
                [
                    0 => 'Isuzu',
                    1 => 'Trooper II',
                    2 => 'TRP2',
                ],
            608 =>
                [
                    0 => 'Isuzu',
                    1 => 'VehiCROSS',
                    2 => 'VEHICROSS',
                ],
            609 =>
                [
                    0 => 'Isuzu',
                    1 => 'Other Isuzu Models',
                    2 => 'ISUOTH',
                ],
            610 =>
                [
                    0 => 'Jaguar',
                    1 => 'S-Type',
                    2 => 'STYPE',
                ],
            611 =>
                [
                    0 => 'Jaguar',
                    1 => 'X-Type',
                    2 => 'XTYPE',
                ],
            612 =>
                [
                    0 => 'Jaguar',
                    1 => 'XF',
                    2 => 'XF',
                ],
            613 =>
                [
                    0 => 'Jaguar',
                    1 => 'XJ Series (10)',
                    2 => 'XJ_SERIES',
                ],
            614 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ12',
                    2 => 'JAGXJ12',
                ],
            615 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ6',
                    2 => 'JAGXJ6',
                ],
            616 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJR',
                    2 => 'JAGXJR',
                ],
            617 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJR-S',
                    2 => 'JAGXJRS',
                ],
            618 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJS',
                    2 => 'JAGXJS',
                ],
            619 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ Vanden Plas',
                    2 => 'VANDEN',
                ],
            620 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ',
                    2 => 'XJ',
                ],
            621 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ8',
                    2 => 'XJ8',
                ],
            622 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ8 L',
                    2 => 'XJ8L',
                ],
            623 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XJ Sport',
                    2 => 'XJSPORT',
                ],
            624 =>
                [
                    0 => 'Jaguar',
                    1 => 'XK Series (3)',
                    2 => 'XK_SERIES',
                ],
            625 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XK8',
                    2 => 'JAGXK8',
                ],
            626 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XK',
                    2 => 'XK',
                ],
            627 =>
                [
                    0 => 'Jaguar',
                    1 => ' - XKR',
                    2 => 'XKR',
                ],
            628 =>
                [
                    0 => 'Jaguar',
                    1 => 'Other Jaguar Models',
                    2 => 'JAGOTH',
                ],
            629 =>
                [
                    0 => 'Jeep',
                    1 => 'Cherokee',
                    2 => 'CHER',
                ],
            630 =>
                [
                    0 => 'Jeep',
                    1 => 'CJ',
                    2 => 'JEEPCJ',
                ],
            631 =>
                [
                    0 => 'Jeep',
                    1 => 'Comanche',
                    2 => 'COMANC',
                ],
            632 =>
                [
                    0 => 'Jeep',
                    1 => 'Commander',
                    2 => 'COMMANDER',
                ],
            633 =>
                [
                    0 => 'Jeep',
                    1 => 'Compass',
                    2 => 'COMPASS',
                ],
            634 =>
                [
                    0 => 'Jeep',
                    1 => 'Grand Cherokee',
                    2 => 'JEEPGRAND',
                ],
            635 =>
                [
                    0 => 'Jeep',
                    1 => 'Grand Wagoneer',
                    2 => 'GRWAG',
                ],
            636 =>
                [
                    0 => 'Jeep',
                    1 => 'Liberty',
                    2 => 'LIBERTY',
                ],
            637 =>
                [
                    0 => 'Jeep',
                    1 => 'Patriot',
                    2 => 'PATRIOT',
                ],
            638 =>
                [
                    0 => 'Jeep',
                    1 => 'Pickup',
                    2 => 'JEEPPU',
                ],
            639 =>
                [
                    0 => 'Jeep',
                    1 => 'Scrambler',
                    2 => 'SCRAMBLE',
                ],
            640 =>
                [
                    0 => 'Jeep',
                    1 => 'Wagoneer',
                    2 => 'WAGONE',
                ],
            641 =>
                [
                    0 => 'Jeep',
                    1 => 'Wrangler',
                    2 => 'WRANGLER',
                ],
            642 =>
                [
                    0 => 'Jeep',
                    1 => 'Other Jeep Models',
                    2 => 'JEOTH',
                ],
            643 =>
                [
                    0 => 'Kia',
                    1 => 'Amanti',
                    2 => 'AMANTI',
                ],
            644 =>
                [
                    0 => 'Kia',
                    1 => 'Borrego',
                    2 => 'BORREGO',
                ],
            645 =>
                [
                    0 => 'Kia',
                    1 => 'Forte',
                    2 => 'FORTE',
                ],
            646 =>
                [
                    0 => 'Kia',
                    1 => 'Forte Koup',
                    2 => 'FORTEKOUP',
                ],
            647 =>
                [
                    0 => 'Kia',
                    1 => 'Optima',
                    2 => 'OPTIMA',
                ],
            648 =>
                [
                    0 => 'Kia',
                    1 => 'Rio',
                    2 => 'RIO',
                ],
            649 =>
                [
                    0 => 'Kia',
                    1 => 'Rio5',
                    2 => 'RIO5',
                ],
            650 =>
                [
                    0 => 'Kia',
                    1 => 'Rondo',
                    2 => 'RONDO',
                ],
            651 =>
                [
                    0 => 'Kia',
                    1 => 'Sedona',
                    2 => 'SEDONA',
                ],
            652 =>
                [
                    0 => 'Kia',
                    1 => 'Sephia',
                    2 => 'SEPHIA',
                ],
            653 =>
                [
                    0 => 'Kia',
                    1 => 'Sorento',
                    2 => 'SORENTO',
                ],
            654 =>
                [
                    0 => 'Kia',
                    1 => 'Soul',
                    2 => 'SOUL',
                ],
            655 =>
                [
                    0 => 'Kia',
                    1 => 'Spectra',
                    2 => 'SPECTRA',
                ],
            656 =>
                [
                    0 => 'Kia',
                    1 => 'Spectra5',
                    2 => 'SPECTRA5',
                ],
            657 =>
                [
                    0 => 'Kia',
                    1 => 'Sportage',
                    2 => 'SPORTA',
                ],
            658 =>
                [
                    0 => 'Kia',
                    1 => 'Other Kia Models',
                    2 => 'KIAOTH',
                ],
            659 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Aventador',
                    2 => 'AVENT',
                ],
            660 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Countach',
                    2 => 'COUNT',
                ],
            661 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Diablo',
                    2 => 'DIABLO',
                ],
            662 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Gallardo',
                    2 => 'GALLARDO',
                ],
            663 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Jalpa',
                    2 => 'JALPA',
                ],
            664 =>
                [
                    0 => 'Lamborghini',
                    1 => 'LM002',
                    2 => 'LM002',
                ],
            665 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Murcielago',
                    2 => 'MURCIELAGO',
                ],
            666 =>
                [
                    0 => 'Lamborghini',
                    1 => 'Other Lamborghini Models',
                    2 => 'UNAVAILLAM',
                ],
            667 =>
                [
                    0 => 'Lancia',
                    1 => 'Beta',
                    2 => 'BETA',
                ],
            668 =>
                [
                    0 => 'Lancia',
                    1 => 'Zagato',
                    2 => 'ZAGATO',
                ],
            669 =>
                [
                    0 => 'Lancia',
                    1 => 'Other Lancia Models',
                    2 => 'UNAVAILLAN',
                ],
            670 =>
                [
                    0 => 'Land Rover',
                    1 => 'Defender',
                    2 => 'DEFEND',
                ],
            671 =>
                [
                    0 => 'Land Rover',
                    1 => 'Discovery',
                    2 => 'DISCOV',
                ],
            672 =>
                [
                    0 => 'Land Rover',
                    1 => 'Freelander',
                    2 => 'FRELNDR',
                ],
            673 =>
                [
                    0 => 'Land Rover',
                    1 => 'LR2',
                    2 => 'LR2',
                ],
            674 =>
                [
                    0 => 'Land Rover',
                    1 => 'LR3',
                    2 => 'LR3',
                ],
            675 =>
                [
                    0 => 'Land Rover',
                    1 => 'LR4',
                    2 => 'LR4',
                ],
            676 =>
                [
                    0 => 'Land Rover',
                    1 => 'Range Rover',
                    2 => 'RANGE',
                ],
            677 =>
                [
                    0 => 'Land Rover',
                    1 => 'Range Rover Evoque',
                    2 => 'EVOQUE',
                ],
            678 =>
                [
                    0 => 'Land Rover',
                    1 => 'Range Rover Sport',
                    2 => 'RANGESPORT',
                ],
            679 =>
                [
                    0 => 'Land Rover',
                    1 => 'Other Land Rover Models',
                    2 => 'ROVOTH',
                ],
            680 =>
                [
                    0 => 'Lexus',
                    1 => 'CT Models (1)',
                    2 => 'CT_MODELS',
                ],
            681 =>
                [
                    0 => 'Lexus',
                    1 => ' - CT 200h',
                    2 => 'CT200H',
                ],
            682 =>
                [
                    0 => 'Lexus',
                    1 => 'ES Models (5)',
                    2 => 'ES_MODELS',
                ],
            683 =>
                [
                    0 => 'Lexus',
                    1 => ' - ES 250',
                    2 => 'ES250',
                ],
            684 =>
                [
                    0 => 'Lexus',
                    1 => ' - ES 300',
                    2 => 'ES300',
                ],
            685 =>
                [
                    0 => 'Lexus',
                    1 => ' - ES 300h',
                    2 => 'ES300H',
                ],
            686 =>
                [
                    0 => 'Lexus',
                    1 => ' - ES 330',
                    2 => 'ES330',
                ],
            687 =>
                [
                    0 => 'Lexus',
                    1 => ' - ES 350',
                    2 => 'ES350',
                ],
            688 =>
                [
                    0 => 'Lexus',
                    1 => 'GS Models (6)',
                    2 => 'GS_MODELS',
                ],
            689 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 300',
                    2 => 'GS300',
                ],
            690 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 350',
                    2 => 'GS350',
                ],
            691 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 400',
                    2 => 'GS400',
                ],
            692 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 430',
                    2 => 'GS430',
                ],
            693 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 450h',
                    2 => 'GS450H',
                ],
            694 =>
                [
                    0 => 'Lexus',
                    1 => ' - GS 460',
                    2 => 'GS460',
                ],
            695 =>
                [
                    0 => 'Lexus',
                    1 => 'GX Models (2)',
                    2 => 'GX_MODELS',
                ],
            696 =>
                [
                    0 => 'Lexus',
                    1 => ' - GX 460',
                    2 => 'GX460',
                ],
            697 =>
                [
                    0 => 'Lexus',
                    1 => ' - GX 470',
                    2 => 'GX470',
                ],
            698 =>
                [
                    0 => 'Lexus',
                    1 => 'HS Models (1)',
                    2 => 'HS_MODELS',
                ],
            699 =>
                [
                    0 => 'Lexus',
                    1 => ' - HS 250h',
                    2 => 'HS250H',
                ],
            700 =>
                [
                    0 => 'Lexus',
                    1 => 'IS Models (6)',
                    2 => 'IS_MODELS',
                ],
            701 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS 250',
                    2 => 'IS250',
                ],
            702 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS 250C',
                    2 => 'IS250C',
                ],
            703 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS 300',
                    2 => 'IS300',
                ],
            704 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS 350',
                    2 => 'IS350',
                ],
            705 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS 350C',
                    2 => 'IS350C',
                ],
            706 =>
                [
                    0 => 'Lexus',
                    1 => ' - IS F',
                    2 => 'ISF',
                ],
            707 =>
                [
                    0 => 'Lexus',
                    1 => 'LFA',
                    2 => 'LEXLFA',
                ],
            708 =>
                [
                    0 => 'Lexus',
                    1 => 'LS Models (4)',
                    2 => 'LS_MODELS',
                ],
            709 =>
                [
                    0 => 'Lexus',
                    1 => ' - LS 400',
                    2 => 'LS400',
                ],
            710 =>
                [
                    0 => 'Lexus',
                    1 => ' - LS 430',
                    2 => 'LS430',
                ],
            711 =>
                [
                    0 => 'Lexus',
                    1 => ' - LS 460',
                    2 => 'LS460',
                ],
            712 =>
                [
                    0 => 'Lexus',
                    1 => ' - LS 600h',
                    2 => 'LS600H',
                ],
            713 =>
                [
                    0 => 'Lexus',
                    1 => 'LX Models (3)',
                    2 => 'LX_MODELS',
                ],
            714 =>
                [
                    0 => 'Lexus',
                    1 => ' - LX 450',
                    2 => 'LX450',
                ],
            715 =>
                [
                    0 => 'Lexus',
                    1 => ' - LX 470',
                    2 => 'LX470',
                ],
            716 =>
                [
                    0 => 'Lexus',
                    1 => ' - LX 570',
                    2 => 'LX570',
                ],
            717 =>
                [
                    0 => 'Lexus',
                    1 => 'RX Models (5)',
                    2 => 'RX_MODELS',
                ],
            718 =>
                [
                    0 => 'Lexus',
                    1 => ' - RX 300',
                    2 => 'RX300',
                ],
            719 =>
                [
                    0 => 'Lexus',
                    1 => ' - RX 330',
                    2 => 'RX330',
                ],
            720 =>
                [
                    0 => 'Lexus',
                    1 => ' - RX 350',
                    2 => 'RX350',
                ],
            721 =>
                [
                    0 => 'Lexus',
                    1 => ' - RX 400h',
                    2 => 'RX400H',
                ],
            722 =>
                [
                    0 => 'Lexus',
                    1 => ' - RX 450h',
                    2 => 'RX450H',
                ],
            723 =>
                [
                    0 => 'Lexus',
                    1 => 'SC Models (3)',
                    2 => 'SC_MODELS',
                ],
            724 =>
                [
                    0 => 'Lexus',
                    1 => ' - SC 300',
                    2 => 'SC300',
                ],
            725 =>
                [
                    0 => 'Lexus',
                    1 => ' - SC 400',
                    2 => 'SC400',
                ],
            726 =>
                [
                    0 => 'Lexus',
                    1 => ' - SC 430',
                    2 => 'SC430',
                ],
            727 =>
                [
                    0 => 'Lexus',
                    1 => 'Other Lexus Models',
                    2 => 'LEXOTH',
                ],
            728 =>
                [
                    0 => 'Lincoln',
                    1 => 'Aviator',
                    2 => 'AVIATOR',
                ],
            729 =>
                [
                    0 => 'Lincoln',
                    1 => 'Blackwood',
                    2 => 'BLKWOOD',
                ],
            730 =>
                [
                    0 => 'Lincoln',
                    1 => 'Continental',
                    2 => 'CONT',
                ],
            731 =>
                [
                    0 => 'Lincoln',
                    1 => 'LS',
                    2 => 'LSLINCOLN',
                ],
            732 =>
                [
                    0 => 'Lincoln',
                    1 => 'Mark LT',
                    2 => 'MARKLT',
                ],
            733 =>
                [
                    0 => 'Lincoln',
                    1 => 'Mark VI',
                    2 => 'MARK6',
                ],
            734 =>
                [
                    0 => 'Lincoln',
                    1 => 'Mark VII',
                    2 => 'MARK7',
                ],
            735 =>
                [
                    0 => 'Lincoln',
                    1 => 'Mark VIII',
                    2 => 'MARK8',
                ],
            736 =>
                [
                    0 => 'Lincoln',
                    1 => 'MKS',
                    2 => 'MKS',
                ],
            737 =>
                [
                    0 => 'Lincoln',
                    1 => 'MKT',
                    2 => 'MKT',
                ],
            738 =>
                [
                    0 => 'Lincoln',
                    1 => 'MKX',
                    2 => 'MKX',
                ],
            739 =>
                [
                    0 => 'Lincoln',
                    1 => 'MKZ',
                    2 => 'MKZ',
                ],
            740 =>
                [
                    0 => 'Lincoln',
                    1 => 'Navigator',
                    2 => 'NAVIGA',
                ],
            741 =>
                [
                    0 => 'Lincoln',
                    1 => 'Navigator L',
                    2 => 'NAVIGAL',
                ],
            742 =>
                [
                    0 => 'Lincoln',
                    1 => 'Town Car',
                    2 => 'LINCTC',
                ],
            743 =>
                [
                    0 => 'Lincoln',
                    1 => 'Zephyr',
                    2 => 'ZEPHYR',
                ],
            744 =>
                [
                    0 => 'Lincoln',
                    1 => 'Other Lincoln Models',
                    2 => 'LINOTH',
                ],
            745 =>
                [
                    0 => 'Lotus',
                    1 => 'Elan',
                    2 => 'ELAN',
                ],
            746 =>
                [
                    0 => 'Lotus',
                    1 => 'Elise',
                    2 => 'LOTELISE',
                ],
            747 =>
                [
                    0 => 'Lotus',
                    1 => 'Esprit',
                    2 => 'ESPRIT',
                ],
            748 =>
                [
                    0 => 'Lotus',
                    1 => 'Evora',
                    2 => 'EVORA',
                ],
            749 =>
                [
                    0 => 'Lotus',
                    1 => 'Exige',
                    2 => 'EXIGE',
                ],
            750 =>
                [
                    0 => 'Lotus',
                    1 => 'Other Lotus Models',
                    2 => 'UNAVAILLOT',
                ],
            751 =>
                [
                    0 => 'Maserati',
                    1 => '430',
                    2 => '430',
                ],
            752 =>
                [
                    0 => 'Maserati',
                    1 => 'Biturbo',
                    2 => 'BITRBO',
                ],
            753 =>
                [
                    0 => 'Maserati',
                    1 => 'Coupe',
                    2 => 'COUPEMAS',
                ],
            754 =>
                [
                    0 => 'Maserati',
                    1 => 'GranSport',
                    2 => 'GRANSPORT',
                ],
            755 =>
                [
                    0 => 'Maserati',
                    1 => 'GranTurismo',
                    2 => 'GRANTURISM',
                ],
            756 =>
                [
                    0 => 'Maserati',
                    1 => 'Quattroporte',
                    2 => 'QP',
                ],
            757 =>
                [
                    0 => 'Maserati',
                    1 => 'Spyder',
                    2 => 'SPYDER',
                ],
            758 =>
                [
                    0 => 'Maserati',
                    1 => 'Other Maserati Models',
                    2 => 'UNAVAILMAS',
                ],
            759 =>
                [
                    0 => 'Maybach',
                    1 => '57',
                    2 => '57MAYBACH',
                ],
            760 =>
                [
                    0 => 'Maybach',
                    1 => '62',
                    2 => '62MAYBACH',
                ],
            761 =>
                [
                    0 => 'Maybach',
                    1 => 'Other Maybach Models',
                    2 => 'UNAVAILMAY',
                ],
            762 =>
                [
                    0 => 'Mazda',
                    1 => '323',
                    2 => 'MAZDA323',
                ],
            763 =>
                [
                    0 => 'Mazda',
                    1 => '626',
                    2 => 'MAZDA626',
                ],
            764 =>
                [
                    0 => 'Mazda',
                    1 => '929',
                    2 => '929',
                ],
            765 =>
                [
                    0 => 'Mazda',
                    1 => 'B-Series Pickup',
                    2 => 'B-SERIES',
                ],
            766 =>
                [
                    0 => 'Mazda',
                    1 => 'CX-5',
                    2 => 'CX-5',
                ],
            767 =>
                [
                    0 => 'Mazda',
                    1 => 'CX-7',
                    2 => 'CX-7',
                ],
            768 =>
                [
                    0 => 'Mazda',
                    1 => 'CX-9',
                    2 => 'CX-9',
                ],
            769 =>
                [
                    0 => 'Mazda',
                    1 => 'GLC',
                    2 => 'GLC',
                ],
            770 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDA2',
                    2 => 'MAZDA2',
                ],
            771 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDA3',
                    2 => 'MAZDA3',
                ],
            772 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDA5',
                    2 => 'MAZDA5',
                ],
            773 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDA6',
                    2 => 'MAZDA6',
                ],
            774 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDASPEED3',
                    2 => 'MAZDASPD3',
                ],
            775 =>
                [
                    0 => 'Mazda',
                    1 => 'MAZDASPEED6',
                    2 => 'MAZDASPD6',
                ],
            776 =>
                [
                    0 => 'Mazda',
                    1 => 'Miata MX5',
                    2 => 'MIATA',
                ],
            777 =>
                [
                    0 => 'Mazda',
                    1 => 'Millenia',
                    2 => 'MILL',
                ],
            778 =>
                [
                    0 => 'Mazda',
                    1 => 'MPV',
                    2 => 'MPV',
                ],
            779 =>
                [
                    0 => 'Mazda',
                    1 => 'MX3',
                    2 => 'MX3',
                ],
            780 =>
                [
                    0 => 'Mazda',
                    1 => 'MX6',
                    2 => 'MX6',
                ],
            781 =>
                [
                    0 => 'Mazda',
                    1 => 'Navajo',
                    2 => 'NAVAJO',
                ],
            782 =>
                [
                    0 => 'Mazda',
                    1 => 'Protege',
                    2 => 'PROTE',
                ],
            783 =>
                [
                    0 => 'Mazda',
                    1 => 'Protege5',
                    2 => 'PROTE5',
                ],
            784 =>
                [
                    0 => 'Mazda',
                    1 => 'RX-7',
                    2 => 'RX7',
                ],
            785 =>
                [
                    0 => 'Mazda',
                    1 => 'RX-8',
                    2 => 'RX8',
                ],
            786 =>
                [
                    0 => 'Mazda',
                    1 => 'Tribute',
                    2 => 'TRIBUTE',
                ],
            787 =>
                [
                    0 => 'Mazda',
                    1 => 'Other Mazda Models',
                    2 => 'MAZOTH',
                ],
            788 =>
                [
                    0 => 'McLaren',
                    1 => 'MP4-12C',
                    2 => 'MP4',
                ],
            789 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => '190 Class (2)',
                    2 => '190_CLASS',
                ],
            790 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 190D',
                    2 => '190D',
                ],
            791 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 190E',
                    2 => '190E',
                ],
            792 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => '240 Class (1)',
                    2 => '240_CLASS',
                ],
            793 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 240D',
                    2 => '240D',
                ],
            794 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => '300 Class / E Class (6)',
                    2 => '300_CLASS_E_CLASS',
                ],
            795 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300CD',
                    2 => '300CD',
                ],
            796 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300CE',
                    2 => '300CE',
                ],
            797 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300D',
                    2 => '300D',
                ],
            798 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300E',
                    2 => '300E',
                ],
            799 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300TD',
                    2 => '300TD',
                ],
            800 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300TE',
                    2 => '300TE',
                ],
            801 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'C Class (13)',
                    2 => 'C_CLASS',
                ],
            802 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C220',
                    2 => 'C220',
                ],
            803 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C230',
                    2 => 'C230',
                ],
            804 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C240',
                    2 => 'C240',
                ],
            805 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C250',
                    2 => 'C250',
                ],
            806 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C280',
                    2 => 'C280',
                ],
            807 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C300',
                    2 => 'C300',
                ],
            808 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C320',
                    2 => 'C320',
                ],
            809 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C32 AMG',
                    2 => 'C32AMG',
                ],
            810 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C350',
                    2 => 'C350',
                ],
            811 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C36 AMG',
                    2 => 'C36AMG',
                ],
            812 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C43 AMG',
                    2 => 'C43AMG',
                ],
            813 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C55 AMG',
                    2 => 'C55AMG',
                ],
            814 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - C63 AMG',
                    2 => 'C63AMG',
                ],
            815 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'CL Class (6)',
                    2 => 'CL_CLASS',
                ],
            816 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL500',
                    2 => 'CL500',
                ],
            817 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL550',
                    2 => 'CL550',
                ],
            818 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL55 AMG',
                    2 => 'CL55AMG',
                ],
            819 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL600',
                    2 => 'CL600',
                ],
            820 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL63 AMG',
                    2 => 'CL63AMG',
                ],
            821 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CL65 AMG',
                    2 => 'CL65AMG',
                ],
            822 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'CLK Class (7)',
                    2 => 'CLK_CLASS',
                ],
            823 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK320',
                    2 => 'CLK320',
                ],
            824 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK350',
                    2 => 'CLK350',
                ],
            825 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK430',
                    2 => 'CLK430',
                ],
            826 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK500',
                    2 => 'CLK500',
                ],
            827 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK550',
                    2 => 'CLK550',
                ],
            828 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK55 AMG',
                    2 => 'CLK55AMG',
                ],
            829 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLK63 AMG',
                    2 => 'CLK63AMG',
                ],
            830 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'CLS Class (4)',
                    2 => 'CLS_CLASS',
                ],
            831 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLS500',
                    2 => 'CLS500',
                ],
            832 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLS550',
                    2 => 'CLS550',
                ],
            833 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLS55 AMG',
                    2 => 'CLS55AMG',
                ],
            834 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - CLS63 AMG',
                    2 => 'CLS63AMG',
                ],
            835 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'E Class (18)',
                    2 => 'E_CLASS',
                ],
            836 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 260E',
                    2 => '260E',
                ],
            837 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 280CE',
                    2 => '280CE',
                ],
            838 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 280E',
                    2 => '280E',
                ],
            839 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 400E',
                    2 => '400E',
                ],
            840 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 500E',
                    2 => '500E',
                ],
            841 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E300',
                    2 => 'E300',
                ],
            842 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E320',
                    2 => 'E320',
                ],
            843 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E320 Bluetec',
                    2 => 'E320BLUE',
                ],
            844 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E320 CDI',
                    2 => 'E320CDI',
                ],
            845 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E350',
                    2 => 'E350',
                ],
            846 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E350 Bluetec',
                    2 => 'E350BLUE',
                ],
            847 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E400 Hybrid',
                    2 => 'E400',
                ],
            848 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E420',
                    2 => 'E420',
                ],
            849 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E430',
                    2 => 'E430',
                ],
            850 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E500',
                    2 => 'E500',
                ],
            851 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E550',
                    2 => 'E550',
                ],
            852 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E55 AMG',
                    2 => 'E55AMG',
                ],
            853 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - E63 AMG',
                    2 => 'E63AMG',
                ],
            854 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'G Class (4)',
                    2 => 'G_CLASS',
                ],
            855 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - G500',
                    2 => 'G500',
                ],
            856 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - G550',
                    2 => 'G550',
                ],
            857 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - G55 AMG',
                    2 => 'G55AMG',
                ],
            858 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - G63 AMG',
                    2 => 'G63AMG',
                ],
            859 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'GL Class (5)',
                    2 => 'GL_CLASS',
                ],
            860 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GL320 Bluetec',
                    2 => 'GL320BLUE',
                ],
            861 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GL320 CDI',
                    2 => 'GL320CDI',
                ],
            862 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GL350 Bluetec',
                    2 => 'GL350BLUE',
                ],
            863 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GL450',
                    2 => 'GL450',
                ],
            864 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GL550',
                    2 => 'GL550',
                ],
            865 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'GLK Class (1)',
                    2 => 'GLK_CLASS',
                ],
            866 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - GLK350',
                    2 => 'GLK350',
                ],
            867 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'M Class (11)',
                    2 => 'M_CLASS',
                ],
            868 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML320',
                    2 => 'ML320',
                ],
            869 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML320 Bluetec',
                    2 => 'ML320BLUE',
                ],
            870 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML320 CDI',
                    2 => 'ML320CDI',
                ],
            871 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML350',
                    2 => 'ML350',
                ],
            872 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML350 Bluetec',
                    2 => 'ML350BLUE',
                ],
            873 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML430',
                    2 => 'ML430',
                ],
            874 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML450 Hybrid',
                    2 => 'ML450HY',
                ],
            875 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML500',
                    2 => 'ML500',
                ],
            876 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML550',
                    2 => 'ML550',
                ],
            877 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML55 AMG',
                    2 => 'ML55AMG',
                ],
            878 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - ML63 AMG',
                    2 => 'ML63AMG',
                ],
            879 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'R Class (6)',
                    2 => 'R_CLASS',
                ],
            880 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R320 Bluetec',
                    2 => 'R320BLUE',
                ],
            881 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R320 CDI',
                    2 => 'R320CDI',
                ],
            882 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R350',
                    2 => 'R350',
                ],
            883 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R350 Bluetec',
                    2 => 'R350BLUE',
                ],
            884 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R500',
                    2 => 'R500',
                ],
            885 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - R63 AMG',
                    2 => 'R63AMG',
                ],
            886 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'S Class (30)',
                    2 => 'S_CLASS',
                ],
            887 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300SD',
                    2 => '300SD',
                ],
            888 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300SDL',
                    2 => '300SDL',
                ],
            889 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300SE',
                    2 => '300SE',
                ],
            890 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300SEL',
                    2 => '300SEL',
                ],
            891 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 350SD',
                    2 => '350SD',
                ],
            892 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 350SDL',
                    2 => '350SDL',
                ],
            893 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 380SE',
                    2 => '380SE',
                ],
            894 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 380SEC',
                    2 => '380SEC',
                ],
            895 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 380SEL',
                    2 => '380SEL',
                ],
            896 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 400SE',
                    2 => '400SE',
                ],
            897 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 400SEL',
                    2 => '400SEL',
                ],
            898 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 420SEL',
                    2 => '420SEL',
                ],
            899 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 500SEC',
                    2 => '500SEC',
                ],
            900 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 500SEL',
                    2 => '500SEL',
                ],
            901 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 560SEC',
                    2 => '560SEC',
                ],
            902 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 560SEL',
                    2 => '560SEL',
                ],
            903 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 600SEC',
                    2 => '600SEC',
                ],
            904 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 600SEL',
                    2 => '600SEL',
                ],
            905 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S320',
                    2 => 'S320',
                ],
            906 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S350',
                    2 => 'S350',
                ],
            907 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S350 Bluetec',
                    2 => 'S350BLUE',
                ],
            908 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S400 Hybrid',
                    2 => 'S400HY',
                ],
            909 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S420',
                    2 => 'S420',
                ],
            910 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S430',
                    2 => 'S430',
                ],
            911 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S500',
                    2 => 'S500',
                ],
            912 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S550',
                    2 => 'S550',
                ],
            913 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S55 AMG',
                    2 => 'S55AMG',
                ],
            914 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S600',
                    2 => 'S600',
                ],
            915 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S63 AMG',
                    2 => 'S63AMG',
                ],
            916 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - S65 AMG',
                    2 => 'S65AMG',
                ],
            917 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'SL Class (13)',
                    2 => 'SL_CLASS',
                ],
            918 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 300SL',
                    2 => '300SL',
                ],
            919 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 380SL',
                    2 => '380SL',
                ],
            920 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 380SLC',
                    2 => '380SLC',
                ],
            921 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 500SL',
                    2 => '500SL',
                ],
            922 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 560SL',
                    2 => '560SL',
                ],
            923 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - 600SL',
                    2 => '600SL',
                ],
            924 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL320',
                    2 => 'SL320',
                ],
            925 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL500',
                    2 => 'SL500',
                ],
            926 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL550',
                    2 => 'SL550',
                ],
            927 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL55 AMG',
                    2 => 'SL55AMG',
                ],
            928 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL600',
                    2 => 'SL600',
                ],
            929 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL63 AMG',
                    2 => 'SL63AMG',
                ],
            930 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SL65 AMG',
                    2 => 'SL65AMG',
                ],
            931 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'SLK Class (8)',
                    2 => 'SLK_CLASS',
                ],
            932 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK230',
                    2 => 'SLK230',
                ],
            933 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK250',
                    2 => 'SLK250',
                ],
            934 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK280',
                    2 => 'SLK280',
                ],
            935 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK300',
                    2 => 'SLK300',
                ],
            936 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK320',
                    2 => 'SLK320',
                ],
            937 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK32 AMG',
                    2 => 'SLK32AMG',
                ],
            938 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK350',
                    2 => 'SLK350',
                ],
            939 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLK55 AMG',
                    2 => 'SLK55AMG',
                ],
            940 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'SLR Class (1)',
                    2 => 'SLR_CLASS',
                ],
            941 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLR',
                    2 => 'SLR',
                ],
            942 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'SLS Class (1)',
                    2 => 'SLS_CLASS',
                ],
            943 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - SLS AMG',
                    2 => 'SLSAMG',
                ],
            944 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'Sprinter Class (1)',
                    2 => 'SPRINTER_CLASS',
                ],
            945 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => ' - Sprinter',
                    2 => 'MBSPRINTER',
                ],
            946 =>
                [
                    0 => 'Mercedes-Benz',
                    1 => 'Other Mercedes-Benz Models',
                    2 => 'MBOTH',
                ],
            947 =>
                [
                    0 => 'Mercury',
                    1 => 'Capri',
                    2 => 'CAPRI',
                ],
            948 =>
                [
                    0 => 'Mercury',
                    1 => 'Cougar',
                    2 => 'COUGAR',
                ],
            949 =>
                [
                    0 => 'Mercury',
                    1 => 'Grand Marquis',
                    2 => 'MERCGRAND',
                ],
            950 =>
                [
                    0 => 'Mercury',
                    1 => 'Lynx',
                    2 => 'LYNX',
                ],
            951 =>
                [
                    0 => 'Mercury',
                    1 => 'Marauder',
                    2 => 'MARAUDER',
                ],
            952 =>
                [
                    0 => 'Mercury',
                    1 => 'Mariner',
                    2 => 'MARINER',
                ],
            953 =>
                [
                    0 => 'Mercury',
                    1 => 'Marquis',
                    2 => 'MARQ',
                ],
            954 =>
                [
                    0 => 'Mercury',
                    1 => 'Milan',
                    2 => 'MILAN',
                ],
            955 =>
                [
                    0 => 'Mercury',
                    1 => 'Montego',
                    2 => 'MONTEGO',
                ],
            956 =>
                [
                    0 => 'Mercury',
                    1 => 'Monterey',
                    2 => 'MONTEREY',
                ],
            957 =>
                [
                    0 => 'Mercury',
                    1 => 'Mountaineer',
                    2 => 'MOUNTA',
                ],
            958 =>
                [
                    0 => 'Mercury',
                    1 => 'Mystique',
                    2 => 'MYSTIQ',
                ],
            959 =>
                [
                    0 => 'Mercury',
                    1 => 'Sable',
                    2 => 'SABLE',
                ],
            960 =>
                [
                    0 => 'Mercury',
                    1 => 'Topaz',
                    2 => 'TOPAZ',
                ],
            961 =>
                [
                    0 => 'Mercury',
                    1 => 'Tracer',
                    2 => 'TRACER',
                ],
            962 =>
                [
                    0 => 'Mercury',
                    1 => 'Villager',
                    2 => 'VILLA',
                ],
            963 =>
                [
                    0 => 'Mercury',
                    1 => 'Zephyr',
                    2 => 'MERCZEP',
                ],
            964 =>
                [
                    0 => 'Mercury',
                    1 => 'Other Mercury Models',
                    2 => 'MEOTH',
                ],
            965 =>
                [
                    0 => 'Merkur',
                    1 => 'Scorpio',
                    2 => 'SCORP',
                ],
            966 =>
                [
                    0 => 'Merkur',
                    1 => 'XR4Ti',
                    2 => 'XR4TI',
                ],
            967 =>
                [
                    0 => 'Merkur',
                    1 => 'Other Merkur Models',
                    2 => 'MEROTH',
                ],
            968 =>
                [
                    0 => 'MINI',
                    1 => 'Cooper Clubman Models (2)',
                    2 => 'COOPRCLUB_MODELS',
                ],
            969 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper Clubman',
                    2 => 'COOPERCLUB',
                ],
            970 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper S Clubman',
                    2 => 'COOPRCLUBS',
                ],
            971 =>
                [
                    0 => 'MINI',
                    1 => 'Cooper Countryman Models (2)',
                    2 => 'COOPCOUNTRY_MODELS',
                ],
            972 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper Countryman',
                    2 => 'COUNTRYMAN',
                ],
            973 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper S Countryman',
                    2 => 'COUNTRYMNS',
                ],
            974 =>
                [
                    0 => 'MINI',
                    1 => 'Cooper Coupe Models (2)',
                    2 => 'COOPCOUP_MODELS',
                ],
            975 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper Coupe',
                    2 => 'MINICOUPE',
                ],
            976 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper S Coupe',
                    2 => 'MINISCOUPE',
                ],
            977 =>
                [
                    0 => 'MINI',
                    1 => 'Cooper Models (2)',
                    2 => 'COOPER_MODELS',
                ],
            978 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper',
                    2 => 'COOPER',
                ],
            979 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper S',
                    2 => 'COOPERS',
                ],
            980 =>
                [
                    0 => 'MINI',
                    1 => 'Cooper Roadster Models (2)',
                    2 => 'COOPRROAD_MODELS',
                ],
            981 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper Roadster',
                    2 => 'COOPERROAD',
                ],
            982 =>
                [
                    0 => 'MINI',
                    1 => ' - Cooper S Roadster',
                    2 => 'COOPERSRD',
                ],
            983 =>
                [
                    0 => 'Mitsubishi',
                    1 => '3000GT',
                    2 => '3000GT',
                ],
            984 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Cordia',
                    2 => 'CORD',
                ],
            985 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Diamante',
                    2 => 'DIAMAN',
                ],
            986 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Eclipse',
                    2 => 'ECLIP',
                ],
            987 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Endeavor',
                    2 => 'ENDEAVOR',
                ],
            988 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Expo',
                    2 => 'MITEXP',
                ],
            989 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Galant',
                    2 => 'GALANT',
                ],
            990 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'i',
                    2 => 'MITI',
                ],
            991 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Lancer',
                    2 => 'LANCERMITS',
                ],
            992 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Lancer Evolution',
                    2 => 'LANCEREVO',
                ],
            993 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Mighty Max',
                    2 => 'MITPU',
                ],
            994 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Mirage',
                    2 => 'MIRAGE',
                ],
            995 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Montero',
                    2 => 'MONT',
                ],
            996 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Montero Sport',
                    2 => 'MONTSPORT',
                ],
            997 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Outlander',
                    2 => 'OUTLANDER',
                ],
            998 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Outlander Sport',
                    2 => 'OUTLANDSPT',
                ],
            999 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Precis',
                    2 => 'PRECIS',
                ],
            1000 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Raider',
                    2 => 'RAIDERMITS',
                ],
            1001 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Sigma',
                    2 => 'SIGMA',
                ],
            1002 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Starion',
                    2 => 'MITSTAR',
                ],
            1003 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Tredia',
                    2 => 'TRED',
                ],
            1004 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Van',
                    2 => 'MITVAN',
                ],
            1005 =>
                [
                    0 => 'Mitsubishi',
                    1 => 'Other Mitsubishi Models',
                    2 => 'MITOTH',
                ],
            1006 =>
                [
                    0 => 'Nissan',
                    1 => '200SX',
                    2 => 'NIS200SX',
                ],
            1007 =>
                [
                    0 => 'Nissan',
                    1 => '240SX',
                    2 => '240SX',
                ],
            1008 =>
                [
                    0 => 'Nissan',
                    1 => '300ZX',
                    2 => '300ZXTURBO',
                ],
            1009 =>
                [
                    0 => 'Nissan',
                    1 => '350Z',
                    2 => '350Z',
                ],
            1010 =>
                [
                    0 => 'Nissan',
                    1 => '370Z',
                    2 => '370Z',
                ],
            1011 =>
                [
                    0 => 'Nissan',
                    1 => 'Altima',
                    2 => 'ALTIMA',
                ],
            1012 =>
                [
                    0 => 'Nissan',
                    1 => 'Armada',
                    2 => 'PATHARMADA',
                ],
            1013 =>
                [
                    0 => 'Nissan',
                    1 => 'Axxess',
                    2 => 'AXXESS',
                ],
            1014 =>
                [
                    0 => 'Nissan',
                    1 => 'Cube',
                    2 => 'CUBE',
                ],
            1015 =>
                [
                    0 => 'Nissan',
                    1 => 'Frontier',
                    2 => 'FRONTI',
                ],
            1016 =>
                [
                    0 => 'Nissan',
                    1 => 'GT-R',
                    2 => 'GT-R',
                ],
            1017 =>
                [
                    0 => 'Nissan',
                    1 => 'Juke',
                    2 => 'JUKE',
                ],
            1018 =>
                [
                    0 => 'Nissan',
                    1 => 'Leaf',
                    2 => 'LEAF',
                ],
            1019 =>
                [
                    0 => 'Nissan',
                    1 => 'Maxima',
                    2 => 'MAX',
                ],
            1020 =>
                [
                    0 => 'Nissan',
                    1 => 'Murano',
                    2 => 'MURANO',
                ],
            1021 =>
                [
                    0 => 'Nissan',
                    1 => 'Murano CrossCabriolet',
                    2 => 'MURANOCROS',
                ],
            1022 =>
                [
                    0 => 'Nissan',
                    1 => 'NV',
                    2 => 'NV',
                ],
            1023 =>
                [
                    0 => 'Nissan',
                    1 => 'NX',
                    2 => 'NX',
                ],
            1024 =>
                [
                    0 => 'Nissan',
                    1 => 'Pathfinder',
                    2 => 'PATH',
                ],
            1025 =>
                [
                    0 => 'Nissan',
                    1 => 'Pickup',
                    2 => 'NISPU',
                ],
            1026 =>
                [
                    0 => 'Nissan',
                    1 => 'Pulsar',
                    2 => 'PULSAR',
                ],
            1027 =>
                [
                    0 => 'Nissan',
                    1 => 'Quest',
                    2 => 'QUEST',
                ],
            1028 =>
                [
                    0 => 'Nissan',
                    1 => 'Rogue',
                    2 => 'ROGUE',
                ],
            1029 =>
                [
                    0 => 'Nissan',
                    1 => 'Sentra',
                    2 => 'SENTRA',
                ],
            1030 =>
                [
                    0 => 'Nissan',
                    1 => 'Stanza',
                    2 => 'STANZA',
                ],
            1031 =>
                [
                    0 => 'Nissan',
                    1 => 'Titan',
                    2 => 'TITAN',
                ],
            1032 =>
                [
                    0 => 'Nissan',
                    1 => 'Van',
                    2 => 'NISVAN',
                ],
            1033 =>
                [
                    0 => 'Nissan',
                    1 => 'Versa',
                    2 => 'VERSA',
                ],
            1034 =>
                [
                    0 => 'Nissan',
                    1 => 'Xterra',
                    2 => 'XTERRA',
                ],
            1035 =>
                [
                    0 => 'Nissan',
                    1 => 'Other Nissan Models',
                    2 => 'NISSOTH',
                ],
            1036 =>
                [
                    0 => 'Oldsmobile',
                    1 => '88',
                    2 => '88',
                ],
            1037 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Achieva',
                    2 => 'ACHIEV',
                ],
            1038 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Alero',
                    2 => 'ALERO',
                ],
            1039 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Aurora',
                    2 => 'AURORA',
                ],
            1040 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Bravada',
                    2 => 'BRAV',
                ],
            1041 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Custom Cruiser',
                    2 => 'CUCR',
                ],
            1042 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Cutlass',
                    2 => 'OLDCUS',
                ],
            1043 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Cutlass Calais',
                    2 => 'OLDCALAIS',
                ],
            1044 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Cutlass Ciera',
                    2 => 'CIERA',
                ],
            1045 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Cutlass Supreme',
                    2 => 'CSUPR',
                ],
            1046 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Firenza',
                    2 => 'OLDSFIR',
                ],
            1047 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Intrigue',
                    2 => 'INTRIG',
                ],
            1048 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Ninety-Eight',
                    2 => '98',
                ],
            1049 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Omega',
                    2 => 'OMEG',
                ],
            1050 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Regency',
                    2 => 'REGEN',
                ],
            1051 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Silhouette',
                    2 => 'SILHO',
                ],
            1052 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Toronado',
                    2 => 'TORO',
                ],
            1053 =>
                [
                    0 => 'Oldsmobile',
                    1 => 'Other Oldsmobile Models',
                    2 => 'OLDOTH',
                ],
            1054 =>
                [
                    0 => 'Peugeot',
                    1 => '405',
                    2 => '405',
                ],
            1055 =>
                [
                    0 => 'Peugeot',
                    1 => '504',
                    2 => '504',
                ],
            1056 =>
                [
                    0 => 'Peugeot',
                    1 => '505',
                    2 => '505',
                ],
            1057 =>
                [
                    0 => 'Peugeot',
                    1 => '604',
                    2 => '604',
                ],
            1058 =>
                [
                    0 => 'Peugeot',
                    1 => 'Other Peugeot Models',
                    2 => 'UNAVAILPEU',
                ],
            1059 =>
                [
                    0 => 'Plymouth',
                    1 => 'Acclaim',
                    2 => 'ACC',
                ],
            1060 =>
                [
                    0 => 'Plymouth',
                    1 => 'Arrow',
                    2 => 'ARROW',
                ],
            1061 =>
                [
                    0 => 'Plymouth',
                    1 => 'Breeze',
                    2 => 'BREEZE',
                ],
            1062 =>
                [
                    0 => 'Plymouth',
                    1 => 'Caravelle',
                    2 => 'CARAVE',
                ],
            1063 =>
                [
                    0 => 'Plymouth',
                    1 => 'Champ',
                    2 => 'CHAMP',
                ],
            1064 =>
                [
                    0 => 'Plymouth',
                    1 => 'Colt',
                    2 => 'COLT',
                ],
            1065 =>
                [
                    0 => 'Plymouth',
                    1 => 'Conquest',
                    2 => 'PLYMCONQ',
                ],
            1066 =>
                [
                    0 => 'Plymouth',
                    1 => 'Gran Fury',
                    2 => 'GRANFURY',
                ],
            1067 =>
                [
                    0 => 'Plymouth',
                    1 => 'Grand Voyager',
                    2 => 'PLYMGRANV',
                ],
            1068 =>
                [
                    0 => 'Plymouth',
                    1 => 'Horizon',
                    2 => 'HORI',
                ],
            1069 =>
                [
                    0 => 'Plymouth',
                    1 => 'Laser',
                    2 => 'LASER',
                ],
            1070 =>
                [
                    0 => 'Plymouth',
                    1 => 'Neon',
                    2 => 'NEON',
                ],
            1071 =>
                [
                    0 => 'Plymouth',
                    1 => 'Prowler',
                    2 => 'PROWLE',
                ],
            1072 =>
                [
                    0 => 'Plymouth',
                    1 => 'Reliant',
                    2 => 'RELI',
                ],
            1073 =>
                [
                    0 => 'Plymouth',
                    1 => 'Sapporo',
                    2 => 'SAPPOROPLY',
                ],
            1074 =>
                [
                    0 => 'Plymouth',
                    1 => 'Scamp',
                    2 => 'SCAMP',
                ],
            1075 =>
                [
                    0 => 'Plymouth',
                    1 => 'Sundance',
                    2 => 'SUNDAN',
                ],
            1076 =>
                [
                    0 => 'Plymouth',
                    1 => 'Trailduster',
                    2 => 'TRAILDUST',
                ],
            1077 =>
                [
                    0 => 'Plymouth',
                    1 => 'Voyager',
                    2 => 'VOYA',
                ],
            1078 =>
                [
                    0 => 'Plymouth',
                    1 => 'Other Plymouth Models',
                    2 => 'PLYOTH',
                ],
            1079 =>
                [
                    0 => 'Pontiac',
                    1 => '1000',
                    2 => 'T-1000',
                ],
            1080 =>
                [
                    0 => 'Pontiac',
                    1 => '6000',
                    2 => '6000',
                ],
            1081 =>
                [
                    0 => 'Pontiac',
                    1 => 'Aztek',
                    2 => 'AZTEK',
                ],
            1082 =>
                [
                    0 => 'Pontiac',
                    1 => 'Bonneville',
                    2 => 'BON',
                ],
            1083 =>
                [
                    0 => 'Pontiac',
                    1 => 'Catalina',
                    2 => 'CATALINA',
                ],
            1084 =>
                [
                    0 => 'Pontiac',
                    1 => 'Fiero',
                    2 => 'FIERO',
                ],
            1085 =>
                [
                    0 => 'Pontiac',
                    1 => 'Firebird',
                    2 => 'FBIRD',
                ],
            1086 =>
                [
                    0 => 'Pontiac',
                    1 => 'G3',
                    2 => 'G3',
                ],
            1087 =>
                [
                    0 => 'Pontiac',
                    1 => 'G5',
                    2 => 'G5',
                ],
            1088 =>
                [
                    0 => 'Pontiac',
                    1 => 'G6',
                    2 => 'G6',
                ],
            1089 =>
                [
                    0 => 'Pontiac',
                    1 => 'G8',
                    2 => 'G8',
                ],
            1090 =>
                [
                    0 => 'Pontiac',
                    1 => 'Grand Am',
                    2 => 'GRNDAM',
                ],
            1091 =>
                [
                    0 => 'Pontiac',
                    1 => 'Grand Prix',
                    2 => 'GP',
                ],
            1092 =>
                [
                    0 => 'Pontiac',
                    1 => 'GTO',
                    2 => 'GTO',
                ],
            1093 =>
                [
                    0 => 'Pontiac',
                    1 => 'J2000',
                    2 => 'J2000',
                ],
            1094 =>
                [
                    0 => 'Pontiac',
                    1 => 'Le Mans',
                    2 => 'LEMANS',
                ],
            1095 =>
                [
                    0 => 'Pontiac',
                    1 => 'Montana',
                    2 => 'MONTANA',
                ],
            1096 =>
                [
                    0 => 'Pontiac',
                    1 => 'Parisienne',
                    2 => 'PARISI',
                ],
            1097 =>
                [
                    0 => 'Pontiac',
                    1 => 'Phoenix',
                    2 => 'PHOENIX',
                ],
            1098 =>
                [
                    0 => 'Pontiac',
                    1 => 'Safari',
                    2 => 'SAFARIPONT',
                ],
            1099 =>
                [
                    0 => 'Pontiac',
                    1 => 'Solstice',
                    2 => 'SOLSTICE',
                ],
            1100 =>
                [
                    0 => 'Pontiac',
                    1 => 'Sunbird',
                    2 => 'SUNBIR',
                ],
            1101 =>
                [
                    0 => 'Pontiac',
                    1 => 'Sunfire',
                    2 => 'SUNFIR',
                ],
            1102 =>
                [
                    0 => 'Pontiac',
                    1 => 'Torrent',
                    2 => 'TORRENT',
                ],
            1103 =>
                [
                    0 => 'Pontiac',
                    1 => 'Trans Sport',
                    2 => 'TS',
                ],
            1104 =>
                [
                    0 => 'Pontiac',
                    1 => 'Vibe',
                    2 => 'VIBE',
                ],
            1105 =>
                [
                    0 => 'Pontiac',
                    1 => 'Other Pontiac Models',
                    2 => 'PONOTH',
                ],
            1106 =>
                [
                    0 => 'Porsche',
                    1 => '911',
                    2 => '911',
                ],
            1107 =>
                [
                    0 => 'Porsche',
                    1 => '924',
                    2 => '924',
                ],
            1108 =>
                [
                    0 => 'Porsche',
                    1 => '928',
                    2 => '928',
                ],
            1109 =>
                [
                    0 => 'Porsche',
                    1 => '944',
                    2 => '944',
                ],
            1110 =>
                [
                    0 => 'Porsche',
                    1 => '968',
                    2 => '968',
                ],
            1111 =>
                [
                    0 => 'Porsche',
                    1 => 'Boxster',
                    2 => 'BOXSTE',
                ],
            1112 =>
                [
                    0 => 'Porsche',
                    1 => 'Carrera GT',
                    2 => 'CARRERAGT',
                ],
            1113 =>
                [
                    0 => 'Porsche',
                    1 => 'Cayenne',
                    2 => 'CAYENNE',
                ],
            1114 =>
                [
                    0 => 'Porsche',
                    1 => 'Cayman',
                    2 => 'CAYMAN',
                ],
            1115 =>
                [
                    0 => 'Porsche',
                    1 => 'Panamera',
                    2 => 'PANAMERA',
                ],
            1116 =>
                [
                    0 => 'Porsche',
                    1 => 'Other Porsche Models',
                    2 => 'POROTH',
                ],
            1117 =>
                [
                    0 => 'RAM',
                    1 => '1500',
                    2 => 'RAM1504WD',
                ],
            1118 =>
                [
                    0 => 'RAM',
                    1 => '2500',
                    2 => 'RAM25002WD',
                ],
            1119 =>
                [
                    0 => 'RAM',
                    1 => '3500',
                    2 => 'RAM3502WD',
                ],
            1120 =>
                [
                    0 => 'RAM',
                    1 => '4500',
                    2 => 'RAM4500',
                ],
            1121 =>
                [
                    0 => 'Renault',
                    1 => '18i',
                    2 => '18I',
                ],
            1122 =>
                [
                    0 => 'Renault',
                    1 => 'Fuego',
                    2 => 'FU',
                ],
            1123 =>
                [
                    0 => 'Renault',
                    1 => 'Le Car',
                    2 => 'LECAR',
                ],
            1124 =>
                [
                    0 => 'Renault',
                    1 => 'R18',
                    2 => 'R18',
                ],
            1125 =>
                [
                    0 => 'Renault',
                    1 => 'Sportwagon',
                    2 => 'RENSPORT',
                ],
            1126 =>
                [
                    0 => 'Renault',
                    1 => 'Other Renault Models',
                    2 => 'UNAVAILREN',
                ],
            1127 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Camargue',
                    2 => 'CAMAR',
                ],
            1128 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Corniche',
                    2 => 'CORN',
                ],
            1129 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Ghost',
                    2 => 'GHOST',
                ],
            1130 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Park Ward',
                    2 => 'PARKWARD',
                ],
            1131 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Phantom',
                    2 => 'PHANT',
                ],
            1132 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Silver Dawn',
                    2 => 'DAWN',
                ],
            1133 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Silver Seraph',
                    2 => 'SILSERAPH',
                ],
            1134 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Silver Spirit',
                    2 => 'RRSPIR',
                ],
            1135 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Silver Spur',
                    2 => 'SPUR',
                ],
            1136 =>
                [
                    0 => 'Rolls-Royce',
                    1 => 'Other Rolls-Royce Models',
                    2 => 'UNAVAILRR',
                ],
            1137 =>
                [
                    0 => 'Saab',
                    1 => '9-2X',
                    2 => '9-2X',
                ],
            1138 =>
                [
                    0 => 'Saab',
                    1 => '9-3',
                    2 => '9-3',
                ],
            1139 =>
                [
                    0 => 'Saab',
                    1 => '9-4X',
                    2 => '9-4X',
                ],
            1140 =>
                [
                    0 => 'Saab',
                    1 => '9-5',
                    2 => '9-5',
                ],
            1141 =>
                [
                    0 => 'Saab',
                    1 => '9-7X',
                    2 => '97X',
                ],
            1142 =>
                [
                    0 => 'Saab',
                    1 => '900',
                    2 => '900',
                ],
            1143 =>
                [
                    0 => 'Saab',
                    1 => '9000',
                    2 => '9000',
                ],
            1144 =>
                [
                    0 => 'Saab',
                    1 => 'Other Saab Models',
                    2 => 'SAOTH',
                ],
            1145 =>
                [
                    0 => 'Saturn',
                    1 => 'Astra',
                    2 => 'ASTRA',
                ],
            1146 =>
                [
                    0 => 'Saturn',
                    1 => 'Aura',
                    2 => 'AURA',
                ],
            1147 =>
                [
                    0 => 'Saturn',
                    1 => 'ION',
                    2 => 'ION',
                ],
            1148 =>
                [
                    0 => 'Saturn',
                    1 => 'L Series (3)',
                    2 => 'L_SERIES',
                ],
            1149 =>
                [
                    0 => 'Saturn',
                    1 => ' - L100',
                    2 => 'L100',
                ],
            1150 =>
                [
                    0 => 'Saturn',
                    1 => ' - L200',
                    2 => 'L200',
                ],
            1151 =>
                [
                    0 => 'Saturn',
                    1 => ' - L300',
                    2 => 'L300',
                ],
            1152 =>
                [
                    0 => 'Saturn',
                    1 => 'LS',
                    2 => 'LSSATURN',
                ],
            1153 =>
                [
                    0 => 'Saturn',
                    1 => 'LW Series (4)',
                    2 => 'LW_SERIES',
                ],
            1154 =>
                [
                    0 => 'Saturn',
                    1 => ' - LW1',
                    2 => 'LW',
                ],
            1155 =>
                [
                    0 => 'Saturn',
                    1 => ' - LW2',
                    2 => 'LW2',
                ],
            1156 =>
                [
                    0 => 'Saturn',
                    1 => ' - LW200',
                    2 => 'LW200',
                ],
            1157 =>
                [
                    0 => 'Saturn',
                    1 => ' - LW300',
                    2 => 'LW300',
                ],
            1158 =>
                [
                    0 => 'Saturn',
                    1 => 'Outlook',
                    2 => 'OUTLOOK',
                ],
            1159 =>
                [
                    0 => 'Saturn',
                    1 => 'Relay',
                    2 => 'RELAY',
                ],
            1160 =>
                [
                    0 => 'Saturn',
                    1 => 'SC Series (2)',
                    2 => 'SC_SERIES',
                ],
            1161 =>
                [
                    0 => 'Saturn',
                    1 => ' - SC1',
                    2 => 'SC1',
                ],
            1162 =>
                [
                    0 => 'Saturn',
                    1 => ' - SC2',
                    2 => 'SC2',
                ],
            1163 =>
                [
                    0 => 'Saturn',
                    1 => 'Sky',
                    2 => 'SKY',
                ],
            1164 =>
                [
                    0 => 'Saturn',
                    1 => 'SL Series (3)',
                    2 => 'SL_SERIES',
                ],
            1165 =>
                [
                    0 => 'Saturn',
                    1 => ' - SL',
                    2 => 'SL',
                ],
            1166 =>
                [
                    0 => 'Saturn',
                    1 => ' - SL1',
                    2 => 'SL1',
                ],
            1167 =>
                [
                    0 => 'Saturn',
                    1 => ' - SL2',
                    2 => 'SL2',
                ],
            1168 =>
                [
                    0 => 'Saturn',
                    1 => 'SW Series (2)',
                    2 => 'SW_SERIES',
                ],
            1169 =>
                [
                    0 => 'Saturn',
                    1 => ' - SW1',
                    2 => 'SW1',
                ],
            1170 =>
                [
                    0 => 'Saturn',
                    1 => ' - SW2',
                    2 => 'SW2',
                ],
            1171 =>
                [
                    0 => 'Saturn',
                    1 => 'Vue',
                    2 => 'VUE',
                ],
            1172 =>
                [
                    0 => 'Saturn',
                    1 => 'Other Saturn Models',
                    2 => 'SATOTH',
                ],
            1173 =>
                [
                    0 => 'Scion',
                    1 => 'FR-S',
                    2 => 'SCIFRS',
                ],
            1174 =>
                [
                    0 => 'Scion',
                    1 => 'iQ',
                    2 => 'IQ',
                ],
            1175 =>
                [
                    0 => 'Scion',
                    1 => 'tC',
                    2 => 'TC',
                ],
            1176 =>
                [
                    0 => 'Scion',
                    1 => 'xA',
                    2 => 'XA',
                ],
            1177 =>
                [
                    0 => 'Scion',
                    1 => 'xB',
                    2 => 'XB',
                ],
            1178 =>
                [
                    0 => 'Scion',
                    1 => 'xD',
                    2 => 'XD',
                ],
            1179 =>
                [
                    0 => 'smart',
                    1 => 'fortwo',
                    2 => 'FORTWO',
                ],
            1180 =>
                [
                    0 => 'smart',
                    1 => 'Other smart Models',
                    2 => 'SMOTH',
                ],
            1181 =>
                [
                    0 => 'SRT',
                    1 => 'Viper',
                    2 => 'SRTVIPER',
                ],
            1182 =>
                [
                    0 => 'Sterling',
                    1 => '825',
                    2 => '825',
                ],
            1183 =>
                [
                    0 => 'Sterling',
                    1 => '827',
                    2 => '827',
                ],
            1184 =>
                [
                    0 => 'Sterling',
                    1 => 'Other Sterling Models',
                    2 => 'UNAVAILSTE',
                ],
            1185 =>
                [
                    0 => 'Subaru',
                    1 => 'Baja',
                    2 => 'BAJA',
                ],
            1186 =>
                [
                    0 => 'Subaru',
                    1 => 'Brat',
                    2 => 'BRAT',
                ],
            1187 =>
                [
                    0 => 'Subaru',
                    1 => 'BRZ',
                    2 => 'SUBBRZ',
                ],
            1188 =>
                [
                    0 => 'Subaru',
                    1 => 'Forester',
                    2 => 'FOREST',
                ],
            1189 =>
                [
                    0 => 'Subaru',
                    1 => 'Impreza',
                    2 => 'IMPREZ',
                ],
            1190 =>
                [
                    0 => 'Subaru',
                    1 => 'Impreza WRX',
                    2 => 'IMPWRX',
                ],
            1191 =>
                [
                    0 => 'Subaru',
                    1 => 'Justy',
                    2 => 'JUSTY',
                ],
            1192 =>
                [
                    0 => 'Subaru',
                    1 => 'L Series',
                    2 => 'SUBL',
                ],
            1193 =>
                [
                    0 => 'Subaru',
                    1 => 'Legacy',
                    2 => 'LEGACY',
                ],
            1194 =>
                [
                    0 => 'Subaru',
                    1 => 'Loyale',
                    2 => 'LOYALE',
                ],
            1195 =>
                [
                    0 => 'Subaru',
                    1 => 'Outback',
                    2 => 'SUBOUTBK',
                ],
            1196 =>
                [
                    0 => 'Subaru',
                    1 => 'SVX',
                    2 => 'SVX',
                ],
            1197 =>
                [
                    0 => 'Subaru',
                    1 => 'Tribeca',
                    2 => 'B9TRIBECA',
                ],
            1198 =>
                [
                    0 => 'Subaru',
                    1 => 'XT',
                    2 => 'XT',
                ],
            1199 =>
                [
                    0 => 'Subaru',
                    1 => 'XV Crosstrek',
                    2 => 'XVCRSSTREK',
                ],
            1200 =>
                [
                    0 => 'Subaru',
                    1 => 'Other Subaru Models',
                    2 => 'SUBOTH',
                ],
            1201 =>
                [
                    0 => 'Suzuki',
                    1 => 'Aerio',
                    2 => 'AERIO',
                ],
            1202 =>
                [
                    0 => 'Suzuki',
                    1 => 'Equator',
                    2 => 'EQUATOR',
                ],
            1203 =>
                [
                    0 => 'Suzuki',
                    1 => 'Esteem',
                    2 => 'ESTEEM',
                ],
            1204 =>
                [
                    0 => 'Suzuki',
                    1 => 'Forenza',
                    2 => 'FORENZA',
                ],
            1205 =>
                [
                    0 => 'Suzuki',
                    1 => 'Grand Vitara',
                    2 => 'GRANDV',
                ],
            1206 =>
                [
                    0 => 'Suzuki',
                    1 => 'Kizashi',
                    2 => 'KIZASHI',
                ],
            1207 =>
                [
                    0 => 'Suzuki',
                    1 => 'Reno',
                    2 => 'RENO',
                ],
            1208 =>
                [
                    0 => 'Suzuki',
                    1 => 'Samurai',
                    2 => 'SAMUR',
                ],
            1209 =>
                [
                    0 => 'Suzuki',
                    1 => 'Sidekick',
                    2 => 'SIDE',
                ],
            1210 =>
                [
                    0 => 'Suzuki',
                    1 => 'Swift',
                    2 => 'SWIFT',
                ],
            1211 =>
                [
                    0 => 'Suzuki',
                    1 => 'SX4',
                    2 => 'SX4',
                ],
            1212 =>
                [
                    0 => 'Suzuki',
                    1 => 'Verona',
                    2 => 'VERONA',
                ],
            1213 =>
                [
                    0 => 'Suzuki',
                    1 => 'Vitara',
                    2 => 'VITARA',
                ],
            1214 =>
                [
                    0 => 'Suzuki',
                    1 => 'X-90',
                    2 => 'X90',
                ],
            1215 =>
                [
                    0 => 'Suzuki',
                    1 => 'XL7',
                    2 => 'XL7',
                ],
            1216 =>
                [
                    0 => 'Suzuki',
                    1 => 'Other Suzuki Models',
                    2 => 'SUZOTH',
                ],
            1217 =>
                [
                    0 => 'Tesla',
                    1 => 'Roadster',
                    2 => 'ROADSTER',
                ],
            1218 =>
                [
                    0 => 'Toyota',
                    1 => '4Runner',
                    2 => '4RUN',
                ],
            1219 =>
                [
                    0 => 'Toyota',
                    1 => 'Avalon',
                    2 => 'AVALON',
                ],
            1220 =>
                [
                    0 => 'Toyota',
                    1 => 'Camry',
                    2 => 'CAMRY',
                ],
            1221 =>
                [
                    0 => 'Toyota',
                    1 => 'Celica',
                    2 => 'CELICA',
                ],
            1222 =>
                [
                    0 => 'Toyota',
                    1 => 'Corolla',
                    2 => 'COROL',
                ],
            1223 =>
                [
                    0 => 'Toyota',
                    1 => 'Corona',
                    2 => 'CORONA',
                ],
            1224 =>
                [
                    0 => 'Toyota',
                    1 => 'Cressida',
                    2 => 'CRESS',
                ],
            1225 =>
                [
                    0 => 'Toyota',
                    1 => 'Echo',
                    2 => 'ECHO',
                ],
            1226 =>
                [
                    0 => 'Toyota',
                    1 => 'FJ Cruiser',
                    2 => 'FJCRUIS',
                ],
            1227 =>
                [
                    0 => 'Toyota',
                    1 => 'Highlander',
                    2 => 'HIGHLANDER',
                ],
            1228 =>
                [
                    0 => 'Toyota',
                    1 => 'Land Cruiser',
                    2 => 'LC',
                ],
            1229 =>
                [
                    0 => 'Toyota',
                    1 => 'Matrix',
                    2 => 'MATRIX',
                ],
            1230 =>
                [
                    0 => 'Toyota',
                    1 => 'MR2',
                    2 => 'MR2',
                ],
            1231 =>
                [
                    0 => 'Toyota',
                    1 => 'MR2 Spyder',
                    2 => 'MR2SPYDR',
                ],
            1232 =>
                [
                    0 => 'Toyota',
                    1 => 'Paseo',
                    2 => 'PASEO',
                ],
            1233 =>
                [
                    0 => 'Toyota',
                    1 => 'Pickup',
                    2 => 'PICKUP',
                ],
            1234 =>
                [
                    0 => 'Toyota',
                    1 => 'Previa',
                    2 => 'PREVIA',
                ],
            1235 =>
                [
                    0 => 'Toyota',
                    1 => 'Prius',
                    2 => 'PRIUS',
                ],
            1236 =>
                [
                    0 => 'Toyota',
                    1 => 'Prius C',
                    2 => 'PRIUSC',
                ],
            1237 =>
                [
                    0 => 'Toyota',
                    1 => 'Prius V',
                    2 => 'PRIUSV',
                ],
            1238 =>
                [
                    0 => 'Toyota',
                    1 => 'RAV4',
                    2 => 'RAV4',
                ],
            1239 =>
                [
                    0 => 'Toyota',
                    1 => 'Sequoia',
                    2 => 'SEQUOIA',
                ],
            1240 =>
                [
                    0 => 'Toyota',
                    1 => 'Sienna',
                    2 => 'SIENNA',
                ],
            1241 =>
                [
                    0 => 'Toyota',
                    1 => 'Solara',
                    2 => 'SOLARA',
                ],
            1242 =>
                [
                    0 => 'Toyota',
                    1 => 'Starlet',
                    2 => 'STARLET',
                ],
            1243 =>
                [
                    0 => 'Toyota',
                    1 => 'Supra',
                    2 => 'SUPRA',
                ],
            1244 =>
                [
                    0 => 'Toyota',
                    1 => 'T100',
                    2 => 'T100',
                ],
            1245 =>
                [
                    0 => 'Toyota',
                    1 => 'Tacoma',
                    2 => 'TACOMA',
                ],
            1246 =>
                [
                    0 => 'Toyota',
                    1 => 'Tercel',
                    2 => 'TERCEL',
                ],
            1247 =>
                [
                    0 => 'Toyota',
                    1 => 'Tundra',
                    2 => 'TUNDRA',
                ],
            1248 =>
                [
                    0 => 'Toyota',
                    1 => 'Van',
                    2 => 'TOYVAN',
                ],
            1249 =>
                [
                    0 => 'Toyota',
                    1 => 'Venza',
                    2 => 'VENZA',
                ],
            1250 =>
                [
                    0 => 'Toyota',
                    1 => 'Yaris',
                    2 => 'YARIS',
                ],
            1251 =>
                [
                    0 => 'Toyota',
                    1 => 'Other Toyota Models',
                    2 => 'TOYOTH',
                ],
            1252 =>
                [
                    0 => 'Triumph',
                    1 => 'TR7',
                    2 => 'TR7',
                ],
            1253 =>
                [
                    0 => 'Triumph',
                    1 => 'TR8',
                    2 => 'TR8',
                ],
            1254 =>
                [
                    0 => 'Triumph',
                    1 => 'Other Triumph Models',
                    2 => 'TRIOTH',
                ],
            1255 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Beetle',
                    2 => 'BEETLE',
                ],
            1256 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Cabrio',
                    2 => 'VOLKSCAB',
                ],
            1257 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Cabriolet',
                    2 => 'CAB',
                ],
            1258 =>
                [
                    0 => 'Volkswagen',
                    1 => 'CC',
                    2 => 'CC',
                ],
            1259 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Corrado',
                    2 => 'CORR',
                ],
            1260 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Dasher',
                    2 => 'DASHER',
                ],
            1261 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Eos',
                    2 => 'EOS',
                ],
            1262 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Eurovan',
                    2 => 'EUROVAN',
                ],
            1263 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Fox',
                    2 => 'VOLKSFOX',
                ],
            1264 =>
                [
                    0 => 'Volkswagen',
                    1 => 'GLI',
                    2 => 'GLI',
                ],
            1265 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Golf R',
                    2 => 'GOLFR',
                ],
            1266 =>
                [
                    0 => 'Volkswagen',
                    1 => 'GTI',
                    2 => 'GTI',
                ],
            1267 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Golf and Rabbit Models (2)',
                    2 => 'GOLFANDRABBITMODELS',
                ],
            1268 =>
                [
                    0 => 'Volkswagen',
                    1 => ' - Golf',
                    2 => 'GOLF',
                ],
            1269 =>
                [
                    0 => 'Volkswagen',
                    1 => ' - Rabbit',
                    2 => 'RABBIT',
                ],
            1270 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Jetta',
                    2 => 'JET',
                ],
            1271 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Passat',
                    2 => 'PASS',
                ],
            1272 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Phaeton',
                    2 => 'PHAETON',
                ],
            1273 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Pickup',
                    2 => 'RABBITPU',
                ],
            1274 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Quantum',
                    2 => 'QUAN',
                ],
            1275 =>
                [
                    0 => 'Volkswagen',
                    1 => 'R32',
                    2 => 'R32',
                ],
            1276 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Routan',
                    2 => 'ROUTAN',
                ],
            1277 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Scirocco',
                    2 => 'SCIR',
                ],
            1278 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Tiguan',
                    2 => 'TIGUAN',
                ],
            1279 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Touareg',
                    2 => 'TOUAREG',
                ],
            1280 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Vanagon',
                    2 => 'VANAG',
                ],
            1281 =>
                [
                    0 => 'Volkswagen',
                    1 => 'Other Volkswagen Models',
                    2 => 'VWOTH',
                ],
            1282 =>
                [
                    0 => 'Volvo',
                    1 => '240',
                    2 => '240',
                ],
            1283 =>
                [
                    0 => 'Volvo',
                    1 => '260',
                    2 => '260',
                ],
            1284 =>
                [
                    0 => 'Volvo',
                    1 => '740',
                    2 => '740',
                ],
            1285 =>
                [
                    0 => 'Volvo',
                    1 => '760',
                    2 => '760',
                ],
            1286 =>
                [
                    0 => 'Volvo',
                    1 => '780',
                    2 => '780',
                ],
            1287 =>
                [
                    0 => 'Volvo',
                    1 => '850',
                    2 => '850',
                ],
            1288 =>
                [
                    0 => 'Volvo',
                    1 => '940',
                    2 => '940',
                ],
            1289 =>
                [
                    0 => 'Volvo',
                    1 => '960',
                    2 => '960',
                ],
            1290 =>
                [
                    0 => 'Volvo',
                    1 => 'C30',
                    2 => 'C30',
                ],
            1291 =>
                [
                    0 => 'Volvo',
                    1 => 'C70',
                    2 => 'C70',
                ],
            1292 =>
                [
                    0 => 'Volvo',
                    1 => 'S40',
                    2 => 'S40',
                ],
            1293 =>
                [
                    0 => 'Volvo',
                    1 => 'S60',
                    2 => 'S60',
                ],
            1294 =>
                [
                    0 => 'Volvo',
                    1 => 'S70',
                    2 => 'S70',
                ],
            1295 =>
                [
                    0 => 'Volvo',
                    1 => 'S80',
                    2 => 'S80',
                ],
            1296 =>
                [
                    0 => 'Volvo',
                    1 => 'S90',
                    2 => 'S90',
                ],
            1297 =>
                [
                    0 => 'Volvo',
                    1 => 'V40',
                    2 => 'V40',
                ],
            1298 =>
                [
                    0 => 'Volvo',
                    1 => 'V50',
                    2 => 'V50',
                ],
            1299 =>
                [
                    0 => 'Volvo',
                    1 => 'V70',
                    2 => 'V70',
                ],
            1300 =>
                [
                    0 => 'Volvo',
                    1 => 'V90',
                    2 => 'V90',
                ],
            1301 =>
                [
                    0 => 'Volvo',
                    1 => 'XC60',
                    2 => 'XC60',
                ],
            1302 =>
                [
                    0 => 'Volvo',
                    1 => 'XC70',
                    2 => 'XC',
                ],
            1303 =>
                [
                    0 => 'Volvo',
                    1 => 'XC90',
                    2 => 'XC90',
                ],
            1304 =>
                [
                    0 => 'Volvo',
                    1 => 'Other Volvo Models',
                    2 => 'VOLOTH',
                ],
            1305 =>
                [
                    0 => 'Yugo',
                    1 => 'GV',
                    2 => 'GV',
                ],
            1306 =>
                [
                    0 => 'Yugo',
                    1 => 'GVC',
                    2 => 'GVC',
                ],
            1307 =>
                [
                    0 => 'Yugo',
                    1 => 'GVL',
                    2 => 'GVL',
                ],
            1308 =>
                [
                    0 => 'Yugo',
                    1 => 'GVS',
                    2 => 'GVS',
                ],
            1309 =>
                [
                    0 => 'Yugo',
                    1 => 'GVX',
                    2 => 'GVX',
                ],
            1310 =>
                [
                    0 => 'Yugo',
                    1 => 'Other Yugo Models',
                    2 => 'YUOTH',
                ],
        ];

        $model = new CarsModel();

        foreach($data as $model_data){
            $model->save([
                "manufacturer_name" => $model_data[0],
                "model" => $model_data[1],
                "model_code" => $model_data[2]
            ]);
        }
    }
}
