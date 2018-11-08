<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function post() {
      return $this->belongsTo('App\Blogpost');
  }

  public function user() {
      return $this->belongsTo('App\User');
  }

  public function fixTimeStamp() {

        $dt = new Carbon($this->updated_at);
        if ($dt->isToday()) {
            return $dt->format('g:i:s a');
        }
        return $dt->format('n/j/y \\a\\t g:i:s a');

    }
}
