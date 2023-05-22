<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'Brand_Name'=>'Acer',
            'Quantity' =>0,
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'HP',
            'Quantity' =>0,
            'Status'=>1
        ]);
        //
    }
}
