@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-large">
        <h1 class="heading-primary">Welcome to my portfolio!</h1>
    </div>
@endsection

@section('container')
    <div class="card-section">
        <div class="round-card">
            <div class="round-card__title">Projects</div>
            <div class="round-card__projects">
                <a href="/backend" class="round-card__projects-left"><span class="round-card__text-left">Backend</span></a>
                <a href="/frontend"class="round-card__projects-right"><span class="round-card__text-right">Frontend</span></a>
            </div>
        </div>
        <div class="round-card">
            <div class="round-card__title">About</div>
            <a href="/about" class="round-card__img">
                <figure class="round-card__img-shape">
                    <img class="round-card__agata" src="/img/agata2.JPG" alt="Agata">
                    <figcaption class="round-card__agata-caption">Learn about me!</figcaption>
                </figure>
            </a>

        </div>
        <div class="round-card">
            <div class="round-card__title">Contact</div>
            <a href="/contact" class="round-card__icon-container">
                <i class="far fa-envelope"></i>
            </a>
        </div>
    </div>
@endsection