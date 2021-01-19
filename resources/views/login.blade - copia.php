@extends('layouts.default')
@section('content')


<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mx-auto">
            <div class="card h-100  justify-content-center">

                 
                 


                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        {{ Form::open(array('url' => 'login', "autocomplete"=>"off")) }}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Username</span>
                                </div>
                                {{ Form::text('username', null, ['class'=>'form-control']) }}

                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                        <use xlink:href="img/free.svg#cil-user"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{--<div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">Email</span></div>
                    <input class="form-control" id="email3" type="email" name="email3" autocomplete="email">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="img/free.svg#cil-envelope-open"></use>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>--}}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">Password</span></div>
                                {{ Form::password('password',  ['class'=>'form-control']) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                        <use xlink:href="img/free.svg#cil-lock-locked"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            {{Form::submit('Entrar',array('class'=>'btn btn-sm btn-primary'))}}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>





@stop