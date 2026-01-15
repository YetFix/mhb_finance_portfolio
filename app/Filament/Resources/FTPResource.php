<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FTPResource\Pages;
use App\Filament\Resources\FTPResource\RelationManagers;
use App\Models\FTP;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FTPResource extends Resource
{
    protected static ?string $model = FTP::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';
    protected static ?string $navigationLabel = 'FTP Servers';
    public static $navigationOrder = 3;

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

     // count for navigation models
     public static function getNavigationBadge(): ?string
     {
         return static::getModel()::count();
     }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
              Forms\Components\TextInput::make('link')
                ->required()
                ->maxLength(255),
              Forms\Components\FileUpload::make('logo')
                    ->image()    
                    ->required()
                    ->disk('public')
                    ->directory('media')
                    ->visibility('public')
                    ->openable()
                    ->hint("Image must be 300px X 300px")
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\TextColumn::make('link')
                ->searchable(),
                Tables\Columns\ImageColumn::make('logo')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFTPS::route('/'),
            'create' => Pages\CreateFTP::route('/create'),
            'edit' => Pages\EditFTP::route('/{record}/edit'),
        ];
    }
}
