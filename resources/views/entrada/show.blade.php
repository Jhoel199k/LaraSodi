@extends('layouts.app')

@section('template_title')
    {{ $entrada->name ?? __('Show') . " " . __('Entrada') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entrada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entradas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $entrada->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechayhora:</strong>
                                    {{ $entrada->fechayhora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $entrada->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total Costo:</strong>
                                    {{ $entrada->total_costo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Glosa:</strong>
                                    {{ $entrada->glosa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Origen:</strong>
                                    {{ $entrada->origen }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador Id:</strong>
                                    {{ $entrada->registrador_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $entrada->linea }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
