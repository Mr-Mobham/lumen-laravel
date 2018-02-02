<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Notification extends Model
{
  protected $table   = 'notification';
  public $primry_key = 'id';
  public $timestamp  = false;
}
