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
 */
if (!defined('DC_CONTEXT_ADMIN')) {
    return;
}

$new_version = dcCore::app()->plugins->moduleInfo('wideEdit', 'version');
$old_version = dcCore::app()->getVersion('wideEdit');

if (version_compare($old_version, $new_version, '>=')) {
    return;
}

try {
    dcCore::app()->setVersion('wideEdit', $new_version);

    return true;
} catch (Exception $e) {
    dcCore::app()->error->add($e->getMessage());
}

return false;
