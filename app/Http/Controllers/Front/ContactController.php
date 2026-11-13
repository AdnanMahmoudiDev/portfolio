<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    /**
     * Store an incoming contact message.
     */
    public function store(StoreContactRequest $request): RedirectResponse
    {
        ContactMessage::create([
            'name'       => $request->validated('name'),
            'email'      => $request->validated('email'),
            'subject'    => $request->validated('subject'),
            'message'    => $request->validated('message'),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()
            ->to(url()->previous() . '#contact')
            ->with('success', 'Thank you! Your message has been received. I will review it shortly.');
    }
}
