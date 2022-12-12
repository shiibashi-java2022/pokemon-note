<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexControlle extends Controller
{
    public function show(){
        return 'hello';
    }

    public function showId($id){
        return "hello {$id}";
    }

    public function showTop(){
        return view('top.index',['title' => 'ポケモンノート']);
    }
}
