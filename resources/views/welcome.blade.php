@extends('layouts.app')
@section('content')
    <div class="forms-container">

        <div class="form-btn">
            <button id="show-login-btn" class="regs-btn ">Login</button>
            <button id="show-register-btn" class="regs-btn inactive">Registro</button>
        </div>

        <div class="regs-container">

            <div id="login-component">
                <livewire:auth.login />
            </div>

            <div id="register-component" style="display: none;">
                <livewire:auth.register />
            </div>
        </div>
    </div>

@endsection
