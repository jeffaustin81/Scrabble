<?php 
	require_once "src/Scrabble.php";
	
	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{
		function test_one_letter()
		{
			$test = new Scrabble;
			$input = "A";
			
			$result = $test->score($input);
			$this->assertEquals(1, $result);
		}
		
		function test_two_letter()
		{
			$test = new Scrabble;
			$input = "an";
			
			$result = $test->score($input);
			$this->assertEquals(2, $result);
		}
		
		function test_three_letter()
		{
			$test = new Scrabble;
			$input = "zoo";
			
			$result = $test->score($input);
			$this->assertEquals(12, $result);
		}
		
		function test_four_letter()
		{
			$test = new Scrabble;
			$input = "jack";
			
			$result = $test->score($input);
			$this->assertEquals(17, $result);
		}
	}	
?>