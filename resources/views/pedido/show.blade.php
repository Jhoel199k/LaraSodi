@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? __('Show') . " " . __('Pedido') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado:</strong>
                                    {{ $pedido->estado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechayhora:</strong>
                                    {{ $pedido->fechayhora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro:</strong>
                                    {{ $pedido->nro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Total Ventas:</strong>
                                    {{ $pedido->total_ventas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pagado:</strong>
                                    {{ $pedido->pagado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Saldo:</strong>
                                    {{ $pedido->saldo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente Id:</strong>
                                    {{ $pedido->cliente_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Operacion:</strong>
                                    {{ $pedido->operacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F:</strong>
                                    {{ $pedido->f }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>E:</strong>
                                    {{ $pedido->e }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Registrador Id:</strong>
                                    {{ $pedido->registrador_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $pedido->linea }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
