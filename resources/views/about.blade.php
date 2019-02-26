@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-large">
        <h1 class="heading-primary">About me</h1>
    </div>
@endsection

@section('container')
    <div class="about">
        <div class="about__row">
            {{--<div class="about__photo-container">--}}
                <div class="about__small-container about__left-container about__photo">&nbsp</div>
            {{--</div>--}}
            <div class="about__small-container about__middle-container about__description dark-background">
                <p>Hi! I'm Agata Bogacz and I'm a 4rd year student of Computer Science. During my engineering studies I practiced my skills creating various applications in imperative, object-oriented and functional languages.
                I'm also keen on user interface design. Now my objective is to become a full-stack developer.</p>
            </div>
            <div class="about__small-container about__right-container about__details light-background">
                <h2 class="about__subtitle">Education</h2>
                <ul>
                    <li>
                        <div class="about__details--title">Degree:</div>
                        <div class="about__details--desc">Computer Science Engineer</div>
                    </li>
                    <li>
                        <div class="about__details--title">University:</div>
                        <div class="about__details--desc">AGH University of Science and Technology</div>
                    </li>
                    <li>
                        <div class="about__details--title">Faculty:</div>
                        <div class="about__details--desc">Computer Science, Electronics and Telecommunications</div>
                    </li>
                    <li>
                        <div class="about__details--desc about__details--desc-small">Master's degree acquirement is expected on July 2020.</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about__row">
            <div class="about__small-container about__left-container about__languages dark-background">
                <h2 class="about__subtitle">Languages</h2>
                <ul>
                    <li>
                        <div class="about__details--title">Polish</div>
                        <div class="about__details--desc">Mother tongue</div>
                    </li>
                    <li>
                        <div class="about__details--title">English</div>
                        <div class="about__details--desc">Advanced, B2/C1</div>
                    </li>
                    <li>
                        <div class="about__details--title">Japanese</div>
                        <div class="about__details--desc">Upper Intermediate, N3/N2</div>
                    </li>
                    <li>
                        <div class="about__details--title">Certificates</div>
                        <div class="about__details--desc about__details--desc-small">Japanese-Language Proficiency Test N3 (December 2018)</div>
                    </li>
                </ul>
            </div>
            <div class="about__small-container about__middle-container about__work light-background">
                <h2 class="about__subtitle">Work experience</h2>
                <ul>
                    <li>
                        <div class="about__details--title">AGH</div>
                        <div class="about__details--desc about__details--desc-small">
                            (Feb. 2019 - Present)
                            Continuation of a library development created as a thesis project.
                            <div class="about__thesis about__thesis custom-link">
                                <a href="/backend" class="">More</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="about__details--title">Andea</div>
                        <div class="about__details--desc about__details--desc-small">
                            (Apr. 2018 - Feb. 2019)
                            Developing solutions for Manufacturing Execution Systems, responsible for implementing back end for new systems, creating user interfaces and upgrading existing Andea’s programs.
                        </div>
                    </li>
                    <li>
                        <div class="about__details--title">technologies</div>
                        <div class="about__details--desc about__details--desc-small">
                            Microsoft SQL Server, SQL Server Reporting Services and Delmia Apriso products such as: Process Builder, Global Process Manager, Desktop Client, Machine Integrator.
                        </div>
                    </li>
                    <li>
                        <div class="about__details--title">Languages etc</div>
                        <div class="about__details--desc about__details--desc-small">
                            T-SQL, C\#, JavaScript, CSS
                        </div>
                    </li>
                </ul>
            </div>
            <div class="about__small-container about__right-container about__hobbies dark-background">
                <h2 class="about__subtitle">Hobbies</h2>
                <ul>
                    <li>
                        <div class="about__details--desc">Studying Japanese</div>
                    </li>
                    <li>
                        <div class="about__details--desc">Creating websites</div>
                    </li>
                    <li>
                        <div class="about__details--desc">Drawing portraits</div>
                    </li>
                    <li>
                        <div class="about__details--desc">Japanese calligraphy</div>
                    </li>
                    <li>
                        <div class="about__details--desc">Playing the guitar</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection