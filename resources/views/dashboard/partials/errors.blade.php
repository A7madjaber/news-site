{{--@if (session()->has('errors'))--}}
{{--    <div class="alert alert-dismissable alert-danger" id="alert">--}}
{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
{{--        <strong>--}}
{{--            {!! session()->get('errors') !!}--}}
{{--        </strong>--}}
{{--    </div>--}}

{{--@endif--}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="margin-right:3px;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
