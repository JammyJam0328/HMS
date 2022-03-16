{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
        content="{{ csrf_token() }}">

    <title>ALMA Residence - LOGIN</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet"
        href="{{ mix('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"
        defer></script>
</head>

<body class="h-full font-sans antialiased bg-mainback">

    <div class="flex min-h-full ">
        <div class="flex flex-col justify-center flex-1 px-6 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="w-full max-w-sm mx-auto lg:w-96">
                <div>

                    <h2 class="mt-6 text-2xl font-bold text-gray-700">Login to ALMA Residence</h2>
                    <p class="mt-2 text-sm text-gray-400">
                        Thank you for get back to ALMA Residence, let's access our the best recommendation for you.

                    </p>
                </div>

                <div class="mt-8">
                    <div>
                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 text-sm font-medium text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-6 bg-gray-200 bg-opacity-20">
                        <form method="POST"
                            action="{{ route('login') }}"
                            class="space-y-6">
                            @csrf

                            <div class="px-2 pt-3 bg-white rounded-md">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="email"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required
                                        autofocus
                                        name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none dark:text-white  dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                        required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-700  peer-focus:font-bold peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                        Address</label>
                                </div>
                            </div>
                            <div class="px-2 pt-3 bg-white rounded-md">
                                <div class="relative z-0 w-full mb-6 group">
                                    <input id="password"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                        name="floating_email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0  border-gray-300 appearance-none dark:text-white  dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" "
                                        required />
                                    <label for="floating_email"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-gray-700  peer-focus:font-bold peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                                </div>
                            </div>




                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember_me"
                                        name="remember"
                                        type="checkbox"
                                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                    <label for="remember-me"
                                        class="block ml-2 text-sm text-gray-700"> Remember me
                                    </label>
                                </div>

                                <div class="text-sm">
                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-gray-700 underline hover:text-gray-900"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex justify-center w-full px-4 py-3 text-sm font-bold text-white uppercase bg-gray-600 border border-transparent rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Login</button>
                            </div>

                        </form>
                        <a class="mt-5 text-sm text-gray-700 underline hover:text-gray-900"
                            href="{{ route('register') }}">
                            Don't have an account? Register here.
                        </a>
                        <div class="relative mt-6">
                            <div class="absolute inset-0 flex items-center"
                                aria-hidden="true">
                                <div class="w-full border-t border-gray-700"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 text-gray-700 bg-gray-200"> Or continue with </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-3 mt-3">
                            <div>
                                <a href="#"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                    <span class="sr-only">Sign in with Google</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="20"
                                        height="20"
                                        preserveAspectRatio="xMidYMid"
                                        viewBox="0 0 256 262">
                                        <path fill="#4285F4"
                                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                                        <path fill="#34A853"
                                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                                        <path fill="#FBBC05"
                                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" />
                                        <path fill="#EB4335"
                                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <a href="#"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50">
                                    <span class="sr-only">Sign in with Facebook</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 16 16"
                                        class="w-5 h-5">
                                        <path fill="#1976D2"
                                            d="M14 0H2C.897 0 0 .897 0 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V2c0-1.103-.897-2-2-2z" />
                                        <path fill="#FAFAFA"
                                            fill-rule="evenodd"
                                            d="M13.5 8H11V6c0-.552.448-.5 1-.5h1V3h-2a3 3 0 0 0-3 3v2H6v2.5h2V16h3v-5.5h1.5l1-2.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex-1 hidden w-0 lg:block">
            <img class="absolute inset-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
                alt="">
        </div>
    </div>

</body>

</html>
