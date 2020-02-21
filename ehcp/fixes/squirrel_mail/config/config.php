<?php

/**
 * Default SquirrelMail configuration file
 *
 * BEFORE EDITING THIS FILE!
 *
 * Don't edit this file directly.  Copy it to config.php before you
 * edit it.  However, it is best to use the configuration script
 * conf.pl if at all possible.  That is the easiest and cleanest way
 * to configure.
 *
 * Note on SECURITY: some options require putting a password in this file.
 * Please make sure that you adapt its permissions appropriately to avoid
 * passwords being leaked to e.g. other system users. Take extra care when
 * the webserver is shared with untrusted users.
 *
 * @copyright 2000-2020 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: config_default.php 14845 2020-01-07 08:09:34Z pdontthink $
 * @package squirrelmail
 * @subpackage config
 */

/* Do not change this value. */
global $config_version;
$config_version = '1.5.0';

/*** Organization preferences ***/
/**
 * Organization's name
 * @global string $org_name
 */
$org_name = "Easy Hosting Control Panel Webmail";

/**
 * Organization's logo picture (blank if none)
 * @global string $org_logo
 */
$org_logo = SM_PATH . 'images/sm_logo.png';

/**
 * The width of the logo (0 for default)
 * @global string $org_logo_width
 */
$org_logo_width = '308';

/**
 * The height of the logo (0 for default)
 * @global string $org_logo_height
 */
$org_logo_height = '111';

/**
 * Webmail Title
 *
 * This is the web page title that appears at the top of the browser window.
 * @global string $org_title
 */
$org_title = "Easy Hosting Control Panel - Webmail - squirrelmail";

/**
 * Signout page
 *
 * Rather than going to the signout.php page (which only allows you
 * to sign back in), setting signout_page allows you to sign the user
 * out and then redirect to whatever page you want. For instance,
 * the following would return the user to your home page:
 *   $signout_page = '/';
 * Set to the empty string to continue to use the default signout page.
 * @global string $signout_page
 */
$signout_page = '';

/**
 * Top frame
 *
 * By default SquirrelMail takes up the whole browser window,
 * this allows you to embed it within sites using frames. Set
 * this to the frame you want it to stay in.
 * @global string $frame_top
 */
$frame_top = '_top';

/**
 * Provider name
 *
 * Here you can set the text of the link displayed on the top-right
 * of the message list.
 *
 * Defaults to empty (no link).
 *
 * @global string $provider_name
 */
$provider_name = 'Easy Hosting Control Panel';

/**
 * Provider URI
 *
 * Here you can set URL of the link displayed on the top-right of
 * the message list.
 *
 * Defaults to empty (no link).
 *
 * @global string $provider_uri
 */
$provider_uri = 'http://www.ehcpforce.tk';

/*** Server Settings ***/
/**
 * Default Domain
 *
 * The domain part of local email addresses.
 *   This is for all messages sent out from this server.
 *   Reply address is generated by $username@$domain
 * Example: In bob@example.com, example.com is the domain.
 * @global string $domain
 */
$domain = 'ehcpforce.tk';

/**
 * Time offset inversion
 *
 * If you are running on a machine that doesn't have the tm_gmtoff
 * value in your time structure and if you are in a time zone that
 * has a negative offset, you need to set this value to 1. This is
 * typically people in the US that are running Solaris 7.
 * @global bool $invert_time
 */
$invert_time = false;

/**
 * Default send transport
 *
 * What should be used when sending email.
 * If it is set to false, SquirrelMail will use SMTP server settings.
 * If it is set to true, SquirrelMail will use program defined in
 * $sendmail_path
 * @global bool $useSendmail
 */
$useSendmail = true;

/**
 * Your SMTP server (usually the same as the IMAP server).
 * @global string $smtpServerAddress
 */
$smtpServerAddress = 'localhost';
/**
 * Your SMTP port number (usually 25).
 * @global integer $smtpPort
 */
$smtpPort = 25;

/**
 * SquirrelMail header encryption
 *
 * Encryption key allows to hide SquirrelMail Received: headers
 * in outbound messages. Interface uses encryption key to encode
 * username, remote address and proxied address, then stores encoded
 * information in X-Squirrel-* headers.
 *
 * Warning: used encryption function is not bulletproof. When used
 * with static encryption keys, it provides only minimal security
 * measures and information can be decoded quickly.
 *
 * Encoded information can be decoded with decrypt_headers.php script
 * from SquirrelMail contrib/ directory.
 * @global string $encode_header_key
 * @since 1.5.1 and 1.4.5
 */
$encode_header_key = '';

/**
 * Path to Sendmail
 *
 * Program that should be used when sending email. SquirrelMail expects that
 * this program will follow options used by original sendmail
 * (http://www.sendmail.org). Support of -f argument is required.
 * @global string $sendmail_path
 */
