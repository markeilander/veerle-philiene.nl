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
	
	public function cadeau($id)
	{
	    if(Request::ajax())
        {
            $data = array (
    	        'cadeau' => Cadeau::find($id),
    	        'success' => false,
    	        'posted' => false
    	    );
    	    return View::make('/home/ajax/cadeau')->with($data);
        } else {
            $email = 'mark.eilander@outlook.com';
            $data = array (
    	        'cadeau' => Cadeau::find($id)
    	    );
            Mail::send('emails.bedankt', $data, function($message)  use ($email)
            {
                $message->to($email, $email)->subject('Bedankt!');
            });
        }
	}
	
	public function postCadeau($id)
	{
	    if(Request::ajax())
        {
    	    $cadeau = Cadeau::find($id);
    	    $besteld = $cadeau->besteld;
        	// Validate
    	    $valid = Gekocht::validate(Input::all());
    	    if ($valid === true) {
        	    // Save cadeau
                $cadeau->besteld = $besteld + 1;
                // Save gekocht
                $gekocht = new Gekocht;
                $gekocht->email = Input::get('email');
                $gekocht->cadeau = $id;
                if ($cadeau->save() && $gekocht->save()) {
                    // Set data
                    $data = array (
            	        'cadeau' => $cadeau,
            	        'success' => true,
    	                'posted' => true
            	    );
                    // Send mail
                    $email = Input::get('email');
                    Mail::send('emails.bedankt', $data, function($message)  use ($email)
                    {
                        $message->from('cadeau@veerle-philiene.nl', 'Veerle & Philiene');
                        $message->to($email, $email)->subject('Bedankt!');
                    });
                }
    	    } else {
                $data = array (
        	        'cadeau' => $cadeau,
        	        'success' => false,
                    'posted' => true
        	    );
    	    }
            return View::make('/home/ajax/cadeau')->with($data);
        }
	}

}
