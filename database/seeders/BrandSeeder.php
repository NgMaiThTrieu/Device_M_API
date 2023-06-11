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
        //1
        Brand::create([
            'Brand_Name'=>'Acer',
            'Status'=>1
        ]);
        //2
        Brand::create([
            'Brand_Name'=>'HP',
            'Status'=>1
        ]);
        //3
        Brand::create([
            'Brand_Name'=>'Intel',
            'Status'=>1
        ]);
        //4
        Brand::create([
            'Brand_Name'=>'AMD',
            'Status'=>1
        ]);
        //5
        Brand::create([
            'Brand_Name'=>'Kingston',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'LEXAR',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Crucial',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Corsair',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Samsung',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'G.Skill',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Adata',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Apacer',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Kingston',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Geil',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Gigabyte',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'EVGA',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'ASUS',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'MSI',
            'Status'=>1
        ]);
        Brand::create([
            'Brand_Name'=>'Sunhouse',
            'Status'=>1
        ]);

        //
    }
}
