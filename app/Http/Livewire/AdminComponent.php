<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-component')->layout('layouts.admin');
    }
}
