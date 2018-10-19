<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CompanyRegistration;
use App\Registration;

class ManageStudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('programme')) {
            $users = User::role('student')->search($request->programme, null, true, true)->get();
        } else {
            $users = User::role('student')->search($request->input('query') ?? '')->get();
        }

        return view('admin.student.index', [
            'users' => $users
        ]);
    }

    public function edit(User $student)
    {
        return view('admin.student.edit', [
            'user' => $student
        ]);
    }
    
    public function flip(CompanyRegistration $pivot)
    {
        $pivot->status = $pivot->status == 1 ? 0 : 1;
        $pivot->save();

        return back()->with('flash', 'Kemaskini berjaya!');
    }

    public function quota(Registration $registration, Request $request)
    {
        $request->validate([
            'quota' => 'required|integer'
        ]);

        $registration->quota = $request->quota;
        $registration->save();

        return back()->with('flash', 'Kemaskini berjaya!');
    }
}
