<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showCount(){
        $characterController = new CharacterController();
        $count = $characterController->characterCount();
        $contestCount = $characterController->contestCount();
        return view('welcome', ['count'=>$count, 
                                'contestCount'=>$contestCount]);
        //return view('welcome', compact('count','contestCount')
    }
}
