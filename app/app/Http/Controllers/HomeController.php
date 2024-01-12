<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablefields;

class HomeController extends Controller
{
    public function index()
    {
        $tablefields = Tablefields::orderBy('number')->get();
        //dd( $tablefields->all());

        $mezo_10 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_11 = ['nev'=> 'Egyetem utca', 'kep' => 'kép', 'ar' => '14000', 'szin' => '#5a5a5a', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_12 = ['nev'=> 'Elektromos Társaság', 'kep' => '', 'ar' => '15000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_13 = ['nev'=> 'Színház tér', 'kep' => '', 'ar' => '14000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_14 = ['nev'=> 'Janus Pannonius út', 'kep' => '', 'ar' => '15000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_15 = ['nev'=> 'Keleti vasútvonal', 'kep' => '', 'ar' => '20000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_16 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_17 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_18 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_19 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];
        $mezo_20 = ['nev'=> 'Börtön', 'kep' => '', 'ar' => '1000', 'szin' => '#', 'tulajdonos' => 'xy', 'haz_szam' => '0', 'szalloda_szam' => '' ];



        return view('home')->with([
            'tablefields' => $tablefields,
            'mezo_10' => $mezo_10,
            'mezo_11' => $mezo_11,
            'mezo_12' => $mezo_12,
            'mezo_13' => $mezo_13,
            'mezo_14' => $mezo_14,
            'mezo_15' => $mezo_15,
            'mezo_16' => $mezo_16,
            'mezo_17' => $mezo_17,
            'mezo_18' => $mezo_18,
            'mezo_19' => $mezo_19,
            'mezo_20' => $mezo_20,



        ]);
    }
}
