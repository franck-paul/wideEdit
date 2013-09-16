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

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"wideEdit",
	/* Description*/		"Collapse/Expand post's attributes sidebar",
	/* Author */			"Franck Paul & Alain Vagner",
	/* Version */			'0.5',
	/* Permissions */		'usage,contentadmin',
	/* Priority */			10
);
?>