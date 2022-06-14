<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestMiddleware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_middleware', function (Blueprint $table) {
            $table->bigIncrements('TM_ID');
            $table->string('TM_ROUTE', 20);
            $table->timestamp('TM_TIME')->useCurrent();   
            $table->timestamp('Created_at')->useCurrent();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_middleware');
    }
}
