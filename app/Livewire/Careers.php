<?php

namespace App\Livewire;

use Livewire\Component;

class Careers extends Component
{
    public function render()
    {
        return view('livewire.careers')->layout('layouts.guest');
    }
}
