<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class NewsLetterController extends Controller
{
    public function sendNewsletter(Request $request)
{
    $request->validate([
        'newsletter_id' => 'required|exists:newsletters,id',
    ]);

    $newsletter = Newsletter::findOrFail($request->newsletter_id);
    $subscribers = Subscriber::pluck('email')->toArray();

    foreach ($subscribers as $email) {
        Mail::to($email)->send(new NewsletterMail($newsletter));
    }

    // Additional logic for logging or updating newsletter status

    return redirect()->back()->with('success', 'Newsletter sent successfully.');
}
}
