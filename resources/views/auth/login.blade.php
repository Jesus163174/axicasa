
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <!-- META SECTION -->
    <title>Axicasa | Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/theme-default.css')}}"/>
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/normalize.css')}}"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

    <div class="login-box animated fadeInDown">

        <div class="login-body">
            <div class="login-title"><strong>Axicasa</strong></div>
            <form action="{{route('login')}}" class="form-horizontal" method="post">
                @csrf
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" value="{{old('email')}}" class="form-control {{$errors->has('password') ? 'has-error-input' : ''}}" name="email" placeholder="Correo electronico"/>
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" class="form-control {{$errors->has('password') ? 'has-error-input' : ''}}" name="password" placeholder="Contraseña"/>
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block">Acceder</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2019 Axicasa.com
            </div>
        </div>
    </div>

</div>

</body>
</html>






