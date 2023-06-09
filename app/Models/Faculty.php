<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $primaryKey = 'Faculty_ID';
    protected $fillable = [
     'Faculty_Name',
     'Image',
     'LinkInfo',
     'Status'
    ];
    protected $table = 'faculties';
    public $timestamps = false;
}
