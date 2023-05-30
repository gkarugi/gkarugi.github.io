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
                        <div class="align-container__item"><span class="promo-primary__pre-title">CSRI</span>
                            <h1 class="promo-primary__title"><span>Our</span> <span>Team</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading heading--primary"><span class="heading__pre-title">Team</span>
                        <h2 class="heading__title no-margin-bottom"><span>Meet</span> <span>our Team</span></h2>
                        <p>The CSRI team are a passionate people who are actively assisting suicide victims and conducting research.</p>
                    </div>
                </div>
            </div>
            <div class="row margin-bottom">
                @foreach($page->getTeam() as $teamMember)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="team-item team-item--rounded">
                            <ul class="team-item__socials">
                                <li><a href="https://www.facebook.com/csricentre/?ref=py_c" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/csricentre" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/centreforsuicideresearch/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="team-item__img-holder">
                                <div class="team-item__img">
                                    <img class="img--bg" src="{{ $teamMember['image']['path'] }}" alt="teammate"/>
                                </div>
                            </div>
                            <div class="team-item__description p-3">
                                <div class="team-item__name">{{ $teamMember['name'] }}</div>
                                <div class="team-item__position text-uppercase">{{ $teamMember['qualifications'] }}</div>
                                <div class="team-item__position font-weight-bolder">{{ $teamMember['job_title'] }}</div>
                                <hr>
                                <p class="hover-white">{!! $teamMember['description'] !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center"><a class="button button--primary" href="#">Become our volunteer</a></div>
            </div>
        </div>
    </section>
@endsection