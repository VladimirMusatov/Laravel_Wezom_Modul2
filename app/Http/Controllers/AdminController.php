<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class adminController extends Controller
{
    
    //Вывод списка отзывов
	public function index(){
		$posts = Post::all();
        return view('admin', compact('posts'));
	}

    //Редактирование отзыва 
	public function edit(Post $id)
    {   
        return view('edit',compact('id'));
    }

    //Обновление отзыва
	public function update(Request $request, Post $id)
    {
        $id->update($request->all());
        return redirect()->route('admin');
    }

    //Удаление отзыва
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('admin');
    }

}
