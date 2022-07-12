@if(count($articles)>0)
    @foreach($articles as $article)
        <div class="post-preview">
            <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
                <h2 class="post-title">{{$article->title}}</h2>
                <img src="{{$article->image}}" alt="image">
                <h3 class="post-subtitle">{{  \Illuminate\Support\Str::limit($article->content,75) }}</h3>
            </a>
            <p class="post-meta">
                <a href="#!">Kategori :{{$article->getCategory->name}}</a>
                <span class="float-right">{{$article->created_at->diffForHumans()}}
            </p>
        </div>
        @if(!$loop->last)
            <!-- Divider-->
            <hr class="my-4" />
        @endif
    @endforeach
    <div class="d-flex justify-content-center">
        {{$articles->links()}}
    </div>

@else
    <div class="alert alert-danger">
        <h1>Bu kategoriye ait yazı bulunamadı</h1>
    </div>
@endif

