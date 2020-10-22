@if (session()->has('pass'))

    <div style="color: red;padding-top: 10px" class="__web-inspector-hide-shortcut__">تأكيد كلمة المرور غير متطابقة مع كلمة المرور</div>
        <strong>
            {!! session()->get('pass') !!}
        </strong>


@endif

