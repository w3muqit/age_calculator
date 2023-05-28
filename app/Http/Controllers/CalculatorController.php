<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {

        $request->validate([
            'birthday'=>'required',
        ]);

        $birthday = $request->input('birthday');
        $today = $request->input('today');

        $age = $this->calculateAge($birthday, $today);

        return view('calculator', ['age' => $age]);
    }

    private function calculateAge($birthday, $today)
    {
        $birthDate = \DateTime::createFromFormat('Y-m-d', $birthday);
        $currentDate = \DateTime::createFromFormat('Y-m-d', $today);

        $yearsDiff = $currentDate->diff($birthDate)->y;
        $monthsDiff = $currentDate->diff($birthDate)->m;
        $daysDiff = $currentDate->diff($birthDate)->d;

        $age = $yearsDiff . ' years, ' . $monthsDiff . ' months, and ' . $daysDiff . ' days';

        return $age;
    }
}
