<?php

namespace App\Http\Controllers;

use App\Participant;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(Request $request){
        $user = Participant::create($request->all());
        $track =  $request->file('track')->store('public/'.$user->id.'/track');
        $photo = $request->file('photo')->store('public/'.$user->id.'/photo');
        $user->track = $track;
        $user->photo = $photo;
        $user->save();
        return view('participants');

    }
}
