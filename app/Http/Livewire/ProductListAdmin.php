<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class ProductListAdmin extends Component
{
    use WithFileUploads;

    protected $rules = [
        'name' => 'required|max:255',
        'unit_of_measurement' => 'required|max:5',
        'category' => 'required',
        'model' => 'required',
        'price' => 'required',
        'about' => 'required'

    ];

    protected $listeners = [
        'editedProd' => '$refresh',
        'saved' => '$refresh'
    ];
    public  $nId, $discount_status;
    public  $name, $unit_of_measurement, $category, $model, $photo;
    public  $price ,  $discount_price;
    public  $discount_end, $about;
    public $height, $width;


    public function saved(){
        $this->render();
    }
    public function render()
    {
        return view('livewire.product-list-admin',[
            'prods' => Product::all(),
            'cats' => Category::all()
        ]);

    }
    public function setId($oId){
        $this->nId = $oId;
        $prod = Product::where("id", $this->nId )->get();
        $this->name = $prod[0]["name"];
        $this->unit_of_measurement = $prod[0]['unit_of_measurement'];
        $this->category = $prod[0]["category"];
        $this->model = $prod[0]["model"];
        $this->price = $prod[0]["price"];
        $this->photo = $prod[0]["photo"];
        $this->discount_price = $prod[0]["discount_price"];
        $this->discount_status = $prod[0]["discount_status"];
        $this->discount_end = $prod[0]["discount_end"];
        $this->about = $prod[0]["about"];
        $this->height = $prod[0]['height'];
        $this->width = $prod[0]['width'];
    }

    public function delete($id){
        $photoName = Product::where("id", $id)->get("photo");
        $path = public_path('storage/products/'.$photoName[0]["photo"]);

        if(file_exists($path)){
            unlink($path);
        }
        Product::where("id", $id)->delete();
    }

    public function check()
    {
        if(is_string($this->photo)) {
            $PhotoName = $this->photo;
        }else {
            $PhotoName = $this->photo->getClientOriginalName();
            $i = 1;
            if (file_exists(storage_path('app/public/products/') . $PhotoName)) {
                while (file_exists(storage_path('app/public/products/') . $PhotoName)) {
                    $i++;
                    $PhotoName = "($i)" . $PhotoName;
                }
            }

                $this->photo->storeAs('public/products/', $PhotoName);

        }
        return $PhotoName;
    }

    public function edit($id)
    {
        $this->validate();

            $this->photo = $this->check();
        Product::where("id", $id)->update([
            'name' => $this->name,
            'unit_of_measurement' => $this->unit_of_measurement,
            'category' => $this->category,
            'model' => $this->model,
            'price' => $this->price,
            'photo' => $this->photo,
            'discount_price' =>$this->discount_price,
            'discount_status'=>$this->discount_status,
            'discount_end'=>$this->discount_end,
            'about' =>$this->about,
            'height' => $this->height,
            'width' => $this->width
        ]);

//        $path = public_path('storage/products/'.$this->photo);
//
//        if(file_exists($path)){
//            unlink($path);
//        }

//        if(!is_string($this->photo)) {

//        }

        $this->emit('editedProd');
//        $this->name = "";
//        $this->unit_of_measurement = "";
//        $this->category = "";
//        $this->model = "";
//        $this->price = "";
//        $this->photo = "";
//        $this->discount_price = "";
//        $this->discount_status = "";
//        $this->discount_end = "";

    }
}
