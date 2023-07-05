<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceBorrowingForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Borrower_ID',
        'Lender_ID',
        'Borrow_Date',
        'Due_Date',
        'Status'
    ];
    protected $table = 'device_borrowing_forms';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
