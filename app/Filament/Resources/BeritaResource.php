<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\DateColumn;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([FileUpload::make('gambar')->label('Gambar')->image()->directory('berita-images')->required(), TextInput::make('judul')->label('Judul')->required()->maxLength(255), DatePicker::make('tanggal_pembuatan')->label('Tanggal Pembuatan')->required(), Textarea::make('deskripsi')->label('Deskripsi Singkat')->rows(3)->required(), RichEditor::make('isi')->label('Isi Berita')->required()]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([ImageColumn::make('gambar')->label('Gambar')->square(), TextColumn::make('judul')->label('Judul')->searchable()->limit(30), TextColumn::make('tanggal_pembuatan')->label('Tanggal')->date(), TextColumn::make('deskripsi')->label('Deskripsi')->limit(50)])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
