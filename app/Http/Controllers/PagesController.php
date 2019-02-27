<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getAbout() {
        return view('about');
    }

    public function getBackend() {
        return view('backend');
    }

    public function getContact() {
        return view('contact');
    }

    public function getFrontend() {
        return view('frontend');
    }

    public function getMessageSent() {
        return view('message-sent');
    }
}
