<?php

namespace App\Filament\Resources\ExampleModelResource\Pages;

use App\Filament\Resources\ExampleModelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExampleModel extends CreateRecord
{
    protected static string $resource = ExampleModelResource::class;
}
