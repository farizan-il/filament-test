<?php

namespace App\Filament\Resources\KursusResource\Pages;

use App\Filament\Resources\KursusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKursuses extends ListRecords
{
    protected static string $resource = KursusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
