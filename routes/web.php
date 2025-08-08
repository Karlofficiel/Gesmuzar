<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DeconnexionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfoAchatController;
use App\Http\Controllers\UsermessageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ModeController;


        Route::get('/', [InscriptionController::class , 'index'])->name("affiche_form_inscription.User");
        Route::post('/store', [InscriptionController::class , 'store'])->name("traitement_inscription.User");

        Route::get('/connexion', [ConnexionController::class , 'formulaire'])->name("affiche_form_connexion.User");
        Route::post('/traitement', [ConnexionController::class , 'traitement'])->name("traitement_connexion.User");
        

Route::middleware(['auth.user'])->group(function () {
     
        // Route::get('/', function () { return view('site'); });
    
        Route::get('/stocks', [UserController::class, 'allvoiture'])->name("all_voiture_disponible");
        Route::get('/search', [UserController::class, 'search'])->name("search.User");
        Route::get('/mesinformations', [UserController::class, 'afficherpersonne'])->name("affiche_info.User");
        Route::get('/index', [UserController::class, 'affichenom'])->name("affiche_nom.User");
        Route::post('/ProfilUser', [userController::class, 'ProfilUser'])->name('update.profil');// mise a jour profil

        Route::get('/index', [VoitureController::class, 'reservationVoiture'])->name("Passer_reservation.User");
        Route::post('/storeV', [VoitureController::class, 'storeV'])->name("traitement_voiture.User");
        Route::get('/searchV', [VoitureController::class, 'searchV'])->name("ChercherReservation.voiture");
        Route::get('/mescommandes', [VoitureController::class , 'allReservation'])->name("RecupReservation.voiture");
      
        Route::post('/mode', [VoitureController::class , 'mode'])->name("mode_payement.voiture");       

        Route::get('/mescommandes/supprimer/{idVoiture}/{idUser}', [VoitureController::class, 'supprimereservation'])->name("supprimer.resevation");

        
        Route::get('/nissan', function () { return view('nissan');});
        Route::get('/toyota', function () { return view('toyota');});
        Route::get('/suzuki', function () { return view('suzuki');});
        Route::get('/peugeot', function () { return view('peugeot');});
        Route::get('/mercedes', function () { return view('mercedes');});
        Route::get('/hyndai', function () { return view('hyndai');});
        Route::get('/apropos', function () { return view('apropos');});

        Route::get('/pièces', function () { return view('pièces');});



        Route::get('/apresvente', function () { return view('apresvente');});
        Route::get('/nosproduits', function () { return view('nosproduits'); });
        
        Route::get('/deconnexion', [DeconnexionController::class , 'deconnexion'])->name("deconnexion.User");


        Route::get('/mafacture', [PDFController::class, 'show'])->name('facture.show');
        Route::get('/mafacture/download', [PDFController::class, 'download'])->name('facture.download');
        

        Route::get('/index', [UsermessageController::class, 'index_message'])->name("envoie_message");
        Route::post('/reply', [UsermessageController::class, 'reply'])->name("traitement_message");


       
        Route::get('/mescommandes/{id}', [VoitureController::class, 'edit_reservations'])->name('recup_info.reservation');
        Route::put('/mescommandes/{id}', [VoitureController::class, 'update_reservations'])->name('miseajour_reservation'); //mise a jour d'une reservation
    

});

//  ROUTE  admin

Route::middleware(['auth.user'])->group(function () {
                
        Route::get('/Allutilisateurs', [AdminController::class , 'alluser'])->name("All.User");// tous les users
        Route::get('/Allutilisateurs/{id}', [AdminController::class , 'supprimeruser'])->name("supprimer.user"); //reset utilisateurs
        Route::get('/Allutilisateurs/{id}/block', [AdminController::class , 'bloquer_user'])->name("bloquer.user");        
        Route::get('/Allutilisateurs/{id}/deblock', [AdminController::class , 'unblock_User'])->name("débloquer.user");        

        Route::get('/Allreservations', [AdminController::class , 'allreservation'])->name("Allreservations.User");// tous les reservations
        Route::get('/Allreservations/{id}', [AdminController::class , 'supprimervoiture'])->name("supprimer.reservation"); // reset reservations

        Route::get('/Allvoitures', [AdminController::class , 'allproduit'])->name("All.voitures"); // tous les voitures
        Route::get('/Allvoitures/{id}', [AdminController::class , 'supprimerproduit'])->name("supprimer.produit");// reset produit

        Route::get('/searchp', [AdminController::class , 'searchp'])->name("search.user");
        Route::get('/searchVadmin', [AdminController::class, 'searchVadmin'])->name("ChercherProduit.voiture");
        Route::get('/searchreservation', [AdminController::class, 'searchreservation'])->name("ChercherReservation.voiture");
        

        Route::get('/Ajout-voiture', [AdminController::class , 'affichervoiture'])->name("affichervoiture.User"); //afficher une voiture
        Route::post('/ajout', [AdminController::class , 'ajout'])->name("ajoutervoiture.User");
        Route::get('/monprofil', [AdminController::class, 'infoadmin'])->name("affiche_info.Admin");
        Route::post('/ProfilAdmin', [AdminController::class, 'ProfilAdmin'])->name('update.profil');// mise a jour profil
        Route::get('/Admin-index', [AdminController::class, 'nomadmin'])->name("affiche_nom.Admin"); 
        Route::get('/Admin-index', [AdminController::class, 'countUsers'])->name("affiche_nombre.user");


        Route::get('/message', [AdminController::class, 'message'])->name("affiche_message.user");

        Route::post('/message', [AdminController::class, 'reponseadmin'])->name("affiche.admin");

        // Route::post('/message/reply/{messageId}', [AdminController::class, 'replyToMessage']);

        Route::get('/formachat', function () { return view('admin.formachat'); });
                
       
});