<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ProductCatalog;


class SearchContainer extends Component
{

    public $products = [];
    public $querySearch;
    public $selectedProductId;

    public function __construct($querySearch)
    {
        $this->querySearch = $querySearch;
    }

    public function updatedQuerySearch()
    {
        $this->products = ProductCatalog::all();
        $this->products = ProductCatalog::where('description', 'LIKE', '%' . $this->querySearch . '%')->get();
    }

    public function productSelect($id){
        $this->selectedProductId = $id;
        dd($id);
    }
    public function test(){
        dd("holi");
    }



    public function render(): View|Closure|string
    {
        $this->updatedQuerySearch();
        return view('components.search-container');
    }
}
