<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Batch_Of_Goods_ID',
        'Device_ID',
        'Quantity',
        'Unit_Price'
    ];
    protected $table = 'departments';
    protected $primaryKey = ['Batch_Of_Goods_ID', 'Device_ID'];

        public $timestamps = true;
}
