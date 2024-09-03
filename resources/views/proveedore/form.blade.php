<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="proveedor" class="form-label">{{ __('Proveedor') }}</label>
            <input type="text" name="proveedor" class="form-control @error('proveedor') is-invalid @enderror" value="{{ old('proveedor', $proveedore?->proveedor) }}" id="proveedor" placeholder="Proveedor">
            {!! $errors->first('proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>