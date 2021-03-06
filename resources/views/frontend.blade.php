@extends('layouts.project')

@section('secondary-header') frontend @endsection

@section('bander-img')
    <img class="centered-image__img" src="/img/nyanko_arrow_left2.png">
@endsection

@section('projects-labels')
    @if(count($projects) > 0)
        @if (count($projects) == 1)
            <script type="text/javascript">
                document.querySelector('.project-panel').style.display = 'none';
            </script>
            @else
            @foreach($projects as $project)
                <button
                        onclick="changeDescription(
                                '{{$project->name}}',
                                '{{$project->description}}',
                                '{{$project->technology}}',
                                '{{$project->source_url}}',
                                '{{$project->site_url}}')"
                        class="button-brick"><span class="title">{{$project->name}}</span></button>
            @endforeach
        @endif
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
    @if(count($projects) > 0)
        @if($projects->first()->site_url != null)
            <div id="site-url" class="project-details-card__source">
                <a href="{{$projects->first()->site_url}}" class="custom-link">Link</a>
            </div>
        @endif

        @if($projects->first()->source_url != null)
            <div class="project-details-card__source">
                <a href="{{$projects->first()->source_url}}" class="custom-link">Source code</a>
            </div>
        @endif
    @endif
@endsection