$sendmail_path = '/usr/sbin/sendmail';

/**
 * Extra sendmail command arguments.
 *
 * Sets additional sendmail command arguments. Make sure that arguments are
 * supported by your sendmail program. -f argument is added automatically by
 * SquirrelMail scripts. Variable defaults to standard /usr/sbin/sendmail
 * arguments. If you use qmail-inject, nbsmtp or any other sendmail wrapper,
 * which does not support -t and -i arguments, set variable to empty string
 * or use arguments suitable for your mailer.
 * @global string $sendmail_args
 * @since 1.5.1 and 1.4.8
 */
$sendmail_args = '-i -t';

/**
 * IMAP server address
 *
 * The dns name (or IP address) for your imap server.
 * @global string $imapServerAddress
 */
$imapServerAddress = 'localhost';

/**
 * IMAP server port
 *
 * Port used by your imap server. (Usually 143)
 * @global integer $imapPort
 */
$imapPort = 143;

/**
 * IMAP server type
 *
 * The type of IMAP server you are running.
 * Valid type are the following (case is important):
 *   bincimap
 *   courier
 *   cyrus
 *   dovecot
 *   exchange
 *   hmailserver
 *   macosx
 *   mercury32
 *   uw
 *   other
 *
 * Please note that this changes only some of server settings.
 *
 * In order to set everything correctly, you need to adjust several
 * SquirrelMail options. These options are listed in doc/presets.txt
 * @global string $imap_server_type
 */
$imap_server_type = 'other';

/**
 * Secure IMAP connection controls
 *
 * 0 - use plain text connection,
 * 1 - use imaps (adds tls:// prefix to hostname),
 * 2 - use IMAP STARTTLS extension (rfc2595).
 *
 * Was boolean before 1.5.1.
 * @global integer $use_imap_tls
 * @since 1.4.0
 */
$use_imap_tls = 0;

/**
 * Secure SMTP connection controls
 *
 * 0 - use plain text connection,
 * 1 - use ssmtp (adds tls:// prefix to hostname),
 * 2 - use SMTP STARTTLS extension (rfc2487).
 *
 * Was boolean before 1.5.1.
 * @global integer $use_smtp_tls
 * @since 1.4.0
 */
$use_smtp_tls = 0;

/**
 * SMTP authentication mechanism
 *
 * auth_mech can be either 'none', 'login','plain', 'cram-md5', or 'digest-md5'
 * @global string $smtp_auth_mech
 */
$smtp_auth_mech = 'none';

/**
 * Custom SMTP authentication username
 *
 * IMAP username is used if variable is set to empty string.
 * Variable is included in main configuration file only from 1.5.2 version.
 * Older versions stored it in config_local.php.
 * @global string $smtp_sitewide_user
 * @since 1.5.0
 */
$smtp_sitewide_user = '';

/**
 * Custom SMTP authentication password
 *
 * IMAP password is used if $smtp_sitewide_user global is set to empty string.
 * Variable is included in main configuration file only from 1.5.2 version.
 * Older versions stored it in config_local.php.
 * @global string $smtp_sitewide_pass
 * @since 1.5.0
 */
$smtp_sitewide_pass = '';

/**
 * IMAP authentication mechanism
 *
 * auth_mech can be either 'login','plain', 'cram-md5', or 'digest-md5'
 * @global string $imap_auth_mech
 */
$imap_auth_mech = 'login';

/**
 * Show login error from the IMAP server (true) or show
 * the traditional/generic "Unknown user or password
 * incorrect" (false)?
 *
 * @global boolean $display_imap_login_error
 */
$display_imap_login_error = false;

/**
 * IMAP folder delimiter
 *
 * This is the delimiter that your IMAP server uses to distinguish between
 * folders.  For example, Cyrus uses '.' as the delimiter and a complete
 * folder would look like 'INBOX.Friends.Bob', while UW uses '/' and would
 * look like 'INBOX/Friends/Bob'.  Normally this should be left at 'detect'
 * but if you are sure you know what delimiter your server uses, you can
 * specify it here.
 *
 * To have it autodetect the delimiter, set it to 'detect'.
 * @global string $optional_delimiter
 */
$optional_delimiter = 'detect';

/**
 * POP before SMTP setting
 *
 * Do you wish to use POP3 before SMTP?  Your server must
 * support this in order for SquirrelMail to work with it.
 * @global bool $pop_before_smtp
 */
$pop_before_smtp = false;

/**
 * POP before SMTP server address
 *
 * When using POP3 before SMTP, if the POP server address is
 * not the same as the SMTP server address, specify it here.
 * If this is left empty, the SMTP server address will be
 * used by default.
 * @global bool $pop_before_smtp_host
 */
