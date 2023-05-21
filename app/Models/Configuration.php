<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;
    protected $fillable = [
        'Device_Type_ID',
        'Configuration_Detail_ID'
    ];
    protected $table = 'configurations';
    public $timestamps = true;
    protected $primaryKey = 'ID_Configuration';
}
