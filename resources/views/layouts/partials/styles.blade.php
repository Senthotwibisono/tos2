<!-- Fonts -->
{{--
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
--}}

<!-- Vendors -->
{{--
<link rel="stylesheet" href="{{ asset('/dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/dist/assets/extensions/bootstrap-icons/font/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">
--}}
<link rel="stylesheet" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('/dist/assets/extensions/bootstrap-icons/font//bootstrap-icons.css') }}">

<!-- Styles -->
{{--<link rel="stylesheet" href="{{ mix('dist/assets/css/bootstrap.css') }}">--}}
{{--<link rel="stylesheet" href="{{ asset('dist/assets/css/main/bootstrap.css') }}">--}}
<link rel="stylesheet" href="{{ asset('/dist/assets/css/main2/app.css') }}">
<link rel="stylesheet" href="{{ asset('/dist/assets/css/main2/app-dark.css') }}">
<link rel="shortcut icon" href="{{ asset('/dist/assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('/dist/assets/images/logo/favicon.png') }}" type="image/png">

{{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}

<link rel="stylesheet" href="{{ asset('/fontawesome/css/all.min.css') }}">

<!-- custom_style -->
@yield('custom_style')