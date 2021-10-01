<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class AddCat extends Component
{
    public $nameCat;

    protected $rules = [
        'nameCat' => 'required'
    ];

    public function save(){
        $this->validate();
        if ($this->check() == true){
            Category::create([
                'name' => $this->nameCat,
            ]);
            $this->emit('savedCat');
            $this->nameCat = "";
        }else{
            $this->emit('exists');
        }

    }

    public function check(){
        $cats = Category::where('name', $this->nameCat);
        if($cats->first()){
            return false;
        }else{
            return true;
        }
    }

    public function render()
    {
        return view('livewire.add-cat');
    }
}
