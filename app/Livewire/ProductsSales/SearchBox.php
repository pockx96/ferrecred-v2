<?php

namespace App\Livewire\ProductsSales;


use Livewire\Component;
use App\Livewire\ProductsSales\SearchBar;
use App\Models\ProductCatalog;

class SearchBox extends Component
{

    public $products = [];
    public $productRequest;
    public $isVisible = false;

    protected $listeners = ['productSearch'];

    public function mount()
    {
        $this->products = ProductCatalog::all();
    }

    public function productSearch($productRequest)
    {
        $this->isVisible = ($productRequest != "") ? true : false;
        $this->productRequest = $productRequest;
        $this->products = ProductCatalog::where('description', 'LIKE', '%' . $productRequest . '%')->get();
    }


    public function productSelect($id)
    {
        $this->dispatch('SelectProduct', $id);
        $this->isVisible = false;
    }


    public function render()
    {
        return view('livewire.products-sales.search-box');
    }
}
