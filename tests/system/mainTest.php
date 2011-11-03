<?php

/**
 * Main komponento testas.
 *
 * PHP version 5
 *
 * Licensed under The MIT License. Redistributions of files must retain the above copyright notice.
 * For the full copyright and license information, please view the LICENSE file that was distributed
 * with this source code.
 *
 * @package    PackageName
 * @author     Jurgis Jaška <meklonas@yahoo.com>
 * @copyright  2011 Jurgis Jaška
 * @license    http://codex.devyni.eu/license
 * @link       http://codex.devyni.eu/package/PackageName
 * @since      0.1.1-alpha
 */

require_once SYSTEM . 'main.php';

class MainTest extends PHPUnit_Framework_TestCase {

	protected $_main = null;

	public function setUp () {
		$this->_main = Main::getInstance();
	}

	public function tearDown() {
		unset($this->_main);
	}

	public function testGetInstance () {
		$this->assertInstanceOf('Main', Main::getInstance());
	}

	public function testBootstrap() {

	}
}