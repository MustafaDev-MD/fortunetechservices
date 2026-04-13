<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Contact::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\+?[0-9]{7,15}$/',
            'budget' => 'required',
            'company' => 'required|string|max:255',
            'solution' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        // Send Email
        // Mail::raw("New Contact Message from {$contact->name}", function ($mail) use ($contact) {
        //     $mail->to('mustafadeveloper57@gmail.com')
        //          ->subject('New Contact Form Submission')
        //          ->replyTo($contact->email);
        // });

        Mail::to('connect@fortunetechservices.com')->send(new ContactMail($contact));

        return response()->json(['message' => 'Form Submitted successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Contact::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return response()->json(['message' => 'Updated successfully']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
