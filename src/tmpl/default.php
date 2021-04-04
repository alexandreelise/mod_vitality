<?php
/**
 * @package    vitality
 *
 * @author     alexandree <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

//TODO: show the results in a more user friendly way
?>
<pre>
<?php echo VitalityHelper::getVitals($domain, $apiKey); ?>
</pre>
