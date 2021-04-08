<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Frontpage layout for the moove theme.
 *
 * @package   theme_moove
 * @copyright 2017 Willian Mano - http://conecti.me
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->libdir . '/behat/lib.php');
$themesettings = new \theme_moove\util\theme_settings();
if (isloggedin()) {

    $templatecontext = [
        'output' => $OUTPUT,
        'navclass' => 'nav-item mr-4',
        'home' => 'home',
        'courses' => 'COURSES',
        'guides' => 'GUIDES',
        'earn' => 'EARN',
        'updates' => 'UPDATES',
    ];
    echo $OUTPUT->render_from_template('theme_moove/custom_navigation', $templatecontext);
} else {
    echo $OUTPUT->render_from_template('theme_moove/custom_navigation', $templatecontext);
}
