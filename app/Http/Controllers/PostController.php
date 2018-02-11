<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function store(Request $input)
    {
    	//Validar
    	$post = Post::create($input->all());
    	//Respuesta
    	return $post;
    }

    public function showall(Request $input)
    {
    	//Validar
    	$posts = Post::all();
    	//Respuesta
    	return $posts;
    }

    public function showone(Request $input, $id)
    {
    	//Validar
    	$post = Post::find($id);
    	//Respuesta
    	return $post;
    }

    public function showsections(Request $input, $id)
    {
    	//Validar
    	$post = Post::find($id);
    	$sections = $post->sections;
    	//Respuesta
    	return $section;
    }

    public function showonesection(Request $input, $id, $sid)
    {
    	//Validar
    	$post = Post::find($id);
    	$sections = $post->sections;
    	$section = $sections->where('id', $sid);
    	//Respuesta
    	return $section;
    }

    public function showfiles(Request $input, $id)
    {
    	//Validar
    	$post = Post::find($id);
    	$files = $post->files;
    	//Respuesta
    	return $files;
    }

    public function showonefile(Request $input, $id, $fid)
    {
    	//Validar
    	$post = Post::find($id);
    	$files = $post->files;
    	$file = $files->where('id', $fid);
    	//Respuesta
    	return $file;
    }

    public function showcomments(Request $input, $id)
    {
    	//Validar
    	$post = Post::find($id);
    	$comments = $post->comments;
    	//Respuesta
    	return $comments;
    }

    public function showonecomment(Request $input, $id, $cid)
    {
    	//Validar
    	$post = Post::find($id);
    	$comments = $post->comments;
    	$comment = $comments->where('id', $cid);
    	//Respuesta
    	return $comment;
    }

    public function update(Request $input, $id)
    {
    	//Validar
    	$post = Post::find($id);
		$element = $input->all();
		foreach ($element as $key => $value){
			$post->$key = $value;
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
