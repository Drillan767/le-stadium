<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model {

  protected $table = 'stadium';

  public $timestamps = false;

  protected $fillable = ['landing_image', 'g_map_key', 'today_special', 'today_price', 'logo', 'background_description',
    'description', 'menu', 'hours', 'location', 'gallery'];

  public function dishes() {
    return $this->hasMany('App\Dishes');
  }

  public function pictures() {
    return $this->hasMany('App\Pictures');
  }
}
