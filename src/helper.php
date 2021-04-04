<?php
/**
 * Helper
 *
 * @version       0.1.0
 * @package       helper
 * @author        Alexandre ELISÉ <contact@alexandre-elise.fr>
 * @copyright (c) 2009-2021 . Alexandre ELISÉ . Tous droits réservés.
 * @license       GPL-2.0-and-later GNU General Public License v2.0 or later
 * @link          https://coderparlerpartager.fr
 */

use Joomla\CMS\Http\HttpFactory;
use Joomla\Registry\Registry;


defined('_JEXEC') or die;

/**
 * Class VitalityHelper
 */
abstract class VitalityHelper
{
	/**
	 * @param           $domain
	 * @param   string  $key
	 */
	public static function getVitals($domain, $key = '')
	{
		$finalUrl = 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url=' . $domain;
		if (!empty($key))
		{
			$finalUrl .= '&key=' . $key;
		}
		
		$options = new Registry(
			array(
				'headers' => array(
					'Content-Type' => 'application/json',
				),
			)
		);
		
		$http = HttpFactory::getHttp($options);
		$response = $http->get($finalUrl);
		http_response_code($response->code);
		header('Content-Type: application/json');
		return $response->body;
	}
}
