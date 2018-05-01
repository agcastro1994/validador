<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Expresion;

use App\Pais;

use App\Imagen;

use Illuminate\Support\Facades\Storage;

class Validar extends Controller
{

    public function __construct(){

            $this->middleware('auth')->except('list','form','verification');

        }


	public function list() {

		$list = Pais::get();
        $images = Imagen::get();

		return view('main.index', compact('list','images')); 

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

    public function create3(){

        return view('main.create-image');

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

        public function storeImage(Request $request){

        

        $this->validate(request(),[
            'file' => 'required'     
                    ]);


        $country = Pais::latest()->first();
        $id = $country->id;

        
        
        $file = $request->file('file');

        $name = $file->getClientOriginalName();
        // dd($file);

        \Storage::disk('local')->put($name, \File::get($file));

        $public_path = public_path('uploads');
        $url = '/uploads'.'/'.$name;

        $images = new Imagen;

        $images->country_id = $id;
        $images->route= $url;
        $images->save();

                
        return redirect()->action('Validar@list');
        }
 

        public function add($id){

            return view('main.add-expresion', compact('id'));

        }

        public function addExpresion(Request $request, $id){

        

        $this->validate(request(),[
            'expresion' => 'required'       
                    ]);
       
        
        $expresion = new Expresion;

        $expresion->country_id = $id;
        $expresion->expresion= request('expresion');
        
        $expresion->save();

                
         return view('main.add-expresion', compact('id'));
        }


    public function editCountry($id){

         $country=Pais::find($id);
        

     return view('main.country', compact('country')); 

     }

     public function editStore($id){
       $country = Pais::find($id);
       $country->country= request('country');
       $country->save();

       return redirect('/validar/paises');

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

     public function edit($id) {

        $country =Pais::find($id);
        $expresion =Expresion::where('country_id',$id)->get();

        return view('main.edit-country', compact('country','expresion'));
     }

     public function delete($id) {

   $pais = Pais::find($id);
   $expresion =Expresion::where('country_id',$id)->get();

   if($pais == null)
       return "No existe este pais";
   else
       $pais->delete();

   foreach ($expresion as  $expresion) {
       $expresion->delete();
   }

   return redirect('/validar/paises');
    }

    public function deleteExpresion($id) {
   $expresion = Expresion::find($id);
   
   $expresion->delete();

   

   return redirect('/validar/paises');
    }
}
