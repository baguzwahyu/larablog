<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';
    protected $fillable = ['nama_kendaraan', 'jenis_kendaraan', 'buatan', 'created_at', 'updated_at'];
}
