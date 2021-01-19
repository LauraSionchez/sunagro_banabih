@extends('layouts.default')
@section('content')

<div data-backdrop="static" data-keyboard="false"  class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@yield('tilte')</h4>
                <button class="close " type="button" data-dismiss="modal" aria-label="Close"><span  aria-hidden="true">{{ __('x') }}</span></button>
            </div>
            <div class="modal-body">
                
                @yield('content')

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary pulse" type="button" data-dismiss="modal">{{ __('Cerrar') }}</button>
                <button class="btn btn-primary" type="button">{{ __('Guardar') }}</button>
            </div>
        </div>

    </div>

</div>

@stop