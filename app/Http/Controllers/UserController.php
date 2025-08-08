<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\produit;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function afficherpersonne()
    {
        $user = Auth::user();
        return view('mesinformations', compact('user'));

    }
              
    
    public function  allvoiture()
    {
        $produit = Produit::all();
        return view('stocks', compact('produit'));
    } 

    public function affichenom(){

          $user =Auth::user();
          return view('index', compact('user'));
          
    }
    
      public function ProfilUser(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'old_password'=>'required',
            'new_password'=>'required',
    ]);
    
    $user = User::find(Auth::user()->id);

        $checkpassword =Hash::check($request->input('old_password'), Auth::user()->password);
        
        if($checkpassword == false){
            return redirect()->back()->with('Error' ,'Mot De Passe incorrect');
        }
        
        if( $request->input('new_password') != $request->input('confirm_new_password'))
            return redirect()->back()->with('Error' ,'  Les mots De passe ne coincident pas');
            
        $user->password = Hash::make($request->input('new_password'));
        
            $user->name = $request->input('name');
            $user->email = $request->input('email');

        $user->update();
        return redirect('/index');
      }

    public function search(Request $request)
    {
        $search = $request->input('search'); // Récupère l'entrée utilisateur

        // Vérifie si un terme de recherche est fourni
        if ($search) {
            $user = User::where('name', 'like', "%$search%")->get();
        } else {
            $user = User::all(); // Retourne tous les utilisateurs si aucune recherche
        }

        return view('Utilisateur', compact('user'));
    }

}


