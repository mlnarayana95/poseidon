<head>
    <meta charset="utf-8"/>
    <!-- Set the viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}">
    <title>Poseidon {{ $title ?? '' }}</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/58d8ede058.js"
            crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans%7cPoppins:400,600&display=swap"
          rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>

    <!-- Additional Page Specific CSS-->
    @yield('stylelink')

    <style type="text/css">
      @yield('style')      
    </style>

</head>