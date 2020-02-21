<?php
/**
 * Common spellcheck class functions
 * @copyright 1999-2020 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: common.php 14845 2020-01-07 08:09:34Z pdontthink $
 * @package plugins
 * @subpackage squirrelspell
 */

/**
 * @package plugins
 * @subpackage squirrelspell
 */
class squirrelspell {
    var $error = '';
    /**
     * @param string $sError error message
     * @return boolean false
     */
    function set_error($sError) {
        $this->error = $sError;
        return false;
    }

    function check_text($sText) {
        return $this->set_error('check_text method is not implemented in this class.');
    }
}