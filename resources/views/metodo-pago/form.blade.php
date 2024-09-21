<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="metodo" class="form-label">{{ __('Metodo') }}</label>
            <input type="text" name="metodo" class="form-control @error('metodo') is-invalid @enderror" value="{{ old('metodo', $metodoPago?->metodo) }}" id="metodo" placeholder="Metodo">
            {!! $errors->first('metodo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>