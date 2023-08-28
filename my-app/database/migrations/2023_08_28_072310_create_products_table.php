<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // php artisan:migrate   => migrations(up)
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();                 // primary key of products
            $table->string('name')->nullable();
            $table->float('price')->default(0);
            $table->string('availability');
            $table->foreignId('category_id'); // foreign key (category_id )
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

// migrate:fresh(drop- run)      ==   refresh (drop-run) down - up
// migrate:rollback --step=1

    /**
     * Reverse the migrations.
     */

     // rollbck
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
