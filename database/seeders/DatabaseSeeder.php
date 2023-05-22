<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;
use App\Models\TypeOfDevice;
use App\Models\Brand;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FalcutySeeder::class);
        $this->call(TypeOfDeviceSeeder::class);
        $this->call(BrandSeeder::class);
    }
}
