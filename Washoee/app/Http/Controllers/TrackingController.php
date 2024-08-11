<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;

class TrackingController extends Controller
{
    public function index()
    {
        return view('tracking');
    }

    public function search(Request $request)
    {
        $trackingNumber = $request->input('trackingNumber');

        // Fetch the tracking record from the database
        $tracking = Tracking::where('tracking_number', $trackingNumber)->first();

        if ($tracking) {
            // Get the associated payment details
            $payment = $tracking->payment;

            // Create a detailed tracking info string
            $trackingInfo = "Tracking Number: " . $tracking->tracking_number . "<br>" .
                            "Status: " . $tracking->status . "<br>" .
                            "Name: " . $payment->name . "<br>" .
                            "Email: " . $payment->email_address . "<br>" .
                            "Address: " . $payment->address . "<br>" .
                            "Selected Plan: " . $payment->selected_plan;

            return view('tracking', ['trackingInfo' => $trackingInfo]);
        } else {
            $error = 'Tracking number not found';
            return view('tracking', compact('error'));
        }
    }
}
