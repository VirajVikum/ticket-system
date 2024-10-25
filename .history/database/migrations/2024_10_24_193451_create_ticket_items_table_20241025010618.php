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
            $table->id(); 
            $table->string('topic');
            $table->text('description')->nullable();
            $table->integer('lead_id')->constrained()->onDelete('cascade');
            $table->integer('ticket_category_id')->constrained()->onDelete('cascade');
            $table->integer('ticket_sub_category_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('call_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('tags')->nullable();
            $table->integer('outlet_id')->nullable()->constrained()->onDelete('cascade');
            $table->boolean('crm')->default(false);
            $table->string('order_ref')->nullable();
            $table->integer('ticket_status_id')->constrained()->onDelete('cascade');
            $table->timestamp('due_at')->nullable();
            $table->string('bill_no')->nullable();
            $table->boolean('is_synced')->default(false);
            $table->timestamp('synced_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
