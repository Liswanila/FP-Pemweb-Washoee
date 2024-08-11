<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseTestController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        return view('dbtest', ['tables' => $tables]);
    }
}
