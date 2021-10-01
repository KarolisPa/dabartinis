<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Installation extends Component
{
    public bool $show = false;
    public $border;

    public function render()
    {
        return view('livewire.installation');
    }
    public function toggle(){
        if($this->show == true){
            $this->border = "border-blue-200";
            $this->show = false;
        }else{
            $this->show = true;
            $this->border = "border-blue-400";
        }
    }
}
