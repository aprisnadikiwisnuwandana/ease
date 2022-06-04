<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MeditationController extends Controller
{

    public function displayMeditationPage()
    {
        $meditation = DB::table('meditation')->get();

        return view('meditation', ['meditation' => $meditation]);
    }

    public function searchMeditation(Request $request)
    {
        $meditation = DB::table('meditation')->where('name', 'like', '%' . $request->name . '%')->get();
        return view('meditation', ['meditation' => $meditation]);
    }
}
