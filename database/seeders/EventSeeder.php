<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $datas = [
            [
                "name" => "Steve Aoki's",
                "organizer_id" => 1,
                "pict" => "image 31.png"
            ],
            [
                "name" => "Didangdutin Fest",
                "organizer_id" => 2,
                "pict" => "image 32.png"
            ],
            [
                "name" => "Lazada Fest 12.12",
                "organizer_id" => 3,
                "pict" => "image 33.png"
            ],
            [
                "name" => "RAN The Sweet Seventeen Show",
                "organizer_id" => 4,
                "pict" => "image 34.png"
            ],
        ];

        DB::table('events')->insert($datas);
    }
}
