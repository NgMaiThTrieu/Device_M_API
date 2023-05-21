<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Borrowing_ID',
        'Device_ID',
        'Room_ID',
        'Status'
    ];
    protected $table = 'borrowing_details';
    public $timestamps = true;
    protected $primaryKey = 'Borrowing_ID';
}
