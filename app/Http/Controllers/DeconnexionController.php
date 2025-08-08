<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use illuminate\Support\Facades\Auth;

class DeconnexionController extends Controller
{
          public function deconnexion(){

                Auth::logout();

                return redirect('/');
            }
}
