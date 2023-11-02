<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\beastmexValidador;

class beastmexController extends Controller
{
    //
    public function metodoInicio(){
        return view('login');
    }
    public function metodoalmacen(){
        return view('almacen');
    }
    public function metodoalmacenRegistro(){
        return view('almRegistro');
    }
    public function metodocompras(){
        return view('compras');
    }
    public function metodogerencia(){
        return view('gerencia');
    }
    /* public function metodomodal(){
        return view('modalesalma');
    } */
    public function metodoeditarProducto(beastmexValidador $req)
    {
        // Si la validación pasa, se llegará a este punto
        // Realiza alguna acción y luego redirige
        return redirect('/modal')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }


    

}
