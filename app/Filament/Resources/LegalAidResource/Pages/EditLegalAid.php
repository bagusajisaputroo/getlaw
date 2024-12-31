<?php

namespace App\Filament\Resources\LegalAidResource\Pages;

use App\Filament\Resources\LegalAidResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegalAid extends EditRecord
{
    protected static string $resource = LegalAidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
