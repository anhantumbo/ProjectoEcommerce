<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditHomeSliderComponent extends Component
{
    
    use WithFileUploads;
    use WithPagination;
    
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $slider_id;
    public $newimage;

    public function mount($slider_id){

        $slider = HomeSlider::find($slider_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->price = $slider->price;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;


    }
   

    public function updateSlide(){


        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        if($this->newimage){
           
        $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
        $this->newimage->storeAs('sliders',$imageName);
        $slider ->image = $imageName;
               

        }
       
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slide has been updated successfully!');
    }

    public function render()
    {   $sliders = HomeSlider::all();
        return view('livewire.admin.admin-edit-home-slider-component',['sliders'=>$sliders])->layout("layouts.index");
    }
}
