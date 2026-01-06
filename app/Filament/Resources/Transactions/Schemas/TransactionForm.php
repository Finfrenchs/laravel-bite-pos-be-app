<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('transaction_code')
                    ->required(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('external_id')
                    ->required(),
                TextInput::make('checkout_link')
                    ->required(),
                TextInput::make('barcode_id')
                    ->required()
                    ->numeric(),
                TextInput::make('table_name')
                    ->required(),
                TextInput::make('payment_status')
                    ->required(),
                TextInput::make('payment_method')
                    ->required(),
                TextInput::make('subtotal')
                    ->required()
                    ->numeric(),
                TextInput::make('tax')
                    ->required()
                    ->numeric(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
