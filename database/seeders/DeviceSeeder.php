<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 2,
            'Device_Name'=> 'PC HP Slim Desktop Bundle',
            'Image'=>'https://cdn.nguyenkimmall.com/images/thumbnails/600/336/detailed/821/10052816-pc-hp-slim-desktop-bundle-s01-i5-12400-pf2033d-6l604pa-1.jpg',
            'QRCode'=>'re23',
            'Price'=> 10890000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'PC HP Slim Desktop Bundle S01-PF2034D i3-12100/8GB/256GB/Win11 6L605PA'
        ]);
    }
}
