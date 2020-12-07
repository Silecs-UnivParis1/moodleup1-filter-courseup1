<?php
/**
 * @package    filter_courseup1
 * @copyright  2013-2020 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Doc : http://docs.moodle.org/dev/Filters


defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2020120700;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2020060900;        // Requires this Moodle version
$plugin->component = 'filter_courseup1';       // Full name of the plugin (used for diagnostics)
$plugin->cron      = 0;
$plugin->maturity  = MATURITY_ALPHA;

$plugin->dependencies = [
    'local_mwscoursetree' => 2020100300,
    'local_widget_courselist' => 2020100300,
    'local_widget_coursesearch' => 2013010100,
];
