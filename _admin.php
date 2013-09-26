<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of wideEdit, a plugin for Dotclear 2.
#
# Copyright (c) Franck Paul and Alain Vagner
# carnet.franck.paul@gmail.com
#
# Icon from Faenza set by tiheum (http://tiheum.deviantart.com/art/Faenza-Icons-173323228)
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_CONTEXT_ADMIN')) { return; }

// dead but useful code, in order to have translations
__('wideEdit').__('Collapse/Expand post\'s attributes sidebar');

$core->addBehavior('adminPostHeaders',array('wideEditBehaviors','jsLoad'));
$core->addBehavior('adminPageHeaders',array('wideEditBehaviors','jsLoad'));
$core->addBehavior('adminRelatedHeaders',array('wideEditBehaviors','jsLoad'));

class wideEditBehaviors
{
	public static function jsLoad()
	{
		return
		'<script type="text/javascript" src="index.php?pf=wideEdit/js/post.js"></script>'.
		'<script type="text/javascript">'."\n".
		"//<![CDATA[\n".
		dcPage::jsVar('dotclear.msg.wideEditShow',__('Show Options')).
		dcPage::jsVar('dotclear.msg.wideEditHide',__('Hide Options')).
		"\n//]]>\n".
		"</script>\n";
	}
}
