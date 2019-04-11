<?php

namespace App\Http\Controllers;

use App\Mail\MailSent;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    //$request->input('name');
    public function submit(Request $request) {
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required',
           'message' => 'required'
        ]);

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

    //    Mail::to($request->user())->send(new MailSent($request));
//        Mail::send([], [], function ($message) {
//            $message->to('bogacz-agata@wp.pl')->subject('dziala')->setBody('dzialaj');
//        });

//        Mail::raw("dziala?", function($msg) {
//            $msg->to('bogacz-agata@wp.pl')->subject('subj');
//        });

        /*
         return $this->view('emails.email')
            ->to($this->content['to'], $this->content['to_name'])
            ->from($this->content['from'], $this->content['from_name'])
            ->subject($this->content['subject'])
            ->with(['content' => $this->content]);
        */

        Mail::send(new \App\Mail\MailSent([
            'to' => 'bogacz-agata@wp.pl',//'bogacz-agata@wp.pl',
            'to_name' => 'Agata',
            'from' => $request->input('email'),
            'from_name' => $request->input('name'),
            'subject' => 'Portfolio',
            'content' => $request->body
        ]));
        //var_dump();

        return redirect('/message-sent')->with('success', 'Messgae Sent');
    }
}
