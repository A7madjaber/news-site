@if (session()->has('success'))
    <div class="alert alert-dismissable alert-success" id="alert">

        </button>
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>

@endif
