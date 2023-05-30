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
                            <h1 class="promo-primary__title"><span>News</span> <span>& Updates</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection