<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
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
		$source = $this->quotes->get(1);
		
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		

		$this->render();
	}

	public function gimme($id)
	{

		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		//$idInt=(int)$id;


		// build the list of authors, to pass on to our view
		$source = $this->quotes->get($id);
		
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		

		$this->render();
	}

        
        public function zzz()
        {
            // this is the view we want shown
            $this->data['pagebody'] = 'justone';
            
            $source = $this->quotes->get(1);
            
            $this->data['who'] = $source['who'];
            $this->data['what'] = $source['what'];
            $this->data['mug'] = $source['mug'];
            
            $this->render();
        }
}
