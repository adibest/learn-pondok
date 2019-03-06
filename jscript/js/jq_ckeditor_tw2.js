$(document).ready(function() {
 
  $('#form_').submit(function(e) {
    e.preventDefault();
    var nama_depan = $('#nama_depan').val();
    var email = $('#email').val();
    var editor1 = $('#editor1').val();
 
    $(".error").remove();
 
    if (nama_depan.length < 1) {
      $('#nama_depan').after('<span class="error"> Harap diisi!</span>');
    }

    if (email.length < 1) {
      $('#email').after('<span class="error"> Harap diisi</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      // if (!validEmail) {
      //   $('#email').after('<span class="error">Enter a valid email</span>');
      // }
    }

  });

 
});