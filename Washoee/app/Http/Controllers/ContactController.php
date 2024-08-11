<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // You can fetch any necessary data for your Contact page here
        return view('contact');
    }
}
