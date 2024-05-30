<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Foundation\Auth\Request;

Class Frontend extends Controller
{
    public function getdb() {
        $kendaraans = Kendaraan::all();
        return view ('frontend.index', compact('kendaraan'));
    }
}