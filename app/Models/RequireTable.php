<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequireTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'Device_ID',
        'Require_Type',
        'Description',
        'Status'
    ];
    protected $table = 'requires';
    public $timestamps = true;
    protected $primaryKey = 'Require_ID';
}
