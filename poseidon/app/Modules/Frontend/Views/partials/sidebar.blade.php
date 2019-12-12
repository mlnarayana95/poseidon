<div class="title">Filter By</div>

<div class="panel-group" id="accordion">
    <div class="panel panel-default mb-2">
        <div class="panel-heading">

            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapse1">
                <div class="panel-title text-orange">
                    Price
                    <i class="fa fa-chevron-down pull-right"></i>
                </div>
            </a>
        </div>
        <div id="collapse1"
             class="panel-collapse collapse show">
            <div class="panel-body">
                <input type="text" class="price-slider"
                       name="my_range" value=""/>
            </div>
        </div>
    </div>

    <div class="panel panel-default mb-2">
        <div class="panel-heading">

            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapse2">
                <div class="panel-title text-orange">
                    Room Types
                    <i class="fa fa-chevron-down pull-right"></i>
                </div>
            </a>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class="list-unstyled">

                    @foreach($room_types as $type)
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="type{{$type->id}}"
                                       name="example1">
                                <label class="custom-control-label"
                                       for="type{{$type->id}}">
                                    {{$type->type}}
                                    <span class="badge badge-info ml-1">
                                                    {{$type->rooms_count}}
                                                </span>
                                </label>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    @if(isset($hotels) && count($hotels) > 0)
        <div class="panel panel-default mb-2">
            <div class="panel-heading">

                <a data-toggle="collapse"
                   data-parent="#accordion" href="#collapse3">
                    <div class="panel-title text-orange">
                        Hotels
                        <i class="fa fa-chevron-down pull-right"></i>
                    </div>
                </a>

            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul class="list-unstyled">

                        @foreach($hotels as $hotel)
                            <li>
                                <a href="/hotel/{{$hotel->id}}/rooms">
                                    {{$hotel->name}}
                                    <span class="badge badge-info ml-1">
                                                    {{$hotel->rooms_count}}
                                                </span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="panel panel-default mb-2">
        <div class="panel-heading">

            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapse4">
                <div class="panel-title text-orange">
                    Features
                    <i class="fa fa-chevron-down pull-right"></i>
                </div>
            </a>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class="list-unstyled">
                    @foreach($features as $feature)
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="feature{{$feature->id}}"
                                       name="example1">
                                <label class="custom-control-label"
                                       for="feature{{$feature->id}}">
                                    {{$feature->feature}}
                                    <span class="badge badge-info ml-1">
                                                    {{$feature->rooms_count}}
                                                </span>
                                </label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    @if(isset($locations) && count($locations) > 0)
        <div class="panel panel-default mb-2">
            <div class="panel-heading">

                <a data-toggle="collapse"
                   data-parent="#accordion" href="#collapse5">
                    <div class="panel-title text-orange">
                        Location
                        <i class="fa fa-chevron-down pull-right"></i>
                    </div>
                </a>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        @foreach($locations as $location)
                            <li>
                                <a href="/location/{{$location->id}}/rooms">
                                    {{$location->location}}
                                    <span class="badge badge-info ml-1">
                                        {{$location->rooms_count}}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
</div>