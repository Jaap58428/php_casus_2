<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaardigheid extends Model
{
    protected $table = 'vaardigheden';

    public function module()
    {
      return $this->belongsTo('App\Module', 'module_code', 'code');
    }
}
