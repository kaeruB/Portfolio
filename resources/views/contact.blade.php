@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-small">
        <h1 class="heading-primary heading-primary-shorter">Contact</h1>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="contact-section">
        <div class="contact-form dark-background">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="contact-form__title"><i class="fas fa-envelope-open-text"></i> Contact form</h2>
            </div>

            {!! Form::open(['url' => 'contact/submit']) !!}
                <div class="form-field form-group">
                    {{Form::label('name', 'Name', ['class' => 'form-field__label'])}}
                    {{Form::text('name', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Enter your name'])}}
                </div>
                <div class="form-field form-group">
                    {{Form::label('email', 'E-Mail Address', ['class' => 'form-field__label'])}}
                    {{Form::text('email', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Enter your email'])}}
                </div>
                <div class="form-field form-group">
                    {{Form::label('message', 'Message', ['class' => 'form-field__label'])}}
                    {{Form::textarea('message', '', ['class' => 'form-field__text form-control', 'placeholder' => 'Enter a message'])}}
                </div>
                <div>
                    {{Form::submit('Send', ['class' => 'button send-button custom-link'])}}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="contact-info dark-background">
            <div class="u-center-text u-margin-bottom-medium">
                <h2 class="contact-info__title"> <i class="fas fa-external-link-square-alt"></i> Links</h2>
            </div>
            <div class="contact-info__item">
                <div class="contact-info__label">E-Mail Address &nbsp;</div>
                <a href="mailto:agatabogacz@outlook.com" class="custom-link contact-info__mail"><i class="fas fa-at"></i></a>
            </div>
            <div class="contact-info__item">
                <div class="contact-info__label">linkedin &nbsp;</div>
                <a href="https://www.linkedin.com/in/agata-izabela-bogacz/" class="contact-info__link custom-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="contact-info__item">
                <div class="contact-info__label">Github &nbsp;</div>
                <a href="https://github.com/kaeruB" class="contact-info__link custom-link">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </div>
    </div>
@endsection