$pop_before_smtp_host = '';


/*** Folder Settings ***/
/**
 * Default IMAP folder prefix
 *
 * Many servers store mail in your home directory. With this, they
 * store them in a subdirectory: mail/ or Mail/, etc. If your server
 * does this, please set this to what the default mail folder should
 * be. This is still a user preference, so they can change it if it
 * is different for each user.
 *
 * Example:
 *     $default_folder_prefix = 'mail/';
 *        -- or --
 *     $default_folder_prefix = 'Mail/folders/';
 *
 * If you do not use this, set it to the empty string.
 * @global string $default_folder_prefix
 */
$default_folder_prefix = '';

/**
 * User level prefix control
 *
 * If you do not wish to give them the option to change this, set it
 * to false. Otherwise, if it is true, they can change the folder prefix
 * to be anything.
 * @global bool $show_prefix_option
 */
$show_prefix_option = false;

/**
 * The following are related to deleting messages.
 *   $default_move_to_trash
 *      If this is set to 'true', when 'delete' is pressed, it
 *      will attempt to move the selected messages to the folder
 *      named $trash_folder. If it's set to 'false', we won't even
 *      attempt to move the messages, just delete them.
 *   $default_move_to_sent
 *      If this is set to 'true', sent messages will be stored in
 *      $sent_folder by default.
 *   $default_save_as_draft
 *      If this is set to 'true', users are able to use $draft_folder
 *      to store their unfinished messages.
 *   $trash_folder
 *      This is the path to the default trash folder. For Cyrus
 *      IMAP, it would be 'INBOX.Trash', but for UW it would be
 *      'Trash'. We need the full path name here.
 *   $draft_folder
 *      This is the patch to where Draft messages will be stored.
 *   $auto_expunge
 *      If this is true, when a message is moved or copied, the
 *      source mailbox will get expunged, removing all messages
 *      marked 'Deleted'.
 *   $sent_folder
 *      This is the path to where Sent messages will be stored.
 *   $delete_folder
 *      If this is true, when a folder is deleted then it will
 *      not get moved into the Trash folder.
 * @global bool $default_move_to_trash
 * @global bool $default_move_to_sent
 * @global bool $default_save_as_draft
 * @global string $trash_folder
 * @global string $sent_folder
 * @global string $draft_folder
 * @global bool $auto_expunge
 * @global bool $delete_folder
 */
$default_move_to_trash = true;
$default_move_to_sent  = true;
$default_save_as_draft = true;
$trash_folder = 'INBOX.Trash';
$sent_folder  = 'INBOX.Sent';
$draft_folder = 'INBOX.Drafts';
$auto_expunge = true;
$delete_folder = false;

/**
 * Special Folder Color Control
 *
 * Whether or not to use a special color for special folders. If not,
 * special folders will be the same color as the other folders.
 * @global bool $use_special_folder_color
 */
$use_special_folder_color = true;

/**
 * Create Special Folders Control
 *
 * Should I create the Sent and Trash folders automatically for
 * a new user that doesn't already have them created?
 * @global bool $auto_create_special
 */
$auto_create_special = true;

/**
 * List Special Folders First Control
 *
 * Whether or not to list the special folders first (true/false).
 * @global bool $list_special_folders_first
 */
$list_special_folders_first = true;

/**
 * Subfolder Layout Control
 *
 * Are all your folders subfolders of INBOX (i.e. cyrus IMAP server).
 * If you are unsure, set it to false.
 * @global bool $default_sub_of_inbox
 */
$default_sub_of_inbox = true;

/**
 * Subfolder Format Control
 *
 * Some IMAP daemons (UW) handle folders weird. They only allow a
 * folder to contain either messages or other folders, not both at
 * the same time. This option controls whether or not to display an
 * option during folder creation. The option toggles which type of
 * folder it should be.
 *
 * If this option confuses you, just set it to 'true'. You can not hurt
 * anything if it's true, but some servers will respond weird if it's
 * false. (Cyrus works fine whether it's true OR false).
 * @global bool $show_contain_subfolders_option
 */
$show_contain_subfolders_option = false;

/**
 * These next two options set the defaults for the way that the
 * users see their folder list.
 *   $default_unseen_notify
 *       Specifies whether or not the users will see the number of
 *       unseen in each folder by default and also which folders to
 *       do this to. Valid values are: 1=none, 2=inbox, 3=all.
 *   $default_unseen_type
 *       Specifies the type of notification to give the users by
 *       default. Valid choice are: 1=(4), 2=(4,25).
 * @global integer $default_unseen_notify
 * @global integer $default_unseen_type
 */
