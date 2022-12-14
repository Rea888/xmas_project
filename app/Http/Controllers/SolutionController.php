<?php

namespace App\Http\Controllers;

use App\Mail\LetterSent;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SolutionController extends Controller
{
    private const MY_EMAIL = 'm.rakhely.viktoria@gmail.com';
    private const INPUT_KEY_SOLUTION = 'solution';
    private const INPUT_KEY_NAME = 'name';
    private const INPUT_KEY_EMAIL = 'email';


    public function getSolution(Request $request)
    {
        $solutionInput = $request->input(self::INPUT_KEY_SOLUTION);
        $userInput = $request->input(self::INPUT_KEY_NAME);
        $emailInput = $request->input(self::INPUT_KEY_EMAIL);

        $solution = $this->getSolutionFromDb($solutionInput);
        $user = $this->getUser($userInput, $emailInput);


        if (null !== $user && null !== $solution) {
            Mail::raw('https://xmas.vikicica.hu/congratulation', function ($message) {
                $message->from(self::MY_EMAIL);
                $message->to('viki@csubee.hu');
                $message->subject('solution');
            });
            return redirect()->route('keep_going');
        } else {
            return view('nice_job');
        }

    }

    public function getSolutionFromDb($solutionInput)
    {
        return DB::table('solutioms')->where([
            ['solution', '=', $solutionInput]])->first();
    }


    public function getUser($userInput, $emailInput)
    {
        return DB::table('users')->where([
            ['name', '=', $userInput], ['email', '=', $emailInput]])->first();
    }


}
