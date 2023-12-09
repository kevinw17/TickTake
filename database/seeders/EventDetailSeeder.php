<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                "event_id" => 1,
                "category_id" => 2,
                "event_date" => "2023-12-10",
                "place" => 'PIK 2',
                "city" => "Jakarta",
                "price" => "249000",
                "quota" => "100"
            ],
            [
                "event_id" => 2,
                "category_id" => 1,
                "event_date" => "2023-12-12",
                "place" => 'Senayan',
                "city" => "jakarta",
                "price" => "350000",
                "quota" => "300"
            ],
            [
                "event_id" => 3,
                "category_id" => 2,
                "event_date" => "2023-12-15",
                "place" => 'Alam Sutera',
                "city" => "Tangerang",
                "price" => "1500000",
                "quota" => "1500"
            ],
            [
                "event_id" => 4,
                "category_id" => 1,
                "event_date" => "2023-12-17",
                "place" => 'Ciputra World',
                "city" => "Surabaya",
                "price" => "359000",
                "quota" => "500"
            ],
            [
                "event_id" => 5,
                "category_id" => 3,
                "event_date" => "2023-12-18",
                "place" => 'Gelora Bung Karno',
                "city" => "Jakarta",
                "price" => "749000",
                "quota" => "2000"
            ],
            [
                "event_id" => 6,
                "category_id" => 3,
                "event_date" => "2023-12-19",
                "place" => 'Indonesia Arena',
                "city" => "Jakarta",
                "price" => "549000",
                "quota" => "5000"
            ],
            [
                "event_id" => 7,
                "category_id" => 1,
                "event_date" => "2023-12-20",
                "place" => 'Monas',
                "city" => "Jakarta",
                "price" => "899000",
                "quota" => "200"
            ],
            [
                "event_id" => 8,
                "category_id" => 2,
                "event_date" => "2023-12-21",
                "place" => 'Veteran',
                "city" => "Palembang",
                "price" => "149000",
                "quota" => "500"
            ],
            [
                "event_id" => 6,
                "category_id" => 3,
                "event_date" => "2023-12-22",
                "place" => 'Siliwangi',
                "city" => "Bandung",
                "price" => "349000",
                "quota" => "1500"
            ],
            [
                "event_id" => 5,
                "category_id" => 3,
                "event_date" => "2023-12-23",
                "place" => 'Salatiga',
                "city" => "Yogyakarta",
                "price" => "999000",
                "quota" => "3000"
            ],
            [
                "event_id" => 7,
                "category_id" => 1,
                "event_date" => "2023-12-24",
                "place" => 'Sudirman',
                "city" => "Medan",
                "price" => "1250000",
                "quota" => "100"
            ],
            [
                "event_id" => 3,
                "category_id" => 2,
                "event_date" => "2023-12-25",
                "place" => 'Capital Place',
                "city" => "Jakarta",
                "price" => "1099000",
                "quota" => "800"
            ],
        ];

        DB::table('event_details')->insert($datas);
    }
}
