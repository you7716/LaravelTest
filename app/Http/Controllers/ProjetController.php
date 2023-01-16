<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\ProjetController;

use App\Models\Projet;
class ProjetController extends Controller
{
    
    public function create()
    {
      return view('PROJETS/ajout');
    }


   /*
   fonction insertion 1
    public function store(Request $REQUEST)
    {
      DB::table('projets')->insert([
        'nom'=>$REQUEST->nom,
        'description'=>$REQUEST->description,
        'dateD'=>$REQUEST->dateD,
        'dateF'=>$REQUEST->dateF
      ]);
    }*/


    /*  FUNCTION INSERT 2
    public function store(Request $REQUEST)
    {
     $input = $REQUEST->all(); 
     Projet::create($input); 
     return redirect('PROJETS/create')->with('Projet ajouter','Projet ajouter avec success');
    }
    */

    /*
    FUNCTION 3
    public function store(Request $REQUEST)
    {
      $projet = new Projet(); // Le second projet represente le nom du controller
       $projet->nom = $REQUEST->nom;
       $projet->description = $REQUEST->description;
       $projet->dateD = $REQUEST->dateD;
       $projet->dateF = $REQUEST->dateF;
       $projet->save();
       return redirect('/PROJETS/create');
    }
    */
}
