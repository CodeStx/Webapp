<?php
/**
 * This file is part of The "phpNitrox" standard package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * @author  BroxinDEV <devbroxin@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT License
 */

/*
 |-------------------------------------------------------------------
 | Define basics
 |-------------------------------------------------------------------
 | 
 | Define main php settings
 |
 */
error_reporting(E_ALL|E_STRICT);

date_default_timezone_set('Europe/Warsaw');

define('DEV', true);
define('ROOT_PATH', realpath(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR);

/*
 |-------------------------------------------------------------------
 | Register class autoloader
 |-------------------------------------------------------------------
 |
 | Load Composer the class main autoloader
 |
 */
$loader = require_once ROOT_PATH . "app" . DIRECTORY_SEPARATOR . "autoload.php";

/*
 |-------------------------------------------------------------------
 | Bootstrap the application
 |-------------------------------------------------------------------
 |
 | Bootstrap the application action from framework for Web distribution.
 */
//require_once ROOT_PATH . "boot" . DIRECTORY_SEPARATOR . "bootstrap.php";

$pView = ROOT_PATH . "app" . DIRECTORY_SEPARATOR . "Resources" . DIRECTORY_SEPARATOR . "view";

$_envTwig = new Twig\Loader\FilesystemLoader($pView);
$_twig = new Twig\Environment($_envTwig, [
    'cache' => ROOT_PATH . "app" . DIRECTORY_SEPARATOR . "cache" . DIRECTORY_SEPARATOR . "twig_view",
    'debug' => true
]);

/*
 |-------------------------------------------------------------------
 | Run the application
 |-------------------------------------------------------------------
 |
 | Handle the request and response web site content. Maintained by
 | Front Controller class `AppKernel`.
 */


