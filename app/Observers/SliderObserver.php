<?php

namespace App\Observers;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderObserver
{
    public function saved(Slider $slider): void
    {
        if ($slider->getOriginal('image')) {
             Storage::disk('public')->delete($slider->getOriginal('image'));
        }
    }
 
    public function deleted(Slider $slider): void
    {
        if (! is_null($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }
    }
}
