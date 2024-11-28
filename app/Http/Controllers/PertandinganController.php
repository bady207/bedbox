<?php

namespace App\Http\Controllers;

use App\Models\boxers;
use App\Models\pertandingans;
use App\Models\wasits;
use Illuminate\Http\Request;

class PertandinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertandingans = pertandingans::latest()->get();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.pertandingan.index',compact('pertandingans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wasits = wasits::all();
        $boxers = boxers::all();
        $pertandingans = pertandingans::all();
        return view('admins.pertandingan.create',compact('pertandingans', 'boxers', 'wasits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'boxer1_id' => 'required',
            'boxer2_id' => 'required',
            'wasits_id' => 'required',
            'tanggal_pertandingan' => 'required|date',
            'jam_pertandingan' => 'required|date_format:H:i',
            'hasil_pertandingan' => 'string',
            'lokasi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar

        ]);

        $pertandingans = new pertandingans();
        $pertandingans-> boxer1_id = $request->boxer1_id;
        $pertandingans-> boxer2_id = $request->boxer2_id;
        $pertandingans-> wasits_id = $request->wasits_id;
        $pertandingans-> tanggal_pertandingan = $request->tanggal_pertandingan;
        $pertandingans-> jam_pertandingan = $request->jam_pertandingan;
        $pertandingans-> hasil_pertandingan = $request->hasil_pertandingan;
        $pertandingans-> lokasi = $request->lokasi;
        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/pertandingans'), $imageName);
            $pertandingans->image = $imageName; // Simpan nama file ke database
        }
        $pertandingans->save();
        toastr()->closeButton()->timeOut(1500)->success('Match added successfully.');
        return redirect()->route('pertandingan.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boxers = boxers::all();
        $wasits = wasits::all();
        $pertandingans = pertandingans::findOrFail($id);
        return view('admins.pertandingan.edit', compact('pertandingans','boxers', 'wasits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'boxer1_id' => 'required',
            'boxer2_id' => 'required',
            'wasits_id' => 'required',
            'tanggal_pertandingan' => 'required|date',
            'jam_pertandingan' => 'required|date_format:H:i',
            'hasil_pertandingan' => 'string',
            'lokasi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar

        ]);

        $pertandingans = pertandingans::findOrFail($id);
        $pertandingans-> boxer1_id = $request->boxer1_id;
        $pertandingans-> boxer2_id = $request->boxer2_id;
        $pertandingans-> wasits_id = $request->wasits_id;
        $pertandingans-> tanggal_pertandingan = $request->tanggal_pertandingan;
        $pertandingans-> jam_pertandingan = $request->jam_pertandingan;
        $pertandingans-> hasil_pertandingan = $request->hasil_pertandingan;
        $pertandingans-> lokasi = $request->lokasi;
        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($pertandingans->image && file_exists(public_path('images/pertandingans/' . $pertandingans->image))) {
                unlink(public_path('images/pertandingans/' . $pertandingans->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/pertandingans'), $imageName);
            $pertandingans->image = $imageName; // Simpan nama file ke database
        }
        $pertandingans->save();
        toastr()->closeButton()->timeOut(1500)->success('Match update successfully.');
        return redirect()->route('pertandingan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pertandingans = pertandingans::findOrFail($id);
        // Hapus gambar jika ada
        if ($pertandingans->image && file_exists(public_path('images/pertandingans/' . $pertandingans->image))) {
            unlink(public_path('images/pertandingans/' . $pertandingans->image));
        }
        $pertandingans->delete();
        toastr()->closeButton()->timeOut(1500)->error('Match delete successfully.');
        return redirect()->route('pertandingan.index');
    }
}
