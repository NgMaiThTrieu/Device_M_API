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
            'Image'=>'Logo_Khoa_CNTT.jpg',
            'Status'=>1
        ]);
        Faculty::create(
            ['Faculty_Name'=>'Bộ môn kinh tế',
            'Image'=>'Logo_Bo_Mon_Kinh_Te.png',
            'Status'=>1
        ]);

    }
}
