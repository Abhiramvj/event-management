<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function services() {
        return view('services');
    }
    public function gallery() {
        return view('gallery');
    }
    public function blogs() {
        return view('blogs');
    }
    public function contact() {
        return view('contact');
    }
}
