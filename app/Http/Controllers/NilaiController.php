<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use PDF;

class NilaiController extends Controller
{
    public function index() {
        $nilai = Nilai::all();
        return view('nilai', ['nilai'=>$nilai]);
    }

    public function print() {
        $nilai  = Nilai::all();
        $pdf    = \PDF::loadview('nilai_pdf', ['nilai'=>$nilai])
                ->setPaper('a4', 'potrait');
        return $pdf->stream();
    }
}
