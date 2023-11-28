<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExampleModelResource\Pages;
use App\Filament\Resources\ExampleModelResource\RelationManagers;
use App\Models\ExampleModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExampleModelResource extends Resource
{
    protected static ?string $model = ExampleModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('col1'),
                Forms\Components\TextInput::make('col2')
                    ->maxLength(255),
                Forms\Components\Toggle::make('col3'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('col1')
                    ->grow(false),
                Tables\Columns\TextColumn::make('col2')
                    ->searchable(),
                Tables\Columns\IconColumn::make('col3')
                    ->boolean()
                    ->grow(false),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListExampleModels::route('/'),
            'create' => Pages\CreateExampleModel::route('/create'),
            'edit' => Pages\EditExampleModel::route('/{record}/edit'),
        ];
    }
}
