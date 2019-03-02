@extends('layouts.project')

@section('secondary-header') backend @endsection

@section('left-panel-projects')
    @if(count($projects) > 0)
        @foreach($projects as $project)
            <button class="button-brick"><span class="title">{{$project->name}}</span></button>
        @endforeach
    @endif
    {{--@if(count($projects) > 0)--}}
        {{--{{$projects[1]->name}}--}}
    {{--@endif--}}
@endsection

@section('project-details-more')
    <div class="project-details-card__technologies">
        <h4 class="project-details-card__technologies-title">Used technologies and languages:</h4>
        <p class="project-details-card__technologies-list">C, C++, Java</p>
    </div>
    <div class="project-details-card__source">
        <a href="ExampleLink.com" class="custom-link">Source code</a>
    </div>

    {{--<div class="test">--}}
        {{--@if(count($projects) > 0)--}}
            {{--@foreach($projects as $project)--}}
                {{--<ul class="list-group">--}}
                    {{--<li class="list-group-item">Name: {{$project->name}}</li>--}}
                {{--</ul>--}}
            {{--@endforeach--}}
        {{--@endif--}}
    {{--</div>--}}

@endsection