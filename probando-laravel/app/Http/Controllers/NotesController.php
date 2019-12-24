<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function getIndex(){
        //conseguir las notas

        $notas = DB::table('notes')->get();
        var_dump($notas);
        return 'index notas';
    }
}
