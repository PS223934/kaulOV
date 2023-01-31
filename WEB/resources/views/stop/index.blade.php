@extends('layouts.scheduler')

@section('aside')
    <div id="featureContainer">
        <h1 class="featureNames" id="featureName">Placeholder Text</h1>
        <div class="feature">
            <div class="feature-attribute">
                <div>
                    <x-input-label>Name:</x-input-label>
                    <x-text-input name="name" class="r-input"></x-text-input>
                </div>
            </div>
            <div class="feature-attribute">
                <div>
                    <x-input-label>Latitude:</x-input-label>
                    <input name="Latitude" class="l-input">
                </div>
                <div>
                    <x-input-label>Longitude:</x-input-label>
                    <input name="Longitude" class="l-input">
                </div>
            </div>
            <div class="feature-attribute">
                <div>
                    <x-input-label>Type:</x-input-label>
                    <input name="Latitude" class="l-input">
                </div>
            </div>
        </div>
    </div>
@endsection
