<?php
require_once(dirname(__FILE__)."/../lib/config.php");

use RMD\FormTemplate;

class DataSchemeTest extends PHPUnit_Framework_TestCase {
	public function testLoadScheme() {
		$d = new RMD\FormTemplate\StandardArticleScheme("scheme_standard_article");
		$this->assertNotEmpty($d->getFormElements());
	}
}