<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('delagate')->nullable(true);
            $table->string('tel')->nullable(true);
            $table->string('email')->unique()->nullable(true); //重複しない
            $table->timestamp('email_verified_at');
            $table->integer('status_id')->nullable(false);
            $table->integer('user_id')->nullable(true);
            $table->rememberToken();
            $table->datetime('created_at')->nullable(true);
            $table->datetime('updated_at')->nullable(true);
        });
    }
    //      $table->foreign('status_id')->references('id')->on('statuses');
    //      $table->foreign('user_id')->references('id')->on('users');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
