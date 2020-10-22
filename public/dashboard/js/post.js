var form = $('#form');
var save_btn = $('#m_login_signin_submit');
window.is_all_images_uploaded = true;
$.extend($.validator.messages, {
    required: "هذا الحقل مطلوب",
    remote: "يرجى التأكد  من هذا الحقل للمتابعة",
    email: "رجاء إدخال عنوان بريد إلكتروني صحيح",
    url: "رجاء إدخال عنوان موقع إلكتروني صحيح",
    date: "رجاء إدخال تاريخ صحيح",
    dateISO: "رجاء إدخال تاريخ صحيح (ISO)",
    number: "رجاء إدخال عدد بطريقة صحيحة",
    digits: "رجاء إدخال أرقام فقط",
    creditcard: "رجاء إدخال رقم بطاقة ائتمان صحيح",
    equalTo: "رجاء إدخال نفس القيمة",
    extension: "رجاء إدخال ملف بامتداد موافق عليه",
    maxlength: $.validator.format("الحد الأقصى لعدد الحروف هو {0}"),
    minlength: $.validator.format("الحد الأدنى لعدد الحروف هو {0}"),
    rangelength: $.validator.format("عدد الحروف يجب أن يكون بين {0} و {1}"),
    range: $.validator.format("رجاء إدخال عدد قيمته بين {0} و {1}"),
    max: $.validator.format("رجاء إدخال عدد أقل من أو يساوي {0}"),
    min: $.validator.format("رجاء إدخال عدد أكبر من أو يساوي {0}")
});
form.validate({
    rules: {
        password: {
            minlength: 6
        },
        password_confirmation: {
            minlength: 6,
            equalTo: "#password"
        }
    },
    highlight: function (element) {
        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function (element) {
        jQuery(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    },
    submitHandler: function (f, e) {
        e.preventDefault();
        $('.summernote').each(function () {
            $(this).summernote("code", $(this).summernote('code').replace(/(<div)/igm, '<p').replace(/<\/div>/igm, '</p>').replace(/<p><\/p>/igm, ''));
        });


        if (window.is_all_images_uploaded) {
            save_btn.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0);
            var formData = new FormData(form[0]);
            var url = form.attr('action');
            var redirectUrl = form.attr('to');
            var repeater = $('#m_repeater_1');
            var _method = form.attr('method');
            if (window.images !== undefined && window.images !== null) {formData.append('images', JSON.stringify(window.images));}
            if (window.repeater){formData.append('list',JSON.stringify(repeater.repeaterVal()['']));}
            $.ajax({
                url: url,
                method: _method,
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    save_btn.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1);
                    if (response.status) {
                        customSweetAlert(
                            'success',
                            response.message,
                            response.item,
                            function (event) {
                                showLoader();
                                window.location = redirectUrl
                            }
                        );
                    } else {
                        customSweetAlert(
                            'error',
                            response.message,
                            response.errors_object
                        );
                    }
                },
                error: function (jqXhr) {
                    save_btn.removeClass("m-loader m-loader--right m-loader--light").attr("disabled", !1);
                    getErrors(jqXhr, '/admin/login');
                }
            });
        } else {
            customSweetAlert(
                'warning',
                'الرجاء الإنتظار حتى يتم رفع الصور',
                ''
            );
        }
    }
});

// var edit = function () {
    $('.summernote').summernote({focus: true,  height: 300,});
// };

// var save = function () {
//     var markup = $('.summernote').summernote('code');
//     $('.summernote').summernote('destroy');
// };
//

function getErrors(jqXhr, path) {
    hideLoader();
    switch (jqXhr.status) {
        case 401 :
            $(location).prop('pathname', path);
            break;
        case 400 :
            customSweetAlert(
                'error',
                jqXhr.responseJSON.message,
                ''
            );
            break;
        case 422 :
            (function ($) {
                var $errors = jqXhr.responseJSON.errors;
                var errorsHtml = '<ul style="list-style-type: none">';
                $.each($errors, function (key, value) {
                    errorsHtml += '<li style="font-family: \'Droid.Arabic.Kufi\' !important">' + value[0] + '</li>';
                });
                errorsHtml += '</ul>';
                customSweetAlert(
                    'error',
                    'حدثت الأخطاء التالية',
                    errorsHtml
                );
            })(jQuery);

            break;
        default:
            errorCustomSweet();
            break;
    }
    return false;
}
