@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? __('Show') . " " . __('Articulo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('articulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Clasificador:</strong>
                                    {{ $articulo->clasificador }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Interno:</strong>
                                    {{ $articulo->codigo_interno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Linea:</strong>
                                    {{ $articulo->linea }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $articulo->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio1:</strong>
                                    {{ $articulo->precio1 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio2:</strong>
                                    {{ $articulo->precio2 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio3:</strong>
                                    {{ $articulo->precio3 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio4:</strong>
                                    {{ $articulo->precio4 }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Producto Sin:</strong>
                                    {{ $articulo->codigo_producto_sin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigo Unidad:</strong>
                                    {{ $articulo->codigo_unidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Unidad:</strong>
                                    {{ $articulo->nombre_unidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Proveedor Id:</strong>
                                    {{ $articulo->proveedor_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descuento Farmacia:</strong>
                                    {{ $articulo->descuento_farmacia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descuento 6 Meses:</strong>
                                    {{ $articulo->descuento_6_meses }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descuento 3 Meses:</strong>
                                    {{ $articulo->descuento_3_meses }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
