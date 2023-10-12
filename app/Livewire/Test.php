<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public string $name;
    public string $lastname;
    public string $direction;


    public function mount($contact){
        $this->name = $contact->name;
        $this->lastname = $contact->lastname;
        $this->direction = $contact->direction;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
