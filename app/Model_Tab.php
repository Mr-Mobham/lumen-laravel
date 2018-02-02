<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Tab extends Model
{
  protected $table   = 'tab';
  public $primry_key = 'id';
  public $timestamp  = false;
}
