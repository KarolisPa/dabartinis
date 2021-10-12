<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DiscountSlider extends Component
{
    public function render()
    {
        return view('livewire.discount-slider',[
            "discounts" => Product::where("discount_status", "1")->get()
        ]);
    }
}
