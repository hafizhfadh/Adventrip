<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer_ticket extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $fillable = ['id','id_booking'];
}
