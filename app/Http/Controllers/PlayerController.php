<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    public function getInfo(Request $request)
    {
        return $request->user();
    }

    public function checkToken(Request $request)
    {
        dd($request->user());
    }

    public function canReconnect(Request $request)
    {
        $player_id = $request->user()->id;
        $result = DB::select("select * from rooms where (player_id0 = $player_id or player_id1 = $player_id or player_id2 = $player_id or player_id3 = $player_id) and status = 'GAMING';");
        return response()->json([
            'room_count' => count($result),
            'room_no' => count($result) == 0 ? "" : $result[0]->room_no
        ]);
    }
}
