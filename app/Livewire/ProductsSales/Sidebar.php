<?php

namespace App\Livewire\ProductsSales;

use Livewire\Component;
use App\Livewire\ProductsSales\TableSale;

class Sidebar extends Component
{

    public function confirmSale($product){
        $this->dispatch('comfirmSale');
    }

    public function discardSale(){
       $this->dispatch('discardSale');
    }

    public function render()
    {
        return view('livewire.products-sales.sidebar');
    }
}
