@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-large">
        <h1 class="heading-primary">About me</h1>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="about">
        <div class="about__subcontainer education dark-background">
            <img class="education__img" src="/img/agh.png" alt="AGH">
            <div class="education__cloud"><span class="about__title education__title--2">Master's degree in 2020!</span></div>
            <span class="about__title education__title--1">I'm a Computer Science Engineer...</span>
        </div>
        <div class="about__subcontainer work light-background">

            <div class="work__agh">
                <div class="work__det-container work__agh--desc">
                    <span class="about__title work__title--1">I work at...</span>
                    <div class="work__job-name">AGH</div>
                    <div class="work__period">Feb. 2019 - Present</div>
                    <div class="work__technologies">
                        <div class="work__technology">Scala</div>
                        <div class="work__technology">Selenium</div>
                    </div>
                    <div class="work__description">I continue a development of a library created as a thesis project <i class="far fa-smile-beam"></i> </div>
                </div>
                <div class="agh__img">&nbsp;</div>
            </div>

            <div class="work__andea">
                <div class="andea__img">&nbsp;</div>
                <div class="work__det-container work__agh--desc">
                    <span class="about__title work__title--2">...and I had fun working in...</span>
                    <div class="work__job-name">Andea</div>
                    <div class="work__period">Apr. 2018 - Feb. 2019</div>
                    <div class="work__technologies">
                        <div class="work__technology">T-SQL</div>
                        <div class="work__technology">Delmia Apriso</div>
                        <div class="work__technology">C#</div>
                        <div class="work__technology">CSS</div>
                        <div class="work__technology">JavaScript</div>
                    </div>
                    <div class="work__description">Manufacturing Execution Systems <i class="fas fa-industry"></i></div>
                </div>
            </div>


        </div>

        <div class="about__subcontainer language">
            <div class="language__row">
                <span class="about__title language__polish">My mother tongue is Polish but...</span>
                <div class="poland">&nbsp;</div>
            </div>
            <div class="language__row">
                <div class="japanese">
                    <img class="japanese__img" src="/img/certyfikat.png" alt="N3 Japanese Certificate">
                    <figcaption class="japanese__caption">...I can speak Japanese...</figcaption>
                </div>

                <span class="about__title language__english">...and I'm fluent in English as well!</span>
            </div>

        </div>

        <div class="about__subcontainer hobbies">
            <div class="hobbies__row">
                <div class="hobbies__row--left">
                    <span class="about__title hobbies__title">I draw portraits...</span>
                </div>
                <div class="hobbies__row--right hobbies__drawings">
                    <img class="hobbies__drawing hobbies__drawing-1" src="/img/jackie.jpg" alt="Jackie Chan - drawing">
                    <img class="hobbies__drawing hobbies__drawing-2" src="/img/gem2.jpg" alt="GEM - drawing">
                    <img class="hobbies__drawing hobbies__drawing-3" src="/img/yonghwa.jpg" alt="Yonghwa - drawing">
                </div>
            </div>
            <div class="hobbies__row">
                <div class="hobbies__row--left">
                    {{--<img class="" src="/img/.jpg" alt="Me, playing the guitar">--}}
                </div>
                <div class="hobbies__row--right">
                    <span class="hobbies__title">...and play the guitar.</span>
                </div>
            </div>

            {{--<div class="hobbies__drawing hobbies__drawing-1">--}}
                {{--<img class="about__img" src="/img/yonghwa.jpg" alt="Polska">--}}
            {{--</div>--}}
            {{--<div class="hobbies__drawing hobbies__drawing-2">--}}
                {{--<img class="about__img" src="/img/polski.jpg" alt="Polska">--}}
            {{--</div>--}}
            {{--<div class="hobbies__drawing hobbies__drawing-3">--}}
                {{--<img class="about__img" src="/img/polski.jpg" alt="Polska">--}}
            {{--</div>--}}
            {{--<div class="hobbies__drawing hobbies__drawing-4">--}}
                {{--<img class="about__img" src="/img/polski.jpg" alt="Polska">--}}
            {{--</div>--}}
            {{--<img class="about__img" src="/img/polski.jpg" alt="Polska">--}}
        </div>


        {{--<div class="dark-background about__container">--}}
            {{--<h2 class="about__subtitle"><i class="far fa-building"></i> Work experience</h2>--}}

            {{--<div class="about__work">--}}
                {{--<div class="about__work--container agh">--}}
                    {{--<div class="about__work--header">AGH University of Science and Technology</div>--}}
                    {{--<span>February 2019 - Present</span>--}}
                    {{--<span>Continuation of a library development created as a thesis project.</span>--}}
                    {{--<div class="about__work--technologies">--}}
                        {{--<div>Scala</div>--}}
                        {{--<div>Selenium</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="about__work--container andea">--}}
                    {{--<div class="about__work--header">Andea</div>--}}
                    {{--<span>April 2018 - February 2019</span>--}}
                    {{--<span>Developing solutions for Manufacturing Execution Systems.</span>--}}
                    {{--<div class="about__work--technologies">--}}
                        {{--<div>T-SQL</div>--}}
                        {{--<div>Delmia Apriso</div>--}}
                        {{--<div>C#</div>--}}
                        {{--<div>CSS</div>--}}
                        {{--<div>JavaScript</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="light-background about__container">--}}
            {{--<h2 class="about__subtitle"><i class="fas fa-graduation-cap"></i> Education</h2>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">Degree:</div>--}}
                    {{--<div class="about__details--desc">Computer Science Engineer</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">University:</div>--}}
                    {{--<div class="about__details--desc">AGH University of Science and Technology</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">Faculty:</div>--}}
                    {{--<div class="about__details--desc">Computer Science, Electronics and Telecommunications</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc about__details--desc-small">Master's degree acquirement is expected on July 2020.</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}


        {{--<div class="dark-background about__container">--}}
            {{--<h2 class="about__subtitle"><i class="fas fa-language"></i> Languages</h2>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">Polish</div>--}}
                    {{--<div class="about__details--desc">Mother tongue</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">English</div>--}}
                    {{--<div class="about__details--desc">Advanced, B2/C1</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">Japanese</div>--}}
                    {{--<div class="about__details--desc">Upper Intermediate, N3/N2</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--title">Certificates</div>--}}
                    {{--<div class="about__details--desc about__details--desc-small">Japanese-Language Proficiency Test N3 (December 2018)</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        {{--<div class="light-background about__container">--}}
            {{--<h2 class="about__subtitle"><i class="fas fa-guitar"></i> Hobbies</h2>--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc">Studying Japanese</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc">Creating websites</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc">Drawing portraits</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc">Japanese calligraphy</div>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<div class="about__details--desc">Playing the guitar</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
@endsection