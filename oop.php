<?php 
	
  class Sum {
    public $sum1;
    public $sum2;

    function __construct($sum1, $sum2) {
      $this->sum1 = $sum1;
      $this->sum2 = $sum2;
    }

    function makeSum($sum1, $sum2) {
      $operator;
      // if($_POST['+']) {
      //   $operator = '+';
      //   $answer = $sum1 + $sum2;
      // } elseif($_POST['-']) {
      //   $operator = '-';
      //   $answer = $sum1 - $sum2;
      // } elseif($_POST['/']) {
      //   $operator = '/';
      //   $answer = $sum1 / $sum2;
      // } elseif($_POST['x']) {
      //   $operator = '*';
      //   $answer = $sum1 * $sum2;
      // } 
      $answer = $sum1 + $sum2;
      return $sum1 . ' ' . '+' . ' ' . $sum2 . ' = ' . $answer;
    }
  }





?>