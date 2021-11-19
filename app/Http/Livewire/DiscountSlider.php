<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use DateTime;
class DiscountSlider extends Component
{
    public function render()
    {
        $this->checkDiscount();
        return view('livewire.discount-slider',[
            "discounts" => Product::where("discount_status", "1")->get()
        ]);
    }
    public function checkDiscount(){
        $discounts = Product::where("discount_status", "1")->get();
        foreach ($discounts as $disc){
            $date = new DateTime($disc->discount_end);
            $now = new DateTime();
            if($date < $now){
                Product::where("id", $disc->id)->update([
                    'discount_price' =>"0",
                    'discount_status'=>"0",
                    'discount_end'=>null
                ]);
            }

        }
    }
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}
