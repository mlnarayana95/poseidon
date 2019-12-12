@extends('layouts.frontend.main')

@section('style')
  

    .faq-container{
      padding:30px;
    }

    .btn-link {
      font-weight: 500;
      color: #fff;
      border-radius: 0;
      width: 100%;
      height: 90px;
    }
    
    #faq-page .btn{
      text-decoration: none;
      color: #fff;
    }

    #faq-page a{
      color: orange;
      text-decoration: none;
    }
    
    .accordion{
      margin-top: 20px;
    }

    .accordion>.card .card-header {
      margin: -13px;
      padding: 0px;
    }


@endsection

@section('content')
<div id="faq-page">
    <div class="container faq-container">
      <h1>Frequently Asked Questions</h1>
        <div class="accordion" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Why do customers choose Poseidon?
                    </button>

                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>Customers choose us for our unbeatable locations, because at Iberostar, you'll be right on
                            the seafront, in the heart of the city or in the midst of the finest architecture. They
                            choose us for the quality of our cuisine, in which we combine traditional recipes with new
                            concepts, using only the finest quality ingredients. We take care of every detail, creating
                            a unique experience and providing excellent service in all of our hotels. And all of this
                            with a commitment to the future, since sustainability is the basis of our business
                            philosophy. </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the check-in and check-out times at the hotel?
                    </button>

                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>The usual time for arriving at the hotel and having access to your room is from 14:00, but in
                            some cases this can vary. If your estimated time of arrival is earlier, please do not
                            hesitate to request early check-in, so you can access your room earlier than the time
                            established (service subject to availability).

                            Check-out is before midday, but if you want to extend your stay as long as possible, you can
                            request late check-out and stay in your room longer. Don't forget to ask about this service
                            at the hotel as it is subject to availability and there may be an additional charge.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        My search hasn't produced any results. What should I do?
                    </button>

                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p>If there is no availability, the hotel requires a minimum number of nights for your dates or
                            you exceed the maximum occupation per room. Please contact our customer service. Our
                            advisers will make a note of your request and do all they can to help you. <a
                                    class="mobile-call-center view-phones" data-remote="true" href="/contact" rel="nofollow"
                                    target="_blank">Contact us</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I modify or cancel my booking?
                    </button>

                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            If you're registered with My Poseidon, you can access this easily via the My Bookings
                            section.

                            If you still haven't signed up, you can access this from the Manage Booking option on the
                            website main menu. You will need your booking reference to hand and the email address you
                            entered when you booked, or the email, hotel and check-in date.

                            And of course, you can <a class="mobile-call-center view-phones" data-remote="true" href="/contact"
                                                      rel="nofollow" target="_blank">contact</a> our customer service
                            team free of charge and an Poseidon adviser will help you with your booking.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        I can't decide which room to choose.
                    </button>

                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            On Poseidon.com, we provide a room comparison tool to help you pick the most suitable room
                            for your needs. You can access this from either the hotel information page or during the
                            booking process.

                            And if you're still having trouble choosing, you can contact our customer service team.
                            <a class="mobile-call-center view-phones" data-remote="true" href="/contact" rel="nofollow"
                               target="_blank">Contact us</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        I can't decide which rate to choose.
                    </button>

                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            On Poseidon.com, we offer various types of rate to suit your needs: with an additional
                            discount, without advance payment, with free changes and cancellations, etc.


                            Once you've chosen your hotel, dates of your stay, number of rooms and guests, you can find
                            the conditions of each rate by clicking on View Conditions of Rate.


                            Or if you prefer, you can <a class="mobile-call-center view-phones" data-remote="true"
                                                         href="/contact" rel="nofollow" target="_blank">contact</a> our
                            customer service team free of charge and an Poseidon adviser will help you to choose the
                            most suitable rate for you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">

                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        I can't decide between two or more hotels.
                    </button>

                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            If you're having trouble choosing between several of our hotels, you can use the comparison
                            tool on iberostar.com to view their specific features and make the right choice for your
                            stay. Or if you prefer, <a class="mobile-call-center view-phones" data-remote="true"
                                                       href="/contact" rel="nofollow" target="_blank">contact</a> our customer
                            service team, where a specialist will help you choose the best hotel for your holiday.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection