<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Facility;
use App\Models\Customer;

class MarketingController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('marketing.index', compact('teams'));
    }

    public function upgradeFacility(Request $request)
    {
        Facility::create($request->all());
        return back()->with('success', 'Facility upgraded successfully!');
    }

    public function reachCustomer(Request $request)
    {
        Customer::create($request->all());
        return back()->with('success', 'Customer reached successfully!');
    }
}
