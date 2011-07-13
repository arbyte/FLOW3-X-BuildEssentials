<?php
namespace TYPO3\FLOW3\Build;

/*                                                                        *
 * This script belongs to the FLOW3 build system.                         *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License as published by the Free   *
 * Software Foundation, either version 3 of the License, or (at your      *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        *
 * You should have received a copy of the GNU General Public License      *
 * along with the script.                                                 *
 * If not, see http://www.gnu.org/licenses/gpl.html                       *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

@include_once('vfsStream/vfsStream.php');
if (!class_exists('vfsStreamWrapper')) {
	exit(PHP_EOL . 'FLOW3 Bootstrap Error: The functional test bootstrap requires vfsStream to be installed (e.g. via PEAR). Please also make sure that it is accessible via the PHP include path.' . PHP_EOL . PHP_EOL);
}

$_SERVER['FLOW3_ROOTPATH'] = dirname(__FILE__) . '/../../../';

require_once($_SERVER['FLOW3_ROOTPATH'] . 'Packages/Framework/TYPO3.FLOW3/Classes/Core/Bootstrap.php');

$bootstrap = new \TYPO3\FLOW3\Core\Bootstrap('Testing');
$bootstrap->run();

?>