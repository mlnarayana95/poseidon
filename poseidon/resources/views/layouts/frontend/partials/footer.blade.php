<footer>

    <div class="container-fluid footer">
        <div class="container">
            <div class="row footer-row">
                <div class='col-md-5 mx-auto'>
                    <img class="footer-image" src="/images/foot_logo.png"
                         alt="footer logo">
                    <div>
                        <span>Poseidon Hotels & Resorts is a hotel chain with more than 120 four- and five-star hotels, located in the most popular holiday destinations in South America.</span>
                    </div>
                    <div class="social-footer">
                        <a href="{{ setting('facebook') }}"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="{{ setting('instagram') }}"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="{{ setting('twitter') }}"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
                <div class='col-md-4 mx-auto'>
                    <div class="foot-header">Quick Links</div>
                    <div>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/hotels">Hotel</a></li>
                            <li><a href="/room">Rooms</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/faq">FAQs</a></li>
                        </ul>
                    </div>

                </div>
                <div class='col-md-3 mx-auto'>
                    <div class="foot-header">Contact Us</div>
                    <div class="contact-info">
                        <ul>
                            <li><i class="fas fa-map-marker-alt fa-lg"></i> 72
                                Fake Address<br/>
                                Winnipeg, MB<br/>
                                Canada
                            </li>
                            <li><i class="fas fa-phone-alt fa-lg"></i><a href="tel:713-992-0916">(204) 847
                                - 7264</a>
                            </li>
                            <li><i class="fas fa-envelope fa-lg"></i>
                              <a href="mailto:contact@poseidon.com" target="_blank">contact@poseidon.com</a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid copy-container">
        <div class="container copy">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span>Copyright &copy; All rights reserved | Poseidon Hotels and Travel</span>
                </div>
            </div>
        </div>
    </div>

</footer>


<!--jQuery -->
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- Custom JS -->
@yield('scripts')