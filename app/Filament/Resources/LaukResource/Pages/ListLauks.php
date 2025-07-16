<?php

namespace App\Filament\Resources\LaukResource\Pages;

use App\Filament\Resources\LaukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLauks extends ListRecords
{
    protected static string $resource = LaukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
