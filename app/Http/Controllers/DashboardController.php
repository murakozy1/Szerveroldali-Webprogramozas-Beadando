<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    
    public function listCharacters(){
        $userId = auth()->id();
        $characters = Character::where('user_id', $userId)->get();
        return view('dashboard', ['characters'=>$characters]);
    }

}
