//== Class definition

var DatatableRemoteAjaxDemo = function() {
  //== Private functions

  // basic demo
  var demo = function() {

    var datatable = $('.m_datatable').mDatatable({
      // datasource definition
        "language": {
            "lengthMenu": "Display _MENU_ records per pagesssss",
            "zeroRecords": "لا يوجد بيانات ",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
      data: {
        type: 'remote',
        source: {
          read: {
            url: 'http://localhost/Clinics/public/getAllQuestion',
            map: function(raw) {
              // sample data mapping
              var dataSet = raw;
              if (typeof raw.data !== 'undefined') {
                dataSet = raw.data;
              }
              return dataSet;
            },
              method:"GET",
          },
        },

        pageSize: 10,
          saveState: false,
        serverPaging: true,
        serverFiltering: false,
        serverSorting: true,
      },


      // layout definition
      layout: {
        scroll: false,
        footer: false
      },


      // column sorting
      sortable: true,

      pagination: true,

      toolbar: {
        // toolbar items
        items: {
          // pagination
          pagination: {
            // page size select
            pageSizeSelect: [10, 20, 30, 50, 100],
          },
        },
      },

      search: {
        input: $('#generalSearch')
      },



      // columns definition
      columns:
          [
        {
          field: 'id',
          title: '#',
          sortable: false, // disable sort for this column
          width: 40,
          selector: false,
          textAlign: 'center',
        },
          {
              field: 'question_ar',
              title: 'السؤال',
              sortable: false, // disable sort for this column
              width: 150,
              selector: false,
              textAlign: 'center',
              filterable: true,

          },
          {
              field: 'answer_ar',
              title: 'الجواب ',
              sortable: false, // disable sort for this column
              width: 150,
              selector: false,
              textAlign: 'center',

          },

          {
              field: 'type_id',
              title: 'التخصص ',
              sortable: false, // disable sort for this column
              width: 150,
              selector: false,
              textAlign: 'center',

          },
          // {
          //     field: 'description',
          //     title: 'وصف ',
          //     sortable: false, // disable sort for this column
          //     width: 150,
          //     selector: false,
          //     textAlign: 'center',
          //
          // },
          // {
          //     field: 'address',
          //     title: 'العنوان ',
          //     sortable: false, // disable sort for this column
          //     width: 150,
          //     selector: false,
          //     textAlign: 'center',
          //
          // }
          // ,
          {
              field: 'action',
              title: 'الحدث ',
              sortable: false, // disable sort for this column
              width: 150,
              selector: false,
              textAlign: 'center',

          },

        ],
    });

    $('#m_form_status').on('change', function() {
      datatable.search($(this).val(), 'Status');
    });

    $('#m_form_type').on('change', function() {
      datatable.search($(this).val(), 'Type');
    });

    $('#m_form_status, #m_form_type').selectpicker();

  };

  return {
    // public functions
    init: function() {
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableRemoteAjaxDemo.init();
});
