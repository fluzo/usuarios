<?php

class LoginController extends BaseController
{

    public function formulario()
    {
        //echo Hash::make('admin');        
        return View::make('usuarios::login');        
    }

    public function login()
    {
        $usuario = Input::get('usuario');
        $password = Input::get('password');        
        if (Auth::attempt(array('usuario' => $usuario, 'password' => $password)))
        {
            //return Redirect::intended();
            return Redirect::to('admin');
        }
        return Redirect::to('login')->with('errores','Usuario o password incorrectos.')->withInput();
    }
    public function logout()
    {
        Auth::logout();
        return View::make('usuarios::logout');        
    }

}
