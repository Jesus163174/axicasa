@extends('layouts.admin')
@section('title','Registro inmuebles')
@section('css')
    <link rel="stylesheet" href="{{asset('css/previewimage.css')}}">
@stop
@section('breadcrum')
    <li><a href="/dashboard">Dashboard</a></li>
    <li class="active">Inmuebles</li>
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
                    <h3 class="panel-title">Inmuebles generales</h3>
                    <ul class="panel-controls">
                        <a href="/inmuebles/create" class="btn btn-primary btn-sm"><span class="fa fa-plus"></span> Registro</a>
                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Portada</th>
                            <th>Titulo</th>
                            <th>Costo</th>
                            <th>Estatus</th>
                            <th>Fecha registro</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($inmuebles as $inmueble)
                                <tr>
                                    <td>
                                        <img style="width: 40px; height: 40px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-lg-{{$inmueble->id}}" src="{{asset('axicasa/'.$inmueble->portada)}}" alt="">
                                    </td>
                                    <td style="line-height: 40px;">{{$inmueble->titulo}}</td>
                                    <td style="line-height: 40px;">${{number_format($inmueble->costo,2,'.',',')}}</td>
                                    <td style="line-height: 40px;">
                                        <span class="label label-{{$inmueble->estatus}}">{{$inmueble->estatus}}</span>
                                    </td>
                                    <td>{{$inmueble->created_at}}</td>
                                    <td style="line-height: 40px;">
                                        <a href="/inmuebles/caracteristicas/{{$inmueble->id}}" class="btn btn-primary">Actualizar</a>
                                    </td>
                                </tr>
                                <div class="modal fade bd-example-modal-lg-{{$inmueble->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">{{$inmueble->titulo}}</h3>
                                            </div>
                                            <div class="modal-body">
                                                <span style="color:green; font-size: 20px; font-weight: bold;">Costo: ${{number_format($inmueble->costo,2,',','.')}}</span>
                                                <img src="{{asset('axicasa/'.$inmueble->portada)}}" style="width: 100%;" alt=""><hr>
                                                {!! $inmueble->descripcion !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')

@stop
