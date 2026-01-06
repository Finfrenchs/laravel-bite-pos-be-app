<?php

namespace App\Filament\Resources\Barcodes\Pages;

use App\Filament\Resources\Barcodes\BarcodeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBarcode extends ViewRecord
{
    protected static string $resource = BarcodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
