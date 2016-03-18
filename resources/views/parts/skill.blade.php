<section class="skill-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Skills</h2>
                <div class="row">
                @foreach($skills as $skill)
                    <div class="col-md-6">
                        <h4>{{$skill->name}}</h4>
                        <div class="progress">
                            <div class="progress-bar  progress-bar-success" role="progressbar" 
                                aria-valuenow="{{$skill->proficiency}}" aria-valuemin="0" 
                                aria-valuemax="100" style="width: {{$skill->proficiency}}%;">
                                <span class="sr-only">{{$skill->proficiency}}%</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>