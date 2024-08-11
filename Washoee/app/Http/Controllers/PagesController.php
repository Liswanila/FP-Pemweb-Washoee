<?php

// app/Http/Controllers/PagesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function pricing()
    {
        // Logic for the Pricing page
        return view('pages.pricing');
    }

    public function team()
    {
        // Logic for the Team page
        return view('pages.team');
    }

    public function faqs()
    {
        // Logic for the FAQs page
        return view('pages.faqs');
    }
}

