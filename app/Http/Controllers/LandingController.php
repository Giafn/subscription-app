<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $allPlans = Plan::all();
        return view('welcome', compact('allPlans'));
    }
}
