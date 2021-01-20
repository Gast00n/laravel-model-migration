<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function adding() {
        $bike1 = new Bike();

        $bike1->modello = 'StreetFighter';
        $bike1->marca = 'Ducati';
        $bike1->targa = 'PO456KI';
        $bike1->cilindrata = '1000';

        $bike1->save();    

        $bike2 = new Bike();

        $bike2->modello = 'Duke';
        $bike2->marca = 'KTM';
        $bike2->targa = 'PO456KI';
        $bike2->cilindrata = '650';

        $bike2->save();
        
        $bike3 = new Bike();

        $bike3->modello = 'CBR';
        $bike3->marca = 'Honda';
        $bike3->targa = 'PO456KI';
        $bike3->cilindrata = '1000';

        $bike3->save(); 

        $bike4 = new Bike();

        $bike4->modello = '883';
        $bike4->marca = 'Harley Davidson';
        $bike4->targa = 'PO456KI';
        $bike4->cilindrata = '650';

        $bike4->save();                              

    }
}