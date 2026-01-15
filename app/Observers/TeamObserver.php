<?php

namespace App\Observers;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamObserver
{
    public function saved(Team $team): void
    {
        if ($team->getOriginal('image')) {
             Storage::disk('public')->delete($team->getOriginal('image'));
        }
    }
 
    public function deleted(Team $team): void
    {
        if (! is_null($team->image)) {
            Storage::disk('public')->delete($team->image);
        }
    }
}
