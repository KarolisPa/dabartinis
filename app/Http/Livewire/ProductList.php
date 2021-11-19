<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $catFilter = [];
protected $listeners =[
    'checked' => 'render'
];

    public function render()
    {
        return view('livewire.product-list', [
        'prods' => Product::where("discount_status", "0")->where('category', $this->catFilter)->paginate(6),
         'cats' => Category::all()
        ]);
    }
    public function show($id){
        $product = Product::find($id);
        return view('product',[
            'product' => $product
        ]);
    }

    public function showDiscount($id){
        $product = Product::where([
            ['discount_status', '=', '1'],
            ['id', '=', $id]
        ])->first();

        return view('productDiscount',[
            'product' => $product
        ]);
    }
}
