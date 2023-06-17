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
            'Phone_Number'=>'1800 6865',
            'Status'=>1
        ]);
        Supplier::create([
            'Supplier_Name'=>'An Phát ',
            'Address'=>'330-332 Võ Văn Tần, Phường 5, Quận 3, TP.HCM',
            'Phone_Number'=>'0931.105.498',
            'Status'=>1
        ]);
    }
}
