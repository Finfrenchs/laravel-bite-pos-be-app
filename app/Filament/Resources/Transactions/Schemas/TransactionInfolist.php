<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TransactionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('transaction_code'),
                TextEntry::make('customer_name'),
                TextEntry::make('phone')
                    ->placeholder('-'),
                TextEntry::make('external_id'),
                TextEntry::make('checkout_link'),
                TextEntry::make('barcode_id')
                    ->numeric(),
                TextEntry::make('table_name'),
                TextEntry::make('payment_status'),
                TextEntry::make('payment_method'),
                TextEntry::make('subtotal')
                    ->numeric(),
                TextEntry::make('tax')
                    ->numeric(),
                TextEntry::make('total')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
