<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount(){
 
    $this->status = 0;

    
    }

    public function addSlider(){

        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $slider->image = $this->image;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider ->image = $imageName;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slide has been created successfully!');

    
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-add-home-slider-component',['sliders'=>$sliders])->layout("layouts.index");
    }
}
