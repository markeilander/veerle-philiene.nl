<?php

class AuthController extends BaseController {
    
    public function __construct()
    {
        parent::__construct();   
    }
	
	public function login()
	{
		return View::make('/auth/login');
	}
	
	
	public function postLogin()
	{
	    $email = Input::get('email');
	    $password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password), false)) {
            return Redirect::to('admin')->with('message', HTML::alert('success', 'Hallo ' . Auth::user()->name . ' welkom.'));
        } else {
            return Redirect::to('login')
                ->with('message', HTML::alert('warning', 'Gebruikersnaam/wachtwoord incorrect'))
                ->withInput();
        }
	}
	
	public function logout()
	{
		Auth::logout();
        return Redirect::to('login')->with('message', HTML::alert('success', 'Je bent nu uitgelogd', 'Gelukt'));
	}

}
