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
            'Image'=>'https://img2.thuthuatphanmem.vn/uploads/2019/05/06/anh-the-dep-nen-xanh_100828270.jpg',
            'Username'=>'vthdat@gmail.com',
            'Password'=>'123123',
            'Teacher_Name'=>'Võ Thành Đạt',
            'Phone_Number'=>'0933725743',
            'Address'=>'377 Lê Văn Lương, Phường Tân Hưng, Quận 7, Tp.HCM',
            'Status'=>1
        ]);
        TeacherInformation::create([
            'Faculty_ID'=>1,
            'Username'=>'ptmhuyen@gmail.com',
            'Image'=>'https://demoda.vn/wp-content/uploads/2022/03/mau-anh-the.jpg',
            'Password'=>'123123',
            'Teacher_Name'=>'Phạm Mỹ Huyền',
            'Phone_Number'=>'0933725746',
            'Address'=>'60 Huỳnh Thúc Kháng, Phường Bến Nghé, Quận 1, Tp.HCM',
            'Status'=>2
        ]);
    }
}
