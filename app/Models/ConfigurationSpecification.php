<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationSpecification extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_Device',
        'ID_Configuration_Detail',
        'Specifications',
        'Brand',
        'Status',
        'Note'
    ];

    protected $primaryKey = ['ID_Device', 'ID_Configuration_Detail'];
    protected $table = 'configuration_specifications';
    public $timestamps = true;
    // protected $keyType = 'array';
}
