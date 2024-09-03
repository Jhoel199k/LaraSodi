@extends('layouts.app')

@section('template_title')
    {{ $salida->name ?? __('Show') . " " . __('Salida') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Salida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('salidas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $salida->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechayhora:</strong>
                                    {{ $salida->fechayhora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $salida->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro:</strong>
                                    {{ $salida->nro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total Costo:</strong>
                                    {{ $salida->total_costo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Destino:</strong>
                                    {{ $salida->destino }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador Id:</strong>
                                    {{ $salida->registrador_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $salida->linea }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
