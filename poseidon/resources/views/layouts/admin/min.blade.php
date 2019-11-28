<!doctype html>
<html lang="en">
<head>
    @include('layouts.admin.partials.min.head')
</head>
<body class="hold-transition login-page">
<div id="main" class="row">
    <div class="signup-content">
        @yield('content')
    </div>
</div>

<footer class="row">
    @include('layouts.admin.partials.min.footer')
</footer>
</body>
</html>