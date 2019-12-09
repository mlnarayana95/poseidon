@extends('layouts.frontend.main')
@section('title', 'Poseidon | ' . $hotel->name)

@section('heading', $hotel->name)

@section('breadcrumb')
    @parent
    <li><a href="/hotels">Hotels</a></li>
    <li>{{ $hotel->name }}</li>
@stop

@section('content')

    <div class="container">
        <h1>{{ $hotel->name }}</h1>
        @foreach($hotel->images as $image)
            <img src="/images/hotels/{{ $image->file_name }}" alt=""/>
            @endforeach
    </div>

@endsection