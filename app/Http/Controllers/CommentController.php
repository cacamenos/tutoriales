<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //
    public function store(Request $input)
    {
    	//Validar
    	$comment = Comment::create($input->all());
    	//Respuesta
    	return $comment;
    }

    public function showall(Request $input)
    {
    	//Validar
    	$comments = Comment::all();
    	//Respuesta
    	return $comments;
    }

    public function showone(Request $input, $id)
    {
    	//Validar
    	$comment = Comment::find($id);
    	//Respuesta
    	return $comment;
    }

    public function update(Request $input, $id)
    {
    	//Validar
    	$comment = Comment::find($id);
    	$element = $input->all();
		foreach ($element as $key => $value){
			$comment->$key = $value;
		}
		$update = $comment->save();
		//Respuesta
		return $update;
    }

    public function destroy(Request $input, $id)
    {
    	//Handle
    }
}
