<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'Brand_ID',
        'Brand_Name',
        'Brand_Name',
        'Status'
    ];
    protected $table = 'brand';
    public $timestamps = true;
    protected $primaryKey = 'Brand_ID';
}
