<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Filter extends Component
{
    public $catFilter=[];
    public function render()
    {
        return view('livewire.filter',[
            'cats' => Category::all()
        ]);
    }
}
