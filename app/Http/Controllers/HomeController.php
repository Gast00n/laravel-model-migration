<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ACCEDO A CAR
use App\Car;

class HomeController extends Controller
{
    //HOMEPAGE
    public function index() {

        //Get data from DB
        $cars = Car::all(); //Metodo STATICO, prende TUTTE le colonne della tabella Cars

        return view('home', compact('cars'));
    }
}
