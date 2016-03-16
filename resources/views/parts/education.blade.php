<section class="education-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-heading">Education</h2>
                @foreach($educations as $education)
                    <strong>{{$education->degree}}</strong>
                    <br>
                    {{$education->school}}
                    <br>
                    {{$education->start_date}} - {{$education->studing?'Present':$education->end_date}}
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</section>