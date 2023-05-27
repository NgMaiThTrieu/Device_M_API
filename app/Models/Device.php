<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'Type_Of_Device_ID',
        'Supplier_ID',
        'Batch_Of_Goods_ID',
        'Room_ID',
        'Faculty_ID',
        'Brand_ID',
        'Device_Name',
        'Image',
        'QRCode',
        'Price',
        'Warranty_Period',
        'Status',
        'Note',
        'Description'
    ];

    protected $primaryKey = 'Device_ID';
    protected $table = 'devices';
    public $timestamps = true;
}
