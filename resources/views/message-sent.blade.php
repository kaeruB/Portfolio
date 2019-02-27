@extends('layouts.app')

@section('header')
    <div class="u-center-text u-margin-bottom-large">
        <h1 class="heading-primary">Message successfully sent!</h1>
    </div>
@endsection

@section('container')
    @include('utilities.home-button')
    <div class="success">
        <i class="fas fa-check"></i>
    </div>
@endsection