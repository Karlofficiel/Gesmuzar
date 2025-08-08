<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use App\Models\user;

class UsermessageController extends Controller
{
     public function index_message(){

            return view('index');       
     }

     
     public function reply(Request $request){

        $request->validate([
                'receiver_name' => 'required|string|exists:user,name',
                'message'=>'required|string',
        ]);

        $receiver = User::where('name', $request->receiver_name)->first();
        

        $message = Message::create([
                'sender_id' => auth()->id(), // id de l'utilisateur connecter
                'receiver_id' => $receiver->id,
                'message' => $request->message,
        ]);

        return redirect('/index')->with('success', 'Message envoyé');
     }

}
