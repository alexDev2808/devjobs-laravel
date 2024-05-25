<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <div
            class="border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 animate__animated animate__delay-2s animate__backOutUp">
            {{ session('mensaje') }}
        </div>
        <p class="text-gray-600">Puedes seguir revisando mas vacantes!</p>
    @else
        <form class="w-96 mt-5" wire:submit.prevent="postularme">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de Vida(PDF)')" />
                <x-text-input id="cv" wire:model="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror

            <x-primary-button class="my-5" wire:loading.class="opacity-25">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif


</div>
