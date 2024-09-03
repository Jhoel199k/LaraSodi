@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? __('Show') . " " . __('Cliente') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo:</strong>
                                    {{ $cliente->codigo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cliente:</strong>
                                    {{ $cliente->cliente }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nit Ci:</strong>
                                    {{ $cliente->nit_ci }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Razon Social:</strong>
                                    {{ $cliente->razon_social }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $cliente->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ciudad:</strong>
                                    {{ $cliente->ciudad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Zona:</strong>
                                    {{ $cliente->zona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dias:</strong>
                                    {{ $cliente->dias }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Vendedor:</strong>
                                    {{ $cliente->id_vendedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vendedor:</strong>
                                    {{ $cliente->vendedor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo Sin:</strong>
                                    {{ $cliente->correo_sin }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
