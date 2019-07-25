<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('history_id');
            $table->unsignedSmallInteger('round_no')->comment('游戏圈数编号');
            $table->unsignedInteger('order')->comment('局数');
            $table->unsignedSmallInteger('master')->comment('庄家id');
            $table->unsignedInteger('player_id0')->comment('玩家0的 id');
            $table->unsignedInteger('player_id1')->comment('玩家1的 id');
            $table->unsignedInteger('player_id2')->comment('玩家2的 id');
            $table->unsignedInteger('player_id3')->comment('玩家3的 id');
            $table->unsignedInteger('player_score0')->comment('玩家0的游戏分数')->default(0);
            $table->unsignedInteger('player_score1')->comment('玩家1的游戏分数')->default(0);
            $table->unsignedInteger('player_score2')->comment('玩家2的游戏分数')->default(0);
            $table->unsignedInteger('player_score3')->comment('玩家3的游戏分数')->default(0);
            $table->text('operations')->comment('游戏操作记录');
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
        Schema::dropIfExists('history_logs');
    }
}
