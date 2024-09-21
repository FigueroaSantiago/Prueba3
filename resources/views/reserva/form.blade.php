<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha_reserva" class="form-label">{{ __('Fechareserva') }}</label>
            <input type="text" name="fechaReserva" class="form-control @error('fechaReserva') is-invalid @enderror" value="{{ old('fechaReserva', $reserva?->fechaReserva) }}" id="fecha_reserva" placeholder="Fechareserva">
            {!! $errors->first('fechaReserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_users" class="form-label">{{ __('Id Users') }}</label>
            <input type="text" name="id_users" class="form-control @error('id_users') is-invalid @enderror" value="{{ old('id_users', $reserva?->id_users) }}" id="id_users" placeholder="Id Users">
            {!! $errors->first('id_users', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_metodo_pagos" class="form-label">{{ __('Id Metodo Pagos') }}</label>
            <input type="text" name="id_metodo_pagos" class="form-control @error('id_metodo_pagos') is-invalid @enderror" value="{{ old('id_metodo_pagos', $reserva?->id_metodo_pagos) }}" id="id_metodo_pagos" placeholder="Id Metodo Pagos">
            {!! $errors->first('id_metodo_pagos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>