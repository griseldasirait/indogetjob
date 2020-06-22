<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;

class MultipleFormController extends Controller
{
    public function index() {
        $provinces = Province::pluck('name', 'id');

        return view('profilPerusahaan', [
            'provinces' => $provinces,
        ]);
    }

    public function store(Request $request) {
        $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
        
        return response()->json($cities);
    }
}
