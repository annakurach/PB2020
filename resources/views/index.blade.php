@extends('components.layout')

@section('title', 'Про PIT BULL BATTLE')
@section('content')
    <main class="main">
        <div class="page-section">
            <div class="section section_mt">
                <div class="section__rotate">
                    <div class="section__un-rotate">
                        <div class="banner">
                            <div class="banner__picture"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="page-section">--}}
            {{--<div class="page-content">--}}
                {{--<div class="section-title">--}}
                    {{--<span class="section-title__text">Переможці баттлів</span>--}}
                {{--</div>--}}

                {{--<div class="main-slider wr-slider">--}}
                    {{--<div class="swiper-container main-slider-container winners-slider">--}}
                        {{--<div class="swiper-wrapper main-slider-wrapper">--}}
                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-2.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-3.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-1.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-2.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-3.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-1.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-2.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="swiper-slide main-slider-slide">--}}
                                {{--<div class="personal-card-wr">--}}
                                    {{--<a href="#" class="personal-card">--}}
                                        {{--<div class="personal-card-img">--}}
                                            {{--<img src="assets/img/participants/participants-3.jpg" alt="item">--}}
                                        {{--</div>--}}

                                        {{--<div class="personal-card-data">--}}
                                            {{--<div class="personal-card-info-box">--}}
                                                {{--<div class="personal-card-info-box__inner">--}}
                                                    {{--<span>15</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="personal-card-title">--}}
                                                {{--<span>Майти Ди</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="button-slider button-slider_prev button-winners-slider-prev">--}}
                        {{--<svg width="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                            {{--<path d="M8 1L1 7.5L8 14" stroke="#EB008B" stroke-miterlimit="10" stroke-linecap="round"/>--}}
                        {{--</svg>--}}
                    {{--</div>--}}

                    {{--<div class="button-slider button-slider_next button-winners-slider-next">--}}
                        {{--<svg width="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                            {{--<path d="M1 14L8 7.5L1 1" stroke="#EB008B" stroke-miterlimit="10" stroke-linecap="round"/>--}}
                        {{--</svg>--}}
                    {{--</div>--}}

                    {{--<div class="warning-info">--}}
                            {{--<span class="warning-info__ico">--}}
                                {{--<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                    {{--<path d="M12 5.25H2.8725L7.065 1.0575L6 0L0 6L6 12L7.0575 10.9425L2.8725 6.75H12V5.25Z" fill="#373737"/>--}}
                                {{--</svg>--}}
                            {{--</span>--}}

                        {{--<span class="warning-info__text">свайпай в сторону</span>--}}

                        {{--<span class="warning-info__ico">--}}
                                {{--<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                    {{--<path d="M0 5.25H9.1275L4.935 1.0575L6 0L12 6L6 12L4.9425 10.9425L9.1275 6.75H0V5.25Z" fill="#373737"/>--}}
                                {{--</svg>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="page-section">
            <div class="section">
                <div class="section__rotate">
                    <div class="section__un-rotate">
                        <div class="page-content">
                            <div class="section-title">
                                <span class="section-title__text">Відео проекту</span>

                                <a href="#" class="section-title__link btn-desktop">Дивитись більше</a>
                            </div>

                            <div class="page-row">


                                @foreach($videos as $video)
                                <div class="page-col wr-media-box-video">
                                    <a href="{{$video->link}}" class="media-box">
                                        <div class="media-box-img">
                                            <img src="{{\Storage::url("{$video->image}") }}" alt="poster" />

                                            <span class="media-box-img__ico">
                                                    <svg width="28" height="40" viewBox="0 0 28 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28 20L0 0V40L28 20Z" fill="white"/>
                                                    </svg>
                                                </span>
                                        </div>

                                        <div class="media-box-title">
                                            <span class="media-box-title__text">{{$video->name}}</span>

                                            {{--<span class="media-box-title__time">22:30</span>--}}
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            </div>

                            {{--<div class="section-button section-button_center btn-mob">--}}
                                {{--<button class="button-main">Більше відео</button>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section">
            <div class="page-content">
                <div class="section-title">
                    <span class="section-title__text">Новини</span>
                </div>

                <div class="page-row">
                    @foreach($news as $new)
                    <div class="page-col wr-media-box-news">
                        <a href="{{$new->link}}" class="media-box-square">
                            <div class="media-box-img">
                                <img src="{{\Storage::url("{$new->photo}") }}" alt="poster" />
                            </div>

                            <div class="media-box-title">
                                <span class="media-box-title__text">{{$new->name}}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>

                {{--<div class="section-button section-button_center">--}}
                    {{--<button class="button-main">Більше новин</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </main>
@endsection