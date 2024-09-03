@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? __('Show') . " " . __('Consulta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('consultas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $consulta->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Articulo:</strong>
                                    {{ $consulta->articulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lote:</strong>
                                    {{ $consulta->lote }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fvencimiento:</strong>
                                    {{ $consulta->fvencimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precioventa:</strong>
                                    {{ $consulta->precioventa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Saldo:</strong>
                                    {{ $consulta->saldo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Articulo:</strong>
                                    {{ $consulta->id_articulo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
