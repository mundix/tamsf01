<?php

/**
 * Controller de Usuarios
*/
class UsersController extends BaseController
{
    public function signUp()
    {
        return View::make('users/sign-up');
    }
}