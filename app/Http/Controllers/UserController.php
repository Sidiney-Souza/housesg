<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.user', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        if ($user) {
            \Session::flash('msg', "usuario {$user->name} foi  salvo");
        } else {
            \Session::flash('msg', "usuario {$user->name} não foi salvo");
        }
        return redirect()->route("user.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user->update($request->all());

        $msg = "usuario {$user->name} alterado com sucesso";

        return redirect()->route("user.index")->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($user->delete()) {
            \Session::flash('msg', "usuario {$name} removido");
        } else {
            \Session::flash('msg', "usuario {$name} não foi removido");
        }
        return redirect()->route("user.index");
    }
    
    public function search(Request $request) {
        if ($request->name) {
            $user = (new User())->buscaPorNome($request->name);
        } else {
            $user = User::all();
        }

        return view('user.user', ['user' => $user]);
    }
    
    
}
