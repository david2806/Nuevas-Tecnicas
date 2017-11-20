<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaControladorDP extends Controller
{
   function llamada(){

		$client = new \GuzzleHttp\Client();

		$resultado = $client->request('GET', 'http://192.168.43.188:8000/api/productos'); 		

		return $resultado->getBody();

	}	
}
