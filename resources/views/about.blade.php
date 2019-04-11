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
            <div class="education__left">
                <img class="education__img" src="/img/agh.png" alt="AGH">
                <div class="education__cloud"><span class="about__title education__title--2">No more homework attack!</span></div>
            </div>
            <div class="education__right">
                <span class="about__title education__title--1">I'm a Bachelor of Computer Science...</span>
                <span class="about__title education__title--3">Master's degree in 2020.</span>
            </div>
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
                    <span class="about__title work__title--2">...and spent a nice time working in...</span>
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

                <span class="about__title language__polish language__left">I can speak Polish, English and Japanese &nbsp;<i class="fas fa-hand-point-right"></i></span>
                <div class="japanese language__right">
                    <img class="japanese__img" src="/img/certyfikat.jpg" alt="N3 Japanese Certificate">
                    <figcaption class="japanese__caption">Japanese Language Proficiency Test N3 Certificate<i class="far fa-smile-beam"></i> </figcaption>
                </div>
        </div>

        <div class="about__subcontainer hobbies light-background">
            <div class="hobbies__row hobbies__row-1">
                <div class="hobbies__row--right hobbies__drawings">
                    <img class="hobbies__drawing hobbies__drawing-1" src="/img/jackie.jpg" alt="Jackie Chan - drawing">
                    <img class="hobbies__drawing hobbies__drawing-2" src="/img/gem.jpg" alt="GEM - drawing">
                    <img class="hobbies__drawing hobbies__drawing-3" src="/img/yonghwa.jpg" alt="Yonghwa - drawing">
                    <img class="hobbies__drawing hobbies__drawing-4" src="/img/shuji.jpg" alt="Japanese character">
                </div>
                <div class="hobbies__row--left">
                    <span class="hobbies__title hobbies__title-1">I draw portraits and study Japanese calligraphy <i class="far fa-smile-beam"></i> </span>
                </div>
            </div>
            {{--<div class="hobbies__row hobbies__row-2">--}}
                {{--<div class="hobbies__row--left">--}}
                    {{--<img class="" src="/img/gitara.png" alt="Me, playing the guitar">--}}
                {{--</div>--}}
                {{--<div class="hobbies__row--right">--}}
                    {{--<span class="hobbies__title hobbies__title-2">...and I play the guitar.</span>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="about__subcontainer ending dark-background">
            <img class="ending__img" src="/img/nyanko.png" alt="Cat">
            <div class="ending__cloud"><span class="about__title ending__title">Thank you! にゃん！</span></div>
        </div>
    </div>
@endsection