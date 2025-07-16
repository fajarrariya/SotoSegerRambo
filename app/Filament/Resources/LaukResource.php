<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaukResource\Pages;
use App\Models\Lauk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class LaukResource extends Resource
{
    protected static ?string $model = Lauk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('lauk-images') // folder penyimpanan di storage/app/public/lauk-images
                    ->required(),

                TextInput::make('nama_lauk')
                    ->label('Nama Lauk')
                    ->required()
                    ->maxLength(255),

                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->circular(), // jika ingin tampil bulat
                TextColumn::make('nama_lauk')
                    ->label('Nama Lauk')
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR'), // kalau ingin tampil Rp
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLauks::route('/'),
            'create' => Pages\CreateLauk::route('/create'),
            'edit' => Pages\EditLauk::route('/{record}/edit'),
        ];
    }
}
