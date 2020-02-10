<?php

/*
 -------------------------------------------------------------------------
 Plugin for GLPI
 Copyright (C) 2020 by the huertab Development Team.

 https://github.com/huertab/printgenerator
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Example.

 Example is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Example is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Example. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

// ----------------------------------------------------------------------
// Original Author of file: huertab
// Purpose of file:
// ----------------------------------------------------------------------


define('PRINTGENERATOR_VERSION', '1.0.0');

/**
 * Init the hooks of the plugins - Needed
 *
 * @return void
 */
function plugin_init_printgenerator() {
   global $PLUGIN_HOOKS;

   //required!
   $PLUGIN_HOOKS['csrf_compliant']['printgenerator'] = true;

   //some code here, like call to Plugin::registerClass(), populating PLUGIN_HOOKS, ...
}

/**
 * Get the name and the version of the plugin - Needed
 *
 * @return array
 */
function plugin_version_printgenerator() {
   return [
      'name'           => 'printgenerator',
      'version'        => PRINTGENERATOR_VERSION,
      'author'         => 'Boris HUERTA and <a href="http://foobar.com">Foo Bar</a>',
      'license'        => 'GLPv3',
      'homepage'       => 'http://perdu.com',
      'requirements'   => [
         'glpi'   => [
            'min' => '9.4'
            'max' => '9.5'
         ]
      ]
   ];
}

/**
 * Optional : check prerequisites before install : may print errors or add to message after redirect
 *
 * @return boolean
 */
function plugin_printgenerator_check_prerequisites() {
   //do what the checks you want
   return true;
}

/**
 * Check configuration process for plugin : need to return true if succeeded
 * Can display a message only if failure and $verbose is true
 *
 * @param boolean $verbose Enable verbosity. Default to false
 *
 * @return boolean
 */
function plugin_printgenerator_check_config($verbose = false) {
   if (true) { // Your configuration check
      return true;
   }

   if ($verbose) {
      echo "Installed, but not configured";
   }
   return false;
}