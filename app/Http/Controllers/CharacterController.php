<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Contest;

class CharacterController extends Controller
{
    public function characterCount(){
        return sizeof(Character::pluck('id')->toArray());
    }

    public function contestCount(){
        return sizeof(Contest::pluck('id')->toArray());
    }
}
