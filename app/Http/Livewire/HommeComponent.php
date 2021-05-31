<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class HommeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::where('category_id', '1', 7)->paginate(6);
        return view('livewire.homme-component', ["products"=> $products ])->layout('layouts.base');
    }
}
