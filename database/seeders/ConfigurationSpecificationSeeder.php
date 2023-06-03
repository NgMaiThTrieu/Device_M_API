<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfigurationSpecification;
class ConfigurationSpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>1,
            'Specification'=>'Intel Core i5',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>2,
            'Specification'=>'12 MB',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>3,
            'Specification'=>'Lên đến 4.3 GHz',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>4,
            'Specification'=>'DDR4',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>5,
            'Specification'=>'8 GB',
            'Brand_ID'=>5,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>6,
            'Specification'=>'2933 MHz',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>7,
            'Specification'=>'SSD',
            'Brand_ID'=>5,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>8,
            'Specification'=>'256 GB',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>9,
            'Specification'=>'Intel® UHD Graphics 730',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>10,
            'Specification'=>'Intel® ADL H670',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>11,
            'Specification'=>'1 VGA; 1 HDMI-out 1.4b',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>12,
            'Specification'=>'802.11a/b/g/n/ac (2x2)',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>13,
            'Specification'=>'1 RJ-45',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>14,
            'Specification'=>'Bluetooth® 5 combo',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>15,
            'Specification'=>'4 USB 2.0 Type-A',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>16,
            'Specification'=>'HDMI-out 1.4b',
            'Brand_ID'=>3,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>17,
            'Specification'=>'3.02 kg',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);
        ConfigurationSpecification::create([
            'Device_ID'=>1,
            'Configuration_Detail_ID'=>18,
            'Specification'=>'95 x 303 x 270 mm',
            'Brand_ID'=>null,
            'Status'=>1,
            'Note'=>''
        ]);

    }
}
