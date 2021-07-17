<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function view()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('teacher.profile.view', compact('user'));
    }

    public function passwordView()
    {
        return view('teacher.profile.edit-password');
    }

    public function passwordUpdate(Request $request)
    {
        if (Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])) {

            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();

            return redirect()->route('student.profiles.view')->with('success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('error', 'Sorry! your current password does not match');
        }
    }


}
