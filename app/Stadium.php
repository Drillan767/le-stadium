<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model {

  protected $table = 'stadium';

  protected $fillable = ['landing_image', 'g_map_key', 'logo', 'background_description',
    'description', 'hours', 'location', 'gallery'];
}
