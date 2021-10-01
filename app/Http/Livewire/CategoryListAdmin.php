<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryListAdmin extends Component
{
    public $nameCatEdit;
    public $nId;
    public $current;

    protected $listeners = [
        'savedCat',
        'savedCatEdit' => '$refresh',
    ];

    public function savedCat(){
        $this->render();
    }

public function setId($oId){
    $this->nId = $oId;
    $current = Category::where("id", $this->nId)->get("name");
    $this->current = $current[0]["name"];
}
    public function edit(){

        Category::where("id", $this->nId)->update([
            "name" => $this->nameCatEdit
        ]);
        $this->emit("savedCatEdit");
    }
    public function render()
    {
        return view('livewire.category-list-admin', [
            'cats' => Category::all()
        ]);
    }
    public function delete($id){
        Category::where('id', $id)->delete();
    }

}