$default_unseen_notify = 2;
$default_unseen_type   = 1;

/**
 * NoSelect Fix Control
 *
 * This enables the no select fix for Cyrus when subfolders
 * exist but parent folders do not
 * @global bool $noselect_fix_enable
 */
$noselect_fix_enable = false;

/*** General options ***/
/**
 * Path to the data/ directory
 *
 *   You need to create this directory yourself (see INSTALL).
 *
 *   It is a possible security hole to have a writable directory
 *   under the web server's root directory (ex: /home/httpd/html).
 *   The path name can be absolute or relative (to the config directory).
 *   If path is relative, it must use SM_PATH constant.
 *   Here are two examples:
 *
 * Absolute:
 *   $data_dir = '/var/local/squirrelmail/data/';
 *
 * Relative (to main SM directory):
 *   $data_dir = SM_PATH . 'data/';
 *   (NOT recommended: you need to secure apache to make sure these
 *   files are not world readable)
 *
 * @global string $data_dir
 */
$data_dir = '/var/www/new/ehcp/webmail2/data/';

/**
 * Attachments directory
 *
 * Path to directory used for storing attachments while a mail is
 * being sent. There are a few security considerations regarding
 * this directory:
 *    + It should have the permission 733 (rwx-wx-wx) to make it
 *      impossible for a random person with access to the webserver to
 *      list files in this directory. Confidential data might be laying
 *      around there.
 *    + Since the webserver is not able to list the files in the content
 *      is also impossible for the webserver to delete files lying around
 *      there for too long. You should have some script that deletes
 *      left over temp files.
 *    + It should probably be another directory than data_dir.
 * @global string $attachment_dir
 */
$attachment_dir = '/var/www/new/ehcp/webmail2/data/';

/**
 * Hash level used for data directory.
 *
 * This option allows spliting file based SquirrelMail user
 * data storage directory into several subfolders. Number from
 * 0 to 4 allows allows having up to four subfolder levels.
 *
 * Hashing should speed up directory access if you have big number
 * of users (500 and more).
 * @global integer $dir_hash_level
 */
$dir_hash_level = 0;

/**
 * Default Size of Folder List
 *
 * This is the default size of the folder list. Default
 * is 150, but you can set it to whatever you wish.
 * @global string $default_left_size
 */
$default_left_size = '150';

/**
 * Username Case Control
 *
 * Some IMAP servers allow a username (like 'bob') to log in if they use
 * uppercase in their name (like 'Bob' or 'BOB'). This creates extra
 * preference files.  Toggling this option to true will transparently
 * change all usernames to lowercase.
 * @global bool $force_username_lowercase
 */
$force_username_lowercase = false;

/**
 * Email Priority Control
 *
 * This option enables use of email priority flags by end users.
 * @global bool $default_use_priority
 */
$default_use_priority = true;

/**
 * SquirrelMail Attributions Control
 *
 * This option disables display of "created by SquirrelMail developers"
 * strings and links.
 * @global bool $hide_sm_attributions
 * @since 1.2.0
 */
$hide_sm_attributions = false;

/**
 * Delivery Receipts Control
 *
 * This option enables use of read/delivery receipts by end users.
 * @global bool $default_use_mdn
 */
$default_use_mdn = true;

/**
 * Identity Controls
 *
 * If you don't want to allow users to change their email address
 * then you can set $edit_identity to false; if you want them to
 * not be able to change their full name too then set $edit_name
 * to false as well. $edit_reply_to likewise controls users' ability
 * to change their reply-to address. $edit_name and $edit_reply_to
 * have no effect unless $edit_identity is false;
 * @global bool $edit_identity
 * @global bool $edit_name
 * @global bool $edit_reply_to
 */
$edit_identity = true;
$edit_name = true;
$edit_reply_to = true;

/**
 * SquirrelMail adds username information to every sent email.
 * It is done in order to prevent possible sender forging when
 * end users are allowed to change their email and name
 * information.
 *
 * You can disable this header, if you think that it violates
 * user's privacy or security. Please note, that setting will
 * work only when users are not allowed to change their identity.
 *
 * See SquirrelMail bug tracker #847107 for more details about it.
 * @global bool $hide_auth_header
 * @since 1.5.1 and 1.4.5
 */
$hide_auth_header = false;

/**
 * Server Side Threading Control
 *
 * Set it to true, if you want to disable server side thread 
 * sorting options. Your IMAP server must support the THREAD 
 * extension for this to have any effect.
 * 
 * Older SquirrelMail versions used $allow_thread_sort option.
 * @global bool $disable_thread_sort
 * @since 1.5.1
 */
$disable_thread_sort = false;

