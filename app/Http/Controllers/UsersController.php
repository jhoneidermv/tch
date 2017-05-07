<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Maatwebsite\Excel\Excel;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users= User::orderBy('name', 'asc')->search($request->criterio)->get();

        return view('admin/users/index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user -> name = $request -> nombre;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> edad = $request -> edad;
        $user -> altura = $request -> altura;
        $user -> peso = $request -> peso;
        $user->save();

        return redirect()->route('admin.users.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ide)
    {
        $user = User::find($ide);
        return view('admin/users/edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ide)
    {
        $user = User::find($ide);
        $user -> name = $request -> nombre;
        $user -> email = $request -> email;
        $user -> edad = $request -> edad;
        $user -> altura = $request -> altura;
        $user -> peso = $request -> peso;
        $user-> save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ide)
    {
        $user = User::find($ide);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
