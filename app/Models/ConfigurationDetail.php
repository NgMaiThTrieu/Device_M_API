<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Configuration_Name'
    ];

    protected $primaryKey = 'Configuration_Detail_ID';
    protected $table = 'configuration_details';
    public $timestamps = true;
}