/**
 * Server Side Sorting Control
 *
 * Set it to true, if you want to disable server side sorting 
 * and use SM client side sorting instead (client side sorting 
 * can be slow). Your IMAP server must support the SORT extension 
 * for this to have any effect.
 * 
 * Older SquirrelMail versions used $allow_server_sort option.
 * @global bool $disable_server_sort
 * @since 1.5.1
 */
$disable_server_sort = false;

/**
 * IMAP Charset Use Control
 *
 * This option allows you to choose if SM uses charset search
 * Your imap server should support SEARCH CHARSET command for
 * this to work.
 * @global bool $allow_charset_search
 */
$allow_charset_search = true;

/**
 * Search functions control
 *
 * This option allows you to control the use of advanced search form.
 * Set to 0 to enable basic search only, 1 to enable advanced search only
 * or 2 to enable both.
 * @global integer $allow_advanced_search
 */
$allow_advanced_search = 0;

/**
 * PHP session name.
 *
 * Leave this alone unless you know what you are doing.
 * @global string $session_name
 */
$session_name = 'SQMSESSID';

/**
 * Secure Cookies
 *
 * Only transmit cookies via a secure connection
 * if the session was started using HTTPS/SSL?
 *
 * Highly recommended
 *
 * @global bool $only_secure_cookies
 * @since 1.5.2 and 1.4.16
 */
$only_secure_cookies = true;

/**
 * Secure Forms
 *
 * Disable security tokens used to authenticate the
 * source of user data received by SquirrelMail?
 *
 * It is highly discouraged to enable this setting.
 *
 * @global bool $disable_security_tokens
 * @since 1.5.2 and 1.4.20RC1
 */
$disable_security_tokens = false;

/**
 * Check Page Referrer
 *
 * Enforces a safety check on page requests by checking
 * that the referrer is the domain specified by this
 * setting.  If this setting is "###DOMAIN###", the
 * current value of the $domain variable will be used
 * for the check.
 *
 * If a browser doesn't send referrer data, this check
 * will be silently bypassed.
 *
 * Examples:
 * $check_referrer = 'example.com';
 * $check_referrer = '###DOMAIN###';
 *
 * @global string $check_referrer
 * @since 1.5.2 and 1.4.20RC1
 */
$check_referrer = '';

/**
 * Security Image Type
 *
 * Switches between using a transparent image
 * and one that states "this image has been
 * removed for security reasons"
 *
 * @global bool $use_transparent_security_image
 * @since 1.5.2 and 1.4.23
 */
$use_transparent_security_image = true;


/**
 * User Themes
 *   You can define your own theme and put it in directory in SM_PATH/css/.
 *   You must call it as the example below. You can name the theme
 *   whatever you want.
 *
 * To add a new theme to the options that users can choose from, just
 * add a new number to the array at the bottom, and follow the pattern.
 *
 * $user_theme_default sets theme that will be used by default
 *
 * @global integer $user_theme_default
 * @since 1.5.2
 */
$user_theme_default = 0;

/**
 * Listing of installed themes
 * @global array $user_themes
 * @since 1.5.2
 */
$user_themes[0]['PATH'] = 'none';
$user_themes[0]['NAME'] = 'Default';

$user_themes[1]['PATH'] = '../css/blue_gradient/';
$user_themes[1]['NAME'] = 'Blue Options';

/**
 * Message Icons control
 *
 * Use icons for message and folder markers
 * @global bool $use_icons
 * @since 1.5.1
 */
$use_icons = true;

/**
 * Icon Themes
 *    You can create your own icon themes and put them in a directory in
 *    SM_PATH/images/themes/.  Your users will be able to choose whatever
 *    icon themes are listed below.
 * 
 *    To add a new theme to the list of available icon themes, just add a new
 *    number to the array below and follow the pattern
 * 
 *    $icon_theme_default sets the theme that will be used by default.
 *    $icon_theme_fallback specifies which theme will be used if an icon is 
 *    not found in the selected theme
 * 
 * @global integer $icon_theme_def
 * @global integer $icon_theme_fallback
 * @since 1.5.2
 */
$icon_theme_def = 1;
$icon_theme_fallback = 3;

/**
 * Listing of installed icon themes
 * @global array $icon_themes
 * @since 1.5.2
 */
$icon_themes[0]['PATH'] = 'none';
$icon_themes[0]['NAME'] = 'No Icons';

$icon_themes[1]['PATH'] = 'template';
$icon_themes[1]['NAME'] = 'Template Default Icons';

$icon_themes[2]['PATH'] = '../images/themes/default/';
$icon_themes[2]['NAME'] = 'Default Icon Set';

$icon_themes[3]['PATH'] = '../images/themes/xp/';
$icon_themes[3]['NAME'] = 'XP Style Icons';

