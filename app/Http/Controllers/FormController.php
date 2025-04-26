<?php

namespace App\Http\Controllers;
use App\Models\ContactInfo;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contactFormSubmit(Request $request)
    {
        // Validate the form data
        // Validate the form inputs
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone' => 'nullable|string',
        //     'subject' => 'required|string|max:255',
        //     'description' => 'required|string',
        // ]);
        // dd($request->all());
        $query = new ContactInfo();
        $query->name = $request->name;
        $query->phone = $request->phone;
        $query->subject = $request->subject;
        $query->description = $request->description;
        $query->save();

        // Prepare the email data
        // $emailContent = '
        //     <h1>Contact Information</h1>
        //     <p><strong>Name:</strong> ' . $validated['name'] . '</p>
        //     <p><strong>Email:</strong> ' . $validated['email'] . '</p>
        //     <p><strong>Phone:</strong> ' . $validated['phone'] . '</p>
        //     <p><strong>Message:</strong> ' . $validated['description'] . '</p>
        // ';

        // // Send the email
        // Mail::send([], [], function ($message) use ($validated, $emailContent) {
        //     $message->to('akbar.cse47@gmail.com')
        //         ->subject($validated['subject'])
        //         ->html($emailContent); // Directly pass the HTML string here
        // });

        // Redirect back or show a success message
        // return redirect()->back()->with('success', 'Your message has been sent successfully!');
        // return view('frontend.contacts.thank');
        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
