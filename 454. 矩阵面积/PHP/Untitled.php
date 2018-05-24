<?php
	Class Rectangle
	{
		private  $width;
		private  $height;
		
		
		public function __construct ($width, $height)
		{
			$this->width = $width;
			$this->height = $height;
		}
		
		public function getArea()
		{
			return $this->width * $this->height;
		}
	}

	$rectangle = new Rectangle(1, 3);
	echo $rectangle->getArea();