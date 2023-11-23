<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('cate_id')
                ->relationship('category', 'name')
                ->preload(),
                Forms\Components\TextInput::make('name')->autofocus()->required(),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\TextInput::make('small_description'),
                Forms\Components\TextInput::make('description'),
                Forms\Components\TextInput::make('popular'),
                Forms\Components\TextInput::make('original_price'),
                Forms\Components\TextInput::make('selling_price'),
                Forms\Components\TextInput::make('qty'),
                Forms\Components\TextInput::make('tax'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('trending'),
                Forms\Components\TextInput::make('meta_title'),
                Forms\Components\TextInput::make('meta_keywords'),
                Forms\Components\TextInput::make('meta_description'),
                Forms\Components\FileUpload::make('image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('original_price'),
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
