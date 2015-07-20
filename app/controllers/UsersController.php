<?php

/**
 * Controller de Usuarios
*/

use HireMe\Entities\User;

class UsersController extends BaseController
{
    public function signUp()
    {
        return View::make('users/sign-up');
    }

    public function register()
    {
//        echo "<pre>";
//        dd(Input::all());
//        $data = Input::all();
        $data = Input::only(['full_name','email','password','password_confirmation']);
        $rules = [
            'full_name' => 'required',
            'email'     =>'required|email|unique:users,email',
            'password'  => 'required|confirmed', //busca que existe un campo con el prefijo confirmation
            'password_confirmation' => 'required' //Esto esta demas por que es confirmado.
            ];

        $validation = \Validator::make($data,$rules);
        if($validation->passes())
        {
//            $data['type'] = 'candidate';
            $user = new User($data);
            $user->type = 'candidate'; //Asignamos el tipo d esta forma y se hace con el
            //metodo save
//            User::create($data);
            $user->save();
            return Redirect::route('home');
        }

        return Redirect::back()->withInput()->withErrors($validation->messages());
        //Esto me devuelve con todo los datos y los errores de las validaciones.

    }

}