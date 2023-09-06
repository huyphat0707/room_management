<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Quản lý phòng trọ</title>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/jquery-ui-1.8.13.min.js"></script>
    <script src="../../../assets/js/feather.min.js"></script>
    <script src="../../../assets/js/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../../assets/js/helper.js"></script>
    <script type="text/javascript" src="../../../assets/js/format.js"></script>
    <script type="text/javascript" src="../../../assets/js/route-api.js"></script>
    <script type="text/javascript" src="../../../assets/js/index.js"></script>
    <script type="text/javascript" src="../../../assets/js/transporter.js"></script>
    <script type="text/javascript" src="../../../assets/js/upload-image.js"></script>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="../../../assets/css/common.css" rel="stylesheet">
    <link href="../../../assets/css/block.css" rel="stylesheet">
    <style type="text/css">
        @keyframes chartjs-render-animation {
            from { opacity: 0.99; }
            to { opacity: 1; }
        }
        
        .chartjs-render-monitor {
            animation: chartjs-render-animation 0.001s;
        }
        
        /*
         * DOM element resizing detection
         * https://github.com/marcj/css-element-queries
         */
        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }
        
        .chartjs-size-monitor-expand > div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0;
        }
        
        .chartjs-size-monitor-shrink > div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0;
        }
        </style>
    @stack('after_styles')
</head>

<body>
    <div id="app_loading" class="text-center" style="padding: 40vh 10px; display: none;">
        <div class="inner-loading">
            <img style="margin: auto" src="./LOZIDO - Quản lý trọ_files/loading.gif" alt="Đang tải..." width="50px">
            <i class="loading_text" style="font-size: 13px; margin-top: -10px;">Đang tải dữ liệu...</i>
        </div>
    </div>
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

    <script type="text/javascript" src="../../../assets/js/tabulator.js"></script>
    <script type="text/javascript" src="../../../assets/js/jquery_wrapper.js"></script>
    <script type="text/javascript" src="../../../assets/js/flatpickr-4.6.9.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/month-select-4.6.9.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/vn.js"></script>
    <script type="text/javascript" src="../../../assets/js/xlsx.full.min.js"></script>

    <script type="text/javascript" src="../../../assets/js/tabulator-setting.js"></script>

    <link href="../../../assets/css/flatpickr.min.css" rel="stylesheet">
    <link href="../../../assets/css/month-select.min.css" rel="stylesheet">
    <link href="../../../assets/css/tabulator_semanticui.min.css" rel="stylesheet">
</body>

@stack('after_scripts')

</html>