/**
 * Templates
 *   You can define your own template set (skin) and put it in a new 
 *   directory under SM_PATH/templates.  The ID must match the name of
 *   the template directory as the example below. You can name the 
 *   template whatever you want. For an example of a template, see 
 *   the ones included in the SM_PATH/templates directory.
 *
 * To add a new template to the options that users can choose from, just
 * add a new number to the array at the bottom, and follow the pattern.
 *
 * $templateset_default sets the skin that will be used by default
 *                      when a user doesn't have a skin selection
 *                      in their preferences. (Must be the "ID" of
 *                      the desired template set)
 *
 * $templateset_fallback tells SquirrelMail which template set (skin)
 *                       to use when looking for a file that is not
 *                       contained within whatever skin is currently
 *                       being used.  (Must be the "ID" of the desired 
 *                       template set)
 *
 * $rpc_templateset sets the skin that will be used by default
 *                  when a user is making an RPC request.  This
 *                  does not usually need to be changed, but
 *                  can be used to change the RPC protocol that
 *                  is used to respond to RPC requets. (Must be
 *                  the "ID" of the desired template set and
 *                  should NOT be a template set that is included
 *                  in the $aTemplateSet list; PLEASE NOTE that
 *                  new RPC template sets should always be named
 *                  "<skin name>_rpc", as SquirrelMail will assume
 *                  any template sets ending in "_rpc" are intended
 *                  for its RPC interface only)
 *
 * @global string $templateset_default
 * @global string $templateset_fallback
 * @global string $rpc_templateset
 */
$templateset_default = 'default';
$templateset_fallback = 'default';
$rpc_templateset = 'default_rpc';

$aTemplateSet[0]['ID'] = 'default';
$aTemplateSet[0]['NAME'] = 'Default';
$aTemplateSet[1]['ID'] = 'default_advanced';
$aTemplateSet[1]['NAME'] = 'Advanced';

/**
 * Default interface font size.
 * @global string $default_fontsize
 * @since 1.5.1
 */
$default_fontsize = '';

/**
 * Default font set
 * @global string $default_fontset
 * @since 1.5.1
 */
$default_fontset = '';

/**
 * List of available fontsets.
 * @global array $fontsets
 * @since 1.5.1
 */
$fontsets = array();
$fontsets['serif'] = 'serif';
$fontsets['sans'] = 'helvetica,arial,sans-serif';
$fontsets['comicsans'] = 'comic sans ms,sans-serif';
$fontsets['verasans'] = 'bitstream vera sans,verdana,sans-serif';
$fontsets['tahoma'] = 'tahoma,sans-serif';

/**
 * LDAP server(s)
 *   Array of arrays with LDAP server parameters. See
 *   functions/abook_ldap_server.php for a list of possible
 *   parameters
 *
 * EXAMPLE:
 *   $ldap_server[0] = Array(
 *       'host' => 'memberdir.netscape.com',
 *       'name' => 'Netcenter Member Directory',
 *       'base' => 'ou=member_directory,o=netcenter.com'
 *   );
 *
 *   NOTE: please see security note at the top of this file when
 *   entering a password.
 */
// Add your ldap server options here

/**
 * Javascript in Addressbook Control
 *
 * Users may search their addressbook via either a plain HTML or Javascript
 * enhanced user interface. This option allows you to set the default choice.
 * Set this default choice as either:
 *    true  = javascript
 *    false = html
 * @global bool $default_use_javascript_addr_book
 */
$default_use_javascript_addr_book = false;

/**
 * Shared filebased address book
 * @global string $abook_global_file
 * @since 1.5.1 and 1.4.4
 */
$abook_global_file = '';

/**
 * Writing into shared address book control
 * @global bool $abook_global_file_writeable
 * @since 1.5.1 and 1.4.4
 */
$abook_global_file_writeable = false;

/**
 * Listing of shared address book control
 * @global bool $abook_global_file_listing
 * @since 1.5.1
 */
$abook_global_file_listing = true;

/**
 * Controls file based address book entry size
 * 
 * This setting controls space allocated to file based address book records.
 * End users will be unable to save address book entry, if total entry size 
 * (quoted address book fields + 4 delimiters + linefeed) exceeds allowed
 * address book length size.
 *
 * Same setting is applied to personal and global file based address books.
 *
 * It is strongly recommended to keep default setting value. Change it only
 * if you really want to store address book entries that are bigger than two
 * kilobytes (2048).
 * @global integer $abook_file_line_length
 * @since 1.5.2
 */
$abook_file_line_length = 2048;

/**
 * MOTD
 *
 * This is a message that is displayed immediately after a user logs in.
 * @global string $motd
 */
$motd = "";


