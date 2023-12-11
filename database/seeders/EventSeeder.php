<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                "name" => "Steve Aoki's",
                "organizer_id" => 1,
                "pict" => "image 31.jpg"
            ],
            [
                "name" => "Didangdutin Fest",
                "organizer_id" => 2,
                "pict" => "image 32.jpg"
            ],
            [
                "name" => "Lazada Fest 12.12",
                "organizer_id" => 3,
                "pict" => "image 33.jpg"
            ],
            [
                "name" => "Sweet Seventeen Show",
                "organizer_id" => 4,
                "pict" => "image 34.png"
            ],
            [
                "name" => "FIFA 2023",
                "organizer_id" => 5,
                "pict" => "image 31.jpg"
            ],
            [
                "name" => "FIFA U-17 2023",
                "organizer_id" => 5,
                "pict" => "image 32.jpg"
            ],
            [
                "name" => "Indonesian Idol",
                "organizer_id" => 1,
                "pict" => "image 33.jpg"
            ],
            [
                "name" => "Lazada Fair",
                "organizer_id" => 3,
                "pict" => "image 34.png"
            ],
        ];

        DB::table('events')->insert($datas);
    }
}
