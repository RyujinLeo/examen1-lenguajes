<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directorio;
class directorioController extends Controller
{
    //

    public function mostrardirectorios (){
        $Directorios = directorio::all();
        Return view ('directorio', compact('Directorios'));
        }

        public function guardardirectorio (Request $request){
         $nvoDirectorio= new directorio();
         $nvoDirectorio->codigoEntrada =$request->codigo;
         $nvoDirectorio->nombre =$request->nombre;
         $nvoDirectorio->apellido =$request->apellido;
         $nvoDirectorio->Telefono =$request->telefono;
         $nvoDirectorio->correo =$request->correo;
         $nvoDirectorio-> save();
         return redirect('directorio');
            }
}