/**
 * To install plugins, just add elements to this array that have
 * the plugin directory name relative to the /plugins/ directory.
 * For instance, for the 'squirrelspell' plugin, you'd put a line like
 * the following.
 *    $plugins[] = 'squirrelspell';
 *    $plugins[] = 'listcommands';
 */
// Add list of enabled plugins here


/**
 * To disable all plugins regardless of any that are installed 
 * above, turn on $disable_plugins.  To disable them ONLY for 
 * one user, put that username into $disable_plugins_user.
 * @global boolean $disable_plugins
 * @global string $disable_plugins_user
 * @since 1.5.2
 */
$disable_plugins = false;
$disable_plugins_user = '';


/*** Database ***/
/**
 * Read the administrator's manual in order to get more information
 * about these settings.
 */
/**
 * Database-driven private addressbooks
 *   DSN (Data Source Name) for a database where the private
 *   addressbooks are stored.  See the administrator's manual for more info.
 *   If it is not set, the addressbooks are stored in files
 *   in the data dir.
 *   The DSN is in the format: mysql://user:pass@hostname/dbname
 *   The table is the name of the table to use within the
 *   specified database.
 *
 *   NOTE: please see security note at the top of this file when
 *   entering a password.
 */
$addrbook_dsn = '';
$addrbook_table = 'address';
/**
 * Database used to store user data
 */
$prefs_dsn = '';
$prefs_table = 'userprefs';
/**
 * Preference key field
 * @global string $prefs_key_field
 */
$prefs_key_field = 'prefkey';
/**
 * Size of preference key field
 * @global integer $prefs_key_size
 * @since 1.5.1
 */
$prefs_key_size = 64;
/**
 * Preference owner field
 * @global string $prefs_user_field
 */
$prefs_user_field = 'user';
/**
 * Size of preference owner field
 * @global integer $prefs_user_size
 * @since 1.5.1
 */
$prefs_user_size = 128;
/**
 * Preference value field
 * @global string $prefs_val_field
 */
$prefs_val_field = 'prefval';
/**
 * Size of preference key field
 * @global integer $prefs_val_size
 * @since 1.5.1
 */
$prefs_val_size = 65536;

/*** Global sql database options ***/
/**
 * DSN of global address book database
 * @global string $addrbook_global_dsn
 * @since 1.5.1 and 1.4.4
 */
$addrbook_global_dsn = '';
/**
 * Table used for global database address book
 * @global string $addrbook_global_table
 * @since 1.5.1 and 1.4.4
 */
$addrbook_global_table = 'global_abook';
/**
 * Control writing into global database address book
 * @global boolean $addrbook_global_writeable
 * @since 1.5.1 and 1.4.4
 */
$addrbook_global_writeable = false;
/**
 * Control listing of global database address book
 * @global boolean $addrbook_global_listing
 * @since 1.5.1 and 1.4.4
 */
$addrbook_global_listing = false;

/*** Language settings ***/
/**
 * Default language
 *
 *   This is the default language. It is used as a last resort
 *   if SquirrelMail can't figure out which language to display.
 *   Language names usually consist of language code, undercore
 *   symbol and country code
 * @global string $squirrelmail_default_language
 */
$squirrelmail_default_language = 'en_US';

/**
 * Default Charset
 *
 * This option controls what character set is used when sending
 * mail and when sending HTML to the browser. Option works only
 * with US English (en_US) translation. Other translations use
 * charsets that are set in translation settings.
 *
 * @global string $default_charset
 */
$default_charset = 'iso-8859-1';

/**
 * Alternative Language Names Control
 *
 * This options allows displaying native language names in language
 * selection box.
 * @global bool $show_alternative_names
 * @since 1.5.0
 */
$show_alternative_names   = false;

/**
 * Aggressive Decoding Control
 *
 * This option enables reading of Eastern multibyte encodings.
 * Functions that provide this support are very cpu and memory intensive.
 * Don't enable this option unless you really need it.
 * @global bool $aggressive_decoding
 * @since 1.5.1
 */
$aggressive_decoding = false;

/**
 * Lossy Encoding Control
 *
 * This option allows charset conversions when output charset does not support
 * all symbols used in original charset. Symbols unsupported by output charset
 * will be replaced with question marks.
 * @global bool $lossy_encoding
 * @since 1.5.1
 */
$lossy_encoding = false;

/**
 * Controls use of time zone libraries
 *
 * Possible values:
 * <ul>
 *  <li>0 - default, SquirrelMail uses GNU C timezone names in
 *          TZ environment variables
 *  <li>1 - strict, SquirrelMail uses 'TZ' subkey values in TZ
 *          environment variables
 *  <li>2 - custom, SquirrelMail loads time zone data from
 *          config/timezones.php and uses time zone array keys in
 *          TZ enviroment variables
 *  <li>3 - custom strict, SquirrelMail loads time zone data from
 *          config/timezones.php and uses TZ subkey values in
 *          TZ enviroment variables
 * </ul>
 * Use of any other value switches to default SquirrelMail time zone
 * handling ($time_zone_type).
 * @global integer $time_zone_type
 * @since 1.5.1
 */
