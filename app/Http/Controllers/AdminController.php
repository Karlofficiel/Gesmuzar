<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\voiture;
use App\Models\produit;
use App\Models\message;
use Illuminate\Support\Facades\Validator;
use illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function alluser()
    {
        $user = User::all();
        return view('admin.Allutilisateurs', compact('user'));
    }
    
    public function countUsers(){

        $userCount = User::count(); //affiche tous les utilisateurs connecte
        $voitureCount = Voiture::count(); //affiche tous les voitures
        $messageUser = Message::pluck('id','message');
        return view('admin.Admin-index',compact('userCount','voitureCount','messageUser'));
    }

       
    public function message()
    {
        $message = Message::all(); //affiche tous les messages
        return view('admin.message', compact('message')); 
    } 

       
    public function allreservation()
    {
        $voiture = Voiture::all();
        return view('admin.Allreservations', compact('voiture')); //affiche tous les reservations
    } 

    public function  allproduit ()
    {
        $produit = Produit::all();
        return view('admin.Allvoitures', compact('produit')); // affiche tous les produits
    } 

    public function affichervoiture()
    {
        return view('admin.Ajout-voiture');
    }
    
    public function infoadmin()
    {
        $user = Auth::user();
        return view('admin.monprofil', compact('user'));

    }

    public function nomadmin(){

        $user =Auth::user();
        return view('admin.Admin-index', compact('user'));
        
  }
        
    public function supprimerproduit($id){

        $produit = Produit::find($id);
        $produit->delete();

        return redirect('/Allvoitures')->with('success', 'Voiture supprimé');
    }

    public function supprimervoiture($id){

        $voiture = Voiture::find($id);
        $voiture->delete();

        return redirect('/Allreservations')->with('success', 'reservations supprimé');
    }

    public function supprimeruser($id){

        $user = User::find($id);
        $user->delete();

        return redirect('/Allutilisateurs')->with('success', 'Utilisateur supprimé');
    }

    public function bloquer_user($id) {

        $user = User::find($id);
        $user->is_blocked = true;
        $user->save();

        return redirect('/Allutilisateurs')->with('success', 'Utilisateur bloquer');
    }

    public function unblock_User($id)
    {
        // Trouver l'utilisateur
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }

        // Vérifier s'il est déjà débloqué
        if (!$user->is_blocked) {
            return redirect('/Allutilisateurs')->with("success', L'utilisateur est déjà débloqué");
        }

        // Débloquer l'utilisateur
        $user->is_blocked = false;
        $user->save();

        return redirect('/Allutilisateurs')->with('success', 'Utilisateur Debloquer avec success');
    }

    public function ajout (Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'marquevoiture' => 'required|max:255',
            'nomvoiture' => 'required|string',
            'prixvoiture'=>'required|numeric',
            'pieces' => 'required|numeric',
            
        ]);

        // Vérifiez si la validation a échoué
        if ($validator->fails()) {
            return redirect()->with('errors',' Bien saisir les informations');
        }

        // Création d'une nouvelle personne
        $produit = new  Produit();

        $produit->marquevoiture = $request->input('marquevoiture');
        $produit->nomvoiture = $request->input('nomvoiture');
        $produit->prixvoiture = $request->input('prixvoiture');
        $produit->pieces = $request->input('pieces');
        

        $produit->save();

        
        return redirect('/Allvoitures')->with('success', 'Voiture ajouter avec success');

    }

    public function ProfilAdmin (Request $request){

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

        return view('admin.monprofil');
      }
      
    public function searchp(Request $request)
    {
        $search = $request->input('search'); // Récupère l'entrée utilisateur

        // Vérifie si un terme de recherche est fourni
        if ($search) {
            $user = User::where('name', 'like', "%$search%")->get();
        } else {
            $user = User::all(); // Retourne tous les utilisateurs si aucune recherche
        }

        return view('admin.Allutilisateurs', compact('user'));
    }


    // public function replyToMessage(Request $request, $messageId)
    // {
    //     $request->validate([
    //         'content' => 'required|string',
    //     ]);

    //     $originalMessage = Message::find($messageId);

    //     if (!$originalMessage) {
    //         return response()->json(['error' => 'Message non trouvé'], 404);
    //     }

        

    //     // Vérifier que l'admin est connecté (supposons que l'admin ait un rôle spécifique)
    //     if (!auth()->user() || auth()->user()->role !== 'admin') {
    //         return response()->json(['error' => 'Accès refusé'], 403);
    //     }


    //     // Création de la réponse
    //     $reply = Message::create([
    //         'sender_id' => auth()->id(), // L'admin en tant qu'expéditeur
    //         'receiver_id' => $originalMessage->sender_id, // Réponse à l'utilisateur initial
    //         'content' => $request->content,
    //         'reply_to' => $originalMessage->id, // Associer la réponse au message original
    //     ]);


    //     return response()->json(['message' => 'Réponse envoyée avec succès', 'data' => $reply], 201);
    // }

    public function replyToMessage(Request $request){

        $request->validate([
                'receiver_name' => 'required|string|exists:user,name',
                'reply_to'=>'required|string',
        ]);

        $receiver = User::where('name', $request->receiver_name)->first();
        

        $message = Message::create([
                'sender_id' => auth()->id(), // id de l'utilisateur connecter
                'receiver_id' => $receiver->id,
                'reply_to' => $request->reply_to,
        ]);

        return redirect('/message')->with('success', 'Message envoyé');
     }

     public function  searchVadmin (Request $request)
     {
         $search = $request->input('search'); // Récupère l'entrée utilisateur
 
         // Vérifie si un terme de recherche est fourni 
         if ($search) {
             $produit = Produit::where('marquevoiture', 'like', "%$search%")->get();
         } else {
               about('404 found');
         }
         
         return view('admin.Allvoitures', compact('produit'));
     }

     public function  searchreservation (Request $request)
     {
         $search = $request->input('search'); // Récupère l'entrée utilisateur
 
         // Vérifie si un terme de recherche est fourni 
         if ($search) {
             $voiture = Voiture::where('marque', 'like', "%$search%")->get();
         } else {
               about('404 found');
         }
         
         return view('admin.Allreservations', compact('voiture'));
     }

}
