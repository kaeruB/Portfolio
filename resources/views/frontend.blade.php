@extends('layouts.project')

@section('secondary-header') backend @endsection

@section('project-details-more')
    <div class="project-details-card__technologies">
        <h4 class="project-details-card__technologies-title">Used technologies and languages:</h4>
        <p class="project-details-card__technologies-list">JavaScript</p>
    </div>
    <div class="project-details-card__source">
        <a href="ExampleLink.com">Site URL</a>
    </div>
    <div class="project-details-card__source">
        <a href="ExampleLink.com">Source code</a>
    </div>
@endsection