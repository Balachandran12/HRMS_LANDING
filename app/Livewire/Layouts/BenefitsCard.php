<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class BenefitsCard extends Component
{
    public $img;
    public $title;
    public $para;
    public function render()
    {
        return view('livewire.layouts.benefits-card');
    }
}
