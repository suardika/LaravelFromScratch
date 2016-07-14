<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use DB;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();
//        $cards = \App\Card::all();
//        $cards = DB::table('cards')->get();
//        $cards = \DB::table('cards')->get();
        return view('cards.index', compact('cards'));
    }

    public function show($card)
    {
        return $card;
        
    }
}
