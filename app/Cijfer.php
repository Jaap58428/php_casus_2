<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cijfer extends Model
{
    protected $table = "cijfers";

    public function user()
    {
      return $this->belongsTo('App\User', 'user_student_nummer', 'student_nummer');
    }
    public function module()
    {
      return $this->belongsTo('App\Module', 'module_code', 'code');
    }
}
