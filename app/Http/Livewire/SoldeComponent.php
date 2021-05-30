<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SoldeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.solde-component', ["products"=> $products ])->layout("layouts.base");
    }
}
