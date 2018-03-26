<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['user_id', 'title', 'slug', 'content'];
  
    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
