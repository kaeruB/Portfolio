@extends('layouts.project')

@section('secondary-header') backend @endsection

@section('projects-labels')
    @if(count($projects) > 0)
        @foreach($projects as $project)
            <button
                    onclick="changeDescription('{{$project->name}}', '{{$project->description}}', '{{$project->technology}}', '{{$project->source_url}}')"
                    class="button-brick">
                <span class="title">
                    {{$project->name}}
                </span>
            </button>
            {{--var_dump--}}
        @endforeach
    @endif
@endsection

@section('project-title')
    @if(count($projects) > 0)
        {{$projects->first()->name}}
    @endif
@endsection

@section('project-description')
    @if(count($projects) > 0)
        {{$projects->first()->description}}
    @endif
@endsection

@section('technologies')
    @if(count($projects) > 0)
        {{$projects->first()->technology}}
    @endif
@endsection

@section('project-details-buttons')
    @if(count($projects) > 0 && $projects->first()->source_url != null)
        <div class="project-details-card__source">
            <a href="{{$projects->first()->source_url}}" class="custom-link">Source code</a>
        </div>
    @endif
@endsection