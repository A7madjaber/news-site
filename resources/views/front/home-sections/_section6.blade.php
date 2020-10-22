
<section class="layout_6">
    <div class="container">
        <div class="layout-header">
            <h3 class="header-link link-7"> <a>اخترنا لك</a></h3>
        </div>

        <?php $news=for_you(6) ?>

        <div class="layout-body row">

            @foreach($news as $key=>$new)
                @if ($key ==0)


            <div class="col-lg-6">
                <div class="entry-box overlay-box box-2">
                    <div class="thumb"><a href="{{route('new',[@$news[0]->slug])}}">
                            <picture>
                                <source media="(max-width: 768px)" srcset="{{image_url(@$news[0]->image,'540x236')}}"/>
                                <source media="(max-width: 992px)" srcset="{{image_url(@$news[0]->image,'540x236')}}"/>
                                <img src="{{image_url(@$news[0]->image,'540x236')}}" alt=""/>
                            </picture></a></div>
                    <div class="details">
                        <h3 class="title font-size-16 font-size-md-20"> <a href="{{route('new',[@$news[0]->slug])}}">{{@$news[0]->title}}</a></h3>
                    </div>
                </div>
            </div>

                @endif
                    @endforeach

            @for ($i = 1; $i <=4 ; $i++)
                    <div class="col-lg-3 col-md-6">
                        <div class="entry-box overlay-box box-2">
                            <div class="thumb"><a href="{{route('new',[@$news[$i]->slug])}}">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{image_url(@$news[$i]->image,'255x236')}}"/>
                                        <source media="(max-width: 992px)" srcset="{{image_url(@$news[$i]->image,'255x236')}}"/>
                                        <img src="{{image_url(@$news[$i]->image,'255x236')}}" alt=""/>
                                    </picture></a></div>
                            <div class="details">
                                <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$news[$i]->slug])}}">{{@$news[$i]->title}}</a></h3>
                            </div>
                        </div>
                    </div>

            @endfor



                <div class="col-lg-6">
                    <div class="entry-box overlay-box box-2">
                        <div class="thumb"><a href="{{route('new',[@$news[5]->slug])}}">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="{{image_url(@$news[5]->image,'540x236')}}"/>
                                    <source media="(max-width: 992px)" srcset="{{image_url(@$news[5]->image,'540x236')}}"/>
                                    <img src="{{image_url(@$news[5]->image,'540x236')}}" alt=""/>
                                </picture></a></div>
                        <div class="details">
                            <h3 class="title font-size-16 font-size-md-20"> <a href="{{route('new',[@$news[5]->slug])}}">{{@$news[5]->title}}</a></h3>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
