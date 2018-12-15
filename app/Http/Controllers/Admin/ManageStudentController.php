<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\CompanyRegistration;
use App\Registration;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filter;
use App\Filters\BySession;

class ManageStudentController extends Controller
{
    public function index(Request $request)
    {
        $users = QueryBuilder::for(User::class)
        ->allowedFilters(['programme', Filter::custom('session', BySession::class)])
        ->role('student')
        ->search($request->input('query') ?? '')
        ->get();

        return view('admin.student.index', [
            'users' => $users,
            'sessions' => Registration::groupBy('session')->get()
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

    public function destroy(User $student)
    {
        $student->address()->delete();
        $student->registration()->delete();
        $student->delete();

        return back()->with('flash', 'Berjaya dibuang!');
    }
}
