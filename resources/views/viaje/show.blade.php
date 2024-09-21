@extends('layouts.app')

@section('template_title')
    {{ $viaje->name ?? __('Show') . " " . __('Viaje') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Viaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $viaje->titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $viaje->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $viaje->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechasalida:</strong>
                                    {{ $viaje->fechaSalida }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fechallegada:</strong>
                                    {{ $viaje->fechaLlegada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Img:</strong>
                                    @if ($viaje->img)
                                        <img src="{{ asset('storage/' . $viaje->img) }}">
                                    @else
                                        <span>No hay imagenes para mostrar</span>
                                    @endif
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Pdf:</strong>
                                    @if ($viaje->pdf)
                                        <a href="{{ asset('storage/' . $viaje->pdf) }}">Ver pdf</a>
                                    @else
                                        <span>No hay pdf para mostrar</span>
                                    @endif
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
