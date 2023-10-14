<?php

namespace App\Livewire\ProductsSales;

use Illuminate\Queue\Listener;
use Livewire\Component;
use App\Models\ProductCatalog;

class TableSale extends Component
{
    public $selectedProducts = [];
    protected $listeners = ['SelectProduct'];

    public function SelectProduct($id){
        $product = ProductCatalog::find($id);
        $this->selectedProducts[] = $product; 
                
    } 

    public function addProductTable()
    {

    }

    public function render()
    {
        return view('livewire.products-sales.table-sale');
    }
}
