@extends('layout')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
 <div>
    <h3 style="color:#fff;">
        {{$guitar['name']}}
    </h3>
    <ul>
        <li style="color:#fff;">
            Made by:{{$guitar['brand']}}
        </li>
        <li style="color:#fff;">
            Year made: {{$guitar['year_made']}}
        </li>
    </ul>
 </div>
       
</div>
@endsection