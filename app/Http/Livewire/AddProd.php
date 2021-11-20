<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use App\Models\Fence;
use Livewire\WithFileUploads;


class AddProd extends Component
{
use WithFileUploads;
    public $name, $color, $width, $height, $unit_of_measurement, $category, $model, $price, $about, $photo, $discount_size, $discount_status, $discount_end;

    protected $listeners = [
        'savedCat' => '$refresh',
    ];
    protected $rules = [
        'name' => 'required|max:255',
        'unit_of_measurement' => 'required|max:5',
        'category' => 'required',
        'model' => 'required',
        'price' => 'required',
        'about' => 'required',
        'width' => 'required',
        'height' => 'required',
        'photo' => 'image|required',
    ];
    protected $messages = [
      'name.required' => 'Reikia pavadinima vistiek sugalvoti',
      'unit_of_measurement.required' => 'Būtina užpildyti',
      'unit_of_measurement.max'=>'kg. m. vnt.',
       'category.required' => 'Būtina užpildyti',
        'model.required' => 'Būtina užpildyti',
        'price.required' => 'Būtina užpildyti',
        'photo.required' => 'Būtina įkelti foto',
        'photo.image' => 'Failas turi būti paveikslėlio tipo',
        'width.required' => 'privaloma nurodyti produkto  plotį',
        'height.required' => 'privaloma nurodyti produkto aukštį'
    ];

    public function render()
    {
        return view('livewire.add-prod', [
            'cats' => Category::all('name'),
        ]);

    }
    public function check()
    {
        $PhotoName = $this->photo->getClientOriginalName();
        $i = 1;
        if (file_exists(storage_path('app/public/products/').$PhotoName)) {
            while (file_exists(storage_path('app/public/products/').$PhotoName)) {
                $i++;
                $PhotoName = "($i)".$PhotoName;
            }
        }
        return $PhotoName;
    }
    public function save()
    {
        $this->validate();
      $nName = $this->check();
        Product::create([
            'name' => $this->name,
            'unit_of_measurement' => $this->unit_of_measurement,
            'category' => $this->category,
            'model' => $this->model,
            'price' => $this->price,
            'about' => $this->about,
            'height' => $this->height,
            'width' => $this->width,
            'color' => $this->color,
            'photo' => $nName
        ]);

        $this->photo->storeAs('public/products', $nName);
        session()->flash('message', 'Produktas sėkmingai sukurtas');
        $this->emit('saved');

        $this->name = "";
        $this->unit_of_measurement = "";
        $this->category = "";
        $this->model = "";
        $this->price = "";
        $this->photo = "";
        $this->discount_size = "";
        $this->discount_status = "";
        $this->discount_end = "";
        $this->about = '';
        $this->width = "";
        $this->color = "";
        $this->height = "";
        }

}