$time_zone_type = 0;

/**
 * Location base
 * 
 * This is used to build the URL to the SquirrelMail location.
 * It should contain only the protocol and hostname/port parts
 * of the URL; the full path will be appended automatically.
 *
 * If not specified or empty, it will be autodetected.
 *
 * Examples:
 * http://webmail.example.org
 * http://webmail.example.com:8080
 * https://webmail.example.com:6691
 *
 * To be clear: do not include any of the path elements, so if
 * SquirrelMail is at http://www.example.net/web/mail/src/login.php, you
 * write: http://www.example.net
 *
 * @global string $config_location_base
 * @since 1.5.2 and 1.4.8
 */
$config_location_base = '';

/*** Tweaks ***/
/**
 * Iframe sandbox code control
 *
 * Use iframe to render html emails
 * (temp option used during debuging of new code)
 * @global bool $use_iframe
 * @since 1.5.1
 */
$use_iframe = false;

/**
 * PHP recode functions control
 *
 * Use experimental code with php recode functions when reading messages with
 * different encoding. This code is faster that original SM functions,
 * but it require php with recode support.
 *
 * Don't enable this option if you are not sure about availability of
 * recode support.
 * @global bool $use_php_recode
 * @since 1.5.0
 */
$use_php_recode = false;

/**
 * PHP iconv functions control
 *
 * Use experimental code with php iconv functions when reading messages with
 * different encoding. This code is faster that original SM functions,
 * but it require php with iconv support and works only with some translations.
 *
 * Don't enable this option if you are not sure about availability of
 * iconv support.
 * @global bool $use_php_iconv
 * @since 1.5.0
 */
$use_php_iconv = false;

/**
 * Output Buffering
 *
 * In some cases, buffering all output allows more complex functionality,
 * especially for plugins that want to add headers on hooks that are beyond
 * the point of output having been sent to the browser otherwise (although
 * most plugins that need this feature will turn it on automatically by
 * themselves).
 *
 * It is also possible to define a custom output handler as needed by special
 * environments.  If $buffered_output_handler is non-empty, a function named
 * the same as the value of $buffered_output_handler should be defined in
 * config_local.php.
 *
 */
$buffer_output = false;
$buffered_output_handler = '';

/**
 * Allow Remote configtest Access
 *
 * Controls remote configuration checks
 * @global boolean $allow_remote_configtest
 * @since 1.5.1
 */
$allow_remote_configtest = false;

/**
 * SquirrelMail Debug Mode
 *
 * Various debugging levels can be enabled using this setting.
 * More than one mode can be used at once by combining them
 * with pipes ("|").  See the SM_DEBUG_MODE_* constants in
 * include/constants.php
 */
$sm_debug_mode = SM_DEBUG_MODE_OFF;

/**
 * "Secured Configuration" Mode
 *
 * Enable/disable "Secured Configuration" mode, wherein certain
 * security-sensitive configuration settings are made immutable
 * by other code.
 */
$secured_config = true;

/**
 * HTTPS Port
 *
 * This is the HTTPS (SSL-secured HTTP) port.  It can be left empty,
 * in which case SquirrelMail will assume the standard port 443.
 * Make sure to set this correctly when serving HTTPS on a non-
 * standard port.
 */
$sq_https_port = 443;

/**
 * Ignore HTTP_X_FORWARDED_* headers?
 *
 * Whether or not HTTP_X_FORWARDED_* headers are respected by
 * SquirrelMail (or plugins).
 */
$sq_ignore_http_x_forwarded_headers = true;

/**
 * Subscribe Listing Control
 *
 * this disables listing all of the folders on the IMAP Server to
 * generate the folder subscribe listbox (this can take a long time
 * when you have a lot of folders).  Instead, a textbox will be
 * displayed allowing users to enter a specific folder name to subscribe to
 *
 * This option can't be changed by conf.pl
 * @global bool $no_list_for_subscribe
 */
$no_list_for_subscribe = false;

/**
 * Color in config control
 *
 * This option is used only by conf.pl script to generate configuration
 * menu with some colors and is provided here only as reference.
 * @global integer $config_use_color
 */
$config_use_color = 2;

/**
 * Ask User for Personal Information on login
 *
 * When a user logs in that doesn't have an email address configured,
 * redirect him/her to the options page with a request to fill in their
 * personal information.
 *
 * @global bool $ask_user_info
 */
$ask_user_info = true;

