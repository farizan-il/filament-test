<?php

namespace App\Filament\Resources\ModulKursusResource\Pages;

use App\Filament\Resources\ModulKursusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModulKursus extends EditRecord
{
    protected static string $resource = ModulKursusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
