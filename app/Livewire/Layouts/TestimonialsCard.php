<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class TestimonialsCard extends Component
{
    public $para;
    public $avatar;
    public $name;
    public $posting;
    public function render()
    {
        return view('livewire.layouts.testimonials-card');
    }
}
