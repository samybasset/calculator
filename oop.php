<?php 
	
	class Sum {
		public $sum1;
		public $sum2;
		public $answer;
		function __construct($sum1, $sum2) {
			$this->sum1 = $sum1;
			$this->sum2 = $sum2;
		}
		public function add($sum1, $sum2) {
				$this->answer = $this->sum1 + $this->sum2;
				return 'The outcome of '.$this->sum1.' and '. $this->sum2 .' is ' . $this->answer;
		}
	}





?>