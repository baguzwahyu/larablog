<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $fillable = ['id', 'company', 'first_name', 'last_name'];

    public function transjual() {
        return $this->hasMany('App\transjual');
    }
}
