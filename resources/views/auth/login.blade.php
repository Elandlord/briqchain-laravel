@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-full">
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class=" bg-white rounded shadow-md p-16">

                <div class="flex">
                    <div class="w-1/2 pr-2 ">
                        <label for="password"
                               class="text-deep-blue-lighter block text-xs mb-4">{{ __('E-Mail Address') }}</label>

                        <div class="border-blue-grey border-solid border rounded flex ">
                            <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                <i class="material-icons text-dark-blue text-sm">
                                    person
                                </i>
                            </div>
                            <input id="email" name="email" type="email"
                                   class=" {{ $errors->has('email') ? ' is-invalid' : ''}} py-2 pl-4 inline-block w-full outline-none"
                                   required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="w-1/2 pl-2">
                        <label for="password" class="text-deep-blue-lighter block text-xs mb-4">{{ __('Password') }}</label>

                        <div class="border-blue-grey border-solid border rounded flex ">
                            <div class="border-r border-blue-grey border-solid inline-block py-2 px-2">
                                <i class="material-icons text-dark-blue text-sm">
                                    email
                                </i>
                            </div>
                            <input id="password" name="password" type="password"
                                   class=" {{ $errors->has('password') ? ' is-invalid' : ''}} py-2 pl-4 inline-block w-full outline-none"
                                   required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-end">

                    <button type="submit" class="bg-jade text-white px-6 py-3 mt-10 rounded shadow-md">
                        {{ __('Login') }}
                    </button>
                </div>

            </div>

        </form>
    </div>

@endsection
