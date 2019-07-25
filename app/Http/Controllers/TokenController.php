<?php

namespace App\Http\Controllers;

use App\Player;
use App\Room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{

    private $login_fail = [
        'code' => 100,
        'message' => '用户和密码不匹配！'
    ];

    private $login_success = [
        'code' => 200,
        'message' => '登陆成功！'
    ];

    public function login(Request $request)
    {
        $user = User::where('account', $request->input('account'))->first();
        if (is_null($user)) {
            return response()->json($this->login_fail);
        }
        if (Hash::check($request->input('password'), $user->password)) {
            return response()->json(array_add($this->login_success, 'token', $user->createToken('admin')->accessToken));
        }
        return response()->json($this->login_fail);
    }

    public function playerLogin(Request $request)
    {
        $player = Player::where('mobile', $request->input('mobile'))->first();
        if (is_null($player)) {
            return response()->json($this->login_fail);
        }
        return response()->json(array_add($this->login_success, 'token', $player->createToken('game')->accessToken));

    }

    public function test(Request $request)
    {
        $player_id = 10002;
        $result = DB::select("select * from rooms where (player_id0 = $player_id or player_id1 = $player_id or player_id2 = $player_id or player_id3 = $player_id) and status = 'GAMING';");
        return response()->json([
            'room_count' => count($result),
            'room_no' => count($result) == 0 ? "" : $result[0]->room_no
        ]);
    }
}
