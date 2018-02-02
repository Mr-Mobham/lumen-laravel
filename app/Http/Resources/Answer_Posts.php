<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Answer_Posts extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
          'id' => $this->id,
          'title' => $this->title,
          'body' => $this->body,
          'auth' => $this->auth
        ];
    }

    public function with($request){
      return [
        'ver' => '1.0.0',
        'author_url' => url('http://127.0.0.1:8000/api/test')
      ];

    }



}
