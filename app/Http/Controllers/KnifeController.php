<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use Illuminate\Http\Request;

class KnifeController extends Controller
{
    public function index()
    {
        $knives = Knife::all();
        return view('knives.index', compact('knives'));
    }
}
