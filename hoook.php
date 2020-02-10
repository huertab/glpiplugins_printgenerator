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

// Hook called on profile change
// Good place to evaluate the user right on this plugin
// And to save it in the session
/**
 * Install hook
 *
 * @return boolean
 */
function plugin_myexample_install() {
   //do some stuff like instanciating databases, default values, ...
   return true;
}

/**
 * Uninstall hook
 *
 * @return boolean
 */
function plugin_myexample_uninstall() {
   //to some stuff, like removing tables, generated files, ...
   return true;
}