<section class="position-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Experience</h2>
                @foreach($positions as $position)
                    <strong>{{$position->title}}</strong> at <strong>{{$position->company}}</strong>
                    <br>
                        {{$position->start_date}} - {{$position->working?'Present':$position->end_date}}
                        <br>
                        {{$position->location or ''}}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>