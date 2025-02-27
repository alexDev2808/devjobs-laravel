<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Desarrollador Web"
        />
        @error('titulo')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        >
            <option> -- Seleccione -- </option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id}}">{{ $salario->salario}}</option>
            @endforeach

        </select>
        
        @error('salario')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
        
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        >
            <option> -- Seleccione -- </option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id}}">{{ $categoria->categoria}}</option>
            @endforeach
        </select>
        
        @error('categoria')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
        
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('empresa')" 
            placeholder="Netflix, Uber, Google"
        />

        @error('empresa')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')" 
        />

        @error('ultimo_dia')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del Puesto')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripcion general del puesto, experiencia"
            class="w-full h-72 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"

        >
        </textarea>

        @error('descripcion')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
    </div>
            
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen" 
            accept="image/*"
        />

        <div>
            @if ($imagen)
                <div class="my-5 w-80 p-2 border-4 rounded-lg border-indigo-800">
                    <img src="{{ $imagen->temporaryUrl() }}" />
                </div>
            @endif
        </div>

        @error('imagen')
            <livewire:mostrar-alerta 
                :message="$message"
            />
        @enderror
    </div>

    <div class="flex justify-end">
        <x-primary-button>
            Crear vacante
        </x-primary-button>
    </div>

</form>
