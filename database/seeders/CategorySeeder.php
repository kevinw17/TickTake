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
            ["name" => "Concerts"],
            ["name" => "Indonesian Festival"],
            ["name" => "Sports"]
        ];

        DB::table('categories')->insert($datas);
    }
}
