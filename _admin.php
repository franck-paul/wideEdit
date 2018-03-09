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

if (!defined('DC_CONTEXT_ADMIN')) {return;}

// dead but useful code, in order to have translations
__('wideEdit') . __('Collapse/Expand post\'s attributes sidebar');

$core->addBehavior('adminPostHeaders', array('wideEditBehaviors', 'jsLoad'));
$core->addBehavior('adminPageHeaders', array('wideEditBehaviors', 'jsLoad'));
$core->addBehavior('adminRelatedHeaders', array('wideEditBehaviors', 'jsLoad'));

class wideEditBehaviors
{
    public static function jsLoad()
    {
        global $core;

        return
        dcPage::jsLoad(urldecode(dcPage::getPF('wideEdit/js/post.js')), $core->getVersion('wideEdit')) .
        '<script type="text/javascript">' . "\n" .
        dcPage::jsVar('dotclear.msg.wideEditShow', __('Show Options')) .
        dcPage::jsVar('dotclear.msg.wideEditHide', __('Hide Options')) .
            "</script>\n";
    }
}
