<?php

namespace App\Livewire\ProductsSales;

use Livewire\Component;

use function Laravel\Prompts\search;

class SearchBar extends Component
{
    public $search = '';

    public function searchKeyUp()
    {
        $this->dispatch('productSearch', $this->search);
    }
    public function render()
    {
        return view('livewire.products-sales.search-bar');
    }
}
