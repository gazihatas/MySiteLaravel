@isset($categories)
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Post Catgories</h4>
    <ul class="list cat-list">
        @foreach($categories as $category)
            <li class="@if(Request::segment(2)==$category->slug) active @endif">
                <a @if(Request::segment(2)!=$category->slug) href="{{ route('category',$category->slug) }}" @endif class="d-flex justify-content-between">
                    <p>{{ $category->name }}</p>
                    <p>{{$category->articleCount()}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</aside>
@endif
