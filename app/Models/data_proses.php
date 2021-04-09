<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_proses extends Model
{
    public $table = "data_proses";
    use HasFactory;

    protected $fillable = [
        'nik',
        'th_penerimaan_id',
        'hasil_topsis'
    ];
}
