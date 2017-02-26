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
* essaymaxwords question type upgrade code.
*
* @package    qtype
* @subpackage essaymaxwords
* @copyright  2011 The Open University
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

defined('MOODLE_INTERNAL') || die();

/**
* Upgrade code for the essaymaxwords question type.
* @param int $oldversion the version we are upgrading from.
*/
function xmldb_qtype_essaymaxwords_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    // Moodle v2.8.0 release upgrade line.
    // Put any upgrade step following this.

    // Moodle v2.9.0 release upgrade line.
    // Put any upgrade step following this.

    // Moodle v3.0.0 release upgrade line.
    // Put any upgrade step following this.

    // Moodle v3.1.0 release upgrade line.
    // Put any upgrade step following this.


//    if ($oldversion < 2016052309) {
//
//        $table = new xmldb_table('qtype_essaymaxwords_options');
//
////        $field = new xmldb_field('responsemaxwords', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'responsetemplateformat');
////        if (!$dbman->field_exists($table, $field)) {
////            $dbman->add_field($table, $field);
////        }
//        
//        $field = new xmldb_field('responseminwords', XMLDB_TYPE_INTEGER, '10', null, null, null, null, 'responsetemplateformat');
//        if (!$dbman->field_exists($table, $field)) {
//            $dbman->add_field($table, $field);
//        }        
//
//        // essaymaxwords savepoint reached.
//        upgrade_plugin_savepoint(true, 2016052309, 'qtype', 'essaymaxwords');
//    }


    return true;
}
