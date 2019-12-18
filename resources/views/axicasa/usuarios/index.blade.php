@extends('layouts.admin')
@section('title','Registro de usuarios')
@section('breadcrum')
    <li><a href="/dashboard">Dashboard</a></li>
    <li class="active">Empleados</li>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('status_success'))
                <div class="alert alert-success">
                    <strong>{{session('status_success')}}</strong>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Listado de empleados</h3>
                    <ul class="panel-controls">
                        <a href="/empleados/create" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Registro</a>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>email</th>
                            <th>Fecha registro</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->nombre}}</td>
                                    <td>{{$usuario->apellidos}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>{{$usuario->created_at}}</td>
                                    <th>
                                        <span class="label label-{{$usuario->estatus}}">{{$usuario->estatus}}</span>
                                    </th>
                                    <td>
                                        <a href="/empleados/{{$usuario->id}}/edit" class="btn btn-primary btn-sm">Actualizar</a>
                                        <form action="{{asset('empleados/'.$usuario->id)}}" class="form-inline" method="post">
                                            @csrf
                                            {{method_field('delete')}}
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
