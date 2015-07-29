<?php


class LoginController extends BaseController
{
	/**
	 * Presenta Formulario de login
	*/
	public function index()
	{
		return View::make('themes/melon/tpls/login');
	}
	/**
	 * Envia el correo con la nueva contrasena
	*/
	public function forgot()
	{

	}
}
