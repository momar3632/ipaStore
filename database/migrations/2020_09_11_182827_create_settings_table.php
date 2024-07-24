<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title")->nullable();
            $table->text("logo_store")->nullable();
            $table->text("app_bundle")->nullable();
            $table->text("description")->nullable();
            $table->text("keywords")->nullable();
            $table->text("conditions_order")->nullable();
            $table->integer("status_store")->default(0);
            $table->integer("status_orders")->default(0);
            $table->string("price_order")->default(0);
            $table->string("one_signal_app_key")->nullable();
            $table->string("one_signal_app_id")->nullable();
            $table->string("twitter_account")->nullable();
            $table->string("snapchat_account")->nullable();
            $table->string("telegram_account")->nullable();
            $table->string("whatsapp_account")->nullable();
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
        Schema::dropIfExists('settings');
    }
}
