<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'Faculty_ID',
        'Image',
        'Username',
        'Password',
        'Teacher_Name',
        'Phone_Number',
        'Address',
        'Gender',
        'Date_Of_Birth',
        'IsDeleted',
        'Status',

    ];
    protected $table = 'teacher_information';
    public $timestamps = false;
    protected $primaryKey = 'ID_Teacher';
}
