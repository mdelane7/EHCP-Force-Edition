<?php

/**
 * Sample Fortune plugin configuration file
 *
 * Configuration defaults to /usr/games/fortune with short quotes
 *
 * @copyright 2004-2020 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_sample.php 14845 2020-01-07 08:09:34Z pdontthink $
 * @package plugins
 * @subpackage fortune
 */

/**
 * Command that is used to display fortune cookies
 * @global string $fortune_command
 * @since 1.5.2
 */
$fortune_command = '/usr/games/fortune -s';
