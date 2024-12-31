<?php

namespace App\Filament\Resources\LegalAidResource\Pages;

use App\Filament\Resources\LegalAidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegalAids extends ListRecords
{
    protected static string $resource = LegalAidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
