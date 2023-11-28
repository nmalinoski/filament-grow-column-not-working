<?php

namespace App\Filament\Resources\ExampleModelResource\Pages;

use App\Filament\Resources\ExampleModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExampleModels extends ListRecords
{
    protected static string $resource = ExampleModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
