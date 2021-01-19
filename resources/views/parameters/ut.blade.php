@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Valor de la Unidad Tributaria</h5>
                    {{ Form::open(array('url' => 'ut', "autocomplete"=>"off")) }}
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                    @if(count($errors) > 0)
                    <div class="errors">
                        <div class="alert alert-danger" role="alert">
                            <p>Corrige los siguientes errores:</p>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text ">Monto:</span>
                            </div>
                            {{ Form::text('valor', $valor, ["maxlength"=>"15", "id"=>"valor", "style"=>"text-align:right", 'class'=>'form-control']) }}

                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                    <use xlink:href="img/free.svg#cil-dollar"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>



                    @if(Session::has('mensaje_error'))
                    {{ Session::get('mensaje_error') }}
                    @endif
                    <div class="form-group form-actions">
                        {{Form::submit('Guardar',array('class'=>'btn btn-sm btn-primary'))}}
                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#valor").inputmask({alias: "currency", prefix: '', groupSeparator: '.', radixPoint: ',', digits: 2});
    });
</script>
@stop