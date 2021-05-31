<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {

        $this->stock_status = "instock";
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');

    }

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->stock_status = $this->stock_status;
        $product->name = $this->featured;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;

        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('products',$imageName);

        $product->image =  $imageName ;
        $product->category_id = $this->category_id;

        $product->save();
        session()->flash('message', 'Product has been created Successfully!');
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}