@extends('layouts.admin')
@section('title','Registro inmuebles')
@section('css')
    <link rel="stylesheet" href="{{asset('css/previewimage.css')}}">
@stop
@section('breadcrum')
    <li><a href="/dashboard">Dashboard</a></li>
    <li><a href="/inmuebles">Inmuebles</a></li>
    <li class="active">Registro</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('status_success'))
                <div class="alert alert-success">
                    <strong>{{session('status_success')}}</strong>
                </div>
            @endif
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading flex">
                    <h5 class="title-panel">{{$inmueble->titulo}}</h5>
                    <a data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar</a>
                </div>
                <div class="panel-body">
                    <img src="{{asset('axicasa/'.$inmueble->portada)}}" style="width: 100%;" alt=""><hr>
                    {!! $inmueble->descripcion !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{asset('inmuebles/caracteristicas/'.$inmueble->id)}}" method="post">
                @csrf
                {{method_field('put')}}
                <div class="panel panel-primary">
                    <div class="panel-heading flex">
                        <h3 class="panel-title">Caracteristicas de la vivienda</h3>
                        <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span>Subir</button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Costo: </label>
                                    <input type="text" value="{{$inmueble->costo}}" name="costo" class="form-control">
                                    {!! $errors->first('costo','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Tipo: </label>
                                    <select name="tipo" class="form-control" id="">
                                        <option value="{{$inmueble->tipo}}" selected>
                                            @if($inmueble->tipo == 'casa')
                                                1.Casa
                                            @else
                                                2.Departamento
                                            @endif
                                        </option>
                                        <option value="casa">1.Casa</option>
                                        <option value="departamento">2.Departamento</option>
                                    </select>
                                    {!! $errors->first('tipo','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Numero de habitaciones: </label>
                                    <input type="number" value="{{$inmueble->habitaciones}}" name="habitaciones" class="form-control">
                                    {!! $errors->first('habitaciones','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Area(M^2): </label>
                                    <input type="number" value="{{$inmueble->area}}" name="area" class="form-control">
                                    {!! $errors->first('area','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Estacionamiento:</label>
                                    @if($inmueble->estacionamiento == 0 || $inmueble->estacionamiento == 1 )
                                        <select name="estacionamiento" class="form-control" id="">
                                            <option value="{{$inmueble->estacionamiento}}" selected>
                                                @if($inmueble->estacionamiento == 0)
                                                    1.Si
                                                @else
                                                    2.No
                                                @endif
                                            </option>
                                            <option value="0">1.Si</option>
                                            <option value="1">2.No</option>
                                        </select>
                                        {!! $errors->first('estacionamiento','<span class="help-block">:message</span>') !!}
                                    @else
                                        <select name="estacionamiento" class="form-control" id="">
                                            <option value="{{$inmueble->estacionamiento}}" selected>¿Hay estacionamiento?</option>
                                            <option value="0">1.Si</option>
                                            <option value="1">2.No</option>
                                        </select>
                                        {!! $errors->first('estacionamiento','<span class="help-block">:message</span>') !!}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Numero de baños: </label>
                                    <input type="number" value="{{$inmueble->baños}}" name="baños" class="form-control">
                                    {!! $errors->first('baños','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <div class="form-group-lg">
                                    <label for="">Numero de pisos: </label>
                                    <input type="number" value="{{$inmueble->pisos}}" name="pisos" class="form-control">
                                    {!! $errors->first('pisos','<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
    <form action="{{asset('inmuebles/'.$inmueble->id)}}" method="post">
        @csrf
        {{method_field('put')}}
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$inmueble->titulo}} ( <span class="fa fa-edit"></span> Actualizar)</h4>
                    </div>
                    <div class="modal-body">
                        <label for="">Titulo: </label>
                        <input type="text" value="{{$inmueble->titulo}}" name="titulo" class="form-control"> <br>
                        <textarea class="summernote"  name="descripcion" placeholder="Ingresa una descripción">
                            {{$inmueble->descripcion}}
                        </textarea>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-info">Agregar fotos</a>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@stop
@section('js')
    <script src="{{asset('js/previewimage.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/summernote/summernote.js')}}"></script>
@stop
