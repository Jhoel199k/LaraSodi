<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Codigo') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $cliente?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cliente" class="form-label">{{ __('Cliente') }}</label>
            <input type="text" name="cliente" class="form-control @error('cliente') is-invalid @enderror" value="{{ old('cliente', $cliente?->cliente) }}" id="cliente" placeholder="Cliente">
            {!! $errors->first('cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nit_ci" class="form-label">{{ __('Nit Ci') }}</label>
            <input type="text" name="nit_ci" class="form-control @error('nit_ci') is-invalid @enderror" value="{{ old('nit_ci', $cliente?->nit_ci) }}" id="nit_ci" placeholder="Nit Ci">
            {!! $errors->first('nit_ci', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="razon_social" class="form-label">{{ __('Razon Social') }}</label>
            <input type="text" name="razon_social" class="form-control @error('razon_social') is-invalid @enderror" value="{{ old('razon_social', $cliente?->razon_social) }}" id="razon_social" placeholder="Razon Social">
            {!! $errors->first('razon_social', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $cliente?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad" class="form-label">{{ __('Ciudad') }}</label>
            <input type="text" name="ciudad" class="form-control @error('ciudad') is-invalid @enderror" value="{{ old('ciudad', $cliente?->ciudad) }}" id="ciudad" placeholder="Ciudad">
            {!! $errors->first('ciudad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="zona" class="form-label">{{ __('Zona') }}</label>
            <input type="text" name="zona" class="form-control @error('zona') is-invalid @enderror" value="{{ old('zona', $cliente?->zona) }}" id="zona" placeholder="Zona">
            {!! $errors->first('zona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dias" class="form-label">{{ __('Dias') }}</label>
            <input type="text" name="dias" class="form-control @error('dias') is-invalid @enderror" value="{{ old('dias', $cliente?->dias) }}" id="dias" placeholder="Dias">
            {!! $errors->first('dias', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_vendedor" class="form-label">{{ __('Id Vendedor') }}</label>
            <input type="text" name="id_vendedor" class="form-control @error('id_vendedor') is-invalid @enderror" value="{{ old('id_vendedor', $cliente?->id_vendedor) }}" id="id_vendedor" placeholder="Id Vendedor">
            {!! $errors->first('id_vendedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vendedor" class="form-label">{{ __('Vendedor') }}</label>
            <input type="text" name="vendedor" class="form-control @error('vendedor') is-invalid @enderror" value="{{ old('vendedor', $cliente?->vendedor) }}" id="vendedor" placeholder="Vendedor">
            {!! $errors->first('vendedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo_sin" class="form-label">{{ __('Correo Sin') }}</label>
            <input type="text" name="correo_sin" class="form-control @error('correo_sin') is-invalid @enderror" value="{{ old('correo_sin', $cliente?->correo_sin) }}" id="correo_sin" placeholder="Correo Sin">
            {!! $errors->first('correo_sin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>