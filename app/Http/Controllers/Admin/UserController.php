<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       // dd($request->all());
        $pass_1 = $request->get('password') != null ? $request->get('password') : false ;
        $pass_2 = $request->get('password2') != null  ? $request->get('password2') : false ;

        if ($pass_1 && $pass_2 ) {
                if($pass_1 === $pass_2) {
                    $user->update([
                        'password' => Hash::make($pass_1),
                    ]);
                } else {
                    return redirect()->route('admin.users.edit', compact('user'))->with('error', 'Las contraseñas no coinciden');
                }
        }
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit', compact('user'))->with('info', 'Usuario actualizado correctamente');
    }

}
