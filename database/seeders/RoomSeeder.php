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
        //1
        Room::create([
            'Room_Name'=>'F7.01',
            'Quantity'=>55,
            'Note'=>'',
            'Status'=>1,
        ]);
          //2
        Room::create([
            'Room_Name'=>'F7.02',
            'Quantity'=>55,
            'Note'=>'',
            'Status'=>1,
        ]);
          //3
        Room::create([
            'Room_Name'=>'F7.03',
            'Quantity'=>35,
            'Note'=>'',
            'Status'=>1,
        ]);
          
        //4
        Room::create([
            'Room_Name'=>'F7.04',
            'Quantity'=>35,
            'Note'=>'',
            'Status'=>1,
        ]);
        //5
        Room::create([
            'Room_Name'=>'F7.06',
            'Quantity'=>35,
            'Note'=>'',
            'Status'=>1,
        ]);
        //6
        Room::create([
            'Room_Name'=>'F7.08',
            'Quantity'=>55,
            'Note'=>'',
            'Status'=>1,
        ]);
        //7
        Room::create([
            'Room_Name'=>'F7.09',
            'Quantity'=>40,
            'Note'=>'',
            'Status'=>1,
        ]);
        //8
        Room::create([
            'Room_Name'=>'F7.10',
            'Quantity'=>30,
            'Note'=>'',
            'Status'=>1,
        ]);
        //9
        Room::create([
            'Room_Name'=>'F7.13',
            'Quantity'=>45,
            'Note'=>'',
            'Status'=>1,
        ]);
        //10
        Room::create([
            'Room_Name'=>'F5.4',
            'Quantity'=>65,
            'Note'=>'', 
            'Status'=>1,
        ]);
        //11
        Room::create([
            'Room_Name'=>'F7.12',
            'Quantity'=>75,
            'Note'=>'',
            'Status'=>1,
        ]);
        //12
        Room::create([
            'Room_Name'=>'Khoa Công Nghệ Thông Tin',
            'Quantity'=>20,
            'Note'=>'',
            'Status'=>1,
        ]);
    }
}
