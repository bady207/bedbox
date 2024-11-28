<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        confirmDelete("Delete", "Are You Sure?");
        return view('admins.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required',
            'password' => 'required|min:8',
            'IsAdmin' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->IsAdmin = $request->IsAdmin;
        $user->save();
        toastr()->closeButton()->timeOut(1500)->success('User added successfully.');
        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        return view('admins.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi form
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'nullable|min:8',
            'IsAdmin' => 'required|in:0,1',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->IsAdmin = $request->IsAdmin;
        $user->save();
        toastr()->closeButton()->timeOut(1500)->success('User update successfully.');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        toastr()->closeButton()->timeOut(1500)->error('User delete successfully.');
        return redirect()->route('user.index');

    }
}
