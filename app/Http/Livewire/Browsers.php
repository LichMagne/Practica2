<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Browser;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Co2;



class Browsers extends Component
{

    public  $pro = [],$date=[] ,$brow, $nav, $us = [];
    protected $listeners =
    [
        'refreshComponent' => '$refresh',
        'destroy', 'updateBrowser','refresh'


    ];






    public function mount()
    {

        $this->getBrowser();
    }

    public function render()
    {
        return view('livewire.Barras.browsers');
    }





    public function getBrowser()
    {
        $this->nav = Browser::all();

        foreach ($this->nav as $n) {
            $this->brow = ['name' => $n['nombre_browser'], 'y' => floatval($n['porcentaje_browser'])];
        }
     


        $this->us = Co2::select('co2_numbers','date')->orderBy('date', 'ASC')->pluck('co2_numbers');
        $this->date= Co2::select('co2_numbers','date')->orderBy('date', 'ASC')->pluck('date')->first();

    }


    public function refresh(){

        $this->nav = Browser::all();
        foreach ($this->nav as $n) {
            $this->brow = ['name' => $n['nombre_browser'], 'y' => floatval($n['porcentaje_browser'])];
        }
        $this->us = Co2::select('co2_numbers','date')->orderBy('date', 'ASC')->pluck('co2_numbers');
        $this->date= Co2::select('co2_numbers','date')->orderBy('date', 'ASC')->pluck('date')->first();
        
        $this->dispatchBrowserEvent('livewire:refresh');

    }



}
