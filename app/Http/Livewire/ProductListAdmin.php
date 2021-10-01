<?php

namespace App\Http\Livewire;

use Faker\Core\File;
use Livewire\Component;
use App\Models\Product;
class ProductListAdmin extends Component
{
    protected $listeners = ['saved'];
    public $nId;
    public function saved(){
        $this->render();
    }
    public function render()
    {
        return view('livewire.product-list-admin',[
            'prods' => Product::all()
        ]);

    }
    public function setId($oId){
        $this->nId = $oId;
        $current = Product::where("id", $this->nId)->get("name");
        $this->current = $current[0]["name"];
    }
//    public function edit(){
//
//        Category::where("id", $this->nId)->update([
//            "name" => $this->nameCatEdit
//        ]);
//        $this->emit("savedCatEdit");
//    }

    public function delete($id){
        $photoName = Product::where("id", $id)->get("photo");
        $path = public_path('storage/products/'.$photoName[0]["photo"]);

        if(file_exists($path)){
            unlink($path);
        }
        Product::where("id", $id)->delete();
    }

    public function edit($id){

    }
}
