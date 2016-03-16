<section class="skill-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Skills</h2>
                @foreach($skills as $skill)
                    {{$skill->name}}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>