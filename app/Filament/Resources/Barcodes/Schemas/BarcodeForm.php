<?php

namespace App\Filament\Resources\Barcodes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarcodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('table_number')
                    ->required()
                    ->numeric(),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                TextInput::make('qr_value')
                    ->required(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
