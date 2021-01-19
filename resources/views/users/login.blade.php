@extends('layouts.welcome')
@section('content')

<style>
    #bg {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            background: url({!! asset('img/bancamiga.jpg') !!}) no-repeat;
            background-size: cover;
            -webkit-transition: 1s opacity;
            transition: 1s opacity;
        }
</style>

 {{--  background --}}
<div id="bg"></div>

      {{--  login --}}
<div class="container center">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card card-signin my-5">
                 <div class="text-center">

                <img src="{!! asset('img/banavih.png') !!}" alt="{!! config('app.name') !!}"
                     aria-roledescription="logo" style="width: 30%">
                <br>
                <br>
                <img src="{!! asset('img/sunagro.png') !!}" alt="{!! config('app.name') !!}"
                     aria-roledescription="logo" style="width: 50%">
            </div>
                <div class="card-header">
                    <h5 class="card-title text-center">{{__('Sign In')}}</h5>
                </div>
                <div class="card-body">
                    {{ Form::open(array("id"=>"frm1", "onSubmit"=>"check()", "class"=>"validate", 'url' => 'login', "autocomplete"=>"off")) }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">{{__('Username')}}</span>
                            </div>
                            {{ Form::text('username', null, [ "data-msg"=>__("Campo Requerido"), "id"=>"username", "required"=>"required", 'class'=>'form-control required title-toast']) }}
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">{{__('Password')}}</span></div>
                            {{ Form::password('password',  ["data-msg"=>__("Campo Requerido"), "required"=>"required",'id'=>'password', 'class'=>'form-control']) }}
                            <div data-title-toast="{{__("Hold Down")}}" id="see" class="pointer input-group-append title-toast">
                                <span class="input-group-text">
                                    <i id="eye" class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('mensaje_success'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('mensaje_success') !!}</em></div>
                    @endif
                    @if(Session::has('mensaje_error'))
                    <div class="errors">
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('mensaje_error') }}
                        </div>
                    </div>
                    @endif
                    <div class="form-group form-actions ">
                        {{Form::button('Entrar',array("id"=>"btn1", "type"=>"submit", 'class'=>'btn  btn-primary '))}}
                    </div>
                    {{ Form::close() }}
                </div>
               {{--  @if($allow_password_recovery==1)
                <div class="card-footer text-muted">
                    <a href="{{ asset('PassRecovery') }}" class="card-link">{{__("Password Recovery")}}</a>
                </div>
                @endif --}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#see').on('mousedown mouseup mouseleave touchend', function (e) {
            if (e.type == "mousedown" || e.type == "touchend") {
                $("#eye").removeClass("fa-eye").addClass("fa-eye-slash");
                $("#password").attr("type", "text");
            } else {
                $("#eye").removeClass("fa-eye-slash").addClass("fa-eye");
                $("#password").attr("type", "password");
            }
        });
        //
    });
    function check() {
        if ($("#frm1").valid()) {
            if ($('#password').val() != '') {
                $('#password').val(md5($('#password').val()))
                $("#btn1").prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> {{__("Loading...")}}');
            }
        }
    }
</script>    
@stop
