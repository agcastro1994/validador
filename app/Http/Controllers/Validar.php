<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Expresion;

use App\Pais;

class Validar extends Controller
{

	public function list() {

		$list = Pais::latest()->get();

		return view('main.index', compact('list')); 

	}

	public function form($id) {

		$list = Pais::find($id);

		return view('main.validar', compact('list')); 

	}

	public function create(){

    	return view('main.create');

    } 

    public function create2(){

    	return view('main.create-expresion');

    } 

    public function store(){

    	//dd(request()->all());

    	//validation

    	$this->validate(request(),[
    		'country' => 'required'   		
    	
    		    	]);


    	$pais = new Pais;

    	$pais->country= request('country');
    	
    	$pais->save();
    	
    	return redirect('/crear2');
}

public function storeExpresion(Request $request){

    	

    	$this->validate(request(),[
    		'expresion' => 'required'    	
    		    	]);


    	$pais = Pais::latest()->first();
    	$id = $pais->id;

    	$expresion = new Expresion;

        $expresion->country_id = $id;
    	$expresion->expresion= request('expresion');
    	
    	$expresion->save();

    	    	
    	 return view('main.create-expresion');
		}



    public function verification($id){

    	

    	// $this->validate(request(),[
    	// 	'title' => 'required',
    	// 	'resume' => 'required',
    	// 	'description' => 'required'
    	
    	// 	    	]);


    	$values = Expresion::where('country_id', $id)->get();
    	
    	$good =0;

    	$numeroSolicitado = request('numero');

    	foreach ($values as $values) {
    			$expresion = $values->expresion;
    			
		    	if(preg_match($expresion, $numeroSolicitado) )
		              { $good = 1; }
		 }

		 //return $values;
    	if ($good == 1)
    	return "El numero telefonico es valido para este pais  <a href='/validar/paises'>Volver a la lista</a> "; 
    	else 
    	 return "El numero telefonico no es valido para este pais  <a href='/validar/paises'>Volver a la lista</a> "; 

}
}
