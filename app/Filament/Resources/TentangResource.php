<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangResource\Pages;
use App\Filament\Resources\TentangResource\RelationManagers;
use App\Models\Tentang;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangResource extends Resource
{
    protected static ?string $model = Tentang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
         return $form
        ->schema([
            TextInput::make('deskripsi')->label('Deskripsi'),

            Grid::make(2)->schema([
                TextInput::make('sub-hed1')->label('Sub Head 1'),
                TextInput::make('desc-sub-head1')->label('Deskripsi Sub Head 1'),
            ]),

            Grid::make(2)->schema([
                TextInput::make('sub-hed2')->label('Sub Head 2'),
                TextInput::make('desc-sub-head2')->label('Deskripsi Sub Head 2'),
            ]),

            Grid::make(2)->schema([
                TextInput::make('sub-hed3')->label('Sub Head 3'),
                TextInput::make('desc-sub-head3')->label('Deskripsi Sub Head 3'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('deskripsi'),
                TextColumn::make('sub-hed1'),
                TextColumn::make('desc-sub-head1'),
                TextColumn::make('sub-hed2'),
                TextColumn::make('desc-sub-head2'),
                TextColumn::make('sub-hed3'),
                TextColumn::make('desc-sub-head3'),
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
            'index' => Pages\ListTentangs::route('/'),
            'create' => Pages\CreateTentang::route('/create'),
            'edit' => Pages\EditTentang::route('/{record}/edit'),
        ];
    }
}
