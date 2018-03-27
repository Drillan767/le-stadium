<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model {

  protected $table = 'pictures';
  protected $fillable = ['path'];
  public $timestamps = false;
}
