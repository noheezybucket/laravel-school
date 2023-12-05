<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    //dans le controller on parle d'action (c'est des méthodes rek!)
    public function index()
    {
        // return Apprenant::all();
        return view('liste-apprenants', ['apprenants' => Apprenant::all()]);
    }
}
