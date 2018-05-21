<?php
class node 
{
	public $id;
	public $value;
	public $next;
	
	public function __construct ($id, $value, $next)
	{
		$this->id = $id;
		$this->value = $value;
		$this->next = null;
	}
}

class linklist 
{
	private $header;
	
	public function __construct($id = null, $value = null)
	{
		$this->header = new node($id, $value, $null);
	}
}

