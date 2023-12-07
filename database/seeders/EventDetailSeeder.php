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
                "category_id" => 1,
                "event_date" => "10 December 2023",
                "event_time" => "17:00",
                "place" => "Gelora Bung Karno",
                "city" => "Jakarta",
                "price" => "1249000",
                "quota" => "1000"
            ],
            [
                "event_id" => 2,
                "category_id" => 2,
                "event_date" => "12 December 2023",
                "event_time" => "18:00",
                "place" => "Trans Studio Mall",
                "city" => "Makassar",
                "price" => "250000",
                "quota" => "300"
            ],
            [
                "event_id" => 3,
                "category_id" => 1,
                "event_date" => "15 December 2023",
                "event_time" => "19:00",
                "place" => "Indonesia Arena",
                "city" => "Jakarta",
                "price" => "1500000",
                "quota" => "1500"
            ],
            [
                "event_id" => 4,
                "category_id" => 3,
                "event_date" => "17 December 2023",
                "event_time" => "20:00",
                "place" => "Ciputra World",
                "city" => "Surabaya",
                "price" => "359000",
                "quota" => "500"
            ],
        ];

        DB::table('event_details')->insert($datas);
    }
}
