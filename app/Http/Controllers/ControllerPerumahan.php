<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ControllerPerumahan extends Controller
{
    public function daftarPerumahan()
    {
        $perumahan = DB::table('perumahan')->get();
        return view('perumahan', ['perumahan' => $perumahan]);
    }
}
