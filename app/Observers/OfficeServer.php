<?php

namespace App\Observers;
use App\Models\Office;
use Illuminate\Support\Facades\Storage;

class OfficeServer
{
    public function saved(Office $office): void
    {
        if ($office->getOriginal('image')) {
             Storage::disk('public')->delete($office->getOriginal('image'));
        }
    }
 
    public function deleted(Office $office): void
    {
        if (! is_null($office->image)) {
            Storage::disk('public')->delete($office->image);
        }
    }
}
