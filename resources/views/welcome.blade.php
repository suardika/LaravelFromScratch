@extends('layout')

@section('content')

    <h1>The Welcome Page Goes Here</h1>

    @unless(empty($people))
        There are some people.
    @endunless

    {{--@if(empty($people))--}}
    {{--There are no people--}}
    {{--@else--}}
    {{--Something else here.--}}
    {{--@endif--}}

    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach

@stop

