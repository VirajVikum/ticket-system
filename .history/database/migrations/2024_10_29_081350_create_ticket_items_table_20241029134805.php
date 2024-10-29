<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_items', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->unsignedBigInteger('ticket_id')->nullable(); // Foreign key reference to tickets
            $table->unsignedBigInteger('item_id')->nullable(); // Foreign key reference to items
            $table->string('barcode')->nullable(); // Barcode, nullable
            $table->unsignedBigInteger('portion_id')->nullable(); // Foreign key reference to portions, nullable
            $table->integer('qty')->nullable(); // Quantity
            $table->decimal('unit_price', 10, 2)->nullable(); // Unit price with precision
            $table->decimal('line_total', 10, 2)->nullable(); // Line total with precision
            $table->unsignedBigInteger('parent_item_id')->nullable(); // Nullable parent item ID
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_items');
    }
};
