<?php

/**
 * delete_message.php
 *
 * Deletes a meesage from the IMAP server
 *
 * @copyright 1999-2020 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: delete_message.php 14845 2020-01-07 08:09:34Z pdontthink $
 * @package squirrelmail
 */

define('PAGE_NAME', 'delete_message');

/**
 * Include the SquirrelMail initialization file.
 */
include('../include/init.php');
error_box('delete_message.php script is obsolete since 1.5.1.');
$oTemplate->display('footer.tpl');
