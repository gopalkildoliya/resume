<section class="certification-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Certifications</h2>
                @foreach($certifications as $certification)
                    {{$certification->name}}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>