@extends('app')

@section('content')

    @if($people[3] == 'Dane')

        <h1>About Me: {{ $people[3] }}</h1>

    @else

        <h1>{{ $people[0] }}</h1>

    @endif

    @if (count($people))

        <h3>People I like:</h3>
        <ul>

            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach

        </ul>

    @endif

<div class="quote">About</div>
    <p>;lsdf asfa; talks;fjskldf;s fsa;dtjaslktjs fsal;dtjl;asjf owerojiwlsf;s jlcs s;lkuroisff  ;l sjflasfjkl;afjl ff jl;fajksf</p>
</div>

@stop
