<?php
/**
 * @package    vitality
 *
 * @author     alexandree <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Uri\Uri;

defined('_JEXEC') or die;

// The below line is no longer used in Joomla 4
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Access to module parameters
$domain = $params->get('domain', Uri::getInstance()->toString(array('scheme', 'host', 'port')));

$apiKey = $params->get('api_key', '');

JLoader::register('VitalityHelper', __DIR__ . '/helper.php');

require ModuleHelper::getLayoutPath('mod_vitality', $params->get('layout', 'default'));
