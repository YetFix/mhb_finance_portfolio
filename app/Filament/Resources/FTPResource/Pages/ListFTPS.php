<?php

namespace App\Filament\Resources\FTPResource\Pages;

use App\Filament\Resources\FTPResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFTPS extends ListRecords
{
    protected static string $resource = FTPResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
