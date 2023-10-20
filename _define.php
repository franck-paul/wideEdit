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
$this->registerModule(
    'wideEdit',
    'Collapse/Expand posts attributes sidebar',
    'Franck Paul & Alain Vagner',
    '3.0',
    [
        'requires'    => [['core', '2.28']],
        'permissions' => 'My',
        'type'        => 'plugin',
        'priority'    => 10,

        'details'    => 'https://open-time.net/?q=wideEdit',
        'support'    => 'https://github.com/franck-paul/wideEdit',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/wideEdit/master/dcstore.xml',
    ]
);
