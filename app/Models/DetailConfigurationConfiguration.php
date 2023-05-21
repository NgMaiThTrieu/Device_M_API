<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCon extends Model
{
    use HasFactory;
    protected $primaryKey = [
        'DC_ID_Detail_Configuration',
        'CID_Detail_Configuration'
    ];

    protected $table = 'detail_cons';
    public $timestamps = true;
}
