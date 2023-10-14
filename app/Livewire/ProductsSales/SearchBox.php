<?php

namespace App\Livewire\ProductsSales;


use Livewire\Component;
use App\Livewire\ProductsSales\SearchBar;
use App\Models\ProductCatalog;

class SearchBox extends Component
{

    public $products = [];
    public $message;

    public function mount($message)
    {
        $this->products = ProductCatalog::all();
        $this->message = $message;
    }

    public function updatedQuerySearch()
    {
        $this->products = ProductCatalog::where('description', 'LIKE', '%' . $this->message . '%')->get();
    }

    public function productSelect($id)
    {
        $this->dispatch('SelectProduct',$id);
    }


    public function render()
    {
        return view('livewire.products-sales.search-box');
    }
}
