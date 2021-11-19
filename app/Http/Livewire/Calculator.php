<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class Calculator extends Component
{
    use WithPagination;
    public $varteliaiSelected;
    public $vartaiSelected;
    public $tvoraSelected;
    public $boksteliaiSelected;

    public function render()
    {
        return view('livewire.calculator', [
            'varteliai' => Product::where('category', 'varteliai')->paginate(9),
            'vartai' => Product::where('category','vartai')->paginate(9),
            'tvoros' => Product::where('category', 'tvora')->paginate(9),
            'boksteliai' => Product::where('category', 'bokstelis')->paginate(9)
        ]);
    }
    public function show(){
        $aqua=[
            'varteliai' => $this->varteliaiSelected,
            'vartai' => $this->vartaiSelected,
            'tvora' => $this->tvoraSelected,
            'boksteliai' => $this->boksteliaiSelected
        ];
        dd($aqua);
    }
}
