<?php

namespace App\Http\Livewire;

use App\Models\Model_has_permissions;
use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;

class Roles extends Component
{
   public $users, $permisos, $rol;
   
use WithPagination;

    public function mount()
    {

    }
    public function render()
    {
        $this->users = User::all();
        return view('livewire.Roles.roles');
    }
}
