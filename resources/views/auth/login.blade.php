<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('login') }}">
{{--    @if($errors->any())--}}
{{--        <ul class="alert alert-danger">--}}
{{--            @foreach($errors as $error)--}}
{{--                <li> {{$error}} </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
    @csrf

    <!-- Email Address -->
    <div>
{{--        <x-label for="email" :value="__('Email')" />--}}

{{--        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
    </div>

    <div class="block mt-4">
        <input id="email" type="text" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="email">
    </div>
    <!-- Password -->
    <div class="block mt-4">
            <input id="password" type="text" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="password">
    </div>
{{--        <x-label for="password" :value="__('Password')" />--}}

{{--        <x-input id="password" class="block mt-1 w-full"--}}
{{--                 type="password"--}}
{{--                 name="password"--}}
{{--                 required autocomplete="current-password" />--}}
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <button type="submit"></button>

{{--        <x-button class="ml-3">--}}
{{--            {{ __('Log in') }}--}}
{{--        </x-button>--}}
    </div>
</form>
</body>
</html>
