<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Tracking;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $services = Service::all();
        $selectedPlanId = $request->input('service');

        $selectedPlan = Service::find($selectedPlanId);

        return view('payment', compact('services', 'selectedPlan'));
    }

    public function process(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'card_number' => 'required|string|max:19', // 16 digits + 3 dashes
            'expiry_date' => 'required|string|max:5', // MM/YY
            'cvc' => 'required|string|max:3',
            'service' => 'required|exists:services,id',
        ]);

        $payment = Payment::create([
            'name' => $validatedData['name'],
            'email_address' => $validatedData['email'],
            'address' => $validatedData['address'],
            'card_number' => $validatedData['card_number'],
            'expiry_date' => $validatedData['expiry_date'],
            'cvc' => $validatedData['cvc'],
            'selected_plan' => $validatedData['service'],
            'service_id' => $validatedData['service'],
        ]);

        // MEMBUAT TRACK NUMBER
        $trackingNumber = strtoupper(substr(md5(time()), 0, 10));
        $tracking = Tracking::create([
            'tracking_number' => $trackingNumber,
            'status' => 'processing',
            'payment_id' => $payment->payment_id,
        ]);

        return redirect()->route('tracking')->with('trackingNumber', $trackingNumber);
    }
}
