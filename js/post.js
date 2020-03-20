/*global $, dotclear, mergeDeep, getData */
'use strict';

const toWide = function() {
  $('#entry-sidebar').css('display', 'none');

  $('#wide').empty();
  $('#wide').append(`<img src="images/menu_off.png" alt="${dotclear.msg.wideEditShow}" />`);
  $('#wide').attr('title', dotclear.msg.wideEditShow);
};

const toNormal = function() {
  $('#entry-sidebar').css('display', 'flex');

  $('#wide').empty();
  $('#wide').append(`<img src="images/menu_on.png" alt="${dotclear.msg.wideEditHide}" />`);
  $('#wide').attr('title', dotclear.msg.wideEditHide);
};

const wideSwitch = function() {
  if (this.wide == true) {
    toNormal();
    this.wide = false;
  } else {
    toWide();
    this.wide = true;
  }
  $.cookie('wideEdit', this.wide ? 'true' : 'false');
  return false;
};

$(document).ready(function() {

  mergeDeep(dotclear, getData('wide_edit'));

  $('#entry-wrapper').css('width', 'auto');

  $('#entry-sidebar').before(
    `<a href="#" id="wide" style="border-bottom: 0; margin-right: .5em;" title="${dotclear.msg.wideEditHide}"> </a>`
  );

  if ($.cookie('wideEdit') == null) {
    $.cookie('wideEdit', 'false', {
      expires: 30
    });
  }

  if ($.cookie('wideEdit') == 'true') {
    $('#wide').wide = true;
    toWide();
  } else {
    $('#wide').wide = false;
    toNormal();
  }

  $('#wide').on('click', wideSwitch);
});
