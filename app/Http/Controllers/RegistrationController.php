<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Registration;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index(Request $request)
    {
        return view('registration', [
            'user' => Auth::user()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric|max:10',
            'session' => 'required|numeric',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'period' => 'required|numeric',
        ]);

        $startAt = Carbon::parse($request->start_at)->toDateTimeString();
        $endAt = Carbon::parse($request->end_at)->toDateTimeString();

        $data = array_merge($request->except('_token'), [
            'start_at' => $startAt,
            'end_at' => $endAt,
            'status' => 'registered'
        ]);

        $user = Auth::user();

        $user->registration()->create($data);

        return back()->with('flash', 'Pendaftaran berjaya!');
    }

    public function remove(Request $request)
    {
        $user = Auth::user();

        $user->registration()->delete();

        return back()->withFlash('Berjaya dibuang');
    }
}
