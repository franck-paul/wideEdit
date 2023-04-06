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
if (!defined('DC_CONTEXT_ADMIN')) {
    return;
}

// dead but useful code, in order to have translations
__('wideEdit') . __('Collapse/Expand post\'s attributes sidebar');

class wideEditBehaviors
{
    public static function jsLoad()
    {
        return
        dcPage::jsJson('wide_edit', [
            'msg' => [
                'wideEditShow' => __('Show Options'),
                'wideEditHide' => __('Hide Options'),
            ],
        ]) .
        dcPage::jsModuleLoad('wideEdit/js/post.js', dcCore::app()->getVersion('wideEdit'));
    }
}

dcCore::app()->addBehaviors([
    'adminPostHeaders'    => [wideEditBehaviors::class, 'jsLoad'],
    'adminPageHeaders'    => [wideEditBehaviors::class, 'jsLoad'],
    'adminRelatedHeaders' => [wideEditBehaviors::class, 'jsLoad'],
]);
