@extends('layouts.dashboard')

@section('content')
    <div class="p-6 w-full text-gray-900">
        <div class="inline-block ">
            <h1>Token bestaat niet of is verlopen.</h1>
            <h2>Klik op de knop hieronder om hem te verversen.</h2>
        </div>
        <div class="mt-32">
            <form action="{{route('app-login.generate')}}" method="post">
                @csrf
                <x-primary-button>{{ __('Generate') }}</x-primary-button>
            </form>
        </div>
    </div>
@endsection
