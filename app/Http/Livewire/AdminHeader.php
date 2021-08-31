<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminHeader extends Component
{

    public $special;
    public function render()
    {
        return view('livewire.admin-header');
    }
}
