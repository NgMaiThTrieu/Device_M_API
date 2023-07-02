<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationSpecification extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Device_ID',
        'Configuration_Detail_ID',
        'Specification',
        'Brand_ID',
        'Status',
        'Note'
    ];


    public $timestamps = false;
    public $incrementing = false;

}
