<?php

namespace App\Filament\Resources\LaukResource\Pages;

use App\Filament\Resources\LaukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLauk extends EditRecord
{
    protected static string $resource = LaukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
