<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    //
    public function store(Request $input)
    {
    	//Validar
    	$section = Section::create($input->all());
    	//Respuesta
    	return $section;
    }

    public function showall(Request $input)
    {
    	//Validar
    	$sections = Section::all();
    	//Respuesta
    	return $sections;
    }

    public function showone(Request $input, $id)
    {
    	//Validar
    	$section = Section::find($id);
    	//Respuesta
    	return $section;
    }

    public function update(Request $input, $id)
    {
    	//Validar
    	$section = Section::find($id);
    	$element = $input->all();
		foreach ($element as $key => $value){
			$section->$key = $value;
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
