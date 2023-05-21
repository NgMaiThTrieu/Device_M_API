<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchOfGood extends Model
{
    use HasFactory;
    protected $fillable = [
        'Date_Of_Import'
    ];
    public $timestamps = true;
    protected $table = 'batch_of_goods';
    protected $primaryKey = 'Batch_Of_Goods_ID';
}
