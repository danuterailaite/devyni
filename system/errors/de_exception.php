<?php

/**
 * Standartinio PHP komponento Exception papildymas. Valdomas visas kalidų apdorojimas.
 *
 * PHP version 5
 *
 * Licensed under The MIT License. Redistributions of files must retain the above copyright notice.
 * For the full copyright and license information, please view the LICENSE file that was distributed
 * with this source code.
 *
 * @package    system.errors
 * @author     Jurgis Jaška <meklonas@yahoo.com>
 * @copyright  2011 Jurgis Jaška
 * @license    http://codex.devyni.eu/license
 * @link       http://codex.devyni.eu/package/system.errors
 * @since      0.1.1-alpha
 */

class DE_Exception extends Exception {

	// {{{ convert()
	/**
	 * PHP klaidas paverčia į DE_Exception objektą kuris toliau apdorojamas.
	 *
	 * @access public
	 * @static
	 * @param int $errno Klaidos kodas.
	 * @param string $errstr Klaidos pranešimas.
	 * @param string $errfile Failias kuriame įvyko klaida.
	 * @param int $errline Eilutė kurioje įvyko klaida.
	 * @return null
	 * @throws DE_Exception
	 */
	public static function convert ($errno, $errstr, $errfile, $errline) {

	}
	// }}}

}