@extends('layouts.app')

@section('template_title')
    Pedidos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedidos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Estado</th>
									<th >Fechayhora</th>
									<th >Nro</th>
									<th >Total Ventas</th>
									<th >Pagado</th>
									<th >Saldo</th>
									<th >Cliente Id</th>
									<th >Operacion</th>
									<th >F</th>
									<th >E</th>
									<th >Registrador Id</th>
									<th >Linea</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $pedido->estado }}</td>
										<td >{{ $pedido->fechayhora }}</td>
										<td >{{ $pedido->nro }}</td>
										<td >{{ $pedido->total_ventas }}</td>
										<td >{{ $pedido->pagado }}</td>
										<td >{{ $pedido->saldo }}</td>
										<td >{{ $pedido->cliente_id }}</td>
										<td >{{ $pedido->operacion }}</td>
										<td >{{ $pedido->f }}</td>
										<td >{{ $pedido->e }}</td>
										<td >{{ $pedido->registrador_id }}</td>
										<td >{{ $pedido->linea }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedidos.show', $pedido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedidos.edit', $pedido->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pedidos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
