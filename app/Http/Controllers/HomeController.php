<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmueble;
class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only'=>'dashboard']);
    }

    public function dashboard(){
        return view('axicasa.dashboard');
    }
    public function home(){
        $inmuebles = Inmueble::paginate(6);
        return view('welcome',['inmuebles'=>$inmuebles]);
    }
    public function  detalleInmueble(Request $request){
        $inmueble = Inmueble::findOrFail($request->id);
        $inmuebles = Inmueble::orderBy('created_at','desc')->paginate(3);
        return view('detalle-inmueble',['inmueble'=>$inmueble,'inmuebles'=>$inmuebles]);
    }
    public function listaInmueble(){
        $inmuebles = Inmueble::orderBy('created_at','desc')->paginate(10);
        return view('listado-todos',['inmuebles'=>$inmuebles]);
    }
}
