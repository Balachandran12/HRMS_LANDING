<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Home extends Component
{
    public $slot;
    public function render()
    {
        return view('livewire.home.home');
    }
}
