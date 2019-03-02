@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-big">
        <h1 class="heading-primary">My projects</h1>
        <h2 class="heading-secondary">
            @yield('secondary-header')
        </h2>
    </div>
    {{--<div class="u-center-text u-margin-bottom-big">--}}
        {{----}}
    {{--</div>--}}
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="project-section u-center-text u-margin-bottom-small">
        <div class="project-section__container">
            <div class="project-panel project-panel--left">
                <div class="project-pic left-pic"><img src="/img/nyan1.png"></div>
                @yield('left-panel-projects')
                {{--<button class="button-brick"><span class="title">@yield('title1')</span></button>--}}
                {{--<button class="button-brick"><span class="title">@yield('title2')</span></button>--}}
                {{--<button class="button-brick"><span class="title">@yield('title3')</span></button>--}}
            </div>
            <div class="project-details-card">
                <div class="project-details-card__main-info">
                    <div class="project-details-card__title">Exaple title</div>
                    <div class="project-details-card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                </div>
                <div class="project-details-card__more">
                    @yield('project-details-more')
                </div>
            </div>
            <div class="project-panel project-panel--right">
                <div class="project-pic right-pic"><img src="/img/nyan2.png"></div>
                <button class="button-brick"><span class="title">Example title</span></button>
                <button class="button-brick"><span class="title">Example title</span></button>
                <button class="button-brick"><span class="title">Example title</span></button>
            </div>
        </div>
    </div>
@endsection