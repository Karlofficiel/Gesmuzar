<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;


class InscriptionController extends Controller
{
    public function index()
    {
          return view('inscription');
    }
    public function store (Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'numero' => 'required|numeric',
            'email' => 'required|unique:user,email|email|max:255',
            'password' => 'required|string',
        ]);

           // verifie si  c'est le premier utilisateur inscrit
           $isFirstUser = User::count() == 0;
           
           // Récupère le role correspondant (admin ^pour le premier  , user pour les autres)
           $role = Role::where('name', $isFirstUser ? 'admin' : 'user')->first();
           

        // Vérifiez si la validation a échoué
        if ($validator->fails()) {
            return redirect('/404')->with('errors',' Bien saisir les informations');
        }

        // Création d'une nouvelle personne
        $user = new User();
        $user->name = $request->input('name');
        $user->numero = $request->input('numero');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id =  $role->id;  

        $user->save();

        return redirect('/connexion')->with('success', 'personne crée avec success');
}

}