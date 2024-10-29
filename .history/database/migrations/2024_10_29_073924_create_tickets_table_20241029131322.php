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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('lead_id')->nullable();
            $table->unsignedBigInteger('ticket_category_id')->nullable();
            $table->unsignedBigInteger('ticket_sub_category_id')->nullable();
            $table->unsignedBigInteger('call_id')->nullable();
            $table->json('tags')->nullable();
            $table->unsignedBigInteger('outlet_id')->nullable();
            $table->boolean('crm')->default(0);
            $table->string('order_ref')->nullable();
            $table->unsignedBigInteger('ticket_status_id')->nullable();
            $table->timestamp('due_at')->nullable();
            $table->string('bill_no')->nullable();
            $table->boolean('is_synced')->default(0);
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
        Schema::dropIfExists('tickets');
    }
};
