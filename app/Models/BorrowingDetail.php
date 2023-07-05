<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Borrowing_ID',
        'Device_ID',
        'Room_ID',
        'Old_Room_ID',
        'Status',
        'Old_Status',
    ];
    protected $table = 'borrowing_details';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
