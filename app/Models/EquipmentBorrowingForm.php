<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentBorrowingForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'Device_ID',
        'Borrower_ID',
        'Lender_ID',
        'Borrow_Date',
        'Due_Date',
        'Status'
    ];
    protected $primaryKey = 'Equipment_Borrowing_Form_ID';
    protected $table = 'equipment_borrowing_forms';
    public $timestamps = true;
}
