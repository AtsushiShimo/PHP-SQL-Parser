<?php
/**
 * issue248.php
 *
 * Test case for PHPSQLCreator.
 */

namespace PHPSQLParser\Test\Creator;

use PHPSQLParser\PHPSQLParser;
use PHPSQLParser\PHPSQLCreator;

class Issue248Test extends \PHPUnit_Framework_TestCase {

	public function testIssue248() {
		/*
    	 * https://github.com/greenlion/PHP-SQL-Parser/issues/248
    	 * DROP INDEX doesn't get created.
    	 */
		$sql     = "DROP INDEX test";
		$parser  = new PHPSQLParser( $sql );
		$creator = new PHPSQLCreator( $parser->parsed );
		$this->assertEquals( $creator->created, $sql, 'drop index statement' );
	}
}
