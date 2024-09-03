<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="origen" class="form-label">{{ __('Origen') }}</label>
            <input type="text" name="origen" class="form-control @error('origen') is-invalid @enderror" value="{{ old('origen', $ruta?->origen) }}" id="origen" placeholder="Origen">
            {!! $errors->first('origen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="destino" class="form-label">{{ __('Destino') }}</label>
            <input type="text" name="destino" class="form-control @error('destino') is-invalid @enderror" value="{{ old('destino', $ruta?->destino) }}" id="destino" placeholder="Destino">
            {!! $errors->first('destino', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_salida" class="form-label">{{ __('Fecha Salida') }}</label>
            <input type="text" name="fecha_salida" class="form-control @error('fecha_salida') is-invalid @enderror" value="{{ old('fecha_salida', $ruta?->fecha_salida) }}" id="fecha_salida" placeholder="Fecha Salida">
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_llegada" class="form-label">{{ __('Fecha Llegada') }}</label>
            <input type="text" name="fecha_llegada" class="form-control @error('fecha_llegada') is-invalid @enderror" value="{{ old('fecha_llegada', $ruta?->fecha_llegada) }}" id="fecha_llegada" placeholder="Fecha Llegada">
            {!! $errors->first('fecha_llegada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rastreo_gps" class="form-label">{{ __('Rastreo Gps') }}</label>
            <input type="text" name="rastreo_gps" class="form-control @error('rastreo_gps') is-invalid @enderror" value="{{ old('rastreo_gps', $ruta?->rastreo_gps) }}" id="rastreo_gps" placeholder="Rastreo Gps">
            {!! $errors->first('rastreo_gps', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>