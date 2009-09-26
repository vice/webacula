<?php
require_once dirname ( __FILE__ ) . '/IndexControllerTest.php';
require_once dirname ( __FILE__ ) . '/JobControllerTest.php';
require_once dirname ( __FILE__ ) . '/VolumeControllerTest.php';
require_once dirname ( __FILE__ ) . '/PoolControllerTest.php';
require_once dirname ( __FILE__ ) . '/StorageControllerTest.php';
require_once dirname ( __FILE__ ) . '/ChartControllerTest.php';
require_once dirname ( __FILE__ ) . '/DirectorControllerTest.php';
require_once dirname ( __FILE__ ) . '/ClientControllerTest.php';
require_once dirname ( __FILE__ ) . '/FileControllerTest.php';
require_once dirname ( __FILE__ ) . '/LogControllerTest.php';
require_once dirname ( __FILE__ ) . '/FeedControllerTest.php';
require_once dirname ( __FILE__ ) . '/WblogbookControllerTest.php';
require_once dirname ( __FILE__ ) . '/HelpControllerTest.php';
require_once dirname ( __FILE__ ) . '/OtherControllerTest.php';
require_once dirname ( __FILE__ ) . '/ErrorControllerTest.php';
require_once dirname ( __FILE__ ) . '/RestoreControllerTest.php';

class ControllersAllTests {

	public static function main() {
		PHPUnit_TextUI_TestRunner::run ( self::suite () );
	}

	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite ( 'Webacula Test Suite - Controllers' );
		$suite->addTestSuite ( 'IndexControllerTest' );
		$suite->addTestSuite ( 'DirectorControllerTest' );
		$suite->addTestSuite ( 'ClientControllerTest' );
		$suite->addTestSuite ( 'JobControllerTest' );
		$suite->addTestSuite ( 'VolumeControllerTest' );
		$suite->addTestSuite ( 'PoolControllerTest' );
		$suite->addTestSuite ( 'StorageControllerTest' );
		$suite->addTestSuite ( 'FileControllerTest' );
		$suite->addTestSuite ( 'LogControllerTest' );
		$suite->addTestSuite ( 'ChartControllerTest' );
		$suite->addTestSuite ( 'FeedControllerTest' );
		$suite->addTestSuite ( 'WblogbookControllerTest' );
		$suite->addTestSuite ( 'HelpControllerTest' );
		$suite->addTestSuite ( 'OtherControllerTest' );
		$suite->addTestSuite ( 'ErrorControllerTest' );
		$suite->addTestSuite ( 'RestoreControllerTest' );
		return $suite;
	}
}