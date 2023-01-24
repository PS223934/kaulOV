@extends('layouts.dashboard')

@section('content')
    <?php
        header( "refresh:3;url=".route('topup.index'));
    ?>
    <div class="p-6 text-gray-900">
        <h1>Payment failed</h1>
        <h2>redirecting...</h2>
    </div>
@endsection
