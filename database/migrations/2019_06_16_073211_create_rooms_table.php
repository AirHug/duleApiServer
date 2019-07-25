<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('game_type', 10)->comment('游戏类型');
            $table->unsignedInteger('room_no')->comment('房间编号');
            $table->string('rule')->comment('游戏规则');
            $table->unsignedInteger('player_id0')->nullable()->comment('玩家0的 id');
            $table->unsignedInteger('player_id1')->nullable()->comment('玩家1的 id');
            $table->unsignedInteger('player_id2')->nullable()->comment('玩家2的 id');
            $table->unsignedInteger('player_id3')->nullable()->comment('玩家3的 id');
            $table->enum('status', ['CLOSED', 'WAITING', 'GAMING'])->default('WAITING');
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
        Schema::dropIfExists('rooms');
    }
}
