<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['Supplier_Name', 'Address', 'Phone_Number'];
    protected $primaryKey = 'Supplier_ID';
    protected $table = 'suppliers';
    public $timestamps = false;
}
