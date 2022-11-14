<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ForbidAccessBeforeChristmas
{
    //isItXmasYet private function return boolean
    //DateTime class usage
    //compare two DateTime class

    public function handle(Request $request, Closure $next)
    {
        if (!$this->isItXmasYet()){
            return redirect('/');
        }else {
            return $next($request);
        }
    }

    private function isItXmasYet(): bool
    {
        if(App::environment() !== 'prod'){
            return true;
        }
        $currentTime = new \DateTime();
        $xmasTime = new \DateTime('2022-12-24 20:30');
        if ($currentTime < $xmasTime) {
            return false;
        }else{
            return true;
        }
    }

}
