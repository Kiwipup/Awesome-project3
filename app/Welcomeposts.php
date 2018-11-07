<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Welcomeposts extends Model
{
  public function fixTimeStamp() {

        $dt = new Carbon($this->updated_at);
        if ($dt->isToday()) {
            return $dt->format('g:i:s a');
        }
        return $dt->format('n/j/y \\a\\t g:i:s a');

    }
    //class allPosts {
  //  public function scopeAllPosts()
//{
//    return $this->orderBy('updated_at', 'desc');
//}
//}
//}
