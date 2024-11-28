<?php

namespace App\Http\Controllers;

use App\Models\beritas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = beritas::latest()->get();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $beritas = beritas::all();
        return view('admins.berita.create', compact('beritas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'penulis' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi image'
        ]);

        $beritas = new beritas();
        $beritas->title = $request->title;

        $slug = Str::slug($request->title);
        $RandomString = Str::random(5);
        $UniqueSlug = $slug . '-' . $RandomString;
        $beritas->slug = $UniqueSlug;

        $beritas->content = $request->content;
        $beritas->penulis = $request->penulis;
         // Proses upload image jika ada
         if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/beritas'), $imageName);
            $beritas->image = $imageName; // Simpan nama file ke database
        }
        $beritas->save();
        toastr()->closeButton()->timeOut(1500)->success('News added successfully.');
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $beritas = beritas::find($id);
        return view('admins.berita.edit', compact('beritas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'penulis' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi image'
        ]);

        $beritas = beritas::find($id);
        $beritas->title = $request->title;

        $slug = Str::slug($request->title);
        $RandomString = Str::random(5);
        $UniqueSlug = $slug . '-' . $RandomString;
        $beritas->slug = $UniqueSlug;

        $beritas->content = $request->content;
        $beritas->penulis = $request->penulis;
         // Proses upload image jika ada
        if ($request->hasFile('image')) {
            // Hapus image lama jika ada
            if ($beritas->image && file_exists(public_path('images/beritas/' . $beritas->image))) {
                unlink(public_path('images/beritas/' . $beritas->image));
            }

            // Upload image baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/beritas'), $imageName);
            $beritas->image = $imageName;
        }
        $beritas->save();
        toastr()->closeButton()->timeOut(1500)->success('News update successfully.');
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $beritas = beritas::find($id);

         // Hapus image jika ada
         if ($beritas->image && file_exists(public_path('images/beritas/' . $beritas->image))) {
            unlink(public_path('images/beritas/' . $beritas->image));
        }
        $beritas->delete();
        toastr()->closeButton()->timeOut(1500)->error('News delete successfully.');
        return redirect()->route('berita.index');
    }
}
