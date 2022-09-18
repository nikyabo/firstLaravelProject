@extends('layout')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if(count($guitars)>0)
        @foreach($guitars as $guitar)
        <div>
            <h3 style="color:#fff;">
            <a href="{{ route('guitars.show',['guitar' => $guitar['id']]) }}">{{ $guitar['name'] }}</a>
            </h3>
            <ul>
                <li style="color:#fff;">
                    Made by: {{$guitar['brand']}}
                </li>
                <li style="color:#fff;">
                    Year made: {{$guitar['year_made']}}
                </li>
            </ul>
        </div>
        @endforeach
    @else
        <h2>There are no guitars to display </h2>
    @endif
</div>
@endsection