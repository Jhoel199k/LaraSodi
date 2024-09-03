<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $pedido?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechayhora" class="form-label">{{ __('Fechayhora') }}</label>
            <input type="text" name="fechayhora" class="form-control @error('fechayhora') is-invalid @enderror" value="{{ old('fechayhora', $pedido?->fechayhora) }}" id="fechayhora" placeholder="Fechayhora">
            {!! $errors->first('fechayhora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nro" class="form-label">{{ __('Nro') }}</label>
            <input type="text" name="nro" class="form-control @error('nro') is-invalid @enderror" value="{{ old('nro', $pedido?->nro) }}" id="nro" placeholder="Nro">
            {!! $errors->first('nro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_ventas" class="form-label">{{ __('Total Ventas') }}</label>
            <input type="text" name="total_ventas" class="form-control @error('total_ventas') is-invalid @enderror" value="{{ old('total_ventas', $pedido?->total_ventas) }}" id="total_ventas" placeholder="Total Ventas">
            {!! $errors->first('total_ventas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pagado" class="form-label">{{ __('Pagado') }}</label>
            <input type="text" name="pagado" class="form-control @error('pagado') is-invalid @enderror" value="{{ old('pagado', $pedido?->pagado) }}" id="pagado" placeholder="Pagado">
            {!! $errors->first('pagado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo" class="form-label">{{ __('Saldo') }}</label>
            <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo', $pedido?->saldo) }}" id="saldo" placeholder="Saldo">
            {!! $errors->first('saldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
            <input type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $pedido?->cliente_id) }}" id="cliente_id" placeholder="Cliente Id">
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="operacion" class="form-label">{{ __('Operacion') }}</label>
            <input type="text" name="operacion" class="form-control @error('operacion') is-invalid @enderror" value="{{ old('operacion', $pedido?->operacion) }}" id="operacion" placeholder="Operacion">
            {!! $errors->first('operacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f" class="form-label">{{ __('F') }}</label>
            <input type="text" name="f" class="form-control @error('f') is-invalid @enderror" value="{{ old('f', $pedido?->f) }}" id="f" placeholder="F">
            {!! $errors->first('f', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="e" class="form-label">{{ __('E') }}</label>
            <input type="text" name="e" class="form-control @error('e') is-invalid @enderror" value="{{ old('e', $pedido?->e) }}" id="e" placeholder="E">
            {!! $errors->first('e', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registrador_id" class="form-label">{{ __('Registrador Id') }}</label>
            <input type="text" name="registrador_id" class="form-control @error('registrador_id') is-invalid @enderror" value="{{ old('registrador_id', $pedido?->registrador_id) }}" id="registrador_id" placeholder="Registrador Id">
            {!! $errors->first('registrador_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="linea" class="form-label">{{ __('Linea') }}</label>
            <input type="text" name="linea" class="form-control @error('linea') is-invalid @enderror" value="{{ old('linea', $pedido?->linea) }}" id="linea" placeholder="Linea">
            {!! $errors->first('linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>