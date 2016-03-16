<section class="introduction-section container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-image">
                    <img src="{{asset($detail->image)}}" alt="Profile image" class="img-responsive img-circle" width="200">
                </div>
                <h2>{{$detail->name or 'Your Name'}}</h2>
            </div>
        </div>
    </div>
</section>