<?php

namespace App\Observers;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsObserver
{
    public function saved(News $news): void
    {
        if ($news->getOriginal('image')) {
             Storage::disk('public')->delete($news->getOriginal('image'));
        }
    }
 
    public function deleted(News $news): void
    {
        if (! is_null($news->image)) {
            Storage::disk('public')->delete($news->image);
        }
    }
}
