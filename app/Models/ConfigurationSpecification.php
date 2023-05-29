<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationSpecification extends Model
{
    use HasFactory;
    protected $fillable = [
        'Device_ID',
        'Configuration_Detail_ID',
        'Specification',
        'Brand_ID',
        'Status',
        'Note'
    ];

    protected $primaryKey = ['Device_ID','Configuration_Detail_ID'];
    protected $table = 'configuration_specifications';
    public $timestamps = false;
    public $incrementing = false;

}
