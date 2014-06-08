<?php

class AdminController extends BaseController {
    
    protected $_angularController = 'admin';
    
    public function __construct()
    {
        parent::__construct(); 
        View::share('angularController', $this->_angularController);
    }

	public function dashboard()
	{
		return View::make('/admin/dashboard');
	}
	
	public function veerle()
	{
	    $veerle = Veerle::paginate(10);
		return View::make('/admin/veerle')->with('veerle', $veerle);
	}
	
	public function philiene()
	{
	    $philiene = Philiene::paginate(10);
		return View::make('/admin/philiene')->with('philiene', $philiene);
	}
	
	public function cadeaus()
	{
	    $cadeaus = Cadeau::paginate(10);
        return View::make('/admin/cadeaus')->with('cadeaus', $cadeaus);
	}

}
