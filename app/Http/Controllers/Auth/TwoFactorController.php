<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Carbon\Carbon;

class TwoFactorController extends Controller
{
    public function show()
    {
        return Inertia::render('Auth/TwoFactor');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|string|size:6',
        ]);

        $user = Auth::user();

        if (!$user->verifyTwoFactorCode($request->code)) {
            return back()->withErrors([
                'code' => 'The provided code is invalid or has expired.',
            ]);
        }

        return redirect()->intended(route('dashboard'));
    }

    public function resend()
    {
        $user = Auth::user();
        $user->generateTwoFactorCode();
        $user->notify(new TwoFactorCode($user->two_factor_code));

        return back()->with('status', 'A new verification code has been sent to your email.');
    }
}
