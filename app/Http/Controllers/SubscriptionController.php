<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        dump('Processing...');
    }

    public function store()
    {
        // 
    }

    public function approval()
    {
        // 
    }

    public function cancelled()
    {
        // 
    }
}
