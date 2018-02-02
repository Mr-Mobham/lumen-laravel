<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Tab;
use App\Http\Resources\Tab as Run_Prog;

class Tab extends Controller
{

    public function index()
    {
        $Tab = Model_Tab::all();
        return Run_Prog::collection($Tab);

    }



}
