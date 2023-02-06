@extends('layouts.scheduler')

@section('content')
    <div class="mapwrapper">
        <form class="schedulercontent" method="POST" action="{{route('lines.store')}}">
            @csrf
            <div class="ctitle">
                <input type="text" class="funnyinput" name="name" value="Line Name">
            </div>
            <div class="theactualcontent">

                <div class="theactualcontentdivider">
                    <h2>Destination A</h2>
                    <select name="A">
                        @foreach($stops as $stop)
                            @if($stop->stop_type_id == 1)
                                <option value="{{$stop->name}}">{{$stop->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="theactualcontentdivider">
                    <h2>Destination B</h2>
                    <select name="B">
                        @foreach($stops as $stop)
                            @if($stop->stop_type_id == 1)
                                <option value="{{$stop->name}}">{{$stop->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="btncontainer">
                <button onclick="rd('/scheduler/lines/create')" class="defaultbtn"><p>ok</p></button>
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
