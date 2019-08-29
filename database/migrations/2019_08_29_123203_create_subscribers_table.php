<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('subscribe_user_id')->index();
            $table->integer('subscribe_plan_id')->index();
            $table->integer('subscribe_download_limit');
            $table->integer('subscribe_download_counter');
            $table->integer('subscribe_payment_amount');
            $table->dateTime('subscribe_payment_created_at')->index();
            $table->dateTime('subscribe_payment_expired_at')->index();
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
        Schema::dropIfExists('subscribers');
    }
}
