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
                "pict" => "steve.jpg"
            ],
            [
                "name" => "Didangdutin Fest",
                "organizer_id" => 2,
                "pict" => "image2.jpg"
            ],
            [
                "name" => "Lazada Fest 12.12",
                "organizer_id" => 3,
                "pict" => "image3.jpg"
            ],
            [
                "name" => "Sweet Seventeen Show",
                "organizer_id" => 4,
                "pict" => "image4.png"
            ],
            [
                "name" => "FIFA 2023",
                "organizer_id" => 5,
                "pict" => "fifa2023.jpeg"
            ],
            [
                "name" => "FIFA U-17 2023",
                "organizer_id" => 5,
                "pict" => "image1.png"
            ],
            [
                "name" => "Indonesian Idol",
                "organizer_id" => 1,
                "pict" => "indoidol.jpg"
            ],
            [
                "name" => "Lazada Fair",
                "organizer_id" => 3,
                "pict" => "lazadafair.png"
            ],
        ];

        DB::table('events')->insert($datas);
    }
}
