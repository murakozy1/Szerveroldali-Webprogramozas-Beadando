<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Place;

class EditController extends Controller
{
    public function characterDetails($characterId){
        $character = Character::findOrFail($characterId);
        if ($character->user_id !== auth()->id()){
            abort(403, 'Unauthorized');
        }
        return view('edit', ['character'=>$character]);
    }

    public function characterUpdate(Request $request, $characterId){
        $character = Character::findOrFail($characterId);
        $request->validate([
            'name'=>'required',
            'defence'=>'required|numeric|min:0|max:3',
            'strength'=>'required|numeric|min:0|max:20',
            'accuracy'=>'required|numeric|min:0|max:20',
            'magic'=>'required|numeric|min:0|max:20'

        ]);
        $sum = $request->defence + $request->strength + $request->accuracy + $request->magic;
        if ($sum > 20){
            return redirect()->back()->withErrors(['sum'=>'The sum of the attributes of the character can not exceed 20!'])->withInput();
        }
        $character->update($request->all());
        return redirect()->route('edit', $characterId)->with('success', 'Character updated successfully!');
    }
}
