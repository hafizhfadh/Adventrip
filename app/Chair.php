<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'chairs';

  public function train()
  {
    return $this->belongsTo('App\Train');
  }

}
