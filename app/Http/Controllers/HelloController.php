<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    //
    public function index (Request $request){
        return view('hello.index',['txt'=>'フォームを入力']);
    }
    public function post(HelloRequest $request){
       
        return view ('hello.index',['txt'=>'正しい入力です']);
    }

}
