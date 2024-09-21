<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $viaje?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $viaje?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $viaje?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_salida" class="form-label">{{ __('Fechasalida') }}</label>
            <input type="date" name="fechaSalida" class="form-control @error('fechaSalida') is-invalid @enderror" value="{{ old('fechaSalida', $viaje?->fechaSalida) }}" id="fecha_salida" placeholder="Fechasalida">
            {!! $errors->first('fechaSalida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_llegada" class="form-label">{{ __('Fechallegada') }}</label>
            <input type="date" name="fechaLlegada" class="form-control @error('fechaLlegada') is-invalid @enderror" value="{{ old('fechaLlegada', $viaje?->fechaLlegada) }}" id="fecha_llegada" placeholder="Fechallegada">
            {!! $errors->first('fechaLlegada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="img" class="form-label">{{ __('Img') }}</label>
            <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" value="{{ old('img', $viaje?->img) }}" id="img" placeholder="Img">
            {!! $errors->first('img', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pdf" class="form-label">{{ __('Pdf') }}</label>
            <input type="file" name="pdf" class="form-control @error('pdf') is-invalid @enderror" value="{{ old('pdf', $viaje?->pdf) }}" id="pdf" placeholder="Pdf">
            {!! $errors->first('pdf', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>