<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function store(Request $input)
    {
    	//Validar
    	$user = User::create($input->all());
    	//Respuesta
    	return $user;
    }

    public function showall(Request $input)
    {
    	//Validar
    	$users = User::all();
    	//Respuesta
    	return $users
    }

    public function showone(Request $input, $id)
    {
    	//Validar
    	$user = User::find($id);
    	//Respuesta
    	return $user;
    }

   	public function showcomments(Request $input, $id)
   	{
   		//Validar
   		$user = User::find($id);
   		$comments = $user->comments;
   		//Respuesta
   		return $comments;
   	}

   	public function showonecomment(Request $input, $id)
   	{
   		//Validar
   		$user = User::find($id);
   		$comment = $user->comments->where('id', $id);
   		//Respuesta
   		return $comment,
   	}

   	public function update(Request $input, $id)
   	{
   		//Validar
   		$user = User::find($id);
   		$element = $input->all();
		foreach ($element as $key => $value){
			$user->$key = $value;
		}
		$update = $post->save();
		//Respuesta
		return $update;
   	}

   	public function destroy(Request $input, $id)
   	{
   		return 'jeje';
   	}
}
