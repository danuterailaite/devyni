<?php

/**
 * Visai sistemai reikalingos konstantos.
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

/**
 * Aplinkos konstanta. Nusako ar prpgrama dirba production stadijoje.
 */
define ('DE_ENV_PRODUCTION', false);

/**
 * Aplinkos konstanta. Nurodo jog įkeltas teisingas Devyni komponentų pagrindas.
 */
define ('DE_ENV_VALID', true);

/**
 * Aplankų skirtukas.
 */
define ('DS', "/");

/**
 * Standartinė nauja eilutė.
 */
define ('NL', "\n");

/**
 * Pranešimų tipų konstantos.
 */
define('DE_TYPE_ALL', 				10001);
define('DE_TYPE_PHP', 				10002);
define('DE_TYPE_ADMIN', 			10003);
define('DE_TYPE_DEBUG', 			10004);
define('DE_TYPE_ERROR', 			10005);
define('DE_TYPE_CRYTICAL', 			10006);
define('DE_TYPE_NOTICE', 			10007);
define('DE_TYPE_INFO', 				10008);
define('DE_TYPE_MVC', 				10009);
define('DE_TYPE_MVC_MODEL', 		10010);
define('DE_TYPE_MVC_VIEW', 			10011);
define('DE_TYPE_MVC_ACTION', 		10012);
define('DE_TYPE_MVC_CONTROLLER', 	10013);
define('DE_TYPE_FORBIDDEN', 		10014);

/**
 * Pagrindinei programos aplankai.
 */
define ('SYSTEM', 			realpath(__DIR__) . DS);
define ('ROOT',		 		dirname(SYSTEM) . DS);
define ('APPLICATIONS', 	ROOT . 'applications' . DS);
define ('TESTS',			ROOT . 'tests' . DS);
define ('BIN', 				ROOT . 'bin' . DS);
define ('DOCS', 			ROOT . 'docs' . DS);

