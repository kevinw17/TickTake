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
                "event_date" => "10-12-2023",
                "city" => "Jakarta",
                "price" => "1249000",
                "quota" => "1000"
            ],
            [
                "event_id" => 2,
                "category_id" => 2,
                "event_date" => "12-12-2023",
                "city" => "Makassar",
                "price" => "250000",
                "quota" => "300"
            ],
            [
                "event_id" => 3,
                "category_id" => 1,
                "event_date" => "15-12-2023",
                "city" => "Jakarta",
                "price" => "1500000",
                "quota" => "1500"
            ],
            [
                "event_id" => 4,
                "category_id" => 3,
                "event_date" => "17-12-2023",
                "city" => "Surabaya",
                "price" => "359000",
                "quota" => "500"
            ],
        ];

        DB::table('event_details')->insert($datas);
    }
}
