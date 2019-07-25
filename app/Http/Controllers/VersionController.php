<?php

namespace App\Http\Controllers;

use App\VersionLog;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function getLatestVersion(Request $request)
    {
        $record = VersionLog::where('operation_system', $request->input('os'))
            ->orderBy('created_at', 'desc')->first();
        return response()->json([
            'version' => is_null($record) ? null : $record->version,
            'url' => is_null($record) ? null : $record->url
        ]);
    }
}
