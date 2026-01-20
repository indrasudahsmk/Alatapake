<?php

namespace App\Filament\Resources\Alats\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class AlatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_alat')
                    ->required(),
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'kategori'),
                Select::make('kondisi')
                    ->options(['baik' => 'Baik', 'rusak' => 'Rusak'])
                    ->default('baik')
                    ->required(),
                TextInput::make('stok')
                    ->required()
                    ->numeric()
                    ->default(1),
                Textarea::make('deskripsi')
                    ->required(),
            ]);
    }
}
