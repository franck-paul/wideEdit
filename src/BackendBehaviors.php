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

use Dotclear\Core\Backend\Page;

class BackendBehaviors
{
    public static function jsLoad(): string
    {
        return
        Page::jsJson('wide_edit', [
            'msg' => [
                'wideEditShow' => __('Show Options'),
                'wideEditHide' => __('Hide Options'),
            ],
        ]) .
        My::jsLoad('post.js');
    }
}
