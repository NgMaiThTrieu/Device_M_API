<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use GuzzleHttp\Promise\Create;

class SupplierSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Supplier::create([
            'Supplier_Name'=>'Phong Vũ',
            'Address'=>'264A – 264B – 264C Nguyễn Thị Minh Khai, Phường 6, Quận 3, TP.HCM',
            'Phone_Number'=>'18006865',
        ]);
    }
}
