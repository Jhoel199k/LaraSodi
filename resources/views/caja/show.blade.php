@extends('layouts.app')

@section('template_title')
    {{ $caja->name ?? __('Show') . " " . __('Caja') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Caja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cajas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $caja->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechayhora:</strong>
                                    {{ $caja->fechayhora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $caja->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro:</strong>
                                    {{ $caja->nro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Glosa:</strong>
                                    {{ $caja->glosa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pagado:</strong>
                                    {{ $caja->pagado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id:</strong>
                                    {{ $caja->cliente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Operacion:</strong>
                                    {{ $caja->operacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador Id:</strong>
                                    {{ $caja->registrador_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $caja->linea }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
