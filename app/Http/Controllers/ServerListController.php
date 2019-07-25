<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServerListController extends Controller
{
    protected $servers = [
        'yhwh' => 'http://localhost:8765/yhwh'
    ];

    public function getServer()
    {
        return response()->json($this->servers);
    }
}
