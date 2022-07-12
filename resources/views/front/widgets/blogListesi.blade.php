@if(count($articles)>0)
    @foreach($articles as $article)
        <article class="blog_style1">
            <div class="blog_img">
                <img class="img-fluid" src="{{$article->image}}" alt="">
            </div>
            <div class="blog_text">
                <div class="blog_text_inner">
                    <div class="cat">
                        <a class="cat_btn" href="#">Kategori :{{$article->getCategory->name}}</a>
                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{$article->created_at->diffForHumans()}}</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
                    </div>
                    <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}"><h4>{{$article->title}}</h4></a>
                    <p>{!! substr(strip_tags($article->content), 0, 230) !!}...</p>
                    <a class="blog_btn" href="{{route('single',[$article->getCategory->slug,$article->slug])}}">Read More</a>
                </div>
            </div>
        </article>
        @if(!$loop->last)
            <!-- Divider-->
            <hr class="my-4" />
        @endif
    @endforeach

    <nav class="blog-pagination justify-content-center d-flex">
        {{$articles->links()}}
    </nav>

@else
    <div class="alert alert-danger">
        <h1>Bu kategoriye ait yazı bulunamadı</h1>
    </div>
@endif
