<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Permission;


class roleTableSeeder extends Seeder
{
   
    public function run()
    {
       $adminRole = Role::create(['name' => 'admin']);
       $userRole = Role::create(['name' => 'user']);


          // Création des permissions
          $passercommande = Permission::create(['name' => 'Passer commande']);
          $voircommande = Permission::create(['name' => 'Voir commande']);
          $Telechargercommande = Permission::create(['name' => 'Telecharger commande']);

          $Modifierreservation = Permission::create(['name' => 'Modifier reservation']);
          $Supprimerreservation = Permission::create(['name' => 'Supprimer reservation']);
          $Effectuerreservation = Permission::create(['name' => 'Effectuer reservation']); // permission user


          $miseajourprofil = Permission::create(['name' => 'mise a jour profil']);//permissions en commun avec user et admin
          $deconnexion = Permission::create(['name' => 'deconnexion']); // permissions en commun avec user et admin


          $VoirtouslesUtilisateurs = Permission::create(['name' => 'Voir tous les Utilisateurs']); // permissions admin
          $SupprimerUtilisateur = Permission::create(['name' => 'Supprimer Utilisateur']);


          $adminRole->permissions()->attach([

                $VoirtouslesUtilisateurs->id, 
                $SupprimerUtilisateur->id,
                $miseajourprofil->id,
                $deconnexion->id
        ]);

          $userRole->permissions()->attach([

                 $miseajourprofil->id,
                 $deconnexion->id,
                 $passercommande->id,
                 $voircommande->id,
                 $Telechargercommande->id,
                 $Modifierreservation->id,
                 $Supprimerreservation->id,
                 $Effectuerreservation->id
        ]);
  

    }
    
}
