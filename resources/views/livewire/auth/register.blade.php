<div class="registro-div-container">
    <div class="input-container">
        <label for="nombre">Nombre: </label>
        <input id="nombre" type="text" wire:model.change="nombre">
        @error('nombre')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-container">
        <label for="email">Correo: </label>
        <input id="email" type="email" wire:model.change="email">
        @error('email')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-container">
        <label for="documento">Documento: </label>
        <input id="documento" type="text" wire:model.change="documento">
        @error('documento')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="input-container">
        <label for="telefono">Celular: </label>
        <input id="telefono" type="text" wire:model.change="telefono">
        @error('telefono')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-container">
        <label for="departamento">Departamento: </label>
        <select id="departamento" wire:model.live="departamento">
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
    <div class="input-container">
        <label for="ciudad">Ciudad</label>
        <select id="ciudad" wire:model.change="ciudad">
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

    <div class="input-container">
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input id="fecha_nacimiento" type="date" wire:model.change="fecha_nacimiento">
        @error('fecha_nacimiento')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-container">
        <label for="password">Contraseña: </label>
        <div class="input-contrasena">
            <input id="password" type="password" wire:model.change="password" style="padding-right: 40px;">
            <i onclick="togglePasswordVisibility('password')" class="fas fa-eye toggle-password"
                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
        </div>
        @error('password')
            <div class="text-invalid">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="input-container">
        <label for="confirm">Confirmar contraseña: </label>
        <div class="input-contrasena">
            <input id="confirm" type="password" wire:model.change="confirm" style="padding-right: 40px;">
            <i onclick="togglePasswordVisibility('confirm')" class="fas fa-eye toggle-password"
                style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
        </div>
    </div>

    <br>

    <div class="checkbox-container">
        <input id="terminos" type="checkbox" class="checkbox-item" wire:model.change="terminos">
        <label for="terminos" class="checkbox-label">T&eacute;rminos</label>
    </div>
    @error('terminos')
        <div class="text-invalid">
            {{ $message }}
        </div>
    @enderror
    <div class="checkbox-container">
        <input id="politicas" type="checkbox" class="checkbox-item" wire:model.change="politicas">
        <label for="politicas" class="checkbox-label">Pol&iacute;ticas</label>
    </div>
    @error('politicas')
        <div class="text-invalid">
            {{ $message }}
        </div>
    @enderror

    <div class="checkbox-container">
        <input id="tratamiento" type="checkbox" class="checkbox-item" wire:model.change="tratamiento">
        <label for="tratamiento" class="checkbox-label">Tratamiento</label>
    </div>
    @error('tratamiento')
        <p class="text-invalid">
            {{ $message }}
        </p>
    @enderror
    <div class="btn-registrar">
        <button wire:click="store">Registrar</button>
    </div>
</div>
