@extends('layouts.scheduler')

@section('content')
    <div class="mapwrapper">
        <div class="schedulercontent">
            <div class="ctitle">
                <h1>Lines</h1>
            </div>

            <div class="theactualcontent">
                @foreach($lines as $line)
                    <div onclick="rd('/scheduler/lines/{{$line->id}}/edit')" class="linecontainer">
                        <p class="lineid">{{$line->id}}</p>
                        <p class="lineA">{{$line->destination_A}}</p>
                        <span class="material-symbols-outlined linedivider">arrow_right_alt</span>
                        <p class="lineB">{{$line->destination_A}}</p>
                    </div>
                @endforeach
            </div>

            <div class="btncontainer">
                <button onclick="rd('/scheduler/lines/create')" class="defaultbtn"><p>+</p></button>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        #map {
            filter: brightness(20%);
        }
    </style>
@endsection
