<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\voiture;
use App\Models\user;
use illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{
    public function  reservationVoiture(){

        return view('index');
}

    public function storeV (Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'age' => 'required|numeric',
            'marque' => 'required|max:255',
            'nomvoiture' => 'required|string',
            'prix' => 'required|numeric',
            'statut' => 'required|string',
           
        ]);

        // Vérifiez si la validation a échoué
        if ($validator->fails()) {
            return redirect()->with('errors',' Bien saisir les informations');
        }

        // Création d'une nouvelle personne
        $voiture = new Voiture();

        $voiture->user_id = Auth::id(); // recupere l'utilisateur authentifier

        $voiture->name = $request->input('name');
        $voiture->age = $request->input('age');
        $voiture->marque = $request->input('marque');
        $voiture->nomvoiture = $request->input('nomvoiture');
        $voiture->prix = $request->input('prix');
        $voiture->statut = $request->input('statut');
               
        $voiture->save();

        return redirect('/mescommandes')->with('success', 'Reservation crée avec success');

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
    

    public function  achatvoiture(){

        return view('mescommandes');
}


    public function edit_reservations($id){

        $voiture = Voiture::find($id);
        return view('/mescommandes' , compact('voiture'));
    }

    public function update_reservations(Request $request)
    {

      $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'marque' => 'required|max:255',
            'nomvoiture' => 'required|string',
            'prix' => 'required|numeric',
            'statut' => 'required|string',       
    ]);

    $voiture = Voiture::find($request->id);
 
    $voiture->name = $request->input('name');
    $voiture->age = $request->input('age');
    $voiture->marque = $request->input('marque');
    $voiture->nomvoiture = $request->input('nomvoiture');
    $voiture->prix = $request->input('prix');
    $voiture->statut = $request->input('statut');
           
    $voiture->update(); // Mise a jour des données

        return redirect('/mescommandes')->with('success', 'Réservations modifier avec success');;
    }



        public function allReservation() {

            $voiture = Auth::user()->voiture;

            return view('mescommandes', compact('voiture'));

        } 


    public function searchV(Request $request)
    {
        $search = $request->input('search'); // Récupère l'entrée utilisateur

        // Vérifie si un terme de recherche est fourni 
        if ($search) {
            $voiture = Voiture::where('marque', 'like', "%$search%")->get();
        } else {
              about('404 found');
        }
        
        return view('mescommandes', compact('voiture'));
    }

    

    public function supprimereservation($idVoiture, $idUser){

        $voiture = Voiture::where('id',$idVoiture)->where('user_id',$idUser)->first();

        if(!$voiture)
        {
            return redirect('/mescommandes')->with('success', 'reservation non existante');
        }


        $voiture->delete();
        
        return redirect('/mescommandes')->with('success', 'Reservation supprimé');
    }


    public function  infofacture()
    {
        $voiture = voiture::all();
        return view('mafacture', compact('voiture'));
    } 

 
}

