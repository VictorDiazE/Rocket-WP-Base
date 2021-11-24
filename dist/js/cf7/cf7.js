/* Redirect to Thank you Page for CF7 */


var origin = window.location.origin;
var pathname = window.location.pathname;

document.addEventListener('wpcf7mailsent', function (event) {
  if ('192' == event.detail.contactFormId) {
    location = origin + pathname + '/gracias-contacto/';
		console.log(location);
  } else if ('302' == event.detail.contactFormId) {
    location = origin + patnname + '/gracies-contacto/';
		console.log(location);
  }
}, false);
