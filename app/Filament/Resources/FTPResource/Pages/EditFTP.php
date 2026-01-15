<?php

namespace App\Filament\Resources\FTPResource\Pages;

use App\Filament\Resources\FTPResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFTP extends EditRecord
{
    protected static string $resource = FTPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }

    
}
