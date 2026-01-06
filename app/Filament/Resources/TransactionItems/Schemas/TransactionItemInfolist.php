<?php

namespace App\Filament\Resources\TransactionItems\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TransactionItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('transaction_id')
                    ->numeric(),
                TextEntry::make('product_id')
                    ->numeric(),
                TextEntry::make('quantity')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('subtotal')
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
