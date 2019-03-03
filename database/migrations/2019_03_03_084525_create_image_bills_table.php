<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('image_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('file_name');
            $table->string('ulr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_bills');
    }
}
