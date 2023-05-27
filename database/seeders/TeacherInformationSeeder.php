<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeacherInformation;

class TeacherInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeacherInformation::create([
            'Faculty_ID'=>1,
            'Username'=>'dnhhnam',
            'Password'=>'123123',
            'Teacher_Name'=>'Đinh Hoàng Nam',
            'Phone_Number'=>'0933725743',
            'Address'=>'377 Lê Văn Lương, Phường Tân Hưng, Quận 7, Tp.HCM'
        ]);
        TeacherInformation::create([
            'Faculty_ID'=>1,
            'Username'=>'vthdat',
            'Password'=>'123123',
            'Teacher_Name'=>'Võ Thành Đạt',
            'Phone_Number'=>'0933725746',
            'Address'=>'402 Nguyễn Thị Thập, Phường Tân Hưng, Quận 7, Tp.HCM'
        ]);
    }
}
