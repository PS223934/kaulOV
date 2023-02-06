@extends('layouts.scheduler')

@section('content')
    <div class="mapwrapper">
        <form class="schedulercontent" method="POST" action="{{route('lines.update', $line->id)}}">
            @csrf
            @method('PUT')
            <div class="ctitle">
                <h1>{{$line->name}}</h1>
            </div>

            <div class="theactualcontent">
                <h2>Stops that belong to {{$line->name}}:</h2>
                <br>
                @foreach($stops as $stop)
                    <p><input
                    @foreach($matching as $match)
                        @if($stop->id == $match->stop_id) checked="true"  @endif
                    @endforeach
                        type="checkbox" name="stop[]" value="{{$stop->id}}"> {{$stop->name}} {{$stop->group_label}}</p>
                @endforeach
            </div>

            <div class="btncontainer">
                <button class="defaultbtn"><p>ok</p></button>
            </div>
        </form>
    </div>
@endsection

@section('css')
    <style>
        #map {
            filter: brightness(20%);
        }
    </style>
@endsection
