<?php

class CadeauController extends BaseController {
    
    protected $_path = '/uploads/cadeau/';

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
	    $valid = Cadeau::validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Cadeau::getValidationMessages());
	    }
	    // Save
	    $cadeau = new Cadeau;
        $cadeau->titel = Input::get('titel');
        $cadeau->omschrijving = Input::get('omschrijving');
        $cadeau->winkel = Input::get('winkel');
        $cadeau->url = Input::get('url');
        $cadeau->afbeelding = $this->uploadImage('afbeelding');
        $cadeau->prijs = Input::get('prijs');
        $cadeau->aantal = Input::get('aantal');
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
	    $cadeau = Cadeau::find($id);
		return View::make('/cadeaus/edit')->with('cadeau', $cadeau);
	}
	public function postEdit($id)
	{
		$valid = Cadeau::validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Cadeau::getValidationMessages());
	    }
	    // Save
	    $cadeau = Cadeau::find($id);
        $cadeau->titel = Input::get('titel');
        $cadeau->omschrijving = Input::get('omschrijving');
        $cadeau->winkel = Input::get('winkel');
        $cadeau->url = Input::get('url');
        $cadeau->afbeelding = $this->uploadImage('afbeelding', $cadeau->afbeelding);
        $cadeau->prijs = Input::get('prijs');
        $cadeau->aantal = Input::get('aantal');
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
		$cadeau = Cadeau::find($id);
		$titel = $cadeau->titel;
		$image = $cadeau->afbeelding;
        if ($cadeau->delete()) {
            // delete file
            File::delete($image);
            return Redirect::to('admin/cadeaus')->with('message', HTML::alert('danger', 'Cadeau <strong>'.$titel.'</strong> verwijderd', 'Gelukt'));
        }
	}

    private function uploadImage($fileInput, $default = '') {
        if (Input::hasFile($fileInput)) {
            // make randowm string and set destination
            $destinationPath = $this->_path;
            $fileToken = str_random(4).'-'.str_random(6).'-'.str_random(3); // make as random as possible
            // make path
            if (!file_exists(public_path().$destinationPath)) {
                File::makeDirectory(public_path().$destinationPath, 0775, true);
            }
            // get file object
            $file = Input::file($fileInput);
            $filename = $fileToken.'.'.$file->getClientOriginalExtension();
            // move
            $upload_success = $file->move(public_path().$destinationPath, $filename);
            if( $upload_success ) {
                return $destinationPath.$filename;
            }
        }
        return $default;
    }

}
