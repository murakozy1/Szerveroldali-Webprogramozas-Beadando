<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailsController extends Controller
{
    public function showDetails($characterId){
        $character = Character::find($characterId);
        if ($character->user_id !== auth()->id()){
            abort(403, 'Unauthorized');
        }
        $contests = $character->contests;
        $enemyNames = [];
        $placeNames = [];
        foreach($contests as $contest){
            $enemyNames[] = Character::where('id', $contest->enemies[0]->pivot->enemy_id)->pluck('name')->first();
            //$enemyNames[] = Character::where('id', $contest->characters[0])->pluck('name')->first();
            $placeNames[] = Place::where('id', $contest->place_id)->pluck('name')->first();
        }
        return view('details', ['character'=>$character, 'contests'=>$contests, 'enemyNames'=>$enemyNames, 'placeNames'=>$placeNames]);
    }
}
