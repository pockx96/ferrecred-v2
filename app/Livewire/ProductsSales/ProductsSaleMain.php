<?php

namespace App\Livewire\ProductsSales;

use Livewire\Component;

class ProductsSaleMain extends Component
{

    protected $listeners = ['valueSearch'];

    public function valueSearch($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        return view('livewire.products-sales.products-sale-main');
    }
}
