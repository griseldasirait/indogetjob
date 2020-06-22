<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KriteriaPerusahaanController extends Controller
{
    public function index() {
        return view('pilihKriteria');
    }

    public function prosesSimpan(Request $request) {
        return redirect('/pilihSubKriteria');
    }
}
