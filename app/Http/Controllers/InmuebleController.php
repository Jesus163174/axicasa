<?php

namespace App\Http\Controllers;
use App\Http\Requests\InmuebleRequest;
use App\Inmueble;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use DB;
class InmuebleController extends Controller
{

    public function index(){
        $inmuebles = Inmueble::all();
        return view('axicasa.inmuebles.index',['inmuebles'=>$inmuebles]);
    }
    public function create(){
        return view('axicasa.inmuebles.create');
    }
    public function  caracteristicas($inmuebleId){
        $inmueble = Inmueble::findOrFail($inmuebleId);
        return view('axicasa.inmuebles.caracteristicas',['inmueble'=>$inmueble]);
    }
    public function store(Request $request){

        $this->validate(request(),[
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);

        DB::beginTransaction();

        try {
            //subir portada de la vivienda
            $portada = null;
            $imagen  = null;

            if($request->hasFile('portada')){
                $imagen = $request->file('portada');
                $portada = 'inmueble_'.time().$imagen->getClientOriginalName();
                \Storage::disk('local')->put($portada,  \File::get($imagen));
            }else{
                return back();
            }

            //registrar datos
            $inmueble = new Inmueble();
            $inmueble->portada = $portada;
            $inmueble->titulo  = $request->titulo;
            $inmueble->descripcion = $request->descripcion;
            $inmueble->save();
            DB::commit();

            return redirect('/inmuebles/caracteristicas/'.$inmueble->id);

        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }

    }
    public function agregarCaracteristicas(Request $request,$inmuebleId){

        $this->validate(request(),[
            'costo'=>'required',
            'tipo'=>'required',
            'habitaciones'=>'required',
            'area'=>'required',
            'estacionamiento'=>'required',
            'baños'=>'required',
            'pisos'=>'required'
        ]);
        DB::beginTransaction();
        try {
            $inmueble                  = Inmueble::findOrFail($inmuebleId);
            $inmueble->costo           = $request->costo;
            $inmueble->tipo            = $request->tipo;
            $inmueble->habitaciones    = $request->habitaciones;
            $inmueble->area            = $request->area;
            $inmueble->estacionamiento = $request->estacionamiento;
            $inmueble->baños           = $request->baños;
            $inmueble->pisos           = $request->pisos;
            $inmueble->estatus         = 'activo';
            $inmueble->save();
            DB::commit();
            return redirect('inmuebles');
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
    public function update(Request $request, $id){

        $this->validate(request(),[
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);

        DB::beginTransaction();

        try {
            //registrar datos

            $inmueble = Inmueble::findOrFail($id);
            $inmueble->titulo  = $request->titulo;
            $inmueble->descripcion = $request->descripcion;
            $inmueble->save();
            DB::commit();

            return redirect('/inmuebles/caracteristicas/'.$inmueble->id)->with('status_success',"Inmueble actualizado correctamente");
        }catch (\Exception $e){
            dd($e);
        }
    }
    public function destroy($id)
    {
        //
    }
}
