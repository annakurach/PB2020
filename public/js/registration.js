$(document).ready(function() {
    let photo;
    $(document).on('change', "input[name='file_photo']", function (e) {
        photo = e.target.files[0];
    });

    let track;
    $(document).on('change', "input[name='file_track']", function (e) {
        track = e.target.files[0];

    });

    $('.js_registration_participant').on('click', function () {
        let nickname = $('input[name="nickname"]').val(),
            social = $('input[name="social"]').val(),
            email = $('input[name="email"]').val(),
            phone = $('input[name="phone"]').val(),
            city = $('input[name="city"]').val(),
            video = $('input[name="video"]').val(),
            password = $('input[name="password"]').val(),
        csrfToken =  $('input[name="_csrfToken"]').val();




    let formData = new FormData();
    formData.append('nickname', nickname);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('photo', photo);
    formData.append('track', track);
    formData.append('city', city);
    formData.append('social', social);
    formData.append('video', video);
    formData.append('password', password);
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/registration/',
        type: 'POST',
        data: formData,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,

        success: function (data) {
            LoaderHide();
            console.log(data);
            $('.error_email').empty();
            $('.error_phone').empty();
            $('.error_name').empty();
            $('.error_nickname').empty();
            $('.error_track').empty();
            $('.error_photo').empty();
            $('.error_city').empty();
            console.log(data.result);
            if (data.result.result == '0') {
                if (data.result.err.email != '') {
                    $('.error_email').text(data.result.err.email);
                    $(".field-form#email > span.tp-input").addClass('error-input');
                }
                if (data.result.err.city != '') {
                    $('.error_city').text(data.result.err.city);
                    $(".field-form#city > span.tp-input").addClass('error-input');
                }
                if (data.result.err.phone != '') {
                    $(".field-form#phone > span.tp-input").addClass('error-input');
                    $('.error_phone').text(data.result.err.phone);
                }
                if (data.result.err.photo != '') {
                    $(".field-form#file_photo > span.tp-input").addClass('error-input');
                    $('.error_photo').text(data.result.err.photo);
                }
                if (data.result.err.nickname != '') {
                    $(".field-form#nickname > span.tp-input").addClass('error-input');
                    $('.error_nickname').text(data.result.err.nickname);
                }
                if (data.result.err.track != '') {
                    $(".field-form#file_track > span.tp-input").addClass('error-input');
                    $('.error_track').text(data.result.err.track);
                }

                if (data.result.err.social != '') {
                    $(".field-form#social > span.tp-input").addClass('error-input');
                    $('.error_social').text(data.result.err.social);
                }
            } else {
                // LoaderHide();
                window.location.href = "/participants/";
            }
            // do smth.
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr);
            // alert(xhr.status);
            // alert(thrownError);
        }
    });
    });
})