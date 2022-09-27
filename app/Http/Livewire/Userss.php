<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Livewire\WithFileUploads;
class Userss extends Component
{
   public $iduser,$file, $user,$image1,$image2, $idin;
   protected $listeners = ['refreshComponent' => '$refresh'];

   use WithFileUploads;
   public function mount(){
    $this->idin =rand();

   }


    public function render()
    {

       $this->iduser = Auth::user()->id;
       $this->image1 = Auth::user()->profile_photo_path;
       $this->user = User::findOrFail(Auth::user()->id);

        return view('livewire.User.user-wire');
    }


    public function edit($id){
        $us = User::findOrFail($id);

        $this->iduser = $us->id;
        $this->image1 = $us->profile_photo_path;

    }


    public function storeFile(){
  $this->validate([

  'file'=>'required|image|max:2048'

   ]);



$this->user->updateProfilePhoto($this->file);
    $this->idin =rand();

    $this->emit('refreshComponent');
    $this->file="";
    $this->dispatchBrowserEvent('close_modal');
    }




}
