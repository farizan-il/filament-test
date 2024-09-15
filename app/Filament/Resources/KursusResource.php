<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KursusResource\Pages;
use App\Filament\Resources\KursusResource\RelationManagers;
use App\Models\Kursus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KursusResource extends Resource
{
    protected static ?string $model = Kursus::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judulKursus')
                    ->required(),
                Forms\Components\TextInput::make('subjudul')
                    ->required(),
                Forms\Components\TextArea::make('deskripsi')
                    ->required(),
                Forms\Components\TextInput::make('instruktur')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judulKursus'),
                Tables\Columns\TextColumn::make('subjudul')
                    ->Limit(20),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->Limit(30),
                Tables\Columns\TextColumn::make('instruktur'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListKursuses::route('/'),
            'create' => Pages\CreateKursus::route('/create'),
            'edit' => Pages\EditKursus::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Kelola Kursus';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationGroup = 'Utama';

    
}
