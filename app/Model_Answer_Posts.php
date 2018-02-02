<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_Answer_Posts extends Model
{
  protected $table   = 'posts';
  public $primry_key = 'id';
  public $timestamp  = false;
}
