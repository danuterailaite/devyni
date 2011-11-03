<?php

/**
* Reikalingi papildomi konstantų aprašai ir visos reikalingos papildomos.
*/
require_once 'constants.php';
require_once 'functions.php';
require_once SYSTEM . 'errors/de_exception.php';

/**
 * Pagrindinis sistemos komponentas. Apdoroją komponentų ryšius ir programos vykdymo seką. Galimo
 * dviejų tipų programos: webApp ir consoleApp.
 *
 * PHP version 5
 *
 * Licensed under The MIT License. Redistributions of files must retain the above copyright notice.
 * For the full copyright and license information, please view the LICENSE file that was distributed
 * with this source code.
 *
 * @package    system
 * @author     Jurgis Jaška <meklonas@yahoo.com>
 * @copyright  2011 Jurgis Jaška
 * @license    http://codex.devyni.eu/license
 * @link       http://codex.devyni.eu/package/system
 * @since      0.1.1-alpha
 */

class Main {

	/**
	 * Singleton objektas.
	 *
	 * @var Main
	 * @static
	 */
	public static $instance = null;

	// {{{ getInstance()
	/**
	 * Metodas singleton pattern'ui sukurti.
	 *
	 * @access public
	 * @static
	 * @return Main Šio komponento objektas.
	 */
	public static function getInstance () {
		if (!is_object(self::$instance)) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	// }}}

	// {{{ webApp()
	/**
	 * Inicijuojama web programa. Sistema pradeda darbą ir naudoja webApp reikalingus komponentus.
	 *
	 * @access public
	 * @static
	 * @param array $config Programos nustatymai, jei reikalingi nestandartiniai.
	 * @return bool true
	 */
	public static function webApp ($config = null) {
		/*
		 * Nustatomi kelias iki dabartinės programos aplankų.
		 */
		defined('DE_ENV_MODULE') or define ('DE_ENV_MODULE', 'default');
		define ('APP', APPLICATIONS . DE_ENV_MODULE . DS);


	}
	// }}}

	// {{{ dispatch()
	/**
	 * Tolesnis vykdymas perduodamas MVC komponentams. II-oji programos vykdymo stadija.
	 *
	 * @access public
	 * @static
	 * @param string $controller Kontrolieriaus pavadinimas.
	 * @param string $action Veiksmo pavadinimas.
	 * @param array $params Papildomi parametrai.
	 * @return null
	 */
	public static function dispatch ($controller, $action, $params = array()) {

	}
	// }}}

	// {{{ consoleApp()
	/**
	* Inicijuojama console programa. Sistema pradeda darbą ir naudoja consolei reikalingus
	* komponentus.
	*
	* @access public
	* @static
	* @param array $config Programos nustatymai, jei reikalingi nestandartiniai.
	* @return bool true
	* @deprecated
	*/
	public static function consoleApp ($config = null) {
		return true;
	}
	// }}}

	// {{{ getVersion()
	/**
	 * Gražinama programos (karkaso) versija.
	 *
	 * @access public
	 * @static
	 * @return string Versijos numeris.
	 */
	public static function getVersion() {
		$v = file_get_contents(SYSTEM . 'version');
		return $v;
	}
	// }}}

}