<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class createMessage extends Controller
{
    public function form()
    {
        return view('create');
    }

    public function send(Request $request)
    {
        $request->validate([
            'to' => 'required|max:255',
          ]);

          Mail::to($request->to)
            ->queue(new SendMessage(['subject' => $request->subject, 'message' => $request->message]));

            return redirect('/inbox');
    }


}
