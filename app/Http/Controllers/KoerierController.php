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

    $scooterValues = [1, 2];
    $randomScooter = $scooterValues[array_rand($scooterValues)];

    $data = [
        'scooter' => $randomScooter,
        'schade' => $request->input('textarea'),
        'inchecken' => $request->has('incheckenRadio'),
        'uitchecken' => !$request->has('incheckenRadio'),
    ];

    Koerierscooter::create($data);

    return redirect()->back()->with('success', 'Form submitted successfully!');
}
}
