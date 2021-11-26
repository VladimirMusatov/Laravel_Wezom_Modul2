<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class adminController extends Controller
{
 
	public function index(){

		$posts = Post::all();
        return view('admin', compact('posts'));
	}


	public function edit(Post $id)
    {   
        return view('edit',compact('id'));
    }

	public function update(Request $request, Post $id)
    {
        $id->update($request->all());
        return redirect()->route('admin');
    }

    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('admin');
    }

}
