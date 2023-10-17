<?php

namespace App\Livewire\ProductsSales;

use Illuminate\Queue\Listener;
use Livewire\Component;
use App\Models\ProductCatalog;
use App\Models\Product;

class TableSale extends Component
{
    public $selectedProducts = [];
    public $saleNumer = 1;

    protected $listeners = ['SelectProduct','comfirmSale','discardSale'];

    public function SelectProduct($id){
        $product = ProductCatalog::find($id);
        $this->selectedProducts[] = $product; 
                
    } 

    public function comfirmSale(){
        $product = new Product();
        foreach($this->selectedProducts as $productSelect){
            $product->sale = $this->saleNumer;
            $product->code = $productSelect->id;
            $product->save();
        }
    }

    public function discardSale():void
    {
        $this->selectedProducts = [];
    }

    public function render()
    {
        return view('livewire.products-sales.table-sale');
    }
}
