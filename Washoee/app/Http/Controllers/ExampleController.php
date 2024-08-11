<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function checkDatabaseConnection()
    {
        if (DB::connection()->getPdo()) {
            echo "Successfully connected to DB and DB name is " . DB::connection()->getDatabaseName();
        } else {
            echo "Failed to connect to DB";
        }
    }
}
