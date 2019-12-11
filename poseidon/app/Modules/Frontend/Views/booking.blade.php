@extends('layouts.frontend.main')

@section('content')
    <div class="container">
        <!-- contacts card -->
        <div class="card card-default" id="card_contacts">
            <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
                <ul class="list-group pull-down" id="contact-list">
                    @foreach($booking as $booking)
                    <li class="list-group-item">
                        <div class="row w-100">
                            <div class="col-12 col-sm-6 col-md-3 px-0">
                                <img src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="Mike Anamendolla" class="mx-auto d-block img-fluid">
                            </div>
                            <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                                <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
                                <label class="name lead">Mike Anamendolla</label>
                                <br>
                                <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                                <span class="text-muted">5842 Hillcrest Rd</span>
                                <br>
                                <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                                <span class="text-muted small">(870) 288-4149</span>
                                <br>
                                <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                                <span class="text-muted small text-truncate">mike.ana@example.com</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--/contacts list-->
            </div>
        </div>
    </div>
@endsection
