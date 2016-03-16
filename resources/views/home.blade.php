@extends('layouts.frontend')

@section('content')
    @include('parts.introduction')
    
    @if(sizeof($positions)>0)
        @include('parts.position')
    @endif
    
    @if(sizeof($projects)>0)
        @include('parts.project')
    @endif
    
    @if(sizeof($skills)>0)
        @include('parts.skill')
    @endif
    
    @if(sizeof($certifications)>0)
        @include('parts.certification')
    @endif
    @if(sizeof($educations)>0)
        @include('parts.education')
    @endif
@endsection
