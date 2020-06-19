@extends('components.layout')

@section('title', 'Учасники')
@section('content')

    <main class="main">
        <div class="page-section mr-b">
            <div class="page-content">
                <div class="section-title">
                    <span>Учасники</span>
                </div>

                <div class="page-row">

@foreach($users as $user)
                    <div class="page-col wr-personal-card-coupled">
                        <a href="{{route('participant', ['participantId' => $user->id]) }}" class="personal-card-coupled">
                            <div class="personal-card-coupled-img">
                                <img src="{{\Storage::url("{$user->photo}") }}" alt="participant">
                            </div>

                            <div class="personal-card-coupled-info">
                                <div class="personal-card-coupled-name">
                                    <span>{{$user->nickname}}</span>
                                </div>

                                <div class="personal-card-coupled-city">
                                    <span>{{$user->city}}</span>
                                </div>
                            </div>
                        </a>
                    </div>

@endforeach

                </div>
            </div>
        </div>

        {{--<div class="page-section">--}}
            {{--<div class="section">--}}
                {{--<div class="section__rotate">--}}
                    {{--<div class="section__un-rotate">--}}
                        {{--<div class="page-content">--}}
                            {{--<div class="section-title section-title_center">--}}
                                {{--<span class="section-title__text">Фіналісти 2020 року</span>--}}
                            {{--</div>--}}

                            {{--<div class="main-slider wr-slider">--}}
                                {{--<div class="swiper-container main-slider-container finalists-slider">--}}
                                    {{--<div class="swiper-wrapper main-slider-wrapper">--}}
                                        {{--<div class="swiper-slide main-slider-slide">--}}
                                            {{--<div class="personal-card-wr">--}}
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}

                                                        {{--<img src=" {{ asset('/img/participants/participants-2.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-3.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-1.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-2.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-3.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-1.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-2.jpg') }}" alt="item">--}}
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
                                                {{--<a href="#" class="personal-card-wide">--}}
                                                    {{--<div class="personal-card-img">--}}
                                                        {{--<img src=" {{ asset('/img/participants/participants-3.jpg') }}" alt="item">--}}
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

                                {{--<div class="button-slider button-slider_prev button-finalists-slider-prev">--}}
                                    {{--<svg width="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                        {{--<path d="M8 1L1 7.5L8 14" stroke="#EB008B" stroke-miterlimit="10" stroke-linecap="round"/>--}}
                                    {{--</svg>--}}
                                {{--</div>--}}

                                {{--<div class="button-slider button-slider_next button-finalists-slider-next">--}}
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
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </main>
@endsection