<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'Room_Name',
        'Note',
        'Status'
    ];
    protected $table = 'rooms';
    protected $primaryKey = 'Room_ID';
    public $timestamps = false;
    use HasFactory;
}
