<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_Notification;
use App\Http\Resources\Article as Run_Prog;

class notification extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Model_Notification::all();
        return Run_Prog::collection($books);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\Response
     */
     public function store(Request $req) {
         $res = $req-> isMethod('put') ? Model_Notification::findOrFail
         ($req->id) : new Model_Notification;
         $res->id          = $req->input('id');
         $res->title       = $req->input('title');
         $res->description = $req->input('description');
         if ($res->save()) {
           return new Run_Prog($res);
         }
     }

    public function show($id)
    {
      $res = Model_Notification::findOrFail($id);
      return new Run_Prog($res);
    }


    public function destroy($id)
    {
      $res = Model_Notification::find($id);
      if ($res->delete()) {
        return new Run_Prog($res);
      }

    }



}
