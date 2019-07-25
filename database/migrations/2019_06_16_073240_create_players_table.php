<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('open_id', 128)->comment('微信openid')->nullable();
            $table->string('avatar', 256)->comment('头像')->nullable();
            $table->unsignedInteger('gold')->comment('金')->nullable();
            $table->string('nickname', 32)->comment('昵称')->nullable();
            $table->string('mobile', 11)->comment('手机号码')->unique();
            $table->boolean('is_cheater')->comment('作弊账户')->default(false);
            $table->string('password');
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
        Schema::dropIfExists('players');
    }
}
