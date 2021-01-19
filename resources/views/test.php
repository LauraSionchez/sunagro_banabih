@extends('layouts.app')
@section('content')

<main class="pb-5">
    <!--<div id="logo_copei" class="text-center mb-0">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 d-flex">
                    <img src="{{asset('img/copei.png')}}" alt="">
                    <a id="search_data_link" href="#" class="text-dark ml-auto align-self-center">¿Ya estas inscrito?</a>
                </div>
            </div>
        </div>

    </div>-->
    <a id="search_data_link" href="#" class="text-dark ml-auto align-self-center">¿Ya estas inscrito?</a>
    <div id="buscar_data" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-8">

                    <form id="buscar_inscripcion_form" class="bg-light border p-3" method="get">
                        <div class="form-row">
                            <div class="col">
                                {{Form::select('tipo_cedula', ['V' => 'V', 'E' => 'E'], null, ['class'=>'form-control tipo_cedula'])}}
                            </div>
                            <div class="col">
                                <input id="buscar_data_input" type="text" class="form-control" placeholder="Cédula" name="buscar_cedula" required="">
                            </div>
                            <div class="col">
                                <button id="btn-buscar-data" class="btn btn-outline-secondary btn-block">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="alert_data_container" class="col-12">
                {{-- <div id="alert_data" class="alert alert-info" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">Julio Cesar Valderrama Salazar</h4>
                    <p>Verifica que la información mostrada a continuación sea correcta e imprime tu planilla.</p>
                    <div id="mostrar_data">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Cédula: </strong><span class="cedula_data">V-23592010</span>
                            </div>
                            <div class="col-md-4">
                                <strong>Estado: </strong><span class="estado_data">Monagas</span>
                            </div>
                            <div class="col-md-4">
                                <strong>Municipio: </strong><span class="municipio_data">Maturín</span>
                            </div>
                            <div class="col-md-4">
                                <strong>Parroquia: </strong><span class="parroquia_data">San Simón</span>
                            </div>
                            <div class="col-md-4">
                                <strong>Centro de votación: </strong><span class="parroquia_data">E.T.R.C Félix Ángel Losada</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a href="" class="btn btn-success">Imprimir planilla</a>
                </div> --}}
            </div>
            <form id="inscripcion_form" class="mt-4" method="post">

                {!! Form::token() !!}
                <div class="col-12 mt-4">
                    <h1 class="text-center font-weight-bold">Formalizar inscripción</h1>
                    <p class="text-center mb-4 text-secondary">Venezuela necesita gente como tu</p>



                    <div class="wrap" >
                        <h5 class="text-light bg-dark corner font-weight-bold bg-light py-2 pl-3">Datos personales</h5>


                        {{-- {!! Form::open(['route' => 'inscripciones.store','data-parsley-validate'=>'','files'=>true])!!} --}}
                        {{-- {!! Form::open()!!} --}}
                        <div class="row">

                            {{-- cedula --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('cedula','Cédula')}} --}}
                                <div class="row">
                                    <div class="col-5 col-sm-3 col-md-4">
                                        {{Form::select('cod_cel', ['V' => 'V', 'E' => 'E'], null, ['id'=>'cod_cel', 'class'=>'form-control tipo_cedula'])}}
                                    </div>
                                    <div class="col-5 col-sm-8 col-md-7">
                                        {{Form::text('cedula',null, array('id'=>'cedula', 'class'=>'form-control','required'=>'','minlength'=>'7','maxlength'=>'8','placeholder'=>'Cedula'))}}
                                    </div>
                                    <div class="col-2 col-sm-1 col-md-1">
                                        <i id="cursor_search" class="fa fa-search hand"></i>
                                    </div>

                                </div>
                            </div>
                            {{-- nombres --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('nombres','Nombres')}} --}}
                                {{Form::text('nombres',null, array('id'=>'nombres', 'readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Nombres'))}}
                            </div>
                            {{-- apellidos --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('apellidos','Apellidos')}} --}}
                                {{Form::text('apellidos',null, array('id'=>'apellidos', 'readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Apellidos'))}}
                            </div>




                            {{-- fecha de nacimiento --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('fecha_nacimiento','Fecha de nacimiento')}} --}}
                                {{Form::text('fecha_nacimiento',null, array('id'=>'fecha_nacimiento', 'readonly'=>'readonly', 'class'=>'form-control datepicker','required'=>'','maxlength'=>'255','placeholder'=>'Fecha de nacimiento'))}}
                            </div>





                            {{-- sexo --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('sexo','Sexo')}} --}}
                                <div class="custom-control custom-radio custom-control-inline">

                                    {{Form::radio('sexo', 'M',false,['id'=>'masculino','class' => 'custom-control-input'])}}

                                    {{-- <input type="radio" id="masculino" name="customRadioInline1" class="custom-control-input"> --}}
                                    <label class="custom-control-label" for="masculino">Masculino</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    {{Form::radio('sexo', 'F',false,['id'=>'femenino','class' => 'custom-control-input'])}}
                                    {{-- <input type="radio" id="femenino" name="customRadioInline1" class="custom-control-input"> --}}
                                    <label class="custom-control-label" for="femenino">Femenino</label>
                                </div>
                                {{-- {{Form::text('sexo',null, array('class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Sexo'))}} --}}
                            </div>

                            {{-- telefono celular --}}
                            <div class="form-group col-md-4">
                                {{-- {{Form::label('estado','Estado')}} --}}
                                <div class="row">
                                    <div class="col-5 col-sm-3 col-md-4">
                                        {{Form::select('cod_cel', ['0412' => '0412', '0414' => '0414','0424'=>'0424','0416'=>'0416','0426'=>'0426','0'=>'Otro'], null, ['class'=>'form-control cod'])}}
                                    </div>
                                    <div class="col-7 col-sm-9 col-md-8">
                                        {{Form::text('telefono_cel',null, array('class'=>'form-control telefono','required'=>'','maxlength'=>'7','placeholder'=>'Teléfono Celular'))}}
                                    </div>
                                </div>
                            </div>

                            {{-- telefono fijo --}}
                            <div class="form-group col-md-6">
                                {{-- {{Form::label('estado','Estado')}} --}}
                                <div class="row">
                                    <div class="col-5 col-sm-3 col-md-4">
                                        {{Form::select('cod_tlf', ['0248' => '0248',
                                '0281' => '0281','0282' => '0282','0283' => '0283','0285' => '0285','0292' => '0292','0240' => '0240','0247' => '0247','0278' => '0278','0244' => '0244','0273' => '0273','0284' => '0284','0286' => '0286','0288' => '0288','0289' => '0289','0241' => '0241','0242' => '0242','0243' => '0243','0245' => '0245','0249' => '0249','0258' => '0258','0259' => '0259','0268' => '0268','0269' => '0269','0279' => '0279','0235' => '0235','0238' => '0238','0246' => '0246','0252' => '0252','0274' => '0274','0212' => '0212','0234' => '0234','0239' => '0239','0287' => '0287','0291' => '0291','0295' => '0295','0255' => '0255','0256' => '0256','0257' => '0257','0293' => '0293','0294' => '0294','0275' => '0275','0276' => '0276','0277' => '0277','0271' => '0271','0272' => '0272','0251' => '0251','0253' => '0253','0254' => '0254','0261' => '0261','0262' => '0262','0263' => '0263','0264' => '0264','0265' => '0265','0266' => '0266','0267' => '0267'], null, ['class'=>'form-control cod'])}}
                                    </div>
                                    <div class="col-7 col-sm-9 col-md-8">
                                        {{Form::text('telefono_fijo',null, array('class'=>'form-control telefono','required'=>'','maxlength'=>'7','placeholder'=>'Teléfono fijo'))}}
                                    </div>
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="form-group col-md-6">
                                {{-- {{Form::label('email','Email')}} --}}
                                {{Form::email('email',null, array('class'=>'form-control email','required'=>'','maxlength'=>'255','placeholder'=>'Email'))}}
                                {{-- <div class="row">
                                <div class="col-5 col-sm-3 col-md-4">
                                    {{Form::select('consulta_email', ['0' => 'No', '1' => 'Si'], null, ['placeholder' => 'Email','class'=>'form-control consulta_email'])}}
                            </div>
                            <div class="col-7 col-sm-9 col-md-8">
                                {{Form::email('email',null, array('class'=>'form-control email','required'=>'','maxlength'=>'255','placeholder'=>'Email','disabled'=>''))}}
                            </div>
                        </div> 
                    </div>

                    {{-- profesion --}}
                    <div class="form-group col-md-6">
                        {{-- {{Form::label('profesion','Profesión')}} --}}
                        {{Form::text('profesion',null, array('class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Profesión'))}}
                    </div>
                </div>


                <h5 class="text-light bg-dark corner font-weight-bold bg-light py-2 pl-3">Centro de Votación</h5>                        
                <div class="row">
                    <div class="form-group col-md-4">

                        {{Form::text('estado_rep',null, array('id'=>'estado_rep', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Estado'))}}
                    </div>

                    <div class="form-group col-md-4">
                        {{Form::text('municipio_rep',null, array('id'=>'municipio_rep', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Municipio'))}}
                    </div>
                    <div class="form-group col-md-4">
                        {{Form::text('parroquia_rep',null, array('id'=>'parroquia_rep', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Parroquia'))}}
                    </div>


                    <div class="form-group col-md-4">

                        {{Form::text('codigo_centro',null, array('id'=>'codigo_centro', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Codigo Centro'))}}
                    </div>

                    <div class="form-group col-md-4">
                        {{Form::text('centro',null, array('id'=>'centro', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Centro'))}}
                    </div>
                    <div class="form-group col-md-4">
                        {{Form::text('direccion_centro',null, array('id'=>'direccion_centro', 'disabled'=>'disabled', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Direccion del Centro'))}}
                    </div>



                    {{-- <div class="form-group col-12 col-md-6"> --}}
                    {{-- <div class="custom-file"> --}}
                    {{-- {{Form::file('foto')}} --}}
                    {{-- {{Form::label('foto','',['class'=>'custom-file-label'])}} --}}
                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <div class="form-group col-7 col-md-3 col-lg-4"> --}}
                    {{-- {{Form::label('email','Email')}} --}}
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-md-12"> --}}
                    {{-- {{Form::email('email',null, array('class'=>'form-control email','required'=>'','maxlength'=>'255','placeholder'=>'Email'))}} --}}
                    {{-- </div> --}}

                    {{-- </div> --}}
                    {{-- </div> --}}

                    {{-- <h4 class="col-12 font-weight-bold">Defiendo tu voto</h4> --}}

                    {{-- centro de votacion --}}
                    {{--<div class="form-group col-12">--}}
                    {{--  {{Form::select('centro_votacion', [], null, ['placeholder' => 'Seleccionar centro','class'=>'form-control centro_votacion'])}} --}}
                    {{--</div>--}}

                    {{--                 <div class="alert alert-warning alert-dismissible fade show text-center">
                            <strong>Disculpa! Las postulaciones se encuentran temporalmente deshabilitadas</strong>
                        </div> --}}
                </div>
        </div>


        <div class="wrap" >     
            <h5 class="text-light bg-dark corner font-weight-bold bg-light py-2 pl-3">Asignaci&oacute;n del Centro de Votaci&oacute;n</h5>
            <div class="row">
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::select('estado_a', [], null, ["disabled"=>"disabled", 'id'=>'estado_a', 'class'=>'form-control '])}}
                </div>
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::select('municipio_a', [], null, ["disabled"=>"disabled", 'id'=>'municipio_a', 'class'=>'form-control '])}}
                </div>
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::select('parroquia_a', [], null, ["disabled"=>"disabled", 'id'=>'parroquia_a', 'class'=>'form-control '])}}
                </div>
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::select('plantel_a', [], null, ["disabled"=>"disabled", 'id'=>'plantel_a', 'class'=>'form-control '])}}
                </div>
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::select('direccion_a', [], null, ["disabled"=>"disabled", 'id'=>'direccion_a', 'class'=>'form-control '])}}
                </div>
                <div class="col-5 col-sm-3 col-md-4">
                    {{Form::text('codigo_a','', array('readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Codigo'))}}
                </div>
            </div>
            <h5 class="text-light bg-dark corner font-weight-bold bg-light py-2 pl-3">Usuario</h5>
            <div class="row">
                {{-- responsable --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('responsable','Reponsable')}} --}}
                    {{Form::text('nombre_responsable',Auth::user()->name, array('readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Nombre'))}}
                </div>
                {{-- apellido responsable --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('apellido_responsable','Apellido Reponsable')}} --}}
                    {{Form::text('apellido_responsable',Auth::user()->surname, array('readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Apellido'))}}
                </div>
                {{-- cedula responsable --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('cedula_responsable','Cedula')}} --}}
                    {{Form::text('cedula_responsable',substr(Auth::user()->document, 1, strlen(Auth::user()->document) ), array('readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Cedula'))}}
                </div>
                {{-- telefono responsable --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('telefono_responsable','Telefono')}} --}}
                    {{Form::text('telefono_responsable',Auth::user()->phone, array('readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Telefono'))}}
                </div>
                <div class="form-group col-md-4">
                    @if (count($pp)>1)
                    {{Form::select('partido_politico_id', $pp, '', ['placeholder' => 'Partido Politico', 'class'=>'form-control estado'])}}
                    @else
                    {{Form::select('partido_politico_id', $pp, Auth::user()->partido_politico_id, ['disabled'=>'disabled', 'class'=>'form-control estado'])}}
                    @endif
                </div>





                {{-- <div class="col-12 response">
                            @include('partials._messages')
                        </div> --}}
            </div>


            <h5 class="text-light bg-dark corner font-weight-bold bg-light py-2 pl-3">Responsable</h5>
            <div class="row">
                {{-- cedula --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('cedula','Cédula')}} --}}
                    <div class="row">
                        <div class="col-5 col-sm-3 col-md-4">
                            {{Form::select('cod_cel_r', ['V' => 'V', 'E' => 'E'], null, ['id'=>'cod_cel_r', 'class'=>'form-control tipo_cedula'])}}
                        </div>
                        <div class="col-5 col-sm-8 col-md-7">
                            {{Form::text('cedula_r',null, array('id'=>'cedula_r', 'class'=>'form-control','required'=>'','minlength'=>'7','maxlength'=>'8','placeholder'=>'Cedula'))}}
                        </div>
                        <div class="col-2 col-sm-1 col-md-1">
                            <i id="cursor_search_r" class="fa fa-search hand"></i>
                        </div>

                    </div>
                </div>
                {{-- nombres --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('nombres','Nombres')}} --}}
                    {{Form::text('nombres_r',null, array('id'=>'nombres_r', 'readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Nombres'))}}
                </div>
                {{-- apellidos --}}
                <div class="form-group col-md-4">
                    {{-- {{Form::label('apellidos_r','Apellidos')}} --}}
                    {{Form::text('apellidos_r',null, array('id'=>'apellidos_r', 'readonly'=>'readonly', 'class'=>'form-control','required'=>'','maxlength'=>'255','placeholder'=>'Apellidos'))}}
                </div>






                {{-- <div class="col-12 response">
                            @include('partials._messages')
                        </div> --}}
            </div>


        </div >

    </div>

    <div class="col-12">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="accept_check">
            <label class="custom-control-label" for="accept_check">He leído y dejo constancia que reconozco, cumpliré y hare cumplir los estatutos aprobados por la Asamblea Nacional Socialcristiana el 27 de Marzo de 2019</label>
        </div>
    </div>

</div>

<div class="col-12 response mt-4">
    {{-- @include('partials._messages') --}}
</div>

<div class="col-12 text-center">
    {{Form::submit('INSCRIBIRME',array('id'=>'btn_enviar','class'=>'btn btn-success px-4 py-3 mt-3 font-weight-bold','disabled'=>''))}}              
</div>
</div>


</div>
{!! Form::close() !!}
</div>
</div>
</main>   

@endsection
