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
    
    @include('parts.contact')
@endsection

@section('scripts')
<script>
    $(function(){
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
        $( "#contact-form" ).submit(function( event ) {
            $("#message").html('');
          $.post("{{url('query')}}", $( this ).serialize(), function(data){
              if(data=="success"){
                  $("#message").html('<span class="text-success">Thanks for your feedback/query.</span>');
                  $("#contact-reset").click();
              }else{
                  $("#message").html('<span class="text-danger">Ooops... Try again.</span>');
              }
          });
          event.preventDefault();
        });
    });
    </script>
@endsection
