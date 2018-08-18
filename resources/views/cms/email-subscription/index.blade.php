@extends('layouts.app')

@section('content')

    <div class="flex h-full items-center justify-center">
        <div class="bg-white w-1/2 p-16 rounded shadow-md">

            <div class="w-full flex justify-end mb-16">
                <a target="_blank" href="{{ route('email-subscriptions.export') }} " class="bg-jade underline-none text-white px-4 py-3 rounded shadow-md">Export to excel</a>
            </div>

            @foreach($emailSubscriptions as $emailSubscription)
                <div class="flex bg-blue-grey justify-between p-3 my-2">
                    <div class=""> {{ $emailSubscription->name  }} </div>
                    <div class=""> {{ $emailSubscription->email_address }} </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection