<?php

namespace App\Livewire\ProductsSales;

use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';

    public function emitInput()
    {
        $this->dispatch('productSearch', $this->search);
    }
    public function render()
    {
        return view('livewire.products-sales.search-bar');
    }
}
