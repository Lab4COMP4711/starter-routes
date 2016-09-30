<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Last extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
                
                $authors = array_pop($source);
                
		$this->data['mug'] = $authors['mug'];
                $this->data['who'] = $authors['who'];
                $this->data['what'] = $authors['what'];

		$this->render();
	}

}