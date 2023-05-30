---
pagination:
    collection: posts
    perPage: 6
---
{{--title: CSRI Blog--}}
{{--description: Our ideas on everything Suicide research and prevention--}}
@extends('_layouts.master')

@section('body')
    <section class="promo-primary promo-primary--shop">
        <picture>
            <source srcset="/assets/images/helping-hands.jpg" media="(min-width: 992px)"/>
            <img class="img--bg" src="/assets/images/helping-hands.jpg" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item"><span class="promo-primary__pre-title">CSRI</span>
                            <h1 class="promo-primary__title"><span>Blogs</span> <span>& Writeups</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section py-5 blog background--brown">
        <div class="container">
            <div class="row offset-margin">
                @if($pagination->currentPage  == 1)
                    @if($post = $page->getFeaturedPost())
                        <div class="col-md-6 col-lg-7 col-xl-8">
                            <div class="blog-item blog-item--style-2">
                                <img class="img--bg" src="{{ $post['image']['path'] }}" alt="img"/>
                                <div class="blog-item__content">
                                    @foreach($post['tags'] as $tag)
                                        <span class="blog-item__badge" style="background-color: #2EC774;">{{ $tag }}</span>
                                    @endforeach
                                    <h6 class="blog-item__title">
                                        <a href="/blog/{{ $post['title_slug'] }}">{{ $post['title'] }}</a>
                                    </h6>
                                    <p>{!! $post['excerpt'] !!}</p>
                                </div>
                                <div class="blog-item__details">
                                    <span class="blog-item__date font-weight-bold">{{ $page->getFormattedDate($post['_created']) }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @foreach ($pagination->items as $post)
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
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    @if($pagination->pages->count() > 1)
                        <ul class="pagination">
                            @if ($previous = $pagination->previous)
                                <li class="pagination__item pagination__item--prev">
                                    <a class="text-decoration-none" href="{{ $previous }}"  title="Previous Page">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span>Back</span>
                                    </a>
                                </li>
                            @endif

                            @foreach ($pagination->pages as $pageNumber => $path)
                                <li class="pagination__item {{ $pagination->currentPage == $pageNumber ? 'pagination__item--active' : '' }}">
                                    <a href="{{ $path }}" title="Go to Page {{ $pageNumber }}"><span>{{ $pageNumber }}</span></a>
                                </li>
                            @endforeach
                                
                            @if ($next = $pagination->next)
                                <li class="pagination__item pagination__item--next">
                                    <a class="text-decoration-none" href="{{ $next }}" title="Next Page">
                                        <span>Next</span>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    @endif
                    <!-- pagination end-->
                </div>
            </div>
        </div>
    </section>
@endsection