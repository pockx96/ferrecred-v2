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
        $this->updateMessage($message);
    }

    public function updateMessage($message)
    {
        $this->message = $message;
        $this->products = ProductCatalog::where('description', 'LIKE', '%' . $this->message . '%')->get();
        // dd($this->products);
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
