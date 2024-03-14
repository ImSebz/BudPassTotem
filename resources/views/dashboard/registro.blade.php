@extends('layouts.app')

@section('title', 'Registro de facturas y códigos')
@section('content')
    <div class="cont-main-registro-facturas-codigos">
        <div class="main-facturas-cont">
            <div class="facturas-codigos-cont">
                <div class="form-facturas-btn">
                    <button id="show-codigo-btn" class="facturas-codigos-btn">Registrar códigos</button>
                    <button id="show-historial-registros-btn" class="facturas-codigos-btn secundario-btn">Historial registros</button>
                </div>
                <div class="registro-codigo-form">
                    <livewire:dashboard.registro-codigos />
                </div>
                <div class="main-historial-registros-form" style="display: none;">
                        <livewire:dashboard.registro.historial-registros-codigo />
                </div> 

            </div>
        </div>
        <div class="info-puntaje-cont">
            @include('puntaje')
            <div class="items-factura-contaner">
                <div class="items-img-factura-cont">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="items-img-factura">
                            @if ($i == 4)
                                <img src="{{ asset('assets/budweiser/budpass-logo.jpg') }}" alt="Filler Image">
                            @else
                                <img src="{{ asset('assets/budweiser/budpass-ref' . ($i < 4 ? $i + 1 : $i) . '.jpg') }}"
                                    alt="Dynamic Image">
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
