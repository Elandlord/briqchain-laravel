<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email_address');
            $table->string('ip_address');
            $table->boolean('opt_in');
            $table->boolean('opt_in_type');
            $table->text('terminology');

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
        Schema::dropIfExists('email_subscriptions');
    }
}
