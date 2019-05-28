<?php
/**
 * Controller class example
 * 
 * note: Model name passed in the constructor
 * 
 * TODO implement get/post request handler
 * 
 */
class Controller {
	
	/*function __construct($modelName='Model') {
			$this-> viewLoader = new LoadView();
			$this-> model = new $modelName();
	}*/

	function __construct($modelName) {
			$this -> viewLoader = new LoadView();
			if (is_array($modelName)) {
				foreach ($modelName as $key => $value) {
					$this -> $key = new $value();
				}
			} else {
				$this -> model = new $modelName();
			}
	}
}
?>