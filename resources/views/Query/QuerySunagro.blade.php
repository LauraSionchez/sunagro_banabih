@extends('layouts.default')
{{-- @include('details.sunagro-details')  --}}
@section('content')

		{{-- Search --}}

	<div class="col-12">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					{!! Form::open(array( 'onSubmit'=>'check()', 'class'=>'validate', 'url' => 'login', 'autocomplete'=>'off')) !!}
					<div class="form-group row">
						<div class="col-6">
							{{ Form::label('impuesto', 'Tipo de Impuesto')  }}
							<select  name="type_doc" id="type_doc" class="form-control">
                            	<option value="">{{ __('Select...') }}</option>           
                                {{-- @foreach()  --}}    
                                <option {{-- value="{!! !!}" --}}>{{-- {!!  !!} --}}</option>
                                {{-- @endforeach    --}} 
                        	</select>
						</div>
						<div class="col-6">
							{{  Form::label('codigo', 'Codigo de la Empresa')  }}
                         
                            {{   Form::text('codigo',null,['placeholder'=>'Codigo de Empresa','maxlength'=>'8','class'=>'form-control','id'=>'email']) }}
						</div>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				    	<div class="col-12">
				    		{!! Form::label('Feha', 'Rango de Fecha')  !!}
					    	
					    	{!! Form::open(['class' => 'd-flex']) !!}
					    		{{   Form::date('inicio', \Carbon\Carbon::now(), ['class'=>'form-control' ]) }}

						        	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

						        {{  Form::date('fin', \Carbon\Carbon::now(), ['class'=>'form-control' ]) }}
					    	
					    	{!! Form::close() !!}
				    	</div>
					</div>
					
					<div class="d-grid gap-2 d-md-flex  justify-content-md-end">
						 {{ Form::button('Buscar', ['type'=>'submit', 'class'=>'btn btn-outline-primary me-md-2'] ) }}
					</div>
					{!! Form::close() !!}
		    	</div>
    		</div>
		</div>
	</div><br><br>
	
		{{-- table --}} 

	<div class="col-sm-12">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header"><i class=""></i>{{ __('Consulta de Pago') }} </div>
					<div class="card-body">
						<table class="table table-responsive-sm table-bordered table-striped table-sm">
							<thead>
								<tr class="text-center">
									<th>{{ __('Codigo de Empresa') }}</th>
									<th>{{ __('Rif') }}</th>
									<th>{{ __('Nombre') }}</th>
									<th>{{ __('Referencia') }}</th>
									<th>{{ __('Monto Total') }}</th>
									<th>{{ __('Acciones') }}</th>
								</tr>
							</thead>
							<tbody>
								{{-- @foreach() --}}
								<tr class="text-center"> 
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><button id="button" class="btn btn-outline-primary" v-on:click.prevent="{{route('Sunagro.show')}}" data-toggle="modal" data-target="#myModal">{{ __('Detalle') }}</button></td>
								</tr>
							 	{{-- @endforeach --}}
							</tbody>
						</table>
						@include('details.sunagro-details')
						<nav>
							<ul class="pagination d-flex justify-content-end">
								<li class="page-item"><a class="page-link" href="#">Prev</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		
	</div>


@endsection