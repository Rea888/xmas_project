<?php

namespace App\Http\Controllers;

use App\Mail\LetterSent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SolutionController extends Controller
{

    public function getSolution(Request $request)
    {
        $solutionInput = $request->input('solution');
        $userInput = $request->input('name');
        $emailInput = $request->input('email');

        $solution = DB::table('solutioms')->where([
            ['solution', '=', $solutionInput]])->first();
        $user = DB::table('users')->where([
            ['name', '=', $userInput], ['email', '=', $emailInput]])->first();

        if (null !== $user && null !== $solution) {
            //Mail::to($request->user())->send(new LetterSent());
            return redirect()->route('keep_going');
        } else {
            return view('nice_job');
        }
    }

}
