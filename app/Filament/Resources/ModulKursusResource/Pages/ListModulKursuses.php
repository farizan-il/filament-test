<?php

namespace App\Filament\Resources\ModulKursusResource\Pages;

use App\Filament\Resources\ModulKursusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModulKursuses extends ListRecords
{
    protected static string $resource = ModulKursusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
