@extends('dashboard.layouts.index',['title'=>'تصنيفات الأخبار'])

<style>

    /* Full-width input fields */
    input[type=text] {
        width: 100%;
        border-radius: 20px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        border-radius: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }


    .container {
        padding: 16px;
        width: 50%;

    }



    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        border-radius: 20px;
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }



    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
    }

</style>

@section('main')
    @push('dashboard_css')
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    @endpush
    <div class="row">
        <div class="col-lg-12">
            <div class="m-portlet m-portlet--tab">

                <div class="m-portlet__body">

                    <div class="form-group m-form__group row align-items-center">

                        <div class="col-md-4">
                            <div class="m-input-icon m-input-icon--left">
                                <input type="text" class="form-control m-input" placeholder="بحث..." id="generalSearch">
                                <span class="m-input-icon__icon m-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>


                        <div class="m-portlet__body">
                            <div class="m-portlet__head-title col-sm-12">

                                @if(Auth()->user()->hasPermission('create_categories'))
                                <button onclick="document.getElementById('id01').style.display='block'"
                                        class="btn btn-primary col-sm-12" style="border-radius: 17px;">اضافة تصنيف</button>                            </div>
                      @else
                                <button disabled onclick="document.getElementById('id01').style.display='block'"
                                        class="btn btn-primary col-sm-12" style="border-radius: 17px;">اضافة تصنيف</button>                            </div>

                        @endif
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="my_datatable"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="id01" class="modal" style=" padding: 90px 90px">

        <form method="POST" action="{{route('dashboard.category.store')}}" accept-charset="UTF-8"  class="modal-content animate" style="
          width: 50%;border-radius: 20px;">
           @csrf

            <div class="container" style="width: 50%;">
                <label for=""><b>التصنيف</b></label>
                <input type="text" placeholder="" name="name" required>

                <button style="border-radius: 20px;" type="submit">حفظ</button>
            </div>

        </form>
    </div>





    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    @push('dashboard_js')
        <script src="{{asset('dashboard\assets\vendors\custom\datatables\datatables.bundle.js')}}"></script>

        <script src="{{asset('dashboard\js\mdatatables.js')}}"></script>


        <script>
            window.data_url = '{{route('dashboard.category.all.datatable')}}';
            window.columns = [ {
                field: "id",
                title: "#",

                sortable: true,
                width: 40,
            },

                {
                    field: "name",
                    title: "اسم التصنيف",
                },

                {
                    field: "created_at",
                    title: "التاريخ ",
                },

                   {
                    field: "action",
                    title: "خيارات",
                }];
        </script>



    @endpush

@stop
