@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-big">
        <h1 class="heading-primary">My projects</h1>
        <h2 class="heading-secondary">
            @yield('secondary-header')
        </h2>
    </div>
@endsection

@section('container')
    <div class="centered-image">
        <figure class="centered-image__figure">
            @yield('bander-img')
        </figure>
    </div>


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
    <script type="text/javascript">
        // If there are ' in the passed description or somewhere in the passed variables there will be an error - to fix!
        function changeDescription(name, description, technologies, source, link) {
            document.querySelector('.project-details-card__title').textContent = name;
            document.querySelector('.project-details-card__description').textContent = description;
            document.querySelector('.project-details-card__technologies-list').textContent = technologies;
            document.querySelector('.project-details-card__source a').href = source;
            if (typeof link !== 'undefined' && link != ""){
                document.querySelector('.site_url').href = link;
            }
        }
    </script>
@endsection