<?php
spl_autoload_register( function($class_name) {
    include_once 'src/'.$class_name.'.php';
});

/**
* Defines a triggered send in the account.
*/
class ET_TriggeredSendSummary extends ET_GetSupport
{
	/** 
	* Initializes a new instance of the class.
	*/
	function __construct()
	{
		$this->obj = "TriggeredSendSummary";
	}

}
?>