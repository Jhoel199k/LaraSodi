@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? __('Show') . " " . __('Venta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idsistema:</strong>
                                    {{ $venta->idsistema }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $venta->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechahora:</strong>
                                    {{ $venta->fechahora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $venta->tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro:</strong>
                                    {{ $venta->nRO }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Totalventas:</strong>
                                    {{ $venta->totalventas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente:</strong>
                                    {{ $venta->cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Autorizacion:</strong>
                                    {{ $venta->autorizacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F:</strong>
                                    {{ $venta->f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Control:</strong>
                                    {{ $venta->codigo_control }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nit Cliente:</strong>
                                    {{ $venta->nit_cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>E:</strong>
                                    {{ $venta->e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador:</strong>
                                    {{ $venta->registrador }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idpedido:</strong>
                                    {{ $venta->idpedido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $venta->linea }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id:</strong>
                                    {{ $venta->cliente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador Id:</strong>
                                    {{ $venta->registrador_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pedido Id:</strong>
                                    {{ $venta->pedido_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
