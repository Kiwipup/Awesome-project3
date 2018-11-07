<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blogpost extends Model
{
  // Accessor - changes what is displayed when the model shows 'name'
  public function getNameAttribute($value) {
      $pattern = '/^\d+-{1}/';
      $replacement = '';
      return preg_replace($pattern, $replacement, $value);
  }

  // Mutator - changes what is saved to the database for 'name'
  public function setNameAttribute($value)
  {
      if (\Auth::check()) {
          $this->attributes['title'] = \Auth::id() . '-' . $value;
      }
      else {
          $this->attributes['title'] = $value;
      }
  }

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


}
