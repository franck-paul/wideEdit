/*global dotclear */
'use strict';

dotclear.ready(() => {
  dotclear.mergeDeep(dotclear, dotclear.getData('wide_edit'));

  const form = document.getElementById('entry-form');
  const sidebar = document.getElementById('entry-sidebar');
  if (!form || !sidebar) return;

  const WIDE_EDIT_SHOW = '0'; // Options are displayed
  const WIDE_EDIT_HIDE = '1'; // Options are hidden

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
    sidebar.style.display = wide ? 'none' : 'flex';

    // Adjust button according to current status of options visibility
    const image = button.querySelector('img');
    image.setAttribute('src', `images/${wide ? 'expand' : 'hide'}.svg`);
    image.setAttribute('alt', wide ? dotclear.msg.wideEditShow : dotclear.msg.wideEditHide);
    button.setAttribute('title', wide ? dotclear.msg.wideEditShow : dotclear.msg.wideEditHide);

    // Store current status of options visibility
    localStorage.setItem('wideEdit', wide ? WIDE_EDIT_HIDE : WIDE_EDIT_SHOW);

    return false;
  };

  // Button will be displayed in the upper-right corner of entry form (absolute position)
  const button = document.createElement('a');
  button.setAttribute('href', '#');
  button.setAttribute('id', 'wide');
  button.setAttribute('title', '');
  button.style.borderBottom = '0';
  button.style.position = 'absolute';
  button.style.top = '.5em';
  button.style.right = '.8em';
  button.style.width = '1.5em';
  button.style.height = '1.5em';

  // Add image inside button
  const image = document.createElement('img');
  image.style.width = '1.5em';
  image.setAttribute('src', 'images/hide.svg');
  image.setAttribute('alt', dotclear.msg.wideEditHide);
  button.append(image);

  form.style.position = 'relative';
  sidebar.before(button);

  // Display/hide options according to current status
  wideEdit(false);

  // Display/hide options when button is clicked
  button.addEventListener('click', (event) => {
    event.preventDefault();
    wideEdit();
  });
});
