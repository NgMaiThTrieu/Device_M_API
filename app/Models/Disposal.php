<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'Device_ID',
        'Disposal_Cost',
        'Disposal_Date',
        'Note',
        'Status'
    ];
    protected $table = 'disposals';
    public $timestamps = true;
    protected $primaryKey = 'ID_Disposal';
}
