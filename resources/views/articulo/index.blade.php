@extends('layouts.app')

@section('template_title')
    Articulos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Articulos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('articulos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Clasificador</th>
									<th >Codigo Interno</th>
									<th >Linea</th>
									<th >Descripcion</th>
									<th >Precio1</th>
									<th >Precio2</th>
									<th >Precio3</th>
									<th >Precio4</th>
									<th >Codigo Producto Sin</th>
									<th >Codigo Unidad</th>
									<th >Nombre Unidad</th>
									<th >Proveedor Id</th>
									<th >Descuento Farmacia</th>
									<th >Descuento 6 Meses</th>
									<th >Descuento 3 Meses</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articulos as $articulo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $articulo->clasificador }}</td>
										<td >{{ $articulo->codigo_interno }}</td>
										<td >{{ $articulo->linea }}</td>
										<td >{{ $articulo->descripcion }}</td>
										<td >{{ $articulo->precio1 }}</td>
										<td >{{ $articulo->precio2 }}</td>
										<td >{{ $articulo->precio3 }}</td>
										<td >{{ $articulo->precio4 }}</td>
										<td >{{ $articulo->codigo_producto_sin }}</td>
										<td >{{ $articulo->codigo_unidad }}</td>
										<td >{{ $articulo->nombre_unidad }}</td>
										<td >{{ $articulo->proveedor_id }}</td>
										<td >{{ $articulo->descuento_farmacia }}</td>
										<td >{{ $articulo->descuento_6_meses }}</td>
										<td >{{ $articulo->descuento_3_meses }}</td>

                                            <td>
                                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('articulos.show', $articulo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('articulos.edit', $articulo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $articulos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
