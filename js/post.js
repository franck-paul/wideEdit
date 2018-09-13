/*global $, dotclear */
'use strict';

var toWide = function() {
  $('#entry-sidebar').css('display', 'none');
  $('#entry-content').css('margin-right', 0);
  $('.jstEditor iframe').width($('.area').width() - 7);

		$('#wide').empty();
  $('#wide').append('<img src="images/menu_off.png" alt="' + dotclear.msg.wideEditShow + '" />');
  $('#wide').attr('title', dotclear.msg.wideEditShow);
};

var toNormal = function() {
  $('#entry-content').css('margin-right', '18em');
  $('#entry-sidebar').css('display', 'block');
  $('.jstEditor iframe').width($('.area').width() - 7);

		$('#wide').empty();
  $('#wide').append('<img src="images/menu_on.png" alt="' + dotclear.msg.wideEditHide + '" />');
  $('#wide').attr('title', dotclear.msg.wideEditHide);
};

var wideSwitch = function() {
	if (this.wide == true) {
		toNormal();
		// Move date picker to it's right place
    $('#post_dt + img').css('left', $('#post_dt').width() + 10);
		// Reset URL and lock to their right attributes
    $('#post_url').css('width', $('#post_url').parent().width() - 16);
    $('#post_url + img').css('left', $('#post_url').parent().width() - 4);
		this.wide = false;
	} else {
		toWide();
		this.wide = true;
	}
  $.cookie('dcx_wideEdit', this.wide ? 'true' : 'false');
	return false;
};

$(document).ready(function() {
	$('#entry-form').prepend('<a href="#" id="wide" style="float:right; border-bottom: 0;" title="'+dotclear.msg.wideEditHide+'"> </a>');
    dotclear.msg.wideEditHide + '"> </a><br class="clear" />');

	if ($.cookie('dcx_wideEdit') == null) {
    $.cookie('dcx_wideEdit', 'false', {
      expires: 30
    });
	}

	if ($.cookie('dcx_wideEdit') == 'true') {
    $('#wide').wide = true;
		toWide();
	} else {
    $('#wide').wide = false;
		toNormal();
	}

	$('#wide').click(wideSwitch);
});
