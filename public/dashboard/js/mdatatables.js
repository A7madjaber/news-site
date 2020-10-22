var tbl;
$(document).ready(function () {
    tbl = $('.my_datatable').mDatatable({
        data: {
            type: 'remote',
            source: {
                read: {
                    url: window.data_url,
                    "columnDefs": [{

                        "targets": -1,
                        "data": null,
                        "defaultContent":
                        '<button class="btn-view" type="button">View Posted Jobs</button>'
                        + '<button class="btn-delete"  type="button">Delete</button>'
                    }],
                    method: 'GET',
                    // custom headers
                    params: {
                        generalSearch: '',
                        EmployeeID: 1,
                        someParam: 'someValue',
                        token: 'token-value'
                    },
                    map: function (raw) {
                        // sample data mapping
                        var dataSet = raw;
                        if (typeof raw.data !== 'undefined') {
                            dataSet = raw.data;
                        }
                        return dataSet;
                    },
                }
            },
            pageSize: 10,
            saveState: {
                cookie: true,
                webstorage: true
            },

            serverPaging: true,
            serverFiltering: false,
            serverSorting: false,
            autoColumns: false
        },
        layout: {
            theme: 'default',
            class: 'm-datatable--brand',
            scroll: true,
            height: null,
            footer: false,
            header: true,

            smoothScroll: {
                scrollbarShown: true
            },
            spinner: {
                overlayColor: '#000000',
                opacity: 0,
                type: 'loader',
                state: 'brand',
                message: true
            },
            icons: {
                sort: {asc: 'la la-arrow-up', desc: 'la la-arrow-down'},
                pagination: {
                    next: 'la la-angle-right',
                    prev: 'la la-angle-left',
                    first: 'la la-angle-double-left',
                    last: 'la la-angle-double-right',
                    more: 'la la-ellipsis-h'
                },
                rowDetail: {expand: 'fa fa-caret-down', collapse: 'fa fa-caret-right'}
            }
        },
        sortable: true,
        pagination: true,
        search: {
            onEnter: false,
            input: $('#generalSearch'),
            delay: 400
        },
        rows: {
            callback: function () {
            },
            autoHide: false,
        },
        columns: window.columns,
        toolbar: {
            layout: ['pagination', 'info'],

            placement: ['bottom'],  //'top', 'bottom'

            items: {
                pagination: {
                    type: 'default',

                    pages: {
                        desktop: {
                            layout: 'default',
                            pagesNumber: 6
                        },
                        tablet: {
                            layout: 'default',
                            pagesNumber: 3
                        },
                        mobile: {
                            layout: 'compact'
                        }
                    },

                    navigation: {
                        prev: true,
                        next: true,
                        first: true,
                        last: true
                    },

                    pageSizeSelect: [10, 20, 30, 50, 100]
                },

                info: true
            }
        },

        translate: {
            records: {
                processing: 'جاري التحميل...',
                noRecords: 'لا توجد نتائج'
            },
            toolbar: {
                pagination: {
                    items: {
                        default: {
                            first: 'First',
                            prev: 'Previous',
                            next: 'Next',
                            last: 'Last',
                            more: 'More pages',
                            input: 'Page number',
                            select: 'Select page size'
                        },
                       // info: "عرض _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                       info: 'عرض {{start}} - {{end}} من {{total}} السجلات'
                    }
                }
            }
        }
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
    $(document).on('click', '.delete', function (event) {
        var delete_url = $(this).data('url');
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
                                    tbl.reload()
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
});
