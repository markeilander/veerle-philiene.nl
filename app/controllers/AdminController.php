<?php

class AdminController extends BaseController {
    
    protected $_angularController = 'admin';
    
    public function __construct()
    {
        parent::__construct(); 
    }

	public function dashboard()
	{
	    $veerle = DB::table('veerle')->count();
	    $philiene = DB::table('philiene')->count();
	    $besteld = DB::table('cadeau')->sum('besteld');
	    $aantal = DB::table('cadeau')->sum('aantal');
	    $data = array(
	        'veerle' => $veerle,
	        'philiene' => $philiene,
	        'aantal' => $aantal,
	        'besteld' => $besteld
	    );
		return View::make('/admin/dashboard')->with($data);
	}
	
	public function veerle()
	{
	    $veerle = DB::table('veerle')->orderBy('created_at', 'desc')->paginate(10);
	    // set current page in session
	    Session::put('page.veerle', $veerle->getCurrentPage());
		return View::make('/admin/veerle')->with('berichten', $veerle);
	}
	
	public function philiene()
	{
	    $philiene = DB::table('philiene')->orderBy('created_at', 'desc')->paginate(10);
	    // set current page in session
	    Session::put('page.philiene', $philiene->getCurrentPage());
		return View::make('/admin/philiene')->with('berichten', $philiene);
	}
	
	public function cadeaus()
	{
	    $cadeaus = DB::table('cadeau')->orderBy('volgorde', 'asc')->paginate(5);
	    // set current page in session
	    Session::put('page.cadeaus', $cadeaus->getCurrentPage());
        return View::make('/admin/cadeaus')->with('cadeaus', $cadeaus);
	}

}
