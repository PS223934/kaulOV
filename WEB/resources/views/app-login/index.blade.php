@extends('layouts.dashboard')

@section('content')
    <div class="p-6 w-full text-gray-900">
        <div class="inline-block ">
            <h1>Je token:</h1>
            <x-text-input type="password" value="{{$token[0]}}" id="AccessTokenInput" class="r-input"/>
            <x-primary-button onclick="tokentoCp(this,'AccessTokenInput')">{{ __('Copy') }}</x-primary-button>
        </div>
    </div>
@endsection
