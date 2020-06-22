<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubKriteriaPerusahaanController extends Controller
{
    public function index() {
        return view('pilihSubKriteria');
    }

    public function prosesSimpan(Request $request) {
        return redirect('/hasilRekomendasi');
    }
}
