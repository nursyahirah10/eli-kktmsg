<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'profile_picture' => 'nullable|image|file',
            'user.ic' => 'nullable|unique:users,ic,'. $user->id,
            'user.matric' => 'required|unique:users,matric,'. $user->id,
            'user.email' => 'required|unique:users,email,'. $user->id,
        ]);

        $user->update($request->user);
        $user->address()->delete();
        $user->address()->updateOrCreate($request->address);

        if ($request->hasFile('profile_picture')) {
            $path = $request->profile_picture->store('profile_pictures', 'public');

            $user->update(['profile_picture' => $path]);
        }

        return back()->with('flash', 'Kemaskini berjaya!');
    }
}
