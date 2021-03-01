<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // qui i metodi per un normale visitatore
    public function index()
    {
      return view('guests.index');
    }

    public function about()
    {
      return view('guests.about');
    }

    public function contacts()
    {
      return view('guests.contacts');
    }
}
