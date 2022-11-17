<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolutiomController extends Controller
{

    public function getSolution(Request $request)
    {
        $solution = $request->input('solution');
        $user = $request->input('name');
        $email = $request->input('email');
        $checkSolution = DB::table('solutioms')->where([
            ['solution', '=', $solution]])->get();
        $checkUser = DB::table('users')->where([
            ['name', '=', $user]])->get();
        $checkEmail = DB::table('users')->where([
            ['email', '=', $email]])->get();
        if ((!$checkUser->isEmpty()) && (!$checkEmail->isEmpty()) && (!$checkSolution->isEmpty())) {
         return redirect()->route('keep_going');
        } else {
            return view('nice_job');
        }
    }
}
