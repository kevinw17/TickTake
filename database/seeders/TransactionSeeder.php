<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // $datas = [
        //     [
        //         "user_id" => 1,
        //         "event_detail_id" => 1,
        //         "transaction_date" => "5 December 2023",
        //         "qty" => "2"
        //     ],
        //     [
        //         "user_id" => 2,
        //         "event_detail_id" => 2,
        //         "transaction_date" => "6 December 2023",
        //         "qty" => "3"
        //     ],
        //     [
        //         "user_id" => 3,
        //         "event_detail_id" => 3,
        //         "transaction_date" => "7 December 2023",
        //         "qty" => "7"
        //     ],
        //     [
        //         "user_id" => 1,
        //         "event_detail_id" => 4,
        //         "transaction_date" => "8 December 2023",
        //         "qty" => "8"
        //     ],
        // ];

        // DB::table('transactions')->insert($datas);
    }
}
