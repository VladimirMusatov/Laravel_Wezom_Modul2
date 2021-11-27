<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request){

        $PostQuery = Post::query();
        $PostQuery->where('status','=', '1');
        $posts = $PostQuery->paginate(4)->withPath("?" . $request->getQueryString());
        return view('home',compact('posts')); 
    }


    public function create(){
       return view('form'); 
    }

    public function store(Request $request){

                $validate = $request->validate([ 
                        'name' => ['alpha_dash','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
                        'g-recaptcha-response' => 'required | captcha'
                    ]);



        $data = $request->all();
        Post::create($data);
        return redirect()->route('index');
        
    }

}
