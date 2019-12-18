<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Auth;
use DB;
class UsuarioController extends Controller
{

    public function index(){
        $usuarios = User::users(Auth::user()->id)->get();
        return view('axicasa.usuarios.index',['usuarios'=>$usuarios]);
        return response()->json($usuarios);
    }
    public function create(){
        return view('axicasa.usuarios.create');
    }
    public function store(RegisterUserRequest $request){
        DB::beginTransaction();
        try{
            $usuario = new User();
            $request['password'] = bcrypt($request['password']);
            $registrado = $usuario->agregar($request->all());
            DB::commit();
            return redirect('empleados/')->with('status_success','El empleado fue registrado correctamente');
        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
    }
    public function show($id)
    {
        //
    }
    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('axicasa.usuarios.edit',['usuario'=>$usuario]);
    }
    public function update(UpdateUserRequest $request, $id){
        DB::beginTransaction();
        try{
            $usuario    = User::findOrFail($id);
            $actualizar = $usuario->editar($usuario,$request->all());
            DB::commit();
            return redirect('empleados/')->with('status_success','El empleado fue actualizado correctamente');
        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
    }
    public function destroy($id){
        DB::beginTransaction();
        try{
            $usuario    = User::findOrFail($id);
            $usuario->estatus = 'inactivo';
            $usuario->save();
            DB::commit();
            return redirect('empleados/')->with('status_success','El empleado fue dado de baja correctamente');
        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }
    }
}
