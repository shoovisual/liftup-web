<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Send email to the specified address
            Mail::to('assad@liftup.co.tz')->send(new ContactFormMail($validatedData));

            // Log the submission for record keeping
            Log::info('Contact form submission', [
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'company' => $validatedData['company'] ?? 'Not provided',
                'service' => $validatedData['service']
            ]);

            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');

        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form email failed', [
                'error' => $e->getMessage(),
                'data' => $validatedData
            ]);

            return redirect()->back()->with('error', 'Sorry, there was an issue sending your message. Please try again or contact us directly.');
        }
    }
}
