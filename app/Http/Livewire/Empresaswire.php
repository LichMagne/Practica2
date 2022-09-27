<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empresas;
use App\Models\Paises;
use App\Models\Ciudades;

class Empresaswire extends Component
{
    public $country, $city;
    public $ciudadesA = [], $paisesA = [];
    public $empresa, $paises, $row, $ciudades, $id_empresa = '', $empresa_name, $pais_id, $ciudad_id, $title1;
    protected $rules =
    [
        'empresa_name' => 'required|string|max:255',
        'country' => 'required|not_in:0',
        'city' => 'required|not_in:0',

    ];
    protected $listeners = ['refreshComponent' => '$refresh', 'store','destroy'];

    public function mount()
    {
        $this->paisesA = Paises::all();
        $this->ciudadesA = collect();
    
    }



    public function updatedCountry($value)
    {
        $this->ciudadesA = Ciudades::where('pais_id', $value)->get();
     
    }


    public function render()
    {
       
        $this->empresa = Empresas::all();
        return view('livewire.Empresas.empresas',['posts' => $this->empresa]);
    }
    public function deleted($id)
    {
        $this->dispatchBrowserEvent('deleted_product',['idDeleted'=> $id]);
    }

    public function destroy($id){

        Empresas::findOrFail($id)->delete();   
        $this->emit('refreshComponent');
    }



    public function create()
    {
        $this->title1 = 'Crear';
        $this->limpiar();
      
    }


    public function editar($id)
    {
        $empresa = Empresas::findOrFail($id);
        $this->id_empresa = $empresa->id;
        $this->empresa_name = $empresa->empresa_name;
        $this->country = $empresa->pais_id;
        $this->city = $empresa->ciudad_id;
        $this->title1 = 'Editar';
    }

    public function store()
    {

        $this->validate();

        Empresas::updateOrCreate(
            ['id' => $this->id_empresa],
            [
                'empresa_name' => $this->empresa_name,
                'pais_id' => $this->country,
                'ciudad_id' => $this->city,
            ]
            
        );
        $this->emit('refreshComponent');
        $this->dispatchBrowserEvent('close_modal');
      
    }


    public function limpiar()
    {
        $this->id_empresa = '';
        $this->empresa_name = '';
        $this->country = '';
        $this->city = '';
    }
}
