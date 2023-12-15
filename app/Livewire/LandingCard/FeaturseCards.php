<?php

namespace App\Livewire\LandingCard;

use Livewire\Component;

class FeaturseCards extends Component
{

    public $title;
    public $image;
    public $description;
    public function render()
    {
        return view('livewire.landing-card.featurse-cards');
    }
}
