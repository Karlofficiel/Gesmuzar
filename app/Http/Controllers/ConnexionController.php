<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\user;


class ConnexionController extends Controller
{
    public function formulaire(){

        return view('connexion');
    }

    public function traitement(Request $request){

        $name = $request->name;
        $password = $request->password;

        $credentials = ['name' => $name , 'password' => $password ];

            if(Auth::attempt($credentials)){

                    $request->session()->regenerate();

                     $user = Auth::user();
                     
                    if($user->id == 1) {
                        return redirect ('/Admin-index');
                    }else {
                        return redirect ('/index');
                    }

            }else{
                
                return back()->withErrors(['Echec' => 'Les identifiants sont incorrects ou compte supprimer.']);
            }
        }


}
