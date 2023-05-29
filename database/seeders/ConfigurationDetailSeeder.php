<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfigurationDetail;
class ConfigurationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfigurationDetail::create([
            'Configuration_Name'=>'CPU'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Bộ nhớ đệm'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Tốc độ CPU tối đa'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Loại RAM'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Dung lượng RAM'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Tốc độ Bus'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Loại ổ đĩa cứng'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Dung lượng đĩa cứng'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Bộ xử lý đồ họa'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Chipset card đồ họa'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Cổng kết nối màn hình'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Chuẩn WiFi'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Chuẩn LAN'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Bluetooth'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Cổng USB'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Cổng HDMI'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Khối lượng sản phẩm (kg)'
        ]);
        ConfigurationDetail::create([
            'Configuration_Name'=>'Kích thước sản phẩm'
        ]);


        //
    }
}
