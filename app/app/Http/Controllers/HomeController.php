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
        return view('home')->with([
            'tablefields' => $tablefields,
        ]);
    }
}
