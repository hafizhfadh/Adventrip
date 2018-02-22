<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wagon extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'wagons';

  public function train()
  {
    return $this->belongsTo('App\Train');
  }

}
