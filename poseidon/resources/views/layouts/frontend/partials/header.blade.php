<header>
    <!-- Utility Bar Starts -->
    <div class="bc-gray">
        <div class="container">
            <div class="navs">
                <ul class="nav justify-content-end">
                    @guest()
                        <li class="nav-item">
                            <a class="nav-link active" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" href="/profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile/bookings">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="" target="_blank" href="{{ setting('facebook') }}">
                            <img src="/images/fbook.png" alt="fbook">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" target="_blank" href="{{ setting('twitter') }}">
                            <img src="/images/twitter.png" alt="twitter">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" target="_blank" href="{{ setting('instagram') }}">
                            <img src="/images/insta.png" alt="insta">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utility Bar Ends -->

    <!-- main navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="/" class="navbar-brand">
                <img src="/images/logo.png" alt="logo">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between"
                 id="navbarCollapse">

                <div class="navbar-nav ml-auto">
                    <a class="nav-link nav-item active" href="/">Home</a>
                    <a class="nav-link nav-item" href="/about">About Us</a>
                    <a class="nav-link nav-item" href="/room">Rooms</a>
                    <a class="nav-link nav-item" href="/hotels">Hotels</a>
                    <a class="nav-link nav-item" href="/contact">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- main navbar ends -->
</header>