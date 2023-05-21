<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $primaryKey = 'Faculty_ID';
    protected $fillable = ['Faculty_Name', 'image'];
    protected $table = 'faculties';
    public $timestamps = true;
    use HasFactory;
}
