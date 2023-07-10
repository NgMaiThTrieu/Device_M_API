<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReportEmail;

class ReportMail extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReportEmail::create(
            ['Student_Code'=>'0306201471',
            'Device_Image'=>'https://cdn.nguyenkimmall.com/images/thumbnails/600/336/detailed/821/10052816-pc-hp-slim-desktop-bundle-s01-i5-12400-pf2033d-6l604pa-1.jpg',
            'QR_Code'=>'1',
            'Description'=>'Thiết bị hỏng CPU',
            'Status'=>1
        ]);
    }
}
