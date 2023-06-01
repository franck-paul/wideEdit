<?php
/**
 * @brief wideEdit, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

namespace Dotclear\Plugin\wideEdit;

use dcCore;
use dcPage;

class BackendBehaviors
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
        dcPage::jsModuleLoad(My::id() . '/js/post.js', dcCore::app()->getVersion(My::id()));
    }
}
