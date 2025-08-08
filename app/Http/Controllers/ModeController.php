<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\modepayement;
use App\Models\voiture;

class ModeController extends Controller
{
    public function index_mode(){

        return view('/mescommandes');
    }
    public function mode (Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'payment_method' => 'required|string',
           
        ]);

        // Vérifiez si la validation a échoué
        if ($validator->fails()) {
            return redirect()->with('errors',' Bien saisir les informations');
        }

        // Création d'une nouvelle personne
        $modepayement = new modepayement();

        $modepayement->user_id = Auth::id(); // recupere l'utilisateur authentifier

        $modepayement->payment_method = $request->input('payment_method');
        
        $modepayement->save();

        return redirect('/mescommandes')->with('success', 'Reservation crée avec success');

    }
}
