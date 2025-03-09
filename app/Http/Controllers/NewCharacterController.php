<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\User;
use Illuminate\Http\Request;


class NewCharacterController extends Controller
{
    public function characterMakeView($userId){
        $isAdmin = User::find($userId)->admin;
        return view('newcharacter', ['userId'=>$userId, 'isAdmin'=>$isAdmin]);
    }

    public function characterMake(Request $request){
        //$character = Character::findOrFail($characterId);
        $userId = auth()->id();
        $isAdmin = User::find($userId)->admin;
        $data = $request->validate([
            'name'=>'required',
            'enemy'=> $isAdmin ? 'required|numeric|min:0|max:1' : '',
            'defence'=>'required|numeric|min:0|max:3',
            'strength'=>'required|numeric|min:0|max:20',
            'accuracy'=>'required|numeric|min:0|max:20',
            'magic'=>'required|numeric|min:0|max:20'

        ]);
        $sum = $request->defence + $request->strength + $request->accuracy + $request->magic;
        if ($sum > 20){
            return redirect()->back()->withErrors(['sum'=>'The sum of the attributes of the character can not exceed 20!'])->withInput();
        }
        $character = new Character($data);
        $character->user_id = $userId;
        if ($isAdmin === 0){
            $character->enemy = 0;
        }
        $character->save();
        return redirect()->route('new')->with('success', 'Character updated successfully!');
    }
}
