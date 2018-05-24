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
	
	public function getLinkLength() 
	{
		$i = 0;
		$current = $this->header;
		while ($current->next != null)
		{
			$i++;
			$current = $current->next;
		}
		return $i;
	}
	
	public function clear()
	{
		$this->header = null;
	}
	
	public function isEmpty() 
	{
		return $this->header == null;
	}
	
	public function addNode($node) 
	{
		$current = $this->header;
		while ($current->next != null) 
		{
			if($current->next->id > $node->id)
			{
				break;
			}
			$current = $current->next;
		}
		$node->next = $current->next;
		$current->next = $node;
	}
	
	public function delNodeById($id)
	{
		$current = $this->header;
		$flag = false;
		while ($current->next != null)
		{
			if($current->next->id == $id)
			{
				$flag = true;
				break;
			}
			$current = $current->next;
		}
		if($flag)
		{
			$current->next = $current->next->next;
		} else {
			echo "未找到id=$id的节点!" . PHP_EOL;
		}
	}
	
	public function getNodeById($id)
	{
		$current = $this->next;
		if(isEmpty())
		{
			echo "链表为空";
		}
		while ($current->next != null)
	 	{
			if($current->id == $id)
			{
				break;
			}
			$current = $current->next;
		}
		return $current->value;
	}
	
	//更新节点名称   
	public function updateLink($id, $name) {   
		$current = $this->header;   
		if ($current->next == null) {   
			echo "链表为空!";   
			return;   
		}   
		while ( $current->next != null ) {   
			if ($current->id == $id) {   
				break;   
			}   
			$current = $current->next;   
		}   
		return $current->value = $value;   
	}   
}

