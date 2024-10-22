<?php

namespace App\Livewire\Guru;

use Livewire\Component;

class GuruIndex extends Component
{
    public function render()
    {
        return view('livewire.guru.guru-index')->extends('layouts.guru.app');
    }
}
