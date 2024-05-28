<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class FiltrarVacantes extends Component
{
    public $termino, $categoria, $salario;

    public function leerDatosFormulario() {
        dd('buscando');
    }
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.filtrar-vacantes', compact('salarios','categorias'));
    }
}
