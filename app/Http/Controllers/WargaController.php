<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{

    public function index() {
    $warga = []; // kalau belum ada data dari database
    return view('warga.index', ['warga' => $warga]);
    }


    public function create() {
        return view('warga.create'); // form tambah warga
    }

   public function store(Request $request) {
    $warga = $request->all();
    return $warga;
}
 // return redirect('/warga');
    }
