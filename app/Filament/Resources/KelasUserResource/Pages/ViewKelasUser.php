<?php

namespace App\Filament\Resources\KelasUserResource\Pages;

use App\Filament\Resources\KelasUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKelasUser extends ViewRecord
{
    protected static string $resource = KelasUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
