/*global $, dotclear */
'use strict';

$(() => {
  dotclear.mergeDeep(dotclear, dotclear.getData('wide_edit'));

  const WIDE_EDIT_SHOW = '0'; // Options are displayed
  const WIDE_EDIT_HIDE = '1'; // Options are hidden

  // Button will be displayed in the upper-right corner of entry form (absolute position)
  $('#entry-form').css('position', 'relative');
  $('#entry-sidebar').before(
    `<a href="#" id="wide" style="border-bottom: 0; position: absolute; top: .5em; right: 1.5em;" title=""> </a>`,
  );

  if (localStorage.getItem('wideEdit') === null) {
    // Status never been stored (or deleted since)
    // Set default options visibility status (displayed)
    localStorage.setItem('wideEdit', WIDE_EDIT_SHOW);
  }

  /**
   * Display/Hide options
   *
   * @param      boolean  [swap=true]  Should swap options visibility?
   * @return     boolean
   */
  const wideEdit = (swap = true) => {
    // Get required status of options visibility
    const wide = localStorage.getItem('wideEdit') === (swap ? WIDE_EDIT_SHOW : WIDE_EDIT_HIDE);

    // Show/hide sidebar (options)
    $('#entry-sidebar').css('display', wide ? 'none' : 'flex');

    // Adjust button according to current status of options visibility
    $('#wide').empty();
    $('#wide').append(
      `<img style="width: 1.5em;" src="images/${wide ? 'expand' : 'hide'}.svg" alt="${
        wide ? dotclear.msg.wideEditShow : dotclear.msg.wideEditHide
      }" />`,
    );
    $('#wide').attr('title', wide ? dotclear.msg.wideEditShow : dotclear.msg.wideEditHide);

    // Store current status of options visibility
    localStorage.setItem('wideEdit', wide ? WIDE_EDIT_HIDE : WIDE_EDIT_SHOW);

    return false;
  };

  // Display/hide options according to current status
  wideEdit(false);

  // Display/hide options when button is clicked
  $('#wide').on('click', wideEdit);
});
