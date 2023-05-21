<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportEmail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Student_Code',
        'Device_Image',
        'QR_Code',
        'Status'
    ];
    protected $table = 'report_emails';
    public $timestamps = true;
    protected $primaryKey = 'Email_ID';
}
