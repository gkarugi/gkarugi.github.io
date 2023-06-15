@extends('_layouts.master')

@section('body')
    <!-- about us start-->
    <section class="section about-us background--brown">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                        <h2 class="heading__title"><span>About CSRI</span> </h2>
                    </div>
                    <p><strong>Centre for suicide research and intervention (CSRI) develops comprehensive and integrated approaches to reducing life loss and effects on the society from suicide and suicidal behaviors in the country and beyond.</strong></p>
                    <p>CSRI is dedicated to transforming experiences of those affected by suicide by providing research based intervention and postvention that creates awareness and improves understanding.</p>
                    <p>We develop evidence-based community initiatives that will lead to reduced suicide cases, including their social support systems (friends and families) and the wider community. </p>
                    <a class="button button--primary" href="/about-us">Learn more about us</a>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="info-box" style="">
                        <img class="img--bg" src="/assets/images/helping-hands.jpg" alt="img"/>
                        <h4 class="info-box__title">MAKE AN IMPACT</h4>
                        <p>Would you be interested in connecting with those affected by suicide or suicidal thoughts?</p>
                        <p>We'd love to hear from you. See how you can get involved below.</p>
                        <a class="button button--primary button--filled" href="/">Get Involved</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end-->
    <section class="section blog blog--front_2"><img class="blog__bg" src="img/blog_bg-2.png" alt="img">
        <div class="container">
            <div class="row margin-bottom">
                <div class="col-12">
                    <div class="heading heading--primary heading--center"><span class="heading__pre-title">News & Articles</span>
                        <h2 class="heading__title no-margin-bottom"><span>Latest  </span> <span>from our Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row offset-margin">
                @foreach($page->getLatestPosts() as $post)
                    @if($loop->iteration > 3)
                        @break
                    @endif

                    @include('_partials.blog-card', ['post' => $post])
                @endforeach
            </div>
        </div>
    </section>
    <section class="section donors no-padding-top">
        <div class="container">
            <div class="row margin-bottom">
                <div class="col-12">
                    <div class="heading heading--primary heading--center"><span class="heading__pre-title">Newsletter</span>
                        <h2 class="heading__title no-margin-bottom"><span>Subscribe</span> <span>to our news</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg-4">
                    <h2 class="subscribe__title text-dark">Subscribe.</h2>
                </div>
                <div class="col-lg-8">
                    <form class="subscribe-form" action="javascript:void(0);">
                        <input class="subscribe-form__input text-dark-placeholder" type="email" name="email" placeholder="Enter your E-mail" required="required">
                        <input class="subscribe-form__submit text-dark" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
