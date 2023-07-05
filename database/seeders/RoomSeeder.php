<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Room::create([
            'Room_Name'=>'f7.01',
            'Quantity'=>30,
            'Note'=>'',
            'Status'=>1,
        ]);
        Room::create([
            'Room_Name'=>'f7.02',
            'Quantity'=>30,
            'Note'=>'',
            'Status'=>1,
        ]);
    }
}
