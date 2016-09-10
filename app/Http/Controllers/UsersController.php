<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
//use Laracasts\Flash\Flash; //para notificaciones
//use App\Http\Requests\UserRequest;
//use Illuminate\Support\MessageBag;
//use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('id','ASC')->paginate(5);
        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (count($errors) > 0) {
        //     return $errors;
        // }
        
        // if ($errors->has('email')) {
        //     return $errors->first('email');
        // }

        //dd($request->name);
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();


        flash('Se ha registrado '.$user->name.'de forma exitoso !','success');
        return redirect()->route('users.index');
        // Flash::success("Se ha registrado ".$user->name." de forma exitoso !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user',$user);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        //Flash::warning('El usuario'. $user->name.' fue editado exitosamente!');
        flash('El usuario '.$user->name.'fue editado exitosamente !','warning');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();

        flash('El usuario '.$user->name.'fue eliminado exitosamente !','warning');
        //Flash::warning('El usuario '.$user->name.' fue eliminado de forma exitosa!');
        return redirect()->route('users.index');
    }
}
