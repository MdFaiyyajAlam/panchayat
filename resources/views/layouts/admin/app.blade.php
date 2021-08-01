<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--favicon-->
	    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        {{-- Plugins --}}
        <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
        {{-- Notification --}}
        <link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css') }}" />
        <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
        <!-- File Manager -->
        <link href="{{ asset('assets/plugins/file-manager/file-manager.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/file-manager/file-icon.css') }}"/>
        <!-- Upload -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/file uploader/css/jquery.dm-uploader.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/plugins/file uploader/css/styles.css') }}"/>
        {{-- Data Table --}}
        <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
        <!-- Datetimepicker css -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
        <!-- iCheck js -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/skins/all.css') }}">
        <!-- loader-->
        <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/js/pace.min.js') }}" defer></script>
        <!-- Input tags -->
        <link href="{{ asset('assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
        <!-- Color picker -->
        <link href="{{ asset('assets/plugins/colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">

        @livewireStyles

        <!-- Scripts -->
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
        
        <style>
            body{
                font-family:'Nunito';
            }
        </style>
    </head>
    <body>
        <!--wrapper-->
	    <div class="wrapper">
            @livewire('admin.sidebar')
            @livewire('admin.header')
            @yield('main')
            @livewire('admin.footer')
        </div>

        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquerycookie/cookie.js') }}"></script>
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <!--notification js -->
        <script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
        <!-- iCheck js -->
        <script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
        {{-- file manager --}}
        <script src="{{ asset('assets/plugins/file-manager/file-manager.js') }}"></script>        
        {{-- file uploader --}}
        <script src="{{ asset('assets/plugins/file uploader/js/jquery.dm-uploader.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/file uploader/js/ui.js') }}"></script>
        {{-- dataTable --}}
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
        <!-- Datetime Picker js -->
        <script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/index.js') }}"></script> --}}
        <!-- Inputs tags -->
        <script src="{{ asset('assets/plugins/input-tags/js/tagsinput.js') }}"></script>
        <!-- Color picker -->
        <script src="{{ asset('assets/plugins/colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
        <!--app JS-->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('js/admin-custom.js') }}"></script>
        <script src="{{ asset('js/post-type.js') }}"></script>
        <!--tinyMCE-->
        <script src="{{ mix('js/tinymce.js') }}"></script>
        
        @stack('js')
        {{-- Notification --}}
        <script>
            @if (session()->has('success'))
                round_success_noti("{{session()->get('success')}}");
            @endif
            @if (session()->has('error'))
                round_error_noti("{{session()->get('error')}}");
            @endif
            @if (session()->has('information'))
                round_info_noti("{{session()->get('information')}}");
            @endif
            @if (session()->has('warning'))
                round_warning_noti("{{session()->get('warning')}}");
            @endif

            // Activate iCheck Plugin
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });
        </script>
        
        @livewireScripts
    </body>
</html>
