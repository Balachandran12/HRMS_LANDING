<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Header extends Component
{
    public $slot;
    public function render()
    {
        return view('livewire.layouts.header');
    }
}
