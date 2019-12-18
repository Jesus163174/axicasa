<div class="row">
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Nombre del empleado</label>
            <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control {{$errors->has('nombre') ? 'has-error-input': ' '}}">
            {!! $errors->first('nombre','<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Apellidos del empleado</label>
            <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control {{$errors->has('apellidos') ? 'has-error-input': ' '}}">
            {!! $errors->first('apellidos','<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Correo electronico</label>
            <input type="email" value="{{old('email')}}" name="email" class="form-control {{$errors->has('email') ? 'has-error-input': ' '}}">
            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
        </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password"  name="password" class="form-control {{$errors->has('password') ? 'has-error-input': ' '}}">
            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>
