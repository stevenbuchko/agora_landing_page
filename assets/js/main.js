$('#product-contact-form').submit(function (e) {
  $('email-success-alert').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
  e.preventDefault();
  return false;
});
