<div class="col-lg-4">
    <div class="layout-header">
        <h3 class="header-link link-6"><a href=""> الأكثر قراءة</a></h3>
    </div>


    <div class="layout-body">

    @foreach(most_views() as $new)
            <div class="entry-box entry-box-3 d-flex  no-gutters box-1 box-shadow">
                <div class="thumb col-auto"><a href="{{route('new',[@$new->slug])}}">
                        <picture>
                            <source media="(max-width: 480px)" srcset="{{image_url(@$new->image,'140x130')}}"/>
                            <img src="{{image_url(@$new->image,'140x130')}}" alt=""/>
                        </picture></a></div>
                <div class="entry-title col p-2">
                    <h3 class="title font-size-14 font-size-md-16"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                    <p class="info">{{@$new->description}}</p>
                </div>
            </div>

        @endforeach



        <div class="layout-header">
            <h3 class="header-link link-5"><a href=""> فن</a></h3>
        </div>



        @foreach(news('فن',6) as $new)
            <div class="entry-box entry-box-3 d-flex  no-gutters box-1 box-shadow">
                <div class="thumb col-auto"><a href="{{route('new',[@$new->slug])}}">
                        <picture>
                            <source media="(max-width: 480px)" srcset="{{image_url(@$new->image,'140x130')}}"/>
                            <img src="{{image_url(@$new->image,'140x130')}}" alt=""/>
                        </picture></a></div>
                <div class="entry-title col p-2">
                    <h3 class="title font-size-14 font-size-md-16"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                    <p class="info">{{@$new->description}}</p>
                </div>
            </div>

        @endforeach



    </div>
</div>
