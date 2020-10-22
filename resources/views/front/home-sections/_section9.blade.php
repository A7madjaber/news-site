<section class="layout_9">
    <div class="container"><img class="logo-small" src="{{image_url(icon(),'90x50')}}" alt=""/>

        <div class="marquee">

            @foreach(lastNews(10) as $last)
                <a href="{{route('new',[@$last->slug])}}">{{@$last->title}}</a>
            @endforeach

        </div>
        <p class="date"><span></span><span>القدس العربية المحتلة</span>{{Carbon\Carbon::now()->toTimeString()}}</p>
    </div>



</section>
