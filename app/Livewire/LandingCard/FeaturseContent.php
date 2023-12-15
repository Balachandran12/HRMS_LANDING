<?php

namespace App\Livewire\LandingCard;

use Livewire\Component;

class FeaturseContent extends Component
{
 public $image;
    public $title;
    public $para;
    public function render()
    {
        return view('livewire.landing-card.featurse-content');
    }
}
