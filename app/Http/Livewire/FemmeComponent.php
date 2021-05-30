<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class FemmeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.femme-component', ["products"=> $products ])->layout('layouts.base');
    }
}
