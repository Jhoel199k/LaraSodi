@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? __('Show') . " " . __('Inventario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Clasificador:</strong>
                                    {{ $inventario->clasificador }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $inventario->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Articulo:</strong>
                                    {{ $inventario->articulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nrolote:</strong>
                                    {{ $inventario->nrolote }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechavencimiento:</strong>
                                    {{ $inventario->fechavencimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Entrada:</strong>
                                    {{ $inventario->entrada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Salida:</strong>
                                    {{ $inventario->salida }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Saldo:</strong>
                                    {{ $inventario->saldo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Entradabs:</strong>
                                    {{ $inventario->entradabs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Salidabs:</strong>
                                    {{ $inventario->salidabs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Saldobs:</strong>
                                    {{ $inventario->saldobs }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Articulo:</strong>
                                    {{ $inventario->id_articulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Visible:</strong>
                                    {{ $inventario->visible }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
