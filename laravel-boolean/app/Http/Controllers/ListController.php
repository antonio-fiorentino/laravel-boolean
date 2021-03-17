<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class ListController extends Controller
{
    public function index() {

      $nameModel = car::all();


      return view('list', ['cars' => $nameModel]);
    }
}
