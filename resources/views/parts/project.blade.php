<section class="project container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Projects</h2>
                @foreach($projects as $project)
                    {{$project->name}}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>