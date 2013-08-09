<?php

if (!defined('DC_CONTEXT_ADMIN')) { return; }

$core->addBehavior('adminPostHeaders',array('wideEditBehaviors','jsLoad'));
$core->addBehavior('adminPageHeaders',array('wideEditBehaviors','jsLoad'));
$core->addBehavior('adminRelatedHeaders',array('wideEditBehaviors','jsLoad'));

class wideEditBehaviors
{
	public static function jsLoad()
	{
		return
		'<script type="text/javascript" src="index.php?pf=wideEdit/post.js"></script>'.
		'<script type="text/javascript">'."\n".
		"//<![CDATA[\n".
		dcPage::jsVar('dotclear.msg.wideEditShow',__('Show Options')).
		dcPage::jsVar('dotclear.msg.wideEditHide',__('Hide Options')).
		"\n//]]>\n".
		"</script>\n";
	}
}
?>