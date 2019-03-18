@extends('layouts.app')

{{--@section('script')--}}
    {{--@yield('script-child')--}}
{{--@endsection--}}

@section('header')
    <div class="u-center-text u-margin-bottom-big">
        <h1 class="heading-primary">My projects</h1>
        <h2 class="heading-secondary">
            @yield('secondary-header')
        </h2>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="project-section u-center-text u-margin-bottom-small">
        <div class="project-section__container">
            <div class="project-panel">
                @yield('projects-labels')
            </div>
            <div class="project-details-card">
                <div class="project-details-card__main-info">
                    <div class="project-details-card__title">
                        @yield('project-title')
                    </div>
                    <div class="project-details-card__description">
                        @yield('project-description')
                    </div>
                </div>
                <div class="project-details-card__more">
                    <div class="project-details-card__technologies">
                        <h4 class="project-details-card__technologies-title">Used technologies and languages:</h4>
                        <p class="project-details-card__technologies-list">
                            @yield('technologies')
                        </p>
                    </div>
                    @yield('project-details-buttons')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @yield('script-child')
@endsection