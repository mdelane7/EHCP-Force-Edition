<?php

/**
  * header.tpl
  *
  * Template for constructing a header that is sent to the browser.
  *
  * The following variables are available in this template:
  *      + $header - The header string to be sent
  *
  * @copyright 1999-2020 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: header.tpl 14845 2020-01-07 08:09:34Z pdontthink $
  * @package squirrelmail
  * @subpackage templates
  */


// retrieve the template vars
//
extract($t);


echo $header;


