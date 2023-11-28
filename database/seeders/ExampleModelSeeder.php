<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExampleModelSeeder extends Seeder
{
    private $tableName = 'example_models';

    private $data = [
        [
            'col1' => 1,
            'col2' => 'Column Data 1',
            'col3' => 1,
        ],
        [
            'col1' => 2,
            'col2' => 'Column Data 2',
            'col3' => 0,
        ],
        [
            'col1' => 3,
            'col2' => 'Column Data 3',
            'col3' => 1,
        ],
        [
            'col1' => 4,
            'col2' => 'Column Data 4',
            'col3' => 0,
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table($this->tableName)->insert($this->data);
    }
}
