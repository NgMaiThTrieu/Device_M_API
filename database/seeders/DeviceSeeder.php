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
        //
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 2,
            'Device_Name'=> 'PC HP Slim Desktop Bundle',
            'Image'=>'https://cdn.nguyenkimmall.com/images/thumbnails/600/336/detailed/821/10052816-pc-hp-slim-desktop-bundle-s01-i5-12400-pf2033d-6l604pa-1.jpg',
            'QRCode'=>'re23',
            'Price'=> 10890000,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'PC HP Slim Desktop Bundle S01-PF2034D i3-12100/8GB/256GB/Win11 6L605PA'
        ]);
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 2,
            'Device_Name'=> 'Máy Bộ HP 280 Pro G6 MT',
            'Image'=>'https://cdn.nguyenkimmall.com/images/thumbnails/600/336/detailed/821/10052816-pc-hp-slim-desktop-bundle-s01-i5-12400-pf2033d-6l604pa-1.jpg',
            'QRCode'=>'1121122023520',
            'Price'=> 9300000 ,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>' (Core i3-10105/4GB/SSD 256GB/Win11)'
        ]);
        Device::create([
            'Type_Of_Device_ID'=> 1,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 1,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 2,
            'Device_Name'=> 'Máy Bộ HP ProDesk 600 G2 SFF',
            'Image'=>'https://product.hstatic.net/200000420363/product/untitled-design-13_f55728e0e0ea4ac5bf16a54717a28ff8_master.jpg',
            'QRCode'=>'1121122023520',
            'Price'=> 9300000 ,
            'Warranty_Period'=>'2024-5-20',
            'Status'=>0,
            'Note'=>'',
            'Description'=>' (Máy tính đồng bộ HP ProDesk 600G2 SFF (Small Form Factor) thế hệ mới với hiệu suất cao
            Cấu hình sử dụng main chipset Intel Q150
            Bộ vi xử lý hỗ trợ bộ vi xử lý thế hệ thứ 6 Skylake (Core i3, i5, i7, Pentium)
            DDR4 (4 khe DDR4 hỗ trợ tối đa 64GB bus 2133))'
        ]);
        Device::create([
            'Type_Of_Device_ID'=> 3,
            'Supplier_ID'=> 1,
            'Batch_Of_Goods_ID'=> 2,
            'Room_ID'=> 2,
            'Faculty_ID'=> 1,
            'Brand_ID'=> 19,
            'Device_Name'=> 'Quạt sạc điện Sunhouse SHD7223',
            'Image'=>'https://cdn.nguyenkimmall.com/images/thumbnails/696/522/detailed/765/10050606-quat-sac-dien-sunhouse-shd7223-1.jpg',
            'QRCode'=>'1121122023525',
            'Price'=> 180000 ,
            'Warranty_Period'=>'2024-6-20',
            'Status'=>1,
            'Note'=>'',
            'Description'=>'
            - 3 tốc độ gió, đáp ứng mọi nhu cầu
            - Quay đảo chiều, gió tản đều
            - Dung lượng pin lớn, hoạt động liên tục trong 5 - 16 giờ tùy tốc độ
            - Tích hợp đèn ngủ 2 trong 1'
        ]);
    }
}
