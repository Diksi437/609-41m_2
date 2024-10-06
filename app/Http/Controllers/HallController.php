<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;

class HallController extends Controller
{
    //
    public function index()
    {
        return view('halls.index', ['halls' => Hall::all()]);
    }

    public function show($id)
    {
        return view('halls.show', [
            'hall' => Hall::all()->where('id', $id)->first()
        ]);
    }
}
