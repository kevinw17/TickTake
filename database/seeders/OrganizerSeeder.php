<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                "name" => "Prestige Promotion",
                "logo" => "R.png"
            ],
            [
                "name" => "Micproject",
                "logo" => "M.jpeg"
            ],
            [
                "name" => "Lazada",
                "logo" => "Lazada.jpg"
            ],
            [
                "name" => "Antara Suara",
                "logo" => "S.jpg"
            ],
            [
                "name" => "FIFA",
                "logo" => "F.png"
            ],
        ];

        DB::table('organizers')->insert($datas);
    }
}
