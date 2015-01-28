<?php

class Percent

{

	public $absolute = "";
	public $relative = "";
	public $hundred  = "";
	public $nominal  = "";


	public function __construct($new, $unit)

	{
		$this->absolute = round( $new / $unit, 2 ) ;

		$this->relative = round( $this->absolute - 1, 2 ) ;

		$this->hundred  = round( $this->absolute * 100, 2 ) ;


		if ($this->absolute == 1) 

		{
			$this->nominal = "status-quo";
		}

		elseif ($this->absolute > 1) 

		{
			$this->nominal = "positive";
		}

		elseif ($this->absolute < 1)

		{
			$this->nominal = "negative";
		};

	}

	public function formatNumber($number)

	{
	
		round($number, 2);
		return $number;

	}




}

?>