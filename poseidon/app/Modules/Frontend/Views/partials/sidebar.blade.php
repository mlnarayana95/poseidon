{{ Form::model($search, ['method' => 'get']) }}

<div class="title">
    Filter By
    <button type="submit" class="btn btn-main pull-right">Search</button>
</div>

<hr/>

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
            @if(isset($search['price_range']))
                @php
                    $range = explode(';', $search['price_range']);
                    $min =  $range[0];
                    $max =  $range[1];
                @endphp
            @endif
            <div class="panel-body">
                {!! Form::text('price_range', null, [
                'class' => 'price-slider',
                'data-type' => "double",
                'data-grid' => true,
                'data-min' => 0,
                'data-max' => $maxprice ?? 1000,
                'data-from' => $min ?? 0,
                'data-to' => $max ?? 950,
                'data-prefix' => "$"
                ]) !!}
            </div>
        </div>
    </div>

    {{--<div class="panel panel-default mb-2">
        <div class="panel-heading">

            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapse6">
                <div class="panel-title text-orange">
                    Checkin Date
                    <i class="fa fa-chevron-down pull-right"></i>
                </div>
            </a>
        </div>
        <div id="collapse6"
             class="panel-collapse collapse">
            <div class="input-group mb-3 mt-3">
                {!! Form::text('checkin', null, ['class' => 'form-control datepicker', 'id' => 'checkin']) !!}
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default mb-2">
        <div class="panel-heading">

            <a data-toggle="collapse"
               data-parent="#accordion" href="#collapse7">
                <div class="panel-title text-orange">
                    Checkout Date
                    <i class="fa fa-chevron-down pull-right"></i>
                </div>
            </a>
        </div>
        <div id="collapse7"
             class="panel-collapse collapse">
            <div class="input-group mb-3 mt-3">
                {!! Form::text('checkout', null, ['class' => 'form-control datepicker', 'id' => 'checkout']) !!}
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>--}}

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
        <div id="collapse2" class="panel-collapse collapse show">
            <div class="panel-body">
                <ul class="list-unstyled">

                    @foreach($room_types as $type)
                        <li>
                            <div class="custom-control custom-checkbox">
                                {!! Form::checkbox('types[]', $type->id, null, [
                                'class' => 'custom-control-input',
                                'id' => 'type'.$type->id
                                ]) !!}
                                {{--<input type="checkbox"
                                       class="custom-control-input"
                                       id="type{{$type->id}}"
                                       name="types[]"
                                        value="{{$type->id}}"/>--}}
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
            <div id="collapse3" class="panel-collapse collapse show">
                <div class="panel-body">
                    <ul class="list-unstyled">

                        @foreach($hotels as $hotel)
                            <li>
                                <div class="custom-control custom-checkbox">
                                    {!! Form::checkbox('hotels[]', $hotel->id, null, [
                                        'class' => 'custom-control-input',
                                        'id' => 'hotel'.$hotel->id
                                        ]) !!}
                                    {{--<input type="checkbox"
                                           class="custom-control-input"
                                           id="hotel{{$hotel->id}}"
                                           value="{{ $hotel->id }}"
                                           name="hotels[]">--}}
                                    <label class="custom-control-label"
                                           for="hotel{{$hotel->id}}">
                                        {{$hotel->name}}
                                        <span class="badge badge-info ml-1">
                                                    {{$hotel->rooms_count}}
                                                </span>
                                    </label>
                                </div>
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
        <div id="collapse4" class="panel-collapse collapse show">
            <div class="panel-body">
                <ul class="list-unstyled">
                    @foreach($features as $feature)
                        <li>
                            <div class="custom-control custom-checkbox">
                                {!! Form::checkbox('features[]', $feature->id, null, [
                                'class' => 'custom-control-input',
                                'id' => 'feature'.$feature->id
                                ]) !!}
                                {{--<input type="checkbox"
                                       class="custom-control-input"
                                       id="feature{{$feature->id}}"
                                       value="{{ $feature->id }}"
                                       name="features[]">--}}
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
            <div id="collapse5" class="panel-collapse collapse show">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        @foreach($locations as $location)
                            <li>
                                <div class="custom-control custom-checkbox">
                                    {!! Form::checkbox('locations[]', $location->id, null, [
                                    'class' => 'custom-control-input',
                                    'id' => 'location'.$location->id
                                    ]) !!}
                                    {{--<input type="checkbox"
                                           class="custom-control-input"
                                           id="location{{$location->id}}"
                                           value="{{ $location->id }}"
                                           name="locations[]">--}}
                                    <label class="custom-control-label"
                                           for="location{{$location->id}}">
                                        {{$location->location}}
                                        <span class="badge badge-info ml-1">
                                                    {{$location->rooms_count}}
                                                </span>
                                    </label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
</div>

{{ Form::close() }}