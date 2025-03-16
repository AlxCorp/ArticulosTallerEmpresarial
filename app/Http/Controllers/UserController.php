<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit() {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Nombre
        if($request->has('user-name')){
            $user->update(['name' => $request->input('user-name')]);
        }

        // Imagen de perfil
        if($request->hasFile('user-icon')){
            $filename = str_replace(['@', '.'], '', $user->email).'Image.'.$request->file('user-icon')->getClientOriginalExtension();
            $request->file('user-icon')->storeAs('images',$filename,'public');
            $user->update(['img'=>$filename]);
        }

        return redirect()->route('articles.index');
    }
}
