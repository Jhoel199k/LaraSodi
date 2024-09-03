<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="clasificador" class="form-label">{{ __('Clasificador') }}</label>
            <input type="text" name="clasificador" class="form-control @error('clasificador') is-invalid @enderror" value="{{ old('clasificador', $inventario?->clasificador) }}" id="clasificador" placeholder="Clasificador">
            {!! $errors->first('clasificador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $inventario?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="articulo" class="form-label">{{ __('Articulo') }}</label>
            <input type="text" name="articulo" class="form-control @error('articulo') is-invalid @enderror" value="{{ old('articulo', $inventario?->articulo) }}" id="articulo" placeholder="Articulo">
            {!! $errors->first('articulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nrolote" class="form-label">{{ __('Nrolote') }}</label>
            <input type="text" name="nrolote" class="form-control @error('nrolote') is-invalid @enderror" value="{{ old('nrolote', $inventario?->nrolote) }}" id="nrolote" placeholder="Nrolote">
            {!! $errors->first('nrolote', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechavencimiento" class="form-label">{{ __('Fechavencimiento') }}</label>
            <input type="text" name="fechavencimiento" class="form-control @error('fechavencimiento') is-invalid @enderror" value="{{ old('fechavencimiento', $inventario?->fechavencimiento) }}" id="fechavencimiento" placeholder="Fechavencimiento">
            {!! $errors->first('fechavencimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="entrada" class="form-label">{{ __('Entrada') }}</label>
            <input type="text" name="entrada" class="form-control @error('entrada') is-invalid @enderror" value="{{ old('entrada', $inventario?->entrada) }}" id="entrada" placeholder="Entrada">
            {!! $errors->first('entrada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="salida" class="form-label">{{ __('Salida') }}</label>
            <input type="text" name="salida" class="form-control @error('salida') is-invalid @enderror" value="{{ old('salida', $inventario?->salida) }}" id="salida" placeholder="Salida">
            {!! $errors->first('salida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo" class="form-label">{{ __('Saldo') }}</label>
            <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo', $inventario?->saldo) }}" id="saldo" placeholder="Saldo">
            {!! $errors->first('saldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="entradabs" class="form-label">{{ __('Entradabs') }}</label>
            <input type="text" name="entradabs" class="form-control @error('entradabs') is-invalid @enderror" value="{{ old('entradabs', $inventario?->entradabs) }}" id="entradabs" placeholder="Entradabs">
            {!! $errors->first('entradabs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="salidabs" class="form-label">{{ __('Salidabs') }}</label>
            <input type="text" name="salidabs" class="form-control @error('salidabs') is-invalid @enderror" value="{{ old('salidabs', $inventario?->salidabs) }}" id="salidabs" placeholder="Salidabs">
            {!! $errors->first('salidabs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldobs" class="form-label">{{ __('Saldobs') }}</label>
            <input type="text" name="saldobs" class="form-control @error('saldobs') is-invalid @enderror" value="{{ old('saldobs', $inventario?->saldobs) }}" id="saldobs" placeholder="Saldobs">
            {!! $errors->first('saldobs', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_articulo" class="form-label">{{ __('Id Articulo') }}</label>
            <input type="text" name="id_articulo" class="form-control @error('id_articulo') is-invalid @enderror" value="{{ old('id_articulo', $inventario?->id_articulo) }}" id="id_articulo" placeholder="Id Articulo">
            {!! $errors->first('id_articulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="visible" class="form-label">{{ __('Visible') }}</label>
            <input type="text" name="visible" class="form-control @error('visible') is-invalid @enderror" value="{{ old('visible', $inventario?->visible) }}" id="visible" placeholder="Visible">
            {!! $errors->first('visible', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>