<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blogpost extends Model
{
  

  public function fixTimeStamp() {

        $dt = new Carbon($this->updated_at);
        if ($dt->isToday()) {
            return $dt->format('g:i:s a');
        }
        return $dt->format('n/j/y \\a\\t g:i:s a');

    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function comments() {
      return $this->hasMany('App\Comment');
    }


}
