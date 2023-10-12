<?php

namespace App\Livewire;

use Livewire\Component;

class Databinding extends Component
{
    public string $message = 'test';

    public function updatedMessage()
    {
        // Este método se llama automáticamente cuando $message cambia
        // dd($this->message); // Se ejecuta automáticamente cuando el valor cambia
    }




    public function render()
    {
        return view('livewire.databinding');
    }
}
