<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrutasController extends Controller
{
    //Accion que devuelva una vista
    public function index(){
        return view('frutas.index')->with('frutas', array('piña','manzana','pera','bananna'));

    }
    public function naranjas() {
        return 'accion de naranjas';
    }
    public function peras() {
        return 'accion de peras';
    }

    public function recibirFormulario(Request $request){
        //$data = $request;

        return 'el nombre de la fruta es: '.$request->input('nombre');

    }
}
