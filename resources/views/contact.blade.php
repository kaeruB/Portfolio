@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-small u-margin-top-big">
        <h1 class="heading-primary heading-primary-shorter">Contact</h1>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="contact-section">
        <div class="contact-form dark-background">
            <div class="u-center-text u-margin-bottom-medium u-margin-top-medium">
                <h2 class="contact-form__title"><i class="fas fa-envelope-open-text"></i> Contact form</h2>
            </div>

            {!! Form::open(['url' => 'contact/submit']) !!}
                <div class="form-field form-group">
                    {!! Html::decode(Form::label('name', '<i class="far fa-user"></i>', ['class' => 'form-field__label'])) !!}
                    {{Form::text('name', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Name'])}}
                </div>
                <div class="form-field form-group">
                    {!! Html::decode(Form::label('email', '<i class="fas fa-at"></i>', ['class' => 'form-field__label'])) !!}
                    {{Form::text('email', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Email'])}}
                </div>
                <div class="form-field form-group">
                    {!! Html::decode(Form::label('message', '<i class="far fa-comment"></i>', ['class' => 'form-field__label'])) !!}
                    {{Form::textarea('message', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Message'])}}
                </div>
                <div class="u-center-text">
                    {{Form::submit('Send', ['class' => 'button send-button custom-link'])}}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="contact-info dark-background">
            <div class="u-center-text u-margin-bottom-medium u-margin-top-medium">
                <h2 class="contact-info__title"> <i class="fas fa-external-link-square-alt"></i> Links</h2>
            </div>
            <div class="contact-info__items">
                <a href="mailto:agatabogacz@outlook.com" class="contact-info__mail contact-info__item">
                    {{--<span class="contact-info__label">E-Mail Address</span>--}}
                    <i class="fas fa-at"></i>
                </a>
                <a href="https://www.linkedin.com/in/agata-izabela-bogacz/" class="contact-info__link contact-info__item">
                    {{--<span class="contact-info__label">linkedin</span>--}}
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/kaeruB" class="contact-info__link contact-info__item">
                    {{--<span class="contact-info__label">Github</span>--}}
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.deviantart.com/bogachu" class="contact-info__link contact-info__item">
                    {{--<span class="contact-info__label">Dewiantart</span>--}}
                    <i class="fab fa-deviantart"></i>
                </a>
            </div>
            <div class="contact-info__img-container"><img src="/img/evee.png" alt=""></div>
        </div>
    </div>
@endsection