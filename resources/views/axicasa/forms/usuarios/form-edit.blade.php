<div class="row">
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Nombre del empleado</label>
            <input type="text" value="{{$usuario->nombre}}" name="nombre" class="form-control {{$errors->has('nombre') ? 'has-error-input': ' '}}">
            {!! $errors->first('nombre','<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Apellidos del empleado</label>
            <input type="text" value="{{$usuario->apellidos}}" name="apellidos" class="form-control {{$errors->has('apellidos') ? 'has-error-input': ' '}}">
            {!! $errors->first('apellidos','<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Correo electronico</label>
            <input type="email" value="{{$usuario->email}}" name="email" class="form-control {{$errors->has('email') ? 'has-error-input': ' '}}">
            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>
