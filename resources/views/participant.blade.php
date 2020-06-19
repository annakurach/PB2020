@extends('components.layout')

@section('title', 'Участник')
@section('content')
    <main class="main">
        <div class="page-section">
            <div class="page-content ">
                <div class="section-title--subtitle">
                    <div class="section-title section-title_center section-title_big">
                        <span class="section-title__text">{{$user->nickname}}</span>
                    </div>

                    <div class="section-subtitle section-subtitle_center">
                        <span class="section-title__text">{{$user->city}}</span>
                    </div>
                </div>
@if(isset($user->video))
                <div class="media-content">
                    <div class="media-content__inner">
                        <iframe width="560" height="315" src="{{$user->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <audio src="{{\Storage::url("{$user->track}") }}" controls autoplay loop  />
                    </div>

                </div>
@endif

                <figure>
                    <figcaption style="color: whitesmoke">Listen to the {{$user->nickname}}:</figcaption>
                    <audio controls="true" src="{{\Storage::url("{$user->track}") }}">
                        Your browser does not support the
                        <code>audio</code> element.
                    </audio>
                </figure>

            </div>
        </div>
    </main>
@endsection