<form class="md:w-1/2 space-y-5">

    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')" 
            placeholder="Desarrollador Web"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select
            id="salario"
            name="salario"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        >
            <option disabled> -- Seleccione -- </option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id}}">{{ $salario->salario}}</option>
            @endforeach

        </select>
        
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
        
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select
            id="categoria"
            name="categoria"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        >

        </select>
        
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
        
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')" 
            placeholder="Netflix, Uber, Google"
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')" 
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion del Puesto')" />
        <textarea
            name="descripcion"
            placeholder="Descripcion general del puesto, experiencia"
            class="w-full h-72 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"

        >
        
        </textarea>
    </div>
            
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen" 
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <div class="flex justify-end">
        <x-primary-button>
            Crear vacante
        </x-primary-button>
    </div>

</form>
