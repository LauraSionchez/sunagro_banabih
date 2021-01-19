@extends('layouts.welcome')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-6 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-header">
                    <h5 class="card-title text-center">{{__('Password Recovery')}}</h5>
                </div>
                <div class="card-body">
                    <div class="row">


                        @if($password_security_level>0)
                        @php
                        $col = 7;
                        @endphp
                        @else
                        @php
                        $col = 12;
                        @endphp
                        @endif
                        <div class="col-sm-12 col-md-{{$col}} col-lg-{{$col}} mx-auto">

                            {{ Form::open(array("id"=>"frm1", "class"=>"validate", 'url' => 'SetPassRecovery', "autocomplete"=>"off")) }}
                            {{ Form::hidden('token', $token ) }}
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">{{__('New Password')}}</span></div>
                                    {{ Form::password('password',  [ "data-msg-required"=>__("Campo Requerido"), "required"=>"required",'id'=>'password', "maxlength"=>"15" , 'class'=>'form-control']) }}
                                    <div id="see" class="pointer input-group-append">
                                        <span class="input-group-text">
                                            <i id="eye" class="fa fa-eye"></i>
                                        </span>
                                    </div>


                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">{{__('Confirm Password')}}</span></div>
                                    {{ Form::password('password2',  ["data-rule-equalTo"=>"#password", "data-msg-equalTo"=>__("Please enter the same value again"), "maxlength"=>"15"  ,"data-msg-required"=>__("Campo Requerido"), "required"=>"required",'id'=>'password2', 'class'=>'form-control']) }}
                                    <div id="see2" class="pointer input-group-append">
                                        <span class="input-group-text">
                                            <i id="eye2" class="fa fa-eye"></i>
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
                            <div class="row">

                                <div class="form-group form-actions col text-center">
                                    {{Form::button('Entrar',array("id"=>"btn1", "type"=>"submit", 'class'=>'btn  btn-primary'))}}
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                        @if ($password_security_level>0)
                        <div class="col-sm-12 col-md-5 col-lg-5 mx-auto">

                            <div class="card">
                                <div class="card-header">{{__('Validations')}}<span id="perc" class="badge badge-pill badge-danger float-right">0%</span></div>
                                <div class="card-body">
                                    @if ($password_security_level > 0)
                                    <li id="length"    class="list-group-item list-group-item-danger">{{__('Minimum 8 Characters')}}</li>
                                    @endif
                                    @if ($password_security_level > 1)
                                    <li id="lower"    class="list-group-item list-group-item-danger">{{__('Lowercase Letter')}}</li>
                                    <li id="number"   class="list-group-item list-group-item-danger">{{__('Number')}}</li>

                                    @endif
                                    @if ($password_security_level > 2)
                                    <li id="capital"  class="list-group-item list-group-item-danger">{{__('Capital Letter')}}</li>
                                    <li id="special"  class="list-group-item list-group-item-danger">{{__('Special Character')}}</li>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(count($errors) > 0)
                        <div class="col-12"><div class="errors ">
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
                            </div>
                        </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var SpecialCharacter = '{{$SpecialCharacter}}';
    $(document).ready(function () {
       

        $("#frm1").on("submit", function (e) {
            if ($(this).valid()) {
                $("#btn1").prop("disabled", true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> {{__("Loading...")}}');
                //cript($("#password"));
                //cript($("#password2"));
            } else {
                e.preventDefault();
                return false;
            }
        });

        $("#password").on("focus blur keyup", function (e) {

            @if ($password_security_level > 0)
                    if (this.value.length > 8) {
            Percentage['M'] = 1;
                    $("#length").removeClass("list-group-item-danger").addClass("list-group-item-success");
            } else {
            Percentage['M'] = 0;
                    $("#length").removeClass("list-group-item-success").addClass("list-group-item-danger");
            }
            @endif
                    @if ($password_security_level > 1)
                    if (this.value.match(LowerCaseLetters)) {

                Percentage['L'] = 1;
                $("#lower").removeClass("list-group-item-danger").addClass("list-group-item-success");
            } else {
                Percentage['L'] = 0;
                $("#lower").removeClass("list-group-item-success").addClass("list-group-item-danger");
            }
            if (this.value.match(Numbers)) {
                Percentage['N'] = 1;
                $("#number").removeClass("list-group-item-danger").addClass("list-group-item-success");
            } else {
                Percentage['N'] = 0;
                $("#number").removeClass("list-group-item-success").addClass("list-group-item-danger");
            }

            @endif
                    @if ($password_security_level > 2)
                    if (this.value.match(UpperCaseLetters)) {
                Percentage['U'] = 1;
                $("#capital").removeClass("list-group-item-danger").addClass("list-group-item-success");
            } else {
                Percentage['U'] = 0;
                $("#capital").removeClass("list-group-item-success").addClass("list-group-item-danger");
            }

            is = false;
            for (i = 0; i < SpecialCharacter.length; i++) {
                if (this.value.indexOf(SpecialCharacter[i]) > -1) {
                    is = true;
                }
            }
            if (is == true) {
            Percentage['S'] = 1;
                    $("#special").removeClass("list-group-item-danger").addClass("list-group-item-success");
            } else {
            Percentage['S'] = 0;
                    $("#special").removeClass("list-group-item-success").addClass("list-group-item-danger");
            }
            @endif

                    Total = 0;
            Ok = 0;
            Fail = 0;
            for (i in Percentage) {
                Total++;
                Ok += Percentage[i] == 1 ? Percentage[i] : 0;
                Fail += Percentage[i] == 0 ? 1 : 0;
            }

            $("#perc").html(Math.round(((Ok * 100) / Total)) + "%")
        });



        $('#see').on('mousedown mouseup mouseleave', function (e) {
            if (e.type == "mousedown") {
                $("#eye").removeClass("fa-eye").addClass("fa-eye-slash");
                $("#password").attr("type", "text");
            } else {
                $("#eye").removeClass("fa-eye-slash").addClass("fa-eye");
                $("#password").attr("type", "password");
            }
        });
        $('#see2').on('mousedown mouseup mouseleave', function (e) {
            if (e.type == "mousedown") {
                $("#eye2").removeClass("fa-eye").addClass("fa-eye-slash");
                $("#password2").attr("type", "text");
            } else {
                $("#eye2").removeClass("fa-eye-slash").addClass("fa-eye");
                $("#password2").attr("type", "password");
            }
        });
    });
    function cript(obj) {
        if (obj.val() != '') {
            obj.val(md5(obj.val()))
        }

    }
</script>    


@stop
