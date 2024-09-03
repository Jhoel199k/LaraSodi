<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $entrada?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechayhora" class="form-label">{{ __('Fechayhora') }}</label>
            <input type="text" name="fechayhora" class="form-control @error('fechayhora') is-invalid @enderror" value="{{ old('fechayhora', $entrada?->fechayhora) }}" id="fechayhora" placeholder="Fechayhora">
            {!! $errors->first('fechayhora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $entrada?->tipo) }}" id="tipo" placeholder="Tipo">
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_costo" class="form-label">{{ __('Total Costo') }}</label>
            <input type="text" name="total_costo" class="form-control @error('total_costo') is-invalid @enderror" value="{{ old('total_costo', $entrada?->total_costo) }}" id="total_costo" placeholder="Total Costo">
            {!! $errors->first('total_costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="glosa" class="form-label">{{ __('Glosa') }}</label>
            <input type="text" name="glosa" class="form-control @error('glosa') is-invalid @enderror" value="{{ old('glosa', $entrada?->glosa) }}" id="glosa" placeholder="Glosa">
            {!! $errors->first('glosa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="origen" class="form-label">{{ __('Origen') }}</label>
            <input type="text" name="origen" class="form-control @error('origen') is-invalid @enderror" value="{{ old('origen', $entrada?->origen) }}" id="origen" placeholder="Origen">
            {!! $errors->first('origen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="registrador_id" class="form-label">{{ __('Registrador Id') }}</label>
            <input type="text" name="registrador_id" class="form-control @error('registrador_id') is-invalid @enderror" value="{{ old('registrador_id', $entrada?->registrador_id) }}" id="registrador_id" placeholder="Registrador Id">
            {!! $errors->first('registrador_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="linea" class="form-label">{{ __('Linea') }}</label>
            <input type="text" name="linea" class="form-control @error('linea') is-invalid @enderror" value="{{ old('linea', $entrada?->linea) }}" id="linea" placeholder="Linea">
            {!! $errors->first('linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>