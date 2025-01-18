<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Employee;

class StrategicController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('strategic.index', compact('teams'));
    }

    public function hireEmployee(Request $request)
    {
        $employee = Employee::create($request->all());
        return back()->with('success', 'Employee hired successfully!');
    }

    public function trainEmployee(Request $request)
    {
        $employee = Employee::find($request->employee_id);
        $employee->update([
            'name' => $request->name,
            'cost' => $request->cost
        ]);

        return back()->with('success', 'Employee trained successfully!');
    }
}
