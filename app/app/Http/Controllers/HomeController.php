<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tablefields;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index()
    {
        try {
            DB::connection()->getPdo();
            $mezok = Tablefields::get();
            //dd($mezok->all());
            return view("home.index")->with([
            'mezok' => $mezok,
            ]);
        } catch (\Exception $e) {
            // Hiba történt, nincs kapcsolat az adatbázissal
            $errorMessage = "Nincs kapcsolat az adatbázissal";
            $googleSearchQuery = urlencode("mit csináljak, ha nincs kapcsolat az adatbázissal");
            return redirect()->to("https://www.google.com/search?q={$googleSearchQuery}")
                ->with('error', $errorMessage);
        }
    }
}

