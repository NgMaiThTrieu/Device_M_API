<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeOfDevice;

class TypeOfDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfDevice::create([
            'Type_Of_Device_Name'=>'Máy tính'
        ]);
        TypeOfDevice::create([
            'Type_Of_Device_Name'=>'Laptop'
        ]);
        //
    }
}
