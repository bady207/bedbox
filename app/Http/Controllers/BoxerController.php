<?php

namespace App\Http\Controllers;

use App\Models\boxers;
use App\Models\pelatihs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BoxerController extends Controller
{
    public function index()
    {
        $boxers = boxers::latest()->get();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.boxer.index', compact('boxers'));
    }

    public function create()
    {
        $pelatihs = pelatihs::all();
        return view('admins.boxer.create', compact('pelatihs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'weight_class' => 'required|string',
            'negara' => 'required|string',
            'pelatihs_id' => 'required',
            'win' => 'required|string|max:225',
            'lose' => 'required|string|max:225',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar
        ]);

        $boxers = new boxers();
        $boxers->name = $request->name;

        $slug = Str::slug($request->name);
        $RandomString = Str::random(5);
        $UniqueSlug = $slug . '-' . $RandomString;
        $boxers->slug = $UniqueSlug;

        $boxers->weight_class = $request->weight_class;
        $boxers->negara = $request->negara;
        $boxers->pelatihs_id = $request->pelatihs_id;
        $boxers->win = $request->win;
        $boxers->lose = $request->lose;

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/boxers'), $imageName);
            $boxers->image = $imageName; // Simpan nama file ke database
        }

        $boxers->save();
        toastr()->closeButton()->timeOut(1500)->success('Boxer added successfully.');
        return redirect()->route('atlet.index');
    }

    public function show(string $id)
    {
        $boxer = boxers::findOrFail($id); // Mengambil satu boxer berdasarkan ID
        return view('admins.boxer.show', compact('boxer'));
    }

    public function edit(string $id)
    {
        $pelatihs = pelatihs::all();
        $boxer = boxers::findOrFail($id); // Mengambil satu boxer berdasarkan ID
        return view('admins.boxer.edit', compact('boxer','pelatihs'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'weight_class' => 'required|string',
            'negara' => 'required|string',
            'pelatihs_id' => 'required',
            'win' => 'required|string|max:225',
            'lose' => 'required|string|max:225',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar
        ]);

        $boxers = boxers::findOrFail($id);
        $boxers->name = $request->name;

        $slug = Str::slug($request->name);
        $RandomString = Str::random(5);
        $UniqueSlug = $slug . '-' . $RandomString;
        $boxers->slug = $UniqueSlug;

        $boxers->weight_class = $request->weight_class;
        $boxers->negara = $request->negara;
        $boxers->pelatihs_id = $request->pelatihs_id;
        $boxers->win = $request->win;
        $boxers->lose = $request->lose;

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($boxers->image && file_exists(public_path('images/boxers/' . $boxers->image))) {
                unlink(public_path('images/boxers/' . $boxers->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/boxers'), $imageName);
            $boxers->image = $imageName; // Simpan nama file ke database
        }

        $boxers->save();
        toastr()->closeButton()->timeOut(1500)->success('Boxer update successfully.');
        return redirect()->route('atlet.index');
    }

    public function destroy(string $id)
    {
        $boxers = boxers::findOrFail($id);

        // Hapus gambar jika ada
        if ($boxers->image && file_exists(public_path('images/boxers/' . $boxers->image))) {
            unlink(public_path('images/boxers/' . $boxers->image));
        }

        $boxers->delete();
        toastr()->closeButton()->timeOut(1500)->error('Boxer delete successfully.');
        return redirect()->route('atlet.index');
    }
}
