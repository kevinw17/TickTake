<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            ["name" => "Feature Events"],
            ["name" => "Festival Fair"]
        ];

        DB::table('categories')->insert($datas);
    }
}
