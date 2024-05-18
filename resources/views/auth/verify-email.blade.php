<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Gracias por registrarte! Antes de iniciar, debes verificar tu email dando click al enlace que acabamos de enviar a tu correo electronico. Si no lo recibiste, te enviaremos uno nuevo.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Un nuevo enlace de verificacion ha sido enviado al correo electronico con el que te registraste.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar enlace de verificacion') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Cerrar sesion') }}
            </button>
        </form>
    </div>
</x-guest-layout>
