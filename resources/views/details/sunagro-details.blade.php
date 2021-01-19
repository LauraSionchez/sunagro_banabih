<div data-backdrop="static" data-keyboard="false"  class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Pago Sunagro') }}</h4>
                <button class="close " type="button" data-dismiss="modal" aria-label="Close"><span  aria-hidden="true">{{ __('x') }}</span></button>
            </div>
            <div class="modal-body">
                
                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label class="text">{{ __('Tipo de Impuesto') }}</label><br>
                        <label class="convert_uppercase"></label>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label class="text">{{ __('Monto') }}</label><br>
                        <label class="convert_uppercase"></label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary pulse" type="button" data-dismiss="modal">{{ __('Cerrar') }}</button>
                <button class="btn btn-primary" type="button">{{ __('Guardar') }}</button>
            </div>
        </div>
    </div>
</div>      


