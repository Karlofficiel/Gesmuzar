<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture; // Assurez-vous de bien importer le modèle correspondant à votre table 'voitures'
use Barryvdh\DomPDF\Facade\Pdf; // Vous pouvez utiliser une bibliothèque comme dompdf pour générer des PDF

class PDFController extends Controller
{
    public function show()
    {
        // Récupérer les informations de la facture basée sur l'id
        $voiture = Voiture::all();

        // Vérifier si la facture existe
        if (!$voiture) {
            return redirect()->back()->with('error', 'Facture non trouvée');
        }

        // Passer les données à la vue pour afficher

        return view('mafacture', compact('voiture'));
    }

    public function download()
    {
        set_time_limit(120);  // 120 secondes

        // Récupérer les informations de la facture basée sur l'id
        $voiture = Voiture::all();

        // Vérifier si la facture existe
        if (!$voiture) {
            return redirect()->back()->with('error', 'Facture non trouvée');
        }

        // Générer le PDF de la facture avec les données récupérées
        $pdf = PDF::loadView('mafacture', compact('voiture'));

        // Télécharger le fichier PDF
        return $pdf->download('facture_' . auth()->user()->id . '.pdf');
    }
}
