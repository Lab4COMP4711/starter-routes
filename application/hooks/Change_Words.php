<?php

if ( !defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Change_Words
 * 
 * Change all four letter words to be '****' inside the <p> </p> tags and 
 * under the class 'lead'
 *
 * @author lacie
 */
class Change_Words {
    
    function change_all()
    {
        $p_class_lead   = '/<\s*p class=\"lead\"[^>]*>([^<]*)<\s*\/\s*p\s*>/';
        $CI             = &get_instance();
        $current_output = $CI->output->get_output();
        $match          = array();
        $old_text       = array();  
        $new_text       = '';
        $space_delim    = ' ';
        
        if (preg_match($p_class_lead, $current_output, $match) )
        {
            $old_text = explode($space_delim, $match[1]); 
            $new_text = $this->change($old_text);
            $new_curr = preg_replace($p_class_lead, $new_text, $current_output);
            $CI->output->set_output($new_curr);
            $CI->output->_display();
        }
        else
        {
            $CI->output->_display();
        }
    }
        
    function change($para)
    {
        $updated = '<p class = "lead">';
        
        foreach ($para as $words)
        {
            if (strlen($words) == 4)
                $updated .= ' ****';
            else
                $updated .= ' ' . $words;
        }
        $updated .= '</p>';
        
        return $updated;
    }
}