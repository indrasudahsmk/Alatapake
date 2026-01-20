<?php

namespace App\Filament\Resources\Alats\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AlatInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nama_alat'),
                TextEntry::make('kategori.kategori')
                    ->numeric(),
                TextEntry::make('kondisi')
                    ->badge(),
                TextEntry::make('stok')
                    ->numeric(),
                TextEntry::make('deskripsi'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
