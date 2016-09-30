<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
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
