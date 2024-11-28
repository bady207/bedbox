<?php

namespace App\Http\Controllers;

use App\Models\pelatihs;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihs = pelatihs::latest()->get();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.pelatih.index', compact('pelatihs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'pengalaman' => 'required|string|max:225',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi image
        ]);

        $pelatihs = new pelatihs();
        $pelatihs->name = $request->name;
        $pelatihs->pengalaman = $request->pengalaman;

        // Proses upload image jika ada
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/pelatihs'), $imageName);
            $pelatihs->image = $imageName; // Simpan nama file ke database
        }

        $pelatihs->save();
        toastr()->closeButton()->timeOut(1500)->success('Coach added successfully.');
        return redirect()->route('pelatih.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelatihs = pelatihs::find($id);
        return view('admins.pelatih.show', compact('pelatihs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatihs = pelatihs::find($id);
        return view('admins.pelatih.edit', compact('pelatihs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'pengalaman' => 'required|string|max:225',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi image
        ]);

        $pelatih = pelatihs::find($id);
        $pelatih->name = $request->name;
        $pelatih->pengalaman = $request->pengalaman;

        // Proses upload image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($pelatih->image && file_exists(public_path('images/pelatihs/' . $pelatih->image))) {
                unlink(public_path('images/pelatihs/' . $pelatih->image));
            }

            // Upload image baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/pelatihs'), $imageName);
            $pelatih->image = $imageName;
        }

        $pelatih->save();
        toastr()->closeButton()->timeOut(1500)->success('Coach update successfully.');
        return redirect()->route('pelatih.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatih = pelatihs::find($id);

        // Hapus image jika ada
        if ($pelatih->image && file_exists(public_path('images/pelatihs/' . $pelatih->image))) {
            unlink(public_path('images/pelatihs/' . $pelatih->image));
        }

        $pelatih->delete();
        toastr()->closeButton()->timeOut(1500)->error('Coach delete successfully.');
        return redirect()->route('pelatih.index');
    }
}
