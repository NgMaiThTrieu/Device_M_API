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
            'Type_Of_Device_Name'=>'Máy tính',
            'Image'=>'https://raw.githubusercontent.com/nhonguyen19/D_Management/master/assets/Images_TOD/maytinh.png',
            'Icon'=>'https://img.icons8.com/?size=512&id=PuYQDk2qb8JB&format=png',
            'Status'=>1
        ]);
        TypeOfDevice::create([
            'Type_Of_Device_Name'=>'Laptop',
            'Image'=>'https://raw.githubusercontent.com/nhonguyen19/D_Management/master/assets/Images_TOD/laptop.jpg',
            'Icon'=>'https://img.icons8.com/?size=1x&id=55150&format=png',
            'Status'=>0
        ]);
        TypeOfDevice::create([
            'Type_Of_Device_Name'=>'Quạt',
            'Image'=>'https://tse1.mm.bing.net/th?id=OIP.IFoBosxBLVERJRoNxkiJsQHaHa&pid=Api&P=0&h=180',
            'Icon'=>'https://img.icons8.com/?size=512&id=104278&format=png',
            'Status'=>1
        ]);
        //
    }
}
