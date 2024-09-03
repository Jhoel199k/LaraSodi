<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="idsistema" class="form-label">{{ __('Idsistema') }}</label>
            <input type="text" name="idsistema" class="form-control @error('idsistema') is-invalid @enderror" value="{{ old('idsistema', $venta?->idsistema) }}" id="idsistema" placeholder="Idsistema">
            {!! $errors->first('idsistema', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $venta?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechahora" class="form-label">{{ __('Fechahora') }}</label>
            <input type="text" name="fechahora" class="form-control @error('fechahora') is-invalid @enderror" value="{{ old('fechahora', $venta?->fechahora) }}" id="fechahora" placeholder="Fechahora">
            {!! $errors->first('fechahora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $venta?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_r_o" class="form-label">{{ __('Nro') }}</label>
            <input type="text" name="nRO" class="form-control @error('nRO') is-invalid @enderror" value="{{ old('nRO', $venta?->nRO) }}" id="n_r_o" placeholder="Nro">
            {!! $errors->first('nRO', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="totalventas" class="form-label">{{ __('Totalventas') }}</label>
            <input type="text" name="totalventas" class="form-control @error('totalventas') is-invalid @enderror" value="{{ old('totalventas', $venta?->totalventas) }}" id="totalventas" placeholder="Totalventas">
            {!! $errors->first('totalventas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente" class="form-label">{{ __('Cliente') }}</label>
            <input type="text" name="cliente" class="form-control @error('cliente') is-invalid @enderror" value="{{ old('cliente', $venta?->cliente) }}" id="cliente" placeholder="Cliente">
            {!! $errors->first('cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autorizacion" class="form-label">{{ __('Autorizacion') }}</label>
            <input type="text" name="autorizacion" class="form-control @error('autorizacion') is-invalid @enderror" value="{{ old('autorizacion', $venta?->autorizacion) }}" id="autorizacion" placeholder="Autorizacion">
            {!! $errors->first('autorizacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f" class="form-label">{{ __('F') }}</label>
            <input type="text" name="f" class="form-control @error('f') is-invalid @enderror" value="{{ old('f', $venta?->f) }}" id="f" placeholder="F">
            {!! $errors->first('f', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_control" class="form-label">{{ __('Codigo Control') }}</label>
            <input type="text" name="codigo_control" class="form-control @error('codigo_control') is-invalid @enderror" value="{{ old('codigo_control', $venta?->codigo_control) }}" id="codigo_control" placeholder="Codigo Control">
            {!! $errors->first('codigo_control', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nit_cliente" class="form-label">{{ __('Nit Cliente') }}</label>
            <input type="text" name="nit_cliente" class="form-control @error('nit_cliente') is-invalid @enderror" value="{{ old('nit_cliente', $venta?->nit_cliente) }}" id="nit_cliente" placeholder="Nit Cliente">
            {!! $errors->first('nit_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="e" class="form-label">{{ __('E') }}</label>
            <input type="text" name="e" class="form-control @error('e') is-invalid @enderror" value="{{ old('e', $venta?->e) }}" id="e" placeholder="E">
            {!! $errors->first('e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registrador" class="form-label">{{ __('Registrador') }}</label>
            <input type="text" name="registrador" class="form-control @error('registrador') is-invalid @enderror" value="{{ old('registrador', $venta?->registrador) }}" id="registrador" placeholder="Registrador">
            {!! $errors->first('registrador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idpedido" class="form-label">{{ __('Idpedido') }}</label>
            <input type="text" name="idpedido" class="form-control @error('idpedido') is-invalid @enderror" value="{{ old('idpedido', $venta?->idpedido) }}" id="idpedido" placeholder="Idpedido">
            {!! $errors->first('idpedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="linea" class="form-label">{{ __('Linea') }}</label>
            <input type="text" name="linea" class="form-control @error('linea') is-invalid @enderror" value="{{ old('linea', $venta?->linea) }}" id="linea" placeholder="Linea">
            {!! $errors->first('linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
            <input type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $venta?->cliente_id) }}" id="cliente_id" placeholder="Cliente Id">
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registrador_id" class="form-label">{{ __('Registrador Id') }}</label>
            <input type="text" name="registrador_id" class="form-control @error('registrador_id') is-invalid @enderror" value="{{ old('registrador_id', $venta?->registrador_id) }}" id="registrador_id" placeholder="Registrador Id">
            {!! $errors->first('registrador_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pedido_id" class="form-label">{{ __('Pedido Id') }}</label>
            <input type="text" name="pedido_id" class="form-control @error('pedido_id') is-invalid @enderror" value="{{ old('pedido_id', $venta?->pedido_id) }}" id="pedido_id" placeholder="Pedido Id">
            {!! $errors->first('pedido_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>