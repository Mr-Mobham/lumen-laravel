<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Answer_Posts;
use App\Http\Resources\Answer_Posts as Run_Prog;
use Illuminate\Support\Facades\DB;


class Answer_Posts extends Controller
{

  public function show($id,$post_create)
  {
    $users = DB::select(
      "
        select * from posts WHERE auth = ".$id." AND post_create = ".$post_create."
      "
    );
    return $users;
  }


}
