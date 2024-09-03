<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $consulta?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="articulo" class="form-label">{{ __('Articulo') }}</label>
            <input type="text" name="articulo" class="form-control @error('articulo') is-invalid @enderror" value="{{ old('articulo', $consulta?->articulo) }}" id="articulo" placeholder="Articulo">
            {!! $errors->first('articulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lote" class="form-label">{{ __('Lote') }}</label>
            <input type="text" name="lote" class="form-control @error('lote') is-invalid @enderror" value="{{ old('lote', $consulta?->lote) }}" id="lote" placeholder="Lote">
            {!! $errors->first('lote', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fvencimiento" class="form-label">{{ __('Fvencimiento') }}</label>
            <input type="text" name="fvencimiento" class="form-control @error('fvencimiento') is-invalid @enderror" value="{{ old('fvencimiento', $consulta?->fvencimiento) }}" id="fvencimiento" placeholder="Fvencimiento">
            {!! $errors->first('fvencimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precioventa" class="form-label">{{ __('Precioventa') }}</label>
            <input type="text" name="precioventa" class="form-control @error('precioventa') is-invalid @enderror" value="{{ old('precioventa', $consulta?->precioventa) }}" id="precioventa" placeholder="Precioventa">
            {!! $errors->first('precioventa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="saldo" class="form-label">{{ __('Saldo') }}</label>
            <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo', $consulta?->saldo) }}" id="saldo" placeholder="Saldo">
            {!! $errors->first('saldo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_articulo" class="form-label">{{ __('Id Articulo') }}</label>
            <input type="text" name="id_articulo" class="form-control @error('id_articulo') is-invalid @enderror" value="{{ old('id_articulo', $consulta?->id_articulo) }}" id="id_articulo" placeholder="Id Articulo">
            {!! $errors->first('id_articulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>