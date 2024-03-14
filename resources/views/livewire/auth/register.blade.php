<div class="registro-div-cont">
    <div class="title-registro-cont">
        <h1 class="title-registro">BIENVENIDO A BUDPASS</h1>
        <p class="sub-title-registro">La plataforma que premia a los amantes de la música y de la cerveza.</p>
        <p class="sub-title-registro">Tu entrada a las mejores experiencias de la música, donde participar es muy fácil.
        </p>
        <p class="sub-title-registro">
            1. Crea tu cuenta.
        </p>
        <p class="sub-title-registro">2. Registra tus compras de Budweiser.</p>
        <p class="sub-title-registro">3. Acumula puntos.</p>
        <p class="sub-title-registro"> 4. Redime tus puntos por entradas, producto, prendas y accesorios exclusivos de la
            marca.</p>
    </div>
    <div class="input-cont">
        <label for="nombre">Nombre: </label>
        <input id="nombre" type="text" wire:model.change="nombre">
        @error('nombre')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-cont">
        <label for="documento">Documento: </label>
        <input id="documento" type="text" wire:model.change="documento">
        @error('documento')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-cont">
        <label for="fecha_nacimiento">Fecha de nacimiento: </label>
        <input id="fecha_nacimiento" type="date" wire:model.change="fecha_nacimiento">
        @error('fecha_nacimiento')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="flex-deparamento-ciudad">
        <div class="input-cont">
            <label for="departamento">Departamento: </label>
            <select id="departamento" wire:model.live="departamento" class="select-departamento">
                <option value="">Seleccionar</option>
                @foreach ($departamentos as $depto)
                    <option value="{{ $depto->id }}">{{ $depto->descripcion }}</option>
                @endforeach
            </select>
            @error('departamento')
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-cont">
            <label for="ciudad">Ciudad: </label>
            <select id="ciudad" wire:model.change="ciudad" class="select-ciudad">
                <option value=""></option>
                @if ($departamento)
                    @foreach ($departamentos->where('id', $departamento)->first()->ciudades as $ciudad)
                        <option value="{{ $ciudad->id }}">{{ $ciudad->descripcion }}</option>
                    @endforeach
                @endif
            </select>
            @error('ciudad')
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="input-cont">
        <label for="telefono">Celular: </label>
        <input id="telefono" type="text" wire:model.change="telefono">
        @error('telefono')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="input-cont">
        <label for="email">Correo: </label>
        <input id="email" type="email" wire:model.change="email">
        @error('email')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-cont">
        <label for="password">Contraseña: </label>
        <div class="input-contrasena">
            <input id="password" type="password" wire:model.change="password" style="padding-right: 40px;">
            <i onclick="togglePasswordVisibility('password')" class="fas fa-eye-slash toggle-password"
                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
        </div>
        @error('password')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-cont">
        <label for="confirm">Confirmar contraseña: </label>
        <div class="input-contrasena">
            <input id="confirm" type="password" wire:model.change="confirm" style="padding-right: 40px;">
            <i onclick="togglePasswordVisibility('confirm')" class="fas fa-eye-slash toggle-password"></i>
        </div>
    </div>

    <br>

    <div class="checkbox-cont">
        <input id="terminos" type="checkbox" class="checkbox-item" wire:model.change="terminos">
        <a href="{{ asset('assets/legal/tyc-budpass.pdf')}}" target="_blank" rel="noopener noreferrer"><h2 class="checkbox-label">He
                leído, entendido y acepto los Términos y condiciones del sitio web</h2></a>
        @error('terminos')
            <div class="text-invalid-check">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="checkbox-cont">
        <input id="politicas" type="checkbox" class="checkbox-item" wire:model.change="politicas">
        <a href="https://www.bavaria.co/sites/g/files/seuoyk1666/files/2024-02/Aviso%20de%20Privacidad%20%28V.5%29.pdf"
            target="_blank" rel="noopener noreferrer"><h2 class="checkbox-label">Declaro que soy mayor
                de edad y autorizo que mis datos personales sean recolectados y tratados en las condiciones que se
                explican en el siguiente Aviso de Privacidad y de Cookies.</h2></a>
        @error('politicas')
            <div class="text-invalid-check">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="btn-registrar">
        <button wire:click="store" id="registrar_usuario" wire:target="store"
            wire:loading.attr="disabled">Registrar</button>
    </div>
</div>
