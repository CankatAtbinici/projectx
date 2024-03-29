<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('cities')->truncate();

        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 1,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Elbasan',
                'full_name' => NULL,
                'code' => 'el',
            ),
            1 =>
            array(
                'id' => 2,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Diber',
                'full_name' => NULL,
                'code' => 'di',
            ),
            2 =>
            array(
                'id' => 3,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Tirane',
                'full_name' => NULL,
                'code' => 'tr',
            ),
            3 =>
            array(
                'id' => 4,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Durres',
                'full_name' => NULL,
                'code' => 'dr',
            ),
            4 =>
            array(
                'id' => 5,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Vlore',
                'full_name' => NULL,
                'code' => 'vl',
            ),
            5 =>
            array(
                'id' => 6,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Fier',
                'full_name' => NULL,
                'code' => 'fr',
            ),
            6 =>
            array(
                'id' => 7,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Gjirokaster',
                'full_name' => NULL,
                'code' => 'gj',
            ),
            7 =>
            array(
                'id' => 8,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Korce',
                'full_name' => NULL,
                'code' => 'ko',
            ),
            8 =>
            array(
                'id' => 9,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Kukes',
                'full_name' => NULL,
                'code' => 'ku',
            ),
            9 =>
            array(
                'id' => 10,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Lezhe',
                'full_name' => NULL,
                'code' => 'le',
            ),
            10 =>
            array(
                'id' => 11,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Berat',
                'full_name' => NULL,
                'code' => 'br',
            ),
            11 =>
            array(
                'id' => 12,
                'country_id' => 156,
                'division_id' => NULL,
                'name' => 'Shkoder',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            12 =>
            array(
                'id' => 13,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Adrar',
                'full_name' => NULL,
                'code' => 'adr',
            ),
            13 =>
            array(
                'id' => 14,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Alger',
                'full_name' => NULL,
                'code' => 'alg',
            ),
            14 =>
            array(
                'id' => 15,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Ain Defla',
                'full_name' => NULL,
                'code' => 'ade',
            ),
            15 =>
            array(
                'id' => 16,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Ain Temouchent',
                'full_name' => NULL,
                'code' => 'ate',
            ),
            16 =>
            array(
                'id' => 17,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Annaba',
                'full_name' => NULL,
                'code' => 'aae',
            ),
            17 =>
            array(
                'id' => 18,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Oran',
                'full_name' => NULL,
                'code' => 'ora',
            ),
            18 =>
            array(
                'id' => 19,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Batna',
                'full_name' => NULL,
                'code' => 'bat',
            ),
            19 =>
            array(
                'id' => 20,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Bejaia',
                'full_name' => NULL,
                'code' => 'bja',
            ),
            20 =>
            array(
                'id' => 21,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Bechar',
                'full_name' => NULL,
                'code' => 'bec',
            ),
            21 =>
            array(
                'id' => 22,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'El Bayadh',
                'full_name' => NULL,
                'code' => 'eba',
            ),
            22 =>
            array(
                'id' => 23,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Biskra',
                'full_name' => NULL,
                'code' => 'bis',
            ),
            23 =>
            array(
                'id' => 24,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Bordj Bou Arreridj',
                'full_name' => NULL,
                'code' => 'bor',
            ),
            24 =>
            array(
                'id' => 25,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Blida',
                'full_name' => NULL,
                'code' => 'bli',
            ),
            25 =>
            array(
                'id' => 26,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Boumerdes',
                'full_name' => NULL,
                'code' => 'bou',
            ),
            26 =>
            array(
                'id' => 27,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Bouira',
                'full_name' => NULL,
                'code' => 'boa',
            ),
            27 =>
            array(
                'id' => 28,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tipaza',
                'full_name' => NULL,
                'code' => 'tip',
            ),
            28 =>
            array(
                'id' => 29,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tissemsilt',
                'full_name' => NULL,
                'code' => 'tis',
            ),
            29 =>
            array(
                'id' => 30,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Ghardaia',
                'full_name' => NULL,
                'code' => 'gha',
            ),
            30 =>
            array(
                'id' => 31,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Guelma',
                'full_name' => NULL,
                'code' => 'gue',
            ),
            31 =>
            array(
                'id' => 32,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Khenchela',
                'full_name' => NULL,
                'code' => 'khe',
            ),
            32 =>
            array(
                'id' => 33,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Relizane',
                'full_name' => NULL,
                'code' => 'rel',
            ),
            33 =>
            array(
                'id' => 34,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Jijel',
                'full_name' => NULL,
                'code' => 'jij',
            ),
            34 =>
            array(
                'id' => 35,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Djelfa',
                'full_name' => NULL,
                'code' => 'dje',
            ),
            35 =>
            array(
                'id' => 36,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Constantine',
                'full_name' => NULL,
                'code' => 'czl',
            ),
            36 =>
            array(
                'id' => 37,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Laghouat',
                'full_name' => NULL,
                'code' => 'lag',
            ),
            37 =>
            array(
                'id' => 38,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Mascara',
                'full_name' => NULL,
                'code' => 'mua',
            ),
            38 =>
            array(
                'id' => 39,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Medea',
                'full_name' => NULL,
                'code' => 'med',
            ),
            39 =>
            array(
                'id' => 40,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Mila',
                'full_name' => NULL,
                'code' => 'mil',
            ),
            40 =>
            array(
                'id' => 41,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Mostaganem',
                'full_name' => NULL,
                'code' => 'mos',
            ),
            41 =>
            array(
                'id' => 42,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Msila',
                'full_name' => NULL,
                'code' => 'msi',
            ),
            42 =>
            array(
                'id' => 43,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Naama',
                'full_name' => NULL,
                'code' => 'naa',
            ),
            43 =>
            array(
                'id' => 44,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Setif',
                'full_name' => NULL,
                'code' => 'set',
            ),
            44 =>
            array(
                'id' => 45,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Saida',
                'full_name' => NULL,
                'code' => 'sai',
            ),
            45 =>
            array(
                'id' => 46,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Skikda',
                'full_name' => NULL,
                'code' => 'ski',
            ),
            46 =>
            array(
                'id' => 47,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Souk Ahras',
                'full_name' => NULL,
                'code' => 'sah',
            ),
            47 =>
            array(
                'id' => 48,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'El Tarf',
                'full_name' => NULL,
                'code' => 'eta',
            ),
            48 =>
            array(
                'id' => 49,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tamanrasset',
                'full_name' => NULL,
                'code' => NULL,
            ),
            49 =>
            array(
                'id' => 50,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tebessa',
                'full_name' => NULL,
                'code' => 'teb',
            ),
            50 =>
            array(
                'id' => 51,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tlemcen',
                'full_name' => NULL,
                'code' => 'tle',
            ),
            51 =>
            array(
                'id' => 52,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tizi Ouzou',
                'full_name' => NULL,
                'code' => 'iou',
            ),
            52 =>
            array(
                'id' => 53,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tiaret',
                'full_name' => NULL,
                'code' => 'tia',
            ),
            53 =>
            array(
                'id' => 54,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Tindouf',
                'full_name' => NULL,
                'code' => 'tin',
            ),
            54 =>
            array(
                'id' => 55,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'El Oued',
                'full_name' => NULL,
                'code' => 'eou',
            ),
            55 =>
            array(
                'id' => 56,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Ouargla',
                'full_name' => NULL,
                'code' => 'oua',
            ),
            56 =>
            array(
                'id' => 57,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Oum el Bouaghi',
                'full_name' => NULL,
                'code' => 'oeb',
            ),
            57 =>
            array(
                'id' => 58,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Sidi Bel Abbes',
                'full_name' => NULL,
                'code' => 'sba',
            ),
            58 =>
            array(
                'id' => 59,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Chlef',
                'full_name' => NULL,
                'code' => 'chl',
            ),
            59 =>
            array(
                'id' => 60,
                'country_id' => 51,
                'division_id' => NULL,
                'name' => 'Illizi',
                'full_name' => NULL,
                'code' => 'ill',
            ),
            60 =>
            array(
                'id' => 61,
                'country_id' => 70,
                'division_id' => NULL,
                'name' => 'Herat',
                'full_name' => NULL,
                'code' => 'hea',
            ),
            61 =>
            array(
                'id' => 62,
                'country_id' => 70,
                'division_id' => NULL,
                'name' => 'Kabul',
                'full_name' => NULL,
                'code' => 'kbl',
            ),
            62 =>
            array(
                'id' => 63,
                'country_id' => 70,
                'division_id' => NULL,
                'name' => 'Kandahar',
                'full_name' => NULL,
                'code' => 'kdh',
            ),
            63 =>
            array(
                'id' => 64,
                'country_id' => 70,
                'division_id' => NULL,
                'name' => 'Mazar-i Sharif',
                'full_name' => NULL,
                'code' => 'mzr',
            ),
            64 =>
            array(
                'id' => 65,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Parana',
                'full_name' => NULL,
                'code' => 'pra',
            ),
            65 =>
            array(
                'id' => 66,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Viedma',
                'full_name' => NULL,
                'code' => 'vdm',
            ),
            66 =>
            array(
                'id' => 67,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Posadas',
                'full_name' => NULL,
                'code' => 'pss',
            ),
            67 =>
            array(
                'id' => 68,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Bahia Blanca',
                'full_name' => NULL,
                'code' => 'bhi',
            ),
            68 =>
            array(
                'id' => 69,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Buenos Aires',
                'full_name' => NULL,
                'code' => 'bue',
            ),
            69 =>
            array(
                'id' => 70,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Formosa',
                'full_name' => NULL,
                'code' => 'fma',
            ),
            70 =>
            array(
                'id' => 71,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Jujuy',
                'full_name' => NULL,
                'code' => 'juj',
            ),
            71 =>
            array(
                'id' => 72,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Catamarca',
                'full_name' => NULL,
                'code' => 'ctc',
            ),
            72 =>
            array(
                'id' => 73,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'cor',
            ),
            73 =>
            array(
                'id' => 74,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Corrientes',
                'full_name' => NULL,
                'code' => 'cnq',
            ),
            74 =>
            array(
                'id' => 75,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Villa Krause',
                'full_name' => NULL,
                'code' => 'vlk',
            ),
            75 =>
            array(
                'id' => 76,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Concordia',
                'full_name' => NULL,
                'code' => 'coc',
            ),
            76 =>
            array(
                'id' => 77,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'La Rioja',
                'full_name' => NULL,
                'code' => 'irj',
            ),
            77 =>
            array(
                'id' => 78,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'La Plata',
                'full_name' => NULL,
                'code' => 'lpg',
            ),
            78 =>
            array(
                'id' => 79,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Resistencia',
                'full_name' => NULL,
                'code' => 'res',
            ),
            79 =>
            array(
                'id' => 80,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Rio Gallegos',
                'full_name' => NULL,
                'code' => 'rgl',
            ),
            80 =>
            array(
                'id' => 81,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Rio Cuarto',
                'full_name' => NULL,
                'code' => 'rcu',
            ),
            81 =>
            array(
                'id' => 82,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Comodoro Rivadavia',
                'full_name' => NULL,
                'code' => 'crd',
            ),
            82 =>
            array(
                'id' => 83,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Rosario',
                'full_name' => NULL,
                'code' => 'ros',
            ),
            83 =>
            array(
                'id' => 84,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Rawson',
                'full_name' => NULL,
                'code' => 'rwo',
            ),
            84 =>
            array(
                'id' => 85,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Mar del Plata',
                'full_name' => NULL,
                'code' => 'mdq',
            ),
            85 =>
            array(
                'id' => 86,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Mendoza',
                'full_name' => NULL,
                'code' => 'mdz',
            ),
            86 =>
            array(
                'id' => 87,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Neuquen',
                'full_name' => NULL,
                'code' => 'nqn',
            ),
            87 =>
            array(
                'id' => 88,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Salta',
                'full_name' => NULL,
                'code' => 'sla',
            ),
            88 =>
            array(
                'id' => 89,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Santiago del Estero',
                'full_name' => NULL,
                'code' => 'sde',
            ),
            89 =>
            array(
                'id' => 90,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Santa Fe',
                'full_name' => NULL,
                'code' => 'sfn',
            ),
            90 =>
            array(
                'id' => 91,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'San Juan',
                'full_name' => NULL,
                'code' => 'uaq',
            ),
            91 =>
            array(
                'id' => 92,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'San Rafael',
                'full_name' => NULL,
                'code' => 'afa',
            ),
            92 =>
            array(
                'id' => 93,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'San Luis',
                'full_name' => NULL,
                'code' => 'luq',
            ),
            93 =>
            array(
                'id' => 94,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Santa Rosa',
                'full_name' => NULL,
                'code' => 'rsa',
            ),
            94 =>
            array(
                'id' => 95,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'San Miguel de Tucuman',
                'full_name' => NULL,
                'code' => 'smc',
            ),
            95 =>
            array(
                'id' => 96,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'San Nicolas',
                'full_name' => NULL,
                'code' => 'sns',
            ),
            96 =>
            array(
                'id' => 97,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Trelew',
                'full_name' => NULL,
                'code' => 'rel',
            ),
            97 =>
            array(
                'id' => 98,
                'country_id' => 208,
                'division_id' => NULL,
                'name' => 'Ushuaia',
                'full_name' => NULL,
                'code' => 'ush',
            ),
            98 =>
            array(
                'id' => 99,
                'country_id' => 68,
                'division_id' => NULL,
                'name' => 'Abu Dhabi',
                'full_name' => NULL,
                'code' => 'az',
            ),
            99 =>
            array(
                'id' => 100,
                'country_id' => 68,
                'division_id' => NULL,
                'name' => 'Al l\'Ayn',
                'full_name' => NULL,
                'code' => 'al',
            ),
            100 =>
            array(
                'id' => 101,
                'country_id' => 68,
                'division_id' => NULL,
                'name' => 'Dubai',
                'full_name' => NULL,
                'code' => 'du',
            ),
            101 =>
            array(
                'id' => 102,
                'country_id' => 68,
                'division_id' => NULL,
                'name' => 'Ash Shariqah',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            102 =>
            array(
                'id' => 103,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Al-Batinah',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            103 =>
            array(
                'id' => 104,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Az-Zahirah',
                'full_name' => NULL,
                'code' => 'za',
            ),
            104 =>
            array(
                'id' => 105,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Ash-Sharqiyah',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            105 =>
            array(
                'id' => 106,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Masqat',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            106 =>
            array(
                'id' => 107,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Musandam',
                'full_name' => NULL,
                'code' => 'mu',
            ),
            107 =>
            array(
                'id' => 108,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Ad-Dakhiliyah',
                'full_name' => NULL,
                'code' => 'da',
            ),
            108 =>
            array(
                'id' => 109,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Al-Wusta',
                'full_name' => NULL,
                'code' => 'wu',
            ),
            109 =>
            array(
                'id' => 110,
                'country_id' => 84,
                'division_id' => NULL,
                'name' => 'Zufar',
                'full_name' => NULL,
                'code' => 'zu',
            ),
            110 =>
            array(
                'id' => 111,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Abseron',
                'full_name' => NULL,
                'code' => 'abs',
            ),
            111 =>
            array(
                'id' => 112,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Xacmaz',
                'full_name' => NULL,
                'code' => 'xac',
            ),
            112 =>
            array(
                'id' => 113,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Kalbacar',
                'full_name' => NULL,
                'code' => 'kal',
            ),
            113 =>
            array(
                'id' => 114,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Qazax',
                'full_name' => NULL,
                'code' => 'qaz',
            ),
            114 =>
            array(
                'id' => 115,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Lankaran',
                'full_name' => NULL,
                'code' => 'lan',
            ),
            115 =>
            array(
                'id' => 116,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Mil-Qarabax',
                'full_name' => NULL,
                'code' => 'mqa',
            ),
            116 =>
            array(
                'id' => 117,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Mugan-Salyan',
                'full_name' => NULL,
                'code' => 'msa',
            ),
            117 =>
            array(
                'id' => 118,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Nagorni-Qarabax',
                'full_name' => NULL,
                'code' => 'nqa',
            ),
            118 =>
            array(
                'id' => 119,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Naxcivan',
                'full_name' => NULL,
                'code' => 'nx',
            ),
            119 =>
            array(
                'id' => 120,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Priaraks',
                'full_name' => NULL,
                'code' => 'pri',
            ),
            120 =>
            array(
                'id' => 121,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Saki',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            121 =>
            array(
                'id' => 122,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Sumqayit',
                'full_name' => NULL,
                'code' => 'smc',
            ),
            122 =>
            array(
                'id' => 123,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Sirvan',
                'full_name' => NULL,
                'code' => 'sir',
            ),
            123 =>
            array(
                'id' => 124,
                'country_id' => 117,
                'division_id' => NULL,
                'name' => 'Ganca',
                'full_name' => NULL,
                'code' => 'ga',
            ),
            124 =>
            array(
                'id' => 125,
                'country_id' => 7,
                'division_id' => NULL,
                'name' => 'Aswan',
                'full_name' => NULL,
                'code' => 'asw',
            ),
            125 =>
            array(
                'id' => 126,
                'country_id' => 7,
                'division_id' => NULL,
                'name' => 'Al Ghurdaqah',
                'full_name' => NULL,
                'code' => 'gby',
            ),
            126 =>
            array(
                'id' => 127,
                'country_id' => 7,
                'division_id' => NULL,
                'name' => 'Cairo',
                'full_name' => NULL,
                'code' => 'cai',
            ),
            127 =>
            array(
                'id' => 128,
                'country_id' => 7,
                'division_id' => NULL,
                'name' => 'Shubra al Khaymah',
                'full_name' => NULL,
                'code' => 'skh',
            ),
            128 =>
            array(
                'id' => 129,
                'country_id' => 7,
                'division_id' => NULL,
                'name' => 'Alexandria',
                'full_name' => NULL,
                'code' => 'aly',
            ),
            129 =>
            array(
                'id' => 130,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Afar',
                'full_name' => NULL,
                'code' => 'af',
            ),
            130 =>
            array(
                'id' => 131,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Amara',
                'full_name' => NULL,
                'code' => 'ah',
            ),
            131 =>
            array(
                'id' => 132,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Oromiya',
                'full_name' => NULL,
                'code' => 'or',
            ),
            132 =>
            array(
                'id' => 133,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Binshangul Gumuz',
                'full_name' => NULL,
                'code' => 'bg',
            ),
            133 =>
            array(
                'id' => 134,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Dire Dawa',
                'full_name' => NULL,
                'code' => 'dd',
            ),
            134 =>
            array(
                'id' => 135,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Gambela Hizboch',
                'full_name' => NULL,
                'code' => 'gb',
            ),
            135 =>
            array(
                'id' => 136,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Hareri  Hizb',
                'full_name' => NULL,
                'code' => 'hr',
            ),
            136 =>
            array(
                'id' => 137,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'YeDebub Biheroch',
                'full_name' => NULL,
                'code' => 'sn',
            ),
            137 =>
            array(
                'id' => 138,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Sumale',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            138 =>
            array(
                'id' => 139,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Tigray',
                'full_name' => NULL,
                'code' => 'tg',
            ),
            139 =>
            array(
                'id' => 140,
                'country_id' => 45,
                'division_id' => NULL,
                'name' => 'Adis abeba',
                'full_name' => NULL,
                'code' => 'aa',
            ),
            140 =>
            array(
                'id' => 141,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Offaly',
                'full_name' => NULL,
                'code' => 'of',
            ),
            141 =>
            array(
                'id' => 142,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Tipperary',
                'full_name' => NULL,
                'code' => 'tp',
            ),
            142 =>
            array(
                'id' => 143,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Dublin',
                'full_name' => NULL,
                'code' => 'db',
            ),
            143 =>
            array(
                'id' => 144,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Donegal',
                'full_name' => NULL,
                'code' => 'dg',
            ),
            144 =>
            array(
                'id' => 145,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Galway',
                'full_name' => NULL,
                'code' => 'gw',
            ),
            145 =>
            array(
                'id' => 146,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Kildare',
                'full_name' => NULL,
                'code' => 'kd',
            ),
            146 =>
            array(
                'id' => 147,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Kilkenny',
                'full_name' => NULL,
                'code' => 'kk',
            ),
            147 =>
            array(
                'id' => 148,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Cavan',
                'full_name' => NULL,
                'code' => 'cv',
            ),
            148 =>
            array(
                'id' => 149,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Carlow',
                'full_name' => NULL,
                'code' => 'cw',
            ),
            149 =>
            array(
                'id' => 150,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Kerry',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            150 =>
            array(
                'id' => 151,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Cork',
                'full_name' => NULL,
                'code' => 'ck',
            ),
            151 =>
            array(
                'id' => 152,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Clare',
                'full_name' => NULL,
                'code' => 'cl',
            ),
            152 =>
            array(
                'id' => 153,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Longford',
                'full_name' => NULL,
                'code' => 'lf',
            ),
            153 =>
            array(
                'id' => 154,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Louth',
                'full_name' => NULL,
                'code' => 'lt',
            ),
            154 =>
            array(
                'id' => 155,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Laois',
                'full_name' => NULL,
                'code' => 'la',
            ),
            155 =>
            array(
                'id' => 156,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Limerick',
                'full_name' => NULL,
                'code' => 'lm',
            ),
            156 =>
            array(
                'id' => 157,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Leitrim',
                'full_name' => NULL,
                'code' => 'lr',
            ),
            157 =>
            array(
                'id' => 158,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Roscommon',
                'full_name' => NULL,
                'code' => 'rc',
            ),
            158 =>
            array(
                'id' => 159,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Mayo',
                'full_name' => NULL,
                'code' => 'my',
            ),
            159 =>
            array(
                'id' => 160,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Meath',
                'full_name' => NULL,
                'code' => 'mt',
            ),
            160 =>
            array(
                'id' => 161,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Monaghan',
                'full_name' => NULL,
                'code' => 'mg',
            ),
            161 =>
            array(
                'id' => 162,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Sligo',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            162 =>
            array(
                'id' => 163,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Wicklow',
                'full_name' => NULL,
                'code' => 'wk',
            ),
            163 =>
            array(
                'id' => 164,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Wexford',
                'full_name' => NULL,
                'code' => 'wx',
            ),
            164 =>
            array(
                'id' => 165,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Waterford',
                'full_name' => NULL,
                'code' => 'wf',
            ),
            165 =>
            array(
                'id' => 166,
                'country_id' => 144,
                'division_id' => NULL,
                'name' => 'Westmeath',
                'full_name' => NULL,
                'code' => 'wm',
            ),
            166 =>
            array(
                'id' => 167,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Polva',
                'full_name' => NULL,
                'code' => '65',
            ),
            167 =>
            array(
                'id' => 168,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Harju',
                'full_name' => NULL,
                'code' => '37',
            ),
            168 =>
            array(
                'id' => 169,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Rapla',
                'full_name' => NULL,
                'code' => '70',
            ),
            169 =>
            array(
                'id' => 170,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Laane',
                'full_name' => NULL,
                'code' => '57',
            ),
            170 =>
            array(
                'id' => 171,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Parnu',
                'full_name' => NULL,
                'code' => '67',
            ),
            171 =>
            array(
                'id' => 172,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Saare',
                'full_name' => NULL,
                'code' => '74',
            ),
            172 =>
            array(
                'id' => 173,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Tartu',
                'full_name' => NULL,
                'code' => '78',
            ),
            173 =>
            array(
                'id' => 174,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Valga',
                'full_name' => NULL,
                'code' => '82',
            ),
            174 =>
            array(
                'id' => 175,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Viljandi',
                'full_name' => NULL,
                'code' => '84',
            ),
            175 =>
            array(
                'id' => 176,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Laane-Viru',
                'full_name' => NULL,
                'code' => '59',
            ),
            176 =>
            array(
                'id' => 177,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Voru',
                'full_name' => NULL,
                'code' => '86',
            ),
            177 =>
            array(
                'id' => 178,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Hiiu',
                'full_name' => NULL,
                'code' => '39',
            ),
            178 =>
            array(
                'id' => 179,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Jarva',
                'full_name' => NULL,
                'code' => '51',
            ),
            179 =>
            array(
                'id' => 180,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Jogeva',
                'full_name' => NULL,
                'code' => '49',
            ),
            180 =>
            array(
                'id' => 181,
                'country_id' => 130,
                'division_id' => NULL,
                'name' => 'Ida-Viru',
                'full_name' => NULL,
                'code' => '44',
            ),
            181 =>
            array(
                'id' => 182,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Andorra la Vella',
                'full_name' => NULL,
                'code' => '7',
            ),
            182 =>
            array(
                'id' => 183,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Ordino',
                'full_name' => NULL,
                'code' => '5',
            ),
            183 =>
            array(
                'id' => 184,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Encamp',
                'full_name' => NULL,
                'code' => '3',
            ),
            184 =>
            array(
                'id' => 185,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Canillo',
                'full_name' => NULL,
                'code' => '2',
            ),
            185 =>
            array(
                'id' => 186,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Escaldes-Engordany',
                'full_name' => NULL,
                'code' => '8',
            ),
            186 =>
            array(
                'id' => 187,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'La Massana',
                'full_name' => NULL,
                'code' => '4',
            ),
            187 =>
            array(
                'id' => 188,
                'country_id' => 157,
                'division_id' => NULL,
                'name' => 'Sant Julia de Laria',
                'full_name' => NULL,
                'code' => '6',
            ),
            188 =>
            array(
                'id' => 189,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Cuanza Norte',
                'full_name' => NULL,
                'code' => 'cno',
            ),
            189 =>
            array(
                'id' => 190,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Lunda Norte',
                'full_name' => NULL,
                'code' => 'lno',
            ),
            190 =>
            array(
                'id' => 191,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Bengo',
                'full_name' => NULL,
                'code' => 'bgo',
            ),
            191 =>
            array(
                'id' => 192,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Benguela',
                'full_name' => NULL,
                'code' => 'bgu',
            ),
            192 =>
            array(
                'id' => 193,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Bie',
                'full_name' => NULL,
                'code' => 'bie',
            ),
            193 =>
            array(
                'id' => 194,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Cabinda',
                'full_name' => NULL,
                'code' => 'cab',
            ),
            194 =>
            array(
                'id' => 195,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Cunene',
                'full_name' => NULL,
                'code' => 'cnn',
            ),
            195 =>
            array(
                'id' => 196,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Cuando Cubango',
                'full_name' => NULL,
                'code' => 'ccu',
            ),
            196 =>
            array(
                'id' => 197,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Luanda',
                'full_name' => NULL,
                'code' => 'lua',
            ),
            197 =>
            array(
                'id' => 198,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Malanje',
                'full_name' => NULL,
                'code' => 'mal',
            ),
            198 =>
            array(
                'id' => 199,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Moxico',
                'full_name' => NULL,
                'code' => 'mox',
            ),
            199 =>
            array(
                'id' => 200,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Namibe',
                'full_name' => NULL,
                'code' => 'nam',
            ),
            200 =>
            array(
                'id' => 201,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Cuanza Sul',
                'full_name' => NULL,
                'code' => 'cus',
            ),
            201 =>
            array(
                'id' => 202,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Lunda Sul',
                'full_name' => NULL,
                'code' => 'lsu',
            ),
            202 =>
            array(
                'id' => 203,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Huambo',
                'full_name' => NULL,
                'code' => 'hua',
            ),
            203 =>
            array(
                'id' => 204,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Huila',
                'full_name' => NULL,
                'code' => 'hui',
            ),
            204 =>
            array(
                'id' => 205,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Uige',
                'full_name' => NULL,
                'code' => 'uig',
            ),
            205 =>
            array(
                'id' => 206,
                'country_id' => 12,
                'division_id' => NULL,
                'name' => 'Zaire',
                'full_name' => NULL,
                'code' => 'zai',
            ),
            206 =>
            array(
                'id' => 207,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Burgenland',
                'full_name' => NULL,
                'code' => 'bur',
            ),
            207 =>
            array(
                'id' => 208,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Tyrol',
                'full_name' => NULL,
                'code' => 'tyr',
            ),
            208 =>
            array(
                'id' => 209,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Vorarlberg',
                'full_name' => NULL,
                'code' => 'vor',
            ),
            209 =>
            array(
                'id' => 210,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Carinthia',
                'full_name' => NULL,
                'code' => 'cat',
            ),
            210 =>
            array(
                'id' => 211,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Salzburg',
                'full_name' => NULL,
                'code' => 'szg',
            ),
            211 =>
            array(
                'id' => 212,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Upper Austria',
                'full_name' => NULL,
                'code' => 'uau',
            ),
            212 =>
            array(
                'id' => 213,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Styria',
                'full_name' => NULL,
                'code' => 'sty',
            ),
            213 =>
            array(
                'id' => 214,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Vienna',
                'full_name' => NULL,
                'code' => 'vdd',
            ),
            214 =>
            array(
                'id' => 215,
                'country_id' => 160,
                'division_id' => NULL,
                'name' => 'Lower Austria',
                'full_name' => NULL,
                'code' => 'lau',
            ),
            215 =>
            array(
                'id' => 216,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'no',
            ),
            216 =>
            array(
                'id' => 217,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Bougainville',
                'full_name' => NULL,
                'code' => 'bv',
            ),
            217 =>
            array(
                'id' => 218,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Eastern Highlands',
                'full_name' => NULL,
                'code' => 'eh',
            ),
            218 =>
            array(
                'id' => 219,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'East Sepik',
                'full_name' => NULL,
                'code' => 'es',
            ),
            219 =>
            array(
                'id' => 220,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'East New Britain',
                'full_name' => NULL,
                'code' => 'eb',
            ),
            220 =>
            array(
                'id' => 221,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Enga',
                'full_name' => NULL,
                'code' => 'en',
            ),
            221 =>
            array(
                'id' => 222,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Gulf',
                'full_name' => NULL,
                'code' => 'gu',
            ),
            222 =>
            array(
                'id' => 223,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Madang',
                'full_name' => NULL,
                'code' => 'md',
            ),
            223 =>
            array(
                'id' => 224,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Manus',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            224 =>
            array(
                'id' => 225,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Milne Bay',
                'full_name' => NULL,
                'code' => 'mb',
            ),
            225 =>
            array(
                'id' => 226,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Port Moresby',
                'full_name' => NULL,
                'code' => 'nc',
            ),
            226 =>
            array(
                'id' => 227,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Morobe',
                'full_name' => NULL,
                'code' => 'mr',
            ),
            227 =>
            array(
                'id' => 228,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Southern Highlands',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            228 =>
            array(
                'id' => 229,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Simbu',
                'full_name' => NULL,
                'code' => 'si',
            ),
            229 =>
            array(
                'id' => 230,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Sandaun',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            230 =>
            array(
                'id' => 231,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'we',
            ),
            231 =>
            array(
                'id' => 232,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'Western Highlands',
                'full_name' => NULL,
                'code' => 'wh',
            ),
            232 =>
            array(
                'id' => 233,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'West New Britain',
                'full_name' => NULL,
                'code' => 'wb',
            ),
            233 =>
            array(
                'id' => 234,
                'country_id' => 184,
                'division_id' => NULL,
                'name' => 'New Ireland',
                'full_name' => NULL,
                'code' => 'ni',
            ),
            234 =>
            array(
                'id' => 235,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Peshawar',
                'full_name' => NULL,
                'code' => 'pew',
            ),
            235 =>
            array(
                'id' => 236,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Faisalabad',
                'full_name' => NULL,
                'code' => 'lyp',
            ),
            236 =>
            array(
                'id' => 237,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Gujranwala',
                'full_name' => NULL,
                'code' => 'guj',
            ),
            237 =>
            array(
                'id' => 238,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Hyderabad',
                'full_name' => NULL,
                'code' => 'hdd',
            ),
            238 =>
            array(
                'id' => 239,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Karachi',
                'full_name' => NULL,
                'code' => 'kct',
            ),
            239 =>
            array(
                'id' => 240,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Lahore',
                'full_name' => NULL,
                'code' => 'lhe',
            ),
            240 =>
            array(
                'id' => 241,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Rawalpindi',
                'full_name' => NULL,
                'code' => 'rwp',
            ),
            241 =>
            array(
                'id' => 242,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Multan',
                'full_name' => NULL,
                'code' => 'mux',
            ),
            242 =>
            array(
                'id' => 243,
                'country_id' => 92,
                'division_id' => NULL,
                'name' => 'Islamabad',
                'full_name' => NULL,
                'code' => 'isb',
            ),
            243 =>
            array(
                'id' => 244,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Amambay',
                'full_name' => NULL,
                'code' => 'am',
            ),
            244 =>
            array(
                'id' => 245,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Presidente Hayes',
                'full_name' => NULL,
                'code' => 'ph',
            ),
            245 =>
            array(
                'id' => 246,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Paraguari',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            246 =>
            array(
                'id' => 247,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Boqueron',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            247 =>
            array(
                'id' => 248,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Guaira',
                'full_name' => NULL,
                'code' => 'gu',
            ),
            248 =>
            array(
                'id' => 249,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Caaguazu',
                'full_name' => NULL,
                'code' => 'cg',
            ),
            249 =>
            array(
                'id' => 250,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Canindeyu',
                'full_name' => NULL,
                'code' => 'cn',
            ),
            250 =>
            array(
                'id' => 251,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Caazapa',
                'full_name' => NULL,
                'code' => 'cz',
            ),
            251 =>
            array(
                'id' => 252,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Concepcion',
                'full_name' => NULL,
                'code' => 'cc',
            ),
            252 =>
            array(
                'id' => 253,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Cordillera',
                'full_name' => NULL,
                'code' => 'cd',
            ),
            253 =>
            array(
                'id' => 254,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Misiones',
                'full_name' => NULL,
                'code' => 'mi',
            ),
            254 =>
            array(
                'id' => 255,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Neembucu',
                'full_name' => NULL,
                'code' => 'ne',
            ),
            255 =>
            array(
                'id' => 256,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Alto Paraguay',
                'full_name' => NULL,
                'code' => 'ag',
            ),
            256 =>
            array(
                'id' => 257,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Alto Parana',
                'full_name' => NULL,
                'code' => 'an',
            ),
            257 =>
            array(
                'id' => 258,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'San Pedro',
                'full_name' => NULL,
                'code' => 'sp',
            ),
            258 =>
            array(
                'id' => 259,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Asuncion',
                'full_name' => NULL,
                'code' => 'as',
            ),
            259 =>
            array(
                'id' => 260,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Itapua',
                'full_name' => NULL,
                'code' => 'it',
            ),
            260 =>
            array(
                'id' => 261,
                'country_id' => 189,
                'division_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            261 =>
            array(
                'id' => 262,
                'country_id' => 74,
                'division_id' => NULL,
                'name' => 'Gaza Strip',
                'full_name' => NULL,
                'code' => 'gz',
            ),
            262 =>
            array(
                'id' => 263,
                'country_id' => 74,
                'division_id' => NULL,
                'name' => 'West Bank',
                'full_name' => NULL,
                'code' => 'we',
            ),
            263 =>
            array(
                'id' => 264,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Ash-Shamaliyah',
                'full_name' => NULL,
                'code' => '5',
            ),
            264 =>
            array(
                'id' => 265,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Al-Hadd',
                'full_name' => NULL,
                'code' => '1',
            ),
            265 =>
            array(
                'id' => 266,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Hammad',
                'full_name' => NULL,
                'code' => '12',
            ),
            266 =>
            array(
                'id' => 267,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Ar-Rifa',
                'full_name' => NULL,
                'code' => '9',
            ),
            267 =>
            array(
                'id' => 268,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Al-Manamah',
                'full_name' => NULL,
                'code' => '3',
            ),
            268 =>
            array(
                'id' => 269,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Al-Muharraq',
                'full_name' => NULL,
                'code' => '2',
            ),
            269 =>
            array(
                'id' => 270,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Al-Gharbiyah',
                'full_name' => NULL,
                'code' => '10',
            ),
            270 =>
            array(
                'id' => 271,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Isa',
                'full_name' => NULL,
                'code' => '8',
            ),
            271 =>
            array(
                'id' => 272,
                'country_id' => 61,
                'division_id' => NULL,
                'name' => 'Al-Wusta',
                'full_name' => NULL,
                'code' => '7',
            ),
            272 =>
            array(
                'id' => 273,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Acre',
                'full_name' => NULL,
                'code' => 'ac',
            ),
            273 =>
            array(
                'id' => 274,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Alagoas',
                'full_name' => NULL,
                'code' => 'al',
            ),
            274 =>
            array(
                'id' => 275,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Amapa',
                'full_name' => NULL,
                'code' => 'ap',
            ),
            275 =>
            array(
                'id' => 276,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Parana',
                'full_name' => NULL,
                'code' => 'pr',
            ),
            276 =>
            array(
                'id' => 277,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Brasilia',
                'full_name' => NULL,
                'code' => 'bsb',
            ),
            277 =>
            array(
                'id' => 278,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Bahia',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            278 =>
            array(
                'id' => 279,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Rio Grande do Norte',
                'full_name' => NULL,
                'code' => 'rn',
            ),
            279 =>
            array(
                'id' => 280,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Pernambuco',
                'full_name' => NULL,
                'code' => 'pe',
            ),
            280 =>
            array(
                'id' => 281,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Goias',
                'full_name' => NULL,
                'code' => 'go',
            ),
            281 =>
            array(
                'id' => 282,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Rondonia',
                'full_name' => NULL,
                'code' => 'ro',
            ),
            282 =>
            array(
                'id' => 283,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Rio de Janeiro',
                'full_name' => NULL,
                'code' => 'rj',
            ),
            283 =>
            array(
                'id' => 284,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Roraima',
                'full_name' => NULL,
                'code' => 'rr',
            ),
            284 =>
            array(
                'id' => 285,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Maranhao',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            285 =>
            array(
                'id' => 286,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Mato Grosso',
                'full_name' => NULL,
                'code' => 'mt',
            ),
            286 =>
            array(
                'id' => 287,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Minas Gerais',
                'full_name' => NULL,
                'code' => 'mg',
            ),
            287 =>
            array(
                'id' => 288,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Rio Grande do Sul',
                'full_name' => NULL,
                'code' => 'rs',
            ),
            288 =>
            array(
                'id' => 289,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Mato Grosso do Sul',
                'full_name' => NULL,
                'code' => 'ms',
            ),
            289 =>
            array(
                'id' => 290,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Para',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            290 =>
            array(
                'id' => 291,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Paraiba',
                'full_name' => NULL,
                'code' => 'pb',
            ),
            291 =>
            array(
                'id' => 292,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Piaui',
                'full_name' => NULL,
                'code' => 'pi',
            ),
            292 =>
            array(
                'id' => 293,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Ceara',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            293 =>
            array(
                'id' => 294,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Sergipe',
                'full_name' => NULL,
                'code' => 'se',
            ),
            294 =>
            array(
                'id' => 295,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Espirito Santo',
                'full_name' => NULL,
                'code' => 'es',
            ),
            295 =>
            array(
                'id' => 296,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Sao Paulo',
                'full_name' => NULL,
                'code' => 'sp',
            ),
            296 =>
            array(
                'id' => 297,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Santa Catarina',
                'full_name' => NULL,
                'code' => 'sc',
            ),
            297 =>
            array(
                'id' => 298,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Tocantins',
                'full_name' => NULL,
                'code' => 'to',
            ),
            298 =>
            array(
                'id' => 299,
                'country_id' => 211,
                'division_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'am',
            ),
            299 =>
            array(
                'id' => 300,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Bresckaja',
                'full_name' => NULL,
                'code' => 'br',
            ),
            300 =>
            array(
                'id' => 301,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Homelskaja',
                'full_name' => NULL,
                'code' => 'ho',
            ),
            301 =>
            array(
                'id' => 302,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Hrodzenskaja',
                'full_name' => NULL,
                'code' => 'hr',
            ),
            302 =>
            array(
                'id' => 303,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Minsk',
                'full_name' => NULL,
                'code' => 'mi',
            ),
            303 =>
            array(
                'id' => 304,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Mahileuskaja',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            304 =>
            array(
                'id' => 305,
                'country_id' => 118,
                'division_id' => NULL,
                'name' => 'Vicebskaja',
                'full_name' => NULL,
                'code' => 'vi',
            ),
            305 =>
            array(
                'id' => 306,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Burgas',
                'full_name' => NULL,
                'code' => 'boj',
            ),
            306 =>
            array(
                'id' => 307,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Khaskovo',
                'full_name' => NULL,
                'code' => 'kho',
            ),
            307 =>
            array(
                'id' => 308,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Ruse',
                'full_name' => NULL,
                'code' => 'rou',
            ),
            308 =>
            array(
                'id' => 309,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Lovech',
                'full_name' => NULL,
                'code' => 'lvp',
            ),
            309 =>
            array(
                'id' => 310,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Montana',
                'full_name' => NULL,
                'code' => 'oza',
            ),
            310 =>
            array(
                'id' => 311,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Plovdiv',
                'full_name' => NULL,
                'code' => 'pdv',
            ),
            311 =>
            array(
                'id' => 312,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Sofiya',
                'full_name' => NULL,
                'code' => 'sof',
            ),
            312 =>
            array(
                'id' => 313,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Grad Sofiya',
                'full_name' => NULL,
                'code' => 'gso',
            ),
            313 =>
            array(
                'id' => 314,
                'country_id' => 161,
                'division_id' => NULL,
                'name' => 'Varna',
                'full_name' => NULL,
                'code' => 'var',
            ),
            314 =>
            array(
                'id' => 315,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Alibori',
                'full_name' => NULL,
                'code' => 'al',
            ),
            315 =>
            array(
                'id' => 316,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Atakora',
                'full_name' => NULL,
                'code' => 'ak',
            ),
            316 =>
            array(
                'id' => 317,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Littoral',
                'full_name' => NULL,
                'code' => 'li',
            ),
            317 =>
            array(
                'id' => 318,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Bohicon',
                'full_name' => NULL,
                'code' => 'boh',
            ),
            318 =>
            array(
                'id' => 319,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Borgou',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            319 =>
            array(
                'id' => 320,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Atlantique',
                'full_name' => NULL,
                'code' => 'aq',
            ),
            320 =>
            array(
                'id' => 321,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Plateau',
                'full_name' => NULL,
                'code' => 'pl',
            ),
            321 =>
            array(
                'id' => 322,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Kouffo',
                'full_name' => NULL,
                'code' => 'ko',
            ),
            322 =>
            array(
                'id' => 323,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Mono',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            323 =>
            array(
                'id' => 324,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Collines',
                'full_name' => NULL,
                'code' => 'co',
            ),
            324 =>
            array(
                'id' => 325,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Oueme',
                'full_name' => NULL,
                'code' => 'ou',
            ),
            325 =>
            array(
                'id' => 326,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Donga',
                'full_name' => NULL,
                'code' => 'do',
            ),
            326 =>
            array(
                'id' => 327,
                'country_id' => 2,
                'division_id' => NULL,
                'name' => 'Zou',
                'full_name' => NULL,
                'code' => 'zo',
            ),
            327 =>
            array(
                'id' => 328,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Hainaut',
                'full_name' => NULL,
                'code' => 'wht',
            ),
            328 =>
            array(
                'id' => 329,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Antwerpen',
                'full_name' => NULL,
                'code' => 'van',
            ),
            329 =>
            array(
                'id' => 330,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Brabant-Wallone',
                'full_name' => NULL,
                'code' => 'wbr',
            ),
            330 =>
            array(
                'id' => 331,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Brussels',
                'full_name' => NULL,
                'code' => 'bru',
            ),
            331 =>
            array(
                'id' => 332,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Oost-Vlaanderen',
                'full_name' => NULL,
                'code' => 'vov',
            ),
            332 =>
            array(
                'id' => 333,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Vlaams-Brabant',
                'full_name' => NULL,
                'code' => 'vbr',
            ),
            333 =>
            array(
                'id' => 334,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Liege',
                'full_name' => NULL,
                'code' => 'wlg',
            ),
            334 =>
            array(
                'id' => 335,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Limburg',
                'full_name' => NULL,
                'code' => 'vli',
            ),
            335 =>
            array(
                'id' => 336,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Luxembourg',
                'full_name' => NULL,
                'code' => 'wlx',
            ),
            336 =>
            array(
                'id' => 337,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'Namur',
                'full_name' => NULL,
                'code' => 'wna',
            ),
            337 =>
            array(
                'id' => 338,
                'country_id' => 145,
                'division_id' => NULL,
                'name' => 'West-Vlaanderen',
                'full_name' => NULL,
                'code' => 'vwv',
            ),
            338 =>
            array(
                'id' => 339,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Elbląg',
                'full_name' => NULL,
                'code' => 'elb',
            ),
            339 =>
            array(
                'id' => 340,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Olsztyn',
                'full_name' => NULL,
                'code' => 'ols',
            ),
            340 =>
            array(
                'id' => 341,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Ostrołeka',
                'full_name' => NULL,
                'code' => 'oss',
            ),
            341 =>
            array(
                'id' => 342,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Bydgoszcz',
                'full_name' => NULL,
                'code' => 'bzg',
            ),
            342 =>
            array(
                'id' => 343,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Piotrkow',
                'full_name' => NULL,
                'code' => 'pio',
            ),
            343 =>
            array(
                'id' => 344,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Bytom',
                'full_name' => NULL,
                'code' => 'byt',
            ),
            344 =>
            array(
                'id' => 345,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Biała Podlaska',
                'full_name' => NULL,
                'code' => 'bap',
            ),
            345 =>
            array(
                'id' => 346,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Białystok',
                'full_name' => NULL,
                'code' => 'bia',
            ),
            346 =>
            array(
                'id' => 347,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Opole',
                'full_name' => NULL,
                'code' => 'opo',
            ),
            347 =>
            array(
                'id' => 348,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Poznan',
                'full_name' => NULL,
                'code' => 'poz',
            ),
            348 =>
            array(
                'id' => 349,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Dabrowa Gornicza',
                'full_name' => NULL,
                'code' => 'dab',
            ),
            349 =>
            array(
                'id' => 350,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Gorzow Wlkp',
                'full_name' => NULL,
                'code' => 'gow',
            ),
            350 =>
            array(
                'id' => 351,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Wroclaw',
                'full_name' => NULL,
                'code' => 'wro',
            ),
            351 =>
            array(
                'id' => 352,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Wlocławek',
                'full_name' => NULL,
                'code' => 'wlo',
            ),
            352 =>
            array(
                'id' => 353,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Gdansk',
                'full_name' => NULL,
                'code' => 'gdn',
            ),
            353 =>
            array(
                'id' => 354,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Gdynia',
                'full_name' => NULL,
                'code' => 'gdy',
            ),
            354 =>
            array(
                'id' => 355,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Gliwice',
                'full_name' => NULL,
                'code' => 'gwc',
            ),
            355 =>
            array(
                'id' => 356,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Grudziadz',
                'full_name' => NULL,
                'code' => 'gru',
            ),
            356 =>
            array(
                'id' => 357,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Chełm',
                'full_name' => NULL,
                'code' => 'cho',
            ),
            357 =>
            array(
                'id' => 358,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Warszawa',
                'full_name' => NULL,
                'code' => 'waw',
            ),
            358 =>
            array(
                'id' => 359,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Chorzow',
                'full_name' => NULL,
                'code' => 'chz',
            ),
            359 =>
            array(
                'id' => 360,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Kalisz',
                'full_name' => NULL,
                'code' => 'kal',
            ),
            360 =>
            array(
                'id' => 361,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Katowice',
                'full_name' => NULL,
                'code' => 'ktw',
            ),
            361 =>
            array(
                'id' => 362,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Kielce',
                'full_name' => NULL,
                'code' => 'klc',
            ),
            362 =>
            array(
                'id' => 363,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Konin',
                'full_name' => NULL,
                'code' => 'kon',
            ),
            363 =>
            array(
                'id' => 364,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Koszalin',
                'full_name' => NULL,
                'code' => 'osz',
            ),
            364 =>
            array(
                'id' => 365,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Krakow',
                'full_name' => NULL,
                'code' => 'krk',
            ),
            365 =>
            array(
                'id' => 366,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Krosno',
                'full_name' => NULL,
                'code' => 'kro',
            ),
            366 =>
            array(
                'id' => 367,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Radom',
                'full_name' => NULL,
                'code' => 'rdm',
            ),
            367 =>
            array(
                'id' => 368,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Legnica',
                'full_name' => NULL,
                'code' => 'leg',
            ),
            368 =>
            array(
                'id' => 369,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Leszno',
                'full_name' => NULL,
                'code' => 'lez',
            ),
            369 =>
            array(
                'id' => 370,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Lublin',
                'full_name' => NULL,
                'code' => 'lul',
            ),
            370 =>
            array(
                'id' => 371,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Ruda Sl',
                'full_name' => NULL,
                'code' => 'rds',
            ),
            371 =>
            array(
                'id' => 372,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Lodz',
                'full_name' => NULL,
                'code' => 'lod',
            ),
            372 =>
            array(
                'id' => 373,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Zielona Gora',
                'full_name' => NULL,
                'code' => 'ieg',
            ),
            373 =>
            array(
                'id' => 374,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Mysłowice',
                'full_name' => NULL,
                'code' => 'myl',
            ),
            374 =>
            array(
                'id' => 375,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Piła',
                'full_name' => NULL,
                'code' => 'pil',
            ),
            375 =>
            array(
                'id' => 376,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Przemysl',
                'full_name' => NULL,
                'code' => 'prz',
            ),
            376 =>
            array(
                'id' => 377,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Plock',
                'full_name' => NULL,
                'code' => 'plo',
            ),
            377 =>
            array(
                'id' => 378,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Ciechanow',
                'full_name' => NULL,
                'code' => 'cie',
            ),
            378 =>
            array(
                'id' => 379,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Rzeszow',
                'full_name' => NULL,
                'code' => 'rze',
            ),
            379 =>
            array(
                'id' => 380,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Szczecin',
                'full_name' => NULL,
                'code' => 'szz',
            ),
            380 =>
            array(
                'id' => 381,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Skierniewice',
                'full_name' => NULL,
                'code' => 'ski',
            ),
            381 =>
            array(
                'id' => 382,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Slupsk',
                'full_name' => NULL,
                'code' => 'slp',
            ),
            382 =>
            array(
                'id' => 383,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Suwałki',
                'full_name' => NULL,
                'code' => 'swl',
            ),
            383 =>
            array(
                'id' => 384,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Sopot',
                'full_name' => NULL,
                'code' => 'sop',
            ),
            384 =>
            array(
                'id' => 385,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Sosnowiec',
                'full_name' => NULL,
                'code' => 'swc',
            ),
            385 =>
            array(
                'id' => 386,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Tarnow',
                'full_name' => NULL,
                'code' => 'tar',
            ),
            386 =>
            array(
                'id' => 387,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Tarnobrzeg',
                'full_name' => NULL,
                'code' => 'qep',
            ),
            387 =>
            array(
                'id' => 388,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Tychy',
                'full_name' => NULL,
                'code' => 'tyy',
            ),
            388 =>
            array(
                'id' => 389,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Torun',
                'full_name' => NULL,
                'code' => 'tor',
            ),
            389 =>
            array(
                'id' => 390,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Walbrzych',
                'full_name' => NULL,
                'code' => 'wzh',
            ),
            390 =>
            array(
                'id' => 391,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Lomza',
                'full_name' => NULL,
                'code' => 'qoy',
            ),
            391 =>
            array(
                'id' => 392,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Siemianowice Sl',
                'full_name' => NULL,
                'code' => 'sow',
            ),
            392 =>
            array(
                'id' => 393,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Swinoujscie',
                'full_name' => NULL,
                'code' => 'swi',
            ),
            393 =>
            array(
                'id' => 394,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Swietochłowice',
                'full_name' => NULL,
                'code' => 'swt',
            ),
            394 =>
            array(
                'id' => 395,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Siedlce',
                'full_name' => NULL,
                'code' => 'sdc',
            ),
            395 =>
            array(
                'id' => 396,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Sieradz',
                'full_name' => NULL,
                'code' => 'sir',
            ),
            396 =>
            array(
                'id' => 397,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Nowy Sacz',
                'full_name' => NULL,
                'code' => 'now',
            ),
            397 =>
            array(
                'id' => 398,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Jaworzno',
                'full_name' => NULL,
                'code' => 'jaw',
            ),
            398 =>
            array(
                'id' => 399,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Jelenia Gora',
                'full_name' => NULL,
                'code' => 'jeg',
            ),
            399 =>
            array(
                'id' => 400,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Zabrze',
                'full_name' => NULL,
                'code' => 'zab',
            ),
            400 =>
            array(
                'id' => 401,
                'country_id' => 154,
                'division_id' => NULL,
                'name' => 'Zamosc',
                'full_name' => NULL,
                'code' => 'zam',
            ),
            401 =>
            array(
                'id' => 402,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'El Alto',
                'full_name' => NULL,
                'code' => 'alt',
            ),
            402 =>
            array(
                'id' => 403,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Oruro',
                'full_name' => NULL,
                'code' => 'oru',
            ),
            403 =>
            array(
                'id' => 404,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'El Beni',
                'full_name' => NULL,
                'code' => 'ben',
            ),
            404 =>
            array(
                'id' => 405,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Potosi',
                'full_name' => NULL,
                'code' => 'poi',
            ),
            405 =>
            array(
                'id' => 406,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Quillacollo',
                'full_name' => NULL,
                'code' => 'qui',
            ),
            406 =>
            array(
                'id' => 407,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Cochabamba',
                'full_name' => NULL,
                'code' => 'cbb',
            ),
            407 =>
            array(
                'id' => 408,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'lpb',
            ),
            408 =>
            array(
                'id' => 409,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Pando',
                'full_name' => NULL,
                'code' => 'pan',
            ),
            409 =>
            array(
                'id' => 410,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Chuquisaca',
                'full_name' => NULL,
                'code' => 'chu',
            ),
            410 =>
            array(
                'id' => 411,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Sacaba',
                'full_name' => NULL,
                'code' => 'sac',
            ),
            411 =>
            array(
                'id' => 412,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Santa Cruz',
                'full_name' => NULL,
                'code' => 'srz',
            ),
            412 =>
            array(
                'id' => 413,
                'country_id' => 210,
                'division_id' => NULL,
                'name' => 'Tarija',
                'full_name' => NULL,
                'code' => 'tja',
            ),
            413 =>
            array(
                'id' => 414,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Posavski',
                'full_name' => NULL,
                'code' => 'fpo',
            ),
            414 =>
            array(
                'id' => 415,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Bosansko-Podrinjski',
                'full_name' => NULL,
                'code' => 'fbp',
            ),
            415 =>
            array(
                'id' => 416,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Tomislavgrad',
                'full_name' => NULL,
                'code' => 'fto',
            ),
            416 =>
            array(
                'id' => 417,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Hercegovacko-Neretvanski',
                'full_name' => NULL,
                'code' => 'fhn',
            ),
            417 =>
            array(
                'id' => 418,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Sarajevo',
                'full_name' => NULL,
                'code' => 'fsa',
            ),
            418 =>
            array(
                'id' => 419,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Tuzlanski-Podrinjski',
                'full_name' => NULL,
                'code' => 'ftu',
            ),
            419 =>
            array(
                'id' => 420,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Unsko-Sanski',
                'full_name' => NULL,
                'code' => 'fus',
            ),
            420 =>
            array(
                'id' => 421,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Hercegovacko-Bosanski',
                'full_name' => NULL,
                'code' => 'fhb',
            ),
            421 =>
            array(
                'id' => 422,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Zapadno-Hercegovaki',
                'full_name' => NULL,
                'code' => 'fzh',
            ),
            422 =>
            array(
                'id' => 423,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Zenicko-Dobojski',
                'full_name' => NULL,
                'code' => 'fze',
            ),
            423 =>
            array(
                'id' => 424,
                'country_id' => 139,
                'division_id' => NULL,
                'name' => 'Srednjo-Bosanski',
                'full_name' => NULL,
                'code' => 'fsb',
            ),
            424 =>
            array(
                'id' => 425,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Belize',
                'full_name' => NULL,
                'code' => 'bz',
            ),
            425 =>
            array(
                'id' => 426,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Orange Walk',
                'full_name' => NULL,
                'code' => 'ow',
            ),
            426 =>
            array(
                'id' => 427,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Cayo',
                'full_name' => NULL,
                'code' => 'cy',
            ),
            427 =>
            array(
                'id' => 428,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Corozal',
                'full_name' => NULL,
                'code' => 'cr',
            ),
            428 =>
            array(
                'id' => 429,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Stann Creek',
                'full_name' => NULL,
                'code' => 'sc',
            ),
            429 =>
            array(
                'id' => 430,
                'country_id' => 209,
                'division_id' => NULL,
                'name' => 'Toledo',
                'full_name' => NULL,
                'code' => 'to',
            ),
            430 =>
            array(
                'id' => 431,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Bale',
                'full_name' => NULL,
                'code' => 'bal',
            ),
            431 =>
            array(
                'id' => 432,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Bam',
                'full_name' => NULL,
                'code' => 'bam',
            ),
            432 =>
            array(
                'id' => 433,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Banwa',
                'full_name' => NULL,
                'code' => 'ban',
            ),
            433 =>
            array(
                'id' => 434,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Bazega',
                'full_name' => NULL,
                'code' => 'baz',
            ),
            434 =>
            array(
                'id' => 435,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Poni',
                'full_name' => NULL,
                'code' => 'pon',
            ),
            435 =>
            array(
                'id' => 436,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Boulgou',
                'full_name' => NULL,
                'code' => 'blg',
            ),
            436 =>
            array(
                'id' => 437,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Boulkiemde',
                'full_name' => NULL,
                'code' => 'bok',
            ),
            437 =>
            array(
                'id' => 438,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Bougouriba',
                'full_name' => NULL,
                'code' => 'bor',
            ),
            438 =>
            array(
                'id' => 439,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Ganzourgou',
                'full_name' => NULL,
                'code' => 'gan',
            ),
            439 =>
            array(
                'id' => 440,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Gourma',
                'full_name' => NULL,
                'code' => 'gou',
            ),
            440 =>
            array(
                'id' => 441,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Ziro',
                'full_name' => NULL,
                'code' => 'zir',
            ),
            441 =>
            array(
                'id' => 442,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kadiogo',
                'full_name' => NULL,
                'code' => 'kad',
            ),
            442 =>
            array(
                'id' => 443,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kenedougou',
                'full_name' => NULL,
                'code' => 'ken',
            ),
            443 =>
            array(
                'id' => 444,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Komondjari',
                'full_name' => NULL,
                'code' => 'koo',
            ),
            444 =>
            array(
                'id' => 445,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Comoe',
                'full_name' => NULL,
                'code' => 'com',
            ),
            445 =>
            array(
                'id' => 446,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kompienga',
                'full_name' => NULL,
                'code' => 'kop',
            ),
            446 =>
            array(
                'id' => 447,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kossi',
                'full_name' => NULL,
                'code' => 'kos',
            ),
            447 =>
            array(
                'id' => 448,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Koulpelogo',
                'full_name' => NULL,
                'code' => 'kol',
            ),
            448 =>
            array(
                'id' => 449,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kourweogo',
                'full_name' => NULL,
                'code' => 'kow',
            ),
            449 =>
            array(
                'id' => 450,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Kouritenga',
                'full_name' => NULL,
                'code' => 'kot',
            ),
            450 =>
            array(
                'id' => 451,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Leraba',
                'full_name' => NULL,
                'code' => 'ler',
            ),
            451 =>
            array(
                'id' => 452,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Loroum',
                'full_name' => NULL,
                'code' => 'lor',
            ),
            452 =>
            array(
                'id' => 453,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Mouhoun',
                'full_name' => NULL,
                'code' => 'mou',
            ),
            453 =>
            array(
                'id' => 454,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Namentenga',
                'full_name' => NULL,
                'code' => 'nam',
            ),
            454 =>
            array(
                'id' => 455,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Nahouri',
                'full_name' => NULL,
                'code' => 'nah',
            ),
            455 =>
            array(
                'id' => 456,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Nayala',
                'full_name' => NULL,
                'code' => 'nay',
            ),
            456 =>
            array(
                'id' => 457,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Gnagna',
                'full_name' => NULL,
                'code' => 'gna',
            ),
            457 =>
            array(
                'id' => 458,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Noumbiel',
                'full_name' => NULL,
                'code' => 'nou',
            ),
            458 =>
            array(
                'id' => 459,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Passore',
                'full_name' => NULL,
                'code' => 'pas',
            ),
            459 =>
            array(
                'id' => 460,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Seno',
                'full_name' => NULL,
                'code' => 'sen',
            ),
            460 =>
            array(
                'id' => 461,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Sanguie',
                'full_name' => NULL,
                'code' => 'sag',
            ),
            461 =>
            array(
                'id' => 462,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Sanmatenga',
                'full_name' => NULL,
                'code' => 'sam',
            ),
            462 =>
            array(
                'id' => 463,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Sourou',
                'full_name' => NULL,
                'code' => 'sor',
            ),
            463 =>
            array(
                'id' => 464,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Soum',
                'full_name' => NULL,
                'code' => 'som',
            ),
            464 =>
            array(
                'id' => 465,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Tapoa',
                'full_name' => NULL,
                'code' => 'tap',
            ),
            465 =>
            array(
                'id' => 466,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Tuy',
                'full_name' => NULL,
                'code' => 'tuy',
            ),
            466 =>
            array(
                'id' => 467,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Houet',
                'full_name' => NULL,
                'code' => 'hou',
            ),
            467 =>
            array(
                'id' => 468,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Oubritenga',
                'full_name' => NULL,
                'code' => 'oub',
            ),
            468 =>
            array(
                'id' => 469,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Oudalan',
                'full_name' => NULL,
                'code' => 'oud',
            ),
            469 =>
            array(
                'id' => 470,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Sissili',
                'full_name' => NULL,
                'code' => 'sis',
            ),
            470 =>
            array(
                'id' => 471,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Yagha',
                'full_name' => NULL,
                'code' => 'yag',
            ),
            471 =>
            array(
                'id' => 472,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Yatenga',
                'full_name' => NULL,
                'code' => 'yat',
            ),
            472 =>
            array(
                'id' => 473,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Ioba',
                'full_name' => NULL,
                'code' => 'ioa',
            ),
            473 =>
            array(
                'id' => 474,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Zoundweogo',
                'full_name' => NULL,
                'code' => 'zow',
            ),
            474 =>
            array(
                'id' => 475,
                'country_id' => 9,
                'division_id' => NULL,
                'name' => 'Zondoma',
                'full_name' => NULL,
                'code' => 'zod',
            ),
            475 =>
            array(
                'id' => 476,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Bubanza',
                'full_name' => NULL,
                'code' => 'bb',
            ),
            476 =>
            array(
                'id' => 477,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Bururi',
                'full_name' => NULL,
                'code' => 'br',
            ),
            477 =>
            array(
                'id' => 478,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Bujumbura Mairie',
                'full_name' => NULL,
                'code' => 'bm',
            ),
            478 =>
            array(
                'id' => 479,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Bujumbura Rural',
                'full_name' => NULL,
                'code' => 'bu',
            ),
            479 =>
            array(
                'id' => 480,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Ngozi',
                'full_name' => NULL,
                'code' => 'ng',
            ),
            480 =>
            array(
                'id' => 481,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Kirundo',
                'full_name' => NULL,
                'code' => 'ki',
            ),
            481 =>
            array(
                'id' => 482,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Gitega',
                'full_name' => NULL,
                'code' => 'gi',
            ),
            482 =>
            array(
                'id' => 483,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Karuzi',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            483 =>
            array(
                'id' => 484,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Kayanza',
                'full_name' => NULL,
                'code' => 'ky',
            ),
            484 =>
            array(
                'id' => 485,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Cankuzo',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            485 =>
            array(
                'id' => 486,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Rutana',
                'full_name' => NULL,
                'code' => 'rt',
            ),
            486 =>
            array(
                'id' => 487,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Ruyigi',
                'full_name' => NULL,
                'code' => 'ry',
            ),
            487 =>
            array(
                'id' => 488,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Makamba',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            488 =>
            array(
                'id' => 489,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Muramvya',
                'full_name' => NULL,
                'code' => 'mu',
            ),
            489 =>
            array(
                'id' => 490,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Mwaro',
                'full_name' => NULL,
                'code' => 'mw',
            ),
            490 =>
            array(
                'id' => 491,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Muyinga',
                'full_name' => NULL,
                'code' => 'my',
            ),
            491 =>
            array(
                'id' => 492,
                'country_id' => 50,
                'division_id' => NULL,
                'name' => 'Cibitoke',
                'full_name' => NULL,
                'code' => 'ci',
            ),
            492 =>
            array(
                'id' => 493,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Haeju',
                'full_name' => NULL,
                'code' => 'hae',
            ),
            493 =>
            array(
                'id' => 494,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Hyesan',
                'full_name' => NULL,
                'code' => 'hye',
            ),
            494 =>
            array(
                'id' => 495,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Kanggye',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            495 =>
            array(
                'id' => 496,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Kaesong',
                'full_name' => NULL,
                'code' => 'ksn',
            ),
            496 =>
            array(
                'id' => 497,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Naseon',
                'full_name' => NULL,
                'code' => 'nas',
            ),
            497 =>
            array(
                'id' => 498,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Namp\'o',
                'full_name' => NULL,
                'code' => 'nam',
            ),
            498 =>
            array(
                'id' => 499,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Pyongyang',
                'full_name' => NULL,
                'code' => 'fnj',
            ),
            499 =>
            array(
                'id' => 500,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Ch\'ongjin',
                'full_name' => NULL,
                'code' => 'cho',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 501,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Sariwon',
                'full_name' => NULL,
                'code' => 'sar',
            ),
            1 =>
            array(
                'id' => 502,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Hamhung',
                'full_name' => NULL,
                'code' => 'ham',
            ),
            2 =>
            array(
                'id' => 503,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Sinuiju',
                'full_name' => NULL,
                'code' => 'sii',
            ),
            3 =>
            array(
                'id' => 504,
                'country_id' => 73,
                'division_id' => NULL,
                'name' => 'Wonsan',
                'full_name' => NULL,
                'code' => 'won',
            ),
            4 =>
            array(
                'id' => 505,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Aarhus',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            5 =>
            array(
                'id' => 506,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Nordjylland',
                'full_name' => NULL,
                'code' => 'vsv',
            ),
            6 =>
            array(
                'id' => 507,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Bornholm',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            7 =>
            array(
                'id' => 508,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Frederiksborg',
                'full_name' => NULL,
                'code' => 'fre',
            ),
            8 =>
            array(
                'id' => 509,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Fyn',
                'full_name' => NULL,
                'code' => 'fy',
            ),
            9 =>
            array(
                'id' => 510,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Copenhagen',
                'full_name' => NULL,
                'code' => 'cph',
            ),
            10 =>
            array(
                'id' => 511,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Ribe',
                'full_name' => NULL,
                'code' => 'rib',
            ),
            11 =>
            array(
                'id' => 512,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Ringkoebing',
                'full_name' => NULL,
                'code' => 'rkg',
            ),
            12 =>
            array(
                'id' => 513,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Roskilde',
                'full_name' => NULL,
                'code' => 'rke',
            ),
            13 =>
            array(
                'id' => 514,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Soenderjylland',
                'full_name' => NULL,
                'code' => 'vbi',
            ),
            14 =>
            array(
                'id' => 515,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Storstroem',
                'full_name' => NULL,
                'code' => 'st',
            ),
            15 =>
            array(
                'id' => 516,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Viborg',
                'full_name' => NULL,
                'code' => 'vib',
            ),
            16 =>
            array(
                'id' => 517,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Vejle',
                'full_name' => NULL,
                'code' => 'vej',
            ),
            17 =>
            array(
                'id' => 518,
                'country_id' => 147,
                'division_id' => NULL,
                'name' => 'Vestsjaelland',
                'full_name' => NULL,
                'code' => 'vs',
            ),
            18 =>
            array(
                'id' => 519,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Arnsberg',
                'full_name' => NULL,
                'code' => 'arn',
            ),
            19 =>
            array(
                'id' => 520,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Erfurt',
                'full_name' => NULL,
                'code' => 'erf',
            ),
            20 =>
            array(
                'id' => 521,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Ansbach',
                'full_name' => NULL,
                'code' => 'ans',
            ),
            21 =>
            array(
                'id' => 522,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Augsburg',
                'full_name' => NULL,
                'code' => 'agb',
            ),
            22 =>
            array(
                'id' => 523,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Berlin',
                'full_name' => NULL,
                'code' => 'be',
            ),
            23 =>
            array(
                'id' => 524,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Bayreuth',
                'full_name' => NULL,
                'code' => 'byu',
            ),
            24 =>
            array(
                'id' => 525,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Bielefeld',
                'full_name' => NULL,
                'code' => 'bfe',
            ),
            25 =>
            array(
                'id' => 526,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Potsdam',
                'full_name' => NULL,
                'code' => 'pot',
            ),
            26 =>
            array(
                'id' => 527,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Bochum',
                'full_name' => NULL,
                'code' => 'bom',
            ),
            27 =>
            array(
                'id' => 528,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Bremen',
                'full_name' => NULL,
                'code' => 'hb',
            ),
            28 =>
            array(
                'id' => 529,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Brunswick',
                'full_name' => NULL,
                'code' => 'brw',
            ),
            29 =>
            array(
                'id' => 530,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Darmstadt',
                'full_name' => NULL,
                'code' => 'dar',
            ),
            30 =>
            array(
                'id' => 531,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Detmold',
                'full_name' => NULL,
                'code' => 'det',
            ),
            31 =>
            array(
                'id' => 532,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Dresden',
                'full_name' => NULL,
                'code' => 'drs',
            ),
            32 =>
            array(
                'id' => 533,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Dessau',
                'full_name' => NULL,
                'code' => 'des',
            ),
            33 =>
            array(
                'id' => 534,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Dusseldorf',
                'full_name' => NULL,
                'code' => 'dus',
            ),
            34 =>
            array(
                'id' => 535,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Frankfurt',
                'full_name' => NULL,
                'code' => 'ffo',
            ),
            35 =>
            array(
                'id' => 536,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Freiburg',
                'full_name' => NULL,
                'code' => 'fbg',
            ),
            36 =>
            array(
                'id' => 537,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Halle',
                'full_name' => NULL,
                'code' => 'hae',
            ),
            37 =>
            array(
                'id' => 538,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Hamburg',
                'full_name' => NULL,
                'code' => 'hh',
            ),
            38 =>
            array(
                'id' => 539,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Hannover',
                'full_name' => NULL,
                'code' => 'haj',
            ),
            39 =>
            array(
                'id' => 540,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Kiel',
                'full_name' => NULL,
                'code' => 'kel',
            ),
            40 =>
            array(
                'id' => 541,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'GieBen',
                'full_name' => NULL,
                'code' => 'gbn',
            ),
            41 =>
            array(
                'id' => 542,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Karlsruhe',
                'full_name' => NULL,
                'code' => 'kae',
            ),
            42 =>
            array(
                'id' => 543,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Kassel',
                'full_name' => NULL,
                'code' => 'kas',
            ),
            43 =>
            array(
                'id' => 544,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Chemnitz',
                'full_name' => NULL,
                'code' => 'che',
            ),
            44 =>
            array(
                'id' => 545,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Koblenz',
                'full_name' => NULL,
                'code' => 'kob',
            ),
            45 =>
            array(
                'id' => 546,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Cologne',
                'full_name' => NULL,
                'code' => 'cgn',
            ),
            46 =>
            array(
                'id' => 547,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Leipzig',
                'full_name' => NULL,
                'code' => 'lej',
            ),
            47 =>
            array(
                'id' => 548,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Landshut',
                'full_name' => NULL,
                'code' => 'ldh',
            ),
            48 =>
            array(
                'id' => 549,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Luneburg',
                'full_name' => NULL,
                'code' => 'lbg',
            ),
            49 =>
            array(
                'id' => 550,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Magdeburg',
                'full_name' => NULL,
                'code' => 'mag',
            ),
            50 =>
            array(
                'id' => 551,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Mannheim',
                'full_name' => NULL,
                'code' => 'mhg',
            ),
            51 =>
            array(
                'id' => 552,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Mainz',
                'full_name' => NULL,
                'code' => 'mai',
            ),
            52 =>
            array(
                'id' => 553,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Muenster',
                'full_name' => NULL,
                'code' => 'mun',
            ),
            53 =>
            array(
                'id' => 554,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Munich',
                'full_name' => NULL,
                'code' => 'muc',
            ),
            54 =>
            array(
                'id' => 555,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Nuremberg',
                'full_name' => NULL,
                'code' => 'nue',
            ),
            55 =>
            array(
                'id' => 556,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Schwerin',
                'full_name' => NULL,
                'code' => 'swh',
            ),
            56 =>
            array(
                'id' => 557,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Stuttgart',
                'full_name' => NULL,
                'code' => 'str',
            ),
            57 =>
            array(
                'id' => 558,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Trier',
                'full_name' => NULL,
                'code' => 'tri',
            ),
            58 =>
            array(
                'id' => 559,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Wiesbaden',
                'full_name' => NULL,
                'code' => 'wib',
            ),
            59 =>
            array(
                'id' => 560,
                'country_id' => 149,
                'division_id' => NULL,
                'name' => 'Wuerzburg',
                'full_name' => NULL,
                'code' => 'wug',
            ),
            60 =>
            array(
                'id' => 561,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Aileu',
                'full_name' => NULL,
                'code' => 'al',
            ),
            61 =>
            array(
                'id' => 562,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Ainaro',
                'full_name' => NULL,
                'code' => 'an',
            ),
            62 =>
            array(
                'id' => 563,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Ermera',
                'full_name' => NULL,
                'code' => 'er',
            ),
            63 =>
            array(
                'id' => 564,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Ambeno',
                'full_name' => NULL,
                'code' => 'am',
            ),
            64 =>
            array(
                'id' => 565,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Baucau',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            65 =>
            array(
                'id' => 566,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Bobonaro',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            66 =>
            array(
                'id' => 567,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Dili',
                'full_name' => NULL,
                'code' => 'di',
            ),
            67 =>
            array(
                'id' => 568,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Kovalima',
                'full_name' => NULL,
                'code' => 'ko',
            ),
            68 =>
            array(
                'id' => 569,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Lautem',
                'full_name' => NULL,
                'code' => 'la',
            ),
            69 =>
            array(
                'id' => 570,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Liquica',
                'full_name' => NULL,
                'code' => 'li',
            ),
            70 =>
            array(
                'id' => 571,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Manatuto',
                'full_name' => NULL,
                'code' => 'mt',
            ),
            71 =>
            array(
                'id' => 572,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Manofahi',
                'full_name' => NULL,
                'code' => 'mf',
            ),
            72 =>
            array(
                'id' => 573,
                'country_id' => 88,
                'division_id' => NULL,
                'name' => 'Viqueque',
                'full_name' => NULL,
                'code' => 'vi',
            ),
            73 =>
            array(
                'id' => 574,
                'country_id' => 42,
                'division_id' => NULL,
                'name' => 'Maritime',
                'full_name' => NULL,
                'code' => 'm',
            ),
            74 =>
            array(
                'id' => 575,
                'country_id' => 42,
                'division_id' => NULL,
                'name' => 'Savanes',
                'full_name' => NULL,
                'code' => 's',
            ),
            75 =>
            array(
                'id' => 576,
                'country_id' => 42,
                'division_id' => NULL,
                'name' => 'Plateaux',
                'full_name' => NULL,
                'code' => 'p',
            ),
            76 =>
            array(
                'id' => 577,
                'country_id' => 42,
                'division_id' => NULL,
                'name' => 'Kara',
                'full_name' => NULL,
                'code' => 'k',
            ),
            77 =>
            array(
                'id' => 578,
                'country_id' => 42,
                'division_id' => NULL,
                'name' => 'Centre',
                'full_name' => NULL,
                'code' => 'c',
            ),
            78 =>
            array(
                'id' => 579,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Abakan',
                'full_name' => NULL,
                'code' => 'aba',
            ),
            79 =>
            array(
                'id' => 580,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Arkhangelsk',
                'full_name' => NULL,
                'code' => 'ark',
            ),
            80 =>
            array(
                'id' => 581,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Aginskoye',
                'full_name' => NULL,
                'code' => 'agi',
            ),
            81 =>
            array(
                'id' => 582,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Anadyr',
                'full_name' => NULL,
                'code' => 'dyr',
            ),
            82 =>
            array(
                'id' => 583,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Astrakhan',
                'full_name' => NULL,
                'code' => 'ast',
            ),
            83 =>
            array(
                'id' => 584,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Elista',
                'full_name' => NULL,
                'code' => 'esl',
            ),
            84 =>
            array(
                'id' => 585,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Orel',
                'full_name' => NULL,
                'code' => 'orl',
            ),
            85 =>
            array(
                'id' => 586,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Orenburg',
                'full_name' => NULL,
                'code' => 'ore',
            ),
            86 =>
            array(
                'id' => 587,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Barnaul',
                'full_name' => NULL,
                'code' => 'bax',
            ),
            87 =>
            array(
                'id' => 588,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Penza',
                'full_name' => NULL,
                'code' => 'pnz',
            ),
            88 =>
            array(
                'id' => 589,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Petropavlovsk-Kamchatskiy',
                'full_name' => NULL,
                'code' => 'pkc',
            ),
            89 =>
            array(
                'id' => 590,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Petrozavodsk',
                'full_name' => NULL,
                'code' => 'pes',
            ),
            90 =>
            array(
                'id' => 591,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Perm',
                'full_name' => NULL,
                'code' => 'per',
            ),
            91 =>
            array(
                'id' => 592,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Birobidzan',
                'full_name' => NULL,
                'code' => 'bbz',
            ),
            92 =>
            array(
                'id' => 593,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Belgorod',
                'full_name' => NULL,
                'code' => 'bel',
            ),
            93 =>
            array(
                'id' => 594,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Chabarovsk',
                'full_name' => NULL,
                'code' => 'cok',
            ),
            94 =>
            array(
                'id' => 595,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Blagoveshchensk',
                'full_name' => NULL,
                'code' => 'bqs',
            ),
            95 =>
            array(
                'id' => 596,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Bryansk',
                'full_name' => NULL,
                'code' => 'bry',
            ),
            96 =>
            array(
                'id' => 597,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Chelyabinsk',
                'full_name' => NULL,
                'code' => 'che',
            ),
            97 =>
            array(
                'id' => 598,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Chita',
                'full_name' => NULL,
                'code' => 'chi',
            ),
            98 =>
            array(
                'id' => 599,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Rostov-na-Donu',
                'full_name' => NULL,
                'code' => 'ros',
            ),
            99 =>
            array(
                'id' => 600,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Omsk',
                'full_name' => NULL,
                'code' => 'oms',
            ),
            100 =>
            array(
                'id' => 601,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Volgograd',
                'full_name' => NULL,
                'code' => 'vog',
            ),
            101 =>
            array(
                'id' => 602,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Vladimir',
                'full_name' => NULL,
                'code' => 'vmr',
            ),
            102 =>
            array(
                'id' => 603,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Vladikavkaz',
                'full_name' => NULL,
                'code' => 'vla',
            ),
            103 =>
            array(
                'id' => 604,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Gorno-Altajsk',
                'full_name' => NULL,
                'code' => 'goa',
            ),
            104 =>
            array(
                'id' => 605,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Grozny',
                'full_name' => NULL,
                'code' => 'grv',
            ),
            105 =>
            array(
                'id' => 606,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Vladivostok',
                'full_name' => NULL,
                'code' => 'vvo',
            ),
            106 =>
            array(
                'id' => 607,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Khanty-Mansiysk',
                'full_name' => NULL,
                'code' => 'khm',
            ),
            107 =>
            array(
                'id' => 608,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kirov',
                'full_name' => NULL,
                'code' => 'kir',
            ),
            108 =>
            array(
                'id' => 609,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kaliningrad',
                'full_name' => NULL,
                'code' => 'kgd',
            ),
            109 =>
            array(
                'id' => 610,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kazan',
                'full_name' => NULL,
                'code' => 'kzn',
            ),
            110 =>
            array(
                'id' => 611,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kaluga',
                'full_name' => NULL,
                'code' => 'klf',
            ),
            111 =>
            array(
                'id' => 612,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kostroma',
                'full_name' => NULL,
                'code' => 'kos',
            ),
            112 =>
            array(
                'id' => 613,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Krasnodar',
                'full_name' => NULL,
                'code' => 'krr',
            ),
            113 =>
            array(
                'id' => 614,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Krasnojarsk',
                'full_name' => NULL,
                'code' => 'kya',
            ),
            114 =>
            array(
                'id' => 615,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kemerovo',
                'full_name' => NULL,
                'code' => 'kem',
            ),
            115 =>
            array(
                'id' => 616,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kyzyl',
                'full_name' => NULL,
                'code' => 'kyz',
            ),
            116 =>
            array(
                'id' => 617,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kudymkar',
                'full_name' => NULL,
                'code' => 'kud',
            ),
            117 =>
            array(
                'id' => 618,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kurgan',
                'full_name' => NULL,
                'code' => 'kro',
            ),
            118 =>
            array(
                'id' => 619,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Kursk',
                'full_name' => NULL,
                'code' => 'urs',
            ),
            119 =>
            array(
                'id' => 620,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Lipeck',
                'full_name' => NULL,
                'code' => 'lip',
            ),
            120 =>
            array(
                'id' => 621,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Ryazan',
                'full_name' => NULL,
                'code' => 'rya',
            ),
            121 =>
            array(
                'id' => 622,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Makhachkala',
                'full_name' => NULL,
                'code' => 'mcx',
            ),
            122 =>
            array(
                'id' => 623,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Magadan',
                'full_name' => NULL,
                'code' => 'mag',
            ),
            123 =>
            array(
                'id' => 624,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Magas',
                'full_name' => NULL,
                'code' => 'in',
            ),
            124 =>
            array(
                'id' => 625,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Maykop',
                'full_name' => NULL,
                'code' => 'may',
            ),
            125 =>
            array(
                'id' => 626,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Murmansk',
                'full_name' => NULL,
                'code' => 'mmk',
            ),
            126 =>
            array(
                'id' => 627,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Moscow',
                'full_name' => NULL,
                'code' => 'mow',
            ),
            127 =>
            array(
                'id' => 628,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Nalchik',
                'full_name' => NULL,
                'code' => 'nal',
            ),
            128 =>
            array(
                'id' => 629,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Naryan-Mar',
                'full_name' => NULL,
                'code' => 'nnm',
            ),
            129 =>
            array(
                'id' => 630,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Juzno-Sachalinsk',
                'full_name' => NULL,
                'code' => 'jsa',
            ),
            130 =>
            array(
                'id' => 631,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Velikij Novgorod',
                'full_name' => NULL,
                'code' => 'vus',
            ),
            131 =>
            array(
                'id' => 632,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Palana',
                'full_name' => NULL,
                'code' => 'pal',
            ),
            132 =>
            array(
                'id' => 633,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Pskov',
                'full_name' => NULL,
                'code' => 'psk',
            ),
            133 =>
            array(
                'id' => 634,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Cheboksary',
                'full_name' => NULL,
                'code' => 'csy',
            ),
            134 =>
            array(
                'id' => 635,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Cherkessk',
                'full_name' => NULL,
                'code' => 'cks',
            ),
            135 =>
            array(
                'id' => 636,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Tyumen',
                'full_name' => NULL,
                'code' => 'tyu',
            ),
            136 =>
            array(
                'id' => 637,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Saratov',
                'full_name' => NULL,
                'code' => 'sar',
            ),
            137 =>
            array(
                'id' => 638,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Saransk',
                'full_name' => NULL,
                'code' => 'skx',
            ),
            138 =>
            array(
                'id' => 639,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Salekhard',
                'full_name' => NULL,
                'code' => 'sly',
            ),
            139 =>
            array(
                'id' => 640,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Samara',
                'full_name' => NULL,
                'code' => 'sam',
            ),
            140 =>
            array(
                'id' => 641,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Syktyvkar',
                'full_name' => NULL,
                'code' => 'scw',
            ),
            141 =>
            array(
                'id' => 642,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'St. Peterburg',
                'full_name' => NULL,
                'code' => 'spe',
            ),
            142 =>
            array(
                'id' => 643,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Smolensk',
                'full_name' => NULL,
                'code' => 'lnx',
            ),
            143 =>
            array(
                'id' => 644,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Stavropol',
                'full_name' => NULL,
                'code' => 'sta',
            ),
            144 =>
            array(
                'id' => 645,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Tambov',
                'full_name' => NULL,
                'code' => 'tam',
            ),
            145 =>
            array(
                'id' => 646,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Tver',
                'full_name' => NULL,
                'code' => 'tve',
            ),
            146 =>
            array(
                'id' => 647,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Tula',
                'full_name' => NULL,
                'code' => 'tul',
            ),
            147 =>
            array(
                'id' => 648,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Tomsk',
                'full_name' => NULL,
                'code' => 'tom',
            ),
            148 =>
            array(
                'id' => 649,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Voronezh',
                'full_name' => NULL,
                'code' => 'vor',
            ),
            149 =>
            array(
                'id' => 650,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Vologda',
                'full_name' => NULL,
                'code' => 'vlg',
            ),
            150 =>
            array(
                'id' => 651,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Ufa',
                'full_name' => NULL,
                'code' => 'ufa',
            ),
            151 =>
            array(
                'id' => 652,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Ulan-Ude',
                'full_name' => NULL,
                'code' => 'uud',
            ),
            152 =>
            array(
                'id' => 653,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Uljanovsk',
                'full_name' => NULL,
                'code' => 'uly',
            ),
            153 =>
            array(
                'id' => 654,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Ust-Ordynsky',
                'full_name' => NULL,
                'code' => 'uob',
            ),
            154 =>
            array(
                'id' => 655,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Niznij Novgorod',
                'full_name' => NULL,
                'code' => 'goj',
            ),
            155 =>
            array(
                'id' => 656,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Novosibirsk',
                'full_name' => NULL,
                'code' => 'nvs',
            ),
            156 =>
            array(
                'id' => 657,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Jakutsk',
                'full_name' => NULL,
                'code' => 'jak',
            ),
            157 =>
            array(
                'id' => 658,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Jaroslavl',
                'full_name' => NULL,
                'code' => 'jar',
            ),
            158 =>
            array(
                'id' => 659,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Jekaterinburg',
                'full_name' => NULL,
                'code' => 'jek',
            ),
            159 =>
            array(
                'id' => 660,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Irkutsk',
                'full_name' => NULL,
                'code' => 'ikt',
            ),
            160 =>
            array(
                'id' => 661,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Izhevsk',
                'full_name' => NULL,
                'code' => 'ijk',
            ),
            161 =>
            array(
                'id' => 662,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Ivanovo',
                'full_name' => NULL,
                'code' => 'ivo',
            ),
            162 =>
            array(
                'id' => 663,
                'country_id' => 119,
                'division_id' => NULL,
                'name' => 'Yoshkar-Ola',
                'full_name' => NULL,
                'code' => 'yol',
            ),
            163 =>
            array(
                'id' => 664,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Azuay',
                'full_name' => NULL,
                'code' => 'a',
            ),
            164 =>
            array(
                'id' => 665,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'El Oro',
                'full_name' => NULL,
                'code' => 'o',
            ),
            165 =>
            array(
                'id' => 666,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Esmeraldas',
                'full_name' => NULL,
                'code' => 'e',
            ),
            166 =>
            array(
                'id' => 667,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'b',
            ),
            167 =>
            array(
                'id' => 668,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Guayas',
                'full_name' => NULL,
                'code' => 'g',
            ),
            168 =>
            array(
                'id' => 669,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Galapagos',
                'full_name' => NULL,
                'code' => 'w',
            ),
            169 =>
            array(
                'id' => 670,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Carchi',
                'full_name' => NULL,
                'code' => 'c',
            ),
            170 =>
            array(
                'id' => 671,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Canar',
                'full_name' => NULL,
                'code' => 'f',
            ),
            171 =>
            array(
                'id' => 672,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Cotopaxi',
                'full_name' => NULL,
                'code' => 'x',
            ),
            172 =>
            array(
                'id' => 673,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Loja',
                'full_name' => NULL,
                'code' => 'l',
            ),
            173 =>
            array(
                'id' => 674,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Los Rios',
                'full_name' => NULL,
                'code' => 'r',
            ),
            174 =>
            array(
                'id' => 675,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Manabi',
                'full_name' => NULL,
                'code' => 'm',
            ),
            175 =>
            array(
                'id' => 676,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Morona-Santiago',
                'full_name' => NULL,
                'code' => 's',
            ),
            176 =>
            array(
                'id' => 677,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Napo, Orellana',
                'full_name' => NULL,
                'code' => 'd',
            ),
            177 =>
            array(
                'id' => 678,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Pastaza',
                'full_name' => NULL,
                'code' => 'y',
            ),
            178 =>
            array(
                'id' => 679,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Pichincha',
                'full_name' => NULL,
                'code' => 'p',
            ),
            179 =>
            array(
                'id' => 680,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Chimborazo',
                'full_name' => NULL,
                'code' => 'h',
            ),
            180 =>
            array(
                'id' => 681,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Zamora-Chinchipe',
                'full_name' => NULL,
                'code' => 'z',
            ),
            181 =>
            array(
                'id' => 682,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Sucumbios',
                'full_name' => NULL,
                'code' => 'u',
            ),
            182 =>
            array(
                'id' => 683,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Tungurahua',
                'full_name' => NULL,
                'code' => 't',
            ),
            183 =>
            array(
                'id' => 684,
                'country_id' => 194,
                'division_id' => NULL,
                'name' => 'Imbabura',
                'full_name' => NULL,
                'code' => 'i',
            ),
            184 =>
            array(
                'id' => 685,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Anseba',
                'full_name' => NULL,
                'code' => 'ke',
            ),
            185 =>
            array(
                'id' => 686,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Semenawi Keyih Bahri',
                'full_name' => NULL,
                'code' => 'sk',
            ),
            186 =>
            array(
                'id' => 687,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Gash Barka',
                'full_name' => NULL,
                'code' => 'br',
            ),
            187 =>
            array(
                'id' => 688,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Debub',
                'full_name' => NULL,
                'code' => 'de',
            ),
            188 =>
            array(
                'id' => 689,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Debubawi Keyih Bahri',
                'full_name' => NULL,
                'code' => 'dk',
            ),
            189 =>
            array(
                'id' => 690,
                'country_id' => 10,
                'division_id' => NULL,
                'name' => 'Maekel',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            190 =>
            array(
                'id' => 691,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Arles',
                'full_name' => NULL,
                'code' => 'arl',
            ),
            191 =>
            array(
                'id' => 692,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Ajaccio',
                'full_name' => NULL,
                'code' => 'aja',
            ),
            192 =>
            array(
                'id' => 693,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Aix-en-Provence',
                'full_name' => NULL,
                'code' => 'qxb',
            ),
            193 =>
            array(
                'id' => 694,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Orleans',
                'full_name' => NULL,
                'code' => 'orr',
            ),
            194 =>
            array(
                'id' => 695,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Paris',
                'full_name' => NULL,
                'code' => 'par',
            ),
            195 =>
            array(
                'id' => 696,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Besancon',
                'full_name' => NULL,
                'code' => 'bsn',
            ),
            196 =>
            array(
                'id' => 697,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Dijon',
                'full_name' => NULL,
                'code' => 'dij',
            ),
            197 =>
            array(
                'id' => 698,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Frejus',
                'full_name' => NULL,
                'code' => 'frj',
            ),
            198 =>
            array(
                'id' => 699,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Caen',
                'full_name' => NULL,
                'code' => 'cfr',
            ),
            199 =>
            array(
                'id' => 700,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Rennes',
                'full_name' => NULL,
                'code' => 'rns',
            ),
            200 =>
            array(
                'id' => 701,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Lyon',
                'full_name' => NULL,
                'code' => 'lio',
            ),
            201 =>
            array(
                'id' => 702,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Lille',
                'full_name' => NULL,
                'code' => 'lle',
            ),
            202 =>
            array(
                'id' => 703,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Limoges',
                'full_name' => NULL,
                'code' => 'lig',
            ),
            203 =>
            array(
                'id' => 704,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Rouen',
                'full_name' => NULL,
                'code' => 'uro',
            ),
            204 =>
            array(
                'id' => 705,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Marseille',
                'full_name' => NULL,
                'code' => 'mrs',
            ),
            205 =>
            array(
                'id' => 706,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Metz',
                'full_name' => NULL,
                'code' => 'mzm',
            ),
            206 =>
            array(
                'id' => 707,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Montpellier',
                'full_name' => NULL,
                'code' => 'mpl',
            ),
            207 =>
            array(
                'id' => 708,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Nantes',
                'full_name' => NULL,
                'code' => 'nte',
            ),
            208 =>
            array(
                'id' => 709,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Nice',
                'full_name' => NULL,
                'code' => 'nce',
            ),
            209 =>
            array(
                'id' => 710,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Chalons-en-Champagne',
                'full_name' => NULL,
                'code' => 'csm',
            ),
            210 =>
            array(
                'id' => 711,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Toulouse',
                'full_name' => NULL,
                'code' => 'tls',
            ),
            211 =>
            array(
                'id' => 712,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Valence',
                'full_name' => NULL,
                'code' => 'vaa',
            ),
            212 =>
            array(
                'id' => 713,
                'country_id' => 150,
                'division_id' => NULL,
                'name' => 'Amiens',
                'full_name' => NULL,
                'code' => 'ami',
            ),
            213 =>
            array(
                'id' => 714,
                'country_id' => 99,
                'division_id' => NULL,
                'name' => 'Davao',
                'full_name' => NULL,
                'code' => 'dor',
            ),
            214 =>
            array(
                'id' => 715,
                'country_id' => 99,
                'division_id' => NULL,
                'name' => 'Caloocan',
                'full_name' => NULL,
                'code' => 'cao',
            ),
            215 =>
            array(
                'id' => 716,
                'country_id' => 99,
                'division_id' => NULL,
                'name' => 'Manila',
                'full_name' => NULL,
                'code' => 'mnl',
            ),
            216 =>
            array(
                'id' => 717,
                'country_id' => 99,
                'division_id' => NULL,
                'name' => 'Cebu',
                'full_name' => NULL,
                'code' => 'ceb',
            ),
            217 =>
            array(
                'id' => 718,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Espoo',
                'full_name' => NULL,
                'code' => 'esp',
            ),
            218 =>
            array(
                'id' => 719,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Oulu',
                'full_name' => NULL,
                'code' => 'olu',
            ),
            219 =>
            array(
                'id' => 720,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Pori',
                'full_name' => NULL,
                'code' => 'por',
            ),
            220 =>
            array(
                'id' => 721,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Porvoo',
                'full_name' => NULL,
                'code' => 'prv',
            ),
            221 =>
            array(
                'id' => 722,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Hameenlinna',
                'full_name' => NULL,
                'code' => 'hmy',
            ),
            222 =>
            array(
                'id' => 723,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Helsinki',
                'full_name' => NULL,
                'code' => 'hel',
            ),
            223 =>
            array(
                'id' => 724,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Kajaani',
                'full_name' => NULL,
                'code' => 'kaj',
            ),
            224 =>
            array(
                'id' => 725,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Kokkola',
                'full_name' => NULL,
                'code' => 'kok',
            ),
            225 =>
            array(
                'id' => 726,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Kotka',
                'full_name' => NULL,
                'code' => 'ktk',
            ),
            226 =>
            array(
                'id' => 727,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Kuopio',
                'full_name' => NULL,
                'code' => 'kuo',
            ),
            227 =>
            array(
                'id' => 728,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Lahti',
                'full_name' => NULL,
                'code' => 'lhi',
            ),
            228 =>
            array(
                'id' => 729,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Lappeenranta',
                'full_name' => NULL,
                'code' => 'lpp',
            ),
            229 =>
            array(
                'id' => 730,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Rovaniemi',
                'full_name' => NULL,
                'code' => 'rvn',
            ),
            230 =>
            array(
                'id' => 731,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Mariehamn',
                'full_name' => NULL,
                'code' => 'mhq',
            ),
            231 =>
            array(
                'id' => 732,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Mikkeli',
                'full_name' => NULL,
                'code' => 'mik',
            ),
            232 =>
            array(
                'id' => 733,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Tampere',
                'full_name' => NULL,
                'code' => 'tmp',
            ),
            233 =>
            array(
                'id' => 734,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Turku',
                'full_name' => NULL,
                'code' => 'tku',
            ),
            234 =>
            array(
                'id' => 735,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Vaasa',
                'full_name' => NULL,
                'code' => 'vaa',
            ),
            235 =>
            array(
                'id' => 736,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Vantaa',
                'full_name' => NULL,
                'code' => 'vat',
            ),
            236 =>
            array(
                'id' => 737,
                'country_id' => 162,
                'division_id' => NULL,
                'name' => 'Joensuu',
                'full_name' => NULL,
                'code' => 'joe',
            ),
            237 =>
            array(
                'id' => 738,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Paul',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            238 =>
            array(
                'id' => 739,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Porto Novo',
                'full_name' => NULL,
                'code' => 'pn',
            ),
            239 =>
            array(
                'id' => 740,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Boa Vista',
                'full_name' => NULL,
                'code' => 'bv',
            ),
            240 =>
            array(
                'id' => 741,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Brava',
                'full_name' => NULL,
                'code' => 'br',
            ),
            241 =>
            array(
                'id' => 742,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Ribeira Grande',
                'full_name' => NULL,
                'code' => 'rg',
            ),
            242 =>
            array(
                'id' => 743,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Fogo',
                'full_name' => NULL,
                'code' => 'fo',
            ),
            243 =>
            array(
                'id' => 744,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Maio',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            244 =>
            array(
                'id' => 745,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Mosteiros',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            245 =>
            array(
                'id' => 746,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Praia',
                'full_name' => NULL,
                'code' => 'pr',
            ),
            246 =>
            array(
                'id' => 747,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sal',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            247 =>
            array(
                'id' => 748,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Santo Antao',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            248 =>
            array(
                'id' => 749,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Santiago',
                'full_name' => NULL,
                'code' => 'ia',
            ),
            249 =>
            array(
                'id' => 750,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sao Domingos',
                'full_name' => NULL,
                'code' => 'sd',
            ),
            250 =>
            array(
                'id' => 751,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sao Filipe',
                'full_name' => NULL,
                'code' => 'sf',
            ),
            251 =>
            array(
                'id' => 752,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Santa Catarina',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            252 =>
            array(
                'id' => 753,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Santa Cruz',
                'full_name' => NULL,
                'code' => 'cr',
            ),
            253 =>
            array(
                'id' => 754,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sao Miguel',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            254 =>
            array(
                'id' => 755,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sao Nicolau',
                'full_name' => NULL,
                'code' => 'sn',
            ),
            255 =>
            array(
                'id' => 756,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Sao Vicente',
                'full_name' => NULL,
                'code' => 'sv',
            ),
            256 =>
            array(
                'id' => 757,
                'country_id' => 49,
                'division_id' => NULL,
                'name' => 'Tarrafal',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            257 =>
            array(
                'id' => 758,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Arauca',
                'full_name' => NULL,
                'code' => 'ara',
            ),
            258 =>
            array(
                'id' => 759,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Antioquia',
                'full_name' => NULL,
                'code' => 'ant',
            ),
            259 =>
            array(
                'id' => 760,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Norte de Santander',
                'full_name' => NULL,
                'code' => 'nds',
            ),
            260 =>
            array(
                'id' => 761,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Bogota',
                'full_name' => NULL,
                'code' => 'bdc',
            ),
            261 =>
            array(
                'id' => 762,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'bol',
            ),
            262 =>
            array(
                'id' => 763,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Boyaca',
                'full_name' => NULL,
                'code' => 'boy',
            ),
            263 =>
            array(
                'id' => 764,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Atlantico',
                'full_name' => NULL,
                'code' => 'atl',
            ),
            264 =>
            array(
                'id' => 765,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Guaviare',
                'full_name' => NULL,
                'code' => 'gvr',
            ),
            265 =>
            array(
                'id' => 766,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'La Guajira',
                'full_name' => NULL,
                'code' => 'gjr',
            ),
            266 =>
            array(
                'id' => 767,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Guainia',
                'full_name' => NULL,
                'code' => 'gna',
            ),
            267 =>
            array(
                'id' => 768,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Quindio',
                'full_name' => NULL,
                'code' => 'qui',
            ),
            268 =>
            array(
                'id' => 769,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Caldas',
                'full_name' => NULL,
                'code' => 'cal',
            ),
            269 =>
            array(
                'id' => 770,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Caqueta',
                'full_name' => NULL,
                'code' => 'caq',
            ),
            270 =>
            array(
                'id' => 771,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Casanare',
                'full_name' => NULL,
                'code' => 'cas',
            ),
            271 =>
            array(
                'id' => 772,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Cauca',
                'full_name' => NULL,
                'code' => 'cau',
            ),
            272 =>
            array(
                'id' => 773,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Valle del Cauca',
                'full_name' => NULL,
                'code' => 'vdc',
            ),
            273 =>
            array(
                'id' => 774,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'cor',
            ),
            274 =>
            array(
                'id' => 775,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Cundinamarca',
                'full_name' => NULL,
                'code' => 'cam',
            ),
            275 =>
            array(
                'id' => 776,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Risaralda',
                'full_name' => NULL,
                'code' => 'ris',
            ),
            276 =>
            array(
                'id' => 777,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Magdalena',
                'full_name' => NULL,
                'code' => 'mag',
            ),
            277 =>
            array(
                'id' => 778,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Meta',
                'full_name' => NULL,
                'code' => 'met',
            ),
            278 =>
            array(
                'id' => 779,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Narino',
                'full_name' => NULL,
                'code' => 'nar',
            ),
            279 =>
            array(
                'id' => 780,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Putumayo',
                'full_name' => NULL,
                'code' => 'put',
            ),
            280 =>
            array(
                'id' => 781,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Choco',
                'full_name' => NULL,
                'code' => 'cho',
            ),
            281 =>
            array(
                'id' => 782,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Cesar',
                'full_name' => NULL,
                'code' => 'ces',
            ),
            282 =>
            array(
                'id' => 783,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Santander',
                'full_name' => NULL,
                'code' => 'san',
            ),
            283 =>
            array(
                'id' => 784,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'San Andres y Providencia',
                'full_name' => NULL,
                'code' => 'sap',
            ),
            284 =>
            array(
                'id' => 785,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Sucre',
                'full_name' => NULL,
                'code' => 'suc',
            ),
            285 =>
            array(
                'id' => 786,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Tolima',
                'full_name' => NULL,
                'code' => 'tol',
            ),
            286 =>
            array(
                'id' => 787,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Vichada',
                'full_name' => NULL,
                'code' => 'vic',
            ),
            287 =>
            array(
                'id' => 788,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Vaupes',
                'full_name' => NULL,
                'code' => 'vau',
            ),
            288 =>
            array(
                'id' => 789,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Huila',
                'full_name' => NULL,
                'code' => 'hui',
            ),
            289 =>
            array(
                'id' => 790,
                'country_id' => 187,
                'division_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'amz',
            ),
            290 =>
            array(
                'id' => 791,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Alajuela',
                'full_name' => NULL,
                'code' => 'a',
            ),
            291 =>
            array(
                'id' => 792,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Heredia',
                'full_name' => NULL,
                'code' => 'h',
            ),
            292 =>
            array(
                'id' => 793,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Guanacaste',
                'full_name' => NULL,
                'code' => 'g',
            ),
            293 =>
            array(
                'id' => 794,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Cartago',
                'full_name' => NULL,
                'code' => 'c',
            ),
            294 =>
            array(
                'id' => 795,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Limon',
                'full_name' => NULL,
                'code' => 'l',
            ),
            295 =>
            array(
                'id' => 796,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'Puntarenas',
                'full_name' => NULL,
                'code' => 'p',
            ),
            296 =>
            array(
                'id' => 797,
                'country_id' => 103,
                'division_id' => NULL,
                'name' => 'San Jose',
                'full_name' => NULL,
                'code' => 'sj',
            ),
            297 =>
            array(
                'id' => 798,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Holguin',
                'full_name' => NULL,
                'code' => '11',
            ),
            298 =>
            array(
                'id' => 799,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Pinar del Rio',
                'full_name' => NULL,
                'code' => '1',
            ),
            299 =>
            array(
                'id' => 800,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Villa Clara',
                'full_name' => NULL,
                'code' => '5',
            ),
            300 =>
            array(
                'id' => 801,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Granma',
                'full_name' => NULL,
                'code' => '12',
            ),
            301 =>
            array(
                'id' => 802,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Guantanamo',
                'full_name' => NULL,
                'code' => '14',
            ),
            302 =>
            array(
                'id' => 803,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'La Habana',
                'full_name' => NULL,
                'code' => '2',
            ),
            303 =>
            array(
                'id' => 804,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Ciudad de la Habana',
                'full_name' => NULL,
                'code' => '3',
            ),
            304 =>
            array(
                'id' => 805,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Camaguey',
                'full_name' => NULL,
                'code' => '9',
            ),
            305 =>
            array(
                'id' => 806,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Las Tunas',
                'full_name' => NULL,
                'code' => '10',
            ),
            306 =>
            array(
                'id' => 807,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Matanzas',
                'full_name' => NULL,
                'code' => '4',
            ),
            307 =>
            array(
                'id' => 808,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Mayari',
                'full_name' => NULL,
                'code' => 'may',
            ),
            308 =>
            array(
                'id' => 809,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Manzanillo',
                'full_name' => NULL,
                'code' => 'mzo',
            ),
            309 =>
            array(
                'id' => 810,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Isla de la Juventud',
                'full_name' => NULL,
                'code' => '99',
            ),
            310 =>
            array(
                'id' => 811,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Santiago de Cuba',
                'full_name' => NULL,
                'code' => '13',
            ),
            311 =>
            array(
                'id' => 812,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Sancti Spiritus',
                'full_name' => NULL,
                'code' => '7',
            ),
            312 =>
            array(
                'id' => 813,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Cienfuegos',
                'full_name' => NULL,
                'code' => '6',
            ),
            313 =>
            array(
                'id' => 814,
                'country_id' => 104,
                'division_id' => NULL,
                'name' => 'Ciego de Avila',
                'full_name' => NULL,
                'code' => '8',
            ),
            314 =>
            array(
                'id' => 815,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Essequibo Islands-West Demerara',
                'full_name' => NULL,
                'code' => 'ew',
            ),
            315 =>
            array(
                'id' => 816,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Barima-Waini',
                'full_name' => NULL,
                'code' => 'bw',
            ),
            316 =>
            array(
                'id' => 817,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Pomeroon-Supenaam',
                'full_name' => NULL,
                'code' => 'pm',
            ),
            317 =>
            array(
                'id' => 818,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Potaro-Siparuni',
                'full_name' => NULL,
                'code' => 'pi',
            ),
            318 =>
            array(
                'id' => 819,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Demerara-Mahaica',
                'full_name' => NULL,
                'code' => 'dm',
            ),
            319 =>
            array(
                'id' => 820,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'East Berbice-Corentyne',
                'full_name' => NULL,
                'code' => 'ec',
            ),
            320 =>
            array(
                'id' => 821,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Cuyuni-Mazaruni',
                'full_name' => NULL,
                'code' => 'cm',
            ),
            321 =>
            array(
                'id' => 822,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Mahaica-Berbice',
                'full_name' => NULL,
                'code' => 'mb',
            ),
            322 =>
            array(
                'id' => 823,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Upper Demerara-Berbice',
                'full_name' => NULL,
                'code' => 'ud',
            ),
            323 =>
            array(
                'id' => 824,
                'country_id' => 188,
                'division_id' => NULL,
                'name' => 'Upper Takutu-Upper Essequibo',
                'full_name' => NULL,
                'code' => 'ut',
            ),
            324 =>
            array(
                'id' => 825,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Arkalyk',
                'full_name' => NULL,
                'code' => 'ayk',
            ),
            325 =>
            array(
                'id' => 826,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Aqmola',
                'full_name' => NULL,
                'code' => 'akm',
            ),
            326 =>
            array(
                'id' => 827,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Aksu',
                'full_name' => NULL,
                'code' => 'aks',
            ),
            327 =>
            array(
                'id' => 828,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Aqtobe',
                'full_name' => NULL,
                'code' => 'akt',
            ),
            328 =>
            array(
                'id' => 829,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Almaty',
                'full_name' => NULL,
                'code' => 'ala',
            ),
            329 =>
            array(
                'id' => 830,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Arys',
                'full_name' => NULL,
                'code' => 'ary',
            ),
            330 =>
            array(
                'id' => 831,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Astana',
                'full_name' => NULL,
                'code' => 'ast',
            ),
            331 =>
            array(
                'id' => 832,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Atyrau',
                'full_name' => NULL,
                'code' => 'aty',
            ),
            332 =>
            array(
                'id' => 833,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Ekibastuz',
                'full_name' => NULL,
                'code' => 'ekb',
            ),
            333 =>
            array(
                'id' => 834,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Balkhash',
                'full_name' => NULL,
                'code' => 'bxh',
            ),
            334 =>
            array(
                'id' => 835,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Pavlodar',
                'full_name' => NULL,
                'code' => 'pav',
            ),
            335 =>
            array(
                'id' => 836,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Soltustik Qazaqstan',
                'full_name' => NULL,
                'code' => 'sev',
            ),
            336 =>
            array(
                'id' => 837,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Shyghys Qazaqstan',
                'full_name' => NULL,
                'code' => 'vos',
            ),
            337 =>
            array(
                'id' => 838,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Zyryanovsk',
                'full_name' => NULL,
                'code' => 'zyr',
            ),
            338 =>
            array(
                'id' => 839,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Zhambyl',
                'full_name' => NULL,
                'code' => 'dmb',
            ),
            339 =>
            array(
                'id' => 840,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Zhezkazgan',
                'full_name' => NULL,
                'code' => 'dzh',
            ),
            340 =>
            array(
                'id' => 841,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Qaraghandy',
                'full_name' => NULL,
                'code' => 'kar',
            ),
            341 =>
            array(
                'id' => 842,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Karazhal',
                'full_name' => NULL,
                'code' => 'kzo',
            ),
            342 =>
            array(
                'id' => 843,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Kapchagay',
                'full_name' => NULL,
                'code' => 'kap',
            ),
            343 =>
            array(
                'id' => 844,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Qostanay',
                'full_name' => NULL,
                'code' => 'kst',
            ),
            344 =>
            array(
                'id' => 845,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Qyzylorda',
                'full_name' => NULL,
                'code' => 'kzy',
            ),
            345 =>
            array(
                'id' => 846,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Kentau',
                'full_name' => NULL,
                'code' => 'ken',
            ),
            346 =>
            array(
                'id' => 847,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Kurchatov',
                'full_name' => NULL,
                'code' => 'kur',
            ),
            347 =>
            array(
                'id' => 848,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Lisakovsk',
                'full_name' => NULL,
                'code' => 'lkk',
            ),
            348 =>
            array(
                'id' => 849,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Leninogorsk',
                'full_name' => NULL,
                'code' => 'len',
            ),
            349 =>
            array(
                'id' => 850,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Rudny',
                'full_name' => NULL,
                'code' => 'rud',
            ),
            350 =>
            array(
                'id' => 851,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Mangghystau',
                'full_name' => NULL,
                'code' => 'man',
            ),
            351 =>
            array(
                'id' => 852,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Ongtustik Qazaqstan',
                'full_name' => NULL,
                'code' => 'kgt',
            ),
            352 =>
            array(
                'id' => 853,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Saran',
                'full_name' => NULL,
                'code' => 'sar',
            ),
            353 =>
            array(
                'id' => 854,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Semey',
                'full_name' => NULL,
                'code' => 'sem',
            ),
            354 =>
            array(
                'id' => 855,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Shakhtinsk',
                'full_name' => NULL,
                'code' => 'sak',
            ),
            355 =>
            array(
                'id' => 856,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Stepnogorsk',
                'full_name' => NULL,
                'code' => 'ste',
            ),
            356 =>
            array(
                'id' => 857,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Tekeli',
                'full_name' => NULL,
                'code' => 'tek',
            ),
            357 =>
            array(
                'id' => 858,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Temirtau',
                'full_name' => NULL,
                'code' => 'tem',
            ),
            358 =>
            array(
                'id' => 859,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Turkestan',
                'full_name' => NULL,
                'code' => 'tur',
            ),
            359 =>
            array(
                'id' => 860,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Batys Qazaqstan',
                'full_name' => NULL,
                'code' => 'zap',
            ),
            360 =>
            array(
                'id' => 861,
                'country_id' => 98,
                'division_id' => NULL,
                'name' => 'Zhanaozen',
                'full_name' => NULL,
                'code' => 'zha',
            ),
            361 =>
            array(
                'id' => 862,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Almere',
                'full_name' => NULL,
                'code' => 'aer',
            ),
            362 =>
            array(
                'id' => 863,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Amersfoort',
                'full_name' => NULL,
                'code' => 'ame',
            ),
            363 =>
            array(
                'id' => 864,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Amsterdam',
                'full_name' => NULL,
                'code' => 'ams',
            ),
            364 =>
            array(
                'id' => 865,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Arnhem',
                'full_name' => NULL,
                'code' => 'arn',
            ),
            365 =>
            array(
                'id' => 866,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Apeldoorn',
                'full_name' => NULL,
                'code' => 'ape',
            ),
            366 =>
            array(
                'id' => 867,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Assen',
                'full_name' => NULL,
                'code' => 'ass',
            ),
            367 =>
            array(
                'id' => 868,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Ede',
                'full_name' => NULL,
                'code' => 'ede',
            ),
            368 =>
            array(
                'id' => 869,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Emmen',
                'full_name' => NULL,
                'code' => 'emm',
            ),
            369 =>
            array(
                'id' => 870,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Eindhoven',
                'full_name' => NULL,
                'code' => 'ein',
            ),
            370 =>
            array(
                'id' => 871,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Breda',
                'full_name' => NULL,
                'code' => 'brd',
            ),
            371 =>
            array(
                'id' => 872,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Tilburg',
                'full_name' => NULL,
                'code' => 'tlb',
            ),
            372 =>
            array(
                'id' => 873,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Dordrecht',
                'full_name' => NULL,
                'code' => 'dor',
            ),
            373 =>
            array(
                'id' => 874,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Enschede',
                'full_name' => NULL,
                'code' => 'ens',
            ),
            374 =>
            array(
                'id' => 875,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Groningen',
                'full_name' => NULL,
                'code' => 'grq',
            ),
            375 =>
            array(
                'id' => 876,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Haarlem',
                'full_name' => NULL,
                'code' => 'hra',
            ),
            376 =>
            array(
                'id' => 877,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Hague',
                'full_name' => NULL,
                'code' => 'hag',
            ),
            377 =>
            array(
                'id' => 878,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Hoofddorp',
                'full_name' => NULL,
                'code' => 'hfd',
            ),
            378 =>
            array(
                'id' => 879,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Leiden',
                'full_name' => NULL,
                'code' => 'lid',
            ),
            379 =>
            array(
                'id' => 880,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Lelystad',
                'full_name' => NULL,
                'code' => 'ley',
            ),
            380 =>
            array(
                'id' => 881,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Rotterdam',
                'full_name' => NULL,
                'code' => 'rtm',
            ),
            381 =>
            array(
                'id' => 882,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Leeuwarden',
                'full_name' => NULL,
                'code' => 'lwr',
            ),
            382 =>
            array(
                'id' => 883,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Maastricht',
                'full_name' => NULL,
                'code' => 'mst',
            ),
            383 =>
            array(
                'id' => 884,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Middelburg',
                'full_name' => NULL,
                'code' => 'mdl',
            ),
            384 =>
            array(
                'id' => 885,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Nijmegen',
                'full_name' => NULL,
                'code' => 'nij',
            ),
            385 =>
            array(
                'id' => 886,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => '\'s-Hertogenbosch',
                'full_name' => NULL,
                'code' => 'htb',
            ),
            386 =>
            array(
                'id' => 887,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Utrecht',
                'full_name' => NULL,
                'code' => 'utc',
            ),
            387 =>
            array(
                'id' => 888,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Zwolle',
                'full_name' => NULL,
                'code' => 'zwo',
            ),
            388 =>
            array(
                'id' => 889,
                'country_id' => 141,
                'division_id' => NULL,
                'name' => 'Zoetermeer',
                'full_name' => NULL,
                'code' => 'ztm',
            ),
            389 =>
            array(
                'id' => 890,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Atlantida',
                'full_name' => NULL,
                'code' => 'at',
            ),
            390 =>
            array(
                'id' => 891,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'El Paraiso',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            391 =>
            array(
                'id' => 892,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Ocotepeque',
                'full_name' => NULL,
                'code' => 'oc',
            ),
            392 =>
            array(
                'id' => 893,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Olancho',
                'full_name' => NULL,
                'code' => 'ol',
            ),
            393 =>
            array(
                'id' => 894,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Francisco Morazan',
                'full_name' => NULL,
                'code' => 'fm',
            ),
            394 =>
            array(
                'id' => 895,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Gracias a Dios',
                'full_name' => NULL,
                'code' => 'gd',
            ),
            395 =>
            array(
                'id' => 896,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Islas de la Bahia',
                'full_name' => NULL,
                'code' => 'ib',
            ),
            396 =>
            array(
                'id' => 897,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Cortes',
                'full_name' => NULL,
                'code' => 'cr',
            ),
            397 =>
            array(
                'id' => 898,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Colon',
                'full_name' => NULL,
                'code' => 'cl',
            ),
            398 =>
            array(
                'id' => 899,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Comayagua',
                'full_name' => NULL,
                'code' => 'cm',
            ),
            399 =>
            array(
                'id' => 900,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Copan',
                'full_name' => NULL,
                'code' => 'cp',
            ),
            400 =>
            array(
                'id' => 901,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'pz',
            ),
            401 =>
            array(
                'id' => 902,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Lempira',
                'full_name' => NULL,
                'code' => 'le',
            ),
            402 =>
            array(
                'id' => 903,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Choluteca',
                'full_name' => NULL,
                'code' => 'ch',
            ),
            403 =>
            array(
                'id' => 904,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Choloma',
                'full_name' => NULL,
                'code' => 'cho',
            ),
            404 =>
            array(
                'id' => 905,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Valle',
                'full_name' => NULL,
                'code' => 'va',
            ),
            405 =>
            array(
                'id' => 906,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Santa Barbara',
                'full_name' => NULL,
                'code' => 'sb',
            ),
            406 =>
            array(
                'id' => 907,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Intibuca',
                'full_name' => NULL,
                'code' => 'in',
            ),
            407 =>
            array(
                'id' => 908,
                'country_id' => 113,
                'division_id' => NULL,
                'name' => 'Yoro',
                'full_name' => NULL,
                'code' => 'yo',
            ),
            408 =>
            array(
                'id' => 909,
                'country_id' => 180,
                'division_id' => NULL,
                'name' => 'Phoenix Islands',
                'full_name' => NULL,
                'code' => 'pho',
            ),
            409 =>
            array(
                'id' => 910,
                'country_id' => 180,
                'division_id' => NULL,
                'name' => 'Gilberts Islands',
                'full_name' => NULL,
                'code' => 'gil',
            ),
            410 =>
            array(
                'id' => 911,
                'country_id' => 180,
                'division_id' => NULL,
                'name' => 'Line Islands',
                'full_name' => NULL,
                'code' => 'lin',
            ),
            411 =>
            array(
                'id' => 912,
                'country_id' => 52,
                'division_id' => NULL,
                'name' => 'Ali Sabih',
                'full_name' => NULL,
                'code' => 's',
            ),
            412 =>
            array(
                'id' => 913,
                'country_id' => 52,
                'division_id' => NULL,
                'name' => 'Obock',
                'full_name' => NULL,
                'code' => 'o',
            ),
            413 =>
            array(
                'id' => 914,
                'country_id' => 52,
                'division_id' => NULL,
                'name' => 'Dikhil',
                'full_name' => NULL,
                'code' => 'k',
            ),
            414 =>
            array(
                'id' => 915,
                'country_id' => 52,
                'division_id' => NULL,
                'name' => 'Tadjoura',
                'full_name' => NULL,
                'code' => 't',
            ),
            415 =>
            array(
                'id' => 916,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Osh',
                'full_name' => NULL,
                'code' => 'o',
            ),
            416 =>
            array(
                'id' => 917,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Batken',
                'full_name' => NULL,
                'code' => 'b',
            ),
            417 =>
            array(
                'id' => 918,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Bishkek',
                'full_name' => NULL,
                'code' => 'gb',
            ),
            418 =>
            array(
                'id' => 919,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Chuy',
                'full_name' => NULL,
                'code' => 'c',
            ),
            419 =>
            array(
                'id' => 920,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Jalal-Abad',
                'full_name' => NULL,
                'code' => 'j',
            ),
            420 =>
            array(
                'id' => 921,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Karabalta',
                'full_name' => NULL,
                'code' => 'kba',
            ),
            421 =>
            array(
                'id' => 922,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Kara-Kol',
                'full_name' => NULL,
                'code' => 'kko',
            ),
            422 =>
            array(
                'id' => 923,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Kant',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            423 =>
            array(
                'id' => 924,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Kok-Jangak',
                'full_name' => NULL,
                'code' => 'kj',
            ),
            424 =>
            array(
                'id' => 925,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Mailuu-Suu',
                'full_name' => NULL,
                'code' => 'ms',
            ),
            425 =>
            array(
                'id' => 926,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Naryn',
                'full_name' => NULL,
                'code' => 'n',
            ),
            426 =>
            array(
                'id' => 927,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Suluktu',
                'full_name' => NULL,
                'code' => 'su',
            ),
            427 =>
            array(
                'id' => 928,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Talas',
                'full_name' => NULL,
                'code' => 't',
            ),
            428 =>
            array(
                'id' => 929,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Tash-Kumyr',
                'full_name' => NULL,
                'code' => 'tk',
            ),
            429 =>
            array(
                'id' => 930,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Uzgen',
                'full_name' => NULL,
                'code' => 'ug',
            ),
            430 =>
            array(
                'id' => 931,
                'country_id' => 65,
                'division_id' => NULL,
                'name' => 'Ysyk-Kol',
                'full_name' => NULL,
                'code' => 'y',
            ),
            431 =>
            array(
                'id' => 932,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Boke',
                'full_name' => NULL,
                'code' => 'bok',
            ),
            432 =>
            array(
                'id' => 933,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Nzerekore',
                'full_name' => NULL,
                'code' => 'nzr',
            ),
            433 =>
            array(
                'id' => 934,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Faranah',
                'full_name' => NULL,
                'code' => 'frn',
            ),
            434 =>
            array(
                'id' => 935,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Kindia',
                'full_name' => NULL,
                'code' => 'knd',
            ),
            435 =>
            array(
                'id' => 936,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Kankan',
                'full_name' => NULL,
                'code' => 'knk',
            ),
            436 =>
            array(
                'id' => 937,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Conakry',
                'full_name' => NULL,
                'code' => 'cnk',
            ),
            437 =>
            array(
                'id' => 938,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Labe',
                'full_name' => NULL,
                'code' => 'lab',
            ),
            438 =>
            array(
                'id' => 939,
                'country_id' => 15,
                'division_id' => NULL,
                'name' => 'Mamou',
                'full_name' => NULL,
                'code' => 'mam',
            ),
            439 =>
            array(
                'id' => 940,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Abbotsford',
                'full_name' => NULL,
                'code' => 'abb',
            ),
            440 =>
            array(
                'id' => 941,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Edmonton',
                'full_name' => NULL,
                'code' => 'edm',
            ),
            441 =>
            array(
                'id' => 942,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Oshawa',
                'full_name' => NULL,
                'code' => 'osh',
            ),
            442 =>
            array(
                'id' => 943,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Barrie',
                'full_name' => NULL,
                'code' => 'bar',
            ),
            443 =>
            array(
                'id' => 944,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Cape Breton',
                'full_name' => NULL,
                'code' => 'cbr',
            ),
            444 =>
            array(
                'id' => 945,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Toronto',
                'full_name' => NULL,
                'code' => 'tor',
            ),
            445 =>
            array(
                'id' => 946,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Fredericton',
                'full_name' => NULL,
                'code' => 'fre',
            ),
            446 =>
            array(
                'id' => 947,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Guelph',
                'full_name' => NULL,
                'code' => 'glp',
            ),
            447 =>
            array(
                'id' => 948,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Halifax',
                'full_name' => NULL,
                'code' => 'hal',
            ),
            448 =>
            array(
                'id' => 949,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Hamilton',
                'full_name' => NULL,
                'code' => 'ham',
            ),
            449 =>
            array(
                'id' => 950,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Whitehorse',
                'full_name' => NULL,
                'code' => 'yxy',
            ),
            450 =>
            array(
                'id' => 951,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Kelowna',
                'full_name' => NULL,
                'code' => 'kwl',
            ),
            451 =>
            array(
                'id' => 952,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Brampton',
                'full_name' => NULL,
                'code' => 'brp',
            ),
            452 =>
            array(
                'id' => 953,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Kingston',
                'full_name' => NULL,
                'code' => 'kgn',
            ),
            453 =>
            array(
                'id' => 954,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Calgary',
                'full_name' => NULL,
                'code' => 'cal',
            ),
            454 =>
            array(
                'id' => 955,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Quebec',
                'full_name' => NULL,
                'code' => 'que',
            ),
            455 =>
            array(
                'id' => 956,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Regina',
                'full_name' => NULL,
                'code' => 'reg',
            ),
            456 =>
            array(
                'id' => 957,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'London',
                'full_name' => NULL,
                'code' => 'lod',
            ),
            457 =>
            array(
                'id' => 958,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Montreal',
                'full_name' => NULL,
                'code' => 'mtr',
            ),
            458 =>
            array(
                'id' => 959,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Sudbury',
                'full_name' => NULL,
                'code' => 'sud',
            ),
            459 =>
            array(
                'id' => 960,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Saskatoon',
                'full_name' => NULL,
                'code' => 'sak',
            ),
            460 =>
            array(
                'id' => 961,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Trois-Rivieres',
                'full_name' => NULL,
                'code' => 'trr',
            ),
            461 =>
            array(
                'id' => 962,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Thunder Bay',
                'full_name' => NULL,
                'code' => 'thu',
            ),
            462 =>
            array(
                'id' => 963,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Sherbrooke',
                'full_name' => NULL,
                'code' => 'sbe',
            ),
            463 =>
            array(
                'id' => 964,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'St. Catharines',
                'full_name' => NULL,
                'code' => 'sca',
            ),
            464 =>
            array(
                'id' => 965,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Saint-John\'s',
                'full_name' => NULL,
                'code' => 'sjb',
            ),
            465 =>
            array(
                'id' => 966,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'vic',
            ),
            466 =>
            array(
                'id' => 967,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Vancouver',
                'full_name' => NULL,
                'code' => 'van',
            ),
            467 =>
            array(
                'id' => 968,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Winnipeg',
                'full_name' => NULL,
                'code' => 'wnp',
            ),
            468 =>
            array(
                'id' => 969,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Windsor',
                'full_name' => NULL,
                'code' => 'wdr',
            ),
            469 =>
            array(
                'id' => 970,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Ottawa',
                'full_name' => NULL,
                'code' => 'ott',
            ),
            470 =>
            array(
                'id' => 971,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Charlottetown',
                'full_name' => NULL,
                'code' => 'cha',
            ),
            471 =>
            array(
                'id' => 972,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Yellowknife',
                'full_name' => NULL,
                'code' => 'yzf',
            ),
            472 =>
            array(
                'id' => 973,
                'country_id' => 166,
                'division_id' => NULL,
                'name' => 'Iqaluit',
                'full_name' => NULL,
                'code' => 'iql',
            ),
            473 =>
            array(
                'id' => 974,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Ashanti',
                'full_name' => NULL,
                'code' => 'as',
            ),
            474 =>
            array(
                'id' => 975,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Obuasi',
                'full_name' => NULL,
                'code' => 'obu',
            ),
            475 =>
            array(
                'id' => 976,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'no',
            ),
            476 =>
            array(
                'id' => 977,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Brong Ahafo',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            477 =>
            array(
                'id' => 978,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Greater Accra',
                'full_name' => NULL,
                'code' => 'ga',
            ),
            478 =>
            array(
                'id' => 979,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'ea',
            ),
            479 =>
            array(
                'id' => 980,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Upper East',
                'full_name' => NULL,
                'code' => 'ue',
            ),
            480 =>
            array(
                'id' => 981,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Upper West',
                'full_name' => NULL,
                'code' => 'uw',
            ),
            481 =>
            array(
                'id' => 982,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Volta',
                'full_name' => NULL,
                'code' => 'vo',
            ),
            482 =>
            array(
                'id' => 983,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'we',
            ),
            483 =>
            array(
                'id' => 984,
                'country_id' => 19,
                'division_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            484 =>
            array(
                'id' => 985,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Ogooue-Lolo',
                'full_name' => NULL,
                'code' => 'ol',
            ),
            485 =>
            array(
                'id' => 986,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Ogooue-Ivindo',
                'full_name' => NULL,
                'code' => 'oi',
            ),
            486 =>
            array(
                'id' => 987,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Ogooue-Maritime',
                'full_name' => NULL,
                'code' => 'om',
            ),
            487 =>
            array(
                'id' => 988,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Ngounie',
                'full_name' => NULL,
                'code' => 'ng',
            ),
            488 =>
            array(
                'id' => 989,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Estuaire',
                'full_name' => NULL,
                'code' => 'es',
            ),
            489 =>
            array(
                'id' => 990,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Nyanga',
                'full_name' => NULL,
                'code' => 'ny',
            ),
            490 =>
            array(
                'id' => 991,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Haut-Ogooue',
                'full_name' => NULL,
                'code' => 'ho',
            ),
            491 =>
            array(
                'id' => 992,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Woleu-Ntem',
                'full_name' => NULL,
                'code' => 'wn',
            ),
            492 =>
            array(
                'id' => 993,
                'country_id' => 18,
                'division_id' => NULL,
                'name' => 'Moyen-Ogooue',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            493 =>
            array(
                'id' => 994,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Otdar Mean Chey',
                'full_name' => NULL,
                'code' => 'oc',
            ),
            494 =>
            array(
                'id' => 995,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Krong Keb',
                'full_name' => NULL,
                'code' => 'kb',
            ),
            495 =>
            array(
                'id' => 996,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Preah Vihear',
                'full_name' => NULL,
                'code' => 'pr',
            ),
            496 =>
            array(
                'id' => 997,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Krong Pailin',
                'full_name' => NULL,
                'code' => 'pl',
            ),
            497 =>
            array(
                'id' => 998,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Banteay Mean Chey',
                'full_name' => NULL,
                'code' => 'bm',
            ),
            498 =>
            array(
                'id' => 999,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kampong Chhnang',
                'full_name' => NULL,
                'code' => 'kzc',
            ),
            499 =>
            array(
                'id' => 1000,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kampong Spoe',
                'full_name' => NULL,
                'code' => 'ko',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 1001,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kampong Thum',
                'full_name' => NULL,
                'code' => 'kzk',
            ),
            1 =>
            array(
                'id' => 1002,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kampong Cham',
                'full_name' => NULL,
                'code' => 'km',
            ),
            2 =>
            array(
                'id' => 1003,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Prey Veng',
                'full_name' => NULL,
                'code' => 'pg',
            ),
            3 =>
            array(
                'id' => 1004,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Takev',
                'full_name' => NULL,
                'code' => 'tk',
            ),
            4 =>
            array(
                'id' => 1005,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Svay Rieng',
                'full_name' => NULL,
                'code' => 'svr',
            ),
            5 =>
            array(
                'id' => 1006,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kandal',
                'full_name' => NULL,
                'code' => 'kl',
            ),
            6 =>
            array(
                'id' => 1007,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kaoh Kong',
                'full_name' => NULL,
                'code' => 'kkz',
            ),
            7 =>
            array(
                'id' => 1008,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kampot',
                'full_name' => NULL,
                'code' => 'kmt',
            ),
            8 =>
            array(
                'id' => 1009,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Phnum Penh',
                'full_name' => NULL,
                'code' => 'pnh',
            ),
            9 =>
            array(
                'id' => 1010,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Kracheh',
                'full_name' => NULL,
                'code' => 'kh',
            ),
            10 =>
            array(
                'id' => 1011,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Rotanak Kiri',
                'full_name' => NULL,
                'code' => 'rbe',
            ),
            11 =>
            array(
                'id' => 1012,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Bat Dambang',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            12 =>
            array(
                'id' => 1013,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Mondol Kiri',
                'full_name' => NULL,
                'code' => 'mwv',
            ),
            13 =>
            array(
                'id' => 1014,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Pouthĭsat',
                'full_name' => NULL,
                'code' => 'po',
            ),
            14 =>
            array(
                'id' => 1015,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Stoeng Treng',
                'full_name' => NULL,
                'code' => 'tnx',
            ),
            15 =>
            array(
                'id' => 1016,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Krong Preah',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            16 =>
            array(
                'id' => 1017,
                'country_id' => 91,
                'division_id' => NULL,
                'name' => 'Siem Reab',
                'full_name' => NULL,
                'code' => 'rep',
            ),
            17 =>
            array(
                'id' => 1018,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Olomoucky',
                'full_name' => NULL,
                'code' => 'ol',
            ),
            18 =>
            array(
                'id' => 1019,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Plzensky',
                'full_name' => NULL,
                'code' => 'pl',
            ),
            19 =>
            array(
                'id' => 1020,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Prague',
                'full_name' => NULL,
                'code' => 'pr',
            ),
            20 =>
            array(
                'id' => 1021,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Kralovehradecky',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            21 =>
            array(
                'id' => 1022,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Karlovarsky',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            22 =>
            array(
                'id' => 1023,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Liberecky',
                'full_name' => NULL,
                'code' => 'li',
            ),
            23 =>
            array(
                'id' => 1024,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Moravskoslezsky',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            24 =>
            array(
                'id' => 1025,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Jihomoravsky',
                'full_name' => NULL,
                'code' => 'jc',
            ),
            25 =>
            array(
                'id' => 1026,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Pardubicky',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            26 =>
            array(
                'id' => 1027,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Vysocina',
                'full_name' => NULL,
                'code' => 'vy',
            ),
            27 =>
            array(
                'id' => 1028,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Ustecky',
                'full_name' => NULL,
                'code' => 'us',
            ),
            28 =>
            array(
                'id' => 1029,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Stredocesky',
                'full_name' => NULL,
                'code' => 'st',
            ),
            29 =>
            array(
                'id' => 1030,
                'country_id' => 136,
                'division_id' => NULL,
                'name' => 'Zlinsky',
                'full_name' => NULL,
                'code' => 'zl',
            ),
            30 =>
            array(
                'id' => 1031,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Matabeleland North',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            31 =>
            array(
                'id' => 1032,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Bulawayo',
                'full_name' => NULL,
                'code' => 'bu',
            ),
            32 =>
            array(
                'id' => 1033,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Mashonaland East',
                'full_name' => NULL,
                'code' => 'me',
            ),
            33 =>
            array(
                'id' => 1034,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Harare',
                'full_name' => NULL,
                'code' => 'ha',
            ),
            34 =>
            array(
                'id' => 1035,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Manicaland',
                'full_name' => NULL,
                'code' => 'ml',
            ),
            35 =>
            array(
                'id' => 1036,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Masvingo',
                'full_name' => NULL,
                'code' => 'mv',
            ),
            36 =>
            array(
                'id' => 1037,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Matabeleland South',
                'full_name' => NULL,
                'code' => 'ms',
            ),
            37 =>
            array(
                'id' => 1038,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Mashonaland West',
                'full_name' => NULL,
                'code' => 'mw',
            ),
            38 =>
            array(
                'id' => 1039,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Midlands',
                'full_name' => NULL,
                'code' => 'md',
            ),
            39 =>
            array(
                'id' => 1040,
                'country_id' => 14,
                'division_id' => NULL,
                'name' => 'Mashonaland Central',
                'full_name' => NULL,
                'code' => 'mc',
            ),
            40 =>
            array(
                'id' => 1041,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Adamaoua',
                'full_name' => NULL,
                'code' => 'ada',
            ),
            41 =>
            array(
                'id' => 1042,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Nord',
                'full_name' => NULL,
                'code' => 'nor',
            ),
            42 =>
            array(
                'id' => 1043,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Extreme-Nord',
                'full_name' => NULL,
                'code' => 'exn',
            ),
            43 =>
            array(
                'id' => 1044,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Littoral',
                'full_name' => NULL,
                'code' => 'lit',
            ),
            44 =>
            array(
                'id' => 1045,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Est',
                'full_name' => NULL,
                'code' => 'est',
            ),
            45 =>
            array(
                'id' => 1046,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Sud',
                'full_name' => NULL,
                'code' => 'sud',
            ),
            46 =>
            array(
                'id' => 1047,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Nord-Oueste',
                'full_name' => NULL,
                'code' => 'not',
            ),
            47 =>
            array(
                'id' => 1048,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Ouest',
                'full_name' => NULL,
                'code' => 'oue',
            ),
            48 =>
            array(
                'id' => 1049,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Sud-Oueste',
                'full_name' => NULL,
                'code' => 'sou',
            ),
            49 =>
            array(
                'id' => 1050,
                'country_id' => 1,
                'division_id' => NULL,
                'name' => 'Centre',
                'full_name' => NULL,
                'code' => 'cen',
            ),
            50 =>
            array(
                'id' => 1051,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Madinat ach Shamal',
                'full_name' => NULL,
                'code' => 'ms',
            ),
            51 =>
            array(
                'id' => 1052,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Ad Dawhah',
                'full_name' => NULL,
                'code' => 'dw',
            ),
            52 =>
            array(
                'id' => 1053,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Al Ghuwariyah',
                'full_name' => NULL,
                'code' => 'gw',
            ),
            53 =>
            array(
                'id' => 1054,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Al Khawr',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            54 =>
            array(
                'id' => 1055,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Jariyan al Batnah',
                'full_name' => NULL,
                'code' => 'jb',
            ),
            55 =>
            array(
                'id' => 1056,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Ar Rayyan',
                'full_name' => NULL,
                'code' => 'rn',
            ),
            56 =>
            array(
                'id' => 1057,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Al Wakrah',
                'full_name' => NULL,
                'code' => 'wk',
            ),
            57 =>
            array(
                'id' => 1058,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Umm Salal',
                'full_name' => NULL,
                'code' => 'ul',
            ),
            58 =>
            array(
                'id' => 1059,
                'country_id' => 96,
                'division_id' => NULL,
                'name' => 'Al Jumaliyah',
                'full_name' => NULL,
                'code' => 'jm',
            ),
            59 =>
            array(
                'id' => 1060,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Agnebi',
                'full_name' => NULL,
                'code' => 'ag',
            ),
            60 =>
            array(
                'id' => 1061,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Bafing',
                'full_name' => NULL,
                'code' => 'bf',
            ),
            61 =>
            array(
                'id' => 1062,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Vallee du Bandama',
                'full_name' => NULL,
                'code' => 'vb',
            ),
            62 =>
            array(
                'id' => 1063,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Denguele',
                'full_name' => NULL,
                'code' => 'de',
            ),
            63 =>
            array(
                'id' => 1064,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Nzi-Comoe',
                'full_name' => NULL,
                'code' => 'nc',
            ),
            64 =>
            array(
                'id' => 1065,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Fromager',
                'full_name' => NULL,
                'code' => 'fr',
            ),
            65 =>
            array(
                'id' => 1066,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Lacs',
                'full_name' => NULL,
                'code' => 'lc',
            ),
            66 =>
            array(
                'id' => 1067,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Marahoue',
                'full_name' => NULL,
                'code' => 'mr',
            ),
            67 =>
            array(
                'id' => 1068,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Sud-Bandama',
                'full_name' => NULL,
                'code' => 'sb',
            ),
            68 =>
            array(
                'id' => 1069,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Sud-Comoe',
                'full_name' => NULL,
                'code' => 'sc',
            ),
            69 =>
            array(
                'id' => 1070,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Haut-Sassandra',
                'full_name' => NULL,
                'code' => 'ht',
            ),
            70 =>
            array(
                'id' => 1071,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Savanes',
                'full_name' => NULL,
                'code' => 'sv',
            ),
            71 =>
            array(
                'id' => 1072,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Montagnes',
                'full_name' => NULL,
                'code' => 'dh',
            ),
            72 =>
            array(
                'id' => 1073,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Worodougou',
                'full_name' => NULL,
                'code' => 'wr',
            ),
            73 =>
            array(
                'id' => 1074,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Bas-Sassandra',
                'full_name' => NULL,
                'code' => 'bs',
            ),
            74 =>
            array(
                'id' => 1075,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Lagunes',
                'full_name' => NULL,
                'code' => 'lg',
            ),
            75 =>
            array(
                'id' => 1076,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Zanzan',
                'full_name' => NULL,
                'code' => 'za',
            ),
            76 =>
            array(
                'id' => 1077,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Moyen-Cavally',
                'full_name' => NULL,
                'code' => 'mv',
            ),
            77 =>
            array(
                'id' => 1078,
                'country_id' => 6,
                'division_id' => NULL,
                'name' => 'Moyen-Comoe',
                'full_name' => NULL,
                'code' => 'mc',
            ),
            78 =>
            array(
                'id' => 1079,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Osjecko-Baranjska',
                'full_name' => NULL,
                'code' => '14',
            ),
            79 =>
            array(
                'id' => 1080,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Bjelovarsko-Bilogorska',
                'full_name' => NULL,
                'code' => '7',
            ),
            80 =>
            array(
                'id' => 1081,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Primorsko-Goranska',
                'full_name' => NULL,
                'code' => '8',
            ),
            81 =>
            array(
                'id' => 1082,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Pozega-Slavonia',
                'full_name' => NULL,
                'code' => '11',
            ),
            82 =>
            array(
                'id' => 1083,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Brodsko-Posavska',
                'full_name' => NULL,
                'code' => '12',
            ),
            83 =>
            array(
                'id' => 1084,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Dubrovacko-Neretvanska',
                'full_name' => NULL,
                'code' => '19',
            ),
            84 =>
            array(
                'id' => 1085,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Karlovacka',
                'full_name' => NULL,
                'code' => '4',
            ),
            85 =>
            array(
                'id' => 1086,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Koprivnicko-Krizevacka',
                'full_name' => NULL,
                'code' => '6',
            ),
            86 =>
            array(
                'id' => 1087,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Krapinsko-Zagorska',
                'full_name' => NULL,
                'code' => '2',
            ),
            87 =>
            array(
                'id' => 1088,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Licko-Senjska',
                'full_name' => NULL,
                'code' => '9',
            ),
            88 =>
            array(
                'id' => 1089,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Medimurska',
                'full_name' => NULL,
                'code' => '20',
            ),
            89 =>
            array(
                'id' => 1090,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Zagrebacka',
                'full_name' => NULL,
                'code' => '1',
            ),
            90 =>
            array(
                'id' => 1091,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Grad Zagreb',
                'full_name' => NULL,
                'code' => '21',
            ),
            91 =>
            array(
                'id' => 1092,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Splitsko-Dalmatinska',
                'full_name' => NULL,
                'code' => '17',
            ),
            92 =>
            array(
                'id' => 1093,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Varazdinska',
                'full_name' => NULL,
                'code' => '5',
            ),
            93 =>
            array(
                'id' => 1094,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Viroviticko-Podravska',
                'full_name' => NULL,
                'code' => '10',
            ),
            94 =>
            array(
                'id' => 1095,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Vukovarsko-Srijemska',
                'full_name' => NULL,
                'code' => '16',
            ),
            95 =>
            array(
                'id' => 1096,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Sibensko-Kninska',
                'full_name' => NULL,
                'code' => '15',
            ),
            96 =>
            array(
                'id' => 1097,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Sisacko-Moslavacka',
                'full_name' => NULL,
                'code' => '3',
            ),
            97 =>
            array(
                'id' => 1098,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Istarska',
                'full_name' => NULL,
                'code' => '18',
            ),
            98 =>
            array(
                'id' => 1099,
                'country_id' => 142,
                'division_id' => NULL,
                'name' => 'Zadarska',
                'full_name' => NULL,
                'code' => '13',
            ),
            99 =>
            array(
                'id' => 1100,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Elgeyo-Marakwet',
                'full_name' => NULL,
                'code' => 'ema',
            ),
            100 =>
            array(
                'id' => 1101,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Baringo',
                'full_name' => NULL,
                'code' => 'bar',
            ),
            101 =>
            array(
                'id' => 1102,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Bungoma',
                'full_name' => NULL,
                'code' => 'bun',
            ),
            102 =>
            array(
                'id' => 1103,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Bomet',
                'full_name' => NULL,
                'code' => 'bom',
            ),
            103 =>
            array(
                'id' => 1104,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Busia',
                'full_name' => NULL,
                'code' => 'bus',
            ),
            104 =>
            array(
                'id' => 1105,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Embu',
                'full_name' => NULL,
                'code' => 'emb',
            ),
            105 =>
            array(
                'id' => 1106,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Homa Bay',
                'full_name' => NULL,
                'code' => 'hob',
            ),
            106 =>
            array(
                'id' => 1107,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kiambu',
                'full_name' => NULL,
                'code' => 'kia',
            ),
            107 =>
            array(
                'id' => 1108,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kilifi',
                'full_name' => NULL,
                'code' => 'kil',
            ),
            108 =>
            array(
                'id' => 1109,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kirinyaga',
                'full_name' => NULL,
                'code' => 'kir',
            ),
            109 =>
            array(
                'id' => 1110,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kisumu',
                'full_name' => NULL,
                'code' => 'kis',
            ),
            110 =>
            array(
                'id' => 1111,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kitui',
                'full_name' => NULL,
                'code' => 'kit',
            ),
            111 =>
            array(
                'id' => 1112,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kisii',
                'full_name' => NULL,
                'code' => 'kii',
            ),
            112 =>
            array(
                'id' => 1113,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Garissa',
                'full_name' => NULL,
                'code' => 'gas',
            ),
            113 =>
            array(
                'id' => 1114,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kakamega',
                'full_name' => NULL,
                'code' => 'kak',
            ),
            114 =>
            array(
                'id' => 1115,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kajiado',
                'full_name' => NULL,
                'code' => 'kaj',
            ),
            115 =>
            array(
                'id' => 1116,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kericho',
                'full_name' => NULL,
                'code' => 'key',
            ),
            116 =>
            array(
                'id' => 1117,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Kwale',
                'full_name' => NULL,
                'code' => 'kwa',
            ),
            117 =>
            array(
                'id' => 1118,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Lamu',
                'full_name' => NULL,
                'code' => 'lau',
            ),
            118 =>
            array(
                'id' => 1119,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Laikipia',
                'full_name' => NULL,
                'code' => 'lai',
            ),
            119 =>
            array(
                'id' => 1120,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Machakos',
                'full_name' => NULL,
                'code' => 'mac',
            ),
            120 =>
            array(
                'id' => 1121,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Makueni',
                'full_name' => NULL,
                'code' => 'mak',
            ),
            121 =>
            array(
                'id' => 1122,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Marsabit',
                'full_name' => NULL,
                'code' => 'rbt',
            ),
            122 =>
            array(
                'id' => 1123,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Mandera',
                'full_name' => NULL,
                'code' => 'man',
            ),
            123 =>
            array(
                'id' => 1124,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Meru',
                'full_name' => NULL,
                'code' => 'mer',
            ),
            124 =>
            array(
                'id' => 1125,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Mombasa',
                'full_name' => NULL,
                'code' => 'mom',
            ),
            125 =>
            array(
                'id' => 1126,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Migori',
                'full_name' => NULL,
                'code' => 'mig',
            ),
            126 =>
            array(
                'id' => 1127,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Muranga',
                'full_name' => NULL,
                'code' => 'mur',
            ),
            127 =>
            array(
                'id' => 1128,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nakuru',
                'full_name' => NULL,
                'code' => 'nuu',
            ),
            128 =>
            array(
                'id' => 1129,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Narok',
                'full_name' => NULL,
                'code' => 'nar',
            ),
            129 =>
            array(
                'id' => 1130,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nandi',
                'full_name' => NULL,
                'code' => 'nan',
            ),
            130 =>
            array(
                'id' => 1131,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nairobi',
                'full_name' => NULL,
                'code' => 'na',
            ),
            131 =>
            array(
                'id' => 1132,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nithi',
                'full_name' => NULL,
                'code' => 'nit',
            ),
            132 =>
            array(
                'id' => 1133,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nyamira',
                'full_name' => NULL,
                'code' => 'nym',
            ),
            133 =>
            array(
                'id' => 1134,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nyandarua',
                'full_name' => NULL,
                'code' => 'nyn',
            ),
            134 =>
            array(
                'id' => 1135,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Nyeri',
                'full_name' => NULL,
                'code' => 'nye',
            ),
            135 =>
            array(
                'id' => 1136,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Samburu',
                'full_name' => NULL,
                'code' => 'uas',
            ),
            136 =>
            array(
                'id' => 1137,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Tana River',
                'full_name' => NULL,
                'code' => 'tri',
            ),
            137 =>
            array(
                'id' => 1138,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Taita-Taveta',
                'full_name' => NULL,
                'code' => 'tta',
            ),
            138 =>
            array(
                'id' => 1139,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Trans-Nzoia',
                'full_name' => NULL,
                'code' => 'tnz',
            ),
            139 =>
            array(
                'id' => 1140,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Turkana',
                'full_name' => NULL,
                'code' => 'tur',
            ),
            140 =>
            array(
                'id' => 1141,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Wajir',
                'full_name' => NULL,
                'code' => 'wjr',
            ),
            141 =>
            array(
                'id' => 1142,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Uasin Gishu',
                'full_name' => NULL,
                'code' => 'ugi',
            ),
            142 =>
            array(
                'id' => 1143,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Vihiga',
                'full_name' => NULL,
                'code' => 'vih',
            ),
            143 =>
            array(
                'id' => 1144,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'West Pokot',
                'full_name' => NULL,
                'code' => 'wpo',
            ),
            144 =>
            array(
                'id' => 1145,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Siaya',
                'full_name' => NULL,
                'code' => 'sia',
            ),
            145 =>
            array(
                'id' => 1146,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Isiolo',
                'full_name' => NULL,
                'code' => 'isi',
            ),
            146 =>
            array(
                'id' => 1147,
                'country_id' => 56,
                'division_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            147 =>
            array(
                'id' => 1148,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Aluksnes',
                'full_name' => NULL,
                'code' => 'alu',
            ),
            148 =>
            array(
                'id' => 1149,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Aizkraukles',
                'full_name' => NULL,
                'code' => 'aiz',
            ),
            149 =>
            array(
                'id' => 1150,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Ogres',
                'full_name' => NULL,
                'code' => 'ogr',
            ),
            150 =>
            array(
                'id' => 1151,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Balvu',
                'full_name' => NULL,
                'code' => 'bal',
            ),
            151 =>
            array(
                'id' => 1152,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Bauskas',
                'full_name' => NULL,
                'code' => 'bau',
            ),
            152 =>
            array(
                'id' => 1153,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Cesu',
                'full_name' => NULL,
                'code' => 'ces',
            ),
            153 =>
            array(
                'id' => 1154,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Dobeles',
                'full_name' => NULL,
                'code' => 'dob',
            ),
            154 =>
            array(
                'id' => 1155,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Gulbenes',
                'full_name' => NULL,
                'code' => 'gul',
            ),
            155 =>
            array(
                'id' => 1156,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Jekabpils',
                'full_name' => NULL,
                'code' => 'jek',
            ),
            156 =>
            array(
                'id' => 1157,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Kraslavas',
                'full_name' => NULL,
                'code' => 'kra',
            ),
            157 =>
            array(
                'id' => 1158,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Kuldigas',
                'full_name' => NULL,
                'code' => 'kul',
            ),
            158 =>
            array(
                'id' => 1159,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Rezeknes',
                'full_name' => NULL,
                'code' => 'rzr',
            ),
            159 =>
            array(
                'id' => 1160,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Rigas',
                'full_name' => NULL,
                'code' => 'rga',
            ),
            160 =>
            array(
                'id' => 1161,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Liepajas',
                'full_name' => NULL,
                'code' => 'lpk',
            ),
            161 =>
            array(
                'id' => 1162,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Limbazu',
                'full_name' => NULL,
                'code' => 'lim',
            ),
            162 =>
            array(
                'id' => 1163,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Ludzas',
                'full_name' => NULL,
                'code' => 'lud',
            ),
            163 =>
            array(
                'id' => 1164,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Madonas',
                'full_name' => NULL,
                'code' => 'mad',
            ),
            164 =>
            array(
                'id' => 1165,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Preilu',
                'full_name' => NULL,
                'code' => 'pre',
            ),
            165 =>
            array(
                'id' => 1166,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Saldus',
                'full_name' => NULL,
                'code' => 'sal',
            ),
            166 =>
            array(
                'id' => 1167,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Talsu',
                'full_name' => NULL,
                'code' => 'tal',
            ),
            167 =>
            array(
                'id' => 1168,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Daugavpils',
                'full_name' => NULL,
                'code' => 'dgr',
            ),
            168 =>
            array(
                'id' => 1169,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Tukuma',
                'full_name' => NULL,
                'code' => 'tuk',
            ),
            169 =>
            array(
                'id' => 1170,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Valkas',
                'full_name' => NULL,
                'code' => 'vlk',
            ),
            170 =>
            array(
                'id' => 1171,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Valmieras',
                'full_name' => NULL,
                'code' => 'vlm',
            ),
            171 =>
            array(
                'id' => 1172,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Ventspils',
                'full_name' => NULL,
                'code' => 'vsl',
            ),
            172 =>
            array(
                'id' => 1173,
                'country_id' => 131,
                'division_id' => NULL,
                'name' => 'Jelgavas',
                'full_name' => NULL,
                'code' => 'jgr',
            ),
            173 =>
            array(
                'id' => 1174,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Berea',
                'full_name' => NULL,
                'code' => 'd',
            ),
            174 =>
            array(
                'id' => 1175,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Butha-Buthe',
                'full_name' => NULL,
                'code' => 'b',
            ),
            175 =>
            array(
                'id' => 1176,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Quthing',
                'full_name' => NULL,
                'code' => 'g',
            ),
            176 =>
            array(
                'id' => 1177,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Qachas Nek',
                'full_name' => NULL,
                'code' => 'h',
            ),
            177 =>
            array(
                'id' => 1178,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Leribe',
                'full_name' => NULL,
                'code' => 'c',
            ),
            178 =>
            array(
                'id' => 1179,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Mafeteng',
                'full_name' => NULL,
                'code' => 'e',
            ),
            179 =>
            array(
                'id' => 1180,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Maseru',
                'full_name' => NULL,
                'code' => 'a',
            ),
            180 =>
            array(
                'id' => 1181,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Mohales Hoek',
                'full_name' => NULL,
                'code' => 'f',
            ),
            181 =>
            array(
                'id' => 1182,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Mokhotlong',
                'full_name' => NULL,
                'code' => 'j',
            ),
            182 =>
            array(
                'id' => 1183,
                'country_id' => 34,
                'division_id' => NULL,
                'name' => 'Thaba-Tseka',
                'full_name' => NULL,
                'code' => 'k',
            ),
            183 =>
            array(
                'id' => 1184,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Attapu',
                'full_name' => NULL,
                'code' => 'at',
            ),
            184 =>
            array(
                'id' => 1185,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Bolikhamxai',
                'full_name' => NULL,
                'code' => 'bl',
            ),
            185 =>
            array(
                'id' => 1186,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Bokeo',
                'full_name' => NULL,
                'code' => 'bk',
            ),
            186 =>
            array(
                'id' => 1187,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Xiangkhoang',
                'full_name' => NULL,
                'code' => 'xi',
            ),
            187 =>
            array(
                'id' => 1188,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Phongsali',
                'full_name' => NULL,
                'code' => 'ph',
            ),
            188 =>
            array(
                'id' => 1189,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Khammouan',
                'full_name' => NULL,
                'code' => 'kh',
            ),
            189 =>
            array(
                'id' => 1190,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Houaphan',
                'full_name' => NULL,
                'code' => 'ho',
            ),
            190 =>
            array(
                'id' => 1191,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Louangphrabang',
                'full_name' => NULL,
                'code' => 'lp',
            ),
            191 =>
            array(
                'id' => 1192,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Louang Namtha',
                'full_name' => NULL,
                'code' => 'lm',
            ),
            192 =>
            array(
                'id' => 1193,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Xaisomboun',
                'full_name' => NULL,
                'code' => 'xn',
            ),
            193 =>
            array(
                'id' => 1194,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Xekong',
                'full_name' => NULL,
                'code' => 'xe',
            ),
            194 =>
            array(
                'id' => 1195,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Saravan',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            195 =>
            array(
                'id' => 1196,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Savannakhet',
                'full_name' => NULL,
                'code' => 'sv',
            ),
            196 =>
            array(
                'id' => 1197,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Xaignabouri',
                'full_name' => NULL,
                'code' => 'xa',
            ),
            197 =>
            array(
                'id' => 1198,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Vientiane',
                'full_name' => NULL,
                'code' => 'vi',
            ),
            198 =>
            array(
                'id' => 1199,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Oudomxai',
                'full_name' => NULL,
                'code' => 'ou',
            ),
            199 =>
            array(
                'id' => 1200,
                'country_id' => 69,
                'division_id' => NULL,
                'name' => 'Champasak',
                'full_name' => NULL,
                'code' => 'ch',
            ),
            200 =>
            array(
                'id' => 1201,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'Ash-Shamal',
                'full_name' => NULL,
                'code' => 'as',
            ),
            201 =>
            array(
                'id' => 1202,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'Al-Biqa',
                'full_name' => NULL,
                'code' => 'bi',
            ),
            202 =>
            array(
                'id' => 1203,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'Bayrut',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            203 =>
            array(
                'id' => 1204,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'Jabal Lubnan',
                'full_name' => NULL,
                'code' => 'jl',
            ),
            204 =>
            array(
                'id' => 1205,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'An-Nabatiyah',
                'full_name' => NULL,
                'code' => 'na',
            ),
            205 =>
            array(
                'id' => 1206,
                'country_id' => 77,
                'division_id' => NULL,
                'name' => 'Al-Janub',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            206 =>
            array(
                'id' => 1207,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Gbarpolu',
                'full_name' => NULL,
                'code' => 'gba',
            ),
            207 =>
            array(
                'id' => 1208,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Bong',
                'full_name' => NULL,
                'code' => 'bg',
            ),
            208 =>
            array(
                'id' => 1209,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Bopolu',
                'full_name' => NULL,
                'code' => 'bop',
            ),
            209 =>
            array(
                'id' => 1210,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Bomi',
                'full_name' => NULL,
                'code' => 'bm',
            ),
            210 =>
            array(
                'id' => 1211,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Grand Bassa',
                'full_name' => NULL,
                'code' => 'gb',
            ),
            211 =>
            array(
                'id' => 1212,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Grand Gedeh',
                'full_name' => NULL,
                'code' => 'gg',
            ),
            212 =>
            array(
                'id' => 1213,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Grand Cape Mount',
                'full_name' => NULL,
                'code' => 'cm',
            ),
            213 =>
            array(
                'id' => 1214,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Grand Kru',
                'full_name' => NULL,
                'code' => 'gk',
            ),
            214 =>
            array(
                'id' => 1215,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Fish Town',
                'full_name' => NULL,
                'code' => 'ft',
            ),
            215 =>
            array(
                'id' => 1216,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'River Gee',
                'full_name' => NULL,
                'code' => 'rg',
            ),
            216 =>
            array(
                'id' => 1217,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'River Cess',
                'full_name' => NULL,
                'code' => 'ri',
            ),
            217 =>
            array(
                'id' => 1218,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Lofa',
                'full_name' => NULL,
                'code' => 'lo',
            ),
            218 =>
            array(
                'id' => 1219,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Margibi',
                'full_name' => NULL,
                'code' => 'mg',
            ),
            219 =>
            array(
                'id' => 1220,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Maryland',
                'full_name' => NULL,
                'code' => 'my',
            ),
            220 =>
            array(
                'id' => 1221,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Montserrado',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            221 =>
            array(
                'id' => 1222,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Nimba',
                'full_name' => NULL,
                'code' => 'ni',
            ),
            222 =>
            array(
                'id' => 1223,
                'country_id' => 37,
                'division_id' => NULL,
                'name' => 'Sinoe',
                'full_name' => NULL,
                'code' => 'si',
            ),
            223 =>
            array(
                'id' => 1224,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Alytus',
                'full_name' => NULL,
                'code' => 'al',
            ),
            224 =>
            array(
                'id' => 1225,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Kaunas',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            225 =>
            array(
                'id' => 1226,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Klaipeda',
                'full_name' => NULL,
                'code' => 'kl',
            ),
            226 =>
            array(
                'id' => 1227,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Marijampole',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            227 =>
            array(
                'id' => 1228,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Panevezys',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            228 =>
            array(
                'id' => 1229,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Taurages',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            229 =>
            array(
                'id' => 1230,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Telsiu',
                'full_name' => NULL,
                'code' => 'te',
            ),
            230 =>
            array(
                'id' => 1231,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Vilnius',
                'full_name' => NULL,
                'code' => 'vi',
            ),
            231 =>
            array(
                'id' => 1232,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Utenos',
                'full_name' => NULL,
                'code' => 'ut',
            ),
            232 =>
            array(
                'id' => 1233,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Siauliai',
                'full_name' => NULL,
                'code' => 'si',
            ),
            233 =>
            array(
                'id' => 1234,
                'country_id' => 132,
                'division_id' => NULL,
                'name' => 'Akmenes',
                'full_name' => NULL,
                'code' => 'akm',
            ),
            234 =>
            array(
                'id' => 1235,
                'country_id' => 152,
                'division_id' => NULL,
                'name' => 'Diekirch',
                'full_name' => NULL,
                'code' => 'dd',
            ),
            235 =>
            array(
                'id' => 1236,
                'country_id' => 152,
                'division_id' => NULL,
                'name' => 'Grevenmacher',
                'full_name' => NULL,
                'code' => 'gg',
            ),
            236 =>
            array(
                'id' => 1237,
                'country_id' => 152,
                'division_id' => NULL,
                'name' => 'Luxembourg',
                'full_name' => NULL,
                'code' => 'll',
            ),
            237 =>
            array(
                'id' => 1238,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Byumba',
                'full_name' => NULL,
                'code' => 'by',
            ),
            238 =>
            array(
                'id' => 1239,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Butare',
                'full_name' => NULL,
                'code' => 'bu',
            ),
            239 =>
            array(
                'id' => 1240,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Nyanza',
                'full_name' => NULL,
                'code' => 'ny',
            ),
            240 =>
            array(
                'id' => 1241,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Kibungo',
                'full_name' => NULL,
                'code' => 'kg',
            ),
            241 =>
            array(
                'id' => 1242,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Kibuye',
                'full_name' => NULL,
                'code' => 'ky',
            ),
            242 =>
            array(
                'id' => 1243,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Kigali-Ngali',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            243 =>
            array(
                'id' => 1244,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Kigali-Ville',
                'full_name' => NULL,
                'code' => 'kv',
            ),
            244 =>
            array(
                'id' => 1245,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Gikongoro',
                'full_name' => NULL,
                'code' => 'gk',
            ),
            245 =>
            array(
                'id' => 1246,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Gisenyi',
                'full_name' => NULL,
                'code' => 'gs',
            ),
            246 =>
            array(
                'id' => 1247,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Gitarama',
                'full_name' => NULL,
                'code' => 'gt',
            ),
            247 =>
            array(
                'id' => 1248,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Kabuga',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            248 =>
            array(
                'id' => 1249,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Rwamagana',
                'full_name' => NULL,
                'code' => 'rw',
            ),
            249 =>
            array(
                'id' => 1250,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Ruhango',
                'full_name' => NULL,
                'code' => 'rh',
            ),
            250 =>
            array(
                'id' => 1251,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Ruhengeri',
                'full_name' => NULL,
                'code' => 'ru',
            ),
            251 =>
            array(
                'id' => 1252,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Cyangugu',
                'full_name' => NULL,
                'code' => 'cy',
            ),
            252 =>
            array(
                'id' => 1253,
                'country_id' => 4,
                'division_id' => NULL,
                'name' => 'Umutara',
                'full_name' => NULL,
                'code' => 'um',
            ),
            253 =>
            array(
                'id' => 1254,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Alba Iulia',
                'full_name' => NULL,
                'code' => 'al',
            ),
            254 =>
            array(
                'id' => 1255,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Arad',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            255 =>
            array(
                'id' => 1256,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Oradea',
                'full_name' => NULL,
                'code' => 'or',
            ),
            256 =>
            array(
                'id' => 1257,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Bacau',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            257 =>
            array(
                'id' => 1258,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Baia Mare',
                'full_name' => NULL,
                'code' => 'bm',
            ),
            258 =>
            array(
                'id' => 1259,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Bistrita',
                'full_name' => NULL,
                'code' => 'bn',
            ),
            259 =>
            array(
                'id' => 1260,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Botosani',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            260 =>
            array(
                'id' => 1261,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Bucuresti',
                'full_name' => NULL,
                'code' => 'bc',
            ),
            261 =>
            array(
                'id' => 1262,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Brasov',
                'full_name' => NULL,
                'code' => 'bs',
            ),
            262 =>
            array(
                'id' => 1263,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Braila',
                'full_name' => NULL,
                'code' => 'bl',
            ),
            263 =>
            array(
                'id' => 1264,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Buzau',
                'full_name' => NULL,
                'code' => 'bz',
            ),
            264 =>
            array(
                'id' => 1265,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Drobeta-Turnu Severin',
                'full_name' => NULL,
                'code' => 'dt',
            ),
            265 =>
            array(
                'id' => 1266,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Deva',
                'full_name' => NULL,
                'code' => 'de',
            ),
            266 =>
            array(
                'id' => 1267,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Timisoara',
                'full_name' => NULL,
                'code' => 'ti',
            ),
            267 =>
            array(
                'id' => 1268,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Focsani',
                'full_name' => NULL,
                'code' => 'fo',
            ),
            268 =>
            array(
                'id' => 1269,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Galati',
                'full_name' => NULL,
                'code' => 'gl',
            ),
            269 =>
            array(
                'id' => 1270,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Giurgiu',
                'full_name' => NULL,
                'code' => 'gg',
            ),
            270 =>
            array(
                'id' => 1271,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Constanta',
                'full_name' => NULL,
                'code' => 'ct',
            ),
            271 =>
            array(
                'id' => 1272,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Craiova',
                'full_name' => NULL,
                'code' => 'do',
            ),
            272 =>
            array(
                'id' => 1273,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Calarasi',
                'full_name' => NULL,
                'code' => 'cr',
            ),
            273 =>
            array(
                'id' => 1274,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Cluj-Napoca',
                'full_name' => NULL,
                'code' => 'cn',
            ),
            274 =>
            array(
                'id' => 1275,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'XRimnicu Vilcea',
                'full_name' => NULL,
                'code' => 'vi',
            ),
            275 =>
            array(
                'id' => 1276,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Resita',
                'full_name' => NULL,
                'code' => 're',
            ),
            276 =>
            array(
                'id' => 1277,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Miercurea-Ciuc',
                'full_name' => NULL,
                'code' => 'mc',
            ),
            277 =>
            array(
                'id' => 1278,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Pitesti',
                'full_name' => NULL,
                'code' => 'pi',
            ),
            278 =>
            array(
                'id' => 1279,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Piatra Neamt',
                'full_name' => NULL,
                'code' => 'pn',
            ),
            279 =>
            array(
                'id' => 1280,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Ploiesti',
                'full_name' => NULL,
                'code' => 'pl',
            ),
            280 =>
            array(
                'id' => 1281,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Satu Mare',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            281 =>
            array(
                'id' => 1282,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Sfantu-Gheorghe',
                'full_name' => NULL,
                'code' => 'sg',
            ),
            282 =>
            array(
                'id' => 1283,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Slatina',
                'full_name' => NULL,
                'code' => 'st',
            ),
            283 =>
            array(
                'id' => 1284,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Slobozia',
                'full_name' => NULL,
                'code' => 'sb',
            ),
            284 =>
            array(
                'id' => 1285,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Suceava',
                'full_name' => NULL,
                'code' => 'su',
            ),
            285 =>
            array(
                'id' => 1286,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Targovişte',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            286 =>
            array(
                'id' => 1287,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Tirgu Mures',
                'full_name' => NULL,
                'code' => 'tm',
            ),
            287 =>
            array(
                'id' => 1288,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Tirgu-Jiu',
                'full_name' => NULL,
                'code' => 'tj',
            ),
            288 =>
            array(
                'id' => 1289,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Tulcea',
                'full_name' => NULL,
                'code' => 'tu',
            ),
            289 =>
            array(
                'id' => 1290,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Vaslui',
                'full_name' => NULL,
                'code' => 'va',
            ),
            290 =>
            array(
                'id' => 1291,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Sibiu',
                'full_name' => NULL,
                'code' => 'so',
            ),
            291 =>
            array(
                'id' => 1292,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Iasi',
                'full_name' => NULL,
                'code' => 'is',
            ),
            292 =>
            array(
                'id' => 1293,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Alexandria',
                'full_name' => NULL,
                'code' => 'ad',
            ),
            293 =>
            array(
                'id' => 1294,
                'country_id' => 126,
                'division_id' => NULL,
                'name' => 'Zalau',
                'full_name' => NULL,
                'code' => 'za',
            ),
            294 =>
            array(
                'id' => 1295,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Antsiranana',
                'full_name' => NULL,
                'code' => 'as',
            ),
            295 =>
            array(
                'id' => 1296,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Fianarantsoa',
                'full_name' => NULL,
                'code' => 'fn',
            ),
            296 =>
            array(
                'id' => 1297,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Mahajanga',
                'full_name' => NULL,
                'code' => 'mj',
            ),
            297 =>
            array(
                'id' => 1298,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Antananarivo',
                'full_name' => NULL,
                'code' => 'an',
            ),
            298 =>
            array(
                'id' => 1299,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Toamasina',
                'full_name' => NULL,
                'code' => 'tm',
            ),
            299 =>
            array(
                'id' => 1300,
                'country_id' => 3,
                'division_id' => NULL,
                'name' => 'Toliary',
                'full_name' => NULL,
                'code' => 'tl',
            ),
            300 =>
            array(
                'id' => 1301,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Addu Atoll',
                'full_name' => NULL,
                'code' => 'add',
            ),
            301 =>
            array(
                'id' => 1302,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Ari Atoll',
                'full_name' => NULL,
                'code' => 'aad',
            ),
            302 =>
            array(
                'id' => 1303,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Thiladhunmathi',
                'full_name' => NULL,
                'code' => 'thd',
            ),
            303 =>
            array(
                'id' => 1304,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Maalhosmadhulu',
                'full_name' => NULL,
                'code' => 'mad',
            ),
            304 =>
            array(
                'id' => 1305,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Miladhunmadhulu',
                'full_name' => NULL,
                'code' => 'mld',
            ),
            305 =>
            array(
                'id' => 1306,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Nilandhe Atoll',
                'full_name' => NULL,
                'code' => 'nad',
            ),
            306 =>
            array(
                'id' => 1307,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'North Huvadhu Atoll',
                'full_name' => NULL,
                'code' => 'had',
            ),
            307 =>
            array(
                'id' => 1308,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Faadhippolhu',
                'full_name' => NULL,
                'code' => 'faa',
            ),
            308 =>
            array(
                'id' => 1309,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Felidhu Atoll',
                'full_name' => NULL,
                'code' => 'fea',
            ),
            309 =>
            array(
                'id' => 1310,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Foammulah',
                'full_name' => NULL,
                'code' => 'fmu',
            ),
            310 =>
            array(
                'id' => 1311,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Hadhdhunmathi',
                'full_name' => NULL,
                'code' => 'hdh',
            ),
            311 =>
            array(
                'id' => 1312,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Kolhumadulu',
                'full_name' => NULL,
                'code' => 'klh',
            ),
            312 =>
            array(
                'id' => 1313,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Male',
                'full_name' => NULL,
                'code' => 'mal',
            ),
            313 =>
            array(
                'id' => 1314,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Male Atoll',
                'full_name' => NULL,
                'code' => 'maa',
            ),
            314 =>
            array(
                'id' => 1315,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'Mulakatholhu',
                'full_name' => NULL,
                'code' => 'mua',
            ),
            315 =>
            array(
                'id' => 1316,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Ari Atoll',
                'full_name' => NULL,
                'code' => 'aau',
            ),
            316 =>
            array(
                'id' => 1317,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Thiladhunmathi',
                'full_name' => NULL,
                'code' => 'thu',
            ),
            317 =>
            array(
                'id' => 1318,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Maalhosmadulu',
                'full_name' => NULL,
                'code' => 'mau',
            ),
            318 =>
            array(
                'id' => 1319,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Miladhunmadhulu',
                'full_name' => NULL,
                'code' => 'mlu',
            ),
            319 =>
            array(
                'id' => 1320,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Nilandhe Atoll',
                'full_name' => NULL,
                'code' => 'nau',
            ),
            320 =>
            array(
                'id' => 1321,
                'country_id' => 80,
                'division_id' => NULL,
                'name' => 'South Huvadhu Atoll',
                'full_name' => NULL,
                'code' => 'hau',
            ),
            321 =>
            array(
                'id' => 1322,
                'country_id' => 47,
                'division_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'n',
            ),
            322 =>
            array(
                'id' => 1323,
                'country_id' => 47,
                'division_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 's',
            ),
            323 =>
            array(
                'id' => 1324,
                'country_id' => 47,
                'division_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'c',
            ),
            324 =>
            array(
                'id' => 1325,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Bamako',
                'full_name' => NULL,
                'code' => 'cd',
            ),
            325 =>
            array(
                'id' => 1326,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Kidal',
                'full_name' => NULL,
                'code' => 'kd',
            ),
            326 =>
            array(
                'id' => 1327,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Gao',
                'full_name' => NULL,
                'code' => 'ga',
            ),
            327 =>
            array(
                'id' => 1328,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Kayes',
                'full_name' => NULL,
                'code' => 'ky',
            ),
            328 =>
            array(
                'id' => 1329,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Koulikoro',
                'full_name' => NULL,
                'code' => 'kl',
            ),
            329 =>
            array(
                'id' => 1330,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Mopti',
                'full_name' => NULL,
                'code' => 'mp',
            ),
            330 =>
            array(
                'id' => 1331,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Segou',
                'full_name' => NULL,
                'code' => 'sg',
            ),
            331 =>
            array(
                'id' => 1332,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Tombouctou',
                'full_name' => NULL,
                'code' => 'tb',
            ),
            332 =>
            array(
                'id' => 1333,
                'country_id' => 21,
                'division_id' => NULL,
                'name' => 'Sikasso',
                'full_name' => NULL,
                'code' => 'sk',
            ),
            333 =>
            array(
                'id' => 1334,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Adrar',
                'full_name' => NULL,
                'code' => 'ad',
            ),
            334 =>
            array(
                'id' => 1335,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'El-Acaba',
                'full_name' => NULL,
                'code' => 'as',
            ),
            335 =>
            array(
                'id' => 1336,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Brakna',
                'full_name' => NULL,
                'code' => 'br',
            ),
            336 =>
            array(
                'id' => 1337,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Hodh el-Gharbi',
                'full_name' => NULL,
                'code' => 'hg',
            ),
            337 =>
            array(
                'id' => 1338,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Gorgol',
                'full_name' => NULL,
                'code' => 'go',
            ),
            338 =>
            array(
                'id' => 1339,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Guidimaka',
                'full_name' => NULL,
                'code' => 'gm',
            ),
            339 =>
            array(
                'id' => 1340,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Dakhlet Nouadhibou',
                'full_name' => NULL,
                'code' => 'dn',
            ),
            340 =>
            array(
                'id' => 1341,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Nouakchott',
                'full_name' => NULL,
                'code' => 'no',
            ),
            341 =>
            array(
                'id' => 1342,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Tagant',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            342 =>
            array(
                'id' => 1343,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Trarza',
                'full_name' => NULL,
                'code' => 'tr',
            ),
            343 =>
            array(
                'id' => 1344,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Tiris Zemmour',
                'full_name' => NULL,
                'code' => 'tz',
            ),
            344 =>
            array(
                'id' => 1345,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Hodh ech-Chargui',
                'full_name' => NULL,
                'code' => 'hc',
            ),
            345 =>
            array(
                'id' => 1346,
                'country_id' => 23,
                'division_id' => NULL,
                'name' => 'Inchiri',
                'full_name' => NULL,
                'code' => 'in',
            ),
            346 =>
            array(
                'id' => 1347,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Bayanhongor',
                'full_name' => NULL,
                'code' => '69',
            ),
            347 =>
            array(
                'id' => 1348,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Bayan-Ulgiy',
                'full_name' => NULL,
                'code' => '71',
            ),
            348 =>
            array(
                'id' => 1349,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Bulgan',
                'full_name' => NULL,
                'code' => '67',
            ),
            349 =>
            array(
                'id' => 1350,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Darhan-Uul',
                'full_name' => NULL,
                'code' => '37',
            ),
            350 =>
            array(
                'id' => 1351,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Dornod',
                'full_name' => NULL,
                'code' => '61',
            ),
            351 =>
            array(
                'id' => 1352,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Dornogovi',
                'full_name' => NULL,
                'code' => '63',
            ),
            352 =>
            array(
                'id' => 1353,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Orhon',
                'full_name' => NULL,
                'code' => '35',
            ),
            353 =>
            array(
                'id' => 1354,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Govi-Altay',
                'full_name' => NULL,
                'code' => '65',
            ),
            354 =>
            array(
                'id' => 1355,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Govisumber',
                'full_name' => NULL,
                'code' => '64',
            ),
            355 =>
            array(
                'id' => 1356,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Arhangay',
                'full_name' => NULL,
                'code' => '73',
            ),
            356 =>
            array(
                'id' => 1357,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Hovd',
                'full_name' => NULL,
                'code' => '43',
            ),
            357 =>
            array(
                'id' => 1358,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Hentiy',
                'full_name' => NULL,
                'code' => '39',
            ),
            358 =>
            array(
                'id' => 1359,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Hovsgol',
                'full_name' => NULL,
                'code' => '41',
            ),
            359 =>
            array(
                'id' => 1360,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Umnogovi',
                'full_name' => NULL,
                'code' => 'umn',
            ),
            360 =>
            array(
                'id' => 1361,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Uvorhangay',
                'full_name' => NULL,
                'code' => 'uvo',
            ),
            361 =>
            array(
                'id' => 1362,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Selenge',
                'full_name' => NULL,
                'code' => '49',
            ),
            362 =>
            array(
                'id' => 1363,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Suhbaatar',
                'full_name' => NULL,
                'code' => '51',
            ),
            363 =>
            array(
                'id' => 1364,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Uvs',
                'full_name' => NULL,
                'code' => '46',
            ),
            364 =>
            array(
                'id' => 1365,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Ulaanbaatar hot',
                'full_name' => NULL,
                'code' => '1',
            ),
            365 =>
            array(
                'id' => 1366,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Dzavhan',
                'full_name' => NULL,
                'code' => '57',
            ),
            366 =>
            array(
                'id' => 1367,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Dundgovi',
                'full_name' => NULL,
                'code' => '59',
            ),
            367 =>
            array(
                'id' => 1368,
                'country_id' => 83,
                'division_id' => NULL,
                'name' => 'Tov',
                'full_name' => NULL,
                'code' => '47',
            ),
            368 =>
            array(
                'id' => 1369,
                'country_id' => 93,
                'division_id' => NULL,
                'name' => 'Dhaka',
                'full_name' => NULL,
                'code' => 'dac',
            ),
            369 =>
            array(
                'id' => 1370,
                'country_id' => 93,
                'division_id' => NULL,
                'name' => 'Chittagong',
                'full_name' => NULL,
                'code' => 'cgp',
            ),
            370 =>
            array(
                'id' => 1371,
                'country_id' => 93,
                'division_id' => NULL,
                'name' => 'Khulna',
                'full_name' => NULL,
                'code' => 'khl',
            ),
            371 =>
            array(
                'id' => 1372,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Arequipa',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            372 =>
            array(
                'id' => 1373,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Apurimac',
                'full_name' => NULL,
                'code' => 'ap',
            ),
            373 =>
            array(
                'id' => 1374,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Ayacucho',
                'full_name' => NULL,
                'code' => 'ay',
            ),
            374 =>
            array(
                'id' => 1375,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Ancash',
                'full_name' => NULL,
                'code' => 'an',
            ),
            375 =>
            array(
                'id' => 1376,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Juliaca',
                'full_name' => NULL,
                'code' => 'jul',
            ),
            376 =>
            array(
                'id' => 1377,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Junin',
                'full_name' => NULL,
                'code' => 'ju',
            ),
            377 =>
            array(
                'id' => 1378,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Cajamarca',
                'full_name' => NULL,
                'code' => 'cj',
            ),
            378 =>
            array(
                'id' => 1379,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Callao',
                'full_name' => NULL,
                'code' => 'cl',
            ),
            379 =>
            array(
                'id' => 1380,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Cusco',
                'full_name' => NULL,
                'code' => 'cu',
            ),
            380 =>
            array(
                'id' => 1381,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'La Libertad',
                'full_name' => NULL,
                'code' => 'ld',
            ),
            381 =>
            array(
                'id' => 1382,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Lambayeque',
                'full_name' => NULL,
                'code' => 'ly',
            ),
            382 =>
            array(
                'id' => 1383,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Lima',
                'full_name' => NULL,
                'code' => 'li',
            ),
            383 =>
            array(
                'id' => 1384,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Loreto',
                'full_name' => NULL,
                'code' => 'lo',
            ),
            384 =>
            array(
                'id' => 1385,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Madre de Dios',
                'full_name' => NULL,
                'code' => 'md',
            ),
            385 =>
            array(
                'id' => 1386,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Moquegua',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            386 =>
            array(
                'id' => 1387,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Pasco',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            387 =>
            array(
                'id' => 1388,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Piura',
                'full_name' => NULL,
                'code' => 'pi',
            ),
            388 =>
            array(
                'id' => 1389,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Puno',
                'full_name' => NULL,
                'code' => 'pu',
            ),
            389 =>
            array(
                'id' => 1390,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Chimbote',
                'full_name' => NULL,
                'code' => 'chm',
            ),
            390 =>
            array(
                'id' => 1391,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Chincha Alta',
                'full_name' => NULL,
                'code' => 'chi',
            ),
            391 =>
            array(
                'id' => 1392,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'San Martin',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            392 =>
            array(
                'id' => 1393,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Sullana',
                'full_name' => NULL,
                'code' => 'sul',
            ),
            393 =>
            array(
                'id' => 1394,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Tacna',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            394 =>
            array(
                'id' => 1395,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Tumbes',
                'full_name' => NULL,
                'code' => 'tu',
            ),
            395 =>
            array(
                'id' => 1396,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Huanuco',
                'full_name' => NULL,
                'code' => 'ho',
            ),
            396 =>
            array(
                'id' => 1397,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Huancavelica',
                'full_name' => NULL,
                'code' => 'hv',
            ),
            397 =>
            array(
                'id' => 1398,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Ucayali',
                'full_name' => NULL,
                'code' => 'uc',
            ),
            398 =>
            array(
                'id' => 1399,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'am',
            ),
            399 =>
            array(
                'id' => 1400,
                'country_id' => 190,
                'division_id' => NULL,
                'name' => 'Ica',
                'full_name' => NULL,
                'code' => 'ic',
            ),
            400 =>
            array(
                'id' => 1401,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Bago',
                'full_name' => NULL,
                'code' => 'bg',
            ),
            401 =>
            array(
                'id' => 1402,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Shan',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            402 =>
            array(
                'id' => 1403,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Tanintharyi',
                'full_name' => NULL,
                'code' => 'tn',
            ),
            403 =>
            array(
                'id' => 1404,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Kayin',
                'full_name' => NULL,
                'code' => 'kn',
            ),
            404 =>
            array(
                'id' => 1405,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Kachin',
                'full_name' => NULL,
                'code' => 'kc',
            ),
            405 =>
            array(
                'id' => 1406,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Kayah',
                'full_name' => NULL,
                'code' => 'kh',
            ),
            406 =>
            array(
                'id' => 1407,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Magway',
                'full_name' => NULL,
                'code' => 'mg',
            ),
            407 =>
            array(
                'id' => 1408,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Mandalay',
                'full_name' => NULL,
                'code' => 'md',
            ),
            408 =>
            array(
                'id' => 1409,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Mon',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            409 =>
            array(
                'id' => 1410,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Chin',
                'full_name' => NULL,
                'code' => 'ch',
            ),
            410 =>
            array(
                'id' => 1411,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Rakhine',
                'full_name' => NULL,
                'code' => 'rk',
            ),
            411 =>
            array(
                'id' => 1412,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Sagaing',
                'full_name' => NULL,
                'code' => 'sg',
            ),
            412 =>
            array(
                'id' => 1413,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Yangon',
                'full_name' => NULL,
                'code' => 'yg',
            ),
            413 =>
            array(
                'id' => 1414,
                'country_id' => 86,
                'division_id' => NULL,
                'name' => 'Ayeyarwady',
                'full_name' => NULL,
                'code' => 'ay',
            ),
            414 =>
            array(
                'id' => 1415,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Tangier',
                'full_name' => NULL,
                'code' => 'tgr',
            ),
            415 =>
            array(
                'id' => 1416,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Tetouan',
                'full_name' => NULL,
                'code' => 'tet',
            ),
            416 =>
            array(
                'id' => 1417,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Fes',
                'full_name' => NULL,
                'code' => 'fes',
            ),
            417 =>
            array(
                'id' => 1418,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Casablanca',
                'full_name' => NULL,
                'code' => 'cbl',
            ),
            418 =>
            array(
                'id' => 1419,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Rabat',
                'full_name' => NULL,
                'code' => 'rsa',
            ),
            419 =>
            array(
                'id' => 1420,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Marrakech',
                'full_name' => NULL,
                'code' => 'mrk',
            ),
            420 =>
            array(
                'id' => 1421,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Meknes',
                'full_name' => NULL,
                'code' => 'mkn',
            ),
            421 =>
            array(
                'id' => 1422,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Oujda',
                'full_name' => NULL,
                'code' => 'ouj',
            ),
            422 =>
            array(
                'id' => 1423,
                'country_id' => 46,
                'division_id' => NULL,
                'name' => 'Western Sahara',
                'full_name' => NULL,
                'code' => 'wsh',
            ),
            423 =>
            array(
                'id' => 1424,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Aguascalientes',
                'full_name' => NULL,
                'code' => 'agu',
            ),
            424 =>
            array(
                'id' => 1425,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Acapulco',
                'full_name' => NULL,
                'code' => 'aca',
            ),
            425 =>
            array(
                'id' => 1426,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Hermosillo',
                'full_name' => NULL,
                'code' => 'hmo',
            ),
            426 =>
            array(
                'id' => 1427,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Campeche',
                'full_name' => NULL,
                'code' => 'cam',
            ),
            427 =>
            array(
                'id' => 1428,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Obregon',
                'full_name' => NULL,
                'code' => 'obr',
            ),
            428 =>
            array(
                'id' => 1429,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Orizaba',
                'full_name' => NULL,
                'code' => 'ori',
            ),
            429 =>
            array(
                'id' => 1430,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Valles',
                'full_name' => NULL,
                'code' => 'vhm',
            ),
            430 =>
            array(
                'id' => 1431,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Puerto Vallarta',
                'full_name' => NULL,
                'code' => 'pvr',
            ),
            431 =>
            array(
                'id' => 1432,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Villahermosa',
                'full_name' => NULL,
                'code' => 'vsa',
            ),
            432 =>
            array(
                'id' => 1433,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Poza Rica de Hidalgo',
                'full_name' => NULL,
                'code' => 'prh',
            ),
            433 =>
            array(
                'id' => 1434,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tijuana',
                'full_name' => NULL,
                'code' => 'tij',
            ),
            434 =>
            array(
                'id' => 1435,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Durango',
                'full_name' => NULL,
                'code' => 'dur',
            ),
            435 =>
            array(
                'id' => 1436,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Ensenada',
                'full_name' => NULL,
                'code' => 'ese',
            ),
            436 =>
            array(
                'id' => 1437,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Guadalajara',
                'full_name' => NULL,
                'code' => 'gdl',
            ),
            437 =>
            array(
                'id' => 1438,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Guanajuato',
                'full_name' => NULL,
                'code' => 'gua',
            ),
            438 =>
            array(
                'id' => 1439,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Jalapa',
                'full_name' => NULL,
                'code' => 'jal',
            ),
            439 =>
            array(
                'id' => 1440,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Juarez',
                'full_name' => NULL,
                'code' => 'juz',
            ),
            440 =>
            array(
                'id' => 1441,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Benito Juare',
                'full_name' => NULL,
                'code' => 'bju',
            ),
            441 =>
            array(
                'id' => 1442,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Carmen',
                'full_name' => NULL,
                'code' => 'car',
            ),
            442 =>
            array(
                'id' => 1443,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Colima',
                'full_name' => NULL,
                'code' => 'col',
            ),
            443 =>
            array(
                'id' => 1444,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Queretaro',
                'full_name' => NULL,
                'code' => 'que',
            ),
            444 =>
            array(
                'id' => 1445,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Cuernavaca',
                'full_name' => NULL,
                'code' => 'cvc',
            ),
            445 =>
            array(
                'id' => 1446,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Culiacan',
                'full_name' => NULL,
                'code' => 'cul',
            ),
            446 =>
            array(
                'id' => 1447,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Coatzacoalcos',
                'full_name' => NULL,
                'code' => 'coa',
            ),
            447 =>
            array(
                'id' => 1448,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'lap',
            ),
            448 =>
            array(
                'id' => 1449,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'len',
            ),
            449 =>
            array(
                'id' => 1450,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Reynosa',
                'full_name' => NULL,
                'code' => 'rex',
            ),
            450 =>
            array(
                'id' => 1451,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Los Mochis',
                'full_name' => NULL,
                'code' => 'lmm',
            ),
            451 =>
            array(
                'id' => 1452,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Mazatlan',
                'full_name' => NULL,
                'code' => 'mzt',
            ),
            452 =>
            array(
                'id' => 1453,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Matamoros',
                'full_name' => NULL,
                'code' => 'mam',
            ),
            453 =>
            array(
                'id' => 1454,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Merida',
                'full_name' => NULL,
                'code' => 'mid',
            ),
            454 =>
            array(
                'id' => 1455,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Monclova',
                'full_name' => NULL,
                'code' => 'lov',
            ),
            455 =>
            array(
                'id' => 1456,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Monterrey',
                'full_name' => NULL,
                'code' => 'mty',
            ),
            456 =>
            array(
                'id' => 1457,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Morelia',
                'full_name' => NULL,
                'code' => 'mlm',
            ),
            457 =>
            array(
                'id' => 1458,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Mexico City',
                'full_name' => NULL,
                'code' => 'mex',
            ),
            458 =>
            array(
                'id' => 1459,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Mexicali',
                'full_name' => NULL,
                'code' => 'mxl',
            ),
            459 =>
            array(
                'id' => 1460,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Nogales',
                'full_name' => NULL,
                'code' => 'nog',
            ),
            460 =>
            array(
                'id' => 1461,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Pachuca',
                'full_name' => NULL,
                'code' => 'pac',
            ),
            461 =>
            array(
                'id' => 1462,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Puebla',
                'full_name' => NULL,
                'code' => 'pue',
            ),
            462 =>
            array(
                'id' => 1463,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Chilpancingo',
                'full_name' => NULL,
                'code' => 'chi',
            ),
            463 =>
            array(
                'id' => 1464,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Chihuahua',
                'full_name' => NULL,
                'code' => 'chh',
            ),
            464 =>
            array(
                'id' => 1465,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Cheturnal',
                'full_name' => NULL,
                'code' => 'ctm',
            ),
            465 =>
            array(
                'id' => 1466,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Saltillo',
                'full_name' => NULL,
                'code' => 'slw',
            ),
            466 =>
            array(
                'id' => 1467,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Zacatecas',
                'full_name' => NULL,
                'code' => 'zac',
            ),
            467 =>
            array(
                'id' => 1468,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Celaya',
                'full_name' => NULL,
                'code' => 'cly',
            ),
            468 =>
            array(
                'id' => 1469,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'San Luis Potosi',
                'full_name' => NULL,
                'code' => 'slp',
            ),
            469 =>
            array(
                'id' => 1470,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tapachula',
                'full_name' => NULL,
                'code' => 'tap',
            ),
            470 =>
            array(
                'id' => 1471,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tampico',
                'full_name' => NULL,
                'code' => 'tam',
            ),
            471 =>
            array(
                'id' => 1472,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tlaxcala',
                'full_name' => NULL,
                'code' => 'tla',
            ),
            472 =>
            array(
                'id' => 1473,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tepic',
                'full_name' => NULL,
                'code' => 'tpq',
            ),
            473 =>
            array(
                'id' => 1474,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tehuacan',
                'full_name' => NULL,
                'code' => 'tcn',
            ),
            474 =>
            array(
                'id' => 1475,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Tuxtla Gutierrez',
                'full_name' => NULL,
                'code' => 'tgz',
            ),
            475 =>
            array(
                'id' => 1476,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Torreon',
                'full_name' => NULL,
                'code' => 'trc',
            ),
            476 =>
            array(
                'id' => 1477,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Toluca',
                'full_name' => NULL,
                'code' => 'tlc',
            ),
            477 =>
            array(
                'id' => 1478,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Oaxaca',
                'full_name' => NULL,
                'code' => 'oax',
            ),
            478 =>
            array(
                'id' => 1479,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'vic',
            ),
            479 =>
            array(
                'id' => 1480,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Veracruz',
                'full_name' => NULL,
                'code' => 'ver',
            ),
            480 =>
            array(
                'id' => 1481,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Uruapan',
                'full_name' => NULL,
                'code' => 'upn',
            ),
            481 =>
            array(
                'id' => 1482,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Nuevo Laredo',
                'full_name' => NULL,
                'code' => 'nle',
            ),
            482 =>
            array(
                'id' => 1483,
                'country_id' => 106,
                'division_id' => NULL,
                'name' => 'Irapuato',
                'full_name' => NULL,
                'code' => 'irp',
            ),
            483 =>
            array(
                'id' => 1484,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Erongo',
                'full_name' => NULL,
                'code' => 'er',
            ),
            484 =>
            array(
                'id' => 1485,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Ohangwena',
                'full_name' => NULL,
                'code' => 'ow',
            ),
            485 =>
            array(
                'id' => 1486,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Okavango',
                'full_name' => NULL,
                'code' => 'kv',
            ),
            486 =>
            array(
                'id' => 1487,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Omaheke',
                'full_name' => NULL,
                'code' => 'ok',
            ),
            487 =>
            array(
                'id' => 1488,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Omusati',
                'full_name' => NULL,
                'code' => 'ot',
            ),
            488 =>
            array(
                'id' => 1489,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Otjozondjupa',
                'full_name' => NULL,
                'code' => 'oj',
            ),
            489 =>
            array(
                'id' => 1490,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Oshana',
                'full_name' => NULL,
                'code' => 'on',
            ),
            490 =>
            array(
                'id' => 1491,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Oshikoto',
                'full_name' => NULL,
                'code' => 'oo',
            ),
            491 =>
            array(
                'id' => 1492,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Hardap',
                'full_name' => NULL,
                'code' => 'ha',
            ),
            492 =>
            array(
                'id' => 1493,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Khomas',
                'full_name' => NULL,
                'code' => 'kh',
            ),
            493 =>
            array(
                'id' => 1494,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Karas',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            494 =>
            array(
                'id' => 1495,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Caprivi',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            495 =>
            array(
                'id' => 1496,
                'country_id' => 43,
                'division_id' => NULL,
                'name' => 'Kunene',
                'full_name' => NULL,
                'code' => 'ku',
            ),
            496 =>
            array(
                'id' => 1497,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Upington',
                'full_name' => NULL,
                'code' => 'utn',
            ),
            497 =>
            array(
                'id' => 1498,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Mount Ayliff',
                'full_name' => NULL,
                'code' => 'may',
            ),
            498 =>
            array(
                'id' => 1499,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Pietermaritzburg',
                'full_name' => NULL,
                'code' => 'pzb',
            ),
            499 =>
            array(
                'id' => 1500,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Pietersburg',
                'full_name' => NULL,
                'code' => 'ptg',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 1501,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Pretoria',
                'full_name' => NULL,
                'code' => 'pry',
            ),
            1 =>
            array(
                'id' => 1502,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Bisho',
                'full_name' => NULL,
                'code' => 'biy',
            ),
            2 =>
            array(
                'id' => 1503,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Bredasdorp',
                'full_name' => NULL,
                'code' => 'bdd',
            ),
            3 =>
            array(
                'id' => 1504,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Bloemfontein',
                'full_name' => NULL,
                'code' => 'bfn',
            ),
            4 =>
            array(
                'id' => 1505,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Bronkhorstspruit',
                'full_name' => NULL,
                'code' => 'bht',
            ),
            5 =>
            array(
                'id' => 1506,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'De Aar',
                'full_name' => NULL,
                'code' => 'daa',
            ),
            6 =>
            array(
                'id' => 1507,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Durban',
                'full_name' => NULL,
                'code' => 'dur',
            ),
            7 =>
            array(
                'id' => 1508,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Dundee',
                'full_name' => NULL,
                'code' => 'dun',
            ),
            8 =>
            array(
                'id' => 1509,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Barkley East',
                'full_name' => NULL,
                'code' => 'bae',
            ),
            9 =>
            array(
                'id' => 1510,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'East London',
                'full_name' => NULL,
                'code' => 'els',
            ),
            10 =>
            array(
                'id' => 1511,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Vryburg',
                'full_name' => NULL,
                'code' => 'vru',
            ),
            11 =>
            array(
                'id' => 1512,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Vereeniging',
                'full_name' => NULL,
                'code' => 'vgg',
            ),
            12 =>
            array(
                'id' => 1513,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Groblersdal',
                'full_name' => NULL,
                'code' => 'gbd',
            ),
            13 =>
            array(
                'id' => 1514,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Giyani',
                'full_name' => NULL,
                'code' => 'giy',
            ),
            14 =>
            array(
                'id' => 1515,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Kimberley',
                'full_name' => NULL,
                'code' => 'kim',
            ),
            15 =>
            array(
                'id' => 1516,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Cape Town',
                'full_name' => NULL,
                'code' => 'cpt',
            ),
            16 =>
            array(
                'id' => 1517,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Klerksdorp',
                'full_name' => NULL,
                'code' => 'kxe',
            ),
            17 =>
            array(
                'id' => 1518,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Kuruman',
                'full_name' => NULL,
                'code' => 'kmh',
            ),
            18 =>
            array(
                'id' => 1519,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Queenstown',
                'full_name' => NULL,
                'code' => 'utw',
            ),
            19 =>
            array(
                'id' => 1520,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Ladysmith',
                'full_name' => NULL,
                'code' => 'lay',
            ),
            20 =>
            array(
                'id' => 1521,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Randfontein',
                'full_name' => NULL,
                'code' => 'rft',
            ),
            21 =>
            array(
                'id' => 1522,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Richards Bay',
                'full_name' => NULL,
                'code' => 'rcb',
            ),
            22 =>
            array(
                'id' => 1523,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Rustenburg',
                'full_name' => NULL,
                'code' => 'rsb',
            ),
            23 =>
            array(
                'id' => 1524,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Middelburg',
                'full_name' => NULL,
                'code' => 'mdb',
            ),
            24 =>
            array(
                'id' => 1525,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Mkuze',
                'full_name' => NULL,
                'code' => 'mzq',
            ),
            25 =>
            array(
                'id' => 1526,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Moorreesburg',
                'full_name' => NULL,
                'code' => 'moo',
            ),
            26 =>
            array(
                'id' => 1527,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Nelspruit',
                'full_name' => NULL,
                'code' => 'nlp',
            ),
            27 =>
            array(
                'id' => 1528,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Nylstroom',
                'full_name' => NULL,
                'code' => 'nyl',
            ),
            28 =>
            array(
                'id' => 1529,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Newcastle',
                'full_name' => NULL,
                'code' => 'ncs',
            ),
            29 =>
            array(
                'id' => 1530,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'George',
                'full_name' => NULL,
                'code' => 'grj',
            ),
            30 =>
            array(
                'id' => 1531,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Sasolburg',
                'full_name' => NULL,
                'code' => 'sas',
            ),
            31 =>
            array(
                'id' => 1532,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Secunda',
                'full_name' => NULL,
                'code' => 'zec',
            ),
            32 =>
            array(
                'id' => 1533,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Ixopo',
                'full_name' => NULL,
                'code' => 'ixo',
            ),
            33 =>
            array(
                'id' => 1534,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Trompsburg',
                'full_name' => NULL,
                'code' => 'tpb',
            ),
            34 =>
            array(
                'id' => 1535,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Springbok',
                'full_name' => NULL,
                'code' => 'sbu',
            ),
            35 =>
            array(
                'id' => 1536,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Thulamahashe',
                'full_name' => NULL,
                'code' => 'tlh',
            ),
            36 =>
            array(
                'id' => 1537,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Thohoyandou',
                'full_name' => NULL,
                'code' => 'thy',
            ),
            37 =>
            array(
                'id' => 1538,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Witsieshoek',
                'full_name' => NULL,
                'code' => 'wsh',
            ),
            38 =>
            array(
                'id' => 1539,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Welkom',
                'full_name' => NULL,
                'code' => 'wel',
            ),
            39 =>
            array(
                'id' => 1540,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Ulundi',
                'full_name' => NULL,
                'code' => 'uld',
            ),
            40 =>
            array(
                'id' => 1541,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Umtata',
                'full_name' => NULL,
                'code' => 'utt',
            ),
            41 =>
            array(
                'id' => 1542,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Worcester',
                'full_name' => NULL,
                'code' => 'wor',
            ),
            42 =>
            array(
                'id' => 1543,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Beaufort West',
                'full_name' => NULL,
                'code' => 'bew',
            ),
            43 =>
            array(
                'id' => 1544,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Port Shepstone',
                'full_name' => NULL,
                'code' => 'pss',
            ),
            44 =>
            array(
                'id' => 1545,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Port Elizabeth',
                'full_name' => NULL,
                'code' => 'plz',
            ),
            45 =>
            array(
                'id' => 1546,
                'country_id' => 36,
                'division_id' => NULL,
                'name' => 'Johannesburg',
                'full_name' => NULL,
                'code' => 'jnb',
            ),
            46 =>
            array(
                'id' => 1547,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Bagmati',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            47 =>
            array(
                'id' => 1548,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Dhawalagiri',
                'full_name' => NULL,
                'code' => 'dh',
            ),
            48 =>
            array(
                'id' => 1549,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Gandaki',
                'full_name' => NULL,
                'code' => 'ga',
            ),
            49 =>
            array(
                'id' => 1550,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Kosi',
                'full_name' => NULL,
                'code' => 'ko',
            ),
            50 =>
            array(
                'id' => 1551,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Karnali',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            51 =>
            array(
                'id' => 1552,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Janakpur',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            52 =>
            array(
                'id' => 1553,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Rapti',
                'full_name' => NULL,
                'code' => 'ra',
            ),
            53 =>
            array(
                'id' => 1554,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Lumbini',
                'full_name' => NULL,
                'code' => 'lu',
            ),
            54 =>
            array(
                'id' => 1555,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Mahakali',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            55 =>
            array(
                'id' => 1556,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Mechi',
                'full_name' => NULL,
                'code' => 'me',
            ),
            56 =>
            array(
                'id' => 1557,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Narayani',
                'full_name' => NULL,
                'code' => 'na',
            ),
            57 =>
            array(
                'id' => 1558,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Bheri',
                'full_name' => NULL,
                'code' => 'bh',
            ),
            58 =>
            array(
                'id' => 1559,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Sogarmatha',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            59 =>
            array(
                'id' => 1560,
                'country_id' => 97,
                'division_id' => NULL,
                'name' => 'Seti',
                'full_name' => NULL,
                'code' => 'se',
            ),
            60 =>
            array(
                'id' => 1561,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Esteli',
                'full_name' => NULL,
                'code' => 'es',
            ),
            61 =>
            array(
                'id' => 1562,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Atlantico Norte',
                'full_name' => NULL,
                'code' => 'an',
            ),
            62 =>
            array(
                'id' => 1563,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Boaco',
                'full_name' => NULL,
                'code' => 'bo',
            ),
            63 =>
            array(
                'id' => 1564,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Granada',
                'full_name' => NULL,
                'code' => 'gr',
            ),
            64 =>
            array(
                'id' => 1565,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Carazo',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            65 =>
            array(
                'id' => 1566,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'le',
            ),
            66 =>
            array(
                'id' => 1567,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Rivas',
                'full_name' => NULL,
                'code' => 'rv',
            ),
            67 =>
            array(
                'id' => 1568,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Madriz',
                'full_name' => NULL,
                'code' => 'md',
            ),
            68 =>
            array(
                'id' => 1569,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Managua',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            69 =>
            array(
                'id' => 1570,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Masaya',
                'full_name' => NULL,
                'code' => 'ms',
            ),
            70 =>
            array(
                'id' => 1571,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Matagalpa',
                'full_name' => NULL,
                'code' => 'mt',
            ),
            71 =>
            array(
                'id' => 1572,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Atlantico Sur',
                'full_name' => NULL,
                'code' => 'as',
            ),
            72 =>
            array(
                'id' => 1573,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Chinandega',
                'full_name' => NULL,
                'code' => 'cd',
            ),
            73 =>
            array(
                'id' => 1574,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Chontales',
                'full_name' => NULL,
                'code' => 'ct',
            ),
            74 =>
            array(
                'id' => 1575,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Rio San Juan',
                'full_name' => NULL,
                'code' => 'sj',
            ),
            75 =>
            array(
                'id' => 1576,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Jinotega',
                'full_name' => NULL,
                'code' => 'ji',
            ),
            76 =>
            array(
                'id' => 1577,
                'country_id' => 107,
                'division_id' => NULL,
                'name' => 'Nueva Segovia',
                'full_name' => NULL,
                'code' => 'ns',
            ),
            77 =>
            array(
                'id' => 1578,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Agadez',
                'full_name' => NULL,
                'code' => 'ajy',
            ),
            78 =>
            array(
                'id' => 1579,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Diffa',
                'full_name' => NULL,
                'code' => 'dif',
            ),
            79 =>
            array(
                'id' => 1580,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Tillaberi',
                'full_name' => NULL,
                'code' => 'til',
            ),
            80 =>
            array(
                'id' => 1581,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Dosso',
                'full_name' => NULL,
                'code' => 'dss',
            ),
            81 =>
            array(
                'id' => 1582,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Zinder',
                'full_name' => NULL,
                'code' => 'znd',
            ),
            82 =>
            array(
                'id' => 1583,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Maradi',
                'full_name' => NULL,
                'code' => 'mfq',
            ),
            83 =>
            array(
                'id' => 1584,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Niamey C.U.',
                'full_name' => NULL,
                'code' => 'nim',
            ),
            84 =>
            array(
                'id' => 1585,
                'country_id' => 40,
                'division_id' => NULL,
                'name' => 'Tahoua',
                'full_name' => NULL,
                'code' => 'thz',
            ),
            85 =>
            array(
                'id' => 1586,
                'country_id' => 48,
                'division_id' => NULL,
                'name' => 'Abuja',
                'full_name' => NULL,
                'code' => 'abv',
            ),
            86 =>
            array(
                'id' => 1587,
                'country_id' => 48,
                'division_id' => NULL,
                'name' => 'Ogbomosho',
                'full_name' => NULL,
                'code' => 'ogb',
            ),
            87 =>
            array(
                'id' => 1588,
                'country_id' => 48,
                'division_id' => NULL,
                'name' => 'Kano',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            88 =>
            array(
                'id' => 1589,
                'country_id' => 48,
                'division_id' => NULL,
                'name' => 'Lagos',
                'full_name' => NULL,
                'code' => 'los',
            ),
            89 =>
            array(
                'id' => 1590,
                'country_id' => 48,
                'division_id' => NULL,
                'name' => 'Ibadan',
                'full_name' => NULL,
                'code' => 'iba',
            ),
            90 =>
            array(
                'id' => 1591,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Akershus',
                'full_name' => NULL,
                'code' => '2',
            ),
            91 =>
            array(
                'id' => 1592,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Oppland',
                'full_name' => NULL,
                'code' => '5',
            ),
            92 =>
            array(
                'id' => 1593,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Oslo',
                'full_name' => NULL,
                'code' => '3',
            ),
            93 =>
            array(
                'id' => 1594,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Nord-Trondelag',
                'full_name' => NULL,
                'code' => '17',
            ),
            94 =>
            array(
                'id' => 1595,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Buskerud',
                'full_name' => NULL,
                'code' => '6',
            ),
            95 =>
            array(
                'id' => 1596,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Aust-Agder',
                'full_name' => NULL,
                'code' => '9',
            ),
            96 =>
            array(
                'id' => 1597,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Ostfold',
                'full_name' => NULL,
                'code' => '1',
            ),
            97 =>
            array(
                'id' => 1598,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Finnmark',
                'full_name' => NULL,
                'code' => '20',
            ),
            98 =>
            array(
                'id' => 1599,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Hedmark',
                'full_name' => NULL,
                'code' => '4',
            ),
            99 =>
            array(
                'id' => 1600,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Hordaland',
                'full_name' => NULL,
                'code' => '12',
            ),
            100 =>
            array(
                'id' => 1601,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Rogaland',
                'full_name' => NULL,
                'code' => '11',
            ),
            101 =>
            array(
                'id' => 1602,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'More og Romsdal',
                'full_name' => NULL,
                'code' => '15',
            ),
            102 =>
            array(
                'id' => 1603,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Sor-Trondelag',
                'full_name' => NULL,
                'code' => '16',
            ),
            103 =>
            array(
                'id' => 1604,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Nordland',
                'full_name' => NULL,
                'code' => '18',
            ),
            104 =>
            array(
                'id' => 1605,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Sogn og Fjordane',
                'full_name' => NULL,
                'code' => '14',
            ),
            105 =>
            array(
                'id' => 1606,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Telemark',
                'full_name' => NULL,
                'code' => '8',
            ),
            106 =>
            array(
                'id' => 1607,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Troms',
                'full_name' => NULL,
                'code' => '19',
            ),
            107 =>
            array(
                'id' => 1608,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Vest-Agder',
                'full_name' => NULL,
                'code' => '10',
            ),
            108 =>
            array(
                'id' => 1609,
                'country_id' => 125,
                'division_id' => NULL,
                'name' => 'Vestfold',
                'full_name' => NULL,
                'code' => '7',
            ),
            109 =>
            array(
                'id' => 1610,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Alentejo Litoral',
                'full_name' => NULL,
                'code' => 'all',
            ),
            110 =>
            array(
                'id' => 1611,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Pinhal Litoral',
                'full_name' => NULL,
                'code' => 'plt',
            ),
            111 =>
            array(
                'id' => 1612,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Porto',
                'full_name' => NULL,
                'code' => 'vdp',
            ),
            112 =>
            array(
                'id' => 1613,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Douro',
                'full_name' => NULL,
                'code' => 'mdr',
            ),
            113 =>
            array(
                'id' => 1614,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Entre Douro e Vouga',
                'full_name' => NULL,
                'code' => 'edv',
            ),
            114 =>
            array(
                'id' => 1615,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Faro',
                'full_name' => NULL,
                'code' => 'fao',
            ),
            115 =>
            array(
                'id' => 1616,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Funchal',
                'full_name' => NULL,
                'code' => 'fun',
            ),
            116 =>
            array(
                'id' => 1617,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Cavado',
                'full_name' => NULL,
                'code' => 'cav',
            ),
            117 =>
            array(
                'id' => 1618,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Cova da Beira',
                'full_name' => NULL,
                'code' => 'clb',
            ),
            118 =>
            array(
                'id' => 1619,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Lisboa',
                'full_name' => NULL,
                'code' => 'lis',
            ),
            119 =>
            array(
                'id' => 1620,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Leziria do Tejo',
                'full_name' => NULL,
                'code' => 'lte',
            ),
            120 =>
            array(
                'id' => 1621,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Medio Tejo',
                'full_name' => NULL,
                'code' => 'mte',
            ),
            121 =>
            array(
                'id' => 1622,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Minho-Lima',
                'full_name' => NULL,
                'code' => 'mli',
            ),
            122 =>
            array(
                'id' => 1623,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Beira Interior Norte',
                'full_name' => NULL,
                'code' => 'bin',
            ),
            123 =>
            array(
                'id' => 1624,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Beira Interior Sul',
                'full_name' => NULL,
                'code' => 'bis',
            ),
            124 =>
            array(
                'id' => 1625,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Pinhal Interior Norte',
                'full_name' => NULL,
                'code' => 'pin',
            ),
            125 =>
            array(
                'id' => 1626,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Pinhal Interior Sul',
                'full_name' => NULL,
                'code' => 'pis',
            ),
            126 =>
            array(
                'id' => 1627,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Ponta Delgada',
                'full_name' => NULL,
                'code' => 'pdl',
            ),
            127 =>
            array(
                'id' => 1628,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Peninsula de Setubal',
                'full_name' => NULL,
                'code' => 'pse',
            ),
            128 =>
            array(
                'id' => 1629,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Serra da Estrela',
                'full_name' => NULL,
                'code' => 'ses',
            ),
            129 =>
            array(
                'id' => 1630,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Alto Alentejo',
                'full_name' => NULL,
                'code' => 'aat',
            ),
            130 =>
            array(
                'id' => 1631,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Alto Tros-os-Montes',
                'full_name' => NULL,
                'code' => 'atm',
            ),
            131 =>
            array(
                'id' => 1632,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Tamega',
                'full_name' => NULL,
                'code' => 'tam',
            ),
            132 =>
            array(
                'id' => 1633,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Ave',
                'full_name' => NULL,
                'code' => 'aes',
            ),
            133 =>
            array(
                'id' => 1634,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Oeste',
                'full_name' => NULL,
                'code' => 'oes',
            ),
            134 =>
            array(
                'id' => 1635,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Baixo Alentejo',
                'full_name' => NULL,
                'code' => 'bal',
            ),
            135 =>
            array(
                'id' => 1636,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Baixo Vouga',
                'full_name' => NULL,
                'code' => 'bvo',
            ),
            136 =>
            array(
                'id' => 1637,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Baixo Mondego',
                'full_name' => NULL,
                'code' => 'bmo',
            ),
            137 =>
            array(
                'id' => 1638,
                'country_id' => 153,
                'division_id' => NULL,
                'name' => 'Alentejo Central',
                'full_name' => NULL,
                'code' => 'alc',
            ),
            138 =>
            array(
                'id' => 1639,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Ehime',
                'full_name' => NULL,
                'code' => '38',
            ),
            139 =>
            array(
                'id' => 1640,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Aichi',
                'full_name' => NULL,
                'code' => '23',
            ),
            140 =>
            array(
                'id' => 1641,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Hokkaido',
                'full_name' => NULL,
                'code' => '1',
            ),
            141 =>
            array(
                'id' => 1642,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Hyogo',
                'full_name' => NULL,
                'code' => '28',
            ),
            142 =>
            array(
                'id' => 1643,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Okinawa',
                'full_name' => NULL,
                'code' => '47',
            ),
            143 =>
            array(
                'id' => 1644,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Ibaraki',
                'full_name' => NULL,
                'code' => '8',
            ),
            144 =>
            array(
                'id' => 1645,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Osaka',
                'full_name' => NULL,
                'code' => '27',
            ),
            145 =>
            array(
                'id' => 1646,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Oita',
                'full_name' => NULL,
                'code' => '44',
            ),
            146 =>
            array(
                'id' => 1647,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Shimane',
                'full_name' => NULL,
                'code' => '32',
            ),
            147 =>
            array(
                'id' => 1648,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Tokushima',
                'full_name' => NULL,
                'code' => '36',
            ),
            148 =>
            array(
                'id' => 1649,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Tokyo',
                'full_name' => NULL,
                'code' => '13',
            ),
            149 =>
            array(
                'id' => 1650,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Fukushima',
                'full_name' => NULL,
                'code' => '7',
            ),
            150 =>
            array(
                'id' => 1651,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Fukuoka',
                'full_name' => NULL,
                'code' => '40',
            ),
            151 =>
            array(
                'id' => 1652,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Fukui',
                'full_name' => NULL,
                'code' => '18',
            ),
            152 =>
            array(
                'id' => 1653,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Toyama',
                'full_name' => NULL,
                'code' => '16',
            ),
            153 =>
            array(
                'id' => 1654,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Okayama',
                'full_name' => NULL,
                'code' => '33',
            ),
            154 =>
            array(
                'id' => 1655,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kochi',
                'full_name' => NULL,
                'code' => '39',
            ),
            155 =>
            array(
                'id' => 1656,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Miyagi',
                'full_name' => NULL,
                'code' => '4',
            ),
            156 =>
            array(
                'id' => 1657,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Miyazaki',
                'full_name' => NULL,
                'code' => '45',
            ),
            157 =>
            array(
                'id' => 1658,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Hiroshima',
                'full_name' => NULL,
                'code' => '34',
            ),
            158 =>
            array(
                'id' => 1659,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Wakayama',
                'full_name' => NULL,
                'code' => '30',
            ),
            159 =>
            array(
                'id' => 1660,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kyoto',
                'full_name' => NULL,
                'code' => '26',
            ),
            160 =>
            array(
                'id' => 1661,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Shizuoka',
                'full_name' => NULL,
                'code' => '22',
            ),
            161 =>
            array(
                'id' => 1662,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Tochigi',
                'full_name' => NULL,
                'code' => '9',
            ),
            162 =>
            array(
                'id' => 1663,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kagoshima',
                'full_name' => NULL,
                'code' => '46',
            ),
            163 =>
            array(
                'id' => 1664,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Nara',
                'full_name' => NULL,
                'code' => '29',
            ),
            164 =>
            array(
                'id' => 1665,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Tottori',
                'full_name' => NULL,
                'code' => '31',
            ),
            165 =>
            array(
                'id' => 1666,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Gifu',
                'full_name' => NULL,
                'code' => '21',
            ),
            166 =>
            array(
                'id' => 1667,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Saitama',
                'full_name' => NULL,
                'code' => '11',
            ),
            167 =>
            array(
                'id' => 1668,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Chiba',
                'full_name' => NULL,
                'code' => '12',
            ),
            168 =>
            array(
                'id' => 1669,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Aomori',
                'full_name' => NULL,
                'code' => '2',
            ),
            169 =>
            array(
                'id' => 1670,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Akita',
                'full_name' => NULL,
                'code' => '5',
            ),
            170 =>
            array(
                'id' => 1671,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Gunma',
                'full_name' => NULL,
                'code' => '10',
            ),
            171 =>
            array(
                'id' => 1672,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Mie',
                'full_name' => NULL,
                'code' => '24',
            ),
            172 =>
            array(
                'id' => 1673,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Yamaguchi',
                'full_name' => NULL,
                'code' => '35',
            ),
            173 =>
            array(
                'id' => 1674,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Yamanashi',
                'full_name' => NULL,
                'code' => '19',
            ),
            174 =>
            array(
                'id' => 1675,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Yamagata',
                'full_name' => NULL,
                'code' => '6',
            ),
            175 =>
            array(
                'id' => 1676,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kanagawa',
                'full_name' => NULL,
                'code' => '14',
            ),
            176 =>
            array(
                'id' => 1677,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Ishikawa',
                'full_name' => NULL,
                'code' => '17',
            ),
            177 =>
            array(
                'id' => 1678,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kagawa',
                'full_name' => NULL,
                'code' => '37',
            ),
            178 =>
            array(
                'id' => 1679,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Niigata',
                'full_name' => NULL,
                'code' => '15',
            ),
            179 =>
            array(
                'id' => 1680,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Kumamoto',
                'full_name' => NULL,
                'code' => '43',
            ),
            180 =>
            array(
                'id' => 1681,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Iwate',
                'full_name' => NULL,
                'code' => '3',
            ),
            181 =>
            array(
                'id' => 1682,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Nagasaki',
                'full_name' => NULL,
                'code' => '42',
            ),
            182 =>
            array(
                'id' => 1683,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Nagano',
                'full_name' => NULL,
                'code' => '20',
            ),
            183 =>
            array(
                'id' => 1684,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Shiga',
                'full_name' => NULL,
                'code' => '25',
            ),
            184 =>
            array(
                'id' => 1685,
                'country_id' => 62,
                'division_id' => NULL,
                'name' => 'Saga',
                'full_name' => NULL,
                'code' => '41',
            ),
            185 =>
            array(
                'id' => 1686,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Norrbottens',
                'full_name' => NULL,
                'code' => 'bd',
            ),
            186 =>
            array(
                'id' => 1687,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Blekinge',
                'full_name' => NULL,
                'code' => 'k',
            ),
            187 =>
            array(
                'id' => 1688,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Dalarnas',
                'full_name' => NULL,
                'code' => 'dln',
            ),
            188 =>
            array(
                'id' => 1689,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Ustergotland',
                'full_name' => NULL,
                'code' => 'ugl',
            ),
            189 =>
            array(
                'id' => 1690,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Orebro',
                'full_name' => NULL,
                'code' => 't',
            ),
            190 =>
            array(
                'id' => 1691,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Gotlands',
                'full_name' => NULL,
                'code' => 'i',
            ),
            191 =>
            array(
                'id' => 1692,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Hallands',
                'full_name' => NULL,
                'code' => 'n',
            ),
            192 =>
            array(
                'id' => 1693,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Kalmar',
                'full_name' => NULL,
                'code' => 'h',
            ),
            193 =>
            array(
                'id' => 1694,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Kronobergs',
                'full_name' => NULL,
                'code' => 'g',
            ),
            194 =>
            array(
                'id' => 1695,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Sodermanlands',
                'full_name' => NULL,
                'code' => 'd',
            ),
            195 =>
            array(
                'id' => 1696,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Stockholms',
                'full_name' => NULL,
                'code' => 'ab',
            ),
            196 =>
            array(
                'id' => 1697,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Skane',
                'full_name' => NULL,
                'code' => 'm',
            ),
            197 =>
            array(
                'id' => 1698,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Varmlands',
                'full_name' => NULL,
                'code' => 's',
            ),
            198 =>
            array(
                'id' => 1699,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Uppsala',
                'full_name' => NULL,
                'code' => 'c',
            ),
            199 =>
            array(
                'id' => 1700,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Vasterbottens',
                'full_name' => NULL,
                'code' => 'ac',
            ),
            200 =>
            array(
                'id' => 1701,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Vastmanlands',
                'full_name' => NULL,
                'code' => 'u',
            ),
            201 =>
            array(
                'id' => 1702,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Vasternorrlands',
                'full_name' => NULL,
                'code' => 'y',
            ),
            202 =>
            array(
                'id' => 1703,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Vastra Gotalands',
                'full_name' => NULL,
                'code' => 'o',
            ),
            203 =>
            array(
                'id' => 1704,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Jonkopings',
                'full_name' => NULL,
                'code' => 'f',
            ),
            204 =>
            array(
                'id' => 1705,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Gavleborgs',
                'full_name' => NULL,
                'code' => 'x',
            ),
            205 =>
            array(
                'id' => 1706,
                'country_id' => 128,
                'division_id' => NULL,
                'name' => 'Jamtlands',
                'full_name' => NULL,
                'code' => 'z',
            ),
            206 =>
            array(
                'id' => 1707,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Aargau',
                'full_name' => NULL,
                'code' => 'ag',
            ),
            207 =>
            array(
                'id' => 1708,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Basel－Sstadt',
                'full_name' => NULL,
                'code' => 'bs',
            ),
            208 =>
            array(
                'id' => 1709,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Basel Landschaft',
                'full_name' => NULL,
                'code' => 'bl',
            ),
            209 =>
            array(
                'id' => 1710,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Bern',
                'full_name' => NULL,
                'code' => 'be',
            ),
            210 =>
            array(
                'id' => 1711,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Zug',
                'full_name' => NULL,
                'code' => 'zg',
            ),
            211 =>
            array(
                'id' => 1712,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Freiburg',
                'full_name' => NULL,
                'code' => 'fr',
            ),
            212 =>
            array(
                'id' => 1713,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Glarus',
                'full_name' => NULL,
                'code' => 'gl',
            ),
            213 =>
            array(
                'id' => 1714,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Graubünden',
                'full_name' => NULL,
                'code' => 'gr',
            ),
            214 =>
            array(
                'id' => 1715,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Luzern',
                'full_name' => NULL,
                'code' => 'lu',
            ),
            215 =>
            array(
                'id' => 1716,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Lausanne',
                'full_name' => NULL,
                'code' => 'la',
            ),
            216 =>
            array(
                'id' => 1717,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Neuchatel',
                'full_name' => NULL,
                'code' => 'ne',
            ),
            217 =>
            array(
                'id' => 1718,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Appenzell Innerrhodn',
                'full_name' => NULL,
                'code' => 'ai',
            ),
            218 =>
            array(
                'id' => 1719,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Geneve',
                'full_name' => NULL,
                'code' => 'ge',
            ),
            219 =>
            array(
                'id' => 1720,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Jura',
                'full_name' => NULL,
                'code' => 'ju',
            ),
            220 =>
            array(
                'id' => 1721,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Schaffhausen',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            221 =>
            array(
                'id' => 1722,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Obwalden',
                'full_name' => NULL,
                'code' => 'ow',
            ),
            222 =>
            array(
                'id' => 1723,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'St.Gallen',
                'full_name' => NULL,
                'code' => 'sg',
            ),
            223 =>
            array(
                'id' => 1724,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Schwyz',
                'full_name' => NULL,
                'code' => 'sz',
            ),
            224 =>
            array(
                'id' => 1725,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Zurich',
                'full_name' => NULL,
                'code' => 'zh',
            ),
            225 =>
            array(
                'id' => 1726,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Solothurn',
                'full_name' => NULL,
                'code' => 'so',
            ),
            226 =>
            array(
                'id' => 1727,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Ticino',
                'full_name' => NULL,
                'code' => 'ti',
            ),
            227 =>
            array(
                'id' => 1728,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Thurgau',
                'full_name' => NULL,
                'code' => 'tg',
            ),
            228 =>
            array(
                'id' => 1729,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Wallis',
                'full_name' => NULL,
                'code' => 'vs',
            ),
            229 =>
            array(
                'id' => 1730,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Appenzell Ausserrhon',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            230 =>
            array(
                'id' => 1731,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Vaud',
                'full_name' => NULL,
                'code' => 'vd',
            ),
            231 =>
            array(
                'id' => 1732,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Uri',
                'full_name' => NULL,
                'code' => 'ur',
            ),
            232 =>
            array(
                'id' => 1733,
                'country_id' => 129,
                'division_id' => NULL,
                'name' => 'Nidwalden',
                'full_name' => NULL,
                'code' => 'nw',
            ),
            233 =>
            array(
                'id' => 1734,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Apopa',
                'full_name' => NULL,
                'code' => 'apo',
            ),
            234 =>
            array(
                'id' => 1735,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Ahuachapan',
                'full_name' => NULL,
                'code' => 'ah',
            ),
            235 =>
            array(
                'id' => 1736,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Litoral',
                'full_name' => NULL,
                'code' => 'li',
            ),
            236 =>
            array(
                'id' => 1737,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Chalatenango',
                'full_name' => NULL,
                'code' => 'ch',
            ),
            237 =>
            array(
                'id' => 1738,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Delgado',
                'full_name' => NULL,
                'code' => 'de',
            ),
            238 =>
            array(
                'id' => 1739,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Kie-Ntem',
                'full_name' => NULL,
                'code' => 'kn',
            ),
            239 =>
            array(
                'id' => 1740,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Cabanas',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            240 =>
            array(
                'id' => 1741,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Cuscatlan',
                'full_name' => NULL,
                'code' => 'cu',
            ),
            241 =>
            array(
                'id' => 1742,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'La Paz',
                'full_name' => NULL,
                'code' => 'pz',
            ),
            242 =>
            array(
                'id' => 1743,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'La Libertad',
                'full_name' => NULL,
                'code' => 'lb',
            ),
            243 =>
            array(
                'id' => 1744,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'La Union',
                'full_name' => NULL,
                'code' => 'un',
            ),
            244 =>
            array(
                'id' => 1745,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Mejicanos',
                'full_name' => NULL,
                'code' => 'mej',
            ),
            245 =>
            array(
                'id' => 1746,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Morazan',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            246 =>
            array(
                'id' => 1747,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Santa Ana',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            247 =>
            array(
                'id' => 1748,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'San Miguel',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            248 =>
            array(
                'id' => 1749,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'San Salvador',
                'full_name' => NULL,
                'code' => 'ss',
            ),
            249 =>
            array(
                'id' => 1750,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'San Vicente',
                'full_name' => NULL,
                'code' => 'sv',
            ),
            250 =>
            array(
                'id' => 1751,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Sonsonate',
                'full_name' => NULL,
                'code' => 'so',
            ),
            251 =>
            array(
                'id' => 1752,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Soyapango',
                'full_name' => NULL,
                'code' => 'soy',
            ),
            252 =>
            array(
                'id' => 1753,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Wele-Nzas',
                'full_name' => NULL,
                'code' => 'wn',
            ),
            253 =>
            array(
                'id' => 1754,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Usulutan',
                'full_name' => NULL,
                'code' => 'us',
            ),
            254 =>
            array(
                'id' => 1755,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Ilopango',
                'full_name' => NULL,
                'code' => 'il',
            ),
            255 =>
            array(
                'id' => 1756,
                'country_id' => 110,
                'division_id' => NULL,
                'name' => 'Centro Sur',
                'full_name' => NULL,
                'code' => 'cs',
            ),
            256 =>
            array(
                'id' => 1757,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Beograd',
                'full_name' => NULL,
                'code' => 'beg',
            ),
            257 =>
            array(
                'id' => 1758,
                'country_id' => 248,
                'division_id' => NULL,
                'name' => 'Podgorica',
                'full_name' => NULL,
                'code' => 'pod',
            ),
            258 =>
            array(
                'id' => 1759,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Kragujevac',
                'full_name' => NULL,
                'code' => 'kgv',
            ),
            259 =>
            array(
                'id' => 1760,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Nis',
                'full_name' => NULL,
                'code' => 'ini',
            ),
            260 =>
            array(
                'id' => 1761,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Novi Sad',
                'full_name' => NULL,
                'code' => 'nvs',
            ),
            261 =>
            array(
                'id' => 1762,
                'country_id' => 247,
                'division_id' => NULL,
                'name' => 'Pristina',
                'full_name' => NULL,
                'code' => 'prn',
            ),
            262 =>
            array(
                'id' => 1763,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Subotica',
                'full_name' => NULL,
                'code' => 'sub',
            ),
            263 =>
            array(
                'id' => 1764,
                'country_id' => 159,
                'division_id' => NULL,
                'name' => 'Zemun',
                'full_name' => NULL,
                'code' => 'zem',
            ),
            264 =>
            array(
                'id' => 1765,
                'country_id' => 16,
                'division_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'n',
            ),
            265 =>
            array(
                'id' => 1766,
                'country_id' => 16,
                'division_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'e',
            ),
            266 =>
            array(
                'id' => 1767,
                'country_id' => 16,
                'division_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 's',
            ),
            267 =>
            array(
                'id' => 1768,
                'country_id' => 16,
                'division_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'w',
            ),
            268 =>
            array(
                'id' => 1769,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Dakar',
                'full_name' => NULL,
                'code' => 'da',
            ),
            269 =>
            array(
                'id' => 1770,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Fatick',
                'full_name' => NULL,
                'code' => 'fa',
            ),
            270 =>
            array(
                'id' => 1771,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Ziguinchor',
                'full_name' => NULL,
                'code' => 'zi',
            ),
            271 =>
            array(
                'id' => 1772,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Thies',
                'full_name' => NULL,
                'code' => 'th',
            ),
            272 =>
            array(
                'id' => 1773,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Diourbel',
                'full_name' => NULL,
                'code' => 'di',
            ),
            273 =>
            array(
                'id' => 1774,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Kaolack',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            274 =>
            array(
                'id' => 1775,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Kolda',
                'full_name' => NULL,
                'code' => 'ko',
            ),
            275 =>
            array(
                'id' => 1776,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Louga',
                'full_name' => NULL,
                'code' => 'lo',
            ),
            276 =>
            array(
                'id' => 1777,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Matam',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            277 =>
            array(
                'id' => 1778,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Saint-Louis',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            278 =>
            array(
                'id' => 1779,
                'country_id' => 29,
                'division_id' => NULL,
                'name' => 'Tambacounda',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            279 =>
            array(
                'id' => 1780,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Famagusta',
                'full_name' => NULL,
                'code' => '4',
            ),
            280 =>
            array(
                'id' => 1781,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Kyrenia',
                'full_name' => NULL,
                'code' => '6',
            ),
            281 =>
            array(
                'id' => 1782,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Larnaca',
                'full_name' => NULL,
                'code' => '3',
            ),
            282 =>
            array(
                'id' => 1783,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Limassol',
                'full_name' => NULL,
                'code' => '2',
            ),
            283 =>
            array(
                'id' => 1784,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Nicosia',
                'full_name' => NULL,
                'code' => '1',
            ),
            284 =>
            array(
                'id' => 1785,
                'country_id' => 146,
                'division_id' => NULL,
                'name' => 'Pafos',
                'full_name' => NULL,
                'code' => '5',
            ),
            285 =>
            array(
                'id' => 1786,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Arar',
                'full_name' => NULL,
                'code' => 'ara',
            ),
            286 =>
            array(
                'id' => 1787,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Abha',
                'full_name' => NULL,
                'code' => 'ahb',
            ),
            287 =>
            array(
                'id' => 1788,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Al Bahah',
                'full_name' => NULL,
                'code' => 'bh',
            ),
            288 =>
            array(
                'id' => 1789,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Buraydah',
                'full_name' => NULL,
                'code' => 'bur',
            ),
            289 =>
            array(
                'id' => 1790,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Dammam',
                'full_name' => NULL,
                'code' => 'dam',
            ),
            290 =>
            array(
                'id' => 1791,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Hafar al-Batin',
                'full_name' => NULL,
                'code' => 'hbt',
            ),
            291 =>
            array(
                'id' => 1792,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Hail',
                'full_name' => NULL,
                'code' => 'hl',
            ),
            292 =>
            array(
                'id' => 1793,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Khamis Mushayt',
                'full_name' => NULL,
                'code' => 'kmx',
            ),
            293 =>
            array(
                'id' => 1794,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Al-Kharj',
                'full_name' => NULL,
                'code' => 'akh',
            ),
            294 =>
            array(
                'id' => 1795,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Al-Hufuf',
                'full_name' => NULL,
                'code' => 'hff',
            ),
            295 =>
            array(
                'id' => 1796,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Jiddah',
                'full_name' => NULL,
                'code' => 'jed',
            ),
            296 =>
            array(
                'id' => 1797,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Jizan',
                'full_name' => NULL,
                'code' => 'jz',
            ),
            297 =>
            array(
                'id' => 1798,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Riyad',
                'full_name' => NULL,
                'code' => 'rd',
            ),
            298 =>
            array(
                'id' => 1799,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Medina',
                'full_name' => NULL,
                'code' => 'med',
            ),
            299 =>
            array(
                'id' => 1800,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Makkah',
                'full_name' => NULL,
                'code' => 'ml',
            ),
            300 =>
            array(
                'id' => 1801,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Al-Mubarraz',
                'full_name' => NULL,
                'code' => 'mbr',
            ),
            301 =>
            array(
                'id' => 1802,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Najran',
                'full_name' => NULL,
                'code' => 'nr',
            ),
            302 =>
            array(
                'id' => 1803,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Sakaka',
                'full_name' => NULL,
                'code' => 'sak',
            ),
            303 =>
            array(
                'id' => 1804,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Tabuk',
                'full_name' => NULL,
                'code' => 'tb',
            ),
            304 =>
            array(
                'id' => 1805,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'At Tarif',
                'full_name' => NULL,
                'code' => 'tar',
            ),
            305 =>
            array(
                'id' => 1806,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Yanbu al-Bahr',
                'full_name' => NULL,
                'code' => 'ynb',
            ),
            306 =>
            array(
                'id' => 1807,
                'country_id' => 94,
                'division_id' => NULL,
                'name' => 'Al-Jubayl',
                'full_name' => NULL,
                'code' => 'jbi',
            ),
            307 =>
            array(
                'id' => 1808,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Anuradhapura',
                'full_name' => NULL,
                'code' => 'adp',
            ),
            308 =>
            array(
                'id' => 1809,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Ampara',
                'full_name' => NULL,
                'code' => 'amp',
            ),
            309 =>
            array(
                'id' => 1810,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Badulla',
                'full_name' => NULL,
                'code' => 'bad',
            ),
            310 =>
            array(
                'id' => 1811,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Batticaloa',
                'full_name' => NULL,
                'code' => 'btc',
            ),
            311 =>
            array(
                'id' => 1812,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Polonnaruwa',
                'full_name' => NULL,
                'code' => 'pol',
            ),
            312 =>
            array(
                'id' => 1813,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Hambantota',
                'full_name' => NULL,
                'code' => 'hba',
            ),
            313 =>
            array(
                'id' => 1814,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Kilinochchi',
                'full_name' => NULL,
                'code' => 'kil',
            ),
            314 =>
            array(
                'id' => 1815,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Galle',
                'full_name' => NULL,
                'code' => 'gal',
            ),
            315 =>
            array(
                'id' => 1816,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Gampaha',
                'full_name' => NULL,
                'code' => 'gam',
            ),
            316 =>
            array(
                'id' => 1817,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Jaffna',
                'full_name' => NULL,
                'code' => 'jaf',
            ),
            317 =>
            array(
                'id' => 1818,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Kalutara',
                'full_name' => NULL,
                'code' => 'klt',
            ),
            318 =>
            array(
                'id' => 1819,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Kegalle',
                'full_name' => NULL,
                'code' => 'keg',
            ),
            319 =>
            array(
                'id' => 1820,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Kandy',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            320 =>
            array(
                'id' => 1821,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Colombo',
                'full_name' => NULL,
                'code' => 'cmb',
            ),
            321 =>
            array(
                'id' => 1822,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Kurunegala',
                'full_name' => NULL,
                'code' => 'kur',
            ),
            322 =>
            array(
                'id' => 1823,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Ratnapura',
                'full_name' => NULL,
                'code' => 'rat',
            ),
            323 =>
            array(
                'id' => 1824,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Mannar',
                'full_name' => NULL,
                'code' => 'man',
            ),
            324 =>
            array(
                'id' => 1825,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Matale',
                'full_name' => NULL,
                'code' => 'mat',
            ),
            325 =>
            array(
                'id' => 1826,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Matara',
                'full_name' => NULL,
                'code' => 'maa',
            ),
            326 =>
            array(
                'id' => 1827,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Monaragala',
                'full_name' => NULL,
                'code' => 'mon',
            ),
            327 =>
            array(
                'id' => 1828,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Mullathivu',
                'full_name' => NULL,
                'code' => 'mul',
            ),
            328 =>
            array(
                'id' => 1829,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Nuwara Eliya',
                'full_name' => NULL,
                'code' => 'nue',
            ),
            329 =>
            array(
                'id' => 1830,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Puttalam',
                'full_name' => NULL,
                'code' => 'put',
            ),
            330 =>
            array(
                'id' => 1831,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Trincomalee',
                'full_name' => NULL,
                'code' => 'trr',
            ),
            331 =>
            array(
                'id' => 1832,
                'country_id' => 67,
                'division_id' => NULL,
                'name' => 'Vavuniya',
                'full_name' => NULL,
                'code' => 'vav',
            ),
            332 =>
            array(
                'id' => 1833,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Banskobystricky',
                'full_name' => NULL,
                'code' => 'bby',
            ),
            333 =>
            array(
                'id' => 1834,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Bratislavsky',
                'full_name' => NULL,
                'code' => 'bts',
            ),
            334 =>
            array(
                'id' => 1835,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Koricky',
                'full_name' => NULL,
                'code' => 'kor',
            ),
            335 =>
            array(
                'id' => 1836,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Nitriansky',
                'full_name' => NULL,
                'code' => 'nra',
            ),
            336 =>
            array(
                'id' => 1837,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Prerovsky',
                'full_name' => NULL,
                'code' => 'pov',
            ),
            337 =>
            array(
                'id' => 1838,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Rilinsky',
                'full_name' => NULL,
                'code' => 'ril',
            ),
            338 =>
            array(
                'id' => 1839,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Trnavsky',
                'full_name' => NULL,
                'code' => 'tna',
            ),
            339 =>
            array(
                'id' => 1840,
                'country_id' => 137,
                'division_id' => NULL,
                'name' => 'Trenriansky',
                'full_name' => NULL,
                'code' => 'tre',
            ),
            340 =>
            array(
                'id' => 1841,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Obalno-kraska',
                'full_name' => NULL,
                'code' => 'okr',
            ),
            341 =>
            array(
                'id' => 1842,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Osrednjeslovenska',
                'full_name' => NULL,
                'code' => 'osr',
            ),
            342 =>
            array(
                'id' => 1843,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Podravska',
                'full_name' => NULL,
                'code' => 'pod',
            ),
            343 =>
            array(
                'id' => 1844,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Pomurska',
                'full_name' => NULL,
                'code' => 'pom',
            ),
            344 =>
            array(
                'id' => 1845,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Dolenjska',
                'full_name' => NULL,
                'code' => 'dlj',
            ),
            345 =>
            array(
                'id' => 1846,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Gorenjska',
                'full_name' => NULL,
                'code' => 'gsz',
            ),
            346 =>
            array(
                'id' => 1847,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Goriska',
                'full_name' => NULL,
                'code' => 'gsk',
            ),
            347 =>
            array(
                'id' => 1848,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Koroska',
                'full_name' => NULL,
                'code' => 'kor',
            ),
            348 =>
            array(
                'id' => 1849,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Notranjsko-kraska',
                'full_name' => NULL,
                'code' => 'nkr',
            ),
            349 =>
            array(
                'id' => 1850,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Savinjska',
                'full_name' => NULL,
                'code' => 'sav',
            ),
            350 =>
            array(
                'id' => 1851,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Spodnjeposavska',
                'full_name' => NULL,
                'code' => 'spo',
            ),
            351 =>
            array(
                'id' => 1852,
                'country_id' => 135,
                'division_id' => NULL,
                'name' => 'Zasavska',
                'full_name' => NULL,
                'code' => 'zas',
            ),
            352 =>
            array(
                'id' => 1853,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Ash-Shamaliyah',
                'full_name' => NULL,
                'code' => 'ash',
            ),
            353 =>
            array(
                'id' => 1854,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Al-Istiwaiyah',
                'full_name' => NULL,
                'code' => 'sis',
            ),
            354 =>
            array(
                'id' => 1855,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Darfur',
                'full_name' => NULL,
                'code' => 'sda',
            ),
            355 =>
            array(
                'id' => 1856,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Ash-Sharqiyah',
                'full_name' => NULL,
                'code' => 'sha',
            ),
            356 =>
            array(
                'id' => 1857,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Bahr al-Ghazal',
                'full_name' => NULL,
                'code' => 'sbg',
            ),
            357 =>
            array(
                'id' => 1858,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Al-Khartum',
                'full_name' => NULL,
                'code' => 'krt',
            ),
            358 =>
            array(
                'id' => 1859,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Kurdufan',
                'full_name' => NULL,
                'code' => 'gku',
            ),
            359 =>
            array(
                'id' => 1860,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Aali an-Nil',
                'full_name' => NULL,
                'code' => 'anb',
            ),
            360 =>
            array(
                'id' => 1861,
                'country_id' => 55,
                'division_id' => NULL,
                'name' => 'Al Wasta',
                'full_name' => NULL,
                'code' => 'wdh',
            ),
            361 =>
            array(
                'id' => 1862,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Brokopondo',
                'full_name' => NULL,
                'code' => 'br',
            ),
            362 =>
            array(
                'id' => 1863,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Coronie',
                'full_name' => NULL,
                'code' => 'cr',
            ),
            363 =>
            array(
                'id' => 1864,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Commewijne',
                'full_name' => NULL,
                'code' => 'cm',
            ),
            364 =>
            array(
                'id' => 1865,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Marowijne',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            365 =>
            array(
                'id' => 1866,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Nickerie',
                'full_name' => NULL,
                'code' => 'ni',
            ),
            366 =>
            array(
                'id' => 1867,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Para',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            367 =>
            array(
                'id' => 1868,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Paramaribo',
                'full_name' => NULL,
                'code' => 'pm',
            ),
            368 =>
            array(
                'id' => 1869,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Saramacca',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            369 =>
            array(
                'id' => 1870,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Wanica',
                'full_name' => NULL,
                'code' => 'wa',
            ),
            370 =>
            array(
                'id' => 1871,
                'country_id' => 191,
                'division_id' => NULL,
                'name' => 'Sipaliwini',
                'full_name' => NULL,
                'code' => 'si',
            ),
            371 =>
            array(
                'id' => 1872,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Guadalcanal',
                'full_name' => NULL,
                'code' => 'gc',
            ),
            372 =>
            array(
                'id' => 1873,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Honiara',
                'full_name' => NULL,
                'code' => 'ho',
            ),
            373 =>
            array(
                'id' => 1874,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Rennell and Bellona',
                'full_name' => NULL,
                'code' => 'rb',
            ),
            374 =>
            array(
                'id' => 1875,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Makira',
                'full_name' => NULL,
                'code' => 'mk',
            ),
            375 =>
            array(
                'id' => 1876,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Malaita',
                'full_name' => NULL,
                'code' => 'ml',
            ),
            376 =>
            array(
                'id' => 1877,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Choiseul',
                'full_name' => NULL,
                'code' => 'ch',
            ),
            377 =>
            array(
                'id' => 1878,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Temotu',
                'full_name' => NULL,
                'code' => 'tm',
            ),
            378 =>
            array(
                'id' => 1879,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'we',
            ),
            379 =>
            array(
                'id' => 1880,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Isabel',
                'full_name' => NULL,
                'code' => 'is',
            ),
            380 =>
            array(
                'id' => 1881,
                'country_id' => 175,
                'division_id' => NULL,
                'name' => 'Central Islands',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            381 =>
            array(
                'id' => 1882,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Dushanbe',
                'full_name' => NULL,
                'code' => 'dyu',
            ),
            382 =>
            array(
                'id' => 1883,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Khorugh',
                'full_name' => NULL,
                'code' => 'kho',
            ),
            383 =>
            array(
                'id' => 1884,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Kanibadam',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            384 =>
            array(
                'id' => 1885,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Kofarnihon',
                'full_name' => NULL,
                'code' => 'kof',
            ),
            385 =>
            array(
                'id' => 1886,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Khujand',
                'full_name' => NULL,
                'code' => 'khu',
            ),
            386 =>
            array(
                'id' => 1887,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Kurgan-Tjube',
                'full_name' => NULL,
                'code' => 'ktj',
            ),
            387 =>
            array(
                'id' => 1888,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Kulob',
                'full_name' => NULL,
                'code' => 'klb',
            ),
            388 =>
            array(
                'id' => 1889,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Rogun',
                'full_name' => NULL,
                'code' => 'rgu',
            ),
            389 =>
            array(
                'id' => 1890,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Nurek',
                'full_name' => NULL,
                'code' => 'nur',
            ),
            390 =>
            array(
                'id' => 1891,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Pendzhikent',
                'full_name' => NULL,
                'code' => 'pjk',
            ),
            391 =>
            array(
                'id' => 1892,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Sarband',
                'full_name' => NULL,
                'code' => 'sba',
            ),
            392 =>
            array(
                'id' => 1893,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Taboshar',
                'full_name' => NULL,
                'code' => 'tbs',
            ),
            393 =>
            array(
                'id' => 1894,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Tursunzade',
                'full_name' => NULL,
                'code' => 'tsz',
            ),
            394 =>
            array(
                'id' => 1895,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Ura-Tjube',
                'full_name' => NULL,
                'code' => 'utj',
            ),
            395 =>
            array(
                'id' => 1896,
                'country_id' => 72,
                'division_id' => NULL,
                'name' => 'Isfara',
                'full_name' => NULL,
                'code' => 'isf',
            ),
            396 =>
            array(
                'id' => 1897,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Amnat Charoen',
                'full_name' => NULL,
                'code' => '37',
            ),
            397 =>
            array(
                'id' => 1898,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Prachuap Khiri Khan',
                'full_name' => NULL,
                'code' => '77',
            ),
            398 =>
            array(
                'id' => 1899,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Pathum Thani',
                'full_name' => NULL,
                'code' => '13',
            ),
            399 =>
            array(
                'id' => 1900,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Prachin Buri',
                'full_name' => NULL,
                'code' => '25',
            ),
            400 =>
            array(
                'id' => 1901,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Kanchanaburi',
                'full_name' => NULL,
                'code' => '71',
            ),
            401 =>
            array(
                'id' => 1902,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Saraburi',
                'full_name' => NULL,
                'code' => '19',
            ),
            402 =>
            array(
                'id' => 1903,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Pattani',
                'full_name' => NULL,
                'code' => '94',
            ),
            403 =>
            array(
                'id' => 1904,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Samut Prakan',
                'full_name' => NULL,
                'code' => '11',
            ),
            404 =>
            array(
                'id' => 1905,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nakhon Sawan',
                'full_name' => NULL,
                'code' => '60',
            ),
            405 =>
            array(
                'id' => 1906,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chachoengsao',
                'full_name' => NULL,
                'code' => '24',
            ),
            406 =>
            array(
                'id' => 1907,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phetchabun',
                'full_name' => NULL,
                'code' => '76',
            ),
            407 =>
            array(
                'id' => 1908,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phatthalung',
                'full_name' => NULL,
                'code' => '93',
            ),
            408 =>
            array(
                'id' => 1909,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chai Nat',
                'full_name' => NULL,
                'code' => '18',
            ),
            409 =>
            array(
                'id' => 1910,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chaiyaphum',
                'full_name' => NULL,
                'code' => '36',
            ),
            410 =>
            array(
                'id' => 1911,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Uttaradit',
                'full_name' => NULL,
                'code' => '53',
            ),
            411 =>
            array(
                'id' => 1912,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chumphon',
                'full_name' => NULL,
                'code' => '86',
            ),
            412 =>
            array(
                'id' => 1913,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chon Buri',
                'full_name' => NULL,
                'code' => '20',
            ),
            413 =>
            array(
                'id' => 1914,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Tak',
                'full_name' => NULL,
                'code' => '63',
            ),
            414 =>
            array(
                'id' => 1915,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Trat',
                'full_name' => NULL,
                'code' => '23',
            ),
            415 =>
            array(
                'id' => 1916,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'full_name' => NULL,
                'code' => '14',
            ),
            416 =>
            array(
                'id' => 1917,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Trang',
                'full_name' => NULL,
                'code' => '92',
            ),
            417 =>
            array(
                'id' => 1918,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phetchaburi',
                'full_name' => NULL,
                'code' => '78',
            ),
            418 =>
            array(
                'id' => 1919,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nakhon Pathom',
                'full_name' => NULL,
                'code' => '73',
            ),
            419 =>
            array(
                'id' => 1920,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Kamphaeng Phet',
                'full_name' => NULL,
                'code' => '62',
            ),
            420 =>
            array(
                'id' => 1921,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Ang Thong',
                'full_name' => NULL,
                'code' => '15',
            ),
            421 =>
            array(
                'id' => 1922,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Lop Buri',
                'full_name' => NULL,
                'code' => '16',
            ),
            422 =>
            array(
                'id' => 1923,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Kalasin',
                'full_name' => NULL,
                'code' => '46',
            ),
            423 =>
            array(
                'id' => 1924,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Krabi',
                'full_name' => NULL,
                'code' => '81',
            ),
            424 =>
            array(
                'id' => 1925,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chanthaburi',
                'full_name' => NULL,
                'code' => '22',
            ),
            425 =>
            array(
                'id' => 1926,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Khon Kaen',
                'full_name' => NULL,
                'code' => '40',
            ),
            426 =>
            array(
                'id' => 1927,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Rayong',
                'full_name' => NULL,
                'code' => '21',
            ),
            427 =>
            array(
                'id' => 1928,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nong Khai',
                'full_name' => NULL,
                'code' => '43',
            ),
            428 =>
            array(
                'id' => 1929,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nong Bua Lamphu',
                'full_name' => NULL,
                'code' => '39',
            ),
            429 =>
            array(
                'id' => 1930,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Ratchaburi',
                'full_name' => NULL,
                'code' => '70',
            ),
            430 =>
            array(
                'id' => 1931,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Loei',
                'full_name' => NULL,
                'code' => '42',
            ),
            431 =>
            array(
                'id' => 1932,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Roi Et',
                'full_name' => NULL,
                'code' => '45',
            ),
            432 =>
            array(
                'id' => 1933,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Samut Sakhon',
                'full_name' => NULL,
                'code' => '74',
            ),
            433 =>
            array(
                'id' => 1934,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Ranong',
                'full_name' => NULL,
                'code' => '85',
            ),
            434 =>
            array(
                'id' => 1935,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nakhon Si Thammarat',
                'full_name' => NULL,
                'code' => '80',
            ),
            435 =>
            array(
                'id' => 1936,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Maha Sarakham',
                'full_name' => NULL,
                'code' => '44',
            ),
            436 =>
            array(
                'id' => 1937,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Bangkok',
                'full_name' => NULL,
                'code' => '10',
            ),
            437 =>
            array(
                'id' => 1938,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Mukdahan',
                'full_name' => NULL,
                'code' => '49',
            ),
            438 =>
            array(
                'id' => 1939,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nakhon Nayok',
                'full_name' => NULL,
                'code' => '26',
            ),
            439 =>
            array(
                'id' => 1940,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nakhon Phanom',
                'full_name' => NULL,
                'code' => '48',
            ),
            440 =>
            array(
                'id' => 1941,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nan',
                'full_name' => NULL,
                'code' => '55',
            ),
            441 =>
            array(
                'id' => 1942,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Lamphun',
                'full_name' => NULL,
                'code' => '51',
            ),
            442 =>
            array(
                'id' => 1943,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Nonthaburi',
                'full_name' => NULL,
                'code' => '12',
            ),
            443 =>
            array(
                'id' => 1944,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phrae',
                'full_name' => NULL,
                'code' => '54',
            ),
            444 =>
            array(
                'id' => 1945,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phayao',
                'full_name' => NULL,
                'code' => '56',
            ),
            445 =>
            array(
                'id' => 1946,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phangnga',
                'full_name' => NULL,
                'code' => '82',
            ),
            446 =>
            array(
                'id' => 1947,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phitsanulok',
                'full_name' => NULL,
                'code' => '65',
            ),
            447 =>
            array(
                'id' => 1948,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phichit',
                'full_name' => NULL,
                'code' => '66',
            ),
            448 =>
            array(
                'id' => 1949,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Phuket',
                'full_name' => NULL,
                'code' => '83',
            ),
            449 =>
            array(
                'id' => 1950,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chiang Rai',
                'full_name' => NULL,
                'code' => '57',
            ),
            450 =>
            array(
                'id' => 1951,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Chiang Mai',
                'full_name' => NULL,
                'code' => '50',
            ),
            451 =>
            array(
                'id' => 1952,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Sakon Nakhon',
                'full_name' => NULL,
                'code' => '47',
            ),
            452 =>
            array(
                'id' => 1953,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Satun',
                'full_name' => NULL,
                'code' => '91',
            ),
            453 =>
            array(
                'id' => 1954,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Sa Kaeo',
                'full_name' => NULL,
                'code' => '27',
            ),
            454 =>
            array(
                'id' => 1955,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Si sa ket',
                'full_name' => NULL,
                'code' => '33',
            ),
            455 =>
            array(
                'id' => 1956,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Songkhla',
                'full_name' => NULL,
                'code' => '90',
            ),
            456 =>
            array(
                'id' => 1957,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Sukhothai',
                'full_name' => NULL,
                'code' => '64',
            ),
            457 =>
            array(
                'id' => 1958,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Surat Thani',
                'full_name' => NULL,
                'code' => '84',
            ),
            458 =>
            array(
                'id' => 1959,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Surin',
                'full_name' => NULL,
                'code' => '32',
            ),
            459 =>
            array(
                'id' => 1960,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Suphan Buri',
                'full_name' => NULL,
                'code' => '72',
            ),
            460 =>
            array(
                'id' => 1961,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Narathiwat',
                'full_name' => NULL,
                'code' => '96',
            ),
            461 =>
            array(
                'id' => 1962,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Udon Thani',
                'full_name' => NULL,
                'code' => '41',
            ),
            462 =>
            array(
                'id' => 1963,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Uthai Thani',
                'full_name' => NULL,
                'code' => '61',
            ),
            463 =>
            array(
                'id' => 1964,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Ubon Ratchathani',
                'full_name' => NULL,
                'code' => '34',
            ),
            464 =>
            array(
                'id' => 1965,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Buri Ram',
                'full_name' => NULL,
                'code' => '31',
            ),
            465 =>
            array(
                'id' => 1966,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Sing Buri',
                'full_name' => NULL,
                'code' => '17',
            ),
            466 =>
            array(
                'id' => 1967,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Yasothon',
                'full_name' => NULL,
                'code' => '35',
            ),
            467 =>
            array(
                'id' => 1968,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Yala',
                'full_name' => NULL,
                'code' => '95',
            ),
            468 =>
            array(
                'id' => 1969,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Mae Hong Son',
                'full_name' => NULL,
                'code' => '58',
            ),
            469 =>
            array(
                'id' => 1970,
                'country_id' => 66,
                'division_id' => NULL,
                'name' => 'Samut Songkhram',
                'full_name' => NULL,
                'code' => '75',
            ),
            470 =>
            array(
                'id' => 1971,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Arusha',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            471 =>
            array(
                'id' => 1972,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kaskazini Pemba',
                'full_name' => NULL,
                'code' => 'pn',
            ),
            472 =>
            array(
                'id' => 1973,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kusini Pemba',
                'full_name' => NULL,
                'code' => 'ps',
            ),
            473 =>
            array(
                'id' => 1974,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Pwani',
                'full_name' => NULL,
                'code' => 'pw',
            ),
            474 =>
            array(
                'id' => 1975,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Dar es Salaam',
                'full_name' => NULL,
                'code' => 'ds',
            ),
            475 =>
            array(
                'id' => 1976,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Dodoma',
                'full_name' => NULL,
                'code' => 'do',
            ),
            476 =>
            array(
                'id' => 1977,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kigoma',
                'full_name' => NULL,
                'code' => 'ki',
            ),
            477 =>
            array(
                'id' => 1978,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kagera',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            478 =>
            array(
                'id' => 1979,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Lindi',
                'full_name' => NULL,
                'code' => 'ln',
            ),
            479 =>
            array(
                'id' => 1980,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Rukwa',
                'full_name' => NULL,
                'code' => 'rk',
            ),
            480 =>
            array(
                'id' => 1981,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Ruvuma',
                'full_name' => NULL,
                'code' => 'rv',
            ),
            481 =>
            array(
                'id' => 1982,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Mara',
                'full_name' => NULL,
                'code' => 'mr',
            ),
            482 =>
            array(
                'id' => 1983,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Manyara',
                'full_name' => NULL,
                'code' => 'my',
            ),
            483 =>
            array(
                'id' => 1984,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Morogoro',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            484 =>
            array(
                'id' => 1985,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Mbeya',
                'full_name' => NULL,
                'code' => 'mb',
            ),
            485 =>
            array(
                'id' => 1986,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Mtwara',
                'full_name' => NULL,
                'code' => 'mt',
            ),
            486 =>
            array(
                'id' => 1987,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Mwanza',
                'full_name' => NULL,
                'code' => 'mw',
            ),
            487 =>
            array(
                'id' => 1988,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kilimanjaro',
                'full_name' => NULL,
                'code' => 'kj',
            ),
            488 =>
            array(
                'id' => 1989,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Zanzibar',
                'full_name' => NULL,
                'code' => 'zn',
            ),
            489 =>
            array(
                'id' => 1990,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kaskazini Unguja',
                'full_name' => NULL,
                'code' => 'un',
            ),
            490 =>
            array(
                'id' => 1991,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Kusini Unguja',
                'full_name' => NULL,
                'code' => 'us',
            ),
            491 =>
            array(
                'id' => 1992,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Mjini Magharibi',
                'full_name' => NULL,
                'code' => 'mm',
            ),
            492 =>
            array(
                'id' => 1993,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Tabora',
                'full_name' => NULL,
                'code' => 'tb',
            ),
            493 =>
            array(
                'id' => 1994,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Tanga',
                'full_name' => NULL,
                'code' => 'tn',
            ),
            494 =>
            array(
                'id' => 1995,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Singida',
                'full_name' => NULL,
                'code' => 'si',
            ),
            495 =>
            array(
                'id' => 1996,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Shinyanga',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            496 =>
            array(
                'id' => 1997,
                'country_id' => 20,
                'division_id' => NULL,
                'name' => 'Iringa',
                'full_name' => NULL,
                'code' => 'ir',
            ),
            497 =>
            array(
                'id' => 1998,
                'country_id' => 169,
                'division_id' => NULL,
                'name' => 'Eua',
                'full_name' => NULL,
                'code' => 'e',
            ),
            498 =>
            array(
                'id' => 1999,
                'country_id' => 169,
                'division_id' => NULL,
                'name' => 'Haapai',
                'full_name' => NULL,
                'code' => 'h',
            ),
            499 =>
            array(
                'id' => 2000,
                'country_id' => 169,
                'division_id' => NULL,
                'name' => 'Niuas',
                'full_name' => NULL,
                'code' => 'n',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 2001,
                'country_id' => 169,
                'division_id' => NULL,
                'name' => 'Tongatapu',
                'full_name' => NULL,
                'code' => 't',
            ),
            1 =>
            array(
                'id' => 2002,
                'country_id' => 169,
                'division_id' => NULL,
                'name' => 'Vavau',
                'full_name' => NULL,
                'code' => 'v',
            ),
            2 =>
            array(
                'id' => 2003,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Ariana',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            3 =>
            array(
                'id' => 2004,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Beja',
                'full_name' => NULL,
                'code' => 'bj',
            ),
            4 =>
            array(
                'id' => 2005,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Ben Arous',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            5 =>
            array(
                'id' => 2006,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Bizerte',
                'full_name' => NULL,
                'code' => 'bi',
            ),
            6 =>
            array(
                'id' => 2007,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Kebili',
                'full_name' => NULL,
                'code' => 'kb',
            ),
            7 =>
            array(
                'id' => 2008,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Gabes',
                'full_name' => NULL,
                'code' => 'gb',
            ),
            8 =>
            array(
                'id' => 2009,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Gafsa',
                'full_name' => NULL,
                'code' => 'gf',
            ),
            9 =>
            array(
                'id' => 2010,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Jendouba',
                'full_name' => NULL,
                'code' => 'je',
            ),
            10 =>
            array(
                'id' => 2011,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Le Kef',
                'full_name' => NULL,
                'code' => 'lk',
            ),
            11 =>
            array(
                'id' => 2012,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Kasserine',
                'full_name' => NULL,
                'code' => 'ks',
            ),
            12 =>
            array(
                'id' => 2013,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Kairouan',
                'full_name' => NULL,
                'code' => 'kr',
            ),
            13 =>
            array(
                'id' => 2014,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Mahdia',
                'full_name' => NULL,
                'code' => 'mh',
            ),
            14 =>
            array(
                'id' => 2015,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Manouba',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            15 =>
            array(
                'id' => 2016,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Medenine',
                'full_name' => NULL,
                'code' => 'me',
            ),
            16 =>
            array(
                'id' => 2017,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Monastir',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            17 =>
            array(
                'id' => 2018,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Nabeul',
                'full_name' => NULL,
                'code' => 'na',
            ),
            18 =>
            array(
                'id' => 2019,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Sfax',
                'full_name' => NULL,
                'code' => 'sf',
            ),
            19 =>
            array(
                'id' => 2020,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Sousse',
                'full_name' => NULL,
                'code' => 'so',
            ),
            20 =>
            array(
                'id' => 2021,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Tataouine',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            21 =>
            array(
                'id' => 2022,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Tunis',
                'full_name' => NULL,
                'code' => 'tu',
            ),
            22 =>
            array(
                'id' => 2023,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Tozeur',
                'full_name' => NULL,
                'code' => 'to',
            ),
            23 =>
            array(
                'id' => 2024,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Sidi Bouzid',
                'full_name' => NULL,
                'code' => 'sd',
            ),
            24 =>
            array(
                'id' => 2025,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Siliana',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            25 =>
            array(
                'id' => 2026,
                'country_id' => 38,
                'division_id' => NULL,
                'name' => 'Zaghouan',
                'full_name' => NULL,
                'code' => 'za',
            ),
            26 =>
            array(
                'id' => 2027,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Adana',
                'full_name' => NULL,
                'code' => 'ada',
            ),
            27 =>
            array(
                'id' => 2028,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Adıyaman',
                'full_name' => NULL,
                'code' => 'adi',
            ),
            28 =>
            array(
                'id' => 2029,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Ardahan',
                'full_name' => NULL,
                'code' => 'ard',
            ),
            29 =>
            array(
                'id' => 2030,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Artvin',
                'full_name' => NULL,
                'code' => 'art',
            ),
            30 =>
            array(
                'id' => 2031,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Afyon',
                'full_name' => NULL,
                'code' => 'afy',
            ),
            31 =>
            array(
                'id' => 2032,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Aksaray',
                'full_name' => NULL,
                'code' => 'aks',
            ),
            32 =>
            array(
                'id' => 2033,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Ağrı',
                'full_name' => NULL,
                'code' => 'agr',
            ),
            33 =>
            array(
                'id' => 2034,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Amasya',
                'full_name' => NULL,
                'code' => 'ama',
            ),
            34 =>
            array(
                'id' => 2035,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Edirne',
                'full_name' => NULL,
                'code' => 'edi',
            ),
            35 =>
            array(
                'id' => 2036,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Erzincan',
                'full_name' => NULL,
                'code' => 'ezc',
            ),
            36 =>
            array(
                'id' => 2037,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Erzurum',
                'full_name' => NULL,
                'code' => 'ezr',
            ),
            37 =>
            array(
                'id' => 2038,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Elazığ',
                'full_name' => NULL,
                'code' => 'ela',
            ),
            38 =>
            array(
                'id' => 2039,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Eskişehir',
                'full_name' => NULL,
                'code' => 'esk',
            ),
            39 =>
            array(
                'id' => 2040,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Aydin',
                'full_name' => NULL,
                'code' => 'ayi',
            ),
            40 =>
            array(
                'id' => 2041,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Ankara',
                'full_name' => NULL,
                'code' => 'ank',
            ),
            41 =>
            array(
                'id' => 2042,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Antalya',
                'full_name' => NULL,
                'code' => 'ant',
            ),
            42 =>
            array(
                'id' => 2043,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Ordu',
                'full_name' => NULL,
                'code' => 'ord',
            ),
            43 =>
            array(
                'id' => 2044,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bartın',
                'full_name' => NULL,
                'code' => 'bar',
            ),
            44 =>
            array(
                'id' => 2045,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Balıkesir',
                'full_name' => NULL,
                'code' => 'bal',
            ),
            45 =>
            array(
                'id' => 2046,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Batman',
                'full_name' => NULL,
                'code' => 'bat',
            ),
            46 =>
            array(
                'id' => 2047,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bayburt',
                'full_name' => NULL,
                'code' => 'bay',
            ),
            47 =>
            array(
                'id' => 2048,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bilecik',
                'full_name' => NULL,
                'code' => 'bil',
            ),
            48 =>
            array(
                'id' => 2049,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bitlis',
                'full_name' => NULL,
                'code' => 'bit',
            ),
            49 =>
            array(
                'id' => 2050,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bingol',
                'full_name' => NULL,
                'code' => 'bin',
            ),
            50 =>
            array(
                'id' => 2051,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bolu',
                'full_name' => NULL,
                'code' => 'bol',
            ),
            51 =>
            array(
                'id' => 2052,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Burdur',
                'full_name' => NULL,
                'code' => 'brd',
            ),
            52 =>
            array(
                'id' => 2053,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Bursa',
                'full_name' => NULL,
                'code' => 'brs',
            ),
            53 =>
            array(
                'id' => 2054,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Çankırı',
                'full_name' => NULL,
                'code' => 'ckr',
            ),
            54 =>
            array(
                'id' => 2055,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Denizli',
                'full_name' => NULL,
                'code' => 'den',
            ),
            55 =>
            array(
                'id' => 2056,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Diyarbakır',
                'full_name' => NULL,
                'code' => 'diy',
            ),
            56 =>
            array(
                'id' => 2057,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Van',
                'full_name' => NULL,
                'code' => 'van',
            ),
            57 =>
            array(
                'id' => 2058,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Hakkari',
                'full_name' => NULL,
                'code' => 'hkr',
            ),
            58 =>
            array(
                'id' => 2059,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Hatay',
                'full_name' => NULL,
                'code' => 'hty',
            ),
            59 =>
            array(
                'id' => 2060,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kilis',
                'full_name' => NULL,
                'code' => 'kls',
            ),
            60 =>
            array(
                'id' => 2061,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Giresun',
                'full_name' => NULL,
                'code' => 'gir',
            ),
            61 =>
            array(
                'id' => 2062,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Gaziantep',
                'full_name' => NULL,
                'code' => 'gaz',
            ),
            62 =>
            array(
                'id' => 2063,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Gümüşhane',
                'full_name' => NULL,
                'code' => 'gms',
            ),
            63 =>
            array(
                'id' => 2064,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kars',
                'full_name' => NULL,
                'code' => 'krs',
            ),
            64 =>
            array(
                'id' => 2065,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kahramanmaraş',
                'full_name' => NULL,
                'code' => 'kah',
            ),
            65 =>
            array(
                'id' => 2066,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Karabük',
                'full_name' => NULL,
                'code' => 'krb',
            ),
            66 =>
            array(
                'id' => 2067,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Karaman',
                'full_name' => NULL,
                'code' => 'krm',
            ),
            67 =>
            array(
                'id' => 2068,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kastamonu',
                'full_name' => NULL,
                'code' => 'kas',
            ),
            68 =>
            array(
                'id' => 2069,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kayseri',
                'full_name' => NULL,
                'code' => 'kay',
            ),
            69 =>
            array(
                'id' => 2070,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kocaeli',
                'full_name' => NULL,
                'code' => 'koc',
            ),
            70 =>
            array(
                'id' => 2071,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kırklareli',
                'full_name' => NULL,
                'code' => 'klr',
            ),
            71 =>
            array(
                'id' => 2072,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Konya',
                'full_name' => NULL,
                'code' => 'kon',
            ),
            72 =>
            array(
                'id' => 2073,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kırşehir',
                'full_name' => NULL,
                'code' => 'krh',
            ),
            73 =>
            array(
                'id' => 2074,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kırıkkale',
                'full_name' => NULL,
                'code' => 'krk',
            ),
            74 =>
            array(
                'id' => 2075,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Urfa',
                'full_name' => NULL,
                'code' => 'urf',
            ),
            75 =>
            array(
                'id' => 2076,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Rize',
                'full_name' => NULL,
                'code' => 'riz',
            ),
            76 =>
            array(
                'id' => 2077,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Mardin',
                'full_name' => NULL,
                'code' => 'mar',
            ),
            77 =>
            array(
                'id' => 2078,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Malatya',
                'full_name' => NULL,
                'code' => 'mal',
            ),
            78 =>
            array(
                'id' => 2079,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Manisa',
                'full_name' => NULL,
                'code' => 'man',
            ),
            79 =>
            array(
                'id' => 2080,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Muğla',
                'full_name' => NULL,
                'code' => 'mug',
            ),
            80 =>
            array(
                'id' => 2081,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Muş',
                'full_name' => NULL,
                'code' => 'mus',
            ),
            81 =>
            array(
                'id' => 2082,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Nevşehir',
                'full_name' => NULL,
                'code' => 'nev',
            ),
            82 =>
            array(
                'id' => 2083,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Niğde',
                'full_name' => NULL,
                'code' => 'nig',
            ),
            83 =>
            array(
                'id' => 2084,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Çanakkale',
                'full_name' => NULL,
                'code' => 'ckl',
            ),
            84 =>
            array(
                'id' => 2085,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Çorum',
                'full_name' => NULL,
                'code' => 'cor',
            ),
            85 =>
            array(
                'id' => 2086,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Kütahya',
                'full_name' => NULL,
                'code' => 'kut',
            ),
            86 =>
            array(
                'id' => 2087,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Sakarya',
                'full_name' => NULL,
                'code' => 'sak',
            ),
            87 =>
            array(
                'id' => 2088,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Samsun',
                'full_name' => NULL,
                'code' => 'sam',
            ),
            88 =>
            array(
                'id' => 2089,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Tekirdağ',
                'full_name' => NULL,
                'code' => 'tel',
            ),
            89 =>
            array(
                'id' => 2090,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Trabzon',
                'full_name' => NULL,
                'code' => 'tra',
            ),
            90 =>
            array(
                'id' => 2091,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Tunceli',
                'full_name' => NULL,
                'code' => 'tun',
            ),
            91 =>
            array(
                'id' => 2092,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Tokat',
                'full_name' => NULL,
                'code' => 'tok',
            ),
            92 =>
            array(
                'id' => 2093,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Uşak',
                'full_name' => NULL,
                'code' => 'usk',
            ),
            93 =>
            array(
                'id' => 2094,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Şırnak',
                'full_name' => NULL,
                'code' => 'sir',
            ),
            94 =>
            array(
                'id' => 2095,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Siirt',
                'full_name' => NULL,
                'code' => 'sii',
            ),
            95 =>
            array(
                'id' => 2096,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Sinop',
                'full_name' => NULL,
                'code' => 'sin',
            ),
            96 =>
            array(
                'id' => 2097,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Sivas',
                'full_name' => NULL,
                'code' => 'siv',
            ),
            97 =>
            array(
                'id' => 2098,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Iğdır',
                'full_name' => NULL,
                'code' => 'igd',
            ),
            98 =>
            array(
                'id' => 2099,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Mersin',
                'full_name' => NULL,
                'code' => 'ice',
            ),
            99 =>
            array(
                'id' => 2100,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Isparta',
                'full_name' => NULL,
                'code' => 'isp',
            ),
            100 =>
            array(
                'id' => 2101,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'İstanbul',
                'full_name' => NULL,
                'code' => 'ist',
            ),
            101 =>
            array(
                'id' => 2102,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'İzmir',
                'full_name' => NULL,
                'code' => 'izm',
            ),
            102 =>
            array(
                'id' => 2103,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Yozgat',
                'full_name' => NULL,
                'code' => 'yoz',
            ),
            103 =>
            array(
                'id' => 2104,
                'country_id' => 134,
                'division_id' => NULL,
                'name' => 'Zonguldak',
                'full_name' => NULL,
                'code' => 'zon',
            ),
            104 =>
            array(
                'id' => 2105,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Ahal',
                'full_name' => NULL,
                'code' => 'a',
            ),
            105 =>
            array(
                'id' => 2106,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Ashgabat',
                'full_name' => NULL,
                'code' => 'asb',
            ),
            106 =>
            array(
                'id' => 2107,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Balkan',
                'full_name' => NULL,
                'code' => 'b',
            ),
            107 =>
            array(
                'id' => 2108,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Dashoguz',
                'full_name' => NULL,
                'code' => 'd',
            ),
            108 =>
            array(
                'id' => 2109,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Lebap',
                'full_name' => NULL,
                'code' => 'l',
            ),
            109 =>
            array(
                'id' => 2110,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Mary',
                'full_name' => NULL,
                'code' => 'm',
            ),
            110 =>
            array(
                'id' => 2111,
                'country_id' => 95,
                'division_id' => NULL,
                'name' => 'Nebitdag',
                'full_name' => NULL,
                'code' => 'neb',
            ),
            111 =>
            array(
                'id' => 2112,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Malampa',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            112 =>
            array(
                'id' => 2113,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Penama',
                'full_name' => NULL,
                'code' => 'pe',
            ),
            113 =>
            array(
                'id' => 2114,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Sanma',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            114 =>
            array(
                'id' => 2115,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Tafea',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            115 =>
            array(
                'id' => 2116,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Torba',
                'full_name' => NULL,
                'code' => 'to',
            ),
            116 =>
            array(
                'id' => 2117,
                'country_id' => 174,
                'division_id' => NULL,
                'name' => 'Shefa',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            117 =>
            array(
                'id' => 2118,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'El Progreso',
                'full_name' => NULL,
                'code' => 'pr',
            ),
            118 =>
            array(
                'id' => 2119,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Escuintla',
                'full_name' => NULL,
                'code' => 'es',
            ),
            119 =>
            array(
                'id' => 2120,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Jalapa',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            120 =>
            array(
                'id' => 2121,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Jutiapa',
                'full_name' => NULL,
                'code' => 'ju',
            ),
            121 =>
            array(
                'id' => 2122,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Quiche',
                'full_name' => NULL,
                'code' => 'qc',
            ),
            122 =>
            array(
                'id' => 2123,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Quetzaltenango',
                'full_name' => NULL,
                'code' => 'qz',
            ),
            123 =>
            array(
                'id' => 2124,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Retalhuleu',
                'full_name' => NULL,
                'code' => 're',
            ),
            124 =>
            array(
                'id' => 2125,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Mixco',
                'full_name' => NULL,
                'code' => 'mix',
            ),
            125 =>
            array(
                'id' => 2126,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Peten',
                'full_name' => NULL,
                'code' => 'pe',
            ),
            126 =>
            array(
                'id' => 2127,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Chiquimula',
                'full_name' => NULL,
                'code' => 'cq',
            ),
            127 =>
            array(
                'id' => 2128,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Chimaltenango',
                'full_name' => NULL,
                'code' => 'cm',
            ),
            128 =>
            array(
                'id' => 2129,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Zacapa',
                'full_name' => NULL,
                'code' => 'za',
            ),
            129 =>
            array(
                'id' => 2130,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Sacatepequez',
                'full_name' => NULL,
                'code' => 'st',
            ),
            130 =>
            array(
                'id' => 2131,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Alta Verapaz',
                'full_name' => NULL,
                'code' => 'av',
            ),
            131 =>
            array(
                'id' => 2132,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Santa Rosa',
                'full_name' => NULL,
                'code' => 'sr',
            ),
            132 =>
            array(
                'id' => 2133,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'San Marcos',
                'full_name' => NULL,
                'code' => 'sm',
            ),
            133 =>
            array(
                'id' => 2134,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Suchitepequez',
                'full_name' => NULL,
                'code' => 'su',
            ),
            134 =>
            array(
                'id' => 2135,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Solola',
                'full_name' => NULL,
                'code' => 'so',
            ),
            135 =>
            array(
                'id' => 2136,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Totonicapan',
                'full_name' => NULL,
                'code' => 'to',
            ),
            136 =>
            array(
                'id' => 2137,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Guatemala',
                'full_name' => NULL,
                'code' => 'gu',
            ),
            137 =>
            array(
                'id' => 2138,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Huehuetenango',
                'full_name' => NULL,
                'code' => 'hu',
            ),
            138 =>
            array(
                'id' => 2139,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Baja Verapaz',
                'full_name' => NULL,
                'code' => 'bv',
            ),
            139 =>
            array(
                'id' => 2140,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Villa Nueva',
                'full_name' => NULL,
                'code' => 'vin',
            ),
            140 =>
            array(
                'id' => 2141,
                'country_id' => 114,
                'division_id' => NULL,
                'name' => 'Izabal',
                'full_name' => NULL,
                'code' => 'iz',
            ),
            141 =>
            array(
                'id' => 2142,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Aragua',
                'full_name' => NULL,
                'code' => 'd',
            ),
            142 =>
            array(
                'id' => 2143,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Delta Amacuro',
                'full_name' => NULL,
                'code' => 'y',
            ),
            143 =>
            array(
                'id' => 2144,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Apure',
                'full_name' => NULL,
                'code' => 'c',
            ),
            144 =>
            array(
                'id' => 2145,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Anzoategui',
                'full_name' => NULL,
                'code' => 'b',
            ),
            145 =>
            array(
                'id' => 2146,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Barinas',
                'full_name' => NULL,
                'code' => 'e',
            ),
            146 =>
            array(
                'id' => 2147,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Bolivar',
                'full_name' => NULL,
                'code' => 'f',
            ),
            147 =>
            array(
                'id' => 2148,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Portuguesa',
                'full_name' => NULL,
                'code' => 'p',
            ),
            148 =>
            array(
                'id' => 2149,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Falcon',
                'full_name' => NULL,
                'code' => 'i',
            ),
            149 =>
            array(
                'id' => 2150,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Guarico',
                'full_name' => NULL,
                'code' => 'j',
            ),
            150 =>
            array(
                'id' => 2151,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Caracas',
                'full_name' => NULL,
                'code' => 'a',
            ),
            151 =>
            array(
                'id' => 2152,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Carabobo',
                'full_name' => NULL,
                'code' => 'g',
            ),
            152 =>
            array(
                'id' => 2153,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Cojedes',
                'full_name' => NULL,
                'code' => 'h',
            ),
            153 =>
            array(
                'id' => 2154,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Lara',
                'full_name' => NULL,
                'code' => 'k',
            ),
            154 =>
            array(
                'id' => 2155,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Dependencias Federales',
                'full_name' => NULL,
                'code' => 'w',
            ),
            155 =>
            array(
                'id' => 2156,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Merida',
                'full_name' => NULL,
                'code' => 'l',
            ),
            156 =>
            array(
                'id' => 2157,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Miranda',
                'full_name' => NULL,
                'code' => 'm',
            ),
            157 =>
            array(
                'id' => 2158,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Monagas',
                'full_name' => NULL,
                'code' => 'n',
            ),
            158 =>
            array(
                'id' => 2159,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Sucre',
                'full_name' => NULL,
                'code' => 'r',
            ),
            159 =>
            array(
                'id' => 2160,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Zulia',
                'full_name' => NULL,
                'code' => 'v',
            ),
            160 =>
            array(
                'id' => 2161,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Tachira',
                'full_name' => NULL,
                'code' => 's',
            ),
            161 =>
            array(
                'id' => 2162,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Trujillo',
                'full_name' => NULL,
                'code' => 't',
            ),
            162 =>
            array(
                'id' => 2163,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Estado Nueva Esparta',
                'full_name' => NULL,
                'code' => 'o',
            ),
            163 =>
            array(
                'id' => 2164,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Yaracuy',
                'full_name' => NULL,
                'code' => 'u',
            ),
            164 =>
            array(
                'id' => 2165,
                'country_id' => 192,
                'division_id' => NULL,
                'name' => 'Amazonas',
                'full_name' => NULL,
                'code' => 'z',
            ),
            165 =>
            array(
                'id' => 2166,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Arua',
                'full_name' => NULL,
                'code' => 'aru',
            ),
            166 =>
            array(
                'id' => 2167,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Apac',
                'full_name' => NULL,
                'code' => 'apc',
            ),
            167 =>
            array(
                'id' => 2168,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Adjumani',
                'full_name' => NULL,
                'code' => 'adj',
            ),
            168 =>
            array(
                'id' => 2169,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Bundibugyo',
                'full_name' => NULL,
                'code' => 'bun',
            ),
            169 =>
            array(
                'id' => 2170,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Bugiri',
                'full_name' => NULL,
                'code' => 'bug',
            ),
            170 =>
            array(
                'id' => 2171,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Busia',
                'full_name' => NULL,
                'code' => 'bus',
            ),
            171 =>
            array(
                'id' => 2172,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Bushenyi',
                'full_name' => NULL,
                'code' => 'bsh',
            ),
            172 =>
            array(
                'id' => 2173,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Ntungamo',
                'full_name' => NULL,
                'code' => 'ntu',
            ),
            173 =>
            array(
                'id' => 2174,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Gulu',
                'full_name' => NULL,
                'code' => 'gul',
            ),
            174 =>
            array(
                'id' => 2175,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Hoima',
                'full_name' => NULL,
                'code' => 'hoi',
            ),
            175 =>
            array(
                'id' => 2176,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kibaale',
                'full_name' => NULL,
                'code' => 'kba',
            ),
            176 =>
            array(
                'id' => 2177,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kiboga',
                'full_name' => NULL,
                'code' => 'kib',
            ),
            177 =>
            array(
                'id' => 2178,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kyenjojo',
                'full_name' => NULL,
                'code' => 'kye',
            ),
            178 =>
            array(
                'id' => 2179,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kisoro',
                'full_name' => NULL,
                'code' => 'kis',
            ),
            179 =>
            array(
                'id' => 2180,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kitgum',
                'full_name' => NULL,
                'code' => 'kit',
            ),
            180 =>
            array(
                'id' => 2181,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Jinja',
                'full_name' => NULL,
                'code' => 'jin',
            ),
            181 =>
            array(
                'id' => 2182,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kabale',
                'full_name' => NULL,
                'code' => 'kbl',
            ),
            182 =>
            array(
                'id' => 2183,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kabarole',
                'full_name' => NULL,
                'code' => 'kar',
            ),
            183 =>
            array(
                'id' => 2184,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kaberamaido',
                'full_name' => NULL,
                'code' => 'kab',
            ),
            184 =>
            array(
                'id' => 2185,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kalangala',
                'full_name' => NULL,
                'code' => 'kal',
            ),
            185 =>
            array(
                'id' => 2186,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kamwenge',
                'full_name' => NULL,
                'code' => 'kam',
            ),
            186 =>
            array(
                'id' => 2187,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kamuli',
                'full_name' => NULL,
                'code' => 'kml',
            ),
            187 =>
            array(
                'id' => 2188,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kanungu',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            188 =>
            array(
                'id' => 2189,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kapchorwa',
                'full_name' => NULL,
                'code' => 'kpc',
            ),
            189 =>
            array(
                'id' => 2190,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kasese',
                'full_name' => NULL,
                'code' => 'kas',
            ),
            190 =>
            array(
                'id' => 2191,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Katakwi',
                'full_name' => NULL,
                'code' => 'ktk',
            ),
            191 =>
            array(
                'id' => 2192,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kayunga',
                'full_name' => NULL,
                'code' => 'kay',
            ),
            192 =>
            array(
                'id' => 2193,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kampala',
                'full_name' => NULL,
                'code' => 'kmp',
            ),
            193 =>
            array(
                'id' => 2194,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kotido',
                'full_name' => NULL,
                'code' => 'kot',
            ),
            194 =>
            array(
                'id' => 2195,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Kumi',
                'full_name' => NULL,
                'code' => 'kum',
            ),
            195 =>
            array(
                'id' => 2196,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Rakai',
                'full_name' => NULL,
                'code' => 'rak',
            ),
            196 =>
            array(
                'id' => 2197,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Lira',
                'full_name' => NULL,
                'code' => 'lir',
            ),
            197 =>
            array(
                'id' => 2198,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Luwero',
                'full_name' => NULL,
                'code' => 'luw',
            ),
            198 =>
            array(
                'id' => 2199,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Rukungiri',
                'full_name' => NULL,
                'code' => 'ruk',
            ),
            199 =>
            array(
                'id' => 2200,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Masaka',
                'full_name' => NULL,
                'code' => 'mas',
            ),
            200 =>
            array(
                'id' => 2201,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Masindi',
                'full_name' => NULL,
                'code' => 'msn',
            ),
            201 =>
            array(
                'id' => 2202,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mayuge',
                'full_name' => NULL,
                'code' => 'may',
            ),
            202 =>
            array(
                'id' => 2203,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Moroto',
                'full_name' => NULL,
                'code' => 'mrt',
            ),
            203 =>
            array(
                'id' => 2204,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Moyo',
                'full_name' => NULL,
                'code' => 'moy',
            ),
            204 =>
            array(
                'id' => 2205,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mbarara',
                'full_name' => NULL,
                'code' => 'mbr',
            ),
            205 =>
            array(
                'id' => 2206,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mbale',
                'full_name' => NULL,
                'code' => 'mba',
            ),
            206 =>
            array(
                'id' => 2207,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mpigi',
                'full_name' => NULL,
                'code' => 'mpi',
            ),
            207 =>
            array(
                'id' => 2208,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mubende',
                'full_name' => NULL,
                'code' => 'mub',
            ),
            208 =>
            array(
                'id' => 2209,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Mukono',
                'full_name' => NULL,
                'code' => 'muk',
            ),
            209 =>
            array(
                'id' => 2210,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Nakapiripirit',
                'full_name' => NULL,
                'code' => 'nak',
            ),
            210 =>
            array(
                'id' => 2211,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Nakasongola',
                'full_name' => NULL,
                'code' => 'nks',
            ),
            211 =>
            array(
                'id' => 2212,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Nebbi',
                'full_name' => NULL,
                'code' => 'neb',
            ),
            212 =>
            array(
                'id' => 2213,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Pader',
                'full_name' => NULL,
                'code' => 'pad',
            ),
            213 =>
            array(
                'id' => 2214,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Pallisa',
                'full_name' => NULL,
                'code' => 'pal',
            ),
            214 =>
            array(
                'id' => 2215,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Sembabule',
                'full_name' => NULL,
                'code' => 'sem',
            ),
            215 =>
            array(
                'id' => 2216,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Soroti',
                'full_name' => NULL,
                'code' => 'sor',
            ),
            216 =>
            array(
                'id' => 2217,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Tororo',
                'full_name' => NULL,
                'code' => 'tor',
            ),
            217 =>
            array(
                'id' => 2218,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Wakiso',
                'full_name' => NULL,
                'code' => 'wak',
            ),
            218 =>
            array(
                'id' => 2219,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Sironko',
                'full_name' => NULL,
                'code' => 'sir',
            ),
            219 =>
            array(
                'id' => 2220,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Iganga',
                'full_name' => NULL,
                'code' => 'iga',
            ),
            220 =>
            array(
                'id' => 2221,
                'country_id' => 24,
                'division_id' => NULL,
                'name' => 'Yumbe',
                'full_name' => NULL,
                'code' => 'yum',
            ),
            221 =>
            array(
                'id' => 2222,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Odessa',
                'full_name' => NULL,
                'code' => '51',
            ),
            222 =>
            array(
                'id' => 2223,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Poltava',
                'full_name' => NULL,
                'code' => '53',
            ),
            223 =>
            array(
                'id' => 2224,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Dnipropetrovsk',
                'full_name' => NULL,
                'code' => '12',
            ),
            224 =>
            array(
                'id' => 2225,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Donetsk',
                'full_name' => NULL,
                'code' => '14',
            ),
            225 =>
            array(
                'id' => 2226,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Kharkiv',
                'full_name' => NULL,
                'code' => '63',
            ),
            226 =>
            array(
                'id' => 2227,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Khersonsrka',
                'full_name' => NULL,
                'code' => '65',
            ),
            227 =>
            array(
                'id' => 2228,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Khmelnytsky',
                'full_name' => NULL,
                'code' => '68',
            ),
            228 =>
            array(
                'id' => 2229,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Kyiv',
                'full_name' => NULL,
                'code' => '30',
            ),
            229 =>
            array(
                'id' => 2230,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Kirovohrad',
                'full_name' => NULL,
                'code' => '35',
            ),
            230 =>
            array(
                'id' => 2231,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Ternopil',
                'full_name' => NULL,
                'code' => '61',
            ),
            231 =>
            array(
                'id' => 2232,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Respublika Krym',
                'full_name' => NULL,
                'code' => '43',
            ),
            232 =>
            array(
                'id' => 2233,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Lviv',
                'full_name' => NULL,
                'code' => '46',
            ),
            233 =>
            array(
                'id' => 2234,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Luhansk',
                'full_name' => NULL,
                'code' => '9',
            ),
            234 =>
            array(
                'id' => 2235,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Rivne',
                'full_name' => NULL,
                'code' => '56',
            ),
            235 =>
            array(
                'id' => 2236,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Mykolayiv',
                'full_name' => NULL,
                'code' => '48',
            ),
            236 =>
            array(
                'id' => 2237,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Cherkasy',
                'full_name' => NULL,
                'code' => '71',
            ),
            237 =>
            array(
                'id' => 2238,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Chernihiv',
                'full_name' => NULL,
                'code' => '74',
            ),
            238 =>
            array(
                'id' => 2239,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Chernivtsi',
                'full_name' => NULL,
                'code' => '77',
            ),
            239 =>
            array(
                'id' => 2240,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Zhytomyr',
                'full_name' => NULL,
                'code' => '18',
            ),
            240 =>
            array(
                'id' => 2241,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Sumy',
                'full_name' => NULL,
                'code' => '59',
            ),
            241 =>
            array(
                'id' => 2242,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Zakarpatska',
                'full_name' => NULL,
                'code' => '21',
            ),
            242 =>
            array(
                'id' => 2243,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Vinnytsya',
                'full_name' => NULL,
                'code' => '5',
            ),
            243 =>
            array(
                'id' => 2244,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Volyn',
                'full_name' => NULL,
                'code' => '7',
            ),
            244 =>
            array(
                'id' => 2245,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Ivano-Frankivsk',
                'full_name' => NULL,
                'code' => '26',
            ),
            245 =>
            array(
                'id' => 2246,
                'country_id' => 120,
                'division_id' => NULL,
                'name' => 'Zaporizhzhya',
                'full_name' => NULL,
                'code' => '23',
            ),
            246 =>
            array(
                'id' => 2247,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Artigas',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            247 =>
            array(
                'id' => 2248,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Durazno',
                'full_name' => NULL,
                'code' => 'du',
            ),
            248 =>
            array(
                'id' => 2249,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Florida',
                'full_name' => NULL,
                'code' => 'fa',
            ),
            249 =>
            array(
                'id' => 2250,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Flores',
                'full_name' => NULL,
                'code' => 'fs',
            ),
            250 =>
            array(
                'id' => 2251,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Canelones',
                'full_name' => NULL,
                'code' => 'ca',
            ),
            251 =>
            array(
                'id' => 2252,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Colonia',
                'full_name' => NULL,
                'code' => 'co',
            ),
            252 =>
            array(
                'id' => 2253,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Lavalleja',
                'full_name' => NULL,
                'code' => 'la',
            ),
            253 =>
            array(
                'id' => 2254,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Rivera',
                'full_name' => NULL,
                'code' => 'rv',
            ),
            254 =>
            array(
                'id' => 2255,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Rocha',
                'full_name' => NULL,
                'code' => 'ro',
            ),
            255 =>
            array(
                'id' => 2256,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Maldonado',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            256 =>
            array(
                'id' => 2257,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Montevideo',
                'full_name' => NULL,
                'code' => 'mo',
            ),
            257 =>
            array(
                'id' => 2258,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Rio Negro',
                'full_name' => NULL,
                'code' => 'rn',
            ),
            258 =>
            array(
                'id' => 2259,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Paysandu',
                'full_name' => NULL,
                'code' => 'pa',
            ),
            259 =>
            array(
                'id' => 2260,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Salto',
                'full_name' => NULL,
                'code' => 'sl',
            ),
            260 =>
            array(
                'id' => 2261,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Cerro Largo',
                'full_name' => NULL,
                'code' => 'cl',
            ),
            261 =>
            array(
                'id' => 2262,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Treinta y Tres',
                'full_name' => NULL,
                'code' => 'tt',
            ),
            262 =>
            array(
                'id' => 2263,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'San Jose',
                'full_name' => NULL,
                'code' => 'sj',
            ),
            263 =>
            array(
                'id' => 2264,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Soriano',
                'full_name' => NULL,
                'code' => 'so',
            ),
            264 =>
            array(
                'id' => 2265,
                'country_id' => 193,
                'division_id' => NULL,
                'name' => 'Tacuarembo',
                'full_name' => NULL,
                'code' => 'taw',
            ),
            265 =>
            array(
                'id' => 2266,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Andijon',
                'full_name' => NULL,
                'code' => 'an',
            ),
            266 =>
            array(
                'id' => 2267,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Buxoro',
                'full_name' => NULL,
                'code' => 'bu',
            ),
            267 =>
            array(
                'id' => 2268,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Fargona',
                'full_name' => NULL,
                'code' => 'fa',
            ),
            268 =>
            array(
                'id' => 2269,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Xorazm',
                'full_name' => NULL,
                'code' => 'xo',
            ),
            269 =>
            array(
                'id' => 2270,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Jizzax',
                'full_name' => NULL,
                'code' => 'ji',
            ),
            270 =>
            array(
                'id' => 2271,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Qoraqalpogiston',
                'full_name' => NULL,
                'code' => 'qr',
            ),
            271 =>
            array(
                'id' => 2272,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Qasqadaryo',
                'full_name' => NULL,
                'code' => 'qa',
            ),
            272 =>
            array(
                'id' => 2273,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Namangan',
                'full_name' => NULL,
                'code' => 'ng',
            ),
            273 =>
            array(
                'id' => 2274,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Navoiy',
                'full_name' => NULL,
                'code' => 'nw',
            ),
            274 =>
            array(
                'id' => 2275,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Samarqand',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            275 =>
            array(
                'id' => 2276,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Surxondaryo',
                'full_name' => NULL,
                'code' => 'su',
            ),
            276 =>
            array(
                'id' => 2277,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Toshkent',
                'full_name' => NULL,
                'code' => 'tk',
            ),
            277 =>
            array(
                'id' => 2278,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Toshkent Shahri',
                'full_name' => NULL,
                'code' => 'to',
            ),
            278 =>
            array(
                'id' => 2279,
                'country_id' => 60,
                'division_id' => NULL,
                'name' => 'Sirdaryo',
                'full_name' => NULL,
                'code' => 'si',
            ),
            279 =>
            array(
                'id' => 2280,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Almeria',
                'full_name' => NULL,
                'code' => 'lei',
            ),
            280 =>
            array(
                'id' => 2281,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Albacete',
                'full_name' => NULL,
                'code' => 'alb',
            ),
            281 =>
            array(
                'id' => 2282,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Alava',
                'full_name' => NULL,
                'code' => 'ala',
            ),
            282 =>
            array(
                'id' => 2283,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Alicante',
                'full_name' => NULL,
                'code' => 'alc',
            ),
            283 =>
            array(
                'id' => 2284,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Asturias',
                'full_name' => NULL,
                'code' => 'ast',
            ),
            284 =>
            array(
                'id' => 2285,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Avila',
                'full_name' => NULL,
                'code' => 'avi',
            ),
            285 =>
            array(
                'id' => 2286,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Orense',
                'full_name' => NULL,
                'code' => 'ore',
            ),
            286 =>
            array(
                'id' => 2287,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Badajoz',
                'full_name' => NULL,
                'code' => 'bjz',
            ),
            287 =>
            array(
                'id' => 2288,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Baleares',
                'full_name' => NULL,
                'code' => 'blr',
            ),
            288 =>
            array(
                'id' => 2289,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Valladolid',
                'full_name' => NULL,
                'code' => 'vll',
            ),
            289 =>
            array(
                'id' => 2290,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Valencia',
                'full_name' => NULL,
                'code' => 'vlc',
            ),
            290 =>
            array(
                'id' => 2291,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Barcelona',
                'full_name' => NULL,
                'code' => 'bcn',
            ),
            291 =>
            array(
                'id' => 2292,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Vizcaya',
                'full_name' => NULL,
                'code' => 'vse',
            ),
            292 =>
            array(
                'id' => 2293,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Burgos',
                'full_name' => NULL,
                'code' => 'bur',
            ),
            293 =>
            array(
                'id' => 2294,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Granada',
                'full_name' => NULL,
                'code' => 'grx',
            ),
            294 =>
            array(
                'id' => 2295,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Guadalajara',
                'full_name' => NULL,
                'code' => 'gua',
            ),
            295 =>
            array(
                'id' => 2296,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Jaen',
                'full_name' => NULL,
                'code' => 'jae',
            ),
            296 =>
            array(
                'id' => 2297,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Gerona',
                'full_name' => NULL,
                'code' => 'gro',
            ),
            297 =>
            array(
                'id' => 2298,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Guipuzcoa',
                'full_name' => NULL,
                'code' => 'gui',
            ),
            298 =>
            array(
                'id' => 2299,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Cadiz',
                'full_name' => NULL,
                'code' => 'cad',
            ),
            299 =>
            array(
                'id' => 2300,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Caceres',
                'full_name' => NULL,
                'code' => 'ccs',
            ),
            300 =>
            array(
                'id' => 2301,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Cludad Real',
                'full_name' => NULL,
                'code' => 'cir',
            ),
            301 =>
            array(
                'id' => 2302,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Castellon',
                'full_name' => NULL,
                'code' => 'cas',
            ),
            302 =>
            array(
                'id' => 2303,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Cordoba',
                'full_name' => NULL,
                'code' => 'odb',
            ),
            303 =>
            array(
                'id' => 2304,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Cuenca',
                'full_name' => NULL,
                'code' => 'cue',
            ),
            304 =>
            array(
                'id' => 2305,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'La Coruna',
                'full_name' => NULL,
                'code' => 'lcg',
            ),
            305 =>
            array(
                'id' => 2306,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'La Rioja',
                'full_name' => NULL,
                'code' => 'arl',
            ),
            306 =>
            array(
                'id' => 2307,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Las Palmas',
                'full_name' => NULL,
                'code' => 'lpa',
            ),
            307 =>
            array(
                'id' => 2308,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Leon',
                'full_name' => NULL,
                'code' => 'len',
            ),
            308 =>
            array(
                'id' => 2309,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Lleida',
                'full_name' => NULL,
                'code' => 'lle',
            ),
            309 =>
            array(
                'id' => 2310,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Provincia de Lugo',
                'full_name' => NULL,
                'code' => 'lgo',
            ),
            310 =>
            array(
                'id' => 2311,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Madrid',
                'full_name' => NULL,
                'code' => 'mad',
            ),
            311 =>
            array(
                'id' => 2312,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Malaga',
                'full_name' => NULL,
                'code' => 'agp',
            ),
            312 =>
            array(
                'id' => 2313,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Murcia',
                'full_name' => NULL,
                'code' => 'mjv',
            ),
            313 =>
            array(
                'id' => 2314,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Navarra',
                'full_name' => NULL,
                'code' => 'nvv',
            ),
            314 =>
            array(
                'id' => 2315,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Palencia',
                'full_name' => NULL,
                'code' => 'pac',
            ),
            315 =>
            array(
                'id' => 2316,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Provincia de Pontevedra',
                'full_name' => NULL,
                'code' => 'pev',
            ),
            316 =>
            array(
                'id' => 2317,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Zaragoza',
                'full_name' => NULL,
                'code' => 'zaz',
            ),
            317 =>
            array(
                'id' => 2318,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Salamanca',
                'full_name' => NULL,
                'code' => 'slm',
            ),
            318 =>
            array(
                'id' => 2319,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Zamora',
                'full_name' => NULL,
                'code' => 'zmr',
            ),
            319 =>
            array(
                'id' => 2320,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Segovia',
                'full_name' => NULL,
                'code' => 'seg',
            ),
            320 =>
            array(
                'id' => 2321,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Sevilla',
                'full_name' => NULL,
                'code' => 'svq',
            ),
            321 =>
            array(
                'id' => 2322,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Santander',
                'full_name' => NULL,
                'code' => 'sdr',
            ),
            322 =>
            array(
                'id' => 2323,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Santa Cruz de Tenerife',
                'full_name' => NULL,
                'code' => 'sct',
            ),
            323 =>
            array(
                'id' => 2324,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Soria',
                'full_name' => NULL,
                'code' => 'sor',
            ),
            324 =>
            array(
                'id' => 2325,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Tarragona',
                'full_name' => NULL,
                'code' => 'tar',
            ),
            325 =>
            array(
                'id' => 2326,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Teruel',
                'full_name' => NULL,
                'code' => 'ter',
            ),
            326 =>
            array(
                'id' => 2327,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Toledo',
                'full_name' => NULL,
                'code' => 'tol',
            ),
            327 =>
            array(
                'id' => 2328,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Huelva',
                'full_name' => NULL,
                'code' => 'huv',
            ),
            328 =>
            array(
                'id' => 2329,
                'country_id' => 155,
                'division_id' => NULL,
                'name' => 'Huesca',
                'full_name' => NULL,
                'code' => 'huc',
            ),
            329 =>
            array(
                'id' => 2330,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Peiraievs',
                'full_name' => NULL,
                'code' => 'pri',
            ),
            330 =>
            array(
                'id' => 2331,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Dodecanese',
                'full_name' => NULL,
                'code' => 'do',
            ),
            331 =>
            array(
                'id' => 2332,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Chanion',
                'full_name' => NULL,
                'code' => 'chq',
            ),
            332 =>
            array(
                'id' => 2333,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Cyclades',
                'full_name' => NULL,
                'code' => 'cy',
            ),
            333 =>
            array(
                'id' => 2334,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Lasithiou',
                'full_name' => NULL,
                'code' => 'lst',
            ),
            334 =>
            array(
                'id' => 2335,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Lesbos',
                'full_name' => NULL,
                'code' => 'les',
            ),
            335 =>
            array(
                'id' => 2336,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Rethymnis',
                'full_name' => NULL,
                'code' => 'ret',
            ),
            336 =>
            array(
                'id' => 2337,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Samos',
                'full_name' => NULL,
                'code' => 'smi',
            ),
            337 =>
            array(
                'id' => 2338,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Athens',
                'full_name' => NULL,
                'code' => 'ath',
            ),
            338 =>
            array(
                'id' => 2339,
                'country_id' => 143,
                'division_id' => NULL,
                'name' => 'Irakleiou',
                'full_name' => NULL,
                'code' => 'her',
            ),
            339 =>
            array(
                'id' => 2340,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Auckland',
                'full_name' => NULL,
                'code' => 'auk',
            ),
            340 =>
            array(
                'id' => 2341,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'North Shore',
                'full_name' => NULL,
                'code' => 'nsh',
            ),
            341 =>
            array(
                'id' => 2342,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Palmerston North',
                'full_name' => NULL,
                'code' => 'pmr',
            ),
            342 =>
            array(
                'id' => 2343,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Far North',
                'full_name' => NULL,
                'code' => 'fnr',
            ),
            343 =>
            array(
                'id' => 2344,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Blenheim',
                'full_name' => NULL,
                'code' => 'bhe',
            ),
            344 =>
            array(
                'id' => 2345,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Dunedin',
                'full_name' => NULL,
                'code' => 'dud',
            ),
            345 =>
            array(
                'id' => 2346,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Greymouth',
                'full_name' => NULL,
                'code' => 'gmn',
            ),
            346 =>
            array(
                'id' => 2347,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Hamilton',
                'full_name' => NULL,
                'code' => 'hlz',
            ),
            347 =>
            array(
                'id' => 2348,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Hastings',
                'full_name' => NULL,
                'code' => 'has',
            ),
            348 =>
            array(
                'id' => 2349,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Waitakere',
                'full_name' => NULL,
                'code' => 'wae',
            ),
            349 =>
            array(
                'id' => 2350,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Gisborne',
                'full_name' => NULL,
                'code' => 'gis',
            ),
            350 =>
            array(
                'id' => 2351,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Kaipara',
                'full_name' => NULL,
                'code' => 'kai',
            ),
            351 =>
            array(
                'id' => 2352,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Christchurch',
                'full_name' => NULL,
                'code' => 'chc',
            ),
            352 =>
            array(
                'id' => 2353,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Richmond',
                'full_name' => NULL,
                'code' => 'rmd',
            ),
            353 =>
            array(
                'id' => 2354,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Manukau',
                'full_name' => NULL,
                'code' => 'mnk',
            ),
            354 =>
            array(
                'id' => 2355,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Nelson',
                'full_name' => NULL,
                'code' => 'nsn',
            ),
            355 =>
            array(
                'id' => 2356,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Napier',
                'full_name' => NULL,
                'code' => 'npe',
            ),
            356 =>
            array(
                'id' => 2357,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Stratford',
                'full_name' => NULL,
                'code' => 'str',
            ),
            357 =>
            array(
                'id' => 2358,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Taumarunui',
                'full_name' => NULL,
                'code' => 'tau',
            ),
            358 =>
            array(
                'id' => 2359,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Whakatane',
                'full_name' => NULL,
                'code' => 'whk',
            ),
            359 =>
            array(
                'id' => 2360,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Whangarei',
                'full_name' => NULL,
                'code' => 'wre',
            ),
            360 =>
            array(
                'id' => 2361,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Wanganui',
                'full_name' => NULL,
                'code' => 'wag',
            ),
            361 =>
            array(
                'id' => 2362,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'New Plymouth',
                'full_name' => NULL,
                'code' => 'npl',
            ),
            362 =>
            array(
                'id' => 2363,
                'country_id' => 182,
                'division_id' => NULL,
                'name' => 'Invercargill',
                'full_name' => NULL,
                'code' => 'ivc',
            ),
            363 =>
            array(
                'id' => 2364,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Baranya',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            364 =>
            array(
                'id' => 2365,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Bacs-Kiskun',
                'full_name' => NULL,
                'code' => 'bk',
            ),
            365 =>
            array(
                'id' => 2366,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Borsod-Abauj-Zemplen',
                'full_name' => NULL,
                'code' => 'bz',
            ),
            366 =>
            array(
                'id' => 2367,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Bekes',
                'full_name' => NULL,
                'code' => 'be',
            ),
            367 =>
            array(
                'id' => 2368,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Budapest',
                'full_name' => NULL,
                'code' => 'bu',
            ),
            368 =>
            array(
                'id' => 2369,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Fejer',
                'full_name' => NULL,
                'code' => 'fe',
            ),
            369 =>
            array(
                'id' => 2370,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Hajdu-Bihar',
                'full_name' => NULL,
                'code' => 'hb',
            ),
            370 =>
            array(
                'id' => 2371,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Heves',
                'full_name' => NULL,
                'code' => 'he',
            ),
            371 =>
            array(
                'id' => 2372,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Jasz-Nagykun-Szolnok',
                'full_name' => NULL,
                'code' => 'jn',
            ),
            372 =>
            array(
                'id' => 2373,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Gyor-Moson-Sopron',
                'full_name' => NULL,
                'code' => 'gs',
            ),
            373 =>
            array(
                'id' => 2374,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Komarom-Esztergom',
                'full_name' => NULL,
                'code' => 'ke',
            ),
            374 =>
            array(
                'id' => 2375,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Nograd',
                'full_name' => NULL,
                'code' => 'no',
            ),
            375 =>
            array(
                'id' => 2376,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Pest',
                'full_name' => NULL,
                'code' => 'pe',
            ),
            376 =>
            array(
                'id' => 2377,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Csongrad',
                'full_name' => NULL,
                'code' => 'cs',
            ),
            377 =>
            array(
                'id' => 2378,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Somogy',
                'full_name' => NULL,
                'code' => 'so',
            ),
            378 =>
            array(
                'id' => 2379,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Szabolcs-Szatmar-Bereg',
                'full_name' => NULL,
                'code' => 'sz',
            ),
            379 =>
            array(
                'id' => 2380,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Tolna',
                'full_name' => NULL,
                'code' => 'to',
            ),
            380 =>
            array(
                'id' => 2381,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Veszprem',
                'full_name' => NULL,
                'code' => 've',
            ),
            381 =>
            array(
                'id' => 2382,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Vas',
                'full_name' => NULL,
                'code' => 'va',
            ),
            382 =>
            array(
                'id' => 2383,
                'country_id' => 121,
                'division_id' => NULL,
                'name' => 'Zala',
                'full_name' => NULL,
                'code' => 'za',
            ),
            383 =>
            array(
                'id' => 2384,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Halab',
                'full_name' => NULL,
                'code' => 'hl',
            ),
            384 =>
            array(
                'id' => 2385,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Rif Dimashq',
                'full_name' => NULL,
                'code' => 'rd',
            ),
            385 =>
            array(
                'id' => 2386,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Madinat Dimashq',
                'full_name' => NULL,
                'code' => 'di',
            ),
            386 =>
            array(
                'id' => 2387,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Dayr az Zawr',
                'full_name' => NULL,
                'code' => 'dz',
            ),
            387 =>
            array(
                'id' => 2388,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Dara',
                'full_name' => NULL,
                'code' => 'da',
            ),
            388 =>
            array(
                'id' => 2389,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Hamah',
                'full_name' => NULL,
                'code' => 'hm',
            ),
            389 =>
            array(
                'id' => 2390,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Al Hasakah',
                'full_name' => NULL,
                'code' => 'ha',
            ),
            390 =>
            array(
                'id' => 2391,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Hims',
                'full_name' => NULL,
                'code' => 'hi',
            ),
            391 =>
            array(
                'id' => 2392,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Al Ghab',
                'full_name' => NULL,
                'code' => 'gh',
            ),
            392 =>
            array(
                'id' => 2393,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Al-Qamishli',
                'full_name' => NULL,
                'code' => 'qa',
            ),
            393 =>
            array(
                'id' => 2394,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Al Qunaytirah',
                'full_name' => NULL,
                'code' => 'qu',
            ),
            394 =>
            array(
                'id' => 2395,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Ar Raqqah',
                'full_name' => NULL,
                'code' => 'rq',
            ),
            395 =>
            array(
                'id' => 2396,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Al Ladhiqiyah',
                'full_name' => NULL,
                'code' => 'la',
            ),
            396 =>
            array(
                'id' => 2397,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'As Suwayda',
                'full_name' => NULL,
                'code' => 'su',
            ),
            397 =>
            array(
                'id' => 2398,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Tartus',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            398 =>
            array(
                'id' => 2399,
                'country_id' => 59,
                'division_id' => NULL,
                'name' => 'Idlib',
                'full_name' => NULL,
                'code' => 'id',
            ),
            399 =>
            array(
                'id' => 2400,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Portland',
                'full_name' => NULL,
                'code' => 'por',
            ),
            400 =>
            array(
                'id' => 2401,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Hanover',
                'full_name' => NULL,
                'code' => 'han',
            ),
            401 =>
            array(
                'id' => 2402,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Kingston',
                'full_name' => NULL,
                'code' => 'kin',
            ),
            402 =>
            array(
                'id' => 2403,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Clarendon',
                'full_name' => NULL,
                'code' => 'cla',
            ),
            403 =>
            array(
                'id' => 2404,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Manchester',
                'full_name' => NULL,
                'code' => 'man',
            ),
            404 =>
            array(
                'id' => 2405,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Andrews',
                'full_name' => NULL,
                'code' => 'and',
            ),
            405 =>
            array(
                'id' => 2406,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Ann',
                'full_name' => NULL,
                'code' => 'ann',
            ),
            406 =>
            array(
                'id' => 2407,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Catherine',
                'full_name' => NULL,
                'code' => 'cat',
            ),
            407 =>
            array(
                'id' => 2408,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Mary',
                'full_name' => NULL,
                'code' => 'mar',
            ),
            408 =>
            array(
                'id' => 2409,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Thomas',
                'full_name' => NULL,
                'code' => 'tho',
            ),
            409 =>
            array(
                'id' => 2410,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. Elizabeth',
                'full_name' => NULL,
                'code' => 'eli',
            ),
            410 =>
            array(
                'id' => 2411,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'St. James',
                'full_name' => NULL,
                'code' => 'jam',
            ),
            411 =>
            array(
                'id' => 2412,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Trelawny',
                'full_name' => NULL,
                'code' => 'trl',
            ),
            412 =>
            array(
                'id' => 2413,
                'country_id' => 202,
                'division_id' => NULL,
                'name' => 'Westmoreland',
                'full_name' => NULL,
                'code' => 'wml',
            ),
            413 =>
            array(
                'id' => 2414,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Armavir',
                'full_name' => NULL,
                'code' => 'arm',
            ),
            414 =>
            array(
                'id' => 2415,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Aragacotn',
                'full_name' => NULL,
                'code' => 'agt',
            ),
            415 =>
            array(
                'id' => 2416,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Ararat',
                'full_name' => NULL,
                'code' => 'ara',
            ),
            416 =>
            array(
                'id' => 2417,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Yerevan',
                'full_name' => NULL,
                'code' => 'evn',
            ),
            417 =>
            array(
                'id' => 2418,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Gelarkunik',
                'full_name' => NULL,
                'code' => 'geg',
            ),
            418 =>
            array(
                'id' => 2419,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Kotayk',
                'full_name' => NULL,
                'code' => 'kot',
            ),
            419 =>
            array(
                'id' => 2420,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Lorri',
                'full_name' => NULL,
                'code' => 'lor',
            ),
            420 =>
            array(
                'id' => 2421,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Tavus',
                'full_name' => NULL,
                'code' => 'tav',
            ),
            421 =>
            array(
                'id' => 2422,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'VayocJor',
                'full_name' => NULL,
                'code' => 'vay',
            ),
            422 =>
            array(
                'id' => 2423,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Shirak',
                'full_name' => NULL,
                'code' => 'shi',
            ),
            423 =>
            array(
                'id' => 2424,
                'country_id' => 116,
                'division_id' => NULL,
                'name' => 'Syunik',
                'full_name' => NULL,
                'code' => 'syu',
            ),
            424 =>
            array(
                'id' => 2425,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Abyan',
                'full_name' => NULL,
                'code' => 'ab',
            ),
            425 =>
            array(
                'id' => 2426,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Amran Sana',
                'full_name' => NULL,
                'code' => 'am',
            ),
            426 =>
            array(
                'id' => 2427,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Al-Bayda',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            427 =>
            array(
                'id' => 2428,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Ad-Dali',
                'full_name' => NULL,
                'code' => 'da',
            ),
            428 =>
            array(
                'id' => 2429,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Hadramawt',
                'full_name' => NULL,
                'code' => 'hd',
            ),
            429 =>
            array(
                'id' => 2430,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Hajjah',
                'full_name' => NULL,
                'code' => 'hj',
            ),
            430 =>
            array(
                'id' => 2431,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Al-Hudaydah',
                'full_name' => NULL,
                'code' => 'hu',
            ),
            431 =>
            array(
                'id' => 2432,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Al-Jawf',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            432 =>
            array(
                'id' => 2433,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Lahij',
                'full_name' => NULL,
                'code' => 'la',
            ),
            433 =>
            array(
                'id' => 2434,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Marib',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            434 =>
            array(
                'id' => 2435,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Al-Mahrah',
                'full_name' => NULL,
                'code' => 'mr',
            ),
            435 =>
            array(
                'id' => 2436,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Al-Mahwit',
                'full_name' => NULL,
                'code' => 'mw',
            ),
            436 =>
            array(
                'id' => 2437,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Sadah',
                'full_name' => NULL,
                'code' => 'sd',
            ),
            437 =>
            array(
                'id' => 2438,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Sana',
                'full_name' => NULL,
                'code' => 'sn',
            ),
            438 =>
            array(
                'id' => 2439,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Seiyun',
                'full_name' => NULL,
                'code' => 'gxf',
            ),
            439 =>
            array(
                'id' => 2440,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Shabwah',
                'full_name' => NULL,
                'code' => 'sh',
            ),
            440 =>
            array(
                'id' => 2441,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Taizz',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            441 =>
            array(
                'id' => 2442,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Ash-Shihr',
                'full_name' => NULL,
                'code' => 'asr',
            ),
            442 =>
            array(
                'id' => 2443,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Adan',
                'full_name' => NULL,
                'code' => 'ad',
            ),
            443 =>
            array(
                'id' => 2444,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Ibb',
                'full_name' => NULL,
                'code' => 'ib',
            ),
            444 =>
            array(
                'id' => 2445,
                'country_id' => 89,
                'division_id' => NULL,
                'name' => 'Dhamar',
                'full_name' => NULL,
                'code' => 'dh',
            ),
            445 =>
            array(
                'id' => 2446,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Ashdod',
                'full_name' => NULL,
                'code' => 'ash',
            ),
            446 =>
            array(
                'id' => 2447,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Beersheba',
                'full_name' => NULL,
                'code' => 'bev',
            ),
            447 =>
            array(
                'id' => 2448,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Bat Yam',
                'full_name' => NULL,
                'code' => 'bat',
            ),
            448 =>
            array(
                'id' => 2449,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Haifa',
                'full_name' => NULL,
                'code' => 'hfa',
            ),
            449 =>
            array(
                'id' => 2450,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Holon',
                'full_name' => NULL,
                'code' => 'hol',
            ),
            450 =>
            array(
                'id' => 2451,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Netanya',
                'full_name' => NULL,
                'code' => 'nat',
            ),
            451 =>
            array(
                'id' => 2452,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Tel Aviv-Yafo',
                'full_name' => NULL,
                'code' => 'tlv',
            ),
            452 =>
            array(
                'id' => 2453,
                'country_id' => 82,
                'division_id' => NULL,
                'name' => 'Jerusalem',
                'full_name' => NULL,
                'code' => 'j',
            ),
            453 =>
            array(
                'id' => 2454,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Asti',
                'full_name' => NULL,
                'code' => 'ast',
            ),
            454 =>
            array(
                'id' => 2455,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Ascoli Piceno',
                'full_name' => NULL,
                'code' => 'asp',
            ),
            455 =>
            array(
                'id' => 2456,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Ancona',
                'full_name' => NULL,
                'code' => 'aoi',
            ),
            456 =>
            array(
                'id' => 2457,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Olbia-Tempio',
                'full_name' => NULL,
                'code' => 'olb',
            ),
            457 =>
            array(
                'id' => 2458,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Oristano',
                'full_name' => NULL,
                'code' => 'qos',
            ),
            458 =>
            array(
                'id' => 2459,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Aosta',
                'full_name' => NULL,
                'code' => 'aot',
            ),
            459 =>
            array(
                'id' => 2460,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Palermo',
                'full_name' => NULL,
                'code' => 'pmo',
            ),
            460 =>
            array(
                'id' => 2461,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Bari',
                'full_name' => NULL,
                'code' => 'bri',
            ),
            461 =>
            array(
                'id' => 2462,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Bergamo',
                'full_name' => NULL,
                'code' => 'bgo',
            ),
            462 =>
            array(
                'id' => 2463,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Benevento',
                'full_name' => NULL,
                'code' => 'ben',
            ),
            463 =>
            array(
                'id' => 2464,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Pisa',
                'full_name' => NULL,
                'code' => 'psa',
            ),
            464 =>
            array(
                'id' => 2465,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Pordenone',
                'full_name' => NULL,
                'code' => 'prd',
            ),
            465 =>
            array(
                'id' => 2466,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Potenza',
                'full_name' => NULL,
                'code' => 'qpo',
            ),
            466 =>
            array(
                'id' => 2467,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Bologna',
                'full_name' => NULL,
                'code' => 'blq',
            ),
            467 =>
            array(
                'id' => 2468,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Biella',
                'full_name' => NULL,
                'code' => 'bie',
            ),
            468 =>
            array(
                'id' => 2469,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Brescia',
                'full_name' => NULL,
                'code' => 'brc',
            ),
            469 =>
            array(
                'id' => 2470,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Brindisi',
                'full_name' => NULL,
                'code' => 'bds',
            ),
            470 =>
            array(
                'id' => 2471,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Trieste',
                'full_name' => NULL,
                'code' => 'trs',
            ),
            471 =>
            array(
                'id' => 2472,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Turin',
                'full_name' => NULL,
                'code' => 'trn',
            ),
            472 =>
            array(
                'id' => 2473,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Ferrara',
                'full_name' => NULL,
                'code' => 'frr',
            ),
            473 =>
            array(
                'id' => 2474,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Firenze',
                'full_name' => NULL,
                'code' => 'flr',
            ),
            474 =>
            array(
                'id' => 2475,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Foggia',
                'full_name' => NULL,
                'code' => 'fog',
            ),
            475 =>
            array(
                'id' => 2476,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Cagliari',
                'full_name' => NULL,
                'code' => 'cag',
            ),
            476 =>
            array(
                'id' => 2477,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Caserta',
                'full_name' => NULL,
                'code' => 'cst',
            ),
            477 =>
            array(
                'id' => 2478,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Catania',
                'full_name' => NULL,
                'code' => 'cta',
            ),
            478 =>
            array(
                'id' => 2479,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Catanzaro',
                'full_name' => NULL,
                'code' => 'qcz',
            ),
            479 =>
            array(
                'id' => 2480,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Campobasso',
                'full_name' => NULL,
                'code' => 'cob',
            ),
            480 =>
            array(
                'id' => 2481,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Como',
                'full_name' => NULL,
                'code' => 'ciy',
            ),
            481 =>
            array(
                'id' => 2482,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Cosenza',
                'full_name' => NULL,
                'code' => 'qcs',
            ),
            482 =>
            array(
                'id' => 2483,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Crotone',
                'full_name' => NULL,
                'code' => 'crv',
            ),
            483 =>
            array(
                'id' => 2484,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Cuneo',
                'full_name' => NULL,
                'code' => 'cun',
            ),
            484 =>
            array(
                'id' => 2485,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'L\'Aquila',
                'full_name' => NULL,
                'code' => 'laq',
            ),
            485 =>
            array(
                'id' => 2486,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'La Spezia',
                'full_name' => NULL,
                'code' => 'spe',
            ),
            486 =>
            array(
                'id' => 2487,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Lecco',
                'full_name' => NULL,
                'code' => 'lco',
            ),
            487 =>
            array(
                'id' => 2488,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Lecce',
                'full_name' => NULL,
                'code' => 'lcc',
            ),
            488 =>
            array(
                'id' => 2489,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Reggio Emilia',
                'full_name' => NULL,
                'code' => 'rne',
            ),
            489 =>
            array(
                'id' => 2490,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Reggio Calabria',
                'full_name' => NULL,
                'code' => 'reg',
            ),
            490 =>
            array(
                'id' => 2491,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Livorno',
                'full_name' => NULL,
                'code' => 'liv',
            ),
            491 =>
            array(
                'id' => 2492,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Roma',
                'full_name' => NULL,
                'code' => 'rom',
            ),
            492 =>
            array(
                'id' => 2493,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Massa-Carrara',
                'full_name' => NULL,
                'code' => 'mcr',
            ),
            493 =>
            array(
                'id' => 2494,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Matera',
                'full_name' => NULL,
                'code' => 'mtr',
            ),
            494 =>
            array(
                'id' => 2495,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Monza e Brianza',
                'full_name' => NULL,
                'code' => 'mza',
            ),
            495 =>
            array(
                'id' => 2496,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Milano',
                'full_name' => NULL,
                'code' => 'mil',
            ),
            496 =>
            array(
                'id' => 2497,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Modena',
                'full_name' => NULL,
                'code' => 'mod',
            ),
            497 =>
            array(
                'id' => 2498,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Messina',
                'full_name' => NULL,
                'code' => 'msn',
            ),
            498 =>
            array(
                'id' => 2499,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Naples',
                'full_name' => NULL,
                'code' => 'nap',
            ),
            499 =>
            array(
                'id' => 2500,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Nuoro',
                'full_name' => NULL,
                'code' => 'qnu',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 2501,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Novara',
                'full_name' => NULL,
                'code' => 'nvr',
            ),
            1 =>
            array(
                'id' => 2502,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Parma',
                'full_name' => NULL,
                'code' => 'pmf',
            ),
            2 =>
            array(
                'id' => 2503,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Pavia',
                'full_name' => NULL,
                'code' => 'pav',
            ),
            3 =>
            array(
                'id' => 2504,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Perugia',
                'full_name' => NULL,
                'code' => 'peg',
            ),
            4 =>
            array(
                'id' => 2505,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Genova',
                'full_name' => NULL,
                'code' => 'cax',
            ),
            5 =>
            array(
                'id' => 2506,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Salerno',
                'full_name' => NULL,
                'code' => 'sal',
            ),
            6 =>
            array(
                'id' => 2507,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Sassari',
                'full_name' => NULL,
                'code' => 'qss',
            ),
            7 =>
            array(
                'id' => 2508,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Savona',
                'full_name' => NULL,
                'code' => 'svn',
            ),
            8 =>
            array(
                'id' => 2509,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Taranto',
                'full_name' => NULL,
                'code' => 'tar',
            ),
            9 =>
            array(
                'id' => 2510,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Trapani',
                'full_name' => NULL,
                'code' => 'tps',
            ),
            10 =>
            array(
                'id' => 2511,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Trento',
                'full_name' => NULL,
                'code' => 'trt',
            ),
            11 =>
            array(
                'id' => 2512,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Venice',
                'full_name' => NULL,
                'code' => 'vce',
            ),
            12 =>
            array(
                'id' => 2513,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Vercelli',
                'full_name' => NULL,
                'code' => 'vrl',
            ),
            13 =>
            array(
                'id' => 2514,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Viterbo',
                'full_name' => NULL,
                'code' => 'vit',
            ),
            14 =>
            array(
                'id' => 2515,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Udine',
                'full_name' => NULL,
                'code' => 'udn',
            ),
            15 =>
            array(
                'id' => 2516,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Syracuse',
                'full_name' => NULL,
                'code' => 'syr',
            ),
            16 =>
            array(
                'id' => 2517,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Siena',
                'full_name' => NULL,
                'code' => 'sna',
            ),
            17 =>
            array(
                'id' => 2518,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Alessandria',
                'full_name' => NULL,
                'code' => 'ale',
            ),
            18 =>
            array(
                'id' => 2519,
                'country_id' => 151,
                'division_id' => NULL,
                'name' => 'Isernia',
                'full_name' => NULL,
                'code' => 'ise',
            ),
            19 =>
            array(
                'id' => 2520,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Aizawl',
                'full_name' => NULL,
                'code' => 'ajl',
            ),
            20 =>
            array(
                'id' => 2521,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Bangalore',
                'full_name' => NULL,
                'code' => 'blr',
            ),
            21 =>
            array(
                'id' => 2522,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Pondicherry',
                'full_name' => NULL,
                'code' => 'pny',
            ),
            22 =>
            array(
                'id' => 2523,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Bhopal',
                'full_name' => NULL,
                'code' => 'bho',
            ),
            23 =>
            array(
                'id' => 2524,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Bhubaneswar',
                'full_name' => NULL,
                'code' => 'bbi',
            ),
            24 =>
            array(
                'id' => 2525,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Chandigarh',
                'full_name' => NULL,
                'code' => 'ixc',
            ),
            25 =>
            array(
                'id' => 2526,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Daman',
                'full_name' => NULL,
                'code' => 'dam',
            ),
            26 =>
            array(
                'id' => 2527,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Diu',
                'full_name' => NULL,
                'code' => 'diu',
            ),
            27 =>
            array(
                'id' => 2528,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Gangtok',
                'full_name' => NULL,
                'code' => 'gto',
            ),
            28 =>
            array(
                'id' => 2529,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Coimbatore',
                'full_name' => NULL,
                'code' => 'cjb',
            ),
            29 =>
            array(
                'id' => 2530,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Calcutta',
                'full_name' => NULL,
                'code' => 'ccu',
            ),
            30 =>
            array(
                'id' => 2531,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Karaikal',
                'full_name' => NULL,
                'code' => 'krk',
            ),
            31 =>
            array(
                'id' => 2532,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Jabalpur',
                'full_name' => NULL,
                'code' => 'jlr',
            ),
            32 =>
            array(
                'id' => 2533,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Jalandhar',
                'full_name' => NULL,
                'code' => 'juc',
            ),
            33 =>
            array(
                'id' => 2534,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Jodhpur',
                'full_name' => NULL,
                'code' => 'jdh',
            ),
            34 =>
            array(
                'id' => 2535,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Chennai',
                'full_name' => NULL,
                'code' => 'maa',
            ),
            35 =>
            array(
                'id' => 2536,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Kavaratti',
                'full_name' => NULL,
                'code' => 'kva',
            ),
            36 =>
            array(
                'id' => 2537,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Kohima',
                'full_name' => NULL,
                'code' => 'kom',
            ),
            37 =>
            array(
                'id' => 2538,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Mahe',
                'full_name' => NULL,
                'code' => 'mah',
            ),
            38 =>
            array(
                'id' => 2539,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Madurai',
                'full_name' => NULL,
                'code' => 'ixm',
            ),
            39 =>
            array(
                'id' => 2540,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Sambalpur',
                'full_name' => NULL,
                'code' => 'slr',
            ),
            40 =>
            array(
                'id' => 2541,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Trivandrum',
                'full_name' => NULL,
                'code' => 'trv',
            ),
            41 =>
            array(
                'id' => 2542,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Udaipur',
                'full_name' => NULL,
                'code' => 'udr',
            ),
            42 =>
            array(
                'id' => 2543,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Shillong',
                'full_name' => NULL,
                'code' => 'shl',
            ),
            43 =>
            array(
                'id' => 2544,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Silvassa',
                'full_name' => NULL,
                'code' => 'sil',
            ),
            44 =>
            array(
                'id' => 2545,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'New Delhi',
                'full_name' => NULL,
                'code' => 'icd',
            ),
            45 =>
            array(
                'id' => 2546,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Yanam',
                'full_name' => NULL,
                'code' => 'srv',
            ),
            46 =>
            array(
                'id' => 2547,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Imphal',
                'full_name' => NULL,
                'code' => 'imf',
            ),
            47 =>
            array(
                'id' => 2548,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Indore',
                'full_name' => NULL,
                'code' => 'idr',
            ),
            48 =>
            array(
                'id' => 2549,
                'country_id' => 85,
                'division_id' => NULL,
                'name' => 'Jaipur',
                'full_name' => NULL,
                'code' => 'jai',
            ),
            49 =>
            array(
                'id' => 2550,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Bali',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            50 =>
            array(
                'id' => 2551,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Kepulauan Bangka Belitung',
                'full_name' => NULL,
                'code' => 'bb',
            ),
            51 =>
            array(
                'id' => 2552,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sulawesi Utara',
                'full_name' => NULL,
                'code' => 'sa',
            ),
            52 =>
            array(
                'id' => 2553,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sumatera Utara',
                'full_name' => NULL,
                'code' => 'su',
            ),
            53 =>
            array(
                'id' => 2554,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Daerah Tingkat I Kalimantan Barat',
                'full_name' => NULL,
                'code' => 'kb',
            ),
            54 =>
            array(
                'id' => 2555,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Kalimantan Timur',
                'full_name' => NULL,
                'code' => 'ki',
            ),
            55 =>
            array(
                'id' => 2556,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sulawesi Tenggara',
                'full_name' => NULL,
                'code' => 'sg',
            ),
            56 =>
            array(
                'id' => 2557,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Nusa Tenggara Timur',
                'full_name' => NULL,
                'code' => 'nt',
            ),
            57 =>
            array(
                'id' => 2558,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Java Timur',
                'full_name' => NULL,
                'code' => 'ji',
            ),
            58 =>
            array(
                'id' => 2559,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Riau',
                'full_name' => NULL,
                'code' => 'ri',
            ),
            59 =>
            array(
                'id' => 2560,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Maluku',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            60 =>
            array(
                'id' => 2561,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Bengkulu',
                'full_name' => NULL,
                'code' => 'be',
            ),
            61 =>
            array(
                'id' => 2562,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Lampung',
                'full_name' => NULL,
                'code' => 'la',
            ),
            62 =>
            array(
                'id' => 2563,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Kalimantan Selatan',
                'full_name' => NULL,
                'code' => 'ks',
            ),
            63 =>
            array(
                'id' => 2564,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sulawesi Selatan',
                'full_name' => NULL,
                'code' => 'sn',
            ),
            64 =>
            array(
                'id' => 2565,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sumatera Selatan',
                'full_name' => NULL,
                'code' => 'ss',
            ),
            65 =>
            array(
                'id' => 2566,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Daerah Istimewa Yogyakarta',
                'full_name' => NULL,
                'code' => 'yo',
            ),
            66 =>
            array(
                'id' => 2567,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Banten',
                'full_name' => NULL,
                'code' => 'bt',
            ),
            67 =>
            array(
                'id' => 2568,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Nusa Tenggara Barat',
                'full_name' => NULL,
                'code' => 'nb',
            ),
            68 =>
            array(
                'id' => 2569,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sumatera Barat',
                'full_name' => NULL,
                'code' => 'sr',
            ),
            69 =>
            array(
                'id' => 2570,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Java Barat',
                'full_name' => NULL,
                'code' => 'jb',
            ),
            70 =>
            array(
                'id' => 2571,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Jakarta Raya',
                'full_name' => NULL,
                'code' => 'jk',
            ),
            71 =>
            array(
                'id' => 2572,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Aceh',
                'full_name' => NULL,
                'code' => 'ac',
            ),
            72 =>
            array(
                'id' => 2573,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Irian Jaya',
                'full_name' => NULL,
                'code' => 'ij',
            ),
            73 =>
            array(
                'id' => 2574,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Jambi',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            74 =>
            array(
                'id' => 2575,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Kalimantan Tengah',
                'full_name' => NULL,
                'code' => 'kt',
            ),
            75 =>
            array(
                'id' => 2576,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Sulawesi Tengah',
                'full_name' => NULL,
                'code' => 'st',
            ),
            76 =>
            array(
                'id' => 2577,
                'country_id' => 81,
                'division_id' => NULL,
                'name' => 'Java Tengah',
                'full_name' => NULL,
                'code' => 'jt',
            ),
            77 =>
            array(
                'id' => 2578,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Allun',
                'full_name' => NULL,
                'code' => 'aj',
            ),
            78 =>
            array(
                'id' => 2579,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Amman',
                'full_name' => NULL,
                'code' => 'am',
            ),
            79 =>
            array(
                'id' => 2580,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Balqa',
                'full_name' => NULL,
                'code' => 'ba',
            ),
            80 =>
            array(
                'id' => 2581,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Jarash',
                'full_name' => NULL,
                'code' => 'ja',
            ),
            81 =>
            array(
                'id' => 2582,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Karak',
                'full_name' => NULL,
                'code' => 'ka',
            ),
            82 =>
            array(
                'id' => 2583,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Rusayfah',
                'full_name' => NULL,
                'code' => 'ru',
            ),
            83 =>
            array(
                'id' => 2584,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Maan',
                'full_name' => NULL,
                'code' => 'mn',
            ),
            84 =>
            array(
                'id' => 2585,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Madaba',
                'full_name' => NULL,
                'code' => 'md',
            ),
            85 =>
            array(
                'id' => 2586,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Mafraq',
                'full_name' => NULL,
                'code' => 'mf',
            ),
            86 =>
            array(
                'id' => 2587,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Tafiela',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            87 =>
            array(
                'id' => 2588,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Aqaba',
                'full_name' => NULL,
                'code' => 'aq',
            ),
            88 =>
            array(
                'id' => 2589,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Irbid',
                'full_name' => NULL,
                'code' => 'ir',
            ),
            89 =>
            array(
                'id' => 2590,
                'country_id' => 63,
                'division_id' => NULL,
                'name' => 'Zarqa',
                'full_name' => NULL,
                'code' => 'za',
            ),
            90 =>
            array(
                'id' => 2591,
                'country_id' => 64,
                'division_id' => NULL,
                'name' => 'Haiphong',
                'full_name' => NULL,
                'code' => 'hp',
            ),
            91 =>
            array(
                'id' => 2592,
                'country_id' => 64,
                'division_id' => NULL,
                'name' => 'Hanoi',
                'full_name' => NULL,
                'code' => 'hi',
            ),
            92 =>
            array(
                'id' => 2593,
                'country_id' => 64,
                'division_id' => NULL,
                'name' => 'Ho Chi Minh City',
                'full_name' => NULL,
                'code' => 'hc',
            ),
            93 =>
            array(
                'id' => 2594,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Northern',
                'full_name' => NULL,
                'code' => 'no',
            ),
            94 =>
            array(
                'id' => 2595,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Eastern',
                'full_name' => NULL,
                'code' => 'ea',
            ),
            95 =>
            array(
                'id' => 2596,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Luapula',
                'full_name' => NULL,
                'code' => 'lp',
            ),
            96 =>
            array(
                'id' => 2597,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Lusaka',
                'full_name' => NULL,
                'code' => 'lk',
            ),
            97 =>
            array(
                'id' => 2598,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Southern',
                'full_name' => NULL,
                'code' => 'so',
            ),
            98 =>
            array(
                'id' => 2599,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Copperbelt',
                'full_name' => NULL,
                'code' => 'cb',
            ),
            99 =>
            array(
                'id' => 2600,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'North-Western',
                'full_name' => NULL,
                'code' => 'nw',
            ),
            100 =>
            array(
                'id' => 2601,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Western',
                'full_name' => NULL,
                'code' => 'we',
            ),
            101 =>
            array(
                'id' => 2602,
                'country_id' => 39,
                'division_id' => NULL,
                'name' => 'Central',
                'full_name' => NULL,
                'code' => 'ce',
            ),
            102 =>
            array(
                'id' => 2603,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de la Araucania',
                'full_name' => NULL,
                'code' => 'ar',
            ),
            103 =>
            array(
                'id' => 2604,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Atacama',
                'full_name' => NULL,
                'code' => 'at',
            ),
            104 =>
            array(
                'id' => 2605,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Antofagasta',
                'full_name' => NULL,
                'code' => 'an',
            ),
            105 =>
            array(
                'id' => 2606,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region del Biobio',
                'full_name' => NULL,
                'code' => 'bi',
            ),
            106 =>
            array(
                'id' => 2607,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Libertador',
                'full_name' => NULL,
                'code' => 'li',
            ),
            107 =>
            array(
                'id' => 2608,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de los Lagos',
                'full_name' => NULL,
                'code' => 'll',
            ),
            108 =>
            array(
                'id' => 2609,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Coquimbo',
                'full_name' => NULL,
                'code' => 'co',
            ),
            109 =>
            array(
                'id' => 2610,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region del Maule',
                'full_name' => NULL,
                'code' => 'ml',
            ),
            110 =>
            array(
                'id' => 2611,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Magallanes y Antartica Chilena',
                'full_name' => NULL,
                'code' => 'ma',
            ),
            111 =>
            array(
                'id' => 2612,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Metropolitana de Santiago',
                'full_name' => NULL,
                'code' => 'rm',
            ),
            112 =>
            array(
                'id' => 2613,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Tarapaca',
                'full_name' => NULL,
                'code' => 'ta',
            ),
            113 =>
            array(
                'id' => 2614,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Valparaiso',
                'full_name' => NULL,
                'code' => 'vs',
            ),
            114 =>
            array(
                'id' => 2615,
                'country_id' => 186,
                'division_id' => NULL,
                'name' => 'Region de Alsen del General Carlos Ibanez del',
                'full_name' => NULL,
                'code' => 'ai',
            ),
            115 =>
            array(
                'id' => 2616,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Bamingui-Bangoran',
                'full_name' => NULL,
                'code' => 'bb',
            ),
            116 =>
            array(
                'id' => 2617,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Bangui',
                'full_name' => NULL,
                'code' => 'bgf',
            ),
            117 =>
            array(
                'id' => 2618,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Bimbo',
                'full_name' => NULL,
                'code' => 'bi',
            ),
            118 =>
            array(
                'id' => 2619,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Kemo',
                'full_name' => NULL,
                'code' => 'kg',
            ),
            119 =>
            array(
                'id' => 2620,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Lobaye',
                'full_name' => NULL,
                'code' => 'lb',
            ),
            120 =>
            array(
                'id' => 2621,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Mambere-Kadei',
                'full_name' => NULL,
                'code' => 'hs',
            ),
            121 =>
            array(
                'id' => 2622,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Mbomou',
                'full_name' => NULL,
                'code' => 'mb',
            ),
            122 =>
            array(
                'id' => 2623,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Nana-Gribizi',
                'full_name' => NULL,
                'code' => 'kb',
            ),
            123 =>
            array(
                'id' => 2624,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Nana-Mambere',
                'full_name' => NULL,
                'code' => 'nm',
            ),
            124 =>
            array(
                'id' => 2625,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Sangha-Mbaere',
                'full_name' => NULL,
                'code' => 'se',
            ),
            125 =>
            array(
                'id' => 2626,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Haute-Kotto',
                'full_name' => NULL,
                'code' => 'hk',
            ),
            126 =>
            array(
                'id' => 2627,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Haut-Mbomou',
                'full_name' => NULL,
                'code' => 'hm',
            ),
            127 =>
            array(
                'id' => 2628,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Ouaka',
                'full_name' => NULL,
                'code' => 'uk',
            ),
            128 =>
            array(
                'id' => 2629,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Vakaga',
                'full_name' => NULL,
                'code' => 'vk',
            ),
            129 =>
            array(
                'id' => 2630,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Ouham',
                'full_name' => NULL,
                'code' => 'ac',
            ),
            130 =>
            array(
                'id' => 2631,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Ouham-Pende',
                'full_name' => NULL,
                'code' => 'op',
            ),
            131 =>
            array(
                'id' => 2632,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Ombella-Mpoko',
                'full_name' => NULL,
                'code' => 'mp',
            ),
            132 =>
            array(
                'id' => 2633,
                'country_id' => 33,
                'division_id' => NULL,
                'name' => 'Basse-Kotto',
                'full_name' => NULL,
                'code' => 'bk',
            ),
            133 =>
            array(
                'id' => 2634,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Dongcheng',
                'full_name' => NULL,
                'code' => '1',
            ),
            134 =>
            array(
                'id' => 2635,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Xicheng',
                'full_name' => NULL,
                'code' => '2',
            ),
            135 =>
            array(
                'id' => 2636,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Chaoyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            136 =>
            array(
                'id' => 2637,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Fengtai',
                'full_name' => NULL,
                'code' => '6',
            ),
            137 =>
            array(
                'id' => 2638,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Shijingshan',
                'full_name' => NULL,
                'code' => '7',
            ),
            138 =>
            array(
                'id' => 2639,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Haidian',
                'full_name' => NULL,
                'code' => '8',
            ),
            139 =>
            array(
                'id' => 2640,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Mentougou',
                'full_name' => NULL,
                'code' => '9',
            ),
            140 =>
            array(
                'id' => 2641,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Fangshan',
                'full_name' => NULL,
                'code' => '11',
            ),
            141 =>
            array(
                'id' => 2642,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Tongzhou',
                'full_name' => NULL,
                'code' => '12',
            ),
            142 =>
            array(
                'id' => 2643,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Shunyi',
                'full_name' => NULL,
                'code' => '13',
            ),
            143 =>
            array(
                'id' => 2644,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Changping',
                'full_name' => NULL,
                'code' => '21',
            ),
            144 =>
            array(
                'id' => 2645,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Daxing',
                'full_name' => NULL,
                'code' => '24',
            ),
            145 =>
            array(
                'id' => 2646,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Pinggu',
                'full_name' => NULL,
                'code' => '26',
            ),
            146 =>
            array(
                'id' => 2647,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Huairou',
                'full_name' => NULL,
                'code' => '27',
            ),
            147 =>
            array(
                'id' => 2648,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Miyun',
                'full_name' => NULL,
                'code' => '28',
            ),
            148 =>
            array(
                'id' => 2649,
                'country_id' => 101,
                'division_id' => 26,
                'name' => 'Yanqing',
                'full_name' => NULL,
                'code' => '29',
            ),
            149 =>
            array(
                'id' => 2650,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Heping',
                'full_name' => NULL,
                'code' => '1',
            ),
            150 =>
            array(
                'id' => 2651,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Hedong',
                'full_name' => NULL,
                'code' => '2',
            ),
            151 =>
            array(
                'id' => 2652,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Hexi',
                'full_name' => NULL,
                'code' => '3',
            ),
            152 =>
            array(
                'id' => 2653,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Nankai',
                'full_name' => NULL,
                'code' => '4',
            ),
            153 =>
            array(
                'id' => 2654,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Hebei',
                'full_name' => NULL,
                'code' => '5',
            ),
            154 =>
            array(
                'id' => 2655,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Hongqiao',
                'full_name' => NULL,
                'code' => '6',
            ),
            155 =>
            array(
                'id' => 2656,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Binghaixinqu',
                'full_name' => NULL,
                'code' => '26',
            ),
            156 =>
            array(
                'id' => 2657,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Dongli',
                'full_name' => NULL,
                'code' => '10',
            ),
            157 =>
            array(
                'id' => 2658,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Xiqing',
                'full_name' => NULL,
                'code' => '11',
            ),
            158 =>
            array(
                'id' => 2659,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Jinnan',
                'full_name' => NULL,
                'code' => '12',
            ),
            159 =>
            array(
                'id' => 2660,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Beichen',
                'full_name' => NULL,
                'code' => '13',
            ),
            160 =>
            array(
                'id' => 2661,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Ninghe',
                'full_name' => NULL,
                'code' => '21',
            ),
            161 =>
            array(
                'id' => 2662,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Wuqing',
                'full_name' => NULL,
                'code' => '22',
            ),
            162 =>
            array(
                'id' => 2663,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Jinghai',
                'full_name' => NULL,
                'code' => '23',
            ),
            163 =>
            array(
                'id' => 2664,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Baodi',
                'full_name' => NULL,
                'code' => '24',
            ),
            164 =>
            array(
                'id' => 2665,
                'country_id' => 101,
                'division_id' => 52,
                'name' => 'Jixian',
                'full_name' => NULL,
                'code' => '25',
            ),
            165 =>
            array(
                'id' => 2666,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Shijiazhuang',
                'full_name' => NULL,
                'code' => '1',
            ),
            166 =>
            array(
                'id' => 2667,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Tangshan',
                'full_name' => NULL,
                'code' => '2',
            ),
            167 =>
            array(
                'id' => 2668,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Qinhuangdao',
                'full_name' => NULL,
                'code' => '3',
            ),
            168 =>
            array(
                'id' => 2669,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Handan',
                'full_name' => NULL,
                'code' => '4',
            ),
            169 =>
            array(
                'id' => 2670,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Xingtai',
                'full_name' => NULL,
                'code' => '5',
            ),
            170 =>
            array(
                'id' => 2671,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Baoding',
                'full_name' => NULL,
                'code' => '6',
            ),
            171 =>
            array(
                'id' => 2672,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Zhangjiakou',
                'full_name' => NULL,
                'code' => '7',
            ),
            172 =>
            array(
                'id' => 2673,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Chengde',
                'full_name' => NULL,
                'code' => '8',
            ),
            173 =>
            array(
                'id' => 2674,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Cangzhou',
                'full_name' => NULL,
                'code' => '9',
            ),
            174 =>
            array(
                'id' => 2675,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Langfang',
                'full_name' => NULL,
                'code' => '10',
            ),
            175 =>
            array(
                'id' => 2676,
                'country_id' => 101,
                'division_id' => 34,
                'name' => 'Hengshui',
                'full_name' => NULL,
                'code' => '11',
            ),
            176 =>
            array(
                'id' => 2677,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Taiyuan',
                'full_name' => NULL,
                'code' => '1',
            ),
            177 =>
            array(
                'id' => 2678,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Datong',
                'full_name' => NULL,
                'code' => '2',
            ),
            178 =>
            array(
                'id' => 2679,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Yangquan',
                'full_name' => NULL,
                'code' => '3',
            ),
            179 =>
            array(
                'id' => 2680,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Changzhi',
                'full_name' => NULL,
                'code' => '4',
            ),
            180 =>
            array(
                'id' => 2681,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Jincheng',
                'full_name' => NULL,
                'code' => '5',
            ),
            181 =>
            array(
                'id' => 2682,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Shuozhou',
                'full_name' => NULL,
                'code' => '6',
            ),
            182 =>
            array(
                'id' => 2683,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Jinzhong',
                'full_name' => NULL,
                'code' => '7',
            ),
            183 =>
            array(
                'id' => 2684,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Yuncheng',
                'full_name' => NULL,
                'code' => '8',
            ),
            184 =>
            array(
                'id' => 2685,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Xinzhou',
                'full_name' => NULL,
                'code' => '9',
            ),
            185 =>
            array(
                'id' => 2686,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'Linfen',
                'full_name' => NULL,
                'code' => '10',
            ),
            186 =>
            array(
                'id' => 2687,
                'country_id' => 101,
                'division_id' => 49,
                'name' => 'luliang',
                'full_name' => NULL,
                'code' => '11',
            ),
            187 =>
            array(
                'id' => 2688,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Hohhot',
                'full_name' => NULL,
                'code' => '1',
            ),
            188 =>
            array(
                'id' => 2689,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Baotou',
                'full_name' => NULL,
                'code' => '2',
            ),
            189 =>
            array(
                'id' => 2690,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Wuhai',
                'full_name' => NULL,
                'code' => '3',
            ),
            190 =>
            array(
                'id' => 2691,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Chifeng',
                'full_name' => NULL,
                'code' => '4',
            ),
            191 =>
            array(
                'id' => 2692,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Tongliao',
                'full_name' => NULL,
                'code' => '5',
            ),
            192 =>
            array(
                'id' => 2693,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Ordos',
                'full_name' => NULL,
                'code' => '6',
            ),
            193 =>
            array(
                'id' => 2694,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Hulun Buir',
                'full_name' => NULL,
                'code' => '7',
            ),
            194 =>
            array(
                'id' => 2695,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Bayannur',
                'full_name' => NULL,
                'code' => '8',
            ),
            195 =>
            array(
                'id' => 2696,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Ulan Qab',
                'full_name' => NULL,
                'code' => '9',
            ),
            196 =>
            array(
                'id' => 2697,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Xing\'an',
                'full_name' => NULL,
                'code' => '22',
            ),
            197 =>
            array(
                'id' => 2698,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Xilin Gol',
                'full_name' => NULL,
                'code' => '25',
            ),
            198 =>
            array(
                'id' => 2699,
                'country_id' => 101,
                'division_id' => 39,
                'name' => 'Alxa',
                'full_name' => NULL,
                'code' => '29',
            ),
            199 =>
            array(
                'id' => 2700,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Shenyang',
                'full_name' => NULL,
                'code' => '1',
            ),
            200 =>
            array(
                'id' => 2701,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Dalian',
                'full_name' => NULL,
                'code' => '2',
            ),
            201 =>
            array(
                'id' => 2702,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Anshan',
                'full_name' => NULL,
                'code' => '3',
            ),
            202 =>
            array(
                'id' => 2703,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Fushun',
                'full_name' => NULL,
                'code' => '4',
            ),
            203 =>
            array(
                'id' => 2704,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Benxi',
                'full_name' => NULL,
                'code' => '5',
            ),
            204 =>
            array(
                'id' => 2705,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Dandong',
                'full_name' => NULL,
                'code' => '6',
            ),
            205 =>
            array(
                'id' => 2706,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Jinzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            206 =>
            array(
                'id' => 2707,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Yingkou',
                'full_name' => NULL,
                'code' => '8',
            ),
            207 =>
            array(
                'id' => 2708,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Fuxin',
                'full_name' => NULL,
                'code' => '9',
            ),
            208 =>
            array(
                'id' => 2709,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Liaoyang',
                'full_name' => NULL,
                'code' => '10',
            ),
            209 =>
            array(
                'id' => 2710,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Panjin',
                'full_name' => NULL,
                'code' => '11',
            ),
            210 =>
            array(
                'id' => 2711,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Tieling',
                'full_name' => NULL,
                'code' => '12',
            ),
            211 =>
            array(
                'id' => 2712,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Chaoyang',
                'full_name' => NULL,
                'code' => '13',
            ),
            212 =>
            array(
                'id' => 2713,
                'country_id' => 101,
                'division_id' => 43,
                'name' => 'Huludao',
                'full_name' => NULL,
                'code' => '14',
            ),
            213 =>
            array(
                'id' => 2714,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Changchun',
                'full_name' => NULL,
                'code' => '1',
            ),
            214 =>
            array(
                'id' => 2715,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Jilin',
                'full_name' => NULL,
                'code' => '2',
            ),
            215 =>
            array(
                'id' => 2716,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Siping',
                'full_name' => NULL,
                'code' => '3',
            ),
            216 =>
            array(
                'id' => 2717,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Liaoyuan',
                'full_name' => NULL,
                'code' => '4',
            ),
            217 =>
            array(
                'id' => 2718,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Tonghua',
                'full_name' => NULL,
                'code' => '5',
            ),
            218 =>
            array(
                'id' => 2719,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Baishan',
                'full_name' => NULL,
                'code' => '6',
            ),
            219 =>
            array(
                'id' => 2720,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Songyuan',
                'full_name' => NULL,
                'code' => '7',
            ),
            220 =>
            array(
                'id' => 2721,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Baicheng',
                'full_name' => NULL,
                'code' => '8',
            ),
            221 =>
            array(
                'id' => 2722,
                'country_id' => 101,
                'division_id' => 42,
                'name' => 'Yanbian Korean Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '24',
            ),
            222 =>
            array(
                'id' => 2723,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Harbin',
                'full_name' => NULL,
                'code' => '1',
            ),
            223 =>
            array(
                'id' => 2724,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Qiqihar',
                'full_name' => NULL,
                'code' => '2',
            ),
            224 =>
            array(
                'id' => 2725,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Jixi',
                'full_name' => NULL,
                'code' => '3',
            ),
            225 =>
            array(
                'id' => 2726,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Hegang',
                'full_name' => NULL,
                'code' => '4',
            ),
            226 =>
            array(
                'id' => 2727,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Shuangyashan',
                'full_name' => NULL,
                'code' => '5',
            ),
            227 =>
            array(
                'id' => 2728,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Daqing',
                'full_name' => NULL,
                'code' => '6',
            ),
            228 =>
            array(
                'id' => 2729,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Yichun',
                'full_name' => NULL,
                'code' => '7',
            ),
            229 =>
            array(
                'id' => 2730,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Jiamusi',
                'full_name' => NULL,
                'code' => '8',
            ),
            230 =>
            array(
                'id' => 2731,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Qitaihe',
                'full_name' => NULL,
                'code' => '9',
            ),
            231 =>
            array(
                'id' => 2732,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Mudanjiang',
                'full_name' => NULL,
                'code' => '10',
            ),
            232 =>
            array(
                'id' => 2733,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Heihe',
                'full_name' => NULL,
                'code' => '11',
            ),
            233 =>
            array(
                'id' => 2734,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Suihua',
                'full_name' => NULL,
                'code' => '12',
            ),
            234 =>
            array(
                'id' => 2735,
                'country_id' => 101,
                'division_id' => 35,
                'name' => 'Da Hinggan Ling',
                'full_name' => NULL,
                'code' => '27',
            ),
            235 =>
            array(
                'id' => 2736,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Huangpu',
                'full_name' => NULL,
                'code' => '1',
            ),
            236 =>
            array(
                'id' => 2737,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Luwan',
                'full_name' => NULL,
                'code' => '3',
            ),
            237 =>
            array(
                'id' => 2738,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Xuhui',
                'full_name' => NULL,
                'code' => '4',
            ),
            238 =>
            array(
                'id' => 2739,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Changning',
                'full_name' => NULL,
                'code' => '5',
            ),
            239 =>
            array(
                'id' => 2740,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Jing\'an',
                'full_name' => NULL,
                'code' => '6',
            ),
            240 =>
            array(
                'id' => 2741,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Putuo',
                'full_name' => NULL,
                'code' => '7',
            ),
            241 =>
            array(
                'id' => 2742,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Zhabei',
                'full_name' => NULL,
                'code' => '8',
            ),
            242 =>
            array(
                'id' => 2743,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Hongkou',
                'full_name' => NULL,
                'code' => '9',
            ),
            243 =>
            array(
                'id' => 2744,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Yangpu',
                'full_name' => NULL,
                'code' => '11',
            ),
            244 =>
            array(
                'id' => 2745,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Minhang',
                'full_name' => NULL,
                'code' => '12',
            ),
            245 =>
            array(
                'id' => 2746,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Baoshan',
                'full_name' => NULL,
                'code' => '13',
            ),
            246 =>
            array(
                'id' => 2747,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Jiading',
                'full_name' => NULL,
                'code' => '14',
            ),
            247 =>
            array(
                'id' => 2748,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Pudong New Area',
                'full_name' => NULL,
                'code' => '15',
            ),
            248 =>
            array(
                'id' => 2749,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Jinshan',
                'full_name' => NULL,
                'code' => '16',
            ),
            249 =>
            array(
                'id' => 2750,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Songjiang',
                'full_name' => NULL,
                'code' => '17',
            ),
            250 =>
            array(
                'id' => 2751,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Fengxian',
                'full_name' => NULL,
                'code' => '26',
            ),
            251 =>
            array(
                'id' => 2752,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Qingpu',
                'full_name' => NULL,
                'code' => '29',
            ),
            252 =>
            array(
                'id' => 2753,
                'country_id' => 101,
                'division_id' => 48,
                'name' => 'Chongming',
                'full_name' => NULL,
                'code' => '30',
            ),
            253 =>
            array(
                'id' => 2754,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Nanjing',
                'full_name' => NULL,
                'code' => '1',
            ),
            254 =>
            array(
                'id' => 2755,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Wuxi',
                'full_name' => NULL,
                'code' => '2',
            ),
            255 =>
            array(
                'id' => 2756,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Xuzhou',
                'full_name' => NULL,
                'code' => '3',
            ),
            256 =>
            array(
                'id' => 2757,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Changzhou',
                'full_name' => NULL,
                'code' => '4',
            ),
            257 =>
            array(
                'id' => 2758,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Suzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            258 =>
            array(
                'id' => 2759,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Nantong',
                'full_name' => NULL,
                'code' => '6',
            ),
            259 =>
            array(
                'id' => 2760,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Lianyungang',
                'full_name' => NULL,
                'code' => '7',
            ),
            260 =>
            array(
                'id' => 2761,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Huai\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            261 =>
            array(
                'id' => 2762,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Yancheng',
                'full_name' => NULL,
                'code' => '9',
            ),
            262 =>
            array(
                'id' => 2763,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Yangzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            263 =>
            array(
                'id' => 2764,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Zhenjiang',
                'full_name' => NULL,
                'code' => '11',
            ),
            264 =>
            array(
                'id' => 2765,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Taizhou',
                'full_name' => NULL,
                'code' => '12',
            ),
            265 =>
            array(
                'id' => 2766,
                'country_id' => 101,
                'division_id' => 40,
                'name' => 'Suqian',
                'full_name' => NULL,
                'code' => '13',
            ),
            266 =>
            array(
                'id' => 2767,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Hangzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            267 =>
            array(
                'id' => 2768,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Ningbo',
                'full_name' => NULL,
                'code' => '2',
            ),
            268 =>
            array(
                'id' => 2769,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Wenzhou',
                'full_name' => NULL,
                'code' => '3',
            ),
            269 =>
            array(
                'id' => 2770,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Jiaxing',
                'full_name' => NULL,
                'code' => '4',
            ),
            270 =>
            array(
                'id' => 2771,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Huzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            271 =>
            array(
                'id' => 2772,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Shaoxing',
                'full_name' => NULL,
                'code' => '6',
            ),
            272 =>
            array(
                'id' => 2773,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Jinhua',
                'full_name' => NULL,
                'code' => '7',
            ),
            273 =>
            array(
                'id' => 2774,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Quzhou',
                'full_name' => NULL,
                'code' => '8',
            ),
            274 =>
            array(
                'id' => 2775,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Zhoushan',
                'full_name' => NULL,
                'code' => '9',
            ),
            275 =>
            array(
                'id' => 2776,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Taizhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            276 =>
            array(
                'id' => 2777,
                'country_id' => 101,
                'division_id' => 56,
                'name' => 'Lishui',
                'full_name' => NULL,
                'code' => '11',
            ),
            277 =>
            array(
                'id' => 2778,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Hefei',
                'full_name' => NULL,
                'code' => '1',
            ),
            278 =>
            array(
                'id' => 2779,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Wuhu',
                'full_name' => NULL,
                'code' => '2',
            ),
            279 =>
            array(
                'id' => 2780,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Bengbu',
                'full_name' => NULL,
                'code' => '3',
            ),
            280 =>
            array(
                'id' => 2781,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Huainan',
                'full_name' => NULL,
                'code' => '4',
            ),
            281 =>
            array(
                'id' => 2782,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Ma\'anshan',
                'full_name' => NULL,
                'code' => '5',
            ),
            282 =>
            array(
                'id' => 2783,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Huaibei',
                'full_name' => NULL,
                'code' => '6',
            ),
            283 =>
            array(
                'id' => 2784,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Tongling',
                'full_name' => NULL,
                'code' => '7',
            ),
            284 =>
            array(
                'id' => 2785,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Anqing',
                'full_name' => NULL,
                'code' => '8',
            ),
            285 =>
            array(
                'id' => 2786,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Huangshan',
                'full_name' => NULL,
                'code' => '10',
            ),
            286 =>
            array(
                'id' => 2787,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Chuzhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            287 =>
            array(
                'id' => 2788,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Fuyang',
                'full_name' => NULL,
                'code' => '12',
            ),
            288 =>
            array(
                'id' => 2789,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Suzhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            289 =>
            array(
                'id' => 2790,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Lu\'an',
                'full_name' => NULL,
                'code' => '15',
            ),
            290 =>
            array(
                'id' => 2791,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Bozhou',
                'full_name' => NULL,
                'code' => '16',
            ),
            291 =>
            array(
                'id' => 2792,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Chizhou',
                'full_name' => NULL,
                'code' => '17',
            ),
            292 =>
            array(
                'id' => 2793,
                'country_id' => 101,
                'division_id' => 25,
                'name' => 'Xuancheng',
                'full_name' => NULL,
                'code' => '18',
            ),
            293 =>
            array(
                'id' => 2794,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Fuzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            294 =>
            array(
                'id' => 2795,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Xiamen',
                'full_name' => NULL,
                'code' => '2',
            ),
            295 =>
            array(
                'id' => 2796,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Putian',
                'full_name' => NULL,
                'code' => '3',
            ),
            296 =>
            array(
                'id' => 2797,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Sanming',
                'full_name' => NULL,
                'code' => '4',
            ),
            297 =>
            array(
                'id' => 2798,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Quanzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            298 =>
            array(
                'id' => 2799,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Zhangzhou',
                'full_name' => NULL,
                'code' => '6',
            ),
            299 =>
            array(
                'id' => 2800,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Nanping',
                'full_name' => NULL,
                'code' => '7',
            ),
            300 =>
            array(
                'id' => 2801,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Longyan',
                'full_name' => NULL,
                'code' => '8',
            ),
            301 =>
            array(
                'id' => 2802,
                'country_id' => 101,
                'division_id' => 28,
                'name' => 'Ningde',
                'full_name' => NULL,
                'code' => '9',
            ),
            302 =>
            array(
                'id' => 2803,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Nanchang',
                'full_name' => NULL,
                'code' => '1',
            ),
            303 =>
            array(
                'id' => 2804,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Jingdezhen',
                'full_name' => NULL,
                'code' => '2',
            ),
            304 =>
            array(
                'id' => 2805,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Pingxiang',
                'full_name' => NULL,
                'code' => '3',
            ),
            305 =>
            array(
                'id' => 2806,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Jiujiang',
                'full_name' => NULL,
                'code' => '4',
            ),
            306 =>
            array(
                'id' => 2807,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Xinyu',
                'full_name' => NULL,
                'code' => '5',
            ),
            307 =>
            array(
                'id' => 2808,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Yingtan',
                'full_name' => NULL,
                'code' => '6',
            ),
            308 =>
            array(
                'id' => 2809,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Ganzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            309 =>
            array(
                'id' => 2810,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Ji\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            310 =>
            array(
                'id' => 2811,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Yichun',
                'full_name' => NULL,
                'code' => '9',
            ),
            311 =>
            array(
                'id' => 2812,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Fuzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            312 =>
            array(
                'id' => 2813,
                'country_id' => 101,
                'division_id' => 41,
                'name' => 'Shangrao',
                'full_name' => NULL,
                'code' => '11',
            ),
            313 =>
            array(
                'id' => 2814,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Jinan',
                'full_name' => NULL,
                'code' => '1',
            ),
            314 =>
            array(
                'id' => 2815,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Qingdao',
                'full_name' => NULL,
                'code' => '2',
            ),
            315 =>
            array(
                'id' => 2816,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Zibo',
                'full_name' => NULL,
                'code' => '3',
            ),
            316 =>
            array(
                'id' => 2817,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Zaozhuang',
                'full_name' => NULL,
                'code' => '4',
            ),
            317 =>
            array(
                'id' => 2818,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Dongying',
                'full_name' => NULL,
                'code' => '5',
            ),
            318 =>
            array(
                'id' => 2819,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Yantai',
                'full_name' => NULL,
                'code' => '6',
            ),
            319 =>
            array(
                'id' => 2820,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Weifang',
                'full_name' => NULL,
                'code' => '7',
            ),
            320 =>
            array(
                'id' => 2821,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Jining',
                'full_name' => NULL,
                'code' => '8',
            ),
            321 =>
            array(
                'id' => 2822,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Tai\'an',
                'full_name' => NULL,
                'code' => '9',
            ),
            322 =>
            array(
                'id' => 2823,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Weihai',
                'full_name' => NULL,
                'code' => '10',
            ),
            323 =>
            array(
                'id' => 2824,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Rizhao',
                'full_name' => NULL,
                'code' => '11',
            ),
            324 =>
            array(
                'id' => 2825,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Laiwu',
                'full_name' => NULL,
                'code' => '12',
            ),
            325 =>
            array(
                'id' => 2826,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Linyi',
                'full_name' => NULL,
                'code' => '13',
            ),
            326 =>
            array(
                'id' => 2827,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Dezhou',
                'full_name' => NULL,
                'code' => '14',
            ),
            327 =>
            array(
                'id' => 2828,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Liaocheng',
                'full_name' => NULL,
                'code' => '15',
            ),
            328 =>
            array(
                'id' => 2829,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Binzhou',
                'full_name' => NULL,
                'code' => '16',
            ),
            329 =>
            array(
                'id' => 2830,
                'country_id' => 101,
                'division_id' => 47,
                'name' => 'Heze',
                'full_name' => NULL,
                'code' => '17',
            ),
            330 =>
            array(
                'id' => 2831,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Zhengzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            331 =>
            array(
                'id' => 2832,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Kaifeng',
                'full_name' => NULL,
                'code' => '2',
            ),
            332 =>
            array(
                'id' => 2833,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Luoyang',
                'full_name' => NULL,
                'code' => '3',
            ),
            333 =>
            array(
                'id' => 2834,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Pingdingshan',
                'full_name' => NULL,
                'code' => '4',
            ),
            334 =>
            array(
                'id' => 2835,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Anyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            335 =>
            array(
                'id' => 2836,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Hebi',
                'full_name' => NULL,
                'code' => '6',
            ),
            336 =>
            array(
                'id' => 2837,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Xinxiang',
                'full_name' => NULL,
                'code' => '7',
            ),
            337 =>
            array(
                'id' => 2838,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Jiaozuo',
                'full_name' => NULL,
                'code' => '8',
            ),
            338 =>
            array(
                'id' => 2839,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Puyang',
                'full_name' => NULL,
                'code' => '9',
            ),
            339 =>
            array(
                'id' => 2840,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Xuchang',
                'full_name' => NULL,
                'code' => '10',
            ),
            340 =>
            array(
                'id' => 2841,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Luohe',
                'full_name' => NULL,
                'code' => '11',
            ),
            341 =>
            array(
                'id' => 2842,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Sanmenxia',
                'full_name' => NULL,
                'code' => '12',
            ),
            342 =>
            array(
                'id' => 2843,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Nanyang',
                'full_name' => NULL,
                'code' => '13',
            ),
            343 =>
            array(
                'id' => 2844,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Shangqiu',
                'full_name' => NULL,
                'code' => '14',
            ),
            344 =>
            array(
                'id' => 2845,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Xinyang',
                'full_name' => NULL,
                'code' => '15',
            ),
            345 =>
            array(
                'id' => 2846,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Zhoukou',
                'full_name' => NULL,
                'code' => '16',
            ),
            346 =>
            array(
                'id' => 2847,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Zhumadian',
                'full_name' => NULL,
                'code' => '17',
            ),
            347 =>
            array(
                'id' => 2848,
                'country_id' => 101,
                'division_id' => 36,
                'name' => 'Jiyuan',
                'full_name' => NULL,
                'code' => '18',
            ),
            348 =>
            array(
                'id' => 2849,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Wuhan',
                'full_name' => NULL,
                'code' => '1',
            ),
            349 =>
            array(
                'id' => 2850,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Huangshi',
                'full_name' => NULL,
                'code' => '2',
            ),
            350 =>
            array(
                'id' => 2851,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Shiyan',
                'full_name' => NULL,
                'code' => '3',
            ),
            351 =>
            array(
                'id' => 2852,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Yichang',
                'full_name' => NULL,
                'code' => '5',
            ),
            352 =>
            array(
                'id' => 2853,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Xiangyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            353 =>
            array(
                'id' => 2854,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Ezhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            354 =>
            array(
                'id' => 2855,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Jingmen',
                'full_name' => NULL,
                'code' => '8',
            ),
            355 =>
            array(
                'id' => 2856,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Xiaogan',
                'full_name' => NULL,
                'code' => '9',
            ),
            356 =>
            array(
                'id' => 2857,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Jingzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            357 =>
            array(
                'id' => 2858,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Huanggang',
                'full_name' => NULL,
                'code' => '11',
            ),
            358 =>
            array(
                'id' => 2859,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Xianning',
                'full_name' => NULL,
                'code' => '12',
            ),
            359 =>
            array(
                'id' => 2860,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Suizhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            360 =>
            array(
                'id' => 2861,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Enshi Tujia-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            361 =>
            array(
                'id' => 2862,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Xiantao',
                'full_name' => NULL,
                'code' => '94',
            ),
            362 =>
            array(
                'id' => 2863,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Qianjiang',
                'full_name' => NULL,
                'code' => '95',
            ),
            363 =>
            array(
                'id' => 2864,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Tianmen',
                'full_name' => NULL,
                'code' => '96',
            ),
            364 =>
            array(
                'id' => 2865,
                'country_id' => 101,
                'division_id' => 37,
                'name' => 'Shennongjia',
                'full_name' => NULL,
                'code' => 'a21',
            ),
            365 =>
            array(
                'id' => 2866,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Changsha',
                'full_name' => NULL,
                'code' => '1',
            ),
            366 =>
            array(
                'id' => 2867,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Zhuzhou',
                'full_name' => NULL,
                'code' => '2',
            ),
            367 =>
            array(
                'id' => 2868,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Xiangtan',
                'full_name' => NULL,
                'code' => '3',
            ),
            368 =>
            array(
                'id' => 2869,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Hengyang',
                'full_name' => NULL,
                'code' => '4',
            ),
            369 =>
            array(
                'id' => 2870,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Shaoyang',
                'full_name' => NULL,
                'code' => '5',
            ),
            370 =>
            array(
                'id' => 2871,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Yueyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            371 =>
            array(
                'id' => 2872,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Changde',
                'full_name' => NULL,
                'code' => '7',
            ),
            372 =>
            array(
                'id' => 2873,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Zhangjiajie',
                'full_name' => NULL,
                'code' => '8',
            ),
            373 =>
            array(
                'id' => 2874,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Yiyang',
                'full_name' => NULL,
                'code' => '9',
            ),
            374 =>
            array(
                'id' => 2875,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Chenzhou',
                'full_name' => NULL,
                'code' => '10',
            ),
            375 =>
            array(
                'id' => 2876,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Yongzhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            376 =>
            array(
                'id' => 2877,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Huaihua',
                'full_name' => NULL,
                'code' => '12',
            ),
            377 =>
            array(
                'id' => 2878,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Loudi',
                'full_name' => NULL,
                'code' => '13',
            ),
            378 =>
            array(
                'id' => 2879,
                'country_id' => 101,
                'division_id' => 38,
                'name' => 'Xiangxi Tujia-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '31',
            ),
            379 =>
            array(
                'id' => 2880,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Guangzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            380 =>
            array(
                'id' => 2881,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Shaoguan',
                'full_name' => NULL,
                'code' => '2',
            ),
            381 =>
            array(
                'id' => 2882,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Shenzhen',
                'full_name' => NULL,
                'code' => '3',
            ),
            382 =>
            array(
                'id' => 2883,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Zhuhai',
                'full_name' => NULL,
                'code' => '4',
            ),
            383 =>
            array(
                'id' => 2884,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Shantou',
                'full_name' => NULL,
                'code' => '5',
            ),
            384 =>
            array(
                'id' => 2885,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Foshan',
                'full_name' => NULL,
                'code' => '6',
            ),
            385 =>
            array(
                'id' => 2886,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Jiangmen',
                'full_name' => NULL,
                'code' => '7',
            ),
            386 =>
            array(
                'id' => 2887,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Zhanjiang',
                'full_name' => NULL,
                'code' => '8',
            ),
            387 =>
            array(
                'id' => 2888,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Maoming',
                'full_name' => NULL,
                'code' => '9',
            ),
            388 =>
            array(
                'id' => 2889,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Zhaoqing',
                'full_name' => NULL,
                'code' => '12',
            ),
            389 =>
            array(
                'id' => 2890,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Huizhou',
                'full_name' => NULL,
                'code' => '13',
            ),
            390 =>
            array(
                'id' => 2891,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Meizhou',
                'full_name' => NULL,
                'code' => '14',
            ),
            391 =>
            array(
                'id' => 2892,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Shanwei',
                'full_name' => NULL,
                'code' => '15',
            ),
            392 =>
            array(
                'id' => 2893,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Heyuan',
                'full_name' => NULL,
                'code' => '16',
            ),
            393 =>
            array(
                'id' => 2894,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Yangjiang',
                'full_name' => NULL,
                'code' => '17',
            ),
            394 =>
            array(
                'id' => 2895,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Qingyuan',
                'full_name' => NULL,
                'code' => '18',
            ),
            395 =>
            array(
                'id' => 2896,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Dongguan',
                'full_name' => NULL,
                'code' => '19',
            ),
            396 =>
            array(
                'id' => 2897,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Zhongshan',
                'full_name' => NULL,
                'code' => '20',
            ),
            397 =>
            array(
                'id' => 2898,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Chaozhou',
                'full_name' => NULL,
                'code' => '51',
            ),
            398 =>
            array(
                'id' => 2899,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Jieyang',
                'full_name' => NULL,
                'code' => '52',
            ),
            399 =>
            array(
                'id' => 2900,
                'country_id' => 101,
                'division_id' => 30,
                'name' => 'Yunfu',
                'full_name' => NULL,
                'code' => '53',
            ),
            400 =>
            array(
                'id' => 2901,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Nanning',
                'full_name' => NULL,
                'code' => '1',
            ),
            401 =>
            array(
                'id' => 2902,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Liuzhou',
                'full_name' => NULL,
                'code' => '2',
            ),
            402 =>
            array(
                'id' => 2903,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Guilin',
                'full_name' => NULL,
                'code' => '3',
            ),
            403 =>
            array(
                'id' => 2904,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Wuzhou',
                'full_name' => NULL,
                'code' => '4',
            ),
            404 =>
            array(
                'id' => 2905,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Beihai',
                'full_name' => NULL,
                'code' => '5',
            ),
            405 =>
            array(
                'id' => 2906,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Fangchenggang',
                'full_name' => NULL,
                'code' => '6',
            ),
            406 =>
            array(
                'id' => 2907,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Qinzhou',
                'full_name' => NULL,
                'code' => '7',
            ),
            407 =>
            array(
                'id' => 2908,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Guigang',
                'full_name' => NULL,
                'code' => '8',
            ),
            408 =>
            array(
                'id' => 2909,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Yulin',
                'full_name' => NULL,
                'code' => '9',
            ),
            409 =>
            array(
                'id' => 2910,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Baise',
                'full_name' => NULL,
                'code' => '10',
            ),
            410 =>
            array(
                'id' => 2911,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Hezhou',
                'full_name' => NULL,
                'code' => '11',
            ),
            411 =>
            array(
                'id' => 2912,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Hechi',
                'full_name' => NULL,
                'code' => '12',
            ),
            412 =>
            array(
                'id' => 2913,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Laibin',
                'full_name' => NULL,
                'code' => '13',
            ),
            413 =>
            array(
                'id' => 2914,
                'country_id' => 101,
                'division_id' => 31,
                'name' => 'Chongzuo',
                'full_name' => NULL,
                'code' => '14',
            ),
            414 =>
            array(
                'id' => 2915,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Haikou',
                'full_name' => NULL,
                'code' => '1',
            ),
            415 =>
            array(
                'id' => 2916,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Sanya',
                'full_name' => NULL,
                'code' => '2',
            ),
            416 =>
            array(
                'id' => 2917,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Shansha',
                'full_name' => NULL,
                'code' => '3',
            ),
            417 =>
            array(
                'id' => 2918,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Wuzhishan',
                'full_name' => NULL,
                'code' => '91',
            ),
            418 =>
            array(
                'id' => 2919,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Qionghai',
                'full_name' => NULL,
                'code' => '92',
            ),
            419 =>
            array(
                'id' => 2920,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Danzhou',
                'full_name' => NULL,
                'code' => '93',
            ),
            420 =>
            array(
                'id' => 2921,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Wenchang',
                'full_name' => NULL,
                'code' => '95',
            ),
            421 =>
            array(
                'id' => 2922,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Wanning',
                'full_name' => NULL,
                'code' => '96',
            ),
            422 =>
            array(
                'id' => 2923,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Dongfang',
                'full_name' => NULL,
                'code' => '97',
            ),
            423 =>
            array(
                'id' => 2924,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Ding\'an',
                'full_name' => NULL,
                'code' => 'a25',
            ),
            424 =>
            array(
                'id' => 2925,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Tunchang',
                'full_name' => NULL,
                'code' => 'a26',
            ),
            425 =>
            array(
                'id' => 2926,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Cengmai',
                'full_name' => NULL,
                'code' => 'a27',
            ),
            426 =>
            array(
                'id' => 2927,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Lingao',
                'full_name' => NULL,
                'code' => 'a28',
            ),
            427 =>
            array(
                'id' => 2928,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Baisha Li Autonomous County',
                'full_name' => NULL,
                'code' => 'a30',
            ),
            428 =>
            array(
                'id' => 2929,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Jiang Li Autonomous County',
                'full_name' => NULL,
                'code' => 'a31',
            ),
            429 =>
            array(
                'id' => 2930,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Ledong Li Autonomous County',
                'full_name' => NULL,
                'code' => 'a33',
            ),
            430 =>
            array(
                'id' => 2931,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Lingshui Li Autonomous County',
                'full_name' => NULL,
                'code' => 'a34',
            ),
            431 =>
            array(
                'id' => 2932,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Baoting Li-Miao Autonomous County',
                'full_name' => NULL,
                'code' => 'a35',
            ),
            432 =>
            array(
                'id' => 2933,
                'country_id' => 101,
                'division_id' => 33,
                'name' => 'Qiongzhong Li-Miao Autonomous County',
                'full_name' => NULL,
                'code' => 'a36',
            ),
            433 =>
            array(
                'id' => 2934,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Wanzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            434 =>
            array(
                'id' => 2935,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Fuling',
                'full_name' => NULL,
                'code' => '2',
            ),
            435 =>
            array(
                'id' => 2936,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Yuzhong',
                'full_name' => NULL,
                'code' => '3',
            ),
            436 =>
            array(
                'id' => 2937,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Dadukou',
                'full_name' => NULL,
                'code' => '4',
            ),
            437 =>
            array(
                'id' => 2938,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Jiangbei',
                'full_name' => NULL,
                'code' => '5',
            ),
            438 =>
            array(
                'id' => 2939,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Shapingba',
                'full_name' => NULL,
                'code' => '6',
            ),
            439 =>
            array(
                'id' => 2940,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Jiulongpo',
                'full_name' => NULL,
                'code' => '7',
            ),
            440 =>
            array(
                'id' => 2941,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Nan\'an',
                'full_name' => NULL,
                'code' => '8',
            ),
            441 =>
            array(
                'id' => 2942,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Beibei',
                'full_name' => NULL,
                'code' => '9',
            ),
            442 =>
            array(
                'id' => 2943,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Liangjiang',
                'full_name' => 'Liangjiang New Area ',
                'code' => '85',
            ),
            443 =>
            array(
                'id' => 2944,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Wansheng',
                'full_name' => NULL,
                'code' => '10',
            ),
            444 =>
            array(
                'id' => 2945,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Shuangqiao',
                'full_name' => NULL,
                'code' => '11',
            ),
            445 =>
            array(
                'id' => 2946,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Yubei',
                'full_name' => NULL,
                'code' => '12',
            ),
            446 =>
            array(
                'id' => 2947,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Ba\'nan',
                'full_name' => NULL,
                'code' => '13',
            ),
            447 =>
            array(
                'id' => 2948,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Changshou',
                'full_name' => NULL,
                'code' => '21',
            ),
            448 =>
            array(
                'id' => 2949,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Qijiang',
                'full_name' => NULL,
                'code' => '22',
            ),
            449 =>
            array(
                'id' => 2950,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Tongnan',
                'full_name' => NULL,
                'code' => '23',
            ),
            450 =>
            array(
                'id' => 2951,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Tongliang',
                'full_name' => NULL,
                'code' => '24',
            ),
            451 =>
            array(
                'id' => 2952,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Dazu',
                'full_name' => NULL,
                'code' => '25',
            ),
            452 =>
            array(
                'id' => 2953,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Rongchang',
                'full_name' => NULL,
                'code' => '26',
            ),
            453 =>
            array(
                'id' => 2954,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Bishan',
                'full_name' => NULL,
                'code' => '27',
            ),
            454 =>
            array(
                'id' => 2955,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Liangping',
                'full_name' => NULL,
                'code' => '28',
            ),
            455 =>
            array(
                'id' => 2956,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Chengkou',
                'full_name' => NULL,
                'code' => '29',
            ),
            456 =>
            array(
                'id' => 2957,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Fengdu',
                'full_name' => NULL,
                'code' => '30',
            ),
            457 =>
            array(
                'id' => 2958,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Dianjiang',
                'full_name' => NULL,
                'code' => '31',
            ),
            458 =>
            array(
                'id' => 2959,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Wulong',
                'full_name' => NULL,
                'code' => '32',
            ),
            459 =>
            array(
                'id' => 2960,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Zhongxian',
                'full_name' => NULL,
                'code' => '33',
            ),
            460 =>
            array(
                'id' => 2961,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Kaixian',
                'full_name' => NULL,
                'code' => '34',
            ),
            461 =>
            array(
                'id' => 2962,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Yunyang',
                'full_name' => NULL,
                'code' => '35',
            ),
            462 =>
            array(
                'id' => 2963,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Fengjie',
                'full_name' => NULL,
                'code' => '36',
            ),
            463 =>
            array(
                'id' => 2964,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Wushan',
                'full_name' => NULL,
                'code' => '37',
            ),
            464 =>
            array(
                'id' => 2965,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Wuxi',
                'full_name' => NULL,
                'code' => '38',
            ),
            465 =>
            array(
                'id' => 2966,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Qianjiang',
                'full_name' => NULL,
                'code' => '39',
            ),
            466 =>
            array(
                'id' => 2967,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Shizhu Tujia Autonomous Country',
                'full_name' => NULL,
                'code' => '40',
            ),
            467 =>
            array(
                'id' => 2968,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Xiushan Tujia-Miao Autonomous Country',
                'full_name' => NULL,
                'code' => '41',
            ),
            468 =>
            array(
                'id' => 2969,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Youyang Tujia-Miao Autonomous Country',
                'full_name' => NULL,
                'code' => '42',
            ),
            469 =>
            array(
                'id' => 2970,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Pengshui Miao-Tujia Autonomous Country',
                'full_name' => NULL,
                'code' => '43',
            ),
            470 =>
            array(
                'id' => 2971,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Jiangjin',
                'full_name' => NULL,
                'code' => '81',
            ),
            471 =>
            array(
                'id' => 2972,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Hechuan',
                'full_name' => NULL,
                'code' => '82',
            ),
            472 =>
            array(
                'id' => 2973,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Yongchuan',
                'full_name' => NULL,
                'code' => '83',
            ),
            473 =>
            array(
                'id' => 2974,
                'country_id' => 101,
                'division_id' => 27,
                'name' => 'Liangjiangxinqu',
                'full_name' => NULL,
                'code' => '84',
            ),
            474 =>
            array(
                'id' => 2975,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Chengdu',
                'full_name' => NULL,
                'code' => '1',
            ),
            475 =>
            array(
                'id' => 2976,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Zigong',
                'full_name' => NULL,
                'code' => '3',
            ),
            476 =>
            array(
                'id' => 2977,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Panzhihua',
                'full_name' => NULL,
                'code' => '4',
            ),
            477 =>
            array(
                'id' => 2978,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Luzhou',
                'full_name' => NULL,
                'code' => '5',
            ),
            478 =>
            array(
                'id' => 2979,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Deyang',
                'full_name' => NULL,
                'code' => '6',
            ),
            479 =>
            array(
                'id' => 2980,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Mianyang',
                'full_name' => NULL,
                'code' => '7',
            ),
            480 =>
            array(
                'id' => 2981,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Guangyuan',
                'full_name' => NULL,
                'code' => '8',
            ),
            481 =>
            array(
                'id' => 2982,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Suining',
                'full_name' => NULL,
                'code' => '9',
            ),
            482 =>
            array(
                'id' => 2983,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Neijiang',
                'full_name' => NULL,
                'code' => '10',
            ),
            483 =>
            array(
                'id' => 2984,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Leshan',
                'full_name' => NULL,
                'code' => '11',
            ),
            484 =>
            array(
                'id' => 2985,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Nanchong',
                'full_name' => NULL,
                'code' => '13',
            ),
            485 =>
            array(
                'id' => 2986,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Meishan',
                'full_name' => NULL,
                'code' => '14',
            ),
            486 =>
            array(
                'id' => 2987,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Yibin',
                'full_name' => NULL,
                'code' => '15',
            ),
            487 =>
            array(
                'id' => 2988,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Guang\'an',
                'full_name' => NULL,
                'code' => '16',
            ),
            488 =>
            array(
                'id' => 2989,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Dazhou',
                'full_name' => NULL,
                'code' => '17',
            ),
            489 =>
            array(
                'id' => 2990,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Ya\'an',
                'full_name' => NULL,
                'code' => '18',
            ),
            490 =>
            array(
                'id' => 2991,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Bazhong',
                'full_name' => NULL,
                'code' => '19',
            ),
            491 =>
            array(
                'id' => 2992,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Ziyang',
                'full_name' => NULL,
                'code' => '20',
            ),
            492 =>
            array(
                'id' => 2993,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Aba Tibetan-Qiang Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '32',
            ),
            493 =>
            array(
                'id' => 2994,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Garze Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '33',
            ),
            494 =>
            array(
                'id' => 2995,
                'country_id' => 101,
                'division_id' => 50,
                'name' => 'Liangshan Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '34',
            ),
            495 =>
            array(
                'id' => 2996,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Guiyang',
                'full_name' => NULL,
                'code' => '1',
            ),
            496 =>
            array(
                'id' => 2997,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Liupanshui',
                'full_name' => NULL,
                'code' => '2',
            ),
            497 =>
            array(
                'id' => 2998,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Zunyi',
                'full_name' => NULL,
                'code' => '3',
            ),
            498 =>
            array(
                'id' => 2999,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Anshun',
                'full_name' => NULL,
                'code' => '4',
            ),
            499 =>
            array(
                'id' => 3000,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Tongren',
                'full_name' => NULL,
                'code' => '22',
            ),
        ));
        DB::table('cities')->insert(array(
            0 =>
            array(
                'id' => 3001,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Qianxinan Buyi-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            1 =>
            array(
                'id' => 3002,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Bijie',
                'full_name' => NULL,
                'code' => '24',
            ),
            2 =>
            array(
                'id' => 3003,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Qiandongnan Miao-Dong Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            3 =>
            array(
                'id' => 3004,
                'country_id' => 101,
                'division_id' => 32,
                'name' => 'Qiannan Buyi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            4 =>
            array(
                'id' => 3005,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Kunming',
                'full_name' => NULL,
                'code' => '1',
            ),
            5 =>
            array(
                'id' => 3006,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Qujing',
                'full_name' => NULL,
                'code' => '3',
            ),
            6 =>
            array(
                'id' => 3007,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Yuxi',
                'full_name' => NULL,
                'code' => '4',
            ),
            7 =>
            array(
                'id' => 3008,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Baoshan',
                'full_name' => NULL,
                'code' => '5',
            ),
            8 =>
            array(
                'id' => 3009,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Zhaotong',
                'full_name' => NULL,
                'code' => '6',
            ),
            9 =>
            array(
                'id' => 3010,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Lijiang',
                'full_name' => NULL,
                'code' => '7',
            ),
            10 =>
            array(
                'id' => 3011,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Pu\'er',
                'full_name' => NULL,
                'code' => '8',
            ),
            11 =>
            array(
                'id' => 3012,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Lincang',
                'full_name' => NULL,
                'code' => '9',
            ),
            12 =>
            array(
                'id' => 3013,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Chuxiong Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            13 =>
            array(
                'id' => 3014,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Honghe Hani-Yi Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '25',
            ),
            14 =>
            array(
                'id' => 3015,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Wenshan Zhuang-Miao Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            15 =>
            array(
                'id' => 3016,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Xishuangbanna Dai Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            16 =>
            array(
                'id' => 3017,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Dali Bai Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '29',
            ),
            17 =>
            array(
                'id' => 3018,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Dehong Dai-Jingpo Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '31',
            ),
            18 =>
            array(
                'id' => 3019,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Nujiang Lisu Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '33',
            ),
            19 =>
            array(
                'id' => 3020,
                'country_id' => 101,
                'division_id' => 55,
                'name' => 'Diqing Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '34',
            ),
            20 =>
            array(
                'id' => 3021,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Lhasa',
                'full_name' => NULL,
                'code' => '1',
            ),
            21 =>
            array(
                'id' => 3022,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Qamdo',
                'full_name' => NULL,
                'code' => '21',
            ),
            22 =>
            array(
                'id' => 3023,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Shannan',
                'full_name' => NULL,
                'code' => '22',
            ),
            23 =>
            array(
                'id' => 3024,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Xigaze',
                'full_name' => NULL,
                'code' => '23',
            ),
            24 =>
            array(
                'id' => 3025,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Nagqu',
                'full_name' => NULL,
                'code' => '24',
            ),
            25 =>
            array(
                'id' => 3026,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Ngari',
                'full_name' => NULL,
                'code' => '25',
            ),
            26 =>
            array(
                'id' => 3027,
                'country_id' => 101,
                'division_id' => 53,
                'name' => 'Nyingchi',
                'full_name' => NULL,
                'code' => '26',
            ),
            27 =>
            array(
                'id' => 3028,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Xi\'an',
                'full_name' => NULL,
                'code' => '1',
            ),
            28 =>
            array(
                'id' => 3029,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Tongchuan',
                'full_name' => NULL,
                'code' => '2',
            ),
            29 =>
            array(
                'id' => 3030,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Baoji',
                'full_name' => NULL,
                'code' => '3',
            ),
            30 =>
            array(
                'id' => 3031,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Xianyang',
                'full_name' => NULL,
                'code' => '4',
            ),
            31 =>
            array(
                'id' => 3032,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Weinan',
                'full_name' => NULL,
                'code' => '5',
            ),
            32 =>
            array(
                'id' => 3033,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Yan\'an',
                'full_name' => NULL,
                'code' => '6',
            ),
            33 =>
            array(
                'id' => 3034,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Hanzhong',
                'full_name' => NULL,
                'code' => '7',
            ),
            34 =>
            array(
                'id' => 3035,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Yulin',
                'full_name' => NULL,
                'code' => '8',
            ),
            35 =>
            array(
                'id' => 3036,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Ankang',
                'full_name' => NULL,
                'code' => '9',
            ),
            36 =>
            array(
                'id' => 3037,
                'country_id' => 101,
                'division_id' => 46,
                'name' => 'Shangluo',
                'full_name' => NULL,
                'code' => '10',
            ),
            37 =>
            array(
                'id' => 3038,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Lanzhou',
                'full_name' => NULL,
                'code' => '1',
            ),
            38 =>
            array(
                'id' => 3039,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Jinchang',
                'full_name' => NULL,
                'code' => '2',
            ),
            39 =>
            array(
                'id' => 3040,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Baiyin',
                'full_name' => NULL,
                'code' => '3',
            ),
            40 =>
            array(
                'id' => 3041,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Tianshui',
                'full_name' => NULL,
                'code' => '4',
            ),
            41 =>
            array(
                'id' => 3042,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Jiayuguan',
                'full_name' => NULL,
                'code' => '5',
            ),
            42 =>
            array(
                'id' => 3043,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Wuwei',
                'full_name' => NULL,
                'code' => '6',
            ),
            43 =>
            array(
                'id' => 3044,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Zhangye',
                'full_name' => NULL,
                'code' => '7',
            ),
            44 =>
            array(
                'id' => 3045,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Pingliang',
                'full_name' => NULL,
                'code' => '8',
            ),
            45 =>
            array(
                'id' => 3046,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Jiuquan',
                'full_name' => NULL,
                'code' => '9',
            ),
            46 =>
            array(
                'id' => 3047,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Qingyang',
                'full_name' => NULL,
                'code' => '10',
            ),
            47 =>
            array(
                'id' => 3048,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Dingxi',
                'full_name' => NULL,
                'code' => '11',
            ),
            48 =>
            array(
                'id' => 3049,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Longnan',
                'full_name' => NULL,
                'code' => '12',
            ),
            49 =>
            array(
                'id' => 3050,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Linxia Hui Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '29',
            ),
            50 =>
            array(
                'id' => 3051,
                'country_id' => 101,
                'division_id' => 29,
                'name' => 'Gannan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '30',
            ),
            51 =>
            array(
                'id' => 3052,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Xining',
                'full_name' => NULL,
                'code' => '1',
            ),
            52 =>
            array(
                'id' => 3053,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Haidong',
                'full_name' => NULL,
                'code' => '21',
            ),
            53 =>
            array(
                'id' => 3054,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Haibei Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '22',
            ),
            54 =>
            array(
                'id' => 3055,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Huangnan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            55 =>
            array(
                'id' => 3056,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Hainan Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '25',
            ),
            56 =>
            array(
                'id' => 3057,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Guoluo Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '26',
            ),
            57 =>
            array(
                'id' => 3058,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Yushu Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            58 =>
            array(
                'id' => 3059,
                'country_id' => 101,
                'division_id' => 45,
                'name' => 'Haixi Mongol-Tibetan Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            59 =>
            array(
                'id' => 3060,
                'country_id' => 101,
                'division_id' => 44,
                'name' => 'Yinchuan',
                'full_name' => NULL,
                'code' => '1',
            ),
            60 =>
            array(
                'id' => 3061,
                'country_id' => 101,
                'division_id' => 44,
                'name' => 'Shizuishan',
                'full_name' => NULL,
                'code' => '2',
            ),
            61 =>
            array(
                'id' => 3062,
                'country_id' => 101,
                'division_id' => 44,
                'name' => 'Wuzhong',
                'full_name' => NULL,
                'code' => '3',
            ),
            62 =>
            array(
                'id' => 3063,
                'country_id' => 101,
                'division_id' => 44,
                'name' => 'Guyuan',
                'full_name' => NULL,
                'code' => '4',
            ),
            63 =>
            array(
                'id' => 3064,
                'country_id' => 101,
                'division_id' => 44,
                'name' => 'Zhongwei',
                'full_name' => NULL,
                'code' => '5',
            ),
            64 =>
            array(
                'id' => 3065,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Urumqi',
                'full_name' => NULL,
                'code' => '1',
            ),
            65 =>
            array(
                'id' => 3066,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Karamay',
                'full_name' => NULL,
                'code' => '2',
            ),
            66 =>
            array(
                'id' => 3067,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Turpan',
                'full_name' => NULL,
                'code' => '21',
            ),
            67 =>
            array(
                'id' => 3068,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Hami',
                'full_name' => NULL,
                'code' => '22',
            ),
            68 =>
            array(
                'id' => 3069,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Changji Hui Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '23',
            ),
            69 =>
            array(
                'id' => 3070,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Bortala Mongol Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '27',
            ),
            70 =>
            array(
                'id' => 3071,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Bayingolin Mongol Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '28',
            ),
            71 =>
            array(
                'id' => 3072,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Aksu',
                'full_name' => NULL,
                'code' => '29',
            ),
            72 =>
            array(
                'id' => 3073,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Kizilsu Kirgiz Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '30',
            ),
            73 =>
            array(
                'id' => 3074,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Kashi',
                'full_name' => NULL,
                'code' => '31',
            ),
            74 =>
            array(
                'id' => 3075,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Hotan',
                'full_name' => NULL,
                'code' => '32',
            ),
            75 =>
            array(
                'id' => 3076,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Ili Kazakh Autonomous Prefecture',
                'full_name' => NULL,
                'code' => '40',
            ),
            76 =>
            array(
                'id' => 3077,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Tacheng',
                'full_name' => NULL,
                'code' => '42',
            ),
            77 =>
            array(
                'id' => 3078,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Altay',
                'full_name' => NULL,
                'code' => '43',
            ),
            78 =>
            array(
                'id' => 3079,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Shihezi',
                'full_name' => NULL,
                'code' => '91',
            ),
            79 =>
            array(
                'id' => 3080,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Alar',
                'full_name' => NULL,
                'code' => '92',
            ),
            80 =>
            array(
                'id' => 3081,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Tumsuk',
                'full_name' => NULL,
                'code' => '93',
            ),
            81 =>
            array(
                'id' => 3082,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Wujiaqu',
                'full_name' => NULL,
                'code' => '94',
            ),
            82 =>
            array(
                'id' => 3083,
                'country_id' => 101,
                'division_id' => 54,
                'name' => 'Beitun',
                'full_name' => NULL,
                'code' => '95',
            ),
            83 =>
            array(
                'id' => 3084,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taipei City',
                'full_name' => NULL,
                'code' => '1',
            ),
            84 =>
            array(
                'id' => 3085,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Kaohsiung City',
                'full_name' => NULL,
                'code' => '2',
            ),
            85 =>
            array(
                'id' => 3086,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Keelung City',
                'full_name' => NULL,
                'code' => '3',
            ),
            86 =>
            array(
                'id' => 3087,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taichung City',
                'full_name' => NULL,
                'code' => '4',
            ),
            87 =>
            array(
                'id' => 3088,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Tainan City',
                'full_name' => NULL,
                'code' => '5',
            ),
            88 =>
            array(
                'id' => 3089,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Hsinchu City',
                'full_name' => NULL,
                'code' => '6',
            ),
            89 =>
            array(
                'id' => 3090,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Chiayi City',
                'full_name' => NULL,
                'code' => '7',
            ),
            90 =>
            array(
                'id' => 3091,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taipei County',
                'full_name' => NULL,
                'code' => '8',
            ),
            91 =>
            array(
                'id' => 3092,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Ilan County',
                'full_name' => NULL,
                'code' => '9',
            ),
            92 =>
            array(
                'id' => 3093,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taoyuan County',
                'full_name' => NULL,
                'code' => '10',
            ),
            93 =>
            array(
                'id' => 3094,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Hsinchu County',
                'full_name' => NULL,
                'code' => '11',
            ),
            94 =>
            array(
                'id' => 3095,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Miaoli County',
                'full_name' => NULL,
                'code' => '12',
            ),
            95 =>
            array(
                'id' => 3096,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taichung County',
                'full_name' => NULL,
                'code' => '13',
            ),
            96 =>
            array(
                'id' => 3097,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Changhwa County',
                'full_name' => NULL,
                'code' => '14',
            ),
            97 =>
            array(
                'id' => 3098,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Nantou County',
                'full_name' => NULL,
                'code' => '15',
            ),
            98 =>
            array(
                'id' => 3099,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Yunnlin County',
                'full_name' => NULL,
                'code' => '16',
            ),
            99 =>
            array(
                'id' => 3100,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Chiayi County',
                'full_name' => NULL,
                'code' => '17',
            ),
            100 =>
            array(
                'id' => 3101,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Tainan County',
                'full_name' => NULL,
                'code' => '18',
            ),
            101 =>
            array(
                'id' => 3102,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Kaohsiung County',
                'full_name' => NULL,
                'code' => '19',
            ),
            102 =>
            array(
                'id' => 3103,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Pingtung County',
                'full_name' => NULL,
                'code' => '20',
            ),
            103 =>
            array(
                'id' => 3104,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Taitung County',
                'full_name' => NULL,
                'code' => '22',
            ),
            104 =>
            array(
                'id' => 3105,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Hualian County',
                'full_name' => NULL,
                'code' => '23',
            ),
            105 =>
            array(
                'id' => 3106,
                'country_id' => 101,
                'division_id' => 51,
                'name' => 'Penghu County',
                'full_name' => NULL,
                'code' => '21',
            ),
            106 =>
            array(
                'id' => 3107,
                'country_id' => 170,
                'division_id' => 114,
                'name' => 'Palmerston',
                'full_name' => NULL,
                'code' => 'pal',
            ),
            107 =>
            array(
                'id' => 3108,
                'country_id' => 170,
                'division_id' => 114,
                'name' => 'Darwin',
                'full_name' => NULL,
                'code' => 'drw',
            ),
            108 =>
            array(
                'id' => 3109,
                'country_id' => 170,
                'division_id' => 112,
                'name' => 'Canberra',
                'full_name' => NULL,
                'code' => 'cbr',
            ),
            109 =>
            array(
                'id' => 3110,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Brisbane',
                'full_name' => NULL,
                'code' => 'bne',
            ),
            110 =>
            array(
                'id' => 3111,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Gold Coast',
                'full_name' => NULL,
                'code' => 'ool',
            ),
            111 =>
            array(
                'id' => 3112,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Cairns',
                'full_name' => NULL,
                'code' => 'cns',
            ),
            112 =>
            array(
                'id' => 3113,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Caloundra',
                'full_name' => NULL,
                'code' => 'cud',
            ),
            113 =>
            array(
                'id' => 3114,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Townsville',
                'full_name' => NULL,
                'code' => 'tsv',
            ),
            114 =>
            array(
                'id' => 3115,
                'country_id' => 170,
                'division_id' => 115,
                'name' => 'Toowoomba',
                'full_name' => NULL,
                'code' => 'twb',
            ),
            115 =>
            array(
                'id' => 3116,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Adelaide',
                'full_name' => NULL,
                'code' => 'adl',
            ),
            116 =>
            array(
                'id' => 3117,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Port Augusta',
                'full_name' => NULL,
                'code' => 'pug',
            ),
            117 =>
            array(
                'id' => 3118,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Mount Gambier',
                'full_name' => NULL,
                'code' => 'mgb',
            ),
            118 =>
            array(
                'id' => 3119,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Whyalla',
                'full_name' => NULL,
                'code' => 'way',
            ),
            119 =>
            array(
                'id' => 3120,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Port Lincoln',
                'full_name' => NULL,
                'code' => 'plo',
            ),
            120 =>
            array(
                'id' => 3121,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Murray Bridge',
                'full_name' => NULL,
                'code' => 'myb',
            ),
            121 =>
            array(
                'id' => 3122,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Port Pirie',
                'full_name' => NULL,
                'code' => 'ppi',
            ),
            122 =>
            array(
                'id' => 3123,
                'country_id' => 170,
                'division_id' => 116,
                'name' => 'Victor Harbor',
                'full_name' => NULL,
                'code' => 'vha',
            ),
            123 =>
            array(
                'id' => 3124,
                'country_id' => 170,
                'division_id' => 117,
                'name' => 'Burnie',
                'full_name' => NULL,
                'code' => 'bwt',
            ),
            124 =>
            array(
                'id' => 3125,
                'country_id' => 170,
                'division_id' => 117,
                'name' => 'Devonport',
                'full_name' => NULL,
                'code' => 'dpo',
            ),
            125 =>
            array(
                'id' => 3126,
                'country_id' => 170,
                'division_id' => 117,
                'name' => 'Hobart',
                'full_name' => NULL,
                'code' => 'hba',
            ),
            126 =>
            array(
                'id' => 3127,
                'country_id' => 170,
                'division_id' => 117,
                'name' => 'Launceston',
                'full_name' => NULL,
                'code' => 'lst',
            ),
            127 =>
            array(
                'id' => 3128,
                'country_id' => 170,
                'division_id' => 118,
                'name' => 'Geelong',
                'full_name' => NULL,
                'code' => 'gex',
            ),
            128 =>
            array(
                'id' => 3129,
                'country_id' => 170,
                'division_id' => 118,
                'name' => 'Melbourne',
                'full_name' => NULL,
                'code' => 'mel',
            ),
            129 =>
            array(
                'id' => 3130,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Albany',
                'full_name' => NULL,
                'code' => 'alh',
            ),
            130 =>
            array(
                'id' => 3131,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Bunbury',
                'full_name' => NULL,
                'code' => 'buy',
            ),
            131 =>
            array(
                'id' => 3132,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Fremantle',
                'full_name' => NULL,
                'code' => 'fre',
            ),
            132 =>
            array(
                'id' => 3133,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Geraldton',
                'full_name' => NULL,
                'code' => 'get',
            ),
            133 =>
            array(
                'id' => 3134,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Kalgoorlie',
                'full_name' => NULL,
                'code' => 'kgi',
            ),
            134 =>
            array(
                'id' => 3135,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Mandurah',
                'full_name' => NULL,
                'code' => 'mdu',
            ),
            135 =>
            array(
                'id' => 3136,
                'country_id' => 170,
                'division_id' => 119,
                'name' => 'Perth',
                'full_name' => NULL,
                'code' => 'per',
            ),
            136 =>
            array(
                'id' => 3137,
                'country_id' => 170,
                'division_id' => 113,
                'name' => 'Newcastle',
                'full_name' => NULL,
                'code' => 'ntl',
            ),
            137 =>
            array(
                'id' => 3138,
                'country_id' => 170,
                'division_id' => 113,
                'name' => 'Wollongong',
                'full_name' => NULL,
                'code' => 'wol',
            ),
            138 =>
            array(
                'id' => 3139,
                'country_id' => 170,
                'division_id' => 113,
                'name' => 'Sydney',
                'full_name' => NULL,
                'code' => 'hbs',
            ),
            139 =>
            array(
                'id' => 3140,
                'country_id' => 58,
                'division_id' => 3,
                'name' => 'Dalseong-gun',
                'full_name' => NULL,
                'code' => 'dsg',
            ),
            140 =>
            array(
                'id' => 3141,
                'country_id' => 58,
                'division_id' => 3,
                'name' => 'Daegu',
                'full_name' => NULL,
                'code' => 'tae',
            ),
            141 =>
            array(
                'id' => 3142,
                'country_id' => 58,
                'division_id' => 3,
                'name' => 'Suseong-gu',
                'full_name' => NULL,
                'code' => 'sus',
            ),
            142 =>
            array(
                'id' => 3143,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Chuncheon',
                'full_name' => NULL,
                'code' => 'chc',
            ),
            143 =>
            array(
                'id' => 3144,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Donghae',
                'full_name' => NULL,
                'code' => 'tgh',
            ),
            144 =>
            array(
                'id' => 3145,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Goseong County',
                'full_name' => NULL,
                'code' => 'gsg',
            ),
            145 =>
            array(
                'id' => 3146,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Hoengseong County',
                'full_name' => NULL,
                'code' => 'hsg',
            ),
            146 =>
            array(
                'id' => 3147,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Hongcheon County',
                'full_name' => NULL,
                'code' => 'hcn',
            ),
            147 =>
            array(
                'id' => 3148,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Hwacheon County',
                'full_name' => NULL,
                'code' => 'hch',
            ),
            148 =>
            array(
                'id' => 3149,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Gangneung',
                'full_name' => NULL,
                'code' => 'kag',
            ),
            149 =>
            array(
                'id' => 3150,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Jeongseon County',
                'full_name' => NULL,
                'code' => 'jse',
            ),
            150 =>
            array(
                'id' => 3151,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Inje County',
                'full_name' => NULL,
                'code' => 'ije',
            ),
            151 =>
            array(
                'id' => 3152,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Yeongwol County',
                'full_name' => NULL,
                'code' => 'ywl',
            ),
            152 =>
            array(
                'id' => 3153,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Pyeongchang County',
                'full_name' => NULL,
                'code' => 'pog',
            ),
            153 =>
            array(
                'id' => 3154,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Samcheok',
                'full_name' => NULL,
                'code' => 'suk',
            ),
            154 =>
            array(
                'id' => 3155,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Sokcho',
                'full_name' => NULL,
                'code' => 'sho',
            ),
            155 =>
            array(
                'id' => 3156,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Taebaek',
                'full_name' => NULL,
                'code' => 'tbk',
            ),
            156 =>
            array(
                'id' => 3157,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Cheorwon County',
                'full_name' => NULL,
                'code' => 'cwn',
            ),
            157 =>
            array(
                'id' => 3158,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Yangyang County',
                'full_name' => NULL,
                'code' => 'yny',
            ),
            158 =>
            array(
                'id' => 3159,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Yanggu County',
                'full_name' => NULL,
                'code' => 'ygu',
            ),
            159 =>
            array(
                'id' => 3160,
                'country_id' => 58,
                'division_id' => 4,
                'name' => 'Wonju',
                'full_name' => NULL,
                'code' => 'wju',
            ),
            160 =>
            array(
                'id' => 3161,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Anseong',
                'full_name' => NULL,
                'code' => 'asg',
            ),
            161 =>
            array(
                'id' => 3162,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Ansan',
                'full_name' => NULL,
                'code' => 'asn',
            ),
            162 =>
            array(
                'id' => 3163,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Anyang',
                'full_name' => NULL,
                'code' => 'any',
            ),
            163 =>
            array(
                'id' => 3164,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Pocheon',
                'full_name' => NULL,
                'code' => 'poc',
            ),
            164 =>
            array(
                'id' => 3165,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Seongnam',
                'full_name' => NULL,
                'code' => 'seo',
            ),
            165 =>
            array(
                'id' => 3166,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Dongducheon',
                'full_name' => NULL,
                'code' => 'ddc',
            ),
            166 =>
            array(
                'id' => 3167,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Bucheon',
                'full_name' => NULL,
                'code' => 'bcn',
            ),
            167 =>
            array(
                'id' => 3168,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Goyang',
                'full_name' => NULL,
                'code' => 'gyg',
            ),
            168 =>
            array(
                'id' => 3169,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gwangmyeong',
                'full_name' => NULL,
                'code' => 'gmg',
            ),
            169 =>
            array(
                'id' => 3170,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gwangju',
                'full_name' => NULL,
                'code' => 'kwu',
            ),
            170 =>
            array(
                'id' => 3171,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gwacheon',
                'full_name' => NULL,
                'code' => 'gcn',
            ),
            171 =>
            array(
                'id' => 3172,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Hanam',
                'full_name' => NULL,
                'code' => 'hnm',
            ),
            172 =>
            array(
                'id' => 3173,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Hwaseong',
                'full_name' => NULL,
                'code' => 'hch',
            ),
            173 =>
            array(
                'id' => 3174,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gapyeong County',
                'full_name' => NULL,
                'code' => 'gpg',
            ),
            174 =>
            array(
                'id' => 3175,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gimpo',
                'full_name' => NULL,
                'code' => 'gmp',
            ),
            175 =>
            array(
                'id' => 3176,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Guri',
                'full_name' => NULL,
                'code' => 'gri',
            ),
            176 =>
            array(
                'id' => 3177,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Gunpo',
                'full_name' => NULL,
                'code' => 'gun',
            ),
            177 =>
            array(
                'id' => 3178,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Yeoju County',
                'full_name' => NULL,
                'code' => 'yju',
            ),
            178 =>
            array(
                'id' => 3179,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Icheon',
                'full_name' => NULL,
                'code' => 'ice',
            ),
            179 =>
            array(
                'id' => 3180,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Yeoncheon County',
                'full_name' => NULL,
                'code' => 'ycn',
            ),
            180 =>
            array(
                'id' => 3181,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Yongin',
                'full_name' => NULL,
                'code' => 'yng',
            ),
            181 =>
            array(
                'id' => 3182,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Namyangju',
                'full_name' => NULL,
                'code' => 'nyu',
            ),
            182 =>
            array(
                'id' => 3183,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Pyeongtaek',
                'full_name' => NULL,
                'code' => 'ptk',
            ),
            183 =>
            array(
                'id' => 3184,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Paju',
                'full_name' => NULL,
                'code' => 'pju',
            ),
            184 =>
            array(
                'id' => 3185,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Siheung',
                'full_name' => NULL,
                'code' => 'she',
            ),
            185 =>
            array(
                'id' => 3186,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Suwon',
                'full_name' => NULL,
                'code' => 'suo',
            ),
            186 =>
            array(
                'id' => 3187,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Osan',
                'full_name' => NULL,
                'code' => 'osn',
            ),
            187 =>
            array(
                'id' => 3188,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Yangpyeong County',
                'full_name' => NULL,
                'code' => 'ypg',
            ),
            188 =>
            array(
                'id' => 3189,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Yangju',
                'full_name' => NULL,
                'code' => 'yyu',
            ),
            189 =>
            array(
                'id' => 3190,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Uiwang',
                'full_name' => NULL,
                'code' => 'uwn',
            ),
            190 =>
            array(
                'id' => 3191,
                'country_id' => 58,
                'division_id' => 5,
                'name' => 'Uijeongbu',
                'full_name' => NULL,
                'code' => 'uij',
            ),
            191 =>
            array(
                'id' => 3192,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Andong',
                'full_name' => NULL,
                'code' => 'adg',
            ),
            192 =>
            array(
                'id' => 3193,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Bonghwa County',
                'full_name' => NULL,
                'code' => 'bha',
            ),
            193 =>
            array(
                'id' => 3194,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Goryeong County',
                'full_name' => NULL,
                'code' => 'grg',
            ),
            194 =>
            array(
                'id' => 3195,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Gumi',
                'full_name' => NULL,
                'code' => 'kum',
            ),
            195 =>
            array(
                'id' => 3196,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Gimcheon',
                'full_name' => NULL,
                'code' => 'kmc',
            ),
            196 =>
            array(
                'id' => 3197,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Gunwi County',
                'full_name' => NULL,
                'code' => 'gwi',
            ),
            197 =>
            array(
                'id' => 3198,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Yecheon County',
                'full_name' => NULL,
                'code' => 'yec',
            ),
            198 =>
            array(
                'id' => 3199,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Pohang',
                'full_name' => NULL,
                'code' => 'kpo',
            ),
            199 =>
            array(
                'id' => 3200,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Chilgok County',
                'full_name' => NULL,
                'code' => 'cgk',
            ),
            200 =>
            array(
                'id' => 3201,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Cheongdo County',
                'full_name' => NULL,
                'code' => 'cdo',
            ),
            201 =>
            array(
                'id' => 3202,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Cheongsong County',
                'full_name' => NULL,
                'code' => 'csg',
            ),
            202 =>
            array(
                'id' => 3203,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Gyeongsan',
                'full_name' => NULL,
                'code' => 'gys',
            ),
            203 =>
            array(
                'id' => 3204,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Gyeongju',
                'full_name' => NULL,
                'code' => 'gju',
            ),
            204 =>
            array(
                'id' => 3205,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Yeongju',
                'full_name' => NULL,
                'code' => 'yej',
            ),
            205 =>
            array(
                'id' => 3206,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Sangju',
                'full_name' => NULL,
                'code' => 'sju',
            ),
            206 =>
            array(
                'id' => 3207,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Uljin County',
                'full_name' => NULL,
                'code' => 'ujn',
            ),
            207 =>
            array(
                'id' => 3208,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Mungyeong',
                'full_name' => NULL,
                'code' => 'mgg',
            ),
            208 =>
            array(
                'id' => 3209,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Seongju County',
                'full_name' => NULL,
                'code' => 'sej',
            ),
            209 =>
            array(
                'id' => 3210,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Uiseong County',
                'full_name' => NULL,
                'code' => 'usg',
            ),
            210 =>
            array(
                'id' => 3211,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Yeongyang County',
                'full_name' => NULL,
                'code' => 'yyg',
            ),
            211 =>
            array(
                'id' => 3212,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Yeongdeok County',
                'full_name' => NULL,
                'code' => 'ydk',
            ),
            212 =>
            array(
                'id' => 3213,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Yeongcheon',
                'full_name' => NULL,
                'code' => 'ych',
            ),
            213 =>
            array(
                'id' => 3214,
                'country_id' => 58,
                'division_id' => 1,
                'name' => 'Ulleung County',
                'full_name' => NULL,
                'code' => 'ulg',
            ),
            214 =>
            array(
                'id' => 3215,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Changnyeong County',
                'full_name' => NULL,
                'code' => 'cng',
            ),
            215 =>
            array(
                'id' => 3216,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Changwon',
                'full_name' => NULL,
                'code' => 'chw',
            ),
            216 =>
            array(
                'id' => 3217,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Goseong County',
                'full_name' => NULL,
                'code' => 'gso',
            ),
            217 =>
            array(
                'id' => 3218,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Hadong County',
                'full_name' => NULL,
                'code' => 'hdg',
            ),
            218 =>
            array(
                'id' => 3219,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Gimhae',
                'full_name' => NULL,
                'code' => 'kmh',
            ),
            219 =>
            array(
                'id' => 3220,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Jinju',
                'full_name' => NULL,
                'code' => 'hin',
            ),
            220 =>
            array(
                'id' => 3221,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Geochang County',
                'full_name' => NULL,
                'code' => 'gch',
            ),
            221 =>
            array(
                'id' => 3222,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Geoje',
                'full_name' => NULL,
                'code' => 'kje',
            ),
            222 =>
            array(
                'id' => 3223,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Yangsan',
                'full_name' => NULL,
                'code' => 'ysn',
            ),
            223 =>
            array(
                'id' => 3224,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Masan',
                'full_name' => NULL,
                'code' => 'mas',
            ),
            224 =>
            array(
                'id' => 3225,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Miryang',
                'full_name' => NULL,
                'code' => 'mir',
            ),
            225 =>
            array(
                'id' => 3226,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Namhae County',
                'full_name' => NULL,
                'code' => 'nhe',
            ),
            226 =>
            array(
                'id' => 3227,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Sancheong County',
                'full_name' => NULL,
                'code' => 'sch',
            ),
            227 =>
            array(
                'id' => 3228,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Sacheon',
                'full_name' => NULL,
                'code' => 'sah',
            ),
            228 =>
            array(
                'id' => 3229,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Tongyeong',
                'full_name' => NULL,
                'code' => 'tyg',
            ),
            229 =>
            array(
                'id' => 3230,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Hapcheon County',
                'full_name' => NULL,
                'code' => 'hce',
            ),
            230 =>
            array(
                'id' => 3231,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Haman County',
                'full_name' => NULL,
                'code' => 'han',
            ),
            231 =>
            array(
                'id' => 3232,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Hamyang County',
                'full_name' => NULL,
                'code' => 'hyg',
            ),
            232 =>
            array(
                'id' => 3233,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Uiryeong County',
                'full_name' => NULL,
                'code' => 'urg',
            ),
            233 =>
            array(
                'id' => 3234,
                'country_id' => 58,
                'division_id' => 2,
                'name' => 'Jinhae',
                'full_name' => NULL,
                'code' => 'chf',
            ),
            234 =>
            array(
                'id' => 3235,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Sunchang County',
                'full_name' => NULL,
                'code' => 'scg',
            ),
            235 =>
            array(
                'id' => 3236,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Buan County',
                'full_name' => NULL,
                'code' => 'pus',
            ),
            236 =>
            array(
                'id' => 3237,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Gochang County',
                'full_name' => NULL,
                'code' => 'gcg',
            ),
            237 =>
            array(
                'id' => 3238,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Gimje',
                'full_name' => NULL,
                'code' => 'gje',
            ),
            238 =>
            array(
                'id' => 3239,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Jeongeup',
                'full_name' => NULL,
                'code' => 'jeo',
            ),
            239 =>
            array(
                'id' => 3240,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Muju County',
                'full_name' => NULL,
                'code' => 'mju',
            ),
            240 =>
            array(
                'id' => 3241,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Namwon',
                'full_name' => NULL,
                'code' => 'nwn',
            ),
            241 =>
            array(
                'id' => 3242,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Jeonju',
                'full_name' => NULL,
                'code' => 'jnj',
            ),
            242 =>
            array(
                'id' => 3243,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Gunsan',
                'full_name' => NULL,
                'code' => 'kuv',
            ),
            243 =>
            array(
                'id' => 3244,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Imsil County',
                'full_name' => NULL,
                'code' => 'isl',
            ),
            244 =>
            array(
                'id' => 3245,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Wanju County',
                'full_name' => NULL,
                'code' => 'waj',
            ),
            245 =>
            array(
                'id' => 3246,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Iksan',
                'full_name' => NULL,
                'code' => 'iks',
            ),
            246 =>
            array(
                'id' => 3247,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Jangsu County',
                'full_name' => NULL,
                'code' => 'jsu',
            ),
            247 =>
            array(
                'id' => 3248,
                'country_id' => 58,
                'division_id' => 6,
                'name' => 'Jinan County',
                'full_name' => NULL,
                'code' => 'jan',
            ),
            248 =>
            array(
                'id' => 3249,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Boseong County',
                'full_name' => NULL,
                'code' => 'bsg',
            ),
            249 =>
            array(
                'id' => 3250,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Goheung County',
                'full_name' => NULL,
                'code' => 'ghg',
            ),
            250 =>
            array(
                'id' => 3251,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Gokseong County',
                'full_name' => NULL,
                'code' => 'gse',
            ),
            251 =>
            array(
                'id' => 3252,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Wando County',
                'full_name' => NULL,
                'code' => 'wnd',
            ),
            252 =>
            array(
                'id' => 3253,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Gwangyang',
                'full_name' => NULL,
                'code' => 'kan',
            ),
            253 =>
            array(
                'id' => 3254,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Haenam County',
                'full_name' => NULL,
                'code' => 'hae',
            ),
            254 =>
            array(
                'id' => 3255,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Hwasun County',
                'full_name' => NULL,
                'code' => 'hsn',
            ),
            255 =>
            array(
                'id' => 3256,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Gangjin County',
                'full_name' => NULL,
                'code' => 'gjn',
            ),
            256 =>
            array(
                'id' => 3257,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Yeosu',
                'full_name' => NULL,
                'code' => 'yos',
            ),
            257 =>
            array(
                'id' => 3258,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Yeonggwang County',
                'full_name' => NULL,
                'code' => 'ygg',
            ),
            258 =>
            array(
                'id' => 3259,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Yeongam County',
                'full_name' => NULL,
                'code' => 'yam',
            ),
            259 =>
            array(
                'id' => 3260,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Naju',
                'full_name' => NULL,
                'code' => 'nju',
            ),
            260 =>
            array(
                'id' => 3261,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Mokpo',
                'full_name' => NULL,
                'code' => 'mok',
            ),
            261 =>
            array(
                'id' => 3262,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Gurye County',
                'full_name' => NULL,
                'code' => 'gre',
            ),
            262 =>
            array(
                'id' => 3263,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Suncheon',
                'full_name' => NULL,
                'code' => 'sys',
            ),
            263 =>
            array(
                'id' => 3264,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Damyang County',
                'full_name' => NULL,
                'code' => 'dya',
            ),
            264 =>
            array(
                'id' => 3265,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Muan County',
                'full_name' => NULL,
                'code' => 'man',
            ),
            265 =>
            array(
                'id' => 3266,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Hampyeong County',
                'full_name' => NULL,
                'code' => 'hpg',
            ),
            266 =>
            array(
                'id' => 3267,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Sinan County',
                'full_name' => NULL,
                'code' => 'san',
            ),
            267 =>
            array(
                'id' => 3268,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Jangseong County',
                'full_name' => NULL,
                'code' => 'jsn',
            ),
            268 =>
            array(
                'id' => 3269,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Jangheung County',
                'full_name' => NULL,
                'code' => 'jhg',
            ),
            269 =>
            array(
                'id' => 3270,
                'country_id' => 58,
                'division_id' => 7,
                'name' => 'Jindo County',
                'full_name' => NULL,
                'code' => 'jdo',
            ),
            270 =>
            array(
                'id' => 3271,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Boeun County',
                'full_name' => NULL,
                'code' => 'ben',
            ),
            271 =>
            array(
                'id' => 3272,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Jeungpyeong County',
                'full_name' => NULL,
                'code' => 'jyg',
            ),
            272 =>
            array(
                'id' => 3273,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Danyang County',
                'full_name' => NULL,
                'code' => 'dyg',
            ),
            273 =>
            array(
                'id' => 3274,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Jecheon',
                'full_name' => NULL,
                'code' => 'jch',
            ),
            274 =>
            array(
                'id' => 3275,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Goesan County',
                'full_name' => NULL,
                'code' => 'gsn',
            ),
            275 =>
            array(
                'id' => 3276,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Cheongwon County',
                'full_name' => NULL,
                'code' => 'cwo',
            ),
            276 =>
            array(
                'id' => 3277,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Cheongju',
                'full_name' => NULL,
                'code' => 'cjj',
            ),
            277 =>
            array(
                'id' => 3278,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Okcheon County',
                'full_name' => NULL,
                'code' => 'ocn',
            ),
            278 =>
            array(
                'id' => 3279,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Eumseong County',
                'full_name' => NULL,
                'code' => 'esg',
            ),
            279 =>
            array(
                'id' => 3280,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Yeongdong County',
                'full_name' => NULL,
                'code' => 'ydg',
            ),
            280 =>
            array(
                'id' => 3281,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Jincheon County',
                'full_name' => NULL,
                'code' => 'jcn',
            ),
            281 =>
            array(
                'id' => 3282,
                'country_id' => 58,
                'division_id' => 8,
                'name' => 'Chungju',
                'full_name' => NULL,
                'code' => 'chu',
            ),
            282 =>
            array(
                'id' => 3283,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Boryeong',
                'full_name' => NULL,
                'code' => 'bor',
            ),
            283 =>
            array(
                'id' => 3284,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Buyeo County',
                'full_name' => NULL,
                'code' => 'byo',
            ),
            284 =>
            array(
                'id' => 3285,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Gongju',
                'full_name' => NULL,
                'code' => 'goj',
            ),
            285 =>
            array(
                'id' => 3286,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Hongseong County',
                'full_name' => NULL,
                'code' => 'hse',
            ),
            286 =>
            array(
                'id' => 3287,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Gyeryong',
                'full_name' => NULL,
                'code' => 'gye',
            ),
            287 =>
            array(
                'id' => 3288,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Geumsan County',
                'full_name' => NULL,
                'code' => 'gsa',
            ),
            288 =>
            array(
                'id' => 3289,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Yesan County',
                'full_name' => NULL,
                'code' => 'yos',
            ),
            289 =>
            array(
                'id' => 3290,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Nonsan',
                'full_name' => NULL,
                'code' => 'nsn',
            ),
            290 =>
            array(
                'id' => 3291,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Cheongyang County',
                'full_name' => NULL,
                'code' => 'cyg',
            ),
            291 =>
            array(
                'id' => 3292,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Seosan',
                'full_name' => NULL,
                'code' => 'ssa',
            ),
            292 =>
            array(
                'id' => 3293,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Seocheon County',
                'full_name' => NULL,
                'code' => 'sce',
            ),
            293 =>
            array(
                'id' => 3294,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Taean County',
                'full_name' => NULL,
                'code' => 'tan',
            ),
            294 =>
            array(
                'id' => 3295,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Dangjin County',
                'full_name' => NULL,
                'code' => 'tji',
            ),
            295 =>
            array(
                'id' => 3296,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Cheonan',
                'full_name' => NULL,
                'code' => 'cho',
            ),
            296 =>
            array(
                'id' => 3297,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Asan',
                'full_name' => NULL,
                'code' => 'asa',
            ),
            297 =>
            array(
                'id' => 3298,
                'country_id' => 58,
                'division_id' => 9,
                'name' => 'Yeongi County',
                'full_name' => NULL,
                'code' => 'ygi',
            ),
            298 =>
            array(
                'id' => 3299,
                'country_id' => 87,
                'division_id' => 20,
                'name' => 'Butterworth',
                'full_name' => NULL,
                'code' => 'bwh',
            ),
            299 =>
            array(
                'id' => 3300,
                'country_id' => 87,
                'division_id' => 20,
                'name' => 'George Town',
                'full_name' => NULL,
                'code' => 'pen',
            ),
            300 =>
            array(
                'id' => 3301,
                'country_id' => 87,
                'division_id' => 20,
                'name' => 'Bukit Mertajam',
                'full_name' => NULL,
                'code' => 'bmj',
            ),
            301 =>
            array(
                'id' => 3302,
                'country_id' => 87,
                'division_id' => 20,
                'name' => 'Nibong Tebal',
                'full_name' => NULL,
                'code' => 'nte',
            ),
            302 =>
            array(
                'id' => 3303,
                'country_id' => 87,
                'division_id' => 19,
                'name' => 'Kangar',
                'full_name' => NULL,
                'code' => 'kgr',
            ),
            303 =>
            array(
                'id' => 3304,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Kemaman',
                'full_name' => NULL,
                'code' => 'kem',
            ),
            304 =>
            array(
                'id' => 3305,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Kuala Terengganu',
                'full_name' => NULL,
                'code' => 'tgg',
            ),
            305 =>
            array(
                'id' => 3306,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Dungun',
                'full_name' => NULL,
                'code' => 'dgn',
            ),
            306 =>
            array(
                'id' => 3307,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Marang',
                'full_name' => NULL,
                'code' => 'mar',
            ),
            307 =>
            array(
                'id' => 3308,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Setiu',
                'full_name' => NULL,
                'code' => 'set',
            ),
            308 =>
            array(
                'id' => 3309,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Hulu',
                'full_name' => NULL,
                'code' => 'hul',
            ),
            309 =>
            array(
                'id' => 3310,
                'country_id' => 87,
                'division_id' => 24,
                'name' => 'Besut',
                'full_name' => NULL,
                'code' => 'bes',
            ),
            310 =>
            array(
                'id' => 3311,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Padang Terap',
                'full_name' => NULL,
                'code' => 'pgt',
            ),
            311 =>
            array(
                'id' => 3312,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Pendang',
                'full_name' => NULL,
                'code' => 'pen',
            ),
            312 =>
            array(
                'id' => 3313,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Langkawi',
                'full_name' => NULL,
                'code' => 'lgk',
            ),
            313 =>
            array(
                'id' => 3314,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Kota Setar',
                'full_name' => NULL,
                'code' => 'kor',
            ),
            314 =>
            array(
                'id' => 3315,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Kubang Pasu',
                'full_name' => NULL,
                'code' => 'kpa',
            ),
            315 =>
            array(
                'id' => 3316,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Kuala Muda',
                'full_name' => NULL,
                'code' => 'kmu',
            ),
            316 =>
            array(
                'id' => 3317,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Baling',
                'full_name' => NULL,
                'code' => 'blz',
            ),
            317 =>
            array(
                'id' => 3318,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Kulim',
                'full_name' => NULL,
                'code' => 'klm',
            ),
            318 =>
            array(
                'id' => 3319,
                'country_id' => 87,
                'division_id' => 11,
                'name' => 'Bandar Baharu',
                'full_name' => NULL,
                'code' => 'bma',
            ),
            319 =>
            array(
                'id' => 3320,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Pasir Putih',
                'full_name' => NULL,
                'code' => 'ppu',
            ),
            320 =>
            array(
                'id' => 3321,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Pasir Mas',
                'full_name' => NULL,
                'code' => 'pma',
            ),
            321 =>
            array(
                'id' => 3322,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Tanah Merah',
                'full_name' => NULL,
                'code' => 'tmr',
            ),
            322 =>
            array(
                'id' => 3323,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Tumpat',
                'full_name' => NULL,
                'code' => 'tum',
            ),
            323 =>
            array(
                'id' => 3324,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Bachok',
                'full_name' => NULL,
                'code' => 'bac',
            ),
            324 =>
            array(
                'id' => 3325,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Kota Bharu',
                'full_name' => NULL,
                'code' => 'kbr',
            ),
            325 =>
            array(
                'id' => 3326,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Kuala Krai',
                'full_name' => NULL,
                'code' => 'kug',
            ),
            326 =>
            array(
                'id' => 3327,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Gua Musang',
                'full_name' => NULL,
                'code' => 'gmu',
            ),
            327 =>
            array(
                'id' => 3328,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Machang',
                'full_name' => NULL,
                'code' => 'mac',
            ),
            328 =>
            array(
                'id' => 3329,
                'country_id' => 87,
                'division_id' => 12,
                'name' => 'Jeli',
                'full_name' => NULL,
                'code' => 'jel',
            ),
            329 =>
            array(
                'id' => 3330,
                'country_id' => 87,
                'division_id' => 13,
                'name' => 'Kuala Lumpur',
                'full_name' => NULL,
                'code' => 'kul',
            ),
            330 =>
            array(
                'id' => 3331,
                'country_id' => 87,
                'division_id' => 15,
                'name' => 'Melaka',
                'full_name' => NULL,
                'code' => 'mel',
            ),
            331 =>
            array(
                'id' => 3332,
                'country_id' => 87,
                'division_id' => 15,
                'name' => 'Alor Gajah',
                'full_name' => NULL,
                'code' => 'aog',
            ),
            332 =>
            array(
                'id' => 3333,
                'country_id' => 87,
                'division_id' => 15,
                'name' => 'Jasin',
                'full_name' => NULL,
                'code' => 'jas',
            ),
            333 =>
            array(
                'id' => 3334,
                'country_id' => 87,
                'division_id' => 14,
                'name' => 'Labuan',
                'full_name' => NULL,
                'code' => 'lbu',
            ),
            334 =>
            array(
                'id' => 3335,
                'country_id' => 87,
                'division_id' => 14,
                'name' => 'Victoria',
                'full_name' => NULL,
                'code' => 'vic',
            ),
            335 =>
            array(
                'id' => 3336,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Bera',
                'full_name' => NULL,
                'code' => 'ber',
            ),
            336 =>
            array(
                'id' => 3337,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Pekan',
                'full_name' => NULL,
                'code' => 'pek',
            ),
            337 =>
            array(
                'id' => 3338,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Temerloh',
                'full_name' => NULL,
                'code' => 'tem',
            ),
            338 =>
            array(
                'id' => 3339,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Jerantut',
                'full_name' => NULL,
                'code' => 'jer',
            ),
            339 =>
            array(
                'id' => 3340,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Kuantan',
                'full_name' => NULL,
                'code' => 'kua',
            ),
            340 =>
            array(
                'id' => 3341,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Cameron Highlands',
                'full_name' => NULL,
                'code' => 'cah',
            ),
            341 =>
            array(
                'id' => 3342,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Raub',
                'full_name' => NULL,
                'code' => 'rau',
            ),
            342 =>
            array(
                'id' => 3343,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Kuala Lipis',
                'full_name' => NULL,
                'code' => 'kul',
            ),
            343 =>
            array(
                'id' => 3344,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Maran',
                'full_name' => NULL,
                'code' => 'mar',
            ),
            344 =>
            array(
                'id' => 3345,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Bentong',
                'full_name' => NULL,
                'code' => 'ben',
            ),
            345 =>
            array(
                'id' => 3346,
                'country_id' => 87,
                'division_id' => 17,
                'name' => 'Rompin',
                'full_name' => NULL,
                'code' => 'tom',
            ),
            346 =>
            array(
                'id' => 3347,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Teluk Intan',
                'full_name' => NULL,
                'code' => 'tas',
            ),
            347 =>
            array(
                'id' => 3348,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Tanjung Malim',
                'full_name' => NULL,
                'code' => 'tam',
            ),
            348 =>
            array(
                'id' => 3349,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Sungai Siput',
                'full_name' => NULL,
                'code' => 'ssp',
            ),
            349 =>
            array(
                'id' => 3350,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Lumut',
                'full_name' => NULL,
                'code' => 'lum',
            ),
            350 =>
            array(
                'id' => 3351,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Batu Gajah',
                'full_name' => NULL,
                'code' => 'bga',
            ),
            351 =>
            array(
                'id' => 3352,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Kuala Kangsar',
                'full_name' => NULL,
                'code' => 'kar',
            ),
            352 =>
            array(
                'id' => 3353,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Taiping',
                'full_name' => NULL,
                'code' => 'tpg',
            ),
            353 =>
            array(
                'id' => 3354,
                'country_id' => 87,
                'division_id' => 18,
                'name' => 'Ipoh',
                'full_name' => NULL,
                'code' => 'iph',
            ),
            354 =>
            array(
                'id' => 3355,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Pontian',
                'full_name' => NULL,
                'code' => 'pow',
            ),
            355 =>
            array(
                'id' => 3356,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Mersing',
                'full_name' => NULL,
                'code' => 'mep',
            ),
            356 =>
            array(
                'id' => 3357,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Kota Tinggi',
                'full_name' => NULL,
                'code' => 'kti',
            ),
            357 =>
            array(
                'id' => 3358,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Kluang',
                'full_name' => NULL,
                'code' => 'kla',
            ),
            358 =>
            array(
                'id' => 3359,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Batu Pahat',
                'full_name' => NULL,
                'code' => 'bat',
            ),
            359 =>
            array(
                'id' => 3360,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Muar',
                'full_name' => NULL,
                'code' => 'mua',
            ),
            360 =>
            array(
                'id' => 3361,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Segamat',
                'full_name' => NULL,
                'code' => 'sgm',
            ),
            361 =>
            array(
                'id' => 3362,
                'country_id' => 87,
                'division_id' => 10,
                'name' => 'Johor Bahru',
                'full_name' => NULL,
                'code' => 'jhb',
            ),
            362 =>
            array(
                'id' => 3363,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Port Dickson',
                'full_name' => NULL,
                'code' => 'pdi',
            ),
            363 =>
            array(
                'id' => 3364,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Tampin',
                'full_name' => NULL,
                'code' => 'tai',
            ),
            364 =>
            array(
                'id' => 3365,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Seremban',
                'full_name' => NULL,
                'code' => 'srb',
            ),
            365 =>
            array(
                'id' => 3366,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Kuala Pilah',
                'full_name' => NULL,
                'code' => 'kpi',
            ),
            366 =>
            array(
                'id' => 3367,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Rembau',
                'full_name' => NULL,
                'code' => 'rem',
            ),
            367 =>
            array(
                'id' => 3368,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Jempol',
                'full_name' => NULL,
                'code' => 'jep',
            ),
            368 =>
            array(
                'id' => 3369,
                'country_id' => 87,
                'division_id' => 16,
                'name' => 'Jelebu',
                'full_name' => NULL,
                'code' => 'jel',
            ),
            369 =>
            array(
                'id' => 3370,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Papar',
                'full_name' => NULL,
                'code' => 'pap',
            ),
            370 =>
            array(
                'id' => 3371,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Beaufort',
                'full_name' => NULL,
                'code' => 'bef',
            ),
            371 =>
            array(
                'id' => 3372,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Beluran',
                'full_name' => NULL,
                'code' => 'bel',
            ),
            372 =>
            array(
                'id' => 3373,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Pitas',
                'full_name' => NULL,
                'code' => 'pit',
            ),
            373 =>
            array(
                'id' => 3374,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Penampang',
                'full_name' => NULL,
                'code' => 'pmp',
            ),
            374 =>
            array(
                'id' => 3375,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Tambunan',
                'full_name' => NULL,
                'code' => 'tab',
            ),
            375 =>
            array(
                'id' => 3376,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Tenom',
                'full_name' => NULL,
                'code' => 'ten',
            ),
            376 =>
            array(
                'id' => 3377,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Tawau',
                'full_name' => NULL,
                'code' => 'taw',
            ),
            377 =>
            array(
                'id' => 3378,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Tuaran',
                'full_name' => NULL,
                'code' => 'tur',
            ),
            378 =>
            array(
                'id' => 3379,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kota Kinabalu',
                'full_name' => NULL,
                'code' => 'bki',
            ),
            379 =>
            array(
                'id' => 3380,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kota Marudu',
                'full_name' => NULL,
                'code' => 'kmu',
            ),
            380 =>
            array(
                'id' => 3381,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Keningau',
                'full_name' => NULL,
                'code' => 'keg',
            ),
            381 =>
            array(
                'id' => 3382,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kudat',
                'full_name' => NULL,
                'code' => 'kud',
            ),
            382 =>
            array(
                'id' => 3383,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kota Belud',
                'full_name' => NULL,
                'code' => 'kbd',
            ),
            383 =>
            array(
                'id' => 3384,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kunak',
                'full_name' => NULL,
                'code' => 'kun',
            ),
            384 =>
            array(
                'id' => 3385,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kuala Penyu',
                'full_name' => NULL,
                'code' => 'kpu',
            ),
            385 =>
            array(
                'id' => 3386,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Kinabatangan',
                'full_name' => NULL,
                'code' => 'kbt',
            ),
            386 =>
            array(
                'id' => 3387,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Ranau',
                'full_name' => NULL,
                'code' => 'rnu',
            ),
            387 =>
            array(
                'id' => 3388,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Lahad Datu',
                'full_name' => NULL,
                'code' => 'ldu',
            ),
            388 =>
            array(
                'id' => 3389,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Nabawan',
                'full_name' => NULL,
                'code' => 'nab',
            ),
            389 =>
            array(
                'id' => 3390,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Sandakan',
                'full_name' => NULL,
                'code' => 'sdk',
            ),
            390 =>
            array(
                'id' => 3391,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Sipitang',
                'full_name' => NULL,
                'code' => 'spt',
            ),
            391 =>
            array(
                'id' => 3392,
                'country_id' => 87,
                'division_id' => 21,
                'name' => 'Semporna',
                'full_name' => NULL,
                'code' => 'smm',
            ),
            392 =>
            array(
                'id' => 3393,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Kuching',
                'full_name' => NULL,
                'code' => 'kch',
            ),
            393 =>
            array(
                'id' => 3394,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Kapit',
                'full_name' => NULL,
                'code' => 'kpi',
            ),
            394 =>
            array(
                'id' => 3395,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Limbang',
                'full_name' => NULL,
                'code' => 'lmn',
            ),
            395 =>
            array(
                'id' => 3396,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Miri',
                'full_name' => NULL,
                'code' => 'myy',
            ),
            396 =>
            array(
                'id' => 3397,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Bintulu',
                'full_name' => NULL,
                'code' => 'btu',
            ),
            397 =>
            array(
                'id' => 3398,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Mukah',
                'full_name' => NULL,
                'code' => 'mkm',
            ),
            398 =>
            array(
                'id' => 3399,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Betong',
                'full_name' => NULL,
                'code' => 'btg',
            ),
            399 =>
            array(
                'id' => 3400,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Samarahan',
                'full_name' => NULL,
                'code' => 'smh',
            ),
            400 =>
            array(
                'id' => 3401,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Sri Aman',
                'full_name' => NULL,
                'code' => 'sam',
            ),
            401 =>
            array(
                'id' => 3402,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Sarikei',
                'full_name' => NULL,
                'code' => 'sar',
            ),
            402 =>
            array(
                'id' => 3403,
                'country_id' => 87,
                'division_id' => 22,
                'name' => 'Sibu',
                'full_name' => NULL,
                'code' => 'sbw',
            ),
            403 =>
            array(
                'id' => 3404,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Petaling',
                'full_name' => NULL,
                'code' => 'pja',
            ),
            404 =>
            array(
                'id' => 3405,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Gombak',
                'full_name' => NULL,
                'code' => 'gom',
            ),
            405 =>
            array(
                'id' => 3406,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Kuala Langat',
                'full_name' => NULL,
                'code' => 'klg',
            ),
            406 =>
            array(
                'id' => 3407,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Kuala Selangor',
                'full_name' => NULL,
                'code' => 'ksl',
            ),
            407 =>
            array(
                'id' => 3408,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Sabak Bernam',
                'full_name' => NULL,
                'code' => 'sbm',
            ),
            408 =>
            array(
                'id' => 3409,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Hulu Langat',
                'full_name' => NULL,
                'code' => 'hul',
            ),
            409 =>
            array(
                'id' => 3410,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Hulu Selangor',
                'full_name' => NULL,
                'code' => 'hus',
            ),
            410 =>
            array(
                'id' => 3411,
                'country_id' => 87,
                'division_id' => 23,
                'name' => 'Sepang',
                'full_name' => NULL,
                'code' => 'sep',
            ),

        ));
    }
}
