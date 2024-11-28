<?php

namespace App\Http\Controllers;

use App\Models\beritas;
use App\Models\boxers;
use App\Models\pelatihs;
use App\Models\pertandingans;
use App\Models\wasits;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function trainer(){
        $pelatih = pelatihs::latest()->get();
        return view('trainer',compact('pelatih'));
    }

    public function pelatih(){
        $pelatih = pelatihs::find(1);
        return view('front',compact('pelatih'));
    }

    public function referee(){
        $wasit = wasits::latest()->get();
        return view('referee',compact('wasit'));
    }

    public function atlet(){
        $boxer = boxers::latest()->get();
        return view('front',compact('boxer'));
    }

    public function fight(){
        // Mengambil data pertarungan dengan eager loading untuk relasi
        $pertandingan = pertandingans::with(['boxer1', 'boxer2', 'wasits'])->latest()->get();

        // Mengirimkan data ke view
        return view('fight', compact('pertandingan'));
    }

    public function boxer(){
        $atlet = boxers::latest()->get();
        return view('atlet', compact('atlet'));
    }

    public function berita(){
        $cuki = beritas::latest()->get();
        return view('berita', compact('cuki'));
    }

    public function beritashow($slug)
    {
        $beritas = beritas::where('slug', $slug)->firstOrFail();
        // dd('beritas');
        return view('detail', compact('beritas'));
    }

    public function boxershow($slug){
        $boxrec = boxers::where('slug', $slug)->firstOrFail();
        return view('det_boxer',compact('boxrec'));
    }

};
