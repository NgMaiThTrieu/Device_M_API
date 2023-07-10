<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1. F7.01
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 17,
            'Device_Name'=> 'Máy tính Mainboard ASUS H310 M-E',
            'Image'=>'https://www.asus.com/media/global/products/DoqC99bCaW0H81dH/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>1,
            'Location'=>1,
            'Price'=> 10890000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính: Mainboard ASUS H310 M-E, CPU: Intel Core I3-8100; RAM: DDRam4 4GB bus 2400 KingMax, HDD: WD 1TB 7200rpm 3.5”; Monitor: 19.5” DELL.',
            'IsBorrowing'=>false
        ]);
        //2
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 17,
            'Device_Name'=> 'Máy tính Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>2,
            'Location'=>2,
            'Price'=> 1250000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính: Mainboard ASUS H310 M-E, CPU: Intel Core I3-8100; RAM: DDRam4 4GB bus 2400 KingMax, HDD: WD 1TB 7200rpm 3.5”; Monitor: 19.5” DELL.',
            'IsBorrowing'=>false
        ]);
        //3
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 20,
            'Device_Name'=> 'Máy tính Optilex 3000 Tower',
            'Image'=>'https://cdn.ben.com.vn/Content/Images/Products/1bcc1a6a-26f4-41ba-93e3-d86a147f27f1.jpg',
            'QRCode'=>3,
            'Location'=>3,
            'Price'=> 1390000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính Optilex 3000 Tower Ci5-12500/2x16GB RAM/256GB SSD/Mouse/Keyboard; DELL 19 Monitor - E1920H.',
            'IsBorrowing'=>false
        ]);

        //f7.02 4
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 2,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 17,
            'Device_Name'=> 'Máy tính Mainboard Asus',
            'Image'=>'https://www.asus.com/media/global/products/DoqC99bCaW0H81dH/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>4,
            'Location'=>2,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);
        //5
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 2,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 20,
            'Device_Name'=> 'Máy tính Mainboard ASUS PRIME H310M-K',
            'Image'=>'https://nguyencongpc.vn/media/product/21062-asus-prime-h510m-k-4.jpg',
            'QRCode'=>5,
            'Location'=>2,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard ASUS PRIME H310M-K, CPU Intel Core i3 9100, HDD Western Digital 1TB, Ram Kingmax 8GB). Màn hình LCD 19.5" DELL',
            'IsBorrowing'=>false
        ]);

        //6. f7.03
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: ASUS P8H61-MLE',
            'Image'=>'https://cdn.vatgia.com/pictures/thumb/418x418/2016/11/nay1480146135.jpg',
            'QRCode'=>6,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: ASUS P8H61-MLE; CPU Intel Core I3-2100 3.1Ghz; RAM Kingstons DDR3 2GB; HDD: Samsung 250GB, Monitor: LCD 17").',
            'IsBorrowing'=>false
        ]);
        //7
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: ASUS H61',
            'Image'=>'https://anphat.com.vn/media/product/12938_14549_0_h61m_k.jpg',
            'QRCode'=>7,
            'Location'=>2,
            'Price'=> 2000000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: ASUS H61; CPU: Intel Core I3-3240 3.4 Ghz; RAM: Kingston 2GB; HDD: Western 250GB; Monitor: LCD HP).',
            'IsBorrowing'=>false
        ]);
        //8
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>8,
            'Location'=>3,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);
        //9
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>9,
            'Location'=>4,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);
        //10
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>10,
            'Location'=>4,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);
        //11
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 3,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Optilex 3080',
            'Image'=>'https://anphat.com.vn/media/product/35916_35405_screenshot_2.png',
            'QRCode'=>11,
            'Location'=>5,
            'Price'=> 25640000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Optilex 3080, CPU Intel(R) Core i5-10505 @ 3.20Ghz, 3192 Mhz, 6 Core(s), 12 Logical, RAM: 32GB (2x16GB) DDR4,SSD 128GB,HDD 1TB. Monitor DELL 19").',
            'IsBorrowing'=>false
        ]);

        //F7.04 12
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 4,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>12,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);

        //F7.06 13
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 5,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>13,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);

        //F7.08 14
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 6,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 17,
            'Device_Name'=> 'Máy tính Mainboard ASUS H310 M-E',
            'Image'=>'https://www.asus.com/media/global/products/DoqC99bCaW0H81dH/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>14,
            'Location'=>1,
            'Price'=> 10890000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính: Mainboard ASUS H310 M-E, CPU: Intel Core I3-8100; RAM: DDRam4 4GB bus 2400 KingMax, HDD: WD 1TB 7200rpm 3.5”; Monitor: 19.5” DELL.',
            'IsBorrowing'=>false
        ]);
        //15
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 6,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 17,
            'Device_Name'=> 'Máy tính Mainboard: P5PL AMSE',
            'Image'=>'https://www.maytinhphunggia.vn/media/product/774_mainboard_asus_p5kpl_am_se.jpg',
            'QRCode'=>15,
            'Location'=>1,
            'Price'=> 10890000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: P5PL AMSE; CPU: E7500 2.93Ghz; RAM: 2GB; HDD: 160GB. Màn hình  LCD 17").',
            'IsBorrowing'=>false
        ]);
        //16
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 6,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>16,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);

        //F7.9 17
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 7,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>17,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);
        //18
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 8,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>18,
            'Location'=>2,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);

        //F7.10 
        //19
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 8,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>19,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);
        //20
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 8,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính (Mainboard Asus H81 M-P',
            'Image'=>'https://anphat.com.vn/media/product/19847_1.png',
            'QRCode'=>20,
            'Location'=>2,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard Asus H81 M-P; CPU Intel core I3 4170 3.7Ghz; Ram Kingston DDR3 8GB; HDD 500GB; Monitor LCD 17”).',
            'IsBorrowing'=>false
        ]);
        //21
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 9,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>21,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);

        //f5.4 22
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 10,
            'Faculty_ID'=> 1,
            'Brand_ID'=>2,
            'Device_Name'=> 'HP ProDesk 400 G1 MT',
            'Image'=>'https://maytinhdongbo.com/media/product/120_72_hp_prodesk_400_g1_microtower_gia_re.jpg',
            'QRCode'=>22,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'HP ProDesk 400 G1 MT
            - Intel core i5-4570 3.2GHz
            - Ram DDR3 - 4GB HP
            - HDD 500GB Toshiba
            - Keyboard, Mouse, DVD-ROM
            - LCD HP Compaq R191 18.5 inch Led',
            'IsBorrowing'=>false
        ]);
        //23
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 10,
            'Faculty_ID'=> 1,
            'Brand_ID'=>2,
            'Device_Name'=> 'HP ProDesk 400 G1 MT',
            'Image'=>'https://maytinhdongbo.com/media/product/120_72_hp_prodesk_400_g1_microtower_gia_re.jpg',
            'QRCode'=>23,
            'Location'=>2,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'HP ProDesk 400 G1 MT
            - Intel core i3-4130 3.4GHz
            - Ram DDR3 - 2GB HP
            - HDD 500GB Toshiba
            - Keyboard, Mouse, DVD-ROM
            - LCD HP Compaq R191 18.5 inch Led',
            'IsBorrowing'=>false
        ]);

        //f7.12 24
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 11,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính FPT Elead T10100i',
            'Image'=>'http://viendongdl.com.vn/datafiles/1/15-09-2020/16001663578086_fpt-elead.png',
            'QRCode'=>24,
            'Location'=>1,
            'Price'=> 14560000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính FPT Elead T10100i (Mainboard Asus Prime H510M-F/CSM-SI/CPU Intel Core i3 10105 3.70GHZ/16GB/SSD 250GB) K-M(USB)-Elead F150 CKBM; DELL 20 Monitor - E2016HV)',
            'IsBorrowing'=>false
        ]);

        //25
        //Văn phòng khoa CNTT 2
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 12,
            'Faculty_ID'=> 1,
            'Brand_ID'=>17,
            'Device_Name'=> 'Máy tính Mainboard: H81 M-K',
            'Image'=>'https://www.asus.com/media/global/products/J1D1WkOCtnPeMshg/P_setting_xxx_0_90_end_692.png',
            'QRCode'=>25,
            'Location'=>1,
            'Price'=> 1900000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'Máy tính (Mainboard: H81 M-K; CPU: Intel Core I3-4150 3.5 Ghz; RAM: 4GB; HDD: Western 500GB;  Monitor: LCD HP)',
            'IsBorrowing'=>false
        ]);


    }
}
