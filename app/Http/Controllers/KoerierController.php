<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koerierscooter;

class KoerierController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'textarea' => 'required',
        ]);

        $scooterValues = [1, 2, 3, 4];
        $randomScooter = $scooterValues[array_rand($scooterValues)];

        Koerierscooter::create([
            'scooter' => $randomScooter,
            'schade' => $request->input('textarea'),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
