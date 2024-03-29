<div class="registro-codigo-form">
    <div class="codigo-cont">
        <div class="codigo-text">
            <label for="inputCodigos">Codigos: </label>
            <input type="text" wire:model="codigo" class="mb-3" id="inputCodigos">
            @error('codigo')
                <div class="text-invalid-codigo">
                    {{ $message }}
                </div>
            @enderror
            @error('codigo-bloqueado')
                <div class="text-invalid-codigo">
                    {{ $message }}
                </div>
            @enderror
            @error('limite-puntos')
                <div class="text-invalid-codigo">
                    {{ $message }}
                </div>
            @enderror
        </div>
 
    </div>

    <div class="codigo-btn-cont">
        <button wire:click="storePuntos" @error('codigo-bloqueado') disabled @enderror wire:loading.attr="disabled"
            wire:target="storePuntos">Canjear</button>
    </div>
</div>

