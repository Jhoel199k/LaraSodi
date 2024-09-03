@extends('layouts.app')

@section('template_title')
    Ventas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ventas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Idsistema</th>
									<th >Estado</th>
									<th >Fechahora</th>
									<th >Tipo</th>
									<th >Nro</th>
									<th >Totalventas</th>
									<th >Cliente</th>
									<th >Autorizacion</th>
									<th >F</th>
									<th >Codigo Control</th>
									<th >Nit Cliente</th>
									<th >E</th>
									<th >Registrador</th>
									<th >Idpedido</th>
									<th >Linea</th>
									<th >Cliente Id</th>
									<th >Registrador Id</th>
									<th >Pedido Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $venta->idsistema }}</td>
										<td >{{ $venta->estado }}</td>
										<td >{{ $venta->fechahora }}</td>
										<td >{{ $venta->tipo }}</td>
										<td >{{ $venta->nRO }}</td>
										<td >{{ $venta->totalventas }}</td>
										<td >{{ $venta->cliente }}</td>
										<td >{{ $venta->autorizacion }}</td>
										<td >{{ $venta->f }}</td>
										<td >{{ $venta->codigo_control }}</td>
										<td >{{ $venta->nit_cliente }}</td>
										<td >{{ $venta->e }}</td>
										<td >{{ $venta->registrador }}</td>
										<td >{{ $venta->idpedido }}</td>
										<td >{{ $venta->linea }}</td>
										<td >{{ $venta->cliente_id }}</td>
										<td >{{ $venta->registrador_id }}</td>
										<td >{{ $venta->pedido_id }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas.show', $venta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas.edit', $venta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ventas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
