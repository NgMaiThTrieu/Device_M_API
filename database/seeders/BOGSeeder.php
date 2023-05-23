<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BatchOfGood;

class BOGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BatchOfGood::create([
            'Date_Of_Import'=>'2023-05-23'
        ]);
        BatchOfGood::create([
            'Date_Of_Import'=>'2023-04-13'
        ]);

    }
}
