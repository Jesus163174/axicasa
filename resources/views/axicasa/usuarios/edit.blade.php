@extends('layouts.admin')
@section('title','Registro de usuarios')
@section('breadcrum')
    <li><a href="/dashboard">Dashboard</a></li>
    <li><a href="/empleados">Empleados</a></li>
    <li class="active">Actualizar</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{asset('empleados/'.$usuario->id)}}" method="post">
                @csrf
                {{method_field('put')}}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Actualizar datos</h3>
                    </div>
                    <div class="panel-body">
                        @include('axicasa.forms.usuarios.form-edit')
                    </div>
                    <div class="panel-footer">
                        <a href="/empleados" class="btn btn-danger">Cancelar</a>
                        <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
