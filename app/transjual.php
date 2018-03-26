<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transjual extends Model
{
  protected $table = 'transjual';
  protected $fillable = ['id', 'nota', 'customer_id', 'code_product', 'jumlah'];

  public function custo() {
      return $this->belongsTo('App\customer', 'customer_id');
  }

  public function pro() {
      return $this->belongsTo('App\product', 'code_product');
  }
}
