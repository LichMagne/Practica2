<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paises;
use App\Imports\PaisesImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;
class Paisess extends Component
{
    use WithFileUploads;
    protected $listeners = 
    [
        'refreshComponent' => '$refresh', 
        'destroy','dropall'                    


];
    public  $pais, $file;
    public $importarExcel = false;


    public function mount()
    {
       

    }
    public function render()
    {
         $this->pais = Paises::all();
        return view('livewire.Paises.pais', ['posts' => $this->pais]);
    }


    public function storeFile(){
  $this->validate([

  'file'=>'required|mimes:xlsx,xls'

   ]);

  Excel::import(new PaisesImport,$this->file);
 $this->dispatchBrowserEvent('close_modal');
  $this->emit('refreshComponent');


    }

public function deleted(){


}


public function dropall(){
    Paises::getQuery()->delete();
 $this->emit('refreshComponent');
}


    public function destroy($id)
    {
        Paises::findOrFail($id)->delete();   
        $this->emit('refreshComponent');
     
    }

}
