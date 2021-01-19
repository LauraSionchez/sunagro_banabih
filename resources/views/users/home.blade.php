@extends('layouts.default')
@section('content')


{{-- <button class="btn btn-secondary mb-1" type="button" data-toggle="modal" data-target="#myModal">Launch demo modal</button>


<div data-backdrop="static" data-keyboard="false"  class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
                <button class="close " type="button" data-dismiss="modal" aria-label="Close"><span  aria-hidden="true">{{ __('x') }}</span></button>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary pulse" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">Save changes</button>
            </div>
        </div>

    </div>

</div> --}}


<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                
                          {{--   Widgets --}}

              {{--       <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-gradient-primary">
                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="text-value-lg">9.823</div>
                                    <div>Members online</div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-sm-12 col-lg-6">
                        <div class="card text-white bg-gradient-info">
                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="text-value-lg">
                                        {{ __('1000') }}
                                    </div>
                                    <div class="text-uppercase">
                                        {{ __('Sunagro') }}
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart2" height="70"></canvas>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-gradient-warning">
                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="text-value-lg">
                                        9.823
                                    </div>
                                    <div>
                                        Members online
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="c-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3" style="height:70px;">
                                <canvas class="chart" id="card-chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-sm-12 col-lg-6">
                        <div class="card text-white bg-gradient-danger">
                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="text-value-lg">
                                        {{ __('1000') }}
                                    </div>
                                    <div class="text-uppercase">
                                        {{ __('Banavih') }}
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart4" height="70"></canvas>
                            </div>
                         </div>
                    </div>

                </div>

                 {{--  charts --}}

                <div class="card">
                    <div class="card-header">Line Chart
                        <div class="card-header-actions">
                            <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="c-chart-wrapper">
                            <canvas id="canvas-1"></canvas>
                        </div>
                    </div>
                </div>

            </div> 
        </div>
    </main>
</div>


@stop
