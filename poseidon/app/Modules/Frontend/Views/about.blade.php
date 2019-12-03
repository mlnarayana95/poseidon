@extends('layouts.frontend.main')
@section('title', 'About Us')

@section('heading', 'Why Choose Us')


@section('breadcrumb')
    @parent
    <li>About Us</li>
@stop

@section('content')

<div class="container-fluid banner text-center">
  <div class="container">
    <h1>About</h1> 
  </div>
</div>  

<div class="container-fluid">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-6">
        <div class="header why-info">
          Best &amp; central location
        </div>
        <div class="why-info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img class="about-image" src="/images/location.jpg" alt="photo">
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid background-color">
  <div class="container">
    <div class="row about-rows">
      <div class="col-md-6 text-center">
        <img class="about-image" src="/images/satisfaction.jpg" alt="photo">
      </div>  
      <div class="col-md-6">
        <div class="header why-info">
          Satisfaction gauranteed
        </div>
        <div class="why-info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid white-background">
  <div class="container">
    <div class="row text-center about-rows">
      <div class="col-md-12">
        <div class="become-member">
          Become a member today
        </div>
        <button class="join shadow">Join Now</button>
      </div>
  </div>
</div> 
</div> 

<div class="container-fluid background-color">
  <div class="container testimonial-container">
    <div class="row about-rows">
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Janice D.</div>
      </div>
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Peter P.</div>

      </div>
      <div class="col-md-4">
        <blockquote>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        </blockquote>
        <div class="cite text-right">- Steve G.</div>
      </div>
    </div>
  </div>
</div>

<div class="contianer-fluid blue-background">
  <div class="container about-container">
    <div class="row about-rows">
      <div class="col-md-12">
        <div class="text-center who-we-are">Who we are</div>
        <div class="pos-desc text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      </div>  
    </div>
  </div>
</div>

<div class="container-fluid white-background">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 review">"One of the most luxurious stays we have ever experienced."
        <div>- New York Times</div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-6 col-sm-12"><img class="award" src="images/award2.png" alt="award2"></div>
      <div class="col-md-6 col-sm-12"><img class="award" src="images/award1.png" alt="award1"></div>
    </div>
  </div>
</div>  


@endsection