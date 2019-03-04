$(document).ready(function() {
 
  $('#form_').submit(function(e) {
    e.preventDefault();
    var nama_depan = $('#nama_depan').val();
    var nama_belakang = $('#nama_belakang').val();
    var nama_lengkap = $('#nama_lengkap').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var kon_password = $('#kon_password').val();
    var website = $('#website').val();
    var pesan = $('#pesan').val();
    var setuju = $('#setuju').val();
 
    $(".error").remove();
 
    if (nama_depan.length < 1) {
      $('#nama_depan').after('<span class="error">Harap diisi!</span>');
    }
    if (nama_belakang.length < 1) {
      $('#nama_belakang').after('<span class="error">Harap diisi!</span>');
    }
    if (nama_lengkap.length < 1) {
      $('#nama_lengkap').after('<span class="error">Harap diisi!</span>');
    }
    if (username.length < 1) {
      $('#username').after('<span class="error">Harap diisi!</span>');
    }
    if (website.length < 1) {
      $('#website').after('<span class="error">Harap diisi!</span>');
    }
    if (pesan.length < 1) {
      $('#pesan').after('<span class="error">Harap diisi!</span>');
    }
    if (setuju.length < 1) {
      $('#setuju').after('<span class="error">Harap diisi!</span>');
    }
    if (email.length < 1) {
      $('#email').after('<span class="error">Harap diisi!</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      var validEmail = regEx.test(email);
      // if (!validEmail) {
      //   $('#email').after('<span class="error">Enter a valid email</span>');
      // }
    }
    if (password.length < 8) {
      $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
    }
    // if (kon_password !== password) {
    //   $('#kon_pass').after('<span class="error">Password harus sama dengan atasnya</span>');
    //   return false;
    // }
    // return true;

    // if (password != kon_password) {
    //                 alert("Passwords do not match.");
    //                 return false;
    //             }
    //             return true;

    var error = 0;
    if (!($('#setuju').is(':checked'))) {
        error = 1
        $('#setuju').after('<span class="error">Harap setujui form ini</span>');
    }

    if (error) {
        return false;
    } else {
        return true;
    }
  });

  $("#nama_lengkap").click(function(){
    var nama_depan = $('#nama_depan').val();
    var nama_belakang = $('#nama_belakang').val();
    $('#nama_lengkap').val(nama_depan+" "+nama_belakang);
  });

  $("#username").click(function(){
    var nama_depan = $('#nama_depan').val();
    var nama_belakang = $('#nama_belakang').val();
    $('#username').val(nama_depan+"_"+nama_belakang);
  });

  $('#submit').click(function() {
      var pass = $('#password').val();
      var pass2 = $('#kon_pass').val();            
      if (pass != pass2) {        
        alert("password tidak sama!");
      }
    });
 
});