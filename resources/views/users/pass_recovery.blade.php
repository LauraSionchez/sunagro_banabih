@extends('layouts.welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-header">
                    <h5 class="card-title text-center">{{__('Password Recovery')}}</h5>
                </div>
                <div class="card-body">
                    @if(count($errors) > 0)
                    <div class="errors">
                        <div class="alert alert-danger" role="alert">
                            <p>{{__('Errors')}}</p>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    {{ Form::open(array("id"=>"frm1", "class"=>"validate", 'url' => 'PassRecovery', "autocomplete"=>"off")) }}

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">{{__('Email')}}</span>
                            </div>
                            {{ Form::email('email', null, [ "data-msg-email"=>__("Email Not Allowed"), "data-msg-required"=>__("Field is Required"), "id"=>"email", "required"=>"required", 'class'=>'form-control required ']) }}

                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class=" fa fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">


                            <div id="catpcha" class="input-group-append">
                                {!! Captcha::img('flat') !!}
                                {{-- captcha_img('flat') --}}
                            </div>
                            <div id="refresh" class="input-group-append pointer">
                                <span class="input-group-text">
                                    <i class=" fa fa-sync"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">{{__('Captcha')}}</span>
                            </div>
                            {{ Form::text('captcha', null, ["maxlength"=>"9",   "data-msg-required"=>__("Field is Required"), "id"=>"captcha", "required"=>"required", 'class'=>'form-control required ']) }}

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
                    <div class="form-group form-actions">
                        {{Form::button('Entrar',array("id"=>"btn1", "type"=>"submit", 'class'=>'btn  btn-primary'))}}
                    </div>
                    {{ Form::close() }}

                </div>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#see').on('mousedown mouseup mouseleave', function (e) {
            if (e.type == "mousedown") {
                $("#eye").removeClass("fa-eye").addClass("fa-eye-slash");
                $("#password").attr("type", "text");
            } else {
                $("#eye").removeClass("fa-eye-slash").addClass("fa-eye");
                $("#password").attr("type", "password");
            }
        });
    });
    $("#frm1").on("submit", function (){
        $("#btn1").prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> {{__("Loading...")}}');
    });
    
    function cript() {
        if ($('#password').val() != '') {
            $('#password').val(md5($('#password').val()))
        }

    }
</script>    
<script type="text/javascript">
    $(document).ready(function () {
        $('#refresh').click(function () {
            $.ajax({
                type: 'GET',
                url: 'refreshcaptcha',
                success: function (data) {
                    $("#catpcha").html(data.captcha);
                }
            });
        });

    });

</script>

@stop
