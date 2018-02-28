<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'module';
    public $primaryKey = 'code';

    public function cijfers()
    {
      return $this->hasMany('App\Cijfer', 'module_code', 'code');
    }

    public function vaardigheden()
    {
      return $this->hasMany('App\Vaardigheid', 'module_code', 'code');
    }
}
