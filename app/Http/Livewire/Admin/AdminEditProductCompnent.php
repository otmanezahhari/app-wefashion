<?php

namespace App\Http\Livewire\Admin;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
class AdminEditProductCompnent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $quantity;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->stock_status = $product->stock_status;
        $this->quantity = $product->quantity;
        $this->image = $product->image ;
        $this->category_id = $product->category_id;
        $this->newimage = $product->newimage;
        $this->product_id = $product->product_id;

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;

        if($this->newimage){
            $imageName = Carbon::now()->timestamp. '.'. $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image =  $imageName ;
        }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been Updated Successfully!');
    }
    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-edit-product-compnent',['categories'=>$categories])->layout('layouts.base');
    }
}
