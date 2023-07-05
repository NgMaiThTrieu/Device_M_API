<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchOfGoodDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Batch_Of_Goods_ID',
        'Quantity',
        'Unit_Price',
        'Status'
    ];
    protected $table = 'Batch_Of_Good_Details';
        public $timestamps = false;
}
