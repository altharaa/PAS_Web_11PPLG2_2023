<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index() 
    {
        $sells = Sell::all();
        return view('sells.index', compact('sells'));
    }
}
