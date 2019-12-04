@extends('layouts.frontend.main')

@section('style')
       body {
            color: #717171;
            font-size: 14px;
        }

        .container-fluid {
            padding: 0;
        }

        .container {
            font-family: 'Poppins', sans-serif;
        }

        ul.nav {
            margin-right: 20px;
        }

        ul.nav li:first-child {
            border-right: 1px solid #333;
        }

        nav.navbar {
            background: rgba(255, 255, 255, .7) !important;
            padding: 20px 0;
        }

        div.navbar-nav {
            font-family: 'Josefin Sans', sans-serif;
        }

        .navs .nav-item a {
            color: #575757;
        }

        .navs .nav-item img {
            padding: 2px;
        }

        .navbar-light .navbar-nav .nav-link,
        .navbar-light .navbar-nav .active > .nav-link {
            color: #F68500;
            font-size: 1.25em;
        }

        div#carouselExampleControls {
            position: relative;
        }

        div#carouselExampleControls form {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, .75);
            color: #fff;
            padding: 20px 0;
        }

        button#search {
            background-color: #f68500;
            border: none;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #F68500;
            padding: 40px 0;
        }

        .bc-gray {
            background-color: #fafafa;
            /*padding-bottom: 40px;*/
        }

     

        .fa, .fas, .choose-us-icon i {
            color: #209ebb;
        }


        /* Krita */

        header {
            -webkit-box-shadow: 0 10px 6px -6px #ccc;
            -moz-box-shadow: 0 10px 6px -6px #ccc;
            box-shadow: 0 10px 6px -6px #ccc;
            margin-bottom: 6px;
        }

        .title-div {
            background-color: #FAFAFA;
            height: 90px;
            line-height: 80px;
            margin-bottom: 20px;
        }

        .content-header {
            width: 100%;
        }

        .title {
            font-family: 'Josefin Sans', sans-serif;
            margin: 12px 0;
            font-size: 1.5em;
            color: #f68500;
        }


        .text-orange {
            color: #F68500;
        }

        .pull-right {
            float: right;
        }

        h1, h3{
            text-align: center;
        }

        h1{
            color: orange;
        }

         h2{
            color: orange;
        }


        .container{
            padding:30px;
        }

        form{
            text-align: center;
            width: 100%;
        }

        .search input[type="search"] {
            border: 1px solid #ddd;
            box-sizing: border-box;
            color: #999;
            height: 40px;
            padding: 20px;
            width: 100%;
        }

.btn-link {
    font-weight: 500;
    color: white;
    border-radius: 0;
    width: 100%;
    height: 90px;

}

a {
    color: orange;
    text-decoration: none;
}

.accordion>.card .card-header {
    margin: -13px;
    padding: 0px;

}

    .hero-inner{
        width: 960px;
        margin: 0 auto;
    }

@endsection

@section('content')
 <div class="container">
    
    <h2>Find what you're looking for by conducting a search</h2>
    <form role="search" class="search search-full" data-search="" data-instant="true" autocomplete="off" action="/hc/en-us/search" accept-charset="UTF-8" method="get">
        <input name="utf8" type="hidden" value="&#x2713;" />
    <div class="row">
        <div class="col-md-12">
            <input type="search" name="query" id="query" placeholder="Search" autocomplete="off" aria-label="Search" />
        </div>
    </div>
    </form>
    
  </div>
  <div class="container">
<div class="accordion" id="accordion">
  <!-- <div class="card">
    <div class="card-header" id="headingOne">
     
        <button class="btn btn-link  type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Why do customers choose Poseidon? 
        </button>
    
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       
<p>Customers choose us for our unbeatable locations, because at Iberostar, you'll be right on the seafront, in the heart of the city or in the midst of the finest architecture. They choose us for the quality of our cuisine, in which we combine traditional recipes with new concepts, using only the finest quality ingredients. We take care of every detail, creating a unique experience and providing excellent service in all of our hotels. And all of this with a commitment to the future, since sustainability is the basis of our business philosophy. </p>
      </div>
    </div>
  </div> -->
  <div class="card">
    <div class="card-header" id="headingOne">
      
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Why do customers choose Poseidon?
        </button>
    
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <p>Customers choose us for our unbeatable locations, because at Iberostar, you'll be right on the seafront, in the heart of the city or in the midst of the finest architecture. They choose us for the quality of our cuisine, in which we combine traditional recipes with new concepts, using only the finest quality ingredients. We take care of every detail, creating a unique experience and providing excellent service in all of our hotels. And all of this with a commitment to the future, since sustainability is the basis of our business philosophy. </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         What are the check-in and check-out times at the hotel?
        </button>
    
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       <p>The usual time for arriving at the hotel and having access to your room is from 14:00, but in some cases this can vary. If your estimated time of arrival is earlier, please do not hesitate to request early check-in, so you can access your room earlier than the time established (service subject to availability). 
 
Check-out is before midday, but if you want to extend your stay as long as possible, you can request late check-out and stay in your room longer. Don't forget to ask about this service at the hotel as it is subject to availability and there may be an additional charge.</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
     
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          My search hasn't produced any results. What should I do? 
        </button>
      
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       <p>If there is no availability, the hotel requires a minimum number of nights for your dates or you exceed the maximum occupation per room. Please contact our customer service. Our advisers will make a note of your request and do all they can to help you. <a class="mobile-call-center view-phones" data-remote="true" href="#" rel="nofollow" target="_blank">Contact us</a>
       </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
     
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          How can I modify or cancel my booking? 
        </button>
   
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        <p>
            If you're registered with My Poseidon, you can access this easily via the My Bookings section.

If you still haven't signed up, you can access this from the Manage Booking option on the website main menu. You will need your booking reference to hand and the email address you entered when you booked, or the email, hotel and check-in date. 

And of course, you can <a class="mobile-call-center view-phones" data-remote="true" href="#" rel="nofollow" target="_blank">contact</a> our customer service team free of charge and an Poseidon adviser will help you with your booking.
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
     
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         I can't decide which room to choose. 
        </button>
    
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        <p>
            On Poseidon.com, we provide a room comparison tool to help you pick the most suitable room for your needs. You can access this from either the hotel information page or during the booking process.

And if you're still having trouble choosing, you can contact our customer service team.
     <a class="mobile-call-center view-phones" data-remote="true" href="#" rel="nofollow" target="_blank">Contact us</a>
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
    
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
       I can't decide which rate to choose.  
        </button>
   
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        <p>
           On Poseidon.com, we offer various types of rate to suit your needs: with an additional discount, without advance payment, with free changes and cancellations, etc.

 

Once you've chosen your hotel, dates of your stay, number of rooms and guests, you can find the conditions of each rate by clicking on View Conditions of Rate. 

 

Or if you prefer, you can <a class="mobile-call-center view-phones" data-remote="true" href="#" rel="nofollow" target="_blank">contact</a> our customer service team free of charge and an Poseidon adviser will help you to choose the most suitable rate for you.
        </p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSeven">
    
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        I can't decide between two or more hotels. 
        </button>
    
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">
        <p>
           If you're having trouble choosing between several of our hotels, you can use the comparison tool on iberostar.com to view their specific features and make the right choice for your stay. Or if you prefer, <a class="mobile-call-center view-phones" data-remote="true" href="#" rel="nofollow" target="_blank">contact</a> our customer service team, where a specialist will help you choose the best hotel for your holiday.
        </p>
      </div>
    </div>
  </div>
</div>
</div>

@endsection