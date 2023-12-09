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
                "logo" => "R.png"
            ],
            [
                "name" => "Lazada",
                "logo" => "R.png"
            ],
            [
                "name" => "Antara Suara",
                "logo" => "R.png"
            ],
            [
                "name" => "FIFA",
                "logo" => "R.png"
            ],
        ];

        DB::table('organizers')->insert($datas);
    }
}
