@extends('layouts.default')
@section('content')

<div class="col-sm-4 col-md-4 col-lg-4 offset-lg-4">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Username</span></div>
                        <input class="form-control" id="username3" type="text" name="username3" autocomplete="username">
                        <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                <use xlink:href="img/free.svg#cil-user"></use>
                                </svg></span></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                        <input class="form-control" id="email3" type="email" name="email3" autocomplete="email">
                        <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                <use xlink:href="img/free.svg#cil-envelope-open"></use>
                                </svg></span></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                        <input class="form-control" id="password3" type="password" name="password3" autocomplete="new-password">
                        <div class="input-group-append"><span class="input-group-text">
                                <svg class="c-icon">
                                <use xlink:href="img/free.svg#cil-lock-locked"></use>
                                </svg></span></div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>




{{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
@if(Session::has('mensaje_error'))
{{ Session::get('mensaje_error') }}
@endif
{{ Form::open(array('url' => 'login', "autocomplete"=>"off")) }}
<div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">{{__('Username')}}</span>
        </div>
        {{ Form::text('username') }}

        <div class="input-group-append"><span class="input-group-text">
                <svg class="c-icon">
                <use xlink:href="img/free.svg#cil-user"></use>
                </svg>
            </span>
        </div>
    </div>
</div>
{{ Form::label('usuario', __('Nombre de usuario')) }}


{{ Form::password('password') }}
{{ Form::label('lblRememberme', 'Recordar contraseña') }}
{{ Form::checkbox('rememberme', true) }}
{{ Form::submit('Enviar') }}
{{ Form::close() }}


@stop