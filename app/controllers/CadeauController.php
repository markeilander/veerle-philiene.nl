<?php

//use Eilander\Storage\Cadeau\CadeauRepository as Cadeau;

class CadeauController extends BaseController {
    
    protected $_path = '/uploads/cadeau/';
    protected $_cadeau;
    
    public function __construct(Cadeau $cadeau)
    {
        parent::__construct();
        $this->_cadeau = $cadeau;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show($id)
	{
		return true;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function add()
	{
		return View::make('/cadeaus/add');
	}
	public function postAdd()
	{
	    $valid = $this->_cadeau->validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Cadeau::getValidationMessages());
	    }
	    // Save
	    $cadeau = $this->_cadeau;
        $cadeau->titel = Input::get('titel');
        $cadeau->omschrijving = Input::get('omschrijving');
        $cadeau->winkel = Input::get('winkel');
        $cadeau->url = Input::get('url');
        $cadeau->afbeelding = $this->uploadImage('afbeelding');
        $cadeau->prijs = Input::get('prijs');
        $cadeau->aantal = Input::get('aantal');
        $cadeau->volgorde = Input::get('volgorde');
        $cadeau->besteld = 0;
        if ($cadeau->save()) {
            return Redirect::to('admin/cadeaus')->with('message', HTML::alert('success', 'Cadeau <strong>'.$cadeau->titel.'</strong> aangemaakt', 'Gelukt'));
        }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit($id)
	{
	    $cadeau = $this->_cadeau->find($id);
		return View::make('/cadeaus/edit')->with('cadeau', $cadeau);
	}
	public function postEdit($id)
	{
		$valid = $this->_cadeau->validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Cadeau::getValidationMessages());
	    }
	    // Save
	    $cadeau = $this->_cadeau->find($id);
        $cadeau->titel = Input::get('titel');
        $cadeau->omschrijving = Input::get('omschrijving');
        $cadeau->winkel = Input::get('winkel');
        $cadeau->url = Input::get('url');
        $cadeau->afbeelding = $this->uploadImage('afbeelding', $cadeau->afbeelding);
        $cadeau->prijs = Input::get('prijs');
        $cadeau->aantal = Input::get('aantal');
        $cadeau->besteld = Input::get('besteld');
        $cadeau->volgorde = Input::get('volgorde');
        if ($cadeau->save()) {
            $redirect = 'admin/cadeaus';
            // get current page
            $page = Session::get('page.cadeaus');
            if (is_numeric($page) && $page > 1) {
                $redirect .= '?page='. $page;
            }
            return Redirect::to($redirect)->with('message', HTML::alert('success', 'Cadeau <strong>'.$cadeau->titel.'</strong> gewijzigd', 'Gelukt'));
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$cadeau = $this->_cadeau->find($id);
		$titel = $cadeau->titel;
		$image = $cadeau->afbeelding;
        if ($cadeau->delete()) {
            // delete file
            File::delete($image);
            return Redirect::to('admin/cadeaus')->with('message', HTML::alert('danger', 'Cadeau <strong>'.$titel.'</strong> verwijderd', 'Gelukt'));
        }
	}
}
