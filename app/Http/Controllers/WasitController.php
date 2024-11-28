<?php

namespace App\Http\Controllers;

use App\Models\wasits;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WasitController extends Controller
{
    public function index()
    {
        $wasits = wasits::latest()->get();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.wasit.index', compact('wasits'));
    }

    public function create()
    {
        return view('admins.wasit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sertifikat' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/wasits'), $imageName);
        }

        // Simpan data wasit termasuk nama gambar
        wasits::create([
            'name' => $request->name,
            'sertifikat' => $request->sertifikat,
            'image' => $imageName
        ]);

        toastr()->closeButton()->timeOut(1500)->success('Wasit added successfully.');

        return redirect()->route('wasit.index');
    }

    public function show(wasits $wasit, $id)
    {
        
    }

    public function edit(wasits $wasit)
    {
        return view('admins.wasit.edit', compact('wasit'));
    }

    public function update(Request $request, wasits $wasit)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sertifikat' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Proses upload image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($wasit->image && file_exists(public_path('images/wasits/' . $wasit->image))) {
                unlink(public_path('images/wasits/' . $wasit->image));
            }

            // Upload image baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/wasits'), $imageName);
            $wasit->image = $imageName; // Simpan nama file ke database
        }

        // Update data wasit
        $wasit->update($request->only('name', 'sertifikat'));

        // Tampilkan toastr sukses
        toastr()->closeButton()->timeOut(1500)->success('Wasit updated successfully.');

        return redirect()->route('wasit.index');
    }

    public function destroy(wasits $wasit)
    {
        // Hapus image jika ada
        if ($wasit->image && file_exists(public_path('images/wasits/' . $wasit->image))) {
            unlink(public_path('images/wasits/' . $wasit->image));
        }

        $wasit->delete();

        // Tampilkan toastr sukses
        toastr()->closeButton()->timeOut(1500)->error('Wasit deleted successfully.');

        return redirect()->route('wasit.index');
    }
}
