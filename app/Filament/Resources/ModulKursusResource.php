<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModulKursusResource\Pages;
use App\Filament\Resources\ModulKursusResource\RelationManagers;
use App\Models\ModulKursus;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModulKursusResource extends Resource
{
    protected static ?string $model = ModulKursus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_kursus')
                    ->relationship('kursus', 'judulKursus')
                    ->required(),
                TextInput::make('modul')
                    ->required(),
                TextInput::make('submodul')
                    ->required(),
                FileUpload::make('filemodul')
                    ->multiple()
                    ->directory('file-modul')
                    ->visibility('private'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kursus.judulKursus'),
                Tables\Columns\TextColumn::make('modul'),
                Tables\Columns\TextColumn::make('submodul'),
                Tables\Columns\TextColumn::make('Kursus.instruktur')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Farizan' => 'success',
                    })
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('Judul Kursus')
                ->relationship('kursus', 'judulKursus'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListModulKursuses::route('/'),
            'create' => Pages\CreateModulKursus::route('/create'),
            'edit' => Pages\EditModulKursus::route('/{record}/edit'),
        ];
    }
    protected static ?string $navigationGroup = 'Utama';
}
