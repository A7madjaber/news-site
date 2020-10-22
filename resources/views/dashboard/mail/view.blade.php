@extends('dashboard.layouts.index',['title'=>'رد على رسالة'])
@section('main')

    @push('dashboard_css')

    @endpush
    <div class="inbox">
        <div class="inbox-content">
            <div class="inbox-header inbox-view-header">
                <h1>{{$mail->subject}}</h1>
            </div>
            <div class="inbox-view-info">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <img class="avatar-inbox"
                             src="{{asset('images/mail.jpg')}}">
                        <span class="bold">{{$mail->name}}</span>
                        <span>{{'> '.$mail->email.'>'}}</span>
                        <span class="pull-left">{{get_date_from_timestamp($mail->created_at) .'
                         '.format_24_to_12(get_time_from_timestamp($mail->created_at))}}</span>
                    </div>


                </div>

                <div class="inbox-view m-3">
                    <p>
                        {{$mail->massage}}
                    </p>


                </div>

                @foreach($mail->replays as $replay)
                    <div class="media">
                        <div class="media-body">
                            <span class="media-meta pull-right">{{$replay->created_at}}</span>
                        </div>
                    </div>
                    <p>{{$replay->text }}</p>
                @endforeach


                @if(Auth()->user()->hasPermission('create_mails'))

                {!! Form::open(['id'=>'form','class'=>'m-form m-form--fit m-form--label-align-right','method'=>'post','url'=>route('dashboard.mail.replay',[$mail->id]),'to'=>url()->current()]) !!}

                <div class="m-portlet__body b-1">
                    <div class="form-group  row">
                        <div class=" col-sm-12">
                            <div class="form-group m-form__group ">
                                <textarea  name="text" class="form-control summernote" rows="5"> </textarea>
                            </div>

                            <div class="m-login__form-action">
                                <button id="m_login_signin_submit"
                                        class="btn btn-focus m-btn  m-btn--custom m-btn--air m-login__btn m-login__btn--primary col-sm-2 pull-left"
                                        style="margin-left: 30px;font-family: Mada,sans-serif"> رد
                                </button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$mail->id}}" name="massage_id">
                </div>
                {!! Form::close() !!}

                @endif
            </div>
        </div>
    </div>



    @push('dashboard_js')
        <script src="{{asset('/dashboard/js/post.js')}}"></script>

        <script>
            $('.summernote').summernote({focus: true, height: 300,});
        </script>
    @endpush
@stop
