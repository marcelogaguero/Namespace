<?php 

namespace src;

abstract class BaseAbstract {

	private $namespace;

	function __construct(){
		$name    = get_class($this);
		$length  = strlen($name) - strripos($name, "\\");
		$this->namespace = substr($name, 0, $length);	
	}

	public function getNamespace(){
		return $this->namespace;
	}

}

?>
