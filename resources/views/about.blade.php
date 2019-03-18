@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-large">
        <h1 class="heading-primary">About me</h1>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="about">

        <div class="dark-background about__container">
            <h2 class="about__subtitle"><i class="far fa-building"></i> Work experience</h2>

            <div class="about__work">
                <div class="about__work--header">
                    <ul>
                        <li>AGH University of Science and Technology</li>
                        <li>(Feb. 2019 - Present)</li>
                    </ul>
                </div>
                <div class="about__work--content">
                    <ul>
                        <li>
                            <div class="about__details--title">Description:</div>
                            <div class="about__details--desc">Continuation of a library development created as a thesis project.</div>
                        </li>

                        <li>
                            <div class="about__details--title">Technologies:</div>
                            <div class="about__details--desc">sbt,Scala,Selenium,Akka,Git</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="about__work">
                <div class="about__work--header">
                    <ul>
                        <li>Andea</li>
                        <li>(Apr. 2018 - Feb. 2019)</li>
                    </ul>
                </div>
                <div class="about__work--content">
                    <ul>
                        <li>
                            <div class="about__details--title">Description:</div>
                            <div class="about__details--desc">Developing solutions for Manufacturing Execution Systems, responsible for implementing back end for new systems, creating user interfaces and upgrading existing Andea’s programs.</div>
                        </li>

                        <li>
                            <div class="about__details--title">Technologies:</div>
                            <div class="about__details--desc">Microsoft SQL Server, SQL Server Reporting Services and Delmia Apriso products, T-SQL, C\#, JavaScript, CSS</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="light-background about__container">
            <h2 class="about__subtitle"><i class="fas fa-graduation-cap"></i> Education</h2>
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


        <div class="dark-background about__container">
            <h2 class="about__subtitle"><i class="fas fa-language"></i> Languages</h2>
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

        <div class="light-background about__container">
            <h2 class="about__subtitle"><i class="fas fa-guitar"></i> Hobbies</h2>
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
@endsection