<section class="layout_1">
    <div class="container">
        <div class="row">

            <?php $news=news('عالمية',5);?>

        @foreach($news as $key=>$new )
                @if($key!= 3 and  $key!=4 )

            <div class="col-lg-3">
                <div class="entry-box overlay-box box-1">
                    <div class="thumb"><a href="{{route('new',[@$new->slug])}}">
                            <picture>
                                <source media="(max-width: 768px)" srcset="{{image_url(@$new->image,'271x417')}}"/>
                                <source media="(max-width: 992px)" srcset="{{image_url(@$new->image,'271x417')}}"/>
                                <img src="{{image_url(@$new->image,'271x417')}}" alt=""/>
                            </picture></a></div><span class="category">اخبار عالمية</span>
                    <div class="details">
                        <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$new->slug])}}">{{@$new->title}}</a></h3>
                    </div>
                </div>
            </div>

                @endif
            @endforeach


            <div class="col-lg-3">
                <div class="row">

                    @for ($i = 3; $i <= 4; $i++)


                    <div class="col-sm-12">

                        <div class="entry-box overlay-box box-1">
                            <div class="thumb"><a href="{{route('new',[@$news[$i]->slug])}}">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="{{image_url(@$news[$i]->image,'271x204')}}"/>
                                        <source media="(max-width: 992px)" srcset="{{image_url(@$news[$i]->image,'271x204')}}"/>
                                        <img src="{{image_url(@$news[3]->image,'271x204')}}" alt=""/>
                                    </picture></a></div><span class="category">اخبار عالمية</span>
                            <div class="details">
                                <h3 class="title font-size-16 font-size-md-18"> <a href="{{route('new',[@$news[$i]->slug])}}">{{@$news[$i]->title}}</a></h3>
                            </div>
                        </div>
                    </div>


                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
