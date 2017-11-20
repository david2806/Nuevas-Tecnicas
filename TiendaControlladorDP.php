<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Shop;

class TiendaControlladorDP extends Controller
{
	public function index(){
		
		$resultado = Shop::all();

		return view('productos.index',['resultado'=>$resultado]);
	}
    public function create(){

		return view('productos.create');
	}

	public function store(Request $request){

		Shop::create($request->all());
				

		return Redirect::to('productos');
	}

	public function show(Request $request){

		$resultado = Shop::where('tipo',$request->tipo)->get();

		return $resultado;

	}
}
