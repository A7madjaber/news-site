@extends('front.layouts.index',['title'=>'تواصل'])
@section('content')

    <div class="container">

        <div class="content">
            <div class="titlePage">
                <h3>الاتصال بنا</h3>
            </div>



            <form method="POST" action="{{route('contact.send')}}" class="formContact" accept-charset="UTF-8">

                @csrf

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">الاسم <span> *</span></label>
                            <input type="text" name="name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">البريد الالكتروني<span> *</span></label>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">الموضوع</label>
                            <input type="text" name="subject">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">رسالتك<span> *</span></label>
                            <textarea name="massage" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button class="btn" type="submit">ارسال</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
