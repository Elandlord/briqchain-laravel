@extends('layouts.base')

@section('content')
    <div class="frame">
        <div class="frame__row">
            @include('partials.header', ['light' => true])
        </div>

        <div class="frame__row">
            @include('partials/footer')
        </div>
    </div>
@stop