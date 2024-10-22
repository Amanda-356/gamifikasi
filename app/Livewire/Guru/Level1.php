<?php

namespace App\Livewire\Guru;

use Livewire\Component;

class Level1 extends Component
{
    public function render()
    {
        return view('livewire.guru.level1')->extends('layouts.guru.app');
    }
}
