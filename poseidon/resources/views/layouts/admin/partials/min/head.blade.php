<meta charset="UTF-8">
<title>Consultancy Database @yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="{{ asset('assets/css/AdminLTE.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css"/>

{{-- Load Essential JS --}}
<script src="{{ asset('assets/plugins/jQuery/jQuery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<script>
    var appUrl = "{{ url('/') }}";
</script>