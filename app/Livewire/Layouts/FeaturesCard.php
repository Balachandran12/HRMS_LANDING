<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class FeaturesCard extends Component
{
    public $title;
    public $description;
    public function render()
    {
        return view('livewire.layouts.features-card');
    }
}
