<?php

namespace App\Livewire\Guru;

use Livewire\Component;

class Respondent extends Component
{
    public function render()
    {
        return view('livewire.guru.respondent')->extends('layouts.guru.app');
    }
}
