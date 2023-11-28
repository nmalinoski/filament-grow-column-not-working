<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('example_models', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('col1')->nullable();
            $table->string('col2')->nullable();
            $table->tinyInteger('col3')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'ExampleModelSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('example_models');
    }
};
