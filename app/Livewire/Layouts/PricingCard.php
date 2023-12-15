<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class PricingCard extends Component
{
    public $plans;
    public $img;

    public function render()
    {
        return view('livewire.layouts.pricing-card');
    }
}
