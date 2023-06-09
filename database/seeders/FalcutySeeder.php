<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;

class FalcutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Faculty::create(
            ['Faculty_Name'=>'Công nghệ thông tin',
            'Image'=>'https://raw.githubusercontent.com/nhonguyen19/D_Management/master/assets/Logo_Khoa/Logo_Khoa_CNTT.jpg',
            'LinkInfo'=>'https://youtu.be/Jy5rOxjv38k',
            'Status'=>1
        ]);
        Faculty::create(
            ['Faculty_Name'=>'Bộ môn kinh tế',
            'Image'=>'https://raw.githubusercontent.com/nhonguyen19/D_Management/master/assets/Logo_Khoa/Logo_Bo_Mon_Kinh_Te.png',
            'LinkInfo'=>'https://youtu.be/_swOcP2kjOM',
            'Status'=>1
        ]);

    }
}
