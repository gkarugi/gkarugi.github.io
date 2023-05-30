@extends('_layouts.master')

@section('body')
    <section class="promo-primary promo-primary--shop">
        <picture>
            <source srcset="/assets/images/helping-hands.jpg" media="(min-width: 992px)"/><img class="img--bg" src="/assets/images/helping-hands.jpg" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">CSRI Blog</span>
                            <h1 class="promo-primary__title"> <span>{{ $page['title'] }}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog-post">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="blog-post__top">
                        <div class="blog-post__img"><img class="img--bg" src="{{ $page['image']['path'] }}" alt="img"/></div>
                        <div class="blog-post__description">
                            <div class="row">
                                <div class="col-6"><span class="blog-post__name">{{ $page['author'] }}</span></div>
                                <div class="col-6 text-right">
                                    <span class="blog-post__date">{{ $page->getFormattedDate() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="blog-post__title">{{ $page['title'] }}</h5>
                    <div>
                        <p>{!! $page['body'] !!}</p>
                    </div>
                    <div class="blog-post__details">
                        <div class="row align-items-center">
                            <div class="col-lg-3 text-center text-lg-left"><span class="blog-post__name">{{ $page['author'] }}</span></div>
                            <div class="col-lg-6 text-center">
                                <div class="tags">
                                    @foreach($page['tags'] as $tag)
                                        <a class="blog-post__tag" href="#">#{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <ul class="blog-post__socials">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pb-5 @if($page->getPrevious() && $page->getNext()) d-flex justify-content-between @endif">
                        @if ($page->getPrevious())
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a class="text-decoration-none" href="{{ $page->getPrevious()->getPath() }}">
                                            {{ $page->getPrevious()->title }}</h5>
                                        </a>
                                    <a href="{{ $page->getPrevious()->getPath() }}" class="card-link d-block text-black-50 text-decoration-none"><i class="fa fa-arrow-left"></i> &nbsp; Read Next Article</a>
                                </div>
                            </div>
                        @endif

                        @if ($page->getNext())
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a class="text-decoration-none" href="{{ $page->getNext()->getPath() }}">
                                            {{ $page->getNext()->title }}
                                        </a>
                                    </h5>
                                    <a href="{{ $page->getNext()->getPath() }}" class="card-link d-block text-black-50 text-decoration-none">Read Next Article &nbsp;  <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
{{--                <div class="col-md-4 col-lg-3">--}}
{{--                    <div class="blog-post__category-holder">--}}
{{--                        <h6 class="blog-post__title">Category</h6>--}}
{{--                        <ul class="blog-post__category">--}}
{{--                            <li><a href="#">Advice</a></li>--}}
{{--                            <li><a href="#">Therapy</a></li>--}}
{{--                            <li><a href="#">Prevention</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <h6 class="blog-post__title">Recent Posts</h6>--}}
{{--                    <div class="recent-posts">--}}
{{--                        <div class="recent-posts__item">--}}
{{--                            <div class="recent-posts__item-img"><img class="img--bg" src="img/recent_1.jpg" alt="img"/></div>--}}
{{--                            <div class="recent-posts__item-description"><a class="recent-posts__item-link" href="blog-post.html">Post One</a><span class="recent-posts__item-value">23 Jan'19</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="recent-posts__item">--}}
{{--                            <div class="recent-posts__item-img"><img class="img--bg" src="img/recent_2.jpg" alt="img"/></div>--}}
{{--                            <div class="recent-posts__item-description"><a class="recent-posts__item-link" href="blog-post.html">Post Two</a><span class="recent-posts__item-value">23 Jan'19</span></div>--}}
{{--                        </div>--}}
{{--                        <div class="recent-posts__item">--}}
{{--                            <div class="recent-posts__item-img"><img class="img--bg" src="img/recent_3.jpg" alt="img"/></div>--}}
{{--                            <div class="recent-posts__item-description"><a class="recent-posts__item-link" href="blog-post.html">Post Three</a><span class="recent-posts__item-value">23 Jan'19</span></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <h6 class="blog-post__title">Archive</h6>--}}
{{--                    <ul class="archive-list">--}}
{{--                        <li class="archive-list__item"><a class="archive-list__link" href="#">December 2018</a></li>--}}
{{--                        <li class="archive-list__item"><a class="archive-list__link" href="#">January 2019</a></li>--}}
{{--                        <li class="archive-list__item"><a class="archive-list__link" href="#">February 2019</a></li>--}}
{{--                        <li class="archive-list__item"><a class="archive-list__link" href="#">March 2019</a></li>--}}
{{--                    </ul>--}}
{{--                    <h6 class="blog-post__title">Tags</h6>--}}
{{--                    <div class="tags"><a class="tags__item" href="#">Charity</a><a class="tags__item" href="#">Help</a><a class="tags__item" href="#">Freedom</a><a class="tags__item" href="#">Fundraising</a><a class="tags__item" href="#">Donate</a><a class="tags__item" href="#">Water</a></div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection