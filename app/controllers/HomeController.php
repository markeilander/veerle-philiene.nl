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
	    $veerle = DB::table('veerle')->orderBy('created_at', 'asc')->get();
	    $philiene = DB::table('philiene')->orderBy('created_at', 'asc')->get();
	    $cadeaus = DB::table('cadeau')->orderBy('volgorde', 'asc')->get();
	    $data = array (
	        'cadeaus' => $cadeaus,
	        'veerleList' => $this->convertTableToTimeline($veerle),
	        'philieneList' => $this->convertTableToTimeline($philiene),
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
        }
        return App::abort(404);
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
                $cadeau->increment('besteld');;
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
        return App::abort(404);
	}
	
	private function convertTableToTimeline($table)
	{
	    $data = array();
	    if (count($table)) {
	        foreach($table as $row) {
	            $year = HTML::dutchDate($row->created_at);
	            $day = HTML::dutchDate($row->created_at);
	            $time = HTML::dutchTime($row->created_at);
	            // set propper order
	            $data[$day][$time]['id'] = $row->id;
	            // set data
	            $data[$day][$time]['type'] = $row->type;
	            $data[$day][$time]['titel'] = $row->titel;
	            $data[$day][$time]['bericht'] = $row->bericht;
	            $data[$day][$time]['afbeelding'] = $row->afbeelding;
	            $data[$day][$time]['gewicht'] = $row->gewicht;
	            $data[$day][$time]['lengte'] = $row->lengte;
	        }   
	    }
	    return $data;
	}

}
