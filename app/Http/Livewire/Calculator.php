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
    public $order;
    public $fenceLenght;
    public $vartaiService;

    protected $rules = [
        'fenceLenght' => 'required',
    ];
    protected $messages = [
        'fenceLenght.required' => 'Būtina nurodyti tvoros ilgį',
    ];


    protected $listeners = ['productsAdded' => 'calc'];

    public function render()
    {
        return view('livewire.calculator', [
            'varteliai' => Product::where('category', 'varteliai')->paginate(9),
            'vartai' => Product::where('category','vartai')->paginate(9),
            'tvoros' => Product::where('category', 'tvora')->paginate(9),
            'boksteliai' => Product::where('category', 'bokstelis')->paginate(9)
        ]);
    }
    public function calc(){
        $this->order = Product::whereIn('id', [$this->varteliaiSelected, $this->vartaiSelected, $this->tvoraSelected, $this->boksteliaiSelected])->get();
    }
}
