<?php

class BabyController extends BaseController {
    
    protected $_path = '/uploads/';
    protected $_name = '';
    protected $_redirect = '';
    protected $_model;
    
    public function __construct($name = '', $model)
    {
        parent::__construct();   
        if (trim($name) != '') {
            $this->_name = $name;
            $this->_path = '/uploads/'.$name.'/';
        }
        $this->_redirect = 'admin/'.$this->_name;
        $this->_model = $model;
        // get current page
        $page = Session::get('page.'.$this->_name);
        if (is_numeric($page) && $page > 1) {
            $this->_redirect .= '?page='. $page;
        }
    }
    
    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function add($type)
	{
		return View::make('/'.$this->_name.'/add')->with(array('type' => $type));
	}
	public function postAdd($type)
	{
	    // Save
	    switch($type) {
	        case 'text':
	            return $this->_saveText($this->_model);
	        break;
	        case 'image':
	            return $this->_saveImage($this->_model);
	        break;
	        default:
	            return Redirect::to('admin/'.$this->_name)->with('message', HTML::alert('danger', 'Ongeldig verzoek', 'Error'));
	        break;
	    }
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit($id, $type)
	{
		return View::make('/'.$this->_name.'/edit')->with(array('baby' => $this->_model->find($id), 'type' => $type));
	}
	public function postEdit($id, $type)
	{
	    $model = $this->_model->find($id);
	    // Save
	    switch($type) {
	        case 'child':
	            return $this->_saveBorn($model);
	        break;
	        case 'pencil-square-o':
	            return $this->_saveText($model);
	        break;
	        case 'picture-o':
	            return $this->_saveImage($model);
	        break;
	        default:
	            return Redirect::to($this->_redirect)->with('message', HTML::alert('danger', 'Ongeldig verzoek', 'Error'));
	        break;
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
	    $model = $this->_model->find($id);
        if ($model->delete()) {
            // delete file
            //File::delete($image);
            return Redirect::to($this->_redirect)->with('message', HTML::alert('danger', 'Verwijderd', 'Gelukt'));
        }
	}
	
	/**
	 * Custom save functions
	 */
	protected function _saveBorn(Eloquent $baby)
	{
        $valid = Baby_Born::validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Baby_Born::getValidationMessages());
	    }
	    // Save
        $baby->titel = Input::get('titel');
        $baby->lengte = Input::get('lengte');
        $baby->gewicht = Input::get('gewicht');
        $baby->type = 'child';
        if ($baby->save()) {
            return Redirect::to($this->_redirect)->with('message', HTML::alert('success', 'Opgeslagen', 'Gelukt'));
        }
	}
	
	protected function _saveText(Eloquent $baby)
	{
	    $valid = Baby_Text::validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Baby_Text::getValidationMessages());
	    }
	    // Save
        $baby->titel = Input::get('titel');
        $baby->bericht = Input::get('bericht');
        $baby->type = 'pencil-square-o';
        if ($baby->save()) {
            return Redirect::to('admin/'. $this->_name)->with('message', HTML::alert('success', 'Opgeslagen', 'Gelukt'));
        }
	}
	
	protected function _saveImage(Eloquent $baby)
	{
	    $valid = Baby_Image::validate(Input::all());
	    if ($valid === false) {
	        return Redirect::back()->withInput()->withErrors(Baby_Image::getValidationMessages());
	    }
	    // Save
        $baby->titel = Input::get('titel');
        $baby->afbeelding = $this->uploadImage('afbeelding');
        $baby->bericht = Input::get('onderschrift');
        $baby->type = 'picture-o';
        if ($baby->save()) {
            return Redirect::to($this->_redirect)->with('message', HTML::alert('success', 'Opgeslagen', 'Gelukt'));
        }
	}
}
