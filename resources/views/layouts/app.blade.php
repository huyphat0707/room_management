<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('after_styles')
</head>

<body>
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white" id="app">
        <!-- Header -->
        @include('layouts.includes.header')
        <!-- ./Header -->

        <!-- Sidebar -->
        @include('layouts.includes.sidebar')
        <!-- ./Sidebar -->

        <div class="h-full mb-5 md:ml-64">
            <!-- content -->
            <section>
                <div class="app-content p-3">
                    {{-- <div id="alertMessage" class="w-full mx-auto sm:px-6 lg:px-8 mb-2">
                        <x-flash::message />
                    </div> --}}
                    {{ $slot }}
                </div>
            </section>
        </div>
    </div>
</body>

@stack('after_scripts')

</html>
