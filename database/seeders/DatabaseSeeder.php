<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;
use App\Models\TypeOfDevice;
use App\Models\Brand;
use App\Models\BatchOfGood;
use App\Models\Room;
use App\Models\Device;
use App\Models\Supplier;
use App\Models\TeacherInformation;
use App\Models\Configuration;
use App\Models\ConfigurationDetail;
use App\Models\ConfigurationSpecification;
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
        $this->call(BOGSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(SupplierSeed::class);
        $this->call(DeviceSeeder::class);
        $this->call(TeacherInformationSeeder::class);
        $this->call(ConfigurationDetailSeeder::class);
        $this->call(ConfigurationSeeder::class);
        $this->call(ConfigurationSpecificationSeeder::class);
        $this->call(ReportMail::class);
    }
}
