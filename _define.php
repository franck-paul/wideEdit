<?php
/**
 * @brief wideEdit, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul
 * @author Alain Vagner
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Icon from Faenza set by tiheum (http://tiheum.deviantart.com/art/Faenza-Icons-173323228)
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'wideEdit',                                  // Name
    "Collapse/Expand post's attributes sidebar", // Description
    'Franck Paul & Alain Vagner',                // Author
    '0.7',                                       // Version
    [
        'requires'    => [['core', '2.19']],                        // Dependencies
        'permissions' => 'usage,contentadmin',                      // Permissions
        'type'        => 'plugin',                                  // Type
        'priority'    => 10,                                        // Priority
        'details'     => 'https://open-time.net/?q=wideEdit',       // Details URL
        'support'     => 'https://github.com/franck-paul/wideEdit'  // Support URL
    ]
);
