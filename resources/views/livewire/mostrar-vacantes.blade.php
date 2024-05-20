<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

    @forelse($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between">
            <div class="leading-10">
                <a href="#" class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                <p class="text-sm text-gray-600">Ultimo dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch md:items-center gap-3 mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-slate-800 py-2 text-center px-4 rounded-lg text-white text-sm font-bold"
                >
                Candidatos
                </a>

                <a
                    href="#"
                    class="bg-indigo-500 py-2 text-center px-4 rounded-lg text-white text-sm font-bold"
                >
                Editar
                </a>

                <a
                    href="#"
                    class="bg-red-600 py-2 text-center px-4 rounded-lg text-white text-sm font-bold"
                >
                Eliminar
                </a>

            </div>
        </div>

    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse
</div>

<div class="mt-10 px-5">
    {{ $vacantes->links() }}
</div>
