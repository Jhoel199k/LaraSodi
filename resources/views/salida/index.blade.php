@extends('layouts.app')

@section('template_title')
    Salidas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Salidas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('salidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Tipo</th>
									<th >Nro</th>
									<th >Total Costo</th>
									<th >Destino</th>
									<th >Registrador Id</th>
									<th >Linea</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salidas as $salida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $salida->estado }}</td>
										<td >{{ $salida->fechayhora }}</td>
										<td >{{ $salida->tipo }}</td>
										<td >{{ $salida->nro }}</td>
										<td >{{ $salida->total_costo }}</td>
										<td >{{ $salida->destino }}</td>
										<td >{{ $salida->registrador_id }}</td>
										<td >{{ $salida->linea }}</td>

                                            <td>
                                                <form action="{{ route('salidas.destroy', $salida->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('salidas.show', $salida->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('salidas.edit', $salida->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $salidas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
