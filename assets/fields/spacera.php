<?php
/**
* @version		v1.3
* @package		Joomla!®
* @copyright	Copyright © 2011 Natural Selection Web Design LLC.
* @support      http://nsel.co
* @license		GNU/GPL, see license.txt
*/

// no direct access
defined('_JEXEC') or die();

class JFormFieldSpacera extends JFormField
{

	public $type = 'Spacera';

    protected function getLabel(){
        if($this->element->message)
            $this->label="";
        else
            return parent::getLabel();
    }
    
	protected function getInput()
	{
		if ($this->value) {
			return '<div style="border-bottom:1px solid black;font-size:15px;">ffd'.$this->value.'</div>';
		} else if($this->element->message){
            $this->label="1";
            return $this->element->message;
        }else {
			return '<div style="width:350px;font-family:arial;font-size:13px;">Having Trouble? <a style="font-family:arial;color:#828627;" target="blank" href="http://nsel.co/forum/">Support Here</a></div>';
		}
	}
}
