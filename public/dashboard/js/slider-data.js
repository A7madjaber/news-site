jQuery(document).ready(function () {
    var form = $('#form');
    var save_btn = $('#m_login_signin_submit');
    var base_url = form.attr('action');
    var _method = form.attr('method');
    var loader = $('#loader');
    var title = $('#title');
    var link = $('#link');
    var caption = $('#caption');
    var image = $('#image');
    var constant_id = $('#id');
    var modal_body = $('#modal_body');
    var modal = $('#slider_modal');
    var preview = $('.fileinput-new .thumbnail').children('img');
    form.validate({
        highlight: function (element) {
            jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function (element) {
            jQuery(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        submitHandler: function (f, e) {
            save_btn.addClass("m-loader m-loader--right m-loader--light").attr("disabled", !0);
            var formData = new FormData(form[0]);
            var form_url = (constant_id.val() !== undefined && constant_id.val() !== '') ? base_url + '/edit/' + constant_id.val() : base_url + '/create';
            $.ajax({
                url: form_url,
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
                            '',
                            function (event) {
                                modal.modal('hide');
                                $('#items').html(response.item);
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
                    getErrors(jqXhr, '/' + window.lang + '/admin/login');
                }
            })
        }
    });
    $(document).on('click', '.edit', function (event) {
        constant_id.val($(this).data('id'));
        if (constant_id.val() !== undefined && constant_id.val() !== '') {
            modal_body.addClass('hidden');
            loader.removeClass('hidden');
            $.ajax({
                url: base_url + '/data/' + constant_id.val(),
                method: 'GET',
                type: 'json',
                success: function (response) {
                    if (response.status) {
                        loader.addClass('hidden');
                        modal_body.removeClass('hidden');
                        image.val(response.item.image);
                        constant_id.val(response.item.id);
                        link.val(response.item.link);
                        caption.val(response.item.caption);
                        preview.attr('src', '/image/' + response.item.image);
                        $('#change_photo img').attr('src', '/image/' + response.item.image);
                        title.val(response.item.title)
                        // console.log(preview);
                    }
                },
                error: function (response) {
                    modal.hide();
                }
            });
        }
        event.preventDefault();
    });

    modal.on('hidden.bs.modal', function (e) {
        title.val('');
        image.val('');
        link.val('');
        caption.val('');
        constant_id.val('');
        preview.attr('src', '/image/300x300/default.png');
        $('#change_photo img').attr('src', '/image/300x300/default.png');
    });
});

$(document).on('change','.is-displayed',function (e) {
    showLoader();
    var url = $(this).data('url');
    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            if (!response.status){
            }
            hideLoader();
        },
        error : function () {
            hideLoader();
        }
    });
});

$(document).on('click', '.delete-slider', function (event) {
    var delete_url = $(this).data('url');
    var _this = $(this);
    event.preventDefault();
    swal({
        title: '<span class="info">هل أنت متأكد من حذف العنصر المحدد ؟</span>',
        type: 'info',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'حذف',
        cancelButtonText: 'إغلاق',
        confirmButtonColor: '#56ace0',
    }).then(function (value) {
        if (!(value.dismiss === 'cancel')) {
            $.ajax({
                url: delete_url,
                method: 'delete',
                type: 'json',
                success: function (response) {
                    if (response.status) {
                        customSweetAlert(
                            'success',
                            response.message,
                            response.item,
                            function (event) {
                                _this.parent().parent().remove();
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
                error: function (response) {
                    errorCustomSweet();
                }
            });
        }
    });
});
