<?php

class HomeController extends BaseController {
    
    public function __construct()
    {
        parent::__construct();   
    }
    
    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'home.layout';
    
	public function index()
	{
	    $data = array (
	        'cadeaus' => Cadeau::all(),
	    );
		return View::make('/home/index', $data);
	}

}
