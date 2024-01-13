<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Tablefields;

class HomeController extends BaseController
{
    public function index()
    {
        $mezok = Tablefields::get();
        //dd($mezok->all());
        return view("home.index")->with([
        'mezok' => $mezok,
        ]);
    }
}