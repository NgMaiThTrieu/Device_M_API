<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BorrowingDetail;

class BorrowingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        BorrowingDetail::create(
            [
            'Borrowing_ID'=>'1',
            'Device_ID'=>'1',
            'Room_ID'=>1,
            'Old_Room_ID'=>'2',
            'Status'=>'1',
            'Old_Status'=>'1',
        ]);
        BorrowingDetail::create(
            [
            'Borrowing_ID'=>'1',
            'Device_ID'=>'2',
            'Room_ID'=>1,
            'Old_Room_ID'=>'2',
            'Status'=>'1',
            'Old_Status'=>'1',
        ]);
    }
}
