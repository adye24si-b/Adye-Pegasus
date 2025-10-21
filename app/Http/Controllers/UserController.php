<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataUser'] = User::all();
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Penambahan Data Berhasil!');
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
        $data['dataUser'] = user::findOrFail($id);
        return view('admin.user.edit', $data);
    }


    public function update(Request $request, string $id)
    {
        // Mengambil data user berdasarkan ID
        $id = $id;
        $user = User::findOrFail($id);

        // Memperbarui atribut user
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->birthday   = $request->birthday;
        $user->gender     = $request->gender;
        $user->email      = $request->email;
        $user->phone      = $request->phone;

        $user->save();

        return redirect()->route('user.index')->with('Update', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus');
    }
}
