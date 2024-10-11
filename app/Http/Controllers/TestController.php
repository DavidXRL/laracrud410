<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //ESTA ES LA BASE DE DATOS
use App\Models\Client; //IMPORTACIÓN DEL MODELO EN EL CONTROLADOR
//ESTO SE USA PARA REALIZAR NUESTRAS FUNCIONES DE PETICIÓN (CRUD)

class TestController extends Controller
{
    //bloque de código encapsulado para poder llamarlo cuando lo necesitemos
    function test()
    {
// 1-. CONECTAR CON EL MODELO QUE CONECTA A LA BASE DE DATOS
// llama el primer registro
        $client = Client::find(1);
        var_dump($client);   //IMPRIME TODOS LOS DATOS DE PASO

// RETORNAR UNA VISTA CON LA INFORMACIÓN DEL MODELO
    return view('testdb', ['client' => $client]);
    }
}
