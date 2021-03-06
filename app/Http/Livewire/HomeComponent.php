<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::where('product_published', 'published', 7)->paginate(6);
        return view('livewire.home-component', ["products"=> $products ])->layout('layouts.base');
    }
}
