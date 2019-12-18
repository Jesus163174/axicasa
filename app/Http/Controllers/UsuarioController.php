<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\User;
use DB;
class UsuarioController extends Controller
{

    public function index(){
        //
    }
    public function create(){

    }
    public function store(Request $request){
        DB::beginTransaction();
        try{
            $usuario = new User();
            $request['password'] = bcrypt($request['password']);
            $registrado = $usuario->agregar($request->all());
            DB::commit();
            return response()->json($registrado);
            #return redirect('usuarios/'.$registrado->id);
        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
