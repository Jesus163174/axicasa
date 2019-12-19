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
        <form action="{{asset('inmuebles')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading flex">
                        <h3 class="panel-title">Registrar nuevo</h3>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Subir</button>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="">Encabezado o titulo de la vivienda</label>
                            <input type="text" name="titulo" class="form-control input-lg">
                            {!! $errors->first('titulo','<span class="help-block">:message</span>') !!}
                        </div>
                        <div>
                            <textarea class="summernote" name="descripcion" placeholder="Ingresa una descripción"></textarea>
                            {!! $errors->first('descripcion','<span class="help-block">:message</span>') !!}
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Subir portada</h3>
                    </div>
                    <div class="panel-body avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' name="portada" id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@stop
@section('js')
    <script src="{{asset('js/previewimage.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/summernote/summernote.js')}}"></script>
@stop
