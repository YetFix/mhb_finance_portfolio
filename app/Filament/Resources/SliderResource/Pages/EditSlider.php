<?php

namespace App\Filament\Resources\SliderResource\Pages;

use App\Filament\Resources\SliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSlider extends EditRecord
{
    protected static string $resource = SliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Slider $record) {
                // delete single
                if ($record->image) {
                    Storage::disk('public/storage/')->delete($record->image);
                }
            }),
        ];
    }
    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }

}
