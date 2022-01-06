$(document).ready(function() {

$('#btn_signin').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: '/assets/php/registration/user_auth.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

$('#btn_signup').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('email', email);

    $.ajax({
        url: '/assets/php/registration/user_reg.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type == 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }
        }
    });
});


$('#btn_changedata').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="profile_login"]').val(),
        email = $('input[name="profile_email"]').val(),
        password = $('input[name="profile_password"]').val(),
        password_confirm = $('input[name="profile_password_confirm"]').val();

    let formData = new FormData();
    formData.append('profile_login', login);
    formData.append('profile_password', password);
    formData.append('profile_password_confirm', password_confirm);
    formData.append('profile_email', email);

    $.ajax({
        url: '/assets/php/profile/profile_changes.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                $('.msg').removeClass('none').text(data.message);
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

$('#reset-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let email = $('input[name="reset_input"]').val();

    let formData = new FormData();
    formData.append('reset_input', email);

    $.ajax({
        url: '/assets/php/user_reset.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                alert(data.message);
                document.location.href = '/pages/profile/try_reset.php';
            } else {

                if (data.type === 1) {
                    $('input[name="reset_input"]').addClass('error');
                }
                alert(data.message);
            }
        }
    });
});
$('#try-reset-btn').click(function (e) {
  e.preventDefault();

    $(`input`).removeClass('error');

    let key = $('input[name="reset_input_key"]').val();

    let formData = new FormData();
    formData.append('reset_input_key', key);

    $.ajax({
        url: '/assets/php/resetpasswd.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                alert(data.message);
                document.location.href = '/pages/profile/setup_password.php';
            } else {

                if (data.type === 1) {
                    $('input[name="reset_input_key"]').addClass('error');
                }
                alert(data.message);
            }
        }
    });
});
$('#finish_reset-btn').click(function (e) {
   e.preventDefault();

    $(`input`).removeClass('error');

    let pass1 = $('input[name="passwd"]').val();
    let pass2 = $('input[name="confirm_passwd"]').val();

    let formData = new FormData();
    formData.append('passwd', pass1);
    formData.append('confirm_passwd', pass2);

    $.ajax({
        url: '/assets/php/cmp_passwords.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                alert(data.message);
                document.location.href = '/pages/profile/signin.php';
            } else {

                if (data.type === 1) {
                    $('input[name="confirm_passwd"]').addClass('error');
                }
                alert(data.message);
            }
        }
    });
});
});
