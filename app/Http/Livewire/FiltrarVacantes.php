<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class FiltrarVacantes extends Component
{
    public $termino, $categoria, $salario;

    public function leerDatosFormulario() {
        $this->emit('buscar', $this->termino, $this->categoria, $this->salario);
    }
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.filtrar-vacantes', compact('salarios','categorias'));
    }
}
