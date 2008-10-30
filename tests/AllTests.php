<?php
/**
Created by Cairo Noleto (http://www.caironoleto.com) at Add4 Comunicação (http://www.add4.com.br/)

To add a new test, add '$path ."FileTest'sName.php"' in array and run phpunit AllTests.php
*/
require_once 'PHPUnit/Framework.php';
class AllTests {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite();
		$path = dirname(__FILE__) ."/";
		$files = array(
			$path ."ConfigTest.php",
			$path ."PhpburnConfigurationTest.php",
			$path ."PhpburnConnectionTest.php",
			$path ."MappingTest.php",
		);
		$suite->addTestFiles($files);
		return $suite;
	}
}
?>
