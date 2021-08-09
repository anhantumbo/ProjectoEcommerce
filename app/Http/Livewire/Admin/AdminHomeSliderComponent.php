<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class AdminHomeSliderComponent extends Component
{ 
    use WithFileUploads;
    use WithPagination;
    public function deleteSlider($slider_id){


        $slider = HomeSlider::find($slider_id);
        $slider->delete();
        session()->flash('message','Slide has been deleted successfully!');

    }
    public function render()
    {   $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component',['sliders'=>$sliders])->layout("layouts.index");
    }
}
