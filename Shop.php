<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'productos';

    public $timestamps = false; //para que cree o no las columnas de creacion o actulizacion del un registro

	protected $fillable = [
		'tipo',
		'nombre',
		'precio'
	];		
}
