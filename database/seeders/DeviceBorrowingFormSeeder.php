<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeviceBorrowingForm;
class DeviceBorrowingFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeviceBorrowingForm::create(
            ['Borrower_ID'=>'1',
            'Lender_ID'=>'2',
            'Borrowing_Date'=>'2023-7-5',
            'Due_Date'=>'2023-7-20',
            'Status'=>1
        ]);
    }
}
