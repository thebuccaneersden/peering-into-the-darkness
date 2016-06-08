<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healthcheck', function (Blueprint $table) {
            $table->increments('id');
            $table->string('integration_id');
            $table->string('status')->enum('choices', ['healthy', 'unstable', 'gone']);
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
        Schema::drop('healthcheck');
    }
}
