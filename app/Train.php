<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'trains';

  public function wagons()
  {
    return $this->hasMany('App\Wagon');
  }

  public function chair()
  {
    return $this->hasMany('App\Chair');
  }

}
