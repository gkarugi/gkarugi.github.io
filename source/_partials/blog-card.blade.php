<div class="col-md-6 col-lg-5 col-xl-4">
    <div class="blog-item blog-item--style-1">
        <div class="blog-item__img">
            <img class="img--bg" src="{{ $post['image']['path'] }}" alt="img"/>
            @foreach($post['tags'] as $tag)
                <span class="blog-item__badge" style="background-color: #49C2DF;">{{ $tag }}</span>
            @endforeach
        </div>
        <div class="blog-item__content">
            <h6 class="blog-item__title">
                <a href="/blog/{{ $post['title_slug'] }}">{{ $post['title'] }}</a>
            </h6>
            <p>{!! $post['excerpt'] !!}</p>
            <div class="blog-item__details">
                <span class="blog-item__date font-weight-bold">23 Jan' 19</span>
            </div>
        </div>
    </div>
</div>