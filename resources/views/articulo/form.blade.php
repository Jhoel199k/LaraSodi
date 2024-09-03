<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="clasificador" class="form-label">{{ __('Clasificador') }}</label>
            <input type="text" name="clasificador" class="form-control @error('clasificador') is-invalid @enderror" value="{{ old('clasificador', $articulo?->clasificador) }}" id="clasificador" placeholder="Clasificador">
            {!! $errors->first('clasificador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_interno" class="form-label">{{ __('Codigo Interno') }}</label>
            <input type="text" name="codigo_interno" class="form-control @error('codigo_interno') is-invalid @enderror" value="{{ old('codigo_interno', $articulo?->codigo_interno) }}" id="codigo_interno" placeholder="Codigo Interno">
            {!! $errors->first('codigo_interno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="linea" class="form-label">{{ __('Linea') }}</label>
            <input type="text" name="linea" class="form-control @error('linea') is-invalid @enderror" value="{{ old('linea', $articulo?->linea) }}" id="linea" placeholder="Linea">
            {!! $errors->first('linea', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $articulo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio1" class="form-label">{{ __('Precio1') }}</label>
            <input type="text" name="precio1" class="form-control @error('precio1') is-invalid @enderror" value="{{ old('precio1', $articulo?->precio1) }}" id="precio1" placeholder="Precio1">
            {!! $errors->first('precio1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio2" class="form-label">{{ __('Precio2') }}</label>
            <input type="text" name="precio2" class="form-control @error('precio2') is-invalid @enderror" value="{{ old('precio2', $articulo?->precio2) }}" id="precio2" placeholder="Precio2">
            {!! $errors->first('precio2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio3" class="form-label">{{ __('Precio3') }}</label>
            <input type="text" name="precio3" class="form-control @error('precio3') is-invalid @enderror" value="{{ old('precio3', $articulo?->precio3) }}" id="precio3" placeholder="Precio3">
            {!! $errors->first('precio3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio4" class="form-label">{{ __('Precio4') }}</label>
            <input type="text" name="precio4" class="form-control @error('precio4') is-invalid @enderror" value="{{ old('precio4', $articulo?->precio4) }}" id="precio4" placeholder="Precio4">
            {!! $errors->first('precio4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_producto_sin" class="form-label">{{ __('Codigo Producto Sin') }}</label>
            <input type="text" name="codigo_producto_sin" class="form-control @error('codigo_producto_sin') is-invalid @enderror" value="{{ old('codigo_producto_sin', $articulo?->codigo_producto_sin) }}" id="codigo_producto_sin" placeholder="Codigo Producto Sin">
            {!! $errors->first('codigo_producto_sin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="codigo_unidad" class="form-label">{{ __('Codigo Unidad') }}</label>
            <input type="text" name="codigo_unidad" class="form-control @error('codigo_unidad') is-invalid @enderror" value="{{ old('codigo_unidad', $articulo?->codigo_unidad) }}" id="codigo_unidad" placeholder="Codigo Unidad">
            {!! $errors->first('codigo_unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_unidad" class="form-label">{{ __('Nombre Unidad') }}</label>
            <input type="text" name="nombre_unidad" class="form-control @error('nombre_unidad') is-invalid @enderror" value="{{ old('nombre_unidad', $articulo?->nombre_unidad) }}" id="nombre_unidad" placeholder="Nombre Unidad">
            {!! $errors->first('nombre_unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedor_id" class="form-label">{{ __('Proveedor Id') }}</label>
            <input type="text" name="proveedor_id" class="form-control @error('proveedor_id') is-invalid @enderror" value="{{ old('proveedor_id', $articulo?->proveedor_id) }}" id="proveedor_id" placeholder="Proveedor Id">
            {!! $errors->first('proveedor_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_farmacia" class="form-label">{{ __('Descuento Farmacia') }}</label>
            <input type="text" name="descuento_farmacia" class="form-control @error('descuento_farmacia') is-invalid @enderror" value="{{ old('descuento_farmacia', $articulo?->descuento_farmacia) }}" id="descuento_farmacia" placeholder="Descuento Farmacia">
            {!! $errors->first('descuento_farmacia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_6_meses" class="form-label">{{ __('Descuento 6 Meses') }}</label>
            <input type="text" name="descuento_6_meses" class="form-control @error('descuento_6_meses') is-invalid @enderror" value="{{ old('descuento_6_meses', $articulo?->descuento_6_meses) }}" id="descuento_6_meses" placeholder="Descuento 6 Meses">
            {!! $errors->first('descuento_6_meses', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuento_3_meses" class="form-label">{{ __('Descuento 3 Meses') }}</label>
            <input type="text" name="descuento_3_meses" class="form-control @error('descuento_3_meses') is-invalid @enderror" value="{{ old('descuento_3_meses', $articulo?->descuento_3_meses) }}" id="descuento_3_meses" placeholder="Descuento 3 Meses">
            {!! $errors->first('descuento_3_meses', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>