<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model {

  protected $table = 'dishes';
  protected $fillable = ['name', 'price', 'category'];
  public $timestamps = false;
